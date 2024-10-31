<?php

namespace App\Http\Controllers\backend;

use App\Models\ServiceType;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Yajra\DataTables\Facades\DataTables;
use Auth;

class ServiceTypeController extends Controller
{
    protected $breadcrumb;
    public function __construct(){$this->breadcrumb = ['title'=> 'Service Types'];}
    public function index()
    {
        $data['breadcrumb'] = $this->breadcrumb;
        return view('backend.service-types.index',compact('data'));
    }
    public function createOrEdit($id=null)
    {
        if($id){
            $data['title'] = 'Edit';
            $data['items'] = ServiceType::find($id);
        }else{
            $data['title'] = 'Create';
        }
        $data['breadcrumb'] = $this->breadcrumb;
        return view('backend.service-types.create-edit',compact('data'));
    }

    public function store(Request $request)
    {
        $data = $request->all();
        $data['is_in_home'] = $request->input('is_in_home', 0);
        $data['status'] = $request->input('status', 0);
        $data['created_by_id'] = Auth::guard('admin')->user()->id;
        ServiceType::create($data);
        return redirect()->route('service-types.index')->with('alert',['messageType'=>'success','message'=>'Data Inserted Successfully!']);
    }

    public function update(Request $request,$id)
    {
        $slider = ServiceType::find($id);
        $data = $request->all();
        $data['is_in_home'] = $request->input('is_in_home', 0);
        $data['status'] = $request->input('status', 0);
        $data['updated_by_id'] = Auth::guard('admin')->user()->id;
        $slider->update($data);
        return redirect()->route('service-types.index')->with('alert',['messageType'=>'success','message'=>'Data Updated Successfully!']);
    }

    public function serviceTypes(Request $request)
    {
        $query = ServiceType::select(['id','title', 'description', 'icon', 'is_in_home','status']);
            if(!$request->has('order')) $query = $query->orderBy('id','desc');
        return DataTables::of($query)->make(true);
    }

}
