<?php

namespace App\Http\Controllers\frontend;

use App\Models\Slider;
use App\Models\Company;
use App\Models\BasicInfo;
use App\Models\ServiceType;
use App\Models\Service;
use App\Models\Product;
use App\Models\Blog;
use App\Models\Gallery;
use App\Models\FrontendMenu;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Auth;

class HomeController extends Controller
{
    public function index($slug = 'home', $id = null)
    {
        $data = [];
        $view = 'index';
        $menu = FrontendMenu::where(['status' => 1, 'slug' => $slug])->first();
        if(!$menu) return redirect()->route('home.index');
        $data['breadcrumb'] = ['title'=> $menu->title];
        $menuID = $menu->id;


        if($menuID == 2){
        } else if($menuID == 3 || $menuID == 4){
            $view = 'corporate-profile';
            $data['basicInfo'] = BasicInfo::select(['video_embed_3'])->first()->toArray();
        } else if($menuID == 5){
            $view = 'mvv';
        } else if($menuID == 6){ 
            if($id){
                $view = 'services.service-details';
                $data['services'] = Service::where(['service_type_id'=>$id, 'status'=> 1])->select(['id','title','description','image','alt'])->orderBy('pn')->get()->toArray();
                $data['serviceTypeTitle'] = ServiceType::find($id)->title;
            }else{
                $view = 'services.services';
                $data['serviceTypes'] = ServiceType::where(['status'=> 1])->select(['id','title','description','icon',])->orderBy('id')->get()->toArray();
            }
        } else if($menuID == 7){
            if($id){
                $view = 'products.product-details';
                $data['productDetails'] = Product::find($id)->toArray();
            }else{
                $view = 'products.products';
                $data['products'] = Product::where(['status'=> 1])->select(['id', 'title','description','image','alt'])->orderBy('pn')->get()->toArray();
            }
        } else if($menuID == 8){
            $view = 'companies';
            $data['companies'] = Company::where(['status'=> 1])->select(['id', 'title','description','logo','alt','site_link'])->orderBy('pn')->get()->toArray();
        } else if($menuID == 9){
            $view = 'chairman-speech';
        } else if($menuID == 10){
            if($id){

                $view = 'blogs.blog-details';
                $data['blog'] = Blog::with(['admin', 'blogcategory'])->find($id)->toArray();

                $data['recentBlogs'] = Blog::with(['admin', 'blogcategory'])
                                        ->where(['status' => 1])
                                        ->whereNotIn('id', [$id])
                                        ->select(['id', 'title', 'short_description', 'image', 'alt', 'cat_id', 'created_by_id', 'pn','created_at'])
                                        ->orderBy('pn')
                                        ->orderByDesc('id')
                                        ->limit(4)
                                        ->get()
                                        ->toArray();
            }else{ 
                $view = 'blogs.blogs';
                $data['blogs'] = Blog::with(['admin', 'blogcategory'])->where(['status' => 1])
                                    ->select(['id', 'title', 'short_description', 'image', 'alt', 'cat_id', 'created_by_id', 'pn','created_at'])
                                    ->orderBy('pn')
                                    ->paginate(6);
            }
        } else if($menuID == 11){
            $view = 'contacts';            
            $data['basicInfo'] = BasicInfo::select(['phone','telephone','fax','email','location','address','map_embed'])->first()->toArray();
        } else if($menuID == 12){
            $view = 'future-aspect';
        } else if($menuID == 13){
            $view = 'company-organogram';
        } else{
            $view = 'index';
            $data['sliders'] = Slider::where(['status'=>1, 'company_id'=>0])->select(['id', 'title', 'description', 'image', 'alt'])->orderBy('srln')->get()->toArray();
            $data['basicInfo'] = BasicInfo::select(['assets_value','total_employees','total_companies','start_year','map_embed','video_embed_1','video_embed_2'])->first()->toArray();
            $data['serviceTypes'] = ServiceType::where(['is_in_home'=> 1, 'status'=> 1])->select(['id', 'title','description','icon',])->orderBy('id')->get()->toArray();
            $data['products'] = Product::where(['is_in_home'=> 1, 'status'=> 1])->select(['id', 'title','description','image','alt'])->orderBy('pn')->get()->toArray();
            $data['companies'] = Company::where(['is_in_home'=> 1, 'status'=> 1])->select(['id', 'title','description','logo','alt','site_link'])->orderBy('pn')->get()->toArray();
            $data['blogs'] = Blog::with(['admin', 'blogcategory'])->where(['is_in_home' => 1, 'status' => 1])->select(['id', 'title', 'short_description', 'image', 'alt', 'cat_id', 'created_by_id', 'pn','created_at'])->orderBy('pn')->get()->toArray();
            $data['galleris'] = Gallery::where(['status'=> 1])->select(['id','image','alt'])->orderBy('srln')->get()->toArray();
        }
        return view("frontend.$view", compact('data'));
    }
}