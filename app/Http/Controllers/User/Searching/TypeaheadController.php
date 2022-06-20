<?php

namespace App\Http\Controllers\User\Searching;

use App\Http\Controllers\Controller;
use App\Models\Lidata;
use App\Models\PhoneList;
use App\Models\User;
use DB;
use Illuminate\Http\Request;
use Symfony\Component\Console\Output\ConsoleOutput;

class TypeaheadController extends Controller
{
    protected $data;
    public function autocompleteSearch(Request $request)
    {
        $query = $request->get('query');
        $filterResult = Lidata::where('person_name', '=', $query)
            ->orWhere('person_first_name_unanalyzed', '=', $query)
            ->orWhere('person_last_name_unanalyzed', '=', $query)
            ->take(10)
            ->get();
        $data = array();
        foreach ($filterResult as $hsl)
        {
            $data[] = $hsl->person_name;
        }
        return response()->json($data);

    }

    public function autocompletecompanySearch(Request $request)
    {
        $term = $request->get('term');
        $filterResultcompany = Lidata::where('organization_name', 'LIKE', '%'. $term. '%')->take(10)->get();
        //return response()->json($filterResult);
        $data = array();
        foreach ($filterResultcompany as $hsl)
        {
            $data[] = $hsl->organization_name;
        }
        return response()->json($data);
        //echo json_encode($data);

    }

    public function searchPeople($request)
    {
        $query = $request;
        $this->data = DB::table('phone_lists')
            ->where('name', 'like', $query.'%');
        return view('userDashboard.people', ['allData' => $this->data]);

    }
}
