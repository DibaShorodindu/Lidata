<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use App\Models\Card;
use App\Models\Contact;
use App\Imports\ContactImport;
use App\Models\PhoneList;
use App\Models\PhoneListUserModel;
use App\Models\PurchasePlan;
use App\Models\Credit;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Hash;
use Illuminate\Support\Facades\DB;
use App\Models\Lidata;
use Session;
use Storage;
use Excel;
use App\Models\CreditHistory;
use App\Models\ExportHistori;
use Illuminate\Support\Facades\Auth;
use Symfony\Component\Console\Input\Input;

class UserController extends Controller
{
    protected $email;
    protected $password;
    protected $emailAuth;
    protected $passwordAuth;
    protected $data;
    protected $id;
    protected $user;
    protected $allData;


    public function dashboard()
    {
        if(Auth::check()){
            return view('userDashboard.userDashboard');
        }
        return redirect('/phonelistUserLogin')->with('message','Oppes! You have entered invalid credentials');

    }
    /**
     * Write code on Method
     *
     * @return response()
     */

    public function userRegister()
    {
        return view('user.userRegister');
    }


    public function newUser(Request $request)
    {
        $data = $request->all();
        $validator = \Validator::make($request->all(), [
            'email' => 'required|email|unique:phone_list_user_models,email',
            'password' => 'required',
            'firstName' => 'required',
            'lastName' => 'required',
            'phone'=>'required|min:11|numeric|unique:phone_list_user_models',
            'country' => 'required',
        ]);
        if ($validator->fails()) {
            //$errors = $validator->errors();
            return redirect()->back()->with('message1', 'The email or phone number has already been taken');
        } 
        
        else {
            $check = $this->create($data);
            $newUser = PhoneListUserModel::where('email', $data['email'])->first();
            PurchasePlan::create($newUser);
            // return $newUser;
            Credit::create([
                'userId' => $newUser->id,
                'useableCredit' => 50,
            ]);  
           
            return redirect("loggedInUser")->with('message2', 'data Updated Successfully');
        }
    }
    /**
     * Write code on Method
     *
     * @return response()
     */
    public function create(array $data)
    {
        return PhoneListUserModel::create([
            'email' => $data['email'],
            'password' => Hash::make($data['password']),
            'firstName' => $data['firstName'],
            'lastName' => $data['lastName'],
            'name' => $data['firstName'].' '.$data['lastName'],
            'phone' => $data['phone'],
            'country' => $data['country'],
        ]);
    }


    /** start updating user information*/
    public function updateUserFirstName(Request $request, $id)
    {
        $this->user = PhoneListUserModel::where('id', $id)->update(['firstName' => $request->firstName]);
        return redirect()->back();

    }
    public function updateUserLastName(Request $request, $id)
    {
        $this->user = PhoneListUserModel::where('id', $id)->update(['lastName' => $request->lastName]);
        return redirect()->back();

    }
    public function updateUserPhone(Request $request, $id)
    {
        $this->user = PhoneListUserModel::where('id', $id)->update(['phone' => $request->phone]);
        return redirect()->back();

    }
    public function updateUserCountry(Request $request, $id)
    {
        $this->user = PhoneListUserModel::where('id', $id)->update(['country' => $request->country]);
        return redirect()->back();
    }
    public function updateUserEmail(Request $request, $id)
    {
        $this->user = PhoneListUserModel::where('id', $id)->update(['email' => $request->email]);
        return redirect()->back();

    }
    public function updateUserPassword(Request $request, $id)
    {
        $request->user()->fill([
            'password' => Hash::make($request->password)
        ])->save();
        return redirect()->back();

    }
    public function updateUserInfo()
    {
        dd(Request('id'));

        $id = Request('id');
        $option = PhoneListUserModel::where('id', $id)->first();
        $option->fristName = Request('fristName');
        $option->lastName = Request('lastName');
        //$option->phone = $this->user['phone'];
        //$option->country = $this->user['country'];
        //$option->update();
        /*$this->user = PhoneListUserModel::where('id', $id)->update(['country' => $request->country]);*/
        return redirect()->back();

    }
    /** end updating user information*/

  

    public function userLogin()
    {
        return view('user.userLogin');
    }
    public function userLoginAuth(Request $request)
    {
        return view('user.userLogin');
    }

    /*
     * Write code on Method
     *
     * @return response()
     */
    public function userAuth(Request $request)
    {
        $request->validate([
            'email' => 'required',
            'password' => 'required',
        ]);

        $credentials = $request->only('email', 'password');
        if (Auth::attempt($credentials)) {
            $result = $request->email;
            $this->data = PhoneListUserModel::where('email', 'LIKE', $result. '%'  )->get();
            return redirect('loggedInUser')
                ->with( ['userData' => $this->data] )
                ->withSuccess('You have Successfully loggedin');
        }

        return redirect("/phonelistUserLogin")->with('message','Oppes! You have entered invalid credentials');


    }

