<?php

namespace App\Http\Controllers\User\Searching;

use App\Http\Controllers\Controller;
use App\Models\Country;
use App\Models\Credit;
use App\Models\DownloadedList;
use App\Models\Lidata;
use DB;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class Company extends Controller
{
    protected $allData;
    protected $allDataIds;
    protected $countries;

    public function companySearchCombination(Request $request)
    {
        $credit=Credit::where('userId',Auth::user()->id)->first();
        if($credit->useableCredit == 0 )
            return view('userDashboard.settings.upgrade');
        if($credit->useableCredit >= 1 && $request->company != null && $request->page == null)
            Credit::filterCredit();
        if($credit->useableCredit >= 1 && $request->city != null && $request->page == null)
            Credit::filterCredit();
        if($credit->useableCredit >= 1 && $request->state != null && $request->page == null)
            Credit::filterCredit();
        if($credit->useableCredit >= 1 && $request->country != null && $request->page == null)
            Credit::filterCredit();
        if($credit->useableCredit >= 1 && $request->industry != null && $request->page == null)
            Credit::filterCredit();

        $this->countries = Country::all();
        $this->allDataIds = DownloadedList::where('userId', Auth::user()->id)->get();
        $getdownloadedIds = 0;
        foreach ($this->allDataIds as $dataIds)
        {
            $getdownloadedIds = $getdownloadedIds.','.$dataIds->downloadedIds;
        }
        $result = $request->name;


        if ( $request->company != null && $request->city == null && $request->state == null
            && $request->country == null &&  $request->industry == null )
        {
            $this->allData = DB::table('lidata')
                ->whereNotIn('id', explode(',',$getdownloadedIds))
                ->where('organization_name', '=', $request->company)
                ->orderBy('organization_name', 'ASC')
                ->paginate(15);
            $dataCount = DB::table('lidata')
                ->where('organization_name', '=', $request->company)
                ->get();
            return view('userDashboard.company', ['allData' => $this->allData, 'country' => $this->countries,
                'company'=>$request->company, 'count' => count($dataCount)]);
        }
        elseif ( $request->company == null && $request->city != null && $request->state == null
            && $request->country == null &&  $request->industry == null )
        {
            $this->allData = DB::table('lidata')
                ->whereNotIn('id', explode(',',$getdownloadedIds))
                ->where('organization_hq_location_city', '=', $request->city)
                ->orderBy('organization_name', 'ASC')
                ->paginate(15);
            $dataCount = DB::table('lidata')
                ->where('organization_hq_location_city', '=', $request->city)
                ->get();
            return view('userDashboard.company', ['allData' => $this->allData, 'country' => $this->countries,
                'city' => $request->city,  'count' => count($dataCount)]);
        }
        elseif ( $request->company == null && $request->city == null && $request->state != null
            && $request->country == null &&  $request->industry == null )
        {
            $this->allData = DB::table('lidata')
                ->whereNotIn('id', explode(',',$getdownloadedIds))
                ->where('organization_hq_location_state', '=', $request->state)
                ->orderBy('organization_name', 'ASC')
                ->paginate(15);
            $dataCount = DB::table('lidata')
                ->where('organization_hq_location_state', '=', $request->state)
                ->get();
            return view('userDashboard.company', ['allData' => $this->allData, 'country' => $this->countries,
                'state' => $request->state, 'count' => count($dataCount)]);
        }
        elseif ( $request->company == null && $request->city == null && $request->state == null
            && $request->country != null &&  $request->industry == null )
        {
            $this->allData = DB::table('lidata')
                ->whereNotIn('id', explode(',',$getdownloadedIds))
                ->where('organization_hq_location_country', '=', $request->country)
                ->orderBy('organization_name', 'ASC')
                ->paginate(15);
            $dataCount = DB::table('lidata')
                ->where('organization_hq_location_country', '=', $request->country)
                ->get();
            return view('userDashboard.company', ['allData' => $this->allData, 'country' => $this->countries,
                'countries' => $request->country,  'count' => count($dataCount)]);
        }
        elseif ( $request->company == null && $request->city == null && $request->state == null
            && $request->country == null &&  $request->industry != null )
        {
            $this->allData = DB::table('lidata')
                ->whereNotIn('id', explode(',',$getdownloadedIds))
                ->where('organization_industries', '=', $request->industry)
                ->orderBy('organization_name', 'ASC')
                ->paginate(15);
            $dataCount = DB::table('lidata')
                ->where('organization_industries', '=', $request->industry)
                ->get();
            return view('userDashboard.company', ['allData' => $this->allData, 'country' => $this->countries,
                'industry' => $request->industry, 'count' => count($dataCount)]);
        }
        elseif ( $request->company != null && $request->city != null && $request->state == null
            && $request->country == null &&  $request->industry == null )
        {
            $this->allData = DB::table('lidata')
                ->whereNotIn('id', explode(',',$getdownloadedIds))
                ->where('organization_name', '=', $request->company)
                ->where('organization_hq_location_city', '=', $request->city)
                ->orderBy('organization_name', 'ASC')
                ->paginate(15);
            $dataCount = DB::table('lidata')
                ->where('organization_name', '=', $request->company)
                ->where('organization_hq_location_city', '=', $request->city)
                ->get();
            return view('userDashboard.company', ['allData' => $this->allData, 'country' => $this->countries,
                'company'=>$request->company, 'city' => $request->city, 'count' => count($dataCount)]);
        }
        elseif ( $request->company != null && $request->city == null && $request->state != null
            && $request->country == null &&  $request->industry == null )
        {
            $this->allData = DB::table('lidata')
                ->whereNotIn('id', explode(',',$getdownloadedIds))
                ->where('organization_name', '=', $request->company)
                ->where('organization_hq_location_city', '=', $request->city)
                ->where('organization_hq_location_state', '=', $request->state)
                ->where('organization_hq_location_country', '=', $request->country)
                ->where('organization_industries', '=', $request->industry)
                ->orderBy('organization_name', 'ASC')
                ->paginate(15);
            $dataCount = DB::table('lidata')
                ->where('organization_name', '=', $request->company)
                ->where('organization_hq_location_city', '=', $request->city)
                ->where('organization_hq_location_state', '=', $request->state)
                ->where('organization_hq_location_country', '=', $request->country)
                ->where('organization_industries', '=', $request->industry)
                ->get();
            return view('userDashboard.company', ['allData' => $this->allData, 'country' => $this->countries,
                'company'=>$request->company, 'state' => $request->state,
                'count' => count($dataCount)]);
        }
        elseif ( $request->company != null && $request->city == null && $request->state == null
            && $request->country != null &&  $request->industry == null )
        {
            $this->allData = DB::table('lidata')
                ->whereNotIn('id', explode(',',$getdownloadedIds))
                ->where('organization_name', '=', $request->company)
                ->where('organization_hq_location_country', '=', $request->country)
                ->orderBy('organization_name', 'ASC')
                ->paginate(15);
            $dataCount = DB::table('lidata')
                ->where('organization_name', '=', $request->company)
                ->where('organization_hq_location_country', '=', $request->country)
                ->get();
            return view('userDashboard.company', ['allData' => $this->allData, 'country' => $this->countries,
                'company'=>$request->company,
                'countries' => $request->country, 'count' => count($dataCount)]);
        }
        elseif ( $request->company != null && $request->city == null && $request->state == null
            && $request->country == null &&  $request->industry != null )
        {
            $this->allData = DB::table('lidata')
                ->whereNotIn('id', explode(',',$getdownloadedIds))
                ->where('organization_name', '=', $request->company)
                ->where('organization_industries', '=', $request->industry)
                ->orderBy('organization_name', 'ASC')
                ->paginate(15);
            $dataCount = DB::table('lidata')
                ->where('organization_name', '=', $request->company)
                ->where('organization_industries', '=', $request->industry)
                ->get();
            return view('userDashboard.company', ['allData' => $this->allData, 'country' => $this->countries,
                'company'=>$request->company, 'industry' => $request->industry, 'count' => count($dataCount)]);
        }
        elseif ( $request->company == null && $request->city != null && $request->state != null
            && $request->country == null &&  $request->industry == null )
        {
            $this->allData = DB::table('lidata')
                ->whereNotIn('id', explode(',',$getdownloadedIds))
                ->where('organization_hq_location_city', '=', $request->city)
                ->where('organization_hq_location_state', '=', $request->state)
                ->orderBy('organization_name', 'ASC')
                ->paginate(15);
            $dataCount = DB::table('lidata')
                ->where('organization_hq_location_city', '=', $request->city)
                ->where('organization_hq_location_state', '=', $request->state)
                ->get();
            return view('userDashboard.company', ['allData' => $this->allData, 'country' => $this->countries,
                'city' => $request->city, 'state' => $request->state,
                'count' => count($dataCount)]);
        }
        elseif ( $request->company == null && $request->city != null && $request->state == null
            && $request->country != null &&  $request->industry == null )
        {
            $this->allData = DB::table('lidata')
                ->whereNotIn('id', explode(',',$getdownloadedIds))
                ->where('organization_hq_location_city', '=', $request->city)
                ->where('organization_hq_location_country', '=', $request->country)
                ->orderBy('organization_name', 'ASC')
                ->paginate(15);
            $dataCount = DB::table('lidata')
                ->where('organization_hq_location_city', '=', $request->city)
                ->where('organization_hq_location_country', '=', $request->country)
                ->get();
            return view('userDashboard.company', ['allData' => $this->allData, 'country' => $this->countries,
                'city' => $request->city, 'countries' => $request->country, 'count' => count($dataCount)]);
        }
        elseif ( $request->company == null && $request->city != null && $request->state == null
            && $request->country == null &&  $request->industry != null )
        {
            $this->allData = DB::table('lidata')
                ->whereNotIn('id', explode(',',$getdownloadedIds))
                ->where('organization_hq_location_city', '=', $request->city)
                ->where('organization_industries', '=', $request->industry)
                ->orderBy('organization_name', 'ASC')
                ->paginate(15);
            $dataCount = DB::table('lidata')
                ->where('organization_hq_location_city', '=', $request->city)
                ->where('organization_industries', '=', $request->industry)
                ->get();
            return view('userDashboard.company', ['allData' => $this->allData, 'country' => $this->countries,
                'city' => $request->city, 'industry' => $request->industry, 'count' => count($dataCount)]);
        }
        elseif ( $request->company == null && $request->city == null && $request->state != null
            && $request->country != null &&  $request->industry == null )
        {
            $this->allData = DB::table('lidata')
                ->whereNotIn('id', explode(',',$getdownloadedIds))
                ->where('organization_hq_location_state', '=', $request->state)
                ->where('organization_hq_location_country', '=', $request->country)
                ->orderBy('organization_name', 'ASC')
                ->paginate(15);
            $dataCount = DB::table('lidata')
                ->where('organization_hq_location_state', '=', $request->state)
                ->where('organization_hq_location_country', '=', $request->country)
                ->get();
            return view('userDashboard.company', ['allData' => $this->allData, 'country' => $this->countries,
                'state' => $request->state,
                'countries' => $request->country, 'count' => count($dataCount)]);
        }
        elseif ( $request->company == null && $request->city == null && $request->state != null
            && $request->country == null &&  $request->industry != null )
        {
            $this->allData = DB::table('lidata')
                ->whereNotIn('id', explode(',',$getdownloadedIds))
                ->where('organization_hq_location_state', '=', $request->state)
                ->where('organization_industries', '=', $request->industry)
                ->orderBy('organization_name', 'ASC')
                ->paginate(15);
            $dataCount = DB::table('lidata')
                ->where('organization_hq_location_state', '=', $request->state)
                ->where('organization_industries', '=', $request->industry)
                ->get();
            return view('userDashboard.company', ['allData' => $this->allData, 'country' => $this->countries,
                'state' => $request->state,'industry' => $request->industry, 'count' => count($dataCount)]);
        }
        elseif ( $request->company == null && $request->city == null && $request->state == null
            && $request->country != null &&  $request->industry != null )
        {
            $this->allData = DB::table('lidata')
                ->whereNotIn('id', explode(',',$getdownloadedIds))
                ->where('organization_hq_location_country', '=', $request->country)
                ->where('organization_industries', '=', $request->industry)
                ->orderBy('organization_name', 'ASC')
                ->paginate(15);
            $dataCount = DB::table('lidata')
                ->where('organization_hq_location_country', '=', $request->country)
                ->where('organization_industries', '=', $request->industry)
                ->get();
            return view('userDashboard.company', ['allData' => $this->allData, 'country' => $this->countries,
                'countries' => $request->country, 'industry' => $request->industry, 'count' => count($dataCount)]);
        }
        elseif ( $request->company != null && $request->city != null && $request->state != null
            && $request->country == null &&  $request->industry == null )
        {
            $this->allData = DB::table('lidata')
                ->whereNotIn('id', explode(',',$getdownloadedIds))
                ->where('organization_name', '=', $request->company)
                ->where('organization_hq_location_city', '=', $request->city)
                ->where('organization_hq_location_state', '=', $request->state)
                ->orderBy('organization_name', 'ASC')
                ->paginate(15);
            $dataCount = DB::table('lidata')
                ->where('organization_name', '=', $request->company)
                ->where('organization_hq_location_city', '=', $request->city)
                ->where('organization_hq_location_state', '=', $request->state)
                ->get();
            return view('userDashboard.company', ['allData' => $this->allData, 'country' => $this->countries,
                'company'=>$request->company, 'city' => $request->city, 'state' => $request->state,
                'count' => count($dataCount)]);
        }
        elseif ( $request->company != null && $request->city != null && $request->state == null
            && $request->country != null &&  $request->industry == null )
        {
            $this->allData = DB::table('lidata')
                ->whereNotIn('id', explode(',',$getdownloadedIds))
                ->where('organization_name', '=', $request->company)
                ->where('organization_hq_location_city', '=', $request->city)
                ->where('organization_hq_location_country', '=', $request->country)
                ->orderBy('organization_name', 'ASC')
                ->paginate(15);
            $dataCount = DB::table('lidata')
                ->where('organization_name', '=', $request->company)
                ->where('organization_hq_location_city', '=', $request->city)
                ->where('organization_hq_location_country', '=', $request->country)
                ->get();
            return view('userDashboard.company', ['allData' => $this->allData, 'country' => $this->countries,
                'company'=>$request->company, 'city' => $request->city,
                'countries' => $request->country, 'count' => count($dataCount)]);
        }
        elseif ( $request->company != null && $request->city != null && $request->state == null
            && $request->country == null &&  $request->industry != null )
        {
            $this->allData = DB::table('lidata')
                ->whereNotIn('id', explode(',',$getdownloadedIds))
                ->where('organization_name', '=', $request->company)
                ->where('organization_hq_location_city', '=', $request->city)
                ->where('organization_industries', '=', $request->industry)
                ->orderBy('organization_name', 'ASC')
                ->paginate(15);
            $dataCount = DB::table('lidata')
                ->where('organization_name', '=', $request->company)
                ->where('organization_hq_location_city', '=', $request->city)
                ->where('organization_industries', '=', $request->industry)
                ->get();
            return view('userDashboard.company', ['allData' => $this->allData, 'country' => $this->countries,
                'company'=>$request->company, 'city' => $request->city, 'industry' => $request->industry, 'count' => count($dataCount)]);
        }
        elseif ( $request->company != null && $request->city == null && $request->state != null
            && $request->country != null &&  $request->industry == null )
        {
            $this->allData = DB::table('lidata')
                ->whereNotIn('id', explode(',',$getdownloadedIds))
                ->where('organization_name', '=', $request->company)
                ->where('organization_hq_location_state', '=', $request->state)
                ->where('organization_hq_location_country', '=', $request->country)
                ->orderBy('organization_name', 'ASC')
                ->paginate(15);
            $dataCount = DB::table('lidata')
                ->where('organization_name', '=', $request->company)
                ->where('organization_hq_location_state', '=', $request->state)
                ->where('organization_hq_location_country', '=', $request->country)
                ->get();
            return view('userDashboard.company', ['allData' => $this->allData, 'country' => $this->countries,
                'company'=>$request->company, 'state' => $request->state,
                'countries' => $request->country,  'count' => count($dataCount)]);
        }
        elseif ( $request->company != null && $request->city == null && $request->state != null
            && $request->country == null &&  $request->industry != null )
        {
            $this->allData = DB::table('lidata')
                ->whereNotIn('id', explode(',',$getdownloadedIds))
                ->where('organization_name', '=', $request->company)
                ->where('organization_hq_location_state', '=', $request->state)
                ->where('organization_industries', '=', $request->industry)
                ->orderBy('organization_name', 'ASC')
                ->paginate(15);
            $dataCount = DB::table('lidata')
                ->where('organization_name', '=', $request->company)
                ->where('organization_hq_location_state', '=', $request->state)
                ->where('organization_industries', '=', $request->industry)
                ->get();
            return view('userDashboard.company', ['allData' => $this->allData, 'country' => $this->countries,
                'company'=>$request->company, 'state' => $request->state,
                'industry' => $request->industry, 'count' => count($dataCount)]);
        }
        elseif ( $request->company != null && $request->city == null && $request->state == null
            && $request->country != null &&  $request->industry != null )
        {
            $this->allData = DB::table('lidata')
                ->whereNotIn('id', explode(',',$getdownloadedIds))
                ->where('organization_name', '=', $request->company)
                ->where('organization_hq_location_country', '=', $request->country)
                ->where('organization_industries', '=', $request->industry)
                ->orderBy('organization_name', 'ASC')
                ->paginate(15);
            $dataCount = DB::table('lidata')
                ->where('organization_name', '=', $request->company)
                ->where('organization_hq_location_country', '=', $request->country)
                ->where('organization_industries', '=', $request->industry)
                ->get();
            return view('userDashboard.company', ['allData' => $this->allData, 'country' => $this->countries,
                'company'=>$request->company,
                'countries' => $request->country, 'industry' => $request->industry, 'count' => count($dataCount)]);
        }
        elseif ( $request->company == null && $request->city != null && $request->state != null
            && $request->country != null &&  $request->industry == null )
        {
            $this->allData = DB::table('lidata')
                ->whereNotIn('id', explode(',',$getdownloadedIds))
                ->where('organization_hq_location_city', '=', $request->city)
                ->where('organization_hq_location_state', '=', $request->state)
                ->where('organization_hq_location_country', '=', $request->country)
                ->orderBy('organization_name', 'ASC')
                ->paginate(15);
            $dataCount = DB::table('lidata')
                ->where('organization_hq_location_city', '=', $request->city)
                ->where('organization_hq_location_state', '=', $request->state)
                ->where('organization_hq_location_country', '=', $request->country)
                ->get();
            return view('userDashboard.company', ['allData' => $this->allData, 'country' => $this->countries,
                'city' => $request->city, 'state' => $request->state,
                'countries' => $request->country, 'count' => count($dataCount)]);
        }
        elseif ( $request->company == null && $request->city != null && $request->state != null
            && $request->country == null &&  $request->industry != null )
        {
            $this->allData = DB::table('lidata')
                ->whereNotIn('id', explode(',',$getdownloadedIds))
                ->where('organization_hq_location_city', '=', $request->city)
                ->where('organization_hq_location_state', '=', $request->state)
                ->where('organization_industries', '=', $request->industry)
                ->orderBy('organization_name', 'ASC')
                ->paginate(15);
            $dataCount = DB::table('lidata')
                ->where('organization_hq_location_city', '=', $request->city)
                ->where('organization_hq_location_state', '=', $request->state)
                ->where('organization_industries', '=', $request->industry)
                ->get();
            return view('userDashboard.company', ['allData' => $this->allData, 'country' => $this->countries,
                'city' => $request->city, 'state' => $request->state,
                'industry' => $request->industry, 'count' => count($dataCount)]);
        }
        elseif ( $request->company == null && $request->city != null && $request->state == null
            && $request->country != null &&  $request->industry != null )
        {
            $this->allData = DB::table('lidata')
                ->whereNotIn('id', explode(',',$getdownloadedIds))
                ->where('organization_hq_location_city', '=', $request->city)
                ->where('organization_hq_location_country', '=', $request->country)
                ->where('organization_industries', '=', $request->industry)
                ->orderBy('organization_name', 'ASC')
                ->paginate(15);
            $dataCount = DB::table('lidata')
                ->where('organization_hq_location_city', '=', $request->city)
                ->where('organization_hq_location_country', '=', $request->country)
                ->where('organization_industries', '=', $request->industry)
                ->get();
            return view('userDashboard.company', ['allData' => $this->allData, 'country' => $this->countries,
                'city' => $request->city,
                'countries' => $request->country, 'industry' => $request->industry, 'count' => count($dataCount)]);
        }
        elseif ( $request->company == null && $request->city == null && $request->state != null
            && $request->country != null &&  $request->industry != null )
        {
            $this->allData = DB::table('lidata')
                ->whereNotIn('id', explode(',',$getdownloadedIds))
                ->where('organization_hq_location_state', '=', $request->state)
                ->where('organization_hq_location_country', '=', $request->country)
                ->where('organization_industries', '=', $request->industry)
                ->orderBy('organization_name', 'ASC')
                ->paginate(15);
            $dataCount = DB::table('lidata')
                ->where('organization_hq_location_state', '=', $request->state)
                ->where('organization_hq_location_country', '=', $request->country)
                ->where('organization_industries', '=', $request->industry)
                ->get();
            return view('userDashboard.company', ['allData' => $this->allData, 'country' => $this->countries,
                'state' => $request->state,
                'countries' => $request->country, 'industry' => $request->industry, 'count' => count($dataCount)]);
        }
        elseif ( $request->company != null && $request->city != null && $request->state != null
            && $request->country != null &&  $request->industry == null )
        {
            $this->allData = DB::table('lidata')
                ->whereNotIn('id', explode(',',$getdownloadedIds))
                ->where('organization_name', '=', $request->company)
                ->where('organization_hq_location_city', '=', $request->city)
                ->where('organization_hq_location_state', '=', $request->state)
                ->where('organization_hq_location_country', '=', $request->country)
                ->orderBy('organization_name', 'ASC')
                ->paginate(15);
            $dataCount = DB::table('lidata')
                ->where('organization_name', '=', $request->company)
                ->where('organization_hq_location_city', '=', $request->city)
                ->where('organization_hq_location_state', '=', $request->state)
                ->where('organization_hq_location_country', '=', $request->country)
                ->get();
            return view('userDashboard.company', ['allData' => $this->allData, 'country' => $this->countries,
                'company'=>$request->company, 'city' => $request->city, 'state' => $request->state,
                'countries' => $request->country, 'count' => count($dataCount)]);
        }
        elseif ( $request->company != null && $request->city != null && $request->state != null
            && $request->country == null &&  $request->industry != null )
        {
            $this->allData = DB::table('lidata')
                ->whereNotIn('id', explode(',',$getdownloadedIds))
                ->where('organization_name', '=', $request->company)
                ->where('organization_hq_location_city', '=', $request->city)
                ->where('organization_hq_location_state', '=', $request->state)
                ->where('organization_industries', '=', $request->industry)
                ->orderBy('organization_name', 'ASC')
                ->paginate(15);
            $dataCount = DB::table('lidata')
                ->where('organization_name', '=', $request->company)
                ->where('organization_hq_location_city', '=', $request->city)
                ->where('organization_hq_location_state', '=', $request->state)
                ->where('organization_industries', '=', $request->industry)
                ->get();
            return view('userDashboard.company', ['allData' => $this->allData, 'country' => $this->countries,
                'company'=>$request->company, 'city' => $request->city, 'state' => $request->state,
                'industry' => $request->industry, 'count' => count($dataCount)]);
        }
        elseif ( $request->company != null && $request->city == null && $request->state != null
            && $request->country != null &&  $request->industry != null )
        {
            $this->allData = DB::table('lidata')
                ->whereNotIn('id', explode(',',$getdownloadedIds))
                ->where('organization_name', '=', $request->company)
                ->where('organization_hq_location_state', '=', $request->state)
                ->where('organization_hq_location_country', '=', $request->country)
                ->where('organization_industries', '=', $request->industry)
                ->orderBy('organization_name', 'ASC')
                ->paginate(15);
            $dataCount = DB::table('lidata')
                ->where('organization_name', '=', $request->company)
                ->where('organization_hq_location_state', '=', $request->state)
                ->where('organization_hq_location_country', '=', $request->country)
                ->where('organization_industries', '=', $request->industry)
                ->get();
            return view('userDashboard.company', ['allData' => $this->allData, 'country' => $this->countries,
                'company'=>$request->company, 'state' => $request->state,
                'countries' => $request->country, 'industry' => $request->industry, 'count' => count($dataCount)]);
        }
        elseif ( $request->company != null && $request->city != null && $request->state == null
            && $request->country != null &&  $request->industry != null )
        {
            $this->allData = DB::table('lidata')
                ->whereNotIn('id', explode(',',$getdownloadedIds))
                ->where('organization_name', '=', $request->company)
                ->where('organization_hq_location_city', '=', $request->city)
                ->where('organization_hq_location_country', '=', $request->country)
                ->where('organization_industries', '=', $request->industry)
                ->orderBy('organization_name', 'ASC')
                ->paginate(15);
            $dataCount = DB::table('lidata')
                ->where('organization_name', '=', $request->company)
                ->where('organization_hq_location_city', '=', $request->city)
                ->where('organization_hq_location_country', '=', $request->country)
                ->where('organization_industries', '=', $request->industry)
                ->get();
            return view('userDashboard.company', ['allData' => $this->allData, 'country' => $this->countries,
                'company'=>$request->company, 'city' => $request->city,
                'countries' => $request->country, 'industry' => $request->industry, 'count' => count($dataCount)]);
        }
        elseif ( $request->company == null && $request->city != null && $request->state != null
            && $request->country != null &&  $request->industry != null )
        {
            $this->allData = DB::table('lidata')
                ->whereNotIn('id', explode(',',$getdownloadedIds))
                ->where('organization_hq_location_city', '=', $request->city)
                ->where('organization_hq_location_state', '=', $request->state)
                ->where('organization_hq_location_country', '=', $request->country)
                ->where('organization_industries', '=', $request->industry)
                ->orderBy('organization_name', 'ASC')
                ->paginate(15);
            $dataCount = DB::table('lidata')
                ->where('organization_hq_location_city', '=', $request->city)
                ->where('organization_hq_location_state', '=', $request->state)
                ->where('organization_hq_location_country', '=', $request->country)
                ->where('organization_industries', '=', $request->industry)
                ->get();
            return view('userDashboard.company', ['allData' => $this->allData, 'country' => $this->countries,
                'city' => $request->city, 'state' => $request->state,
                'countries' => $request->country, 'industry' => $request->industry, 'count' => count($dataCount)]);
        }


        elseif ( $request->company != null && $request->city != null && $request->state != null
            && $request->country != null &&  $request->industry != null )
        {
            $this->allData = DB::table('lidata')
                ->whereNotIn('id', explode(',',$getdownloadedIds))
                ->where('organization_name', '=', $request->company)
                ->where('organization_hq_location_city', '=', $request->city)
                ->where('organization_hq_location_state', '=', $request->state)
                ->where('organization_hq_location_country', '=', $request->country)
                ->where('organization_industries', '=', $request->industry)
                ->orderBy('organization_name', 'ASC')
                ->paginate(15);
            $dataCount = DB::table('lidata')
                ->where('organization_name', '=', $request->company)
                ->where('organization_hq_location_city', '=', $request->city)
                ->where('organization_hq_location_state', '=', $request->state)
                ->where('organization_hq_location_country', '=', $request->country)
                ->where('organization_industries', '=', $request->industry)
                ->get();
            return view('userDashboard.company', ['allData' => $this->allData, 'country' => $this->countries,
                'company'=>$request->company, 'city' => $request->city, 'state' => $request->state,
                'countries' => $request->country, 'industry' => $request->industry, 'count' => count($dataCount)]);
        }

        elseif ( $request->company != null && $request->city != null && $request->state != null
            && $request->country != null &&  $request->industry != null )
        {
            $dataCount = count(lidata::all());
            $this->allData = lidata::whereNotIn('id', explode(',',$getdownloadedIds))
                /*->orderBy('person_name', 'ASC')*/
                ->paginate(15);
            return view('userDashboard.company', ['allData' => $this->allData, 'country' => $this->countries, 'count' => $dataCount]);
        }
    }
}
