<?php

namespace App\Http\Controllers\frontend;

// use App\Models\EOption;
// use App\Models\EPage;
// use App\Models\ENews;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Auth;

class HomeController extends Controller
{
    public function index($date = null,$pnumber = 1)
    {
        // if(!$date){
        //     $date = EOption::where('option_name','active_date')->value('option_value');
        //     return redirect()->route('home.index',[$date,null]);
        // }
        // $data['page'] = EPage::where(['pdate' => $date, 'pnumber' => $pnumber, 'ptype' => 'regular'])->orderByDesc('id')->first();
        // if (!$data['page']) {
        //     $data['page'] = EPage::where(['pdate' => $date, 'ptype' => 'regular'])->orderBy('pnumber')->limit(1)->offset($pnumber-1)->first();
        // }
        // if($data['page']){
        //     $data['page'] = $data['page']->toArray();
        //     $data['news'] = ENews::where(['page_id' => $data['page']['id']])->orderBy('id')->get()->toArray();
        //     $data['current_page'] = $pnumber;
        //     $data['page_max'] = EPage::where(['pdate' => $date,'ptype' => 'regular'])->count();
        //     $data['image'] = $data['page']['img_medium'];
        // }
        // $data['all_pages'] = EPage::where(['pdate' => $date, 'ptype' => 'regular'])->orderBy('list_order')->limit(100)->offset(0)->get();
        // $data['total_pages'] = EPage::where('pdate', $date)->where('ptype', 'regular')->count();
        // $data['date'] = $date;
        // return view('frontend.index', compact('data'));
    }

    public function print($news_id)
    {
        // $data['news'] = ENews::find($news_id)->toArray();
        // $data['parentNews'] = ENews::where('ref_link', $news_id)->first();
        // if ($data['parentNews']) {
        //     $data['parentNews'] = $data['parentNews']->toArray();
        //     $data['parentnewsID'] = $data['parentNews']['id'];
        //     $data['newsFirst'] = ENews::find($data['parentnewsID'])->toArray();
        // } else {
        //     $data['parentnewsID'] = 0;
        //     $data['newsFirst'] = null;
        // }

        // $data['newsData'] = '';
        // if (!empty($data['news']['uri'])) {
        //     $data['newsData'] = $data['news'];
        // }
        // $data['newsSecond'] = '';
        // if (!empty($data['news']['ref_link'])) {
        //     $data['newsSecond'] = ENews::find($data['news']['ref_link']);
        // }
        // return view('frontend.news-print', compact('data'));
    }
    public function details($nid, $rand = '')
    {
        // $news = ENews::find($nid)->toArray();
        // $parent_news = ENews::where(['ref_link' => $nid])->first();

        // if ($parent_news) {
        //     $parent_news = $parent_news->toArray();
        //     $data['parentnews'] = $parent_news["id"];
        //     $data['id'] = $parent_news["id"];
        //     if (!empty($parent_news['uri'])) {
        //         $parentphoto = $parent_news['uri'];
        //     }
        // } else {
        //     $data['parentnews'] = 0;
        //     $data['id'] = $news['id'];
        // }
        // $data['news'] = '';
        // if (!empty($news['uri'])) {
        //     $data['news'] = $news;
        // }
        
        // $child_news = ENews::find($news['ref_link']);

        // if ($child_news) {
        //     $data['child_news'] = $child_news["id"];
        //     if (!empty($child_news['uri'])) {
        //         $childphoto = $child_news['uri'];
        //     }
        // }
        // if (!isset($parentphoto) && !isset($childphoto)) {
        //     $data['image'] = $news['uri'];
        //     $data['showimage1'] = $news['uri'];
        // } elseif (!isset($parentphoto) && isset($childphoto)) {
        //     $data['image'] = '';
        //     $data['showimage1'] = $news['uri'];
        //     $data['showimage2'] = $childphoto;
        // } elseif (isset($parentphoto) && !isset($childphoto)) {
        //     $data['image'] = '';
        //     $data['showimage1'] = $parentphoto;
        //     $data['showimage2'] = $news['uri'];
        // }

        // return view('frontend.details', compact('data'));
    }

}