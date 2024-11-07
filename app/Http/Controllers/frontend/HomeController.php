<?php

namespace App\Http\Controllers\frontend;

use App\Models\Slider;
use App\Models\Company;
use App\Models\BasicInfo;
use App\Models\ServiceType;
use App\Models\Product;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Auth;

class HomeController extends Controller
{
    public function index($date = null,$pnumber = 1)
    {
        $data['sliders'] = Slider::where(['status'=>1, 'company_id'=>0])->select(['title', 'description', 'image', 'alt'])->orderBy('srln')->get()->toArray();
        $data['basicInfo'] = BasicInfo::select(['assets_value','total_employees','total_companies','start_year','map_embed','video_embed_1','video_embed_2','video_embed_3'])->first()->toArray();
        $data['serviceTypes'] = ServiceType::where(['is_in_home'=> 1, 'status'=> 1])->select(['title','description','icon',])->orderBy('id')->get()->toArray();
        $data['products'] = Product::where(['is_in_home'=> 1, 'status'=> 1])->select(['title','description','image','alt'])->orderBy('pn')->get()->toArray();
        $data['companies'] = Company::where(['is_in_home'=> 1, 'status'=> 1])->select(['title','description','logo','alt','site_link'])->orderBy('pn')->get()->toArray();
        return view('frontend.index', compact('data'));
    }
}