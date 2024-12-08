<?php

namespace App\Http\Controllers\backend;

use App\Models\Company;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Yajra\DataTables\Facades\DataTables;
use Auth;

class CompanyController extends Controller
{
    protected $breadcrumb;
    public function __construct(){$this->breadcrumb = ['title'=> 'Company'];}
    public function index()
    {
      
        $data['breadcrumb'] = $this->breadcrumb;
        return view('backend.companies.index',compact('data'));
    }
    public function createOrEdit($id=null)
    {
        if($id){
            $data['title'] = 'Edit';
            $data['items'] = Company::find($id);
        }else{
            $data['title'] = 'Create';
        }
        $data['breadcrumb'] = $this->breadcrumb;
        return view('backend.companies.create-edit',compact('data'));
    }

    public function store(Request $request)
    {
        $data = $request->all();
        $data['alt'] = $data['alt'] ? $data['alt'] : $data['title'];
        $data['created_by_id'] = Auth::guard('admin')->user()->id;
        $data['is_in_home'] = $request->input('is_in_home', 0);
        $data['status'] = $request->input('status', 0);
        if(isset($data['logo'])){
            $image = 'company-'. time().'.'.$data['logo']->getClientOriginalExtension();
            $data['logo']->move(public_path('uploads/companies'), $image);
            $data['logo'] = $image;
        }
        Company::create($data);
        return redirect()->route('companies.index')->with('alert',['messageType'=>'success','message'=>'Data Inserted Successfully!']);
    }

    public function update(Request $request,$id)
    {
        $company = Company::find($id);
        $data = $request->all();
        $data['alt'] = $data['alt'] ? $data['alt'] : $data['title'];
        $data['created_by_id'] = Auth::guard('admin')->user()->id;
        $data['is_in_home'] = $request->input('is_in_home', 0);
        $data['status'] = $request->input('status', 0);
        if(isset($data['logo'])){
            $image = 'company-'. time().'.'.$data['logo']->getClientOriginalExtension();
            $data['logo']->move(public_path('uploads/companies'), $image);
            $data['logo'] = $image;
            if($company->logo){
                unlink(public_path('uploads/companies/' . $company->logo));
            }
        }
        $company->update($data);
        return redirect()->route('companies.index')->with('alert',['messageType'=>'success','message'=>'Data Updated Successfully!']);
    }
    public function destroy($id)
    {
        $company = Company::find($id);
        if($company->logo){
            unlink(public_path('uploads/companies/' . $company->logo));
        }
        $company->delete();
        return redirect()->back()->with('alert',['messageType'=>'success','message'=>'Data Deleted Successfully!']);
    }
    public function companies(Request $request)
    {
        $query = Company::query();
        $query = $query->orderBy('status','Desc');
        if (!$request->has('order')) {
            $query = $query->orderBy('pn');
        }
        return DataTables::of($query)->make(true);
    }


}
