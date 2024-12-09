<?php

namespace App\Http\Controllers\backend;

use App\Models\Message;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Yajra\DataTables\Facades\DataTables;
use Auth;

class MessageController extends Controller
{
    protected $breadcrumb;
    public function __construct(){$this->breadcrumb = ['title'=> 'Messages'];}
    public function index()
    {
        $data['breadcrumb'] = $this->breadcrumb;
        return view('backend.messages.index',compact('data'));
    }

    public function store(Request $request)
    {
        $data = $request->all();
        $data['is_in_home'] = $request->input('is_in_home', 0);
        $data['status'] = $request->input('status', 0);
        $data['created_by_id'] = Auth::guard('admin')->user()->id;
        Message::create($data);
        return redirect()->route('messages.index')->with('alert',['messageType'=>'success','message'=>'Data Inserted Successfully!']);
    }

    public function update(Request $request,$id)
    {
        $slider = Message::find($id);
        $data = $request->all();
        $data['is_in_home'] = $request->input('is_in_home', 0);
        $data['status'] = $request->input('status', 0);
        $data['updated_by_id'] = Auth::guard('admin')->user()->id;
        $slider->update($data);
        return redirect()->route('messages.index')->with('alert',['messageType'=>'success','message'=>'Data Updated Successfully!']);
    }

    public function message(Request $request)
    {
        $query = Message::select(['id','name','email','contact','subject','message','status']);
        if(!$request->has('order')) $query = $query->orderBy('id','desc');
        return DataTables::of($query)->make(true);
    }

}
