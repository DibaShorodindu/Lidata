<?php

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CreditHistory extends Model
{
    use HasFactory;
    protected static $creditHistory;
    protected $fillable = [
        'userId',
        'usedCredit',
        'date',
    ];
    public static function create($request)
    {
        self::$creditHistory = new CreditHistory();
        self::$creditHistory->userId         = $request->userId;
        self::$creditHistory->usedCredit  = count($request->chk);
        self::$creditHistory->date  = Carbon::now();
        self::$creditHistory->save();
    }
}