<?php

namespace App\Http\Controllers\backend;

use App\Models\Service;
use App\Models\ServiceType;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Yajra\DataTables\Facades\DataTables;
use Auth;

class ServiceController extends Controller
{
    protected $breadcrumb;
    public function __construct(){$this->breadcrumb = ['title'=> 'Services'];}
    public function index()
    {
        $data['breadcrumb'] = $this->breadcrumb;
        return view('backend.services.index',compact('data'));
    }
    public function createOrEdit($id=null)
    {
        if($id){
            $data['title'] = 'Edit';
            $data['items'] = Service::find($id);
        }else{
            $data['title'] = 'Create';
        }
        $data['service_types'] = ServiceType::orderBy('title')->get();
        $data['breadcrumb'] = $this->breadcrumb;
        return view('backend.services.create-edit',compact('data'));
    }

    public function store(Request $request)
    {
        $data = $request->all();
        $data['alt'] = $data['alt'] ? $data['alt'] : $data['description'];
        $data['created_by_id'] = Auth::guard('admin')->user()->id;
        $data['status'] = $request->input('status', 0);
        if(isset($data['image'])){
            $image = 'service-'. time().'.'.$data['image']->getClientOriginalExtension();
            $data['image']->move(public_path('uploads/services'), $image);
            $data['image'] = $image;
        }
        Service::create($data);
        return redirect()->route('services.index')->with('alert',['messageType'=>'success','message'=>'Data Inserted Successfully!']);
    }

    public function update(Request $request,$id)
    {
        $service = Service::find($id);
        $data = $request->all();
        $data['status'] = $request->input('status', 0);
        $data['alt'] = $data['alt'] ? $data['alt'] : $data['description'];
        $data['updated_by_id'] = Auth::guard('admin')->user()->id;
        if(isset($data['image'])){
            $image = 'service-'. time().'.'.$data['image']->getClientOriginalExtension();
            $data['image']->move(public_path('uploads/services'), $image);
            $data['image'] = $image;
            if($service->image){
                unlink(public_path('uploads/services/' . $service->image));
            }
        }
        $service->update($data);
        return redirect()->route('services.index')->with('alert',['messageType'=>'success','message'=>'Data Updated Successfully!']);
    }
    public function destroy($id)
    {
        $service = Service::find($id);
        if($service->image){
            unlink(public_path('uploads/services/' . $service->image));
        }
        $service->delete();
        return redirect()->back()->with('alert',['messageType'=>'success','message'=>'Data Deleted Successfully!']);
    }
    public function services(Request $request)
    {
        $query = Service::join('service_types', 'service_types.id', '=', 'services.service_type_id')
            ->select([
                'services.id',
                'service_types.title as service_type_title',
                'services.title',
                'services.description',
                'services.image',
                'services.status',
                'services.pn'
            ]);

        if (!$request->has('order')) {
            $query = $query->orderBy('service_types.title', 'asc')->orderBy('services.pn', 'asc');
        }

        return DataTables::of($query)->make(true);
    }


}
