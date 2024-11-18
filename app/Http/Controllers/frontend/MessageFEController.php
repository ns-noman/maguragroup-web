<?php

namespace App\Http\Controllers\frontend;

use App\Models\Message;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class MessageFEController extends Controller
{
    public function store(Request $request)
    {
        $data = $request->all();
        Message::create($data);
        return redirect()->back()->with('alert',['messageType'=>'success','message'=>'Message Sent Successfully!']);
    }
}
