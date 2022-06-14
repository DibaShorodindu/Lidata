<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use App\Imports\LidataImport;
use App\Models\Country;
use App\Models\Lidata;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class LidataController extends Controller
{
    protected $country;

    public function addLidata(){
        $lidata = [
            [
                "person_email"=>"ivo.brenes@sap.com",
                "person_name"=>"Ivo Brenes",
                "person_first_name_unanalyzed"=>"ivo",
                "person_last_name_unanalyzed"=>"brenes",
                "person_sanitized_phone"=>"16106611000",
                "person_title"=>"Manager Customer & Sales Support",
                "person_functions"=>"sales,support",
                "person_detailed_function"=>"customer sales support",
                "person_seniority"=>"manager",
                "person_location_city"=>"Frankfurt",
                "person_location_state"=>"Pennsylvania",
                "person_location_country"=>"France",
                "person_location_postal_code"=>"48720",
                "person_linkedin_url"=>"http://www.linkedin.com/pub/jane-ebert/16/748/19b",
                "organization_name"=>"SAP",
                "organization_domain"=>"sap.com",
                "organization_phone"=>"+49 7031 221471",
                "organization_facebook_url"=>"https://www.facebook.com/SAP",
                "organization_linkedin_numerical_urls"=>"http://www.linkedin.com/company/1115",
                "organization_twitter_url"=>"https://www.facebook.com/SAP",
                "organization_website_url"=>"http://www.sap.com",
                "organization_angellist_url"=>"http://angel.co/sap",
                "organization_founded_year"=>"1972",
                "organization_hq_location_city"=>"Walldorf",
                "organization_hq_location_postal_code"=>"69190",
                "organization_hq_location_state"=>"Baden-WÃ¼rttemberg",
                "organization_hq_location_country"=>"Germany",
                "organization_num_current_employees"=>"48795",
                "organization_languages"=>"English,German",
                "organization_industries"=>"computer software"
            ]
        ];
        Lidata::insert($lidata);
        return "records are inserted";

    }
    public function importForm(){
        return view('admin');
    }
    public function import(Request $Request){
        excel::import(new LidataImport,$Request->file);
        return "Record are imported successfully!";
    }

    public function getLidata(){
        $employees = Lidata::orderBy('id')->paginate(10);
        // $employees->total();
        return view('viewPeopleData',compact('employees'));
    }
    public function deletePost($id){
        Lidata::where('id',$id)->delete();
        return back()->with('post_deleted','Record has been deleted successfully!');
    }

    //    Start company page
    public function companyLidata(){
        $company_employes = Lidata::orderBy('id')->paginate(10);
        return view('viewCompanyData',compact('company_employes'));
    }

    public function deletePost_company($id){
        Lidata::where('id',$id)->delete();
        return back()->with('post_deleted','Record has been deleted successfully!');
    }
    //    end company page

    public function index()
    {
        return view('front.home');
    }

    // directory people start
    public function category($id)
    {
        $x=$id;
        $this->data = DB::table('lidata')
            ->where('person_name', 'like', $x.'%')
            ->paginate(50);
        return view('front.category.home', ['data'=>$this->data])->with('dataId', $x);
    }



    public function user($id)
    {
        $this->data = Lidata::find($id);
        $result = substr($this->data->organization_name, 0, 3);
        $this->userData = Lidata::where('organization_name', 'LIKE', $result. '%'  )->get();

        return view('front.user.user', ['data'=>$this->data])->with('userData', $this->userData);
    }

    public function userSearch(Request $request)
    {
        $this->data = Lidata::where('person_name', $request->searchPeople)->first();
        $result = substr($this->data->person_name, 0, 3);
        $this->userData = Lidata::where('person_name', 'LIKE', $result. '%'  )->get();
        return view('front.user.user', ['data'=>$this->data])->with('userData', $this->userData);

    }

    public function autocompleteSearch(Request $request)
    {
        $query = $request->get('query');
        $filterResult = Lidata::where('person_name', 'LIKE', '%'. $query. '%')->take(10)->get();
        //return response()->json($filterResult);
        $data = array();
        foreach ($filterResult as $hsl)
        {
            $data[] = $hsl->person_name;
        }
        return response()->json($data);
        //echo json_encode($data);

    }

    // people  page end

    // ditectory company start

    public function category_company($id)
    {
        $x=$id;
        $this->data = DB::table('lidata')
            ->where('organization_name', 'like', $x.'%')
            ->paginate(50);
        return view('front.category.company', ['data'=>$this->data])->with('dataId', $x);
    }

    public function company_user($id)
    {
        $this->data = Lidata::find($id);
        $result = substr($this->data->organization_name, 0, 3);
        $this->userData = Lidata::where('organization_name', 'LIKE', $result. '%'  )->get();

        return view('front.user.user-company', ['data'=>$this->data])->with('userData', $this->userData);
    }

    public function COmpany_Search(Request $request)
    {
        $this->data = Lidata::where('organization_name', $request->searchCompany)->first();
        $result = substr($this->data->organization_name, 0, 3);
        $this->userData = Lidata::where('organization_name', 'LIKE', $result. '%'  )->get();

        return view('front.user.user-company', ['data'=>$this->data])->with('userData', $this->userData);

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












    public function product_us(){
        return view('front.product.product');
    }
    public function pricing_us(){
        return view('pricing.package');
    }
    public function careers_us(){
        return view('careers');
    }
    public function about_us(){
        return view('about');
    }
    public function contact_us(){
        return view('contact');
    }
    public function terms_of_service_us(){
        return view('terms-of-service');
    }
    public function privacy_policy_us(){
        return view('privacy_policy');
    }
    public function refund_us(){
        return view('refund');
    }
}
