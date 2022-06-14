<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use App\Models\LidataUserModel;
use App\Models\User;
use Exception;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Laravel\Jetstream\Events\AddingTeam;
use Laravel\Socialite\Facades\Socialite;

class GoogleController extends Controller
{
    CONST DRIVER_TYPE = 'google';
    public function handleGoogleRedirect()
    {
        return Socialite::driver(static::DRIVER_TYPE)->redirect();
    }

    public function handleGoogleCallback()
    {
        try {

            $user = Socialite::driver(static::DRIVER_TYPE)->user();

            $userExisted = LidataUserModel::where('email', $user->email)->first();

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
