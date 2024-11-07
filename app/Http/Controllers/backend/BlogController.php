<?php

namespace App\Http\Controllers\backend;

use App\Models\Blog;
use App\Models\BlogCategory;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Yajra\DataTables\Facades\DataTables;
use Auth;

class BlogController extends Controller
{
    protected $breadcrumb;
    public function __construct(){$this->breadcrumb = ['title'=> 'Blogs'];}
    public function index()
    {
        $data['breadcrumb'] = $this->breadcrumb;
        return view('backend.blogs.index',compact('data'));
    }
    public function createOrEdit($id=null)
    {
        if($id){
            $data['title'] = 'Edit';
            $data['items'] = Blog::find($id);
        }else{
            $data['title'] = 'Create';
        }
        $data['blog_categories'] = BlogCategory::orderBy('title')->get();
        $data['breadcrumb'] = $this->breadcrumb;
        return view('backend.blogs.create-edit',compact('data'));
    }

    public function store(Request $request)
    {
        $data = $request->all();
        $data['alt'] = $data['alt'] ? $data['alt'] : $data['description'];
        $data['created_by_id'] = Auth::guard('admin')->user()->id;
        $data['status'] = $request->input('status', 0);
        $data['is_in_home'] = $request->input('is_in_home', 0);
        if(isset($data['image'])){
            $image = 'blog-'. time().'.'.$data['image']->getClientOriginalExtension();
            $data['image']->move(public_path('uploads/blogs'), $image);
            $data['image'] = $image;
        }
        Blog::create($data);
        return redirect()->route('blogs.index')->with('alert',['messageType'=>'success','message'=>'Data Inserted Successfully!']);
    }

    public function update(Request $request,$id)
    {
        $blog = Blog::find($id);
        $data = $request->all();
        $data['status'] = $request->input('status', 0);
        $data['is_in_home'] = $request->input('is_in_home', 0);
        $data['alt'] = $data['alt'] ? $data['alt'] : $data['description'];
        $data['updated_by_id'] = Auth::guard('admin')->user()->id;
        if(isset($data['image'])){
            $image = 'blog-'. time().'.'.$data['image']->getClientOriginalExtension();
            $data['image']->move(public_path('uploads/blogs'), $image);
            $data['image'] = $image;
            if($blog->image){
                unlink(public_path('uploads/blogs/' . $blog->image));
            }
        }
        $blog->update($data);
        return redirect()->route('blogs.index')->with('alert',['messageType'=>'success','message'=>'Data Updated Successfully!']);
    }
    public function destroy($id)
    {
        $blog = Blog::find($id);
        if($blog->image){
            unlink(public_path('uploads/blogs/' . $blog->image));
        }
        $blog->delete();
        return redirect()->back()->with('alert',['messageType'=>'success','message'=>'Data Deleted Successfully!']);
    }
    public function blogs(Request $request)
    {
        $query = Blog::join('blog_categories', 'blog_categories.id', '=', 'blogs.cat_id')
                    ->select([
                        'blogs.id',
                        'blog_categories.title as blog_category_title',
                        'blogs.title',
                        'blogs.short_description',
                        'blogs.description',
                        'blogs.image',
                        'blogs.is_in_home',
                        'blogs.status',
                        'blogs.pn'
                    ]);

        if (!$request->has('order')) {
            $query = $query->orderBy('blogs.id', 'desc');
        }

        return DataTables::of($query)->make(true);
    }


}
