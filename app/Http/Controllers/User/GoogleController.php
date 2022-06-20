<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use App\Models\LidataUserModel;
use Exception;
use Illuminate\Support\Facades\Auth;
use Laravel\Socialite\Facades\Socialite;

class GoogleController extends Controller
{
    CONST DRIVER_TYPE = 'google';
    public function handleGoogleRedirect()
    {
        return Socialite::driver('google')->redirect();
    }

    public function handleGoogleCallback()
    {
        try {

            $user = Socialite::driver('google')->user();

            $userExisted = LidataUserModel::where('google_id', $user->id)->first();

            if( $userExisted ) {

                $saveUser = LidataUserModel::where('email', $user->email)->first();


                //return redirect('loggedInUser');

            }else {
                return view('user.userGoogleRegister', ['newUserData'=>$user]);
            }
            Auth::loginUsingId($saveUser->id);
            return redirect('loggedInUser');



        } catch (Exception $e) {
            dd($e);
        }

    }
    public function handleGoogleCallbackRegister()
    {
        return view('user.userGoogleRegister');
    }
}
