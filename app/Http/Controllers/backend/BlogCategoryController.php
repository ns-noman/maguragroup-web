<?php

namespace App\Http\Controllers\backend;

use App\Models\BlogCategory;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Yajra\DataTables\Facades\DataTables;
use Auth;

class BlogCategoryController extends Controller
{
    protected $breadcrumb;
    public function __construct(){$this->breadcrumb = ['title'=> 'Blog Category'];}
    public function index()
    {
        $data['breadcrumb'] = $this->breadcrumb;
        return view('backend.blog-categories.index',compact('data'));
    }
    public function createOrEdit($id=null)
    {
        if($id){
            $data['title'] = 'Edit';
            $data['items'] = BlogCategory::find($id);
        }else{
            $data['title'] = 'Create';
        }
        $data['breadcrumb'] = $this->breadcrumb;
        return view('backend.blog-categories.create-edit',compact('data'));
    }

    public function store(Request $request)
    {
        $data = $request->all();
        $data['status'] = $request->input('status', 0);
        $data['created_by_id'] = Auth::guard('admin')->user()->id;
        BlogCategory::create($data);
        return redirect()->route('blog-categories.index')->with('alert',['messageType'=>'success','message'=>'Data Inserted Successfully!']);
    }

    public function update(Request $request,$id)
    {
        $slider = BlogCategory::find($id);
        $data = $request->all();
        $data['status'] = $request->input('status', 0);
        $data['updated_by_id'] = Auth::guard('admin')->user()->id;
        $slider->update($data);
        return redirect()->route('blog-categories.index')->with('alert',['messageType'=>'success','message'=>'Data Updated Successfully!']);
    }

    public function blogCategories(Request $request)
    {
        $query = BlogCategory::query();
            if(!$request->has('order')) $query = $query->orderBy('id','desc');
        return DataTables::of($query)->make(true);
    }

}
