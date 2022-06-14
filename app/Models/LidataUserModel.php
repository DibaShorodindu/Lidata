<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Foundation\Auth\User as Authenticatable;

class LidataUserModel extends Authenticatable
{
    use HasFactory;

    protected static $credit;
    protected static $user;

    protected $fillable = [
        'email',
        'password',
        'firstName',
        'lastName',
        'phone',
        'country',
        'google_id',
        'title',
        'address',
        'purchasePlan',
        'useAbleCredit',
        'fb_id',
    ];

    protected $hidden = [
        'remember_token',
    ];

    public static function updatePlanAndCredit($request)
    {

        self::$user = LidataUserModel::find($request->userId);
        self::$credit = Credit::find($request->userId);
        $usableCredit = self::$credit->useableCredit;
        self::$user->update([
            'purchasePlan' => $request->plan,
            'useAbleCredit' => $usableCredit,
        ]);
    }
    public static function updateUseAbleCredit($request)
    {

        self::$user = LidataUserModel::find($request->userId);
        self::$credit = Credit::find($request->userId);
        $usableCredit = self::$credit->useableCredit;
        self::$user->update([
            'useAbleCredit' => $usableCredit,
        ]);
    }
    public static function updateUseAbleCreditForOne($request, $id)
    {

        self::$user = LidataUserModel::find($id);
        self::$credit = Credit::find($id);
        $usableCredit = self::$credit->useableCredit;
        self::$user->update([
            'useAbleCredit' => $usableCredit,
        ]);
    }

    public static function updatePlanAndCreditByAdmin($request, $id)
    {

        self::$user = LidataUserModel::find($id);
        self::$credit = Credit::find($id);
        $usableCredit = self::$credit->useableCredit;
        self::$user->update([
            'purchasePlan' => $request->plan,
            'useAbleCredit' => $usableCredit,
        ]);
    }
}
