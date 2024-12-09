<?php

namespace App\Http\Controllers\frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;


class SearchFEController extends Controller
{
    public function index($q=null)
    {
        $data['breadcrumb'] = ['title'=> 'Search'];
        return view('frontend.search',compact('data'));
    }
}

