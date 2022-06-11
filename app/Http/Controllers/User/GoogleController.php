<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use App\Models\PhoneListUserModel;
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
        //echo 'hello';
        //return redirect()->route('/');
        try {

            $user = Socialite::driver(static::DRIVER_TYPE)->user();

            $userExisted = PhoneListUserModel::where('email', $user->email)->first();

            if( $userExisted ) {

                return redirect()->route('loggedInUser');

            }else {
                return view('user.userGoogleRegister', ['newUserData'=>$user]);
            }


        } catch (Exception $e) {
            dd($e);
        }

    }
    public function handleGoogleCallbackRegister()
    {
        return view('user.userGoogleRegister');
    }
}
