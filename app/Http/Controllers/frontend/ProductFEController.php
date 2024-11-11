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
        $data['breadcrumb'] = ['title'=> FrontendMenu::find($menuID)->title];
        $data['products'] = Product::where(['status'=> 1])->select(['id', 'title','description','image','alt'])->orderBy('pn')->get()->toArray();
        $data['breadcrumb'] = $this->breadcrumb;
        return view('frontend.products.products',compact('data'));
    }
}
