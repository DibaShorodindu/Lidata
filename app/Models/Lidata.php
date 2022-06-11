<?php

namespace App\Models;

use http\Env\Request;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class Lidata extends Model
{
    use HasFactory;
    protected $table = "lidata";
    protected $fillable = [
    'person_email',
    'person_name',
    'person_first_name_unanalyzed',
    'person_last_name_unanalyzed',
    'person_sanitized_phone',
    'person_title',
    'person_functions',
    'person_detailed_function',
    'person_seniority',
    'person_location_city',
    'person_location_state',
    'person_location_country',
    'person_location_postal_code',
    'person_linkedin_url',
    'organization_name',
    'organization_domain',
    'organization_phone',
    'organization_facebook_url',
    'organization_linkedin_numerical_urls',
    'organization_twitter_url',
    'organization_website_url',
    'organization_angellist_url',
    'organization_founded_year',
    'organization_hq_location_city',
    'organization_hq_location_postal_code',
    'organization_hq_location_state',
    'organization_hq_location_country',
    'organization_num_current_employees',
    'organization_languages',
    'organization_industries'];
    public static function getLidata(){
        $records = DB::table('lidata')->select('id',
        'person_email',
        'person_email',
        'person_first_name_unanalyzed',
        'person_last_name_unanalyzed',
        'person_sanitized_phone',
        'person_title',
        'person_functions',
        'person_detailed_function',
        'person_seniority',
        'person_location_city',
        'person_location_state',
        'person_location_country',
        'person_location_postal_code',
        'person_linkedin_url',
        'organization_name',
        'organization_domain',
        'organization_phone',
        'organization_facebook_url',
        'organization_linkedin_numerical_urls',
        'organization_twitter_url',
        'organization_website_url',
        'organization_angellist_url',
        'organization_founded_year',
        'organization_hq_location_city',
        'organization_hq_location_postal_code',
        'organization_hq_location_state',
        'organization_hq_location_country',
        'organization_num_current_employees',
        'organization_languages',
        'organization_industries')->get()->toArray();
        return $records;
    }
    
}
