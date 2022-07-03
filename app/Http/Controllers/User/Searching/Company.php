<?php

namespace App\Http\Controllers\User\Searching;

use App\Http\Controllers\Controller;
use App\Models\Country;
use App\Models\DownloadedList;
use DB;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class Company extends Controller
{
    public function companySearchCombination(Request $request)
    {
        $this->allDataIds = DownloadedList::where('userId', Auth::user()->id)->get();
        $getdownloadedIds = 0;
        foreach ($this->allDataIds as $dataIds)
        {
            $getdownloadedIds = $getdownloadedIds.','.$dataIds->downloadedIds;
        }
        $result = $request->name;


        if ( $request->name != null && $request->jobTitle == null && $request->company == null
            && $request->city == null && $request->state == null && $request->industry == null)
        {
            $this->allData = DB::table('lidata')
                ->whereNotIn('id', explode(',',$getdownloadedIds))
                ->where('person_first_name_unanalyzed', '=',  $request->name)
                ->orWhere('person_last_name_unanalyzed', '=',  $request->name)
                ->orWhere('person_name', '=',  $request->name)
                ->orderBy('person_name', 'ASC')
                ->paginate(15);
            $dataCount =DB::table('lidata')
                ->where('person_first_name_unanalyzed', '=',  $request->name)
                ->orWhere('person_last_name_unanalyzed', '=',  $request->name)
                ->orWhere('person_name', '=',  $request->name)
                ->get();
            return view('userDashboard.people', ['allData' => $this->allData,
                'name' => $request->name, 'count' => count($dataCount)]);
        }

        elseif ( $request->name == null && $request->jobTitle != null && $request->company == null
            && $request->city == null && $request->state == null && $request->industry == null )
        {
            $this->allData = DB::table('lidata')
                ->whereNotIn('id', explode(',',$getdownloadedIds))
                ->where(function ($query) use ($request) {
                    $query->where('person_title', '=', $request->jobTitle)
                        ->orWhere('person_functions', '=', $request->jobTitle)
                        ->orWhere('person_detailed_function', '=',$request->jobTitle)
                        ->orWhere('person_seniority', '=', ' '.$request->jobTitle);
                })
                ->orderBy('person_name', 'ASC')
                ->paginate(15);
            $dataCount = DB::table('lidata')
                ->where(function ($query) use ($request) {
                    $query->where('person_title', '=', $request->jobTitle)
                        ->orWhere('person_functions', '=', $request->jobTitle)
                        ->orWhere('person_detailed_function', '=',$request->jobTitle)
                        ->orWhere('person_seniority', '=', ' '.$request->jobTitle);
                })
                ->get();
            return view('userDashboard.people', ['allData' => $this->allData,
                'jobTitle'=>$request->jobTitle, 'count' => count($dataCount)]);
        }

        elseif ( $request->name == null && $request->jobTitle == null && $request->company != null
            && $request->city == null && $request->state == null && $request->industry == null )
        {
            $this->allData = DB::table('lidata')
                ->whereNotIn('id', explode(',',$getdownloadedIds))
                ->where('organization_name', '=', $request->company)
                ->orderBy('person_name', 'ASC')
                ->paginate(15);
            $dataCount = DB::table('lidata')
                ->where('organization_name', '=', $request->company)
                ->get();
            return view('userDashboard.people', ['allData' => $this->allData,
                'company'=>$request->company, 'count' => count($dataCount)]);
        }
        elseif ( $request->name == null && $request->jobTitle == null && $request->company == null
            && $request->city != null && $request->state == null && $request->industry == null )
        {
            $this->allData = DB::table('lidata')
                ->whereNotIn('id', explode(',',$getdownloadedIds))
                ->where('person_location_city', '=', $request->city)
                ->orderBy('person_name', 'ASC')
                ->paginate(15);
            $dataCount = DB::table('lidata')
                ->where('person_location_city', '=', $request->city)
                ->get();
            return view('userDashboard.people', ['allData' => $this->allData,
                'city' => $request->city, 'count' => count($dataCount)]);
        }
        elseif ( $request->name == null && $request->jobTitle == null && $request->company == null
            && $request->city == null && $request->state != null && $request->industry == null )
        {
            $this->allData = DB::table('lidata')
                ->whereNotIn('id', explode(',',$getdownloadedIds))
                ->where('person_location_state', '=', $request->state)
                ->orderBy('person_name', 'ASC')
                ->paginate(15);
            $dataCount = DB::table('lidata')
                ->where('person_location_state', '=', $request->state)
                ->get();
            return view('userDashboard.people', ['allData' => $this->allData,
                'state' => $request->state, 'count' => count($dataCount)]);
        }
        elseif ( $request->name == null && $request->jobTitle == null && $request->company == null
            && $request->city == null && $request->state == null && $request->industry != null )
        {
            $this->allData = DB::table('lidata')
                ->whereNotIn('id', explode(',',$getdownloadedIds))
                ->where('organization_industries', '=', $request->industry)
                ->orderBy('person_name', 'ASC')
                ->paginate(15);
            $dataCount = DB::table('lidata')
                ->where('organization_industries', '=', $request->industry)
                ->get();
            return view('userDashboard.people', ['allData' => $this->allData,
                'industry' => $request->industry, 'count' => count($dataCount)]);
        }


        elseif ( $request->name != null && $request->jobTitle != null && $request->company == null
            && $request->city == null && $request->state == null && $request->industry == null )
        {
            $this->allData = DB::table('lidata')
                ->whereNotIn('id', explode(',',$getdownloadedIds))
                ->where(function ($query) use ($request) {
                    $query->where('person_first_name_unanalyzed', '=',  $request->name)
                        ->orWhere('person_last_name_unanalyzed', '=',  $request->name)
                        ->orWhere('person_name', '=',  $request->name);
                })
                ->where(function ($query) use ($request) {
                    $query->where('person_title', '=', $request->jobTitle)
                        ->orWhere('person_functions', '=', $request->jobTitle)
                        ->orWhere('person_detailed_function', '=',$request->jobTitle)
                        ->orWhere('person_seniority', '=', ' '.$request->jobTitle);
                })
                ->orderBy('person_name', 'ASC')
                ->paginate(15);
            $dataCount = DB::table('lidata')
                ->where(function ($query) use ($request) {
                    $query->where('person_first_name_unanalyzed', '=',  $request->name)
                        ->orWhere('person_last_name_unanalyzed', '=',  $request->name)
                        ->orWhere('person_name', '=',  $request->name);
                })
                ->where(function ($query) use ($request) {
                    $query->where('person_title', '=', $request->jobTitle)
                        ->orWhere('person_functions', '=', $request->jobTitle)
                        ->orWhere('person_detailed_function', '=',$request->jobTitle)
                        ->orWhere('person_seniority', '=', ' '.$request->jobTitle);
                })
                ->get();
            return view('userDashboard.people', ['allData' => $this->allData,
                'name' => $request->name, 'jobTitle'=>$request->jobTitle,
                'count' => count($dataCount)]);
        }
        elseif ( $request->name != null && $request->jobTitle == null && $request->company != null
            && $request->city == null && $request->state == null && $request->industry == null )
        {
            $this->allData = DB::table('lidata')
                ->whereNotIn('id', explode(',',$getdownloadedIds))
                ->where(function ($query) use ($request) {
                    $query->where('person_first_name_unanalyzed', '=',  $request->name)
                        ->orWhere('person_last_name_unanalyzed', '=',  $request->name)
                        ->orWhere('person_name', '=',  $request->name);
                })
                ->where('organization_name', '=', $request->company)
                ->orderBy('person_name', 'ASC')
                ->paginate(15);
            $dataCount = DB::table('lidata')
                ->where(function ($query) use ($request) {
                    $query->where('person_first_name_unanalyzed', '=',  $request->name)
                        ->orWhere('person_last_name_unanalyzed', '=',  $request->name)
                        ->orWhere('person_name', '=',  $request->name);
                })
                ->where('organization_name', '=', $request->company)
                ->get();
            return view('userDashboard.people', ['allData' => $this->allData,
                'name' => $request->name, 'company'=>$request->company,
                'count' => count($dataCount)]);
        }
        elseif ( $request->name != null && $request->jobTitle == null && $request->company == null
            && $request->city != null && $request->state == null && $request->industry == null )
        {
            $this->allData = DB::table('lidata')
                ->whereNotIn('id', explode(',',$getdownloadedIds))
                ->where(function ($query) use ($request) {
                    $query->where('person_first_name_unanalyzed', '=',  $request->name)
                        ->orWhere('person_last_name_unanalyzed', '=',  $request->name)
                        ->orWhere('person_name', '=',  $request->name);
                })
                ->where('person_location_city', '=', $request->city)
                ->orderBy('person_name', 'ASC')
                ->paginate(15);
            $dataCount = DB::table('lidata')
                ->where(function ($query) use ($request) {
                    $query->where('person_first_name_unanalyzed', '=',  $request->name)
                        ->orWhere('person_last_name_unanalyzed', '=',  $request->name)
                        ->orWhere('person_name', '=',  $request->name);
                })
                ->where('person_location_city', '=', $request->city)
                ->get();
            return view('userDashboard.people', ['allData' => $this->allData,
                'name' => $request->name, 'city'=>$request->city,
                'count' => count($dataCount)]);
        }
        elseif ( $request->name != null && $request->jobTitle == null && $request->company == null
            && $request->city == null && $request->state != null && $request->industry == null )
        {
            $this->allData = DB::table('lidata')
                ->whereNotIn('id', explode(',',$getdownloadedIds))
                ->where(function ($query) use ($request) {
                    $query->where('person_first_name_unanalyzed', '=',  $request->name)
                        ->orWhere('person_last_name_unanalyzed', '=',  $request->name)
                        ->orWhere('person_name', '=',  $request->name);
                })
                ->where('person_location_state', '=', $request->state)
                ->orderBy('person_name', 'ASC')
                ->paginate(15);
            $dataCount = DB::table('lidata')
                ->where(function ($query) use ($request) {
                    $query->where('person_first_name_unanalyzed', '=',  $request->name)
                        ->orWhere('person_last_name_unanalyzed', '=',  $request->name)
                        ->orWhere('person_name', '=',  $request->name);
                })
                ->where('person_location_state', '=', $request->state)
                ->get();
            return view('userDashboard.people', ['allData' => $this->allData,
                'name' => $request->name, 'state'=>$request->state,
                'count' => count($dataCount)]);
        }
        elseif ( $request->name != null && $request->jobTitle == null && $request->company == null
            && $request->city == null && $request->state == null && $request->industry != null )
        {
            $this->allData = DB::table('lidata')
                ->whereNotIn('id', explode(',',$getdownloadedIds))
                ->where(function ($query) use ($request) {
                    $query->where('person_first_name_unanalyzed', '=',  $request->name)
                        ->orWhere('person_last_name_unanalyzed', '=',  $request->name)
                        ->orWhere('person_name', '=',  $request->name);
                })
                ->where('organization_industries', '=', $request->industry)
                ->orderBy('person_name', 'ASC')
                ->paginate(15);
            $dataCount = DB::table('lidata')
                ->where(function ($query) use ($request) {
                    $query->where('person_first_name_unanalyzed', '=',  $request->name)
                        ->orWhere('person_last_name_unanalyzed', '=',  $request->name)
                        ->orWhere('person_name', '=',  $request->name);
                })
                ->where('organization_industries', '=', $request->industry)
                ->get();
            return view('userDashboard.people', ['allData' => $this->allData,
                'name' => $request->name, 'industry'=>$request->industry,
                'count' => count($dataCount)]);
        }


        elseif ( $request->name == null && $request->jobTitle != null && $request->company != null
            && $request->city == null && $request->state == null && $request->industry == null )
        {
            $this->allData = DB::table('lidata')
                ->whereNotIn('id', explode(',',$getdownloadedIds))
                ->where(function ($query) use ($request) {
                    $query->where('person_title', '=', $request->jobTitle)
                        ->orWhere('person_functions', '=', $request->jobTitle)
                        ->orWhere('person_detailed_function', '=',$request->jobTitle)
                        ->orWhere('person_seniority', '=', ' '.$request->jobTitle);
                })
                ->where('organization_name', '=', $request->company)
                ->orderBy('person_name', 'ASC')
                ->paginate(15);
            $dataCount = DB::table('lidata')
                ->where(function ($query) use ($request) {
                    $query->where('person_title', '=', $request->jobTitle)
                        ->orWhere('person_functions', '=', $request->jobTitle)
                        ->orWhere('person_detailed_function', '=',$request->jobTitle)
                        ->orWhere('person_seniority', '=', ' '.$request->jobTitle);
                })
                ->where('organization_name', '=', $request->company)
                ->get();
            return view('userDashboard.people', ['allData' => $this->allData,
                'jobTitle'=>$request->jobTitle, 'company'=>$request->company,
                'count' => count($dataCount)]);
        }
        elseif ( $request->name == null && $request->jobTitle != null && $request->company == null
            && $request->city != null && $request->state == null && $request->industry == null )
        {
            $this->allData = DB::table('lidata')
                ->whereNotIn('id', explode(',',$getdownloadedIds))
                ->where(function ($query) use ($request) {
                    $query->where('person_title', '=', $request->jobTitle)
                        ->orWhere('person_functions', '=', $request->jobTitle)
                        ->orWhere('person_detailed_function', '=',$request->jobTitle)
                        ->orWhere('person_seniority', '=', ' '.$request->jobTitle);
                })
                ->where('person_location_city', '=', $request->city)
                ->orderBy('person_name', 'ASC')
                ->paginate(15);
            $dataCount = DB::table('lidata')
                ->where(function ($query) use ($request) {
                    $query->where('person_title', '=', $request->jobTitle)
                        ->orWhere('person_functions', '=', $request->jobTitle)
                        ->orWhere('person_detailed_function', '=',$request->jobTitle)
                        ->orWhere('person_seniority', '=', ' '.$request->jobTitle);
                })
                ->where('person_location_city', '=', $request->city)
                ->get();
            return view('userDashboard.people', ['allData' => $this->allData,
                'jobTitle'=>$request->jobTitle, 'city' => $request->city,
                'count' => count($dataCount)]);
        }
        elseif ( $request->name == null && $request->jobTitle != null && $request->company == null
            && $request->city == null && $request->state != null && $request->industry == null )
        {
            $this->allData = DB::table('lidata')
                ->whereNotIn('id', explode(',',$getdownloadedIds))
                ->where(function ($query) use ($request) {
                    $query->where('person_title', '=', $request->jobTitle)
                        ->orWhere('person_functions', '=', $request->jobTitle)
                        ->orWhere('person_detailed_function', '=',$request->jobTitle)
                        ->orWhere('person_seniority', '=', ' '.$request->jobTitle);
                })
                ->where('person_location_state', '=', $request->state)
                ->orderBy('person_name', 'ASC')
                ->paginate(15);
            $dataCount = DB::table('lidata')
                ->where(function ($query) use ($request) {
                    $query->where('person_title', '=', $request->jobTitle)
                        ->orWhere('person_functions', '=', $request->jobTitle)
                        ->orWhere('person_detailed_function', '=',$request->jobTitle)
                        ->orWhere('person_seniority', '=', ' '.$request->jobTitle);
                })
                ->where('person_location_state', '=', $request->state)
                ->get();
            return view('userDashboard.people', ['allData' => $this->allData,
                'jobTitle'=>$request->jobTitle, 'state' => $request->state,
                'count' => count($dataCount)]);
        }
        elseif ( $request->name == null && $request->jobTitle != null && $request->company == null
            && $request->city == null && $request->state == null && $request->industry != null )
        {
            $this->allData = DB::table('lidata')
                ->whereNotIn('id', explode(',',$getdownloadedIds))
                ->where(function ($query) use ($request) {
                    $query->where('person_title', '=', $request->jobTitle)
                        ->orWhere('person_functions', '=', $request->jobTitle)
                        ->orWhere('person_detailed_function', '=',$request->jobTitle)
                        ->orWhere('person_seniority', '=', ' '.$request->jobTitle);
                })
                ->where('organization_industries', '=', $request->industry)
                ->orderBy('person_name', 'ASC')
                ->paginate(15);
            $dataCount = DB::table('lidata')
                ->where(function ($query) use ($request) {
                    $query->where('person_title', '=', $request->jobTitle)
                        ->orWhere('person_functions', '=', $request->jobTitle)
                        ->orWhere('person_detailed_function', '=',$request->jobTitle)
                        ->orWhere('person_seniority', '=', ' '.$request->jobTitle);
                })
                ->where('organization_industries', '=', $request->industry)
                ->get();
            return view('userDashboard.people', ['allData' => $this->allData,
                'jobTitle'=>$request->jobTitle, 'industry' => $request->industry,
                'count' => count($dataCount)]);
        }
        elseif ( $request->name == null && $request->jobTitle == null && $request->company != null
            && $request->city != null && $request->state == null && $request->industry == null )
        {
            $this->allData = DB::table('lidata')
                ->whereNotIn('id', explode(',',$getdownloadedIds))
                ->where('organization_name', '=', $request->company)
                ->where('person_location_city', '=', $request->city)
                ->orderBy('person_name', 'ASC')
                ->paginate(15);
            $dataCount = DB::table('lidata')
                ->where('organization_name', '=', $request->company)
                ->where('person_location_city', '=', $request->city)
                ->get();
            return view('userDashboard.people', ['allData' => $this->allData,
                'company'=>$request->company, 'city' => $request->city,
                'count' => count($dataCount)]);
        }
        elseif ( $request->name == null && $request->jobTitle == null && $request->company != null
            && $request->city == null && $request->state != null && $request->industry == null )
        {
            $this->allData = DB::table('lidata')
                ->whereNotIn('id', explode(',',$getdownloadedIds))
                ->where('organization_name', '=', $request->company)
                ->where('person_location_state', '=', $request->state)
                ->orderBy('person_name', 'ASC')
                ->paginate(15);
            $dataCount = DB::table('lidata')
                ->where('organization_name', '=', $request->company)
                ->where('person_location_state', '=', $request->state)
                ->get();
            return view('userDashboard.people', ['allData' => $this->allData,
                'company'=>$request->company, 'state' => $request->state,
                'count' => count($dataCount)]);
        }
        elseif ( $request->name == null && $request->jobTitle == null && $request->company != null
            && $request->city == null && $request->state == null && $request->industry != null )
        {
            $this->allData = DB::table('lidata')
                ->whereNotIn('id', explode(',',$getdownloadedIds))
                ->where('organization_name', '=', $request->company)
                ->where('organization_industries', '=', $request->industry)
                ->orderBy('person_name', 'ASC')
                ->paginate(15);
            $dataCount = DB::table('lidata')
                ->where('organization_name', '=', $request->company)
                ->where('organization_industries', '=', $request->industry)
                ->get();
            return view('userDashboard.people', ['allData' => $this->allData,
                'company'=>$request->company, 'industry' => $request->industry,
                'count' => count($dataCount)]);
        }
        elseif ( $request->name == null && $request->jobTitle == null && $request->company == null
            && $request->city != null && $request->state != null && $request->industry == null )
        {
            $this->allData = DB::table('lidata')
                ->whereNotIn('id', explode(',',$getdownloadedIds))
                ->where('person_location_city', '=', $request->city)
                ->where('person_location_state', '=', $request->state)
                ->orderBy('person_name', 'ASC')
                ->paginate(15);
            $dataCount = DB::table('lidata')
                ->where('person_location_city', '=', $request->city)
                ->where('person_location_state', '=', $request->state)
                ->get();
            return view('userDashboard.people', ['allData' => $this->allData,
                'city' => $request->city, 'state' => $request->state,
                'count' => count($dataCount)]);
        }
        elseif ( $request->name == null && $request->jobTitle == null && $request->company == null
            && $request->city != null && $request->state == null && $request->industry != null )
        {
            $this->allData = DB::table('lidata')
                ->whereNotIn('id', explode(',',$getdownloadedIds))
                ->where('person_location_city', '=', $request->city)
                ->where('organization_industries', '=', $request->industry)
                ->orderBy('person_name', 'ASC')
                ->paginate(15);
            $dataCount = DB::table('lidata')
                ->where('person_location_city', '=', $request->city)
                ->where('organization_industries', '=', $request->industry)
                ->get();
            return view('userDashboard.people', ['allData' => $this->allData,
                'city' => $request->city, 'industry' => $request->industry,
                'count' => count($dataCount)]);
        }
        elseif ( $request->name == null && $request->jobTitle == null && $request->company == null
            && $request->city == null && $request->state != null && $request->industry != null )
        {
            $this->allData = DB::table('lidata')
                ->whereNotIn('id', explode(',',$getdownloadedIds))
                ->where('person_location_state', '=', $request->state)
                ->where('organization_industries', '=', $request->industry)
                ->orderBy('person_name', 'ASC')
                ->paginate(15);
            $dataCount = DB::table('lidata')
                ->where('person_location_state', '=', $request->state)
                ->where('organization_industries', '=', $request->industry)
                ->get();
            return view('userDashboard.people', ['allData' => $this->allData,
                'state' => $request->state, 'industry' => $request->industry,
                'count' => count($dataCount)]);
        }

        elseif ( $request->name != null && $request->jobTitle != null && $request->company != null
            && $request->city == null && $request->state == null && $request->industry == null )
        {
            $this->allData = DB::table('lidata')
                ->whereNotIn('id', explode(',',$getdownloadedIds))
                ->where(function ($query) use ($request) {
                    $query->where('person_first_name_unanalyzed', '=',  $request->name)
                        ->orWhere('person_last_name_unanalyzed', '=',  $request->name)
                        ->orWhere('person_name', '=',  $request->name);
                })
                ->where(function ($query) use ($request) {
                    $query->where('person_title', '=', $request->jobTitle)
                        ->orWhere('person_functions', '=', $request->jobTitle)
                        ->orWhere('person_detailed_function', '=',$request->jobTitle)
                        ->orWhere('person_seniority', '=', ' '.$request->jobTitle);
                })
                ->where('organization_name', '=', $request->company)
                ->orderBy('person_name', 'ASC')
                ->paginate(15);
            $dataCount = DB::table('lidata')
                ->where(function ($query) use ($request) {
                    $query->where('person_first_name_unanalyzed', '=',  $request->name)
                        ->orWhere('person_last_name_unanalyzed', '=',  $request->name)
                        ->orWhere('person_name', '=',  $request->name);
                })
                ->where(function ($query) use ($request) {
                    $query->where('person_title', '=', $request->jobTitle)
                        ->orWhere('person_functions', '=', $request->jobTitle)
                        ->orWhere('person_detailed_function', '=',$request->jobTitle)
                        ->orWhere('person_seniority', '=', ' '.$request->jobTitle);
                })
                ->where('organization_name', '=', $request->company)
                ->get();
            return view('userDashboard.people', ['allData' => $this->allData,
                'name' => $request->name, 'jobTitle'=>$request->jobTitle, 'company'=>$request->company,
                'count' => count($dataCount)]);
        }
        elseif ( $request->name != null && $request->jobTitle != null && $request->company == null
            && $request->city != null && $request->state == null && $request->industry == null )
        {
            $this->allData = DB::table('lidata')
                ->whereNotIn('id', explode(',',$getdownloadedIds))
                ->where(function ($query) use ($request) {
                    $query->where('person_first_name_unanalyzed', '=',  $request->name)
                        ->orWhere('person_last_name_unanalyzed', '=',  $request->name)
                        ->orWhere('person_name', '=',  $request->name);
                })
                ->where(function ($query) use ($request) {
                    $query->where('person_title', '=', $request->jobTitle)
                        ->orWhere('person_functions', '=', $request->jobTitle)
                        ->orWhere('person_detailed_function', '=',$request->jobTitle)
                        ->orWhere('person_seniority', '=', ' '.$request->jobTitle);
                })
                ->where('person_location_city', '=', $request->city)
                ->orderBy('person_name', 'ASC')
                ->paginate(15);
            $dataCount = DB::table('lidata')
                ->where(function ($query) use ($request) {
                    $query->where('person_first_name_unanalyzed', '=',  $request->name)
                        ->orWhere('person_last_name_unanalyzed', '=',  $request->name)
                        ->orWhere('person_name', '=',  $request->name);
                })
                ->where(function ($query) use ($request) {
                    $query->where('person_title', '=', $request->jobTitle)
                        ->orWhere('person_functions', '=', $request->jobTitle)
                        ->orWhere('person_detailed_function', '=',$request->jobTitle)
                        ->orWhere('person_seniority', '=', ' '.$request->jobTitle);
                })
                ->where('person_location_city', '=', $request->city)
                ->get();
            return view('userDashboard.people', ['allData' => $this->allData,
                'name' => $request->name, 'jobTitle'=>$request->jobTitle,
                'city' => $request->city, 'count' => count($dataCount)]);
        }
        elseif ( $request->name != null && $request->jobTitle != null && $request->company == null
            && $request->city == null && $request->state != null && $request->industry == null )
        {
            $this->allData = DB::table('lidata')
                ->whereNotIn('id', explode(',',$getdownloadedIds))
                ->where(function ($query) use ($request) {
                    $query->where('person_first_name_unanalyzed', '=',  $request->name)
                        ->orWhere('person_last_name_unanalyzed', '=',  $request->name)
                        ->orWhere('person_name', '=',  $request->name);
                })
                ->where(function ($query) use ($request) {
                    $query->where('person_title', '=', $request->jobTitle)
                        ->orWhere('person_functions', '=', $request->jobTitle)
                        ->orWhere('person_detailed_function', '=',$request->jobTitle)
                        ->orWhere('person_seniority', '=', ' '.$request->jobTitle);
                })
                ->where('person_location_state', '=', $request->state)
                ->orderBy('person_name', 'ASC')
                ->paginate(15);
            $dataCount = DB::table('lidata')
                ->where(function ($query) use ($request) {
                    $query->where('person_first_name_unanalyzed', '=',  $request->name)
                        ->orWhere('person_last_name_unanalyzed', '=',  $request->name)
                        ->orWhere('person_name', '=',  $request->name);
                })
                ->where(function ($query) use ($request) {
                    $query->where('person_title', '=', $request->jobTitle)
                        ->orWhere('person_functions', '=', $request->jobTitle)
                        ->orWhere('person_detailed_function', '=',$request->jobTitle)
                        ->orWhere('person_seniority', '=', ' '.$request->jobTitle);
                })
                ->where('person_location_state', '=', $request->state)
                ->get();
            return view('userDashboard.people', ['allData' => $this->allData,
                'name' => $request->name, 'jobTitle'=>$request->jobTitle,
                'state' => $request->state,
                'count' => count($dataCount)]);
        }
        elseif ( $request->name != null && $request->jobTitle != null && $request->company == null
            && $request->city == null && $request->state == null && $request->industry != null )
        {
            $this->allData = DB::table('lidata')
                ->whereNotIn('id', explode(',',$getdownloadedIds))
                ->where(function ($query) use ($request) {
                    $query->where('person_first_name_unanalyzed', '=',  $request->name)
                        ->orWhere('person_last_name_unanalyzed', '=',  $request->name)
                        ->orWhere('person_name', '=',  $request->name);
                })
                ->where(function ($query) use ($request) {
                    $query->where('person_title', '=', $request->jobTitle)
                        ->orWhere('person_functions', '=', $request->jobTitle)
                        ->orWhere('person_detailed_function', '=',$request->jobTitle)
                        ->orWhere('person_seniority', '=', ' '.$request->jobTitle);
                })
                ->where('organization_industries', '=', $request->industry)
                ->orderBy('person_name', 'ASC')
                ->paginate(15);
            $dataCount = DB::table('lidata')
                ->where(function ($query) use ($request) {
                    $query->where('person_first_name_unanalyzed', '=',  $request->name)
                        ->orWhere('person_last_name_unanalyzed', '=',  $request->name)
                        ->orWhere('person_name', '=',  $request->name);
                })
                ->where(function ($query) use ($request) {
                    $query->where('person_title', '=', $request->jobTitle)
                        ->orWhere('person_functions', '=', $request->jobTitle)
                        ->orWhere('person_detailed_function', '=',$request->jobTitle)
                        ->orWhere('person_seniority', '=', ' '.$request->jobTitle);
                })
                ->where('organization_industries', '=', $request->industry)
                ->get();
            return view('userDashboard.people', ['allData' => $this->allData,
                'name' => $request->name, 'jobTitle'=>$request->jobTitle,
                'industry' => $request->industry, 'count' => count($dataCount)]);
        }
        elseif ( $request->name != null && $request->jobTitle == null && $request->company != null
            && $request->city != null && $request->state == null && $request->industry == null )
        {
            $this->allData = DB::table('lidata')
                ->whereNotIn('id', explode(',',$getdownloadedIds))
                ->where(function ($query) use ($request) {
                    $query->where('person_first_name_unanalyzed', '=',  $request->name)
                        ->orWhere('person_last_name_unanalyzed', '=',  $request->name)
                        ->orWhere('person_name', '=',  $request->name);
                })
                ->where('organization_name', '=', $request->company)
                ->where('person_location_city', '=', $request->city)
                ->orderBy('person_name', 'ASC')
                ->paginate(15);
            $dataCount = DB::table('lidata')
                ->where(function ($query) use ($request) {
                    $query->where('person_first_name_unanalyzed', '=',  $request->name)
                        ->orWhere('person_last_name_unanalyzed', '=',  $request->name)
                        ->orWhere('person_name', '=',  $request->name);
                })
                ->where('organization_name', '=', $request->company)
                ->where('person_location_city', '=', $request->city)
                ->get();
            return view('userDashboard.people', ['allData' => $this->allData,
                'name' => $request->name, 'company'=>$request->company,
                'city' => $request->city, 'count' => count($dataCount)]);
        }
        elseif ( $request->name != null && $request->jobTitle == null && $request->company != null
            && $request->city == null && $request->state != null && $request->industry == null )
        {
            $this->allData = DB::table('lidata')
                ->whereNotIn('id', explode(',',$getdownloadedIds))
                ->where(function ($query) use ($request) {
                    $query->where('person_first_name_unanalyzed', '=',  $request->name)
                        ->orWhere('person_last_name_unanalyzed', '=',  $request->name)
                        ->orWhere('person_name', '=',  $request->name);
                })
                ->where('organization_name', '=', $request->company)
                ->where('person_location_state', '=', $request->state)
                ->orderBy('person_name', 'ASC')
                ->paginate(15);
            $dataCount = DB::table('lidata')
                ->where(function ($query) use ($request) {
                    $query->where('person_first_name_unanalyzed', '=',  $request->name)
                        ->orWhere('person_last_name_unanalyzed', '=',  $request->name)
                        ->orWhere('person_name', '=',  $request->name);
                })
                ->where('organization_name', '=', $request->company)
                ->where('person_location_state', '=', $request->state)
                ->get();
            return view('userDashboard.people', ['allData' => $this->allData,
                'name' => $request->name, 'company'=>$request->company,
                'state' => $request->state,
                'count' => count($dataCount)]);
        }
        elseif ( $request->name != null && $request->jobTitle == null && $request->company != null
            && $request->city == null && $request->state == null && $request->industry != null )
        {
            $this->allData = DB::table('lidata')
                ->whereNotIn('id', explode(',',$getdownloadedIds))
                ->where(function ($query) use ($request) {
                    $query->where('person_first_name_unanalyzed', '=',  $request->name)
                        ->orWhere('person_last_name_unanalyzed', '=',  $request->name)
                        ->orWhere('person_name', '=',  $request->name);
                })
                ->where('organization_name', '=', $request->company)
                ->where('organization_industries', '=', $request->industry)
                ->orderBy('person_name', 'ASC')
                ->paginate(15);
            $dataCount = DB::table('lidata')
                ->where(function ($query) use ($request) {
                    $query->where('person_first_name_unanalyzed', '=',  $request->name)
                        ->orWhere('person_last_name_unanalyzed', '=',  $request->name)
                        ->orWhere('person_name', '=',  $request->name);
                })
                ->where('organization_name', '=', $request->company)
                ->where('organization_industries', '=', $request->industry)
                ->get();
            return view('userDashboard.people', ['allData' => $this->allData,
                'name' => $request->name, 'company'=>$request->company,
                'industry' => $request->industry, 'count' => count($dataCount)]);
        }
        elseif ( $request->name != null && $request->jobTitle == null && $request->company == null
            && $request->city != null && $request->state != null && $request->industry == null )
        {
            $this->allData = DB::table('lidata')
                ->whereNotIn('id', explode(',',$getdownloadedIds))
                ->where(function ($query) use ($request) {
                    $query->where('person_first_name_unanalyzed', '=',  $request->name)
                        ->orWhere('person_last_name_unanalyzed', '=',  $request->name)
                        ->orWhere('person_name', '=',  $request->name);
                })

                ->where('person_location_city', '=', $request->city)
                ->where('person_location_state', '=', $request->state)
                ->orderBy('person_name', 'ASC')
                ->paginate(15);
            $dataCount = DB::table('lidata')
                ->where(function ($query) use ($request) {
                    $query->where('person_first_name_unanalyzed', '=',  $request->name)
                        ->orWhere('person_last_name_unanalyzed', '=',  $request->name)
                        ->orWhere('person_name', '=',  $request->name);
                })
                ->where('person_location_city', '=', $request->city)
                ->where('person_location_state', '=', $request->state)
                ->get();
            return view('userDashboard.people', ['allData' => $this->allData,
                'name' => $request->name,
                'city' => $request->city, 'state' => $request->state,
                'count' => count($dataCount)]);
        }
        elseif ( $request->name != null && $request->jobTitle == null && $request->company == null
            && $request->city != null && $request->state == null && $request->industry != null )
        {
            $this->allData = DB::table('lidata')
                ->whereNotIn('id', explode(',',$getdownloadedIds))
                ->where(function ($query) use ($request) {
                    $query->where('person_first_name_unanalyzed', '=',  $request->name)
                        ->orWhere('person_last_name_unanalyzed', '=',  $request->name)
                        ->orWhere('person_name', '=',  $request->name);
                })

                ->where('person_location_city', '=', $request->city)
                ->where('organization_industries', '=', $request->industry)
                ->orderBy('person_name', 'ASC')
                ->paginate(15);
            $dataCount = DB::table('lidata')
                ->where(function ($query) use ($request) {
                    $query->where('person_first_name_unanalyzed', '=',  $request->name)
                        ->orWhere('person_last_name_unanalyzed', '=',  $request->name)
                        ->orWhere('person_name', '=',  $request->name);
                })
                ->where('person_location_city', '=', $request->city)
                ->where('organization_industries', '=', $request->industry)
                ->get();
            return view('userDashboard.people', ['allData' => $this->allData,
                'name' => $request->name,
                'city' => $request->city,
                'industry' => $request->industry, 'count' => count($dataCount)]);
        }
        elseif ( $request->name != null && $request->jobTitle == null && $request->company == null
            && $request->city == null && $request->state != null && $request->industry != null )
        {
            $this->allData = DB::table('lidata')
                ->whereNotIn('id', explode(',',$getdownloadedIds))
                ->where(function ($query) use ($request) {
                    $query->where('person_first_name_unanalyzed', '=',  $request->name)
                        ->orWhere('person_last_name_unanalyzed', '=',  $request->name)
                        ->orWhere('person_name', '=',  $request->name);
                })
                ->where('person_location_state', '=', $request->state)
                ->where('organization_industries', '=', $request->industry)
                ->orderBy('person_name', 'ASC')
                ->paginate(15);
            $dataCount = DB::table('lidata')
                ->where(function ($query) use ($request) {
                    $query->where('person_first_name_unanalyzed', '=',  $request->name)
                        ->orWhere('person_last_name_unanalyzed', '=',  $request->name)
                        ->orWhere('person_name', '=',  $request->name);
                })
                ->where('person_location_state', '=', $request->state)
                ->where('organization_industries', '=', $request->industry)
                ->get();
            return view('userDashboard.people', ['allData' => $this->allData,
                'name' => $request->name,
                'state' => $request->state,
                'industry' => $request->industry, 'count' => count($dataCount)]);
        }
        elseif ( $request->name == null && $request->jobTitle != null && $request->company != null
            && $request->city != null && $request->state == null && $request->industry == null )
        {
            $this->allData = DB::table('lidata')
                ->whereNotIn('id', explode(',',$getdownloadedIds))
                ->where(function ($query) use ($request) {
                    $query->where('person_title', '=', $request->jobTitle)
                        ->orWhere('person_functions', '=', $request->jobTitle)
                        ->orWhere('person_detailed_function', '=',$request->jobTitle)
                        ->orWhere('person_seniority', '=', ' '.$request->jobTitle);
                })
                ->where('organization_name', '=', $request->company)
                ->where('person_location_city', '=', $request->city)
                ->orderBy('person_name', 'ASC')
                ->paginate(15);
            $dataCount = DB::table('lidata')
                ->where(function ($query) use ($request) {
                    $query->where('person_title', '=', $request->jobTitle)
                        ->orWhere('person_functions', '=', $request->jobTitle)
                        ->orWhere('person_detailed_function', '=',$request->jobTitle)
                        ->orWhere('person_seniority', '=', ' '.$request->jobTitle);
                })
                ->where('organization_name', '=', $request->company)
                ->where('person_location_city', '=', $request->city)
                ->get();
            return view('userDashboard.people', ['allData' => $this->allData,
                'jobTitle'=>$request->jobTitle, 'company'=>$request->company,
                'city' => $request->city,
                'count' => count($dataCount)]);
        }
        elseif ( $request->name == null && $request->jobTitle != null && $request->company != null
            && $request->city == null && $request->state != null && $request->industry == null )
        {
            $this->allData = DB::table('lidata')
                ->whereNotIn('id', explode(',',$getdownloadedIds))
                ->where(function ($query) use ($request) {
                    $query->where('person_title', '=', $request->jobTitle)
                        ->orWhere('person_functions', '=', $request->jobTitle)
                        ->orWhere('person_detailed_function', '=',$request->jobTitle)
                        ->orWhere('person_seniority', '=', ' '.$request->jobTitle);
                })
                ->where('organization_name', '=', $request->company)
                ->where('person_location_state', '=', $request->state)
                ->orderBy('person_name', 'ASC')
                ->paginate(15);
            $dataCount = DB::table('lidata')
                ->where(function ($query) use ($request) {
                    $query->where('person_title', '=', $request->jobTitle)
                        ->orWhere('person_functions', '=', $request->jobTitle)
                        ->orWhere('person_detailed_function', '=',$request->jobTitle)
                        ->orWhere('person_seniority', '=', ' '.$request->jobTitle);
                })
                ->where('organization_name', '=', $request->company)
                ->where('person_location_state', '=', $request->state)
                ->get();
            return view('userDashboard.people', ['allData' => $this->allData,
                'jobTitle'=>$request->jobTitle, 'company'=>$request->company,
                'state' => $request->state,
                'count' => count($dataCount)]);
        }
        elseif ( $request->name == null && $request->jobTitle != null && $request->company != null
            && $request->city == null && $request->state == null && $request->industry != null )
        {
            $this->allData = DB::table('lidata')
                ->whereNotIn('id', explode(',',$getdownloadedIds))
                ->where(function ($query) use ($request) {
                    $query->where('person_title', '=', $request->jobTitle)
                        ->orWhere('person_functions', '=', $request->jobTitle)
                        ->orWhere('person_detailed_function', '=',$request->jobTitle)
                        ->orWhere('person_seniority', '=', ' '.$request->jobTitle);
                })
                ->where('organization_name', '=', $request->company)
                ->where('organization_industries', '=', $request->industry)
                ->orderBy('person_name', 'ASC')
                ->paginate(15);
            $dataCount = DB::table('lidata')
                ->where(function ($query) use ($request) {
                    $query->where('person_title', '=', $request->jobTitle)
                        ->orWhere('person_functions', '=', $request->jobTitle)
                        ->orWhere('person_detailed_function', '=',$request->jobTitle)
                        ->orWhere('person_seniority', '=', ' '.$request->jobTitle);
                })
                ->where('organization_name', '=', $request->company)
                ->where('organization_industries', '=', $request->industry)
                ->get();
            return view('userDashboard.people', ['allData' => $this->allData,
                'jobTitle'=>$request->jobTitle, 'company'=>$request->company,
                'industry' => $request->industry, 'count' => count($dataCount)]);
        }
        elseif ( $request->name == null && $request->jobTitle != null && $request->company == null
            && $request->city != null && $request->state != null && $request->industry == null )
        {
            $this->allData = DB::table('lidata')
                ->whereNotIn('id', explode(',',$getdownloadedIds))
                ->where(function ($query) use ($request) {
                    $query->where('person_title', '=', $request->jobTitle)
                        ->orWhere('person_functions', '=', $request->jobTitle)
                        ->orWhere('person_detailed_function', '=',$request->jobTitle)
                        ->orWhere('person_seniority', '=', ' '.$request->jobTitle);
                })
                ->where('person_location_city', '=', $request->city)
                ->where('person_location_state', '=', $request->state)
                ->orderBy('person_name', 'ASC')
                ->paginate(15);
            $dataCount = DB::table('lidata')
                ->where(function ($query) use ($request) {
                    $query->where('person_title', '=', $request->jobTitle)
                        ->orWhere('person_functions', '=', $request->jobTitle)
                        ->orWhere('person_detailed_function', '=',$request->jobTitle)
                        ->orWhere('person_seniority', '=', ' '.$request->jobTitle);
                })
                ->where('person_location_city', '=', $request->city)
                ->where('person_location_state', '=', $request->state)
                ->get();
            return view('userDashboard.people', ['allData' => $this->allData,
                'jobTitle'=>$request->jobTitle,
                'city' => $request->city, 'state' => $request->state,
                'count' => count($dataCount)]);
        }
        elseif ( $request->name == null && $request->jobTitle != null && $request->company == null
            && $request->city != null && $request->state == null && $request->industry != null )
        {
            $this->allData = DB::table('lidata')
                ->whereNotIn('id', explode(',',$getdownloadedIds))
                ->where(function ($query) use ($request) {
                    $query->where('person_title', '=', $request->jobTitle)
                        ->orWhere('person_functions', '=', $request->jobTitle)
                        ->orWhere('person_detailed_function', '=',$request->jobTitle)
                        ->orWhere('person_seniority', '=', ' '.$request->jobTitle);
                })
                ->where('person_location_city', '=', $request->city)
                ->where('organization_industries', '=', $request->industry)
                ->orderBy('person_name', 'ASC')
                ->paginate(15);
            $dataCount = DB::table('lidata')
                ->where(function ($query) use ($request) {
                    $query->where('person_title', '=', $request->jobTitle)
                        ->orWhere('person_functions', '=', $request->jobTitle)
                        ->orWhere('person_detailed_function', '=',$request->jobTitle)
                        ->orWhere('person_seniority', '=', ' '.$request->jobTitle);
                })
                ->where('person_location_city', '=', $request->city)
                ->where('organization_industries', '=', $request->industry)
                ->get();
            return view('userDashboard.people', ['allData' => $this->allData,
                'jobTitle'=>$request->jobTitle,
                'city' => $request->city,
                'industry' => $request->industry, 'count' => count($dataCount)]);
        }
        elseif ( $request->name == null && $request->jobTitle != null && $request->company == null
            && $request->city == null && $request->state != null && $request->industry != null )
        {
            $this->allData = DB::table('lidata')
                ->whereNotIn('id', explode(',',$getdownloadedIds))
                ->where(function ($query) use ($request) {
                    $query->where('person_title', '=', $request->jobTitle)
                        ->orWhere('person_functions', '=', $request->jobTitle)
                        ->orWhere('person_detailed_function', '=',$request->jobTitle)
                        ->orWhere('person_seniority', '=', ' '.$request->jobTitle);
                })
                ->where('person_location_state', '=', $request->state)
                ->where('organization_industries', '=', $request->industry)
                ->orderBy('person_name', 'ASC')
                ->paginate(15);
            $dataCount = DB::table('lidata')
                ->where(function ($query) use ($request) {
                    $query->where('person_title', '=', $request->jobTitle)
                        ->orWhere('person_functions', '=', $request->jobTitle)
                        ->orWhere('person_detailed_function', '=',$request->jobTitle)
                        ->orWhere('person_seniority', '=', ' '.$request->jobTitle);
                })
                ->where('person_location_state', '=', $request->state)
                ->where('organization_industries', '=', $request->industry)
                ->get();
            return view('userDashboard.people', ['allData' => $this->allData,
                'jobTitle'=>$request->jobTitle,
                'state' => $request->state,
                'industry' => $request->industry, 'count' => count($dataCount)]);
        }
        elseif ( $request->name == null && $request->jobTitle == null && $request->company != null
            && $request->city != null && $request->state != null && $request->industry == null )
        {
            $this->allData = DB::table('lidata')
                ->whereNotIn('id', explode(',',$getdownloadedIds))
                ->where('organization_name', '=', $request->company)
                ->where('person_location_city', '=', $request->city)
                ->where('person_location_state', '=', $request->state)
                ->orderBy('person_name', 'ASC')
                ->paginate(15);
            $dataCount = DB::table('lidata')
                ->where('organization_name', '=', $request->company)
                ->where('person_location_city', '=', $request->city)
                ->where('person_location_state', '=', $request->state)
                ->get();
            return view('userDashboard.people', ['allData' => $this->allData,
                'company'=>$request->company,
                'city' => $request->city, 'state' => $request->state,
                'count' => count($dataCount)]);
        }
        elseif ( $request->name == null && $request->jobTitle == null && $request->company != null
            && $request->city != null && $request->state == null && $request->industry != null )
        {
            $this->allData = DB::table('lidata')
                ->whereNotIn('id', explode(',',$getdownloadedIds))
                ->where('organization_name', '=', $request->company)
                ->where('person_location_city', '=', $request->city)
                ->where('organization_industries', '=', $request->industry)
                ->orderBy('person_name', 'ASC')
                ->paginate(15);
            $dataCount = DB::table('lidata')
                ->where('organization_name', '=', $request->company)
                ->where('person_location_city', '=', $request->city)
                ->where('organization_industries', '=', $request->industry)
                ->get();
            return view('userDashboard.people', ['allData' => $this->allData,
                'company'=>$request->company,
                'city' => $request->city,
                'industry' => $request->industry, 'count' => count($dataCount)]);
        }
        elseif ( $request->name == null && $request->jobTitle == null && $request->company != null
            && $request->city == null && $request->state != null && $request->industry != null )
        {
            $this->allData = DB::table('lidata')
                ->whereNotIn('id', explode(',',$getdownloadedIds))
                ->where('organization_name', '=', $request->company)
                ->where('person_location_state', '=', $request->state)
                ->where('organization_industries', '=', $request->industry)
                ->orderBy('person_name', 'ASC')
                ->paginate(15);
            $dataCount = DB::table('lidata')
                ->where('organization_name', '=', $request->company)
                ->where('person_location_state', '=', $request->state)
                ->where('organization_industries', '=', $request->industry)
                ->get();
            return view('userDashboard.people', ['allData' => $this->allData,
                'company'=>$request->company,
                'state' => $request->state,
                'industry' => $request->industry, 'count' => count($dataCount)]);
        }
        elseif ( $request->name == null && $request->jobTitle == null && $request->company == null
            && $request->city != null && $request->state != null && $request->industry != null )
        {
            $this->allData = DB::table('lidata')
                ->whereNotIn('id', explode(',',$getdownloadedIds))
                ->where('person_location_city', '=', $request->city)
                ->where('person_location_state', '=', $request->state)
                ->where('organization_industries', '=', $request->industry)
                ->orderBy('person_name', 'ASC')
                ->paginate(15);
            $dataCount = DB::table('lidata')
                ->where('person_location_city', '=', $request->city)
                ->where('person_location_state', '=', $request->state)
                ->where('organization_industries', '=', $request->industry)
                ->get();
            return view('userDashboard.people', ['allData' => $this->allData,
                'city' => $request->city, 'state' => $request->state,
                'industry' => $request->industry, 'count' => count($dataCount)]);
        }
        elseif ( $request->name != null && $request->jobTitle != null && $request->company != null
            && $request->city != null && $request->state == null && $request->industry == null )
        {
            $this->allData = DB::table('lidata')
                ->whereNotIn('id', explode(',',$getdownloadedIds))
                ->where(function ($query) use ($request) {
                    $query->where('person_first_name_unanalyzed', '=',  $request->name)
                        ->orWhere('person_last_name_unanalyzed', '=',  $request->name)
                        ->orWhere('person_name', '=',  $request->name);
                })
                ->where(function ($query) use ($request) {
                    $query->where('person_title', '=', $request->jobTitle)
                        ->orWhere('person_functions', '=', $request->jobTitle)
                        ->orWhere('person_detailed_function', '=',$request->jobTitle)
                        ->orWhere('person_seniority', '=', ' '.$request->jobTitle);
                })
                ->where('organization_name', '=', $request->company)
                ->where('person_location_city', '=', $request->city)
                ->orderBy('person_name', 'ASC')
                ->paginate(15);
            $dataCount = DB::table('lidata')
                ->where(function ($query) use ($request) {
                    $query->where('person_first_name_unanalyzed', '=',  $request->name)
                        ->orWhere('person_last_name_unanalyzed', '=',  $request->name)
                        ->orWhere('person_name', '=',  $request->name);
                })
                ->where(function ($query) use ($request) {
                    $query->where('person_title', '=', $request->jobTitle)
                        ->orWhere('person_functions', '=', $request->jobTitle)
                        ->orWhere('person_detailed_function', '=',$request->jobTitle)
                        ->orWhere('person_seniority', '=', ' '.$request->jobTitle);
                })
                ->where('organization_name', '=', $request->company)
                ->where('person_location_city', '=', $request->city)
                ->get();
            return view('userDashboard.people', ['allData' => $this->allData,
                'name' => $request->name, 'jobTitle'=>$request->jobTitle, 'company'=>$request->company,
                'city' => $request->city,
                'count' => count($dataCount)]);
        }
        elseif ( $request->name != null && $request->jobTitle != null && $request->company != null
            && $request->city == null && $request->state != null && $request->industry == null )
        {
            $this->allData = DB::table('lidata')
                ->whereNotIn('id', explode(',',$getdownloadedIds))
                ->where(function ($query) use ($request) {
                    $query->where('person_first_name_unanalyzed', '=',  $request->name)
                        ->orWhere('person_last_name_unanalyzed', '=',  $request->name)
                        ->orWhere('person_name', '=',  $request->name);
                })
                ->where(function ($query) use ($request) {
                    $query->where('person_title', '=', $request->jobTitle)
                        ->orWhere('person_functions', '=', $request->jobTitle)
                        ->orWhere('person_detailed_function', '=',$request->jobTitle)
                        ->orWhere('person_seniority', '=', ' '.$request->jobTitle);
                })
                ->where('organization_name', '=', $request->company)
                ->where('person_location_state', '=', $request->state)
                ->orderBy('person_name', 'ASC')
                ->paginate(15);
            $dataCount = DB::table('lidata')
                ->where(function ($query) use ($request) {
                    $query->where('person_first_name_unanalyzed', '=',  $request->name)
                        ->orWhere('person_last_name_unanalyzed', '=',  $request->name)
                        ->orWhere('person_name', '=',  $request->name);
                })
                ->where(function ($query) use ($request) {
                    $query->where('person_title', '=', $request->jobTitle)
                        ->orWhere('person_functions', '=', $request->jobTitle)
                        ->orWhere('person_detailed_function', '=',$request->jobTitle)
                        ->orWhere('person_seniority', '=', ' '.$request->jobTitle);
                })
                ->where('organization_name', '=', $request->company)
                ->where('person_location_state', '=', $request->state)
                ->get();
            return view('userDashboard.people', ['allData' => $this->allData,
                'name' => $request->name, 'jobTitle'=>$request->jobTitle, 'company'=>$request->company,
                'state' => $request->state,
                'count' => count($dataCount)]);
        }
        elseif ( $request->name != null && $request->jobTitle != null && $request->company == null
            && $request->city != null && $request->state != null && $request->industry == null )
        {
            $this->allData = DB::table('lidata')
                ->whereNotIn('id', explode(',',$getdownloadedIds))
                ->where(function ($query) use ($request) {
                    $query->where('person_first_name_unanalyzed', '=',  $request->name)
                        ->orWhere('person_last_name_unanalyzed', '=',  $request->name)
                        ->orWhere('person_name', '=',  $request->name);
                })
                ->where(function ($query) use ($request) {
                    $query->where('person_title', '=', $request->jobTitle)
                        ->orWhere('person_functions', '=', $request->jobTitle)
                        ->orWhere('person_detailed_function', '=',$request->jobTitle)
                        ->orWhere('person_seniority', '=', ' '.$request->jobTitle);
                })
                ->where('person_location_city', '=', $request->city)
                ->where('person_location_state', '=', $request->state)
                ->orderBy('person_name', 'ASC')
                ->paginate(15);
            $dataCount = DB::table('lidata')
                ->where(function ($query) use ($request) {
                    $query->where('person_first_name_unanalyzed', '=',  $request->name)
                        ->orWhere('person_last_name_unanalyzed', '=',  $request->name)
                        ->orWhere('person_name', '=',  $request->name);
                })
                ->where(function ($query) use ($request) {
                    $query->where('person_title', '=', $request->jobTitle)
                        ->orWhere('person_functions', '=', $request->jobTitle)
                        ->orWhere('person_detailed_function', '=',$request->jobTitle)
                        ->orWhere('person_seniority', '=', ' '.$request->jobTitle);
                })
                ->where('person_location_city', '=', $request->city)
                ->where('person_location_state', '=', $request->state)
                ->get();
            return view('userDashboard.people', ['allData' => $this->allData,
                'name' => $request->name, 'jobTitle'=>$request->jobTitle,
                'city' => $request->city, 'state' => $request->state,
                'count' => count($dataCount)]);
        }
        elseif ( $request->name != null && $request->jobTitle != null && $request->company != null
            && $request->city == null && $request->state != null && $request->industry == null )
        {
            $this->allData = DB::table('lidata')
                ->whereNotIn('id', explode(',',$getdownloadedIds))
                ->where(function ($query) use ($request) {
                    $query->where('person_first_name_unanalyzed', '=',  $request->name)
                        ->orWhere('person_last_name_unanalyzed', '=',  $request->name)
                        ->orWhere('person_name', '=',  $request->name);
                })
                ->where(function ($query) use ($request) {
                    $query->where('person_title', '=', $request->jobTitle)
                        ->orWhere('person_functions', '=', $request->jobTitle)
                        ->orWhere('person_detailed_function', '=',$request->jobTitle)
                        ->orWhere('person_seniority', '=', ' '.$request->jobTitle);
                })
                ->where('organization_name', '=', $request->company)
                ->where('organization_industries', '=', $request->industry)
                ->orderBy('person_name', 'ASC')
                ->paginate(15);
            $dataCount = DB::table('lidata')
                ->where(function ($query) use ($request) {
                    $query->where('person_first_name_unanalyzed', '=',  $request->name)
                        ->orWhere('person_last_name_unanalyzed', '=',  $request->name)
                        ->orWhere('person_name', '=',  $request->name);
                })
                ->where(function ($query) use ($request) {
                    $query->where('person_title', '=', $request->jobTitle)
                        ->orWhere('person_functions', '=', $request->jobTitle)
                        ->orWhere('person_detailed_function', '=',$request->jobTitle)
                        ->orWhere('person_seniority', '=', ' '.$request->jobTitle);
                })
                ->where('organization_name', '=', $request->company)
                ->where('organization_industries', '=', $request->industry)
                ->get();
            return view('userDashboard.people', ['allData' => $this->allData,
                'name' => $request->name, 'jobTitle'=>$request->jobTitle, 'company'=>$request->company,
                'industry' => $request->industry, 'count' => count($dataCount)]);
        }
        elseif ( $request->name != null && $request->jobTitle != null && $request->company == null
            && $request->city != null && $request->state == null && $request->industry != null )
        {
            $this->allData = DB::table('lidata')
                ->whereNotIn('id', explode(',',$getdownloadedIds))
                ->where(function ($query) use ($request) {
                    $query->where('person_first_name_unanalyzed', '=',  $request->name)
                        ->orWhere('person_last_name_unanalyzed', '=',  $request->name)
                        ->orWhere('person_name', '=',  $request->name);
                })
                ->where(function ($query) use ($request) {
                    $query->where('person_title', '=', $request->jobTitle)
                        ->orWhere('person_functions', '=', $request->jobTitle)
                        ->orWhere('person_detailed_function', '=',$request->jobTitle)
                        ->orWhere('person_seniority', '=', ' '.$request->jobTitle);
                })
                ->where('person_location_city', '=', $request->city)
                ->where('organization_industries', '=', $request->industry)
                ->orderBy('person_name', 'ASC')
                ->paginate(15);
            $dataCount = DB::table('lidata')
                ->where(function ($query) use ($request) {
                    $query->where('person_first_name_unanalyzed', '=',  $request->name)
                        ->orWhere('person_last_name_unanalyzed', '=',  $request->name)
                        ->orWhere('person_name', '=',  $request->name);
                })
                ->where(function ($query) use ($request) {
                    $query->where('person_title', '=', $request->jobTitle)
                        ->orWhere('person_functions', '=', $request->jobTitle)
                        ->orWhere('person_detailed_function', '=',$request->jobTitle)
                        ->orWhere('person_seniority', '=', ' '.$request->jobTitle);
                })
                ->where('person_location_city', '=', $request->city)
                ->where('organization_industries', '=', $request->industry)
                ->get();
            return view('userDashboard.people', ['allData' => $this->allData,
                'name' => $request->name, 'jobTitle'=>$request->jobTitle,
                'city' => $request->city,
                'industry' => $request->industry, 'count' => count($dataCount)]);
        }
        elseif ( $request->name != null && $request->jobTitle != null && $request->company == null
            && $request->city == null && $request->state != null && $request->industry != null )
        {
            $this->allData = DB::table('lidata')
                ->whereNotIn('id', explode(',',$getdownloadedIds))
                ->where(function ($query) use ($request) {
                    $query->where('person_first_name_unanalyzed', '=',  $request->name)
                        ->orWhere('person_last_name_unanalyzed', '=',  $request->name)
                        ->orWhere('person_name', '=',  $request->name);
                })
                ->where(function ($query) use ($request) {
                    $query->where('person_title', '=', $request->jobTitle)
                        ->orWhere('person_functions', '=', $request->jobTitle)
                        ->orWhere('person_detailed_function', '=',$request->jobTitle)
                        ->orWhere('person_seniority', '=', ' '.$request->jobTitle);
                })

                ->where('person_location_state', '=', $request->state)
                ->where('organization_industries', '=', $request->industry)
                ->orderBy('person_name', 'ASC')
                ->paginate(15);
            $dataCount = DB::table('lidata')
                ->where(function ($query) use ($request) {
                    $query->where('person_first_name_unanalyzed', '=',  $request->name)
                        ->orWhere('person_last_name_unanalyzed', '=',  $request->name)
                        ->orWhere('person_name', '=',  $request->name);
                })
                ->where(function ($query) use ($request) {
                    $query->where('person_title', '=', $request->jobTitle)
                        ->orWhere('person_functions', '=', $request->jobTitle)
                        ->orWhere('person_detailed_function', '=',$request->jobTitle)
                        ->orWhere('person_seniority', '=', ' '.$request->jobTitle);
                })
                ->where('person_location_state', '=', $request->state)
                ->where('organization_industries', '=', $request->industry)
                ->get();
            return view('userDashboard.people', ['allData' => $this->allData,
                'name' => $request->name, 'jobTitle'=>$request->jobTitle,
                'state' => $request->state,
                'industry' => $request->industry, 'count' => count($dataCount)]);
        }
        elseif ( $request->name != null && $request->jobTitle == null && $request->company != null
            && $request->city != null && $request->state != null && $request->industry == null )
        {
            $this->allData = DB::table('lidata')
                ->whereNotIn('id', explode(',',$getdownloadedIds))
                ->where(function ($query) use ($request) {
                    $query->where('person_first_name_unanalyzed', '=',  $request->name)
                        ->orWhere('person_last_name_unanalyzed', '=',  $request->name)
                        ->orWhere('person_name', '=',  $request->name);
                })
                ->where('organization_name', '=', $request->company)
                ->where('person_location_city', '=', $request->city)
                ->where('person_location_state', '=', $request->state)
                ->orderBy('person_name', 'ASC')
                ->paginate(15);
            $dataCount = DB::table('lidata')
                ->where(function ($query) use ($request) {
                    $query->where('person_first_name_unanalyzed', '=',  $request->name)
                        ->orWhere('person_last_name_unanalyzed', '=',  $request->name)
                        ->orWhere('person_name', '=',  $request->name);
                })
                ->where('organization_name', '=', $request->company)
                ->where('person_location_city', '=', $request->city)
                ->where('person_location_state', '=', $request->state)
                ->get();
            return view('userDashboard.people', ['allData' => $this->allData,
                'name' => $request->name, 'company'=>$request->company,
                'city' => $request->city, 'state' => $request->state,
                'count' => count($dataCount)]);
        }
        elseif ( $request->name != null && $request->jobTitle == null && $request->company != null
            && $request->city != null && $request->state == null && $request->industry != null )
        {
            $this->allData = DB::table('lidata')
                ->whereNotIn('id', explode(',',$getdownloadedIds))
                ->where(function ($query) use ($request) {
                    $query->where('person_first_name_unanalyzed', '=',  $request->name)
                        ->orWhere('person_last_name_unanalyzed', '=',  $request->name)
                        ->orWhere('person_name', '=',  $request->name);
                })
                ->where('organization_name', '=', $request->company)
                ->where('person_location_city', '=', $request->city)
                ->where('organization_industries', '=', $request->industry)
                ->orderBy('person_name', 'ASC')
                ->paginate(15);
            $dataCount = DB::table('lidata')
                ->where(function ($query) use ($request) {
                    $query->where('person_first_name_unanalyzed', '=',  $request->name)
                        ->orWhere('person_last_name_unanalyzed', '=',  $request->name)
                        ->orWhere('person_name', '=',  $request->name);
                })
                ->where('organization_name', '=', $request->company)
                ->where('person_location_city', '=', $request->city)
                ->where('organization_industries', '=', $request->industry)
                ->get();
            return view('userDashboard.people', ['allData' => $this->allData,
                'name' => $request->name, 'company'=>$request->company,
                'city' => $request->city,
                'industry' => $request->industry, 'count' => count($dataCount)]);
        }
        elseif ( $request->name != null && $request->jobTitle == null && $request->company == null
            && $request->city != null && $request->state != null && $request->industry != null )
        {
            $this->allData = DB::table('lidata')
                ->whereNotIn('id', explode(',',$getdownloadedIds))
                ->where(function ($query) use ($request) {
                    $query->where('person_first_name_unanalyzed', '=',  $request->name)
                        ->orWhere('person_last_name_unanalyzed', '=',  $request->name)
                        ->orWhere('person_name', '=',  $request->name);
                })

                ->where('person_location_city', '=', $request->city)
                ->where('person_location_state', '=', $request->state)
                ->where('organization_industries', '=', $request->industry)
                ->orderBy('person_name', 'ASC')
                ->paginate(15);
            $dataCount = DB::table('lidata')
                ->where(function ($query) use ($request) {
                    $query->where('person_first_name_unanalyzed', '=',  $request->name)
                        ->orWhere('person_last_name_unanalyzed', '=',  $request->name)
                        ->orWhere('person_name', '=',  $request->name);
                })
                ->where('person_location_city', '=', $request->city)
                ->where('person_location_state', '=', $request->state)
                ->where('organization_industries', '=', $request->industry)
                ->get();
            return view('userDashboard.people', ['allData' => $this->allData,
                'name' => $request->name,
                'city' => $request->city, 'state' => $request->state,
                'industry' => $request->industry, 'count' => count($dataCount)]);
        }
        elseif ( $request->name == null && $request->jobTitle != null && $request->company != null
            && $request->city != null && $request->state != null && $request->industry == null )
        {
            $this->allData = DB::table('lidata')
                ->whereNotIn('id', explode(',',$getdownloadedIds))
                ->where(function ($query) use ($request) {
                    $query->where('person_title', '=', $request->jobTitle)
                        ->orWhere('person_functions', '=', $request->jobTitle)
                        ->orWhere('person_detailed_function', '=',$request->jobTitle)
                        ->orWhere('person_seniority', '=', ' '.$request->jobTitle);
                })
                ->where('organization_name', '=', $request->company)
                ->where('person_location_city', '=', $request->city)
                ->where('person_location_state', '=', $request->state)
                ->orderBy('person_name', 'ASC')
                ->paginate(15);
            $dataCount = DB::table('lidata')
                ->where(function ($query) use ($request) {
                    $query->where('person_title', '=', $request->jobTitle)
                        ->orWhere('person_functions', '=', $request->jobTitle)
                        ->orWhere('person_detailed_function', '=',$request->jobTitle)
                        ->orWhere('person_seniority', '=', ' '.$request->jobTitle);
                })
                ->where('organization_name', '=', $request->company)
                ->where('person_location_city', '=', $request->city)
                ->where('person_location_state', '=', $request->state)
                ->get();
            return view('userDashboard.people', ['allData' => $this->allData,
                'jobTitle' => $request->jobTitle, 'company'=>$request->company,
                'city' => $request->city, 'state' => $request->state,
                'count' => count($dataCount)]);
        }
        elseif ( $request->name == null && $request->jobTitle != null && $request->company != null
            && $request->city != null && $request->state == null && $request->industry != null )
        {
            $this->allData = DB::table('lidata')
                ->whereNotIn('id', explode(',',$getdownloadedIds))
                ->where(function ($query) use ($request) {
                    $query->where('person_title', '=', $request->jobTitle)
                        ->orWhere('person_functions', '=', $request->jobTitle)
                        ->orWhere('person_detailed_function', '=',$request->jobTitle)
                        ->orWhere('person_seniority', '=', ' '.$request->jobTitle);
                })
                ->where('organization_name', '=', $request->company)
                ->where('person_location_city', '=', $request->city)
                ->where('organization_industries', '=', $request->industry)
                ->orderBy('person_name', 'ASC')
                ->paginate(15);
            $dataCount = DB::table('lidata')
                ->where(function ($query) use ($request) {
                    $query->where('person_title', '=', $request->jobTitle)
                        ->orWhere('person_functions', '=', $request->jobTitle)
                        ->orWhere('person_detailed_function', '=',$request->jobTitle)
                        ->orWhere('person_seniority', '=', ' '.$request->jobTitle);
                })
                ->where('organization_name', '=', $request->company)
                ->where('person_location_city', '=', $request->city)
                ->where('organization_industries', '=', $request->industry)
                ->get();
            return view('userDashboard.people', ['allData' => $this->allData,
                'jobTitle'=>$request->jobTitle, 'company'=>$request->company,
                'city' => $request->city,
                'industry' => $request->industry, 'count' => count($dataCount)]);
        }
        elseif ( $request->name == null && $request->jobTitle != null && $request->company == null
            && $request->city != null && $request->state != null && $request->industry != null )
        {
            $this->allData = DB::table('lidata')
                ->whereNotIn('id', explode(',',$getdownloadedIds))
                ->where(function ($query) use ($request) {
                    $query->where('person_title', '=', $request->jobTitle)
                        ->orWhere('person_functions', '=', $request->jobTitle)
                        ->orWhere('person_detailed_function', '=',$request->jobTitle)
                        ->orWhere('person_seniority', '=', ' '.$request->jobTitle);
                })
                ->where('person_location_city', '=', $request->city)
                ->where('person_location_state', '=', $request->state)
                ->where('organization_industries', '=', $request->industry)
                ->orderBy('person_name', 'ASC')
                ->paginate(15);
            $dataCount = DB::table('lidata')
                ->where(function ($query) use ($request) {
                    $query->where('person_title', '=', $request->jobTitle)
                        ->orWhere('person_functions', '=', $request->jobTitle)
                        ->orWhere('person_detailed_function', '=',$request->jobTitle)
                        ->orWhere('person_seniority', '=', ' '.$request->jobTitle);
                })
                ->where('person_location_city', '=', $request->city)
                ->where('person_location_state', '=', $request->state)
                ->where('organization_industries', '=', $request->industry)
                ->get();
            return view('userDashboard.people', ['allData' => $this->allData,
                'jobTitle'=>$request->jobTitle,
                'city' => $request->city, 'state' => $request->state,
                'industry' => $request->industry, 'count' => count($dataCount)]);
        }
        elseif ( $request->name != null && $request->jobTitle == null && $request->company != null
            && $request->city == null && $request->state != null && $request->industry != null )
        {
            $this->allData = DB::table('lidata')
                ->whereNotIn('id', explode(',',$getdownloadedIds))
                ->where(function ($query) use ($request) {
                    $query->where('person_first_name_unanalyzed', '=',  $request->name)
                        ->orWhere('person_last_name_unanalyzed', '=',  $request->name)
                        ->orWhere('person_name', '=',  $request->name);
                })
                ->where('organization_name', '=', $request->company)
                ->where('person_location_state', '=', $request->state)
                ->where('organization_industries', '=', $request->industry)
                ->orderBy('person_name', 'ASC')
                ->paginate(15);
            $dataCount = DB::table('lidata')
                ->where(function ($query) use ($request) {
                    $query->where('person_first_name_unanalyzed', '=',  $request->name)
                        ->orWhere('person_last_name_unanalyzed', '=',  $request->name)
                        ->orWhere('person_name', '=',  $request->name);
                })
                ->where('organization_name', '=', $request->company)
                ->where('person_location_state', '=', $request->state)
                ->where('organization_industries', '=', $request->industry)
                ->get();
            return view('userDashboard.people', ['allData' => $this->allData,
                'name' => $request->name, 'company'=>$request->company,
                'state' => $request->state,
                'industry' => $request->industry, 'count' => count($dataCount)]);
        }
        elseif ( $request->name == null && $request->jobTitle != null && $request->company != null
            && $request->city == null && $request->state != null && $request->industry != null )
        {
            $this->allData = DB::table('lidata')
                ->whereNotIn('id', explode(',',$getdownloadedIds))
                ->where(function ($query) use ($request) {
                    $query->where('person_title', '=', $request->jobTitle)
                        ->orWhere('person_functions', '=', $request->jobTitle)
                        ->orWhere('person_detailed_function', '=',$request->jobTitle)
                        ->orWhere('person_seniority', '=', ' '.$request->jobTitle);
                })
                ->where('organization_name', '=', $request->company)
                ->where('person_location_state', '=', $request->state)
                ->where('organization_industries', '=', $request->industry)
                ->orderBy('person_name', 'ASC')
                ->paginate(15);
            $dataCount = DB::table('lidata')
                ->where(function ($query) use ($request) {
                    $query->where('person_title', '=', $request->jobTitle)
                        ->orWhere('person_functions', '=', $request->jobTitle)
                        ->orWhere('person_detailed_function', '=',$request->jobTitle)
                        ->orWhere('person_seniority', '=', ' '.$request->jobTitle);
                })
                ->where('organization_name', '=', $request->company)
                ->where('person_location_state', '=', $request->state)
                ->where('organization_industries', '=', $request->industry)
                ->get();
            return view('userDashboard.people', ['allData' => $this->allData,
                'jobTitle'=>$request->jobTitle, 'company'=>$request->company,
                'state' => $request->state,
                'industry' => $request->industry, 'count' => count($dataCount)]);
        }
        elseif ( $request->name == null && $request->jobTitle == null && $request->company != null
            && $request->city != null && $request->state != null && $request->industry != null )
        {
            $this->allData = DB::table('lidata')
                ->whereNotIn('id', explode(',',$getdownloadedIds))
                ->where('organization_name', '=', $request->company)
                ->where('person_location_city', '=', $request->city)
                ->where('person_location_state', '=', $request->state)
                ->where('organization_industries', '=', $request->industry)
                ->orderBy('person_name', 'ASC')
                ->paginate(15);
            $dataCount = DB::table('lidata')
                ->where('organization_name', '=', $request->company)
                ->where('person_location_city', '=', $request->city)
                ->where('person_location_state', '=', $request->state)
                ->where('organization_industries', '=', $request->industry)
                ->get();
            return view('userDashboard.people', ['allData' => $this->allData,
                'company'=>$request->company,
                'city' => $request->city, 'state' => $request->state,
                'industry' => $request->industry, 'count' => count($dataCount)]);
        }
        elseif ( $request->name != null && $request->jobTitle != null && $request->company != null
            && $request->city != null && $request->state != null && $request->industry == null )
        {
            $this->allData = DB::table('lidata')
                ->whereNotIn('id', explode(',',$getdownloadedIds))
                ->where(function ($query) use ($request) {
                    $query->where('person_first_name_unanalyzed', '=',  $request->name)
                        ->orWhere('person_last_name_unanalyzed', '=',  $request->name)
                        ->orWhere('person_name', '=',  $request->name);
                })
                ->where(function ($query) use ($request) {
                    $query->where('person_title', '=', $request->jobTitle)
                        ->orWhere('person_functions', '=', $request->jobTitle)
                        ->orWhere('person_detailed_function', '=',$request->jobTitle)
                        ->orWhere('person_seniority', '=', ' '.$request->jobTitle);
                })
                ->where('organization_name', '=', $request->company)
                ->where('person_location_city', '=', $request->city)
                ->where('person_location_state', '=', $request->state)
                ->orderBy('person_name', 'ASC')
                ->paginate(15);
            $dataCount = DB::table('lidata')
                ->where(function ($query) use ($request) {
                    $query->where('person_first_name_unanalyzed', '=',  $request->name)
                        ->orWhere('person_last_name_unanalyzed', '=',  $request->name)
                        ->orWhere('person_name', '=',  $request->name);
                })
                ->where(function ($query) use ($request) {
                    $query->where('person_title', '=', $request->jobTitle)
                        ->orWhere('person_functions', '=', $request->jobTitle)
                        ->orWhere('person_detailed_function', '=',$request->jobTitle)
                        ->orWhere('person_seniority', '=', ' '.$request->jobTitle);
                })
                ->where('organization_name', '=', $request->company)
                ->where('person_location_city', '=', $request->city)
                ->where('person_location_state', '=', $request->state)
                ->get();
            return view('userDashboard.people', ['allData' => $this->allData,
                'name' => $request->name, 'jobTitle'=>$request->jobTitle, 'company'=>$request->company,
                'city' => $request->city, 'state' => $request->state,
                'count' => count($dataCount)]);
        }
        elseif ( $request->name != null && $request->jobTitle != null && $request->company != null
            && $request->city != null && $request->state == null && $request->industry != null )
        {
            $this->allData = DB::table('lidata')
                ->whereNotIn('id', explode(',',$getdownloadedIds))
                ->where(function ($query) use ($request) {
                    $query->where('person_first_name_unanalyzed', '=',  $request->name)
                        ->orWhere('person_last_name_unanalyzed', '=',  $request->name)
                        ->orWhere('person_name', '=',  $request->name);
                })
                ->where(function ($query) use ($request) {
                    $query->where('person_title', '=', $request->jobTitle)
                        ->orWhere('person_functions', '=', $request->jobTitle)
                        ->orWhere('person_detailed_function', '=',$request->jobTitle)
                        ->orWhere('person_seniority', '=', ' '.$request->jobTitle);
                })
                ->where('organization_name', '=', $request->company)
                ->where('person_location_city', '=', $request->city)
                ->where('organization_industries', '=', $request->industry)
                ->orderBy('person_name', 'ASC')
                ->paginate(15);
            $dataCount = DB::table('lidata')
                ->where(function ($query) use ($request) {
                    $query->where('person_first_name_unanalyzed', '=',  $request->name)
                        ->orWhere('person_last_name_unanalyzed', '=',  $request->name)
                        ->orWhere('person_name', '=',  $request->name);
                })
                ->where(function ($query) use ($request) {
                    $query->where('person_title', '=', $request->jobTitle)
                        ->orWhere('person_functions', '=', $request->jobTitle)
                        ->orWhere('person_detailed_function', '=',$request->jobTitle)
                        ->orWhere('person_seniority', '=', ' '.$request->jobTitle);
                })
                ->where('organization_name', '=', $request->company)
                ->where('person_location_city', '=', $request->city)
                ->where('organization_industries', '=', $request->industry)
                ->get();
            return view('userDashboard.people', ['allData' => $this->allData,
                'name' => $request->name, 'jobTitle'=>$request->jobTitle, 'company'=>$request->company,
                'city' => $request->city,
                'industry' => $request->industry, 'count' => count($dataCount)]);
        }
        elseif ( $request->name != null && $request->jobTitle != null && $request->company != null
            && $request->city == null && $request->state != null && $request->industry != null )
        {
            $this->allData = DB::table('lidata')
                ->whereNotIn('id', explode(',',$getdownloadedIds))
                ->where(function ($query) use ($request) {
                    $query->where('person_first_name_unanalyzed', '=',  $request->name)
                        ->orWhere('person_last_name_unanalyzed', '=',  $request->name)
                        ->orWhere('person_name', '=',  $request->name);
                })
                ->where(function ($query) use ($request) {
                    $query->where('person_title', '=', $request->jobTitle)
                        ->orWhere('person_functions', '=', $request->jobTitle)
                        ->orWhere('person_detailed_function', '=',$request->jobTitle)
                        ->orWhere('person_seniority', '=', ' '.$request->jobTitle);
                })
                ->where('organization_name', '=', $request->company)
                ->where('person_location_state', '=', $request->state)
                ->where('organization_industries', '=', $request->industry)
                ->orderBy('person_name', 'ASC')
                ->paginate(15);
            $dataCount = DB::table('lidata')
                ->where(function ($query) use ($request) {
                    $query->where('person_first_name_unanalyzed', '=',  $request->name)
                        ->orWhere('person_last_name_unanalyzed', '=',  $request->name)
                        ->orWhere('person_name', '=',  $request->name);
                })
                ->where(function ($query) use ($request) {
                    $query->where('person_title', '=', $request->jobTitle)
                        ->orWhere('person_functions', '=', $request->jobTitle)
                        ->orWhere('person_detailed_function', '=',$request->jobTitle)
                        ->orWhere('person_seniority', '=', ' '.$request->jobTitle);
                })
                ->where('organization_name', '=', $request->company)
                ->where('person_location_state', '=', $request->state)
                ->where('organization_industries', '=', $request->industry)
                ->get();
            return view('userDashboard.people', ['allData' => $this->allData,
                'name' => $request->name, 'jobTitle'=>$request->jobTitle, 'company'=>$request->company,
                'state' => $request->state,
                'industry' => $request->industry, 'count' => count($dataCount)]);
        }
        elseif ( $request->name != null && $request->jobTitle != null && $request->company == null
            && $request->city != null && $request->state != null && $request->industry != null )
        {
            $this->allData = DB::table('lidata')
                ->whereNotIn('id', explode(',',$getdownloadedIds))
                ->where(function ($query) use ($request) {
                    $query->where('person_first_name_unanalyzed', '=',  $request->name)
                        ->orWhere('person_last_name_unanalyzed', '=',  $request->name)
                        ->orWhere('person_name', '=',  $request->name);
                })
                ->where(function ($query) use ($request) {
                    $query->where('person_title', '=', $request->jobTitle)
                        ->orWhere('person_functions', '=', $request->jobTitle)
                        ->orWhere('person_detailed_function', '=',$request->jobTitle)
                        ->orWhere('person_seniority', '=', ' '.$request->jobTitle);
                })
                ->where('person_location_city', '=', $request->city)
                ->where('person_location_state', '=', $request->state)
                ->where('organization_industries', '=', $request->industry)
                ->orderBy('person_name', 'ASC')
                ->paginate(15);
            $dataCount = DB::table('lidata')
                ->where(function ($query) use ($request) {
                    $query->where('person_first_name_unanalyzed', '=',  $request->name)
                        ->orWhere('person_last_name_unanalyzed', '=',  $request->name)
                        ->orWhere('person_name', '=',  $request->name);
                })
                ->where(function ($query) use ($request) {
                    $query->where('person_title', '=', $request->jobTitle)
                        ->orWhere('person_functions', '=', $request->jobTitle)
                        ->orWhere('person_detailed_function', '=',$request->jobTitle)
                        ->orWhere('person_seniority', '=', ' '.$request->jobTitle);
                })
                ->where('person_location_city', '=', $request->city)
                ->where('person_location_state', '=', $request->state)
                ->where('organization_industries', '=', $request->industry)
                ->get();
            return view('userDashboard.people', ['allData' => $this->allData,
                'name' => $request->name, 'jobTitle'=>$request->jobTitle,
                'city' => $request->city, 'state' => $request->state,
                'industry' => $request->industry, 'count' => count($dataCount)]);
        }
        elseif ( $request->name != null && $request->jobTitle == null && $request->company != null
            && $request->city != null && $request->state != null && $request->industry != null )
        {
            $this->allData = DB::table('lidata')
                ->whereNotIn('id', explode(',',$getdownloadedIds))
                ->where(function ($query) use ($request) {
                    $query->where('person_first_name_unanalyzed', '=',  $request->name)
                        ->orWhere('person_last_name_unanalyzed', '=',  $request->name)
                        ->orWhere('person_name', '=',  $request->name);
                })
                ->where('organization_name', '=', $request->company)
                ->where('person_location_city', '=', $request->city)
                ->where('person_location_state', '=', $request->state)
                ->where('organization_industries', '=', $request->industry)
                ->orderBy('person_name', 'ASC')
                ->paginate(15);
            $dataCount = DB::table('lidata')
                ->where(function ($query) use ($request) {
                    $query->where('person_first_name_unanalyzed', '=',  $request->name)
                        ->orWhere('person_last_name_unanalyzed', '=',  $request->name)
                        ->orWhere('person_name', '=',  $request->name);
                })
                ->where('organization_name', '=', $request->company)
                ->where('person_location_city', '=', $request->city)
                ->where('person_location_state', '=', $request->state)
                ->where('organization_industries', '=', $request->industry)
                ->get();
            return view('userDashboard.people', ['allData' => $this->allData,
                'name' => $request->name, 'company'=>$request->company,
                'city' => $request->city, 'state' => $request->state,
                'industry' => $request->industry, 'count' => count($dataCount)]);
        }
        elseif ( $request->name == null && $request->jobTitle != null && $request->company != null
            && $request->city != null && $request->state != null && $request->industry != null )
        {
            $this->allData = DB::table('lidata')
                ->whereNotIn('id', explode(',',$getdownloadedIds))
                ->where(function ($query) use ($request) {
                    $query->where('person_title', '=', $request->jobTitle)
                        ->orWhere('person_functions', '=', $request->jobTitle)
                        ->orWhere('person_detailed_function', '=',$request->jobTitle)
                        ->orWhere('person_seniority', '=', ' '.$request->jobTitle);
                })
                ->where('organization_name', '=', $request->company)
                ->where('person_location_city', '=', $request->city)
                ->where('person_location_state', '=', $request->state)
                ->where('organization_industries', '=', $request->industry)
                ->orderBy('person_name', 'ASC')
                ->paginate(15);
            $dataCount = DB::table('lidata')
                ->where(function ($query) use ($request) {
                    $query->where('person_first_name_unanalyzed', '=',  $request->name)
                        ->orWhere('person_last_name_unanalyzed', '=',  $request->name)
                        ->orWhere('person_name', '=',  $request->name);
                })
                ->where(function ($query) use ($request) {
                    $query->where('person_title', '=', $request->jobTitle)
                        ->orWhere('person_functions', '=', $request->jobTitle)
                        ->orWhere('person_detailed_function', '=',$request->jobTitle)
                        ->orWhere('person_seniority', '=', ' '.$request->jobTitle);
                })
                ->where('organization_name', '=', $request->company)
                ->where('person_location_city', '=', $request->city)
                ->where('person_location_state', '=', $request->state)
                ->where('organization_industries', '=', $request->industry)
                ->get();
            return view('userDashboard.people', ['allData' => $this->allData,
                'name' => $request->name, 'jobTitle'=>$request->jobTitle, 'company'=>$request->company,
                'city' => $request->city, 'state' => $request->state,
                'industry' => $request->industry, 'count' => count($dataCount)]);
        }
        elseif ( $request->name != null && $request->jobTitle != null && $request->company != null
            && $request->city != null && $request->state != null && $request->industry != null )
        {
            $this->allData = DB::table('lidata')
                ->whereNotIn('id', explode(',',$getdownloadedIds))
                ->where(function ($query) use ($request) {
                    $query->where('person_first_name_unanalyzed', '=',  $request->name)
                        ->orWhere('person_last_name_unanalyzed', '=',  $request->name)
                        ->orWhere('person_name', '=',  $request->name);
                })
                ->where(function ($query) use ($request) {
                    $query->where('person_title', '=', $request->jobTitle)
                        ->orWhere('person_functions', '=', $request->jobTitle)
                        ->orWhere('person_detailed_function', '=',$request->jobTitle)
                        ->orWhere('person_seniority', '=', ' '.$request->jobTitle);
                })
                ->where('organization_name', '=', $request->company)
                ->where('person_location_city', '=', $request->city)
                ->where('person_location_state', '=', $request->state)
                ->where('organization_industries', '=', $request->industry)
                ->orderBy('person_name', 'ASC')
                ->paginate(15);
            $dataCount = DB::table('lidata')
                ->where(function ($query) use ($request) {
                    $query->where('person_first_name_unanalyzed', '=',  $request->name)
                        ->orWhere('person_last_name_unanalyzed', '=',  $request->name)
                        ->orWhere('person_name', '=',  $request->name);
                })
                ->where(function ($query) use ($request) {
                    $query->where('person_title', '=', $request->jobTitle)
                        ->orWhere('person_functions', '=', $request->jobTitle)
                        ->orWhere('person_detailed_function', '=',$request->jobTitle)
                        ->orWhere('person_seniority', '=', ' '.$request->jobTitle);
                })
                ->where('organization_name', '=', $request->company)
                ->where('person_location_city', '=', $request->city)
                ->where('person_location_state', '=', $request->state)
                ->where('organization_industries', '=', $request->industry)
                ->get();
            return view('userDashboard.people', ['allData' => $this->allData,
                'name' => $request->name, 'jobTitle'=>$request->jobTitle, 'company'=>$request->company,
                'city' => $request->city, 'state' => $request->state,
                'industry' => $request->industry, 'count' => count($dataCount)]);
        }
    }
}
