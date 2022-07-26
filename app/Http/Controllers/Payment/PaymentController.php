<?php

namespace App\Http\Controllers\Payment;

use App\Http\Controllers\Controller;
use App\Models\Card;
use App\Models\Credit;
use App\Models\LidataUserModel;
use App\Models\PurchasePlan;
use Barryvdh\DomPDF\Facade\Pdf;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Mail;
use Session;
use Stripe;
use Stripe\Token;
use Exception;
use Victorybiz\LaravelCryptoPaymentGateway\LaravelCryptoPaymentGateway;

class PaymentController extends Controller
{
    public function callback(Request $request)
    {
        return LaravelCryptoPaymentGateway::callback();
    }

    protected $newUser;
    protected static $user;
    protected static $card;
    /*
     * success response method.
     *
     * @return \Illuminate\Http\Response
     */
    /*public function stripe()
    {
        return view('stripe');
    }*/

    /**
     * success response method.
     *
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View|\Illuminate\Http\RedirectResponse|\Illuminate\Http\Response
     */
    public function stripeAccess(Request $request)
    {
        $data = Card::where('userId', Auth::user()->id)->first();
        if($data)
        {
            try {
                Stripe\Stripe::setApiKey(env('STRIPE_SECRET'));
                $stripeToken = Token::create(array(
                    "card" => array(
                        "number"    =>$data->creditCardNumber,
                        "exp_month" =>intval(str_before($data->expirationDate, '/')),
                        "exp_year"  =>intval(str_after($data->expirationDate, '/')),
                        "cvc"       => $data->cvc,
                        "name"      => $data->firstName . " " . $data->lastName
                    )
                ));

                Stripe\Charge::create ([
                    "amount" => ($request->price) * 100,
                    "currency" => "usd",
                    "source" => $stripeToken,
                    "description" => "This payment is tested purpose phpcodingstuff.com"
                ]);
                PurchasePlan::createNewOne($request);
                Credit::updateCredit($request);
                LidataUserModel::updatePlanAndCredit($request);


                self::invoice($request);


                Session::flash('success', 'Payment successful!');
                return redirect('/settings/plans');

            }catch (Exception $e){
                dd($e);
                return redirect('/settings/billing')->with('message', $e->getMessage());
            }

        }
        else
        {
            $data = Card::where('userId', Auth::user()->id)->get();
            return view('userDashboard.settings.plans.billing',['userCardInfo' => $data,'amount'=>$request]);
        }

    }
    public static function invoice($request)
    {
        self::$user = LidataUserModel::where('id',Auth::user()->id)->get();
        self::$card = Card::where('userId', Auth::user()->id)->first();
        foreach (self::$user as $userInfo){
            $data["name"] = $userInfo->firstName.' '.$userInfo->lastName;
            $data["email"] = $userInfo->email;
            $data["country"]= $userInfo->country;
            $data["date"]= Carbon::now()->toString();
            $data["paidBy"]= $request->paidBy;
            $data["amount"]= $request->price;
            $data["credit"]= $request->credit;
            $data["phoneNumber"]= $request->phoneNumber;
            $data["dataFilter"]= $request->dataFilter;
            $data["csvExport"]= $request->csvExport;


            $data["total"]= $request->price;
        }

        if (self::$card)
        {
            $data["address"]= self::$card->address;
            $data["city"]= self::$card->city;
            $data["state"]= self::$card->state;
        }



        $data["title"] = "From phonelist.io";
        $data["body"] = "This is Demo";

        $pdf = PDF::loadView('myTestMail', $data)->setOptions(['defaultFont' => 'sans-serif']);

        Mail::send('myTestMail', $data, function($message)use($data, $pdf) {
            $message->to($data["email"])
                ->subject($data["title"])
                ->attachData($pdf->output(), "invoice.pdf");
        });
    }
}
