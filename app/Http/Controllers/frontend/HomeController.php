<?php

namespace App\Http\Controllers\frontend;

use App\Models\Slider;
use App\Models\Company;
use App\Models\BasicInfo;
use App\Models\ServiceType;
use App\Models\Product;
use App\Models\Blog;
use App\Models\Gallery;
use App\Models\FrontendMenu;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Auth;

class HomeController extends Controller
{
    public function index($slug = null)
    {
        
        if($slug == null) return redirect()->route('home.index',['home-1']);
        $slugArr = explode('-', $slug);
        $menuID = end($slugArr);
        
        $data = [];
        $view = 'index';

        $data['breadcrumb'] = ['title'=> FrontendMenu::find($menuID)->title];

        if($menuID == 2){
        } else if($menuID == 4){
            $view = 'corporate-profile';
        } else if($menuID == 5){
            $view = 'mvv';
        } else if($menuID == 6){
            $view = 'services';
            $data['serviceTypes'] = ServiceType::where(['status'=> 1])->select(['title','description','icon',])->orderBy('id')->get()->toArray();
        } else if($menuID == 7){
            $view = 'products';
            $data['products'] = Product::where(['status'=> 1])->select(['title','description','image','alt'])->orderBy('pn')->get()->toArray();
        } else if($menuID == 8){
            $view = 'companies';
            $data['companies'] = Company::where(['status'=> 1])->select(['title','description','logo','alt','site_link'])->orderBy('pn')->get()->toArray();
        } else if($menuID == 9){
            $view = 'chairman-speech';
        } else if($menuID == 10){
            $view = 'blogs';
            $data['blogs'] = Blog::with(['admin', 'blogcategory'])->where(['is_in_home' => 1, 'status' => 1])->select(['title', 'short_description', 'image', 'alt', 'cat_id', 'created_by_id', 'pn','created_at'])->orderBy('pn')->get()->toArray();
        } else if($menuID == 11){
            $view = 'contacts';            
            $data['basicInfo'] = BasicInfo::select(['phone','telephone','fax','email','location','address','map_embed'])->first()->toArray();
        } else{
            $view = 'index';
            $data['sliders'] = Slider::where(['status'=>1, 'company_id'=>0])->select(['title', 'description', 'image', 'alt'])->orderBy('srln')->get()->toArray();
            $data['basicInfo'] = BasicInfo::select(['assets_value','total_employees','total_companies','start_year','map_embed','video_embed_1','video_embed_2','video_embed_3'])->first()->toArray();
            $data['serviceTypes'] = ServiceType::where(['is_in_home'=> 1, 'status'=> 1])->select(['title','description','icon',])->orderBy('id')->get()->toArray();
            $data['products'] = Product::where(['is_in_home'=> 1, 'status'=> 1])->select(['title','description','image','alt'])->orderBy('pn')->get()->toArray();
            $data['companies'] = Company::where(['is_in_home'=> 1, 'status'=> 1])->select(['title','description','logo','alt','site_link'])->orderBy('pn')->get()->toArray();
            $data['blogs'] = Blog::with(['admin', 'blogcategory'])->where(['is_in_home' => 1, 'status' => 1])->select(['title', 'short_description', 'image', 'alt', 'cat_id', 'created_by_id', 'pn','created_at'])->orderBy('pn')->get()->toArray();
            $data['galleris'] = Gallery::where(['status'=> 1])->select(['id','image','alt'])->orderBy('srln')->get()->toArray();
        }


       
        return view("frontend.$view", compact('data'));
    }
}