<?php

namespace App\Http\Controllers\backend;

use App\Models\Slider;
use App\Models\Company;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Yajra\DataTables\Facades\DataTables;
use Auth;

class SliderController extends Controller
{
    protected $breadcrumb;
    public function __construct(){$this->breadcrumb = ['title'=> 'Sliders'];}
    public function index()
    {
        $data['breadcrumb'] = $this->breadcrumb;
        return view('backend.sliders.index',compact('data'));
    }
    public function createOrEdit($id=null)
    {
        if($id){
            $data['title'] = 'Edit';
            $data['items'] = Slider::find($id);
        }else{
            $data['title'] = 'Create';
        }
        $data['companies'] = Company::where('status',1)->get();
        $data['breadcrumb'] = $this->breadcrumb;
        return view('backend.sliders.create-edit',compact('data'));
    }

    public function store(Request $request)
    {
        $data = $request->all();
        $data['alt'] = $data['alt'] ? $data['alt'] : $data['description'];
        $data['created_by_id'] = Auth::guard('admin')->user()->id;
        $data['status'] = $request->input('status', 0);
        if(isset($data['image'])){
            $image = 'slider-'. time().'.'.$data['image']->getClientOriginalExtension();
            $data['image']->move(public_path('uploads/sliders'), $image);
            $data['image'] = $image;
        }
        Slider::create($data);
        return redirect()->route('sliders.index')->with('alert',['messageType'=>'success','message'=>'Data Inserted Successfully!']);
    }

    public function update(Request $request,$id)
    {
        $slider = Slider::find($id);
        $data = $request->all();
        $data['alt'] = $data['alt'] ? $data['alt'] : $data['description'];
        $data['updated_by_id'] = Auth::guard('admin')->user()->id;
        $data['status'] = $request->input('status', 0);
        if(isset($data['image'])){
            $image = 'slider-'. time().'.'.$data['image']->getClientOriginalExtension();
            $data['image']->move(public_path('uploads/sliders'), $image);
            $data['image'] = $image;
            if($slider->image){
                unlink(public_path('uploads/sliders/' . $slider->image));
            }
        }
        $slider->update($data);
        return redirect()->route('sliders.index')->with('alert',['messageType'=>'success','message'=>'Data Updated Successfully!']);
    }
    public function destroy($id)
    {
        $slider = Slider::find($id);
        if($slider->image){
            unlink(public_path('uploads/sliders/' . $slider->image));
        }
        $slider->delete();
        return redirect()->back()->with('alert',['messageType'=>'success','message'=>'Data Deleted Successfully!']);
    }
    public function sliders(Request $request)
    {
        $query = Slider::leftJoin('companies', 'companies.id', '=', 'sliders.company_id')
            ->select(
                [
                    'sliders.id',
                    'companies.title as company_title',
                    'sliders.title',
                    'sliders.description',
                    'sliders.image',
                    'sliders.status',
                    'sliders.srln'
                ]
            );
            $query->orderBy('sliders.status','desc');
            if(!$request->has('order')) $query = $query->orderBy('sliders.srln');
        return DataTables::of($query)->make(true);
    }

}
