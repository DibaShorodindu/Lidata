<?php

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PurchasePlan extends Model
{
    use HasFactory;
    protected static $purchagePlan;
    protected $fillable = [
        'userId',
        'plan',
        'price',
        'credit',
        'phoneNumber',
        'dataFilter',
        'csvExport',
        'start',
        'end',
        'import',
       
    ];

    public static function createNew($request)
    {
        self::$purchagePlan = new PurchasePlan();
        self::$purchagePlan->userId       = $request->id;
        self::$purchagePlan->plan         = 'Free';
        self::$purchagePlan->price        = 0;
        self::$purchagePlan->credit       = 50;
        self::$purchagePlan->dataView     = 50;
        self::$purchagePlan->dataFilter   = 'Basic Filters';
        self::$purchagePlan->csvExport    = 'CSV Export';
        self::$purchagePlan->start        = Carbon::now()->toDateString();
        self::$purchagePlan->end          = Carbon::now()->addDays(29)->format('Y-m-d');
        self::$purchagePlan->save();
    }
}