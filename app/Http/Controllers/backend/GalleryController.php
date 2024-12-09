<?php

namespace App\Http\Controllers\backend;

use App\Models\Gallery;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Yajra\DataTables\Facades\DataTables;
use Auth;

class GalleryController extends Controller
{
    protected $breadcrumb;
    public function __construct(){$this->breadcrumb = ['title'=> 'Gallery'];}
    public function index()
    {
        $data['breadcrumb'] = $this->breadcrumb;
        return view('backend.galleries.index',compact('data'));
    }
    public function createOrEdit($id=null)
    {
        if($id){
            $data['title'] = 'Edit';
            $data['items'] = Gallery::find($id);
        }else{
            $data['title'] = 'Create';
        }
        $data['breadcrumb'] = $this->breadcrumb;
        return view('backend.galleries.create-edit',compact('data'));
    }

    public function store(Request $request)
    {
        $data = $request->all();
        $data['alt'] = $data['alt'] ? $data['alt'] : $data['description'];
        $data['created_by_id'] = Auth::guard('admin')->user()->id;
        if(isset($data['image'])){
            $image = 'gallery-'. time().'.'.$data['image']->getClientOriginalExtension();
            $data['image']->move(public_path('uploads/galleries'), $image);
            $data['image'] = $image;
        }
        Gallery::create($data);
        return redirect()->route('galleries.index')->with('alert',['messageType'=>'success','message'=>'Data Inserted Successfully!']);
    }

    public function update(Request $request,$id)
    {
        $slider = Gallery::find($id);
        $data = $request->all();
        $data['alt'] = $data['alt'] ? $data['alt'] : $data['description'];
        $data['updated_by_id'] = Auth::guard('admin')->user()->id;
        if(isset($data['image'])){
            $image = 'gallery-'. time().'.'.$data['image']->getClientOriginalExtension();
            $data['image']->move(public_path('uploads/galleries'), $image);
            $data['image'] = $image;
            if($slider->image){
                unlink(public_path('uploads/galleries/' . $slider->image));
            }
        }
        $slider->update($data);
        return redirect()->route('galleries.index')->with('alert',['messageType'=>'success','message'=>'Data Updated Successfully!']);
    }
    public function destroy($id)
    {
        $slider = Gallery::find($id);
        if($slider->image){
            unlink(public_path('uploads/galleries/' . $slider->image));
        }
        $slider->delete();
        return redirect()->back()->with('alert',['messageType'=>'success','message'=>'Data Deleted Successfully!']);
    }
    public function galleries(Request $request)
    {
        $query = Gallery::select(['id','title', 'description', 'image','status','srln']);
            if(!$request->has('order')) $query = $query->orderBy('id','desc');
        return DataTables::of($query)->make(true);
    }

}
