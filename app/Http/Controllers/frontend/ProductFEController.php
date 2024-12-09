<?php

namespace App\Http\Controllers\frontend;

use App\Models\Product;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ProductFEController extends Controller
{
    protected $breadcrumb;
    public function __construct(){$this->breadcrumb = [['title'=> 'Products']];}
    public function index()
    {
       return view('frontend.search');
    }
}