    public function handleGoogleRegister($userArray)
    {
        $this->data = $userArray;
        return view('user.', ['newUserData'=>$this->data]);
    }

    public function people()
    {
        $this->allData = lidata::paginate(15);
        return view('userDashboard.people', ['allData' => $this->allData]);
    }
    public function peopleSearch(Request $request)
    {
        $result = $request->name;
        $this->allData = DB::table('lidata')
        ->where('person_name', 'like', '%'.$result.'%')
            ->paginate(15);
        return view('userDashboard.peopleSearch', ['allData' => $this->allData,'searchHistory' => $result]);
    }
    public function genderSearch(Request $request)
    {
        $result = $request->gender;
        $this->allData = DB::table('lidata')
            ->where('person_title', 'like','%'.$result.'%')
            ->paginate(15);

        return view('userDashboard.genderSearch', ['allData' => $this->allData,'searchHistory' => $result]);
    }

    public function relationshipSearch(Request $request)
    {
        $result = $request->relationship;
        $this->allData = DB::table('lidata')
            ->where('organization_name', 'like','%'.$result.'%')
            ->paginate(15);

        return view('userDashboard.genderSearch', ['allData' => $this->allData,'searchHistory' => $result]);
    }
    public function locationSearch(Request $request)
    {
        $result = $request->location;
        $this->allData = DB::table('lidata')
            ->where('person_location_city', 'like','%'.$result.'%')
            ->paginate(15);

        return view('userDashboard.genderSearch', ['allData' => $this->allData,'searchHistory' => $result]);
    }
    public function hometownSearch(Request $request)
    {
        $result = $request->town;
        $this->allData = DB::table('lidata')
            ->where('person_location_state', 'like','%' .$result.'%')
            ->paginate(15);

        return view('userDashboard.genderSearch', ['allData' => $this->allData,'searchHistory' => $result]);
    }
    public function countrySearch(Request $request)
    {
        $result = $request->country;
        $this->allData = DB::table('lidata')
            ->where('person_location_country', 'like','%' .$result.'%')
            ->paginate(15);

        return view('userDashboard.genderSearch', ['allData' => $this->allData,'searchHistory' => $result]);
    }
    public function industrySearch(Request $request)
    {
        $result = $request->industry;
        $this->allData = DB::table('lidata')
            ->where('organization_industries', 'like','%' .$result.'%')
            ->paginate(15);

        return view('userDashboard.genderSearch', ['allData' => $this->allData,'searchHistory' => $result]);
    }


    // company controller

    public function company()
    {
        $this->allData = lidata::paginate(15);
        return view('userDashboard.company', ['allData' => $this->allData]);
    }

    public function companySearch(Request $request)
    {
        $result = $request->name;
        $this->allData = DB::table('lidata')
            ->where('organization_name', 'like','%'.$result.'%')
            ->paginate(15);
        return view('userDashboard.companySearch', ['allData' => $this->allData,'searchHistory' => $result]);
    }

    public function citySearch(Request $request)
    {
        $result = $request->city;
        $this->allData = DB::table('lidata')
            ->where('organization_hq_location_city', 'like','%' .$result.'%')
            ->paginate(15);

        return view('userDashboard.citySearch', ['allData' => $this->allData,'searchHistory' => $result]);
    }

    public function stateSearch(Request $request)
    {
        $result = $request->hometown;
        $this->allData = DB::table('lidata')
            ->where('organization_hq_location_state', 'like','%' .$result.'%')
            ->paginate(15);

        return view('userDashboard.companySearch', ['allData' => $this->allData,'searchHistory' => $result]);
    }

    public function country_companySearch(Request $request)
    {
        $result = $request->country;
        $this->allData = DB::table('lidata')
            ->where('organization_hq_location_country', 'like','%' .$result.'%')
            ->paginate(15);

        return view('userDashboard.companySearch', ['allData' => $this->allData,'searchHistory' => $result]);
    }

    public function industry_companySearch(Request $request)
    {
        $result = $request->industry;
        $this->allData = DB::table('lidata')
            ->where('organization_industries', 'like','%' .$result.'%')
            ->paginate(15);

        return view('userDashboard.companySearch', ['allData' => $this->allData,'searchHistory' => $result
    ]);
    }



    public function account()
    {
        return view('userDashboard.settings.account');
    }

