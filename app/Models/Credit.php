<?php

namespace App\Models;

use Auth;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Credit extends Model
{
    use HasFactory;
    protected static $credit;
    protected static $allDataIds;
    protected $fillable = [
        'userId',
        'useableCredit'
    ];

    public static function updateUserCradit($request)
    {
        self::$allDataIds = DownloadedList::where('userId', Auth::user()->id)->get();
        $getdownloadedIds = 0;
        foreach (self::$allDataIds as $dataIds)
        {

            $getdownloadedIds = $getdownloadedIds.','.$dataIds->downloadedIds;
        }



        $preDownloaded = (count(array_intersect($request->chk, explode(',',$getdownloadedIds ))));




        self::$credit = Credit::where('userId', $request->userId)->first();
        $usableCredit = self::$credit->useableCredit;
        self::$credit->userId         = $request->userId;
        self::$credit->useableCredit  = $usableCredit-count($request->chk)+$preDownloaded;
        self::$credit->save();
    }
    public static function updateUserCreditForOne($request)
    {
        self::$allDataIds = DownloadedList::where('userId', Auth::user()->id)->get();
        $getdownloadedIds = 0;
        foreach (self::$allDataIds as $dataIds)
        {

            $getdownloadedIds = $getdownloadedIds.','.$dataIds->downloadedIds;
        }

        $preDownloaded = (count(array_intersect($request->toArray(), explode(',',$getdownloadedIds ))));

        self::$credit = Credit::where('userId', Auth::user()->id)->first();
        $usableCredit = self::$credit->useableCredit;
        self::$credit->userId         = Auth::user()->id;
        self::$credit->useableCredit  = $usableCredit-1+$preDownloaded;
        self::$credit->save();
    }
    public static function updateCredit($request)
    {
        self::$credit = Credit::find($request->userId);
        $usableCredit = self::$credit->useableCredit;
        self::$credit->userId         = $request->userId;
        self::$credit->useableCredit  = $usableCredit+$request->credit;
        self::$credit->save();
    }
    public static function updateCreditByAdmin($request, $id)
    {
        self::$credit = Credit::find($id);
        $usableCredit = self::$credit->useableCredit;
        self::$credit->userId         = $id;
        self::$credit->useableCredit  = $usableCredit+$request->credit;
        self::$credit->save();
    }
}
