<?php

namespace App\Http\Controllers\backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    protected $breadcrumb;
    public function __construct(){$this->breadcrumb = ['title'=>'Dashboard'];}
    public function index()
    {
        $data['breadcrumb'] = $this->breadcrumb;
        return view('backend.index',compact('data'));
    }
}