    public function managePlan()
    {
        //  return (Auth::user()->id);
        $data = PurchasePlan::where('userId', Auth::user()->id)->get();

        $this->credit = Credit::where('userId', Auth::user()->id)->first();
        $items[0] = $data->last()->plan;
        $items[1] = $this->credit->useableCredit;
        $items[2] = $this->credit->useableCredit;
        // return $items[2] ;
        $items[3] = $data->last()->price;

        $monthName = Carbon::now()->subMonth()->format('M');
        if (Carbon::now()->format('M') == 'Jan')
        {
            $year = Carbon::now()->subYear()->format('Y');
        }
        else
        {
            $year = Carbon::now()->format('Y');
        }
        $day = Carbon::now()->subDays(30)->format('d');
        $items[4] = $monthName; $items[5] = $year; $items[6] = $day;
        //$date2 = Carbon::createFromFormat('Y-m-d', $data->last()->end);
        $monthName2 = Carbon::now()->format('M');
        $day2 = Carbon::now()->format('d');
        $items[7] = $monthName2; $items[8] = $day2; $items[9] = Carbon::now()->format('Y');

        $from = Carbon::now()->subDays(30)->format('Y-m-d');
        $to = Carbon::now()->format('Y-m-d');

        $this->creditHistory = CreditHistory::whereBetween('date', [$from, $to])->get();
        $items[10] = 0;
        $items[11] = $this->credit->useableCredit;
        foreach ($this->creditHistory as $credithistory)
        {
            $items[10]= $items[10]+$credithistory->usedCredit;
        }

        return view('userDashboard.settings.plans.managePlan', ['userPurchasePlan' => $items]);
    }




    public function billing(Request $request)
    {
        $data = Card::where('userId', $request->userId)->get();
        return view('userDashboard.settings.plans.billing', ['userCardInfo' => $data]);
    }




    public function exports()
    {
       $data = ExportHistori::where('userId',Auth::user()->id)->orderBy('createdOn', 'desc')->paginate(6);
    //    return $data;
        return view('userDashboard.settings.imports&exports.exports', ['exportHistory' => $data]);
    }
    public function reDownloadFile($file_name)
    {
        $data = ExportHistori::find($file_name);
    //   return $file_name;
        return response()->download('storage/'. $data->file,'phonelist.xlsx');
     
            // return download('storage/'. $data->file,'phonelist.xlsx');
    }
    public function csvExportSettings()
    {
        return view('userDashboard.settings.imports&exports.csv-export-settings');
    }
   
    public function current()
    {
        $this->credit = Credit::where('userId', Auth::user()->id)->first();
        $monthName = Carbon::now()->subMonth()->format('M');
        if (Carbon::now()->format('M') == 'Jan')
        {
            $year = Carbon::now()->subYear()->format('Y');
        }
        else
        {
            $year = Carbon::now()->format('Y');
        }
        $day = Carbon::now()->subDays(30)->format('d');
        $items[1] = $monthName; $items[2] = $year; $items[3] = $day;
        $monthName2 = Carbon::now()->format('M');
        $day2 = Carbon::now()->format('d');
        $items[4] = $monthName2; $items[5] = $day2; $items[6] = Carbon::now()->format('Y');

        $from = Carbon::now()->subDays(30)->format('Y-m-d');
        $to = Carbon::now()->format('Y-m-d');

        $this->creditHistory = CreditHistory::whereBetween('date', [$from, $to])->get();
        $items[7] = 0;
        $items[8] = $this->credit->useableCredit;
        foreach ($this->creditHistory as $credithistory)
        {
            $items[7]= $items[7]+$credithistory->usedCredit;
        }

        return view('userDashboard.settings.credits.current', ['userPurchasePlan' => $items]);
    }
    public function history()
    {
        //$this->creditHistory = ExportHistori::where('userId', Auth::user()->id)->get();
        //dd($this->creditHistory);
        $this->credit = Credit::where('userId', Auth::user()->id)->first();
        $monthName = Carbon::now()->subMonth()->format('M');
        if (Carbon::now()->format('M') == 'Jan')
        {
            $year = Carbon::now()->subYear()->format('Y');
        }
        else
        {
            $year = Carbon::now()->format('Y');
        }
        $day = Carbon::now()->subDays(30)->format('d');
        $items[1] = $monthName; $items[2] = $year; $items[3] = $day;
        $monthName2 = Carbon::now()->format('M');
        $day2 = Carbon::now()->format('d');
        $items[4] = $monthName2; $items[5] = $day2; $items[6] = Carbon::now()->format('Y');

        $from = Carbon::now()->subDays(30)->format('Y-m-d');
        $to = Carbon::now()->format('Y-m-d');

        $this->creditHistory = CreditHistory::whereBetween('date', [$from, $to])->get();
        $items[7] = 0;
        $items[8] = $this->credit->useableCredit;
        foreach ($this->creditHistory as $credithistory)
        {
            $items[7]= $items[7]+$credithistory->usedCredit;
        }
        return view('userDashboard.settings.credits.history', ['userPurchasePlan' => $items]);
    }

    public function accounts()
    {
        return view('userDashboard.settings.imports&exports.accounts');
    }
    public function contacts()
    {
        return view('userDashboard.settings.imports&exports.contacts');
    }
    public function contactimport(Request $Request){
        excel::contactimport(new ContactImport,$Request->file);
        return "Record are imported successfully!";
    }

    public function upgradeUser()
    {
        return view('userDashboard.settings.upgrade');
    }

    /**
     * Write code on Method
     *
     * @return response()
     */
    public function logout() {
        Session::flush();
        Auth::logout();

        return Redirect('/');
    }
}
