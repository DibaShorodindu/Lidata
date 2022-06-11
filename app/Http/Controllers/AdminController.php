<?php

namespace App\Http\Controllers;
use App\Exports\CustomExport;
use App\Models\Credit;
use App\Models\CreditHistory;
use App\Models\ExportHistori;
use App\Models\PurchasePlan;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Response;
use Maatwebsite\Excel\Facades\Excel;
use App\Imports\PhoneListImport;
use App\Exports\PhoneListExport;
use App\Models\PhoneList;
use App\Models\Lidata;
use Auth;

class AdminController extends Controller
{

    protected $data;
    protected $allData;
    protected $credit;

            // view admin Dashboard

    public function index()
    {
        return view('admin.dashboard');
    }

            //  admin Dashboard file upload


    /**
     * @return \Illuminate\Support\Collection
     */
    public function fileImportExport()
    {
        //return view('file-import');
    }

    /**
     * @return \Illuminate\Support\Collection
     * @throws \Illuminate\Validation\ValidationException
     */



    public function fileImport(Request $request)
    {
        Excel::import(new PhoneListImport, $request->file('file')->store('temp'));
        return back()->with('message', 'file imported Successfully');
    }

    /**
     * @return \Illuminate\Support\Collection
     */



    public function fileExport()
    {
        return Excel::download(new PhoneListExport, 'phoneList-collection.xlsx');
    }


    // public function customExport(Request $request)
    
    // {
    //     return (new CustomExport($request->chk))->download('phoneList.xlsx');
    // }

    public function customExport(Request $request)
    {
    
        $credit=Credit::find(Auth::user()->id)->first();
        if ($credit->useableCredit >= count($request->chk))
        {
            ExportHistori::newExportHistori($request);
            $credit = Credit::find(Auth::user()->id);
            $usableCredit = $credit->useableCredit;
            Credit::where('userId',Auth::user()->id)->update([
                'userId'         => $request->userId,
                'useableCredit'  => $usableCredit-count($request->chk),
            ]);
            CreditHistory::create($request);
            return (new CustomExport($request->chk))->download('phoneList.xlsx');
        }
        else
        {
            return redirect('/settings/upgrade');
        }
    }


    // public function customExport(Request $request)
    // {
    // //    return $request->userId;
    //     $credit=Credit::find($request->userId);
    //     // return $credit;
       
    //     if ($credit->useableCredit >= count($request->chk))
    //     {
    //         ExportHistori::newExportHistori($request);
    //         Credit::updateUserCradit($request);
    //         CreditHistory::create($request);
    //         return (new CustomExport($request->chk))->download('phoneList.xlsx');
           
    //     }
    //     else
    //     {
    //         return redirect('/settings/upgrade');
    //     }
    // }

        public function cumpanyExport(Request $request)
        {
            return (new CustomExport($request->chk))->download('phoneList.xlsx');
        }

        
   

            //  admin Dashboard view all data // data edit update delete


    public function manageData(){
        $this->allData = PhoneList::paginate(10);
        return view('admin.manage-data', ['allData' => $this->allData]);
    }
    /*public function getData(){
        $employees = Employee::
        return view('home', compact('employees'));
    }*/
    public function editData($id){
        $this->data = PhoneList::find($id);
        //return view('admin.edit-data', ['data'=>$this->data]);
    }
    public function updateData(Request $request){
        data::updatedata($request);
        return redirect('/manage-data')->with('message', 'data Updated Successfully');
    }
    public function deleteData($id){
        $this->data = PhoneList::find($id);
        /*if (file_exists($this->data->image)){
            unlink($this->data->image);
        }*/
        $this->data->delete();
        return redirect()->back()->with('message', 'data Deleted Successfully');
    }
}
