<?php

namespace App\Http\Controllers\backend;

use App\Models\Product;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Yajra\DataTables\Facades\DataTables;
use Auth;

class ProductController extends Controller
{
    protected $breadcrumb;
    public function __construct(){$this->breadcrumb = ['title'=> 'Products'];}
    public function index()
    {
        $data['breadcrumb'] = $this->breadcrumb;
        return view('backend.products.index',compact('data'));
    }
    public function createOrEdit($id=null)
    {
        if($id){
            $data['title'] = 'Edit';
            $data['items'] = Product::find($id);
        }else{
            $data['title'] = 'Create';
        }
        $data['breadcrumb'] = $this->breadcrumb;
        return view('backend.products.create-edit',compact('data'));
    }

    public function store(Request $request)
    {
        $data = $request->all();
        $data['alt'] = $data['alt'] ? $data['alt'] : $data['title'];
        $data['created_by_id'] = Auth::guard('admin')->user()->id;
        $data['is_in_home'] = $request->input('is_in_home', 0);
        $data['status'] = $request->input('status', 0);
        $data['pn'] = $data['pn'] ?? 0;

        if(isset($data['image'])){
            $image = 'product-'. time().'.'.$data['image']->getClientOriginalExtension();
            $data['image']->move(public_path('uploads/products'), $image);
            $data['image'] = $image;
        }
        Product::create($data);
        return redirect()->route('products.index')->with('alert',['messageType'=>'success','message'=>'Data Inserted Successfully!']);
    }

    public function update(Request $request,$id)
    {
        $product = Product::find($id);
        $data = $request->all();
        $data['is_in_home'] = $request->input('is_in_home', 0);
        $data['status'] = $request->input('status', 0);
        $data['alt'] = $data['alt'] ? $data['alt'] : $data['title'];
        $data['updated_by_id'] = Auth::guard('admin')->user()->id;
        $data['pn'] = $request->input('pn', 0);
        if(isset($data['image'])){
            $image = 'product-'. time().'.'.$data['image']->getClientOriginalExtension();
            $data['image']->move(public_path('uploads/products'), $image);
            $data['image'] = $image;
            if($product->image){
                unlink(public_path('uploads/products/' . $product->image));
            }
        }
        $product->update($data);
        return redirect()->route('products.index')->with('alert',['messageType'=>'success','message'=>'Data Updated Successfully!']);
    }
    public function destroy($id)
    {
        $product = Product::find($id);
        if($product->image){
            unlink(public_path('uploads/products/' . $product->image));
        }
        $product->delete();
        return redirect()->back()->with('alert',['messageType'=>'success','message'=>'Data Deleted Successfully!']);
    }
    public function products(Request $request)
    {
        $query = Product::select(['id','title','description','image','alt','pn','is_in_home','status']);
        if (!$request->has('order')) {
            $query = $query->orderBy('pn', 'asc');
        }
        return DataTables::of($query)->make(true);
    }


}
