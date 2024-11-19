<?php

namespace App\Http\Controllers\backend;

use App\Models\Admin;
use App\Models\Blog;
use App\Models\Product;
use App\Models\Company;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    protected $breadcrumb;
    public function __construct(){$this->breadcrumb = ['title'=>'Dashboard'];}
    public function index()
    {
        $data['breadcrumb'] = $this->breadcrumb;
        $data['totalUsers'] = Admin::where('status', 1)->count();
        $data['totalBlog'] = Blog::where('status', 1)->count();
        $data['totalProduct'] = Product::where('status', 1)->count();
        $data['totalCompany'] = Company::where('status', 1)->count();
        return view('backend.index',compact('data'));
    }
}

