@php
    $basicInfo = Cache::remember('basic_info', 60, function () {
        return \App\Models\BasicInfo::first();
    });
@endphp
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta name="Description" content="{{ $basicInfo->MetaDescription }}">
<title>{{ isset($data['title']) ? $data['title']  . ' : ' .$basicInfo->HomePageTitle : $basicInfo->HomePageTitle }}</title>
<meta property="og:type" content="website"/>
<meta property="og:url" content="{{ url()->full() }}"/>
<meta property="og:site_name" content="{{ $basicInfo->HomePageTitle }}"/>
<meta property="og:image" content="{{ isset($data['image']) ? $data['image'] : asset('public/uploads/basic-info/'.$basicInfo->Logo) }}"/>
<meta property="og:title" content="{{ isset($data['title']) ? $data['title'] : $basicInfo->SiteName }}"/>
<meta property="og:description" content="{{ isset($data['description']) ? $data['description'] : $basicInfo->MetaDescription }}"/>
<link rel="shortcut icon" type="image/x-icon" href="{{ asset('public/uploads/basic-info/' . $basicInfo->FavIcon) }}">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css"/>
<link rel="stylesheet" href="{{ asset('public/frontend-assets/assets/contents/css/colorbox.css') }}" />


<style>
    .inline { font-size: 20px; text-decoration: none; color: #030303} 
</style>
<style media="print">         
    @media print
    {    
        .no-print, .no-print *
        {
            display: none !important;
        }
    }  
</style>
<style>
    .no-print a
    {
        padding: 5px;
    }    
    .print{
    display : none;
    }
    @media print {
        .print {
        display : block;
        }
    }
    .border{
        padding: 5px 0;
        border:none;
        border-top: solid 1px #ccc;
        border-bottom: solid 1px #ccc;
    }   
    @page { size: auto;  margin: 0mm; }
</style>
<style>
    .pagination {
        margin: 0;
    }
    .pagination li {
        display: inline;
    }
    .pagination .page-link {
        padding: 6px 12px;
        font-size: 14px;
    }
</style>
<script type="text/javascript">var switchTo5x = true;</script>
<script type="text/javascript" src="http://w.sharethis.com/button/buttons.js"></script>
<script type="text/javascript"> stLight.options({publisher: "fc3b7463-f15d-4d7e-bc93-5ad428477cde", doNotHash: false, doNotCopy: false, hashAddressBar: false});</script>
<script async src="https://www.googletagmanager.com/gtag/js?id=UA-115325801-2"></script>
<script data-ad-client="ca-pub-2872207974896528" async src="https://pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>
<script async custom-element="amp-auto-ads" src="https://cdn.ampproject.org/v0/amp-auto-ads-0.1.js"></script>
<script>
    window.dataLayer = window.dataLayer || [];
    function gtag() {
        dataLayer.push(arguments);
    }
    gtag('js', new Date());
    gtag('config', 'UA-115325801-2');
</script>
</head>
<body>
    @php
        if (empty($data['news'])) {
            echo '<h1>Sorry, news not found!!!</h1>';
            exit();
        }
        $crop_ratio = 1.27;
        $exheight = intval(intval($data['news']['width']) * floatval($crop_ratio)) < 400 ? 88 : 44;
        $width = $exheight + 4 + floatval($data['news']['width']) * floatval($crop_ratio);
        $height = $exheight + 4 + floatval($data['news']['height']) * floatval($crop_ratio);
    @endphp

    <div style="text-align: center; clear: both;">
        <p align="center" class="no-print">
            <a href="http://www.maguragroup.com.bd/" target="_blank">
                <img style="border: solid 1px #ccc;" src="{{ asset('public/uploads/ads/728X90.jpg') }}" alt="">
            </a>
        </p>

        <p align="center" class="print">
            <img src="{{ asset('public/uploads/basic-info/Logo2.png') }}" width="150"/>
        </p>
        <img src="{{ asset('public/uploads/basic-info/bangladesher-khobor-logo.jpg') }}" width="350"/>
        <br>
        <hr>
        <br>
        <p align="center" class="print border"></p>
        @if (request()->has('ref') && request('ref') == 'f')
            <img src="{{ asset('public/uploads/pages/' . $data['showimage1']) }}">
            <br />
            @if (isset($data['showimage2']))
                <img src="{{ asset('public/uploads/pages/' . $data['showimage2']) }}">
            @endif
        @else
            <img src="{{ asset('public/uploads/pages/' . $data['news']['uri']) }}">
        @endif

        <div style="clear: both; float: left; width: {{ $width }}px;"></div>

        <style>
            .pagination {
                margin: 0; /* Adjust margins as needed */
                padding: 0;
                display: inline-block; /* Ensures proper alignment */
            }
            .pagination li {
                display: inline; /* Ensures items are displayed in a row */
            }
            .pagination .page-link {
                padding: 6px 12px; /* Adjust padding for better appearance */
                font-size: 22px; /* Font size adjustment */
                border-radius: 4px; /* Rounded corners */
                color: #337ab7; /* Bootstrap link color */
                text-decoration: none; /* Remove underline from links */
                border: 1px solid #ddd; /* Light gray border */
            }
            .pagination .page-link:hover {
                background-color: #f5f5f5; /* Background color on hover */
                color: #23527c; /* Change text color on hover */
                border-color: #adadad; /* Darker border color on hover */
            }
        </style>
        <div class="text-center no-print" style="height: 30px;">
            <ul class="pagination">
                @if (!empty($data['news']['ref_link']))
                    <li>
                        <a href="{{ route('home.details', [$data['news']['ref_link'], rand(0, 9999)]) }}" class="page-link">পরের পাতা >></a>
                    </li>
                @endif
                @if ($data['parentnews'] > 0)
                    <li>
                        <a href="{{ route('home.details', [$data['parentnews'], rand(0, 9999)]) }}" class="page-link"><< আগের পাতা</a>
                    </li>
                @endif
            </ul>
        </div>
    </div>
    <div class="no-print" style="padding: 10px; height: 30px; border: 0px solid #333; text-align: center; overflow: hidden;">
        <a href="{{ route('home.index') }}"><i class="fa fa-home fa-2x"></i></a>
        <a target="_blank" href="{{ route('details.print', $data['id']) }}"><i class="fa fa-print fa-2x"></i></a>
        <a target="_blank" href="" onclick="window.open('https://www.facebook.com/sharer/sharer.php?u='+encodeURIComponent('{{ url()->full() }}?ref=f')+'&picture='+encodeURIComponent('{{ asset('public/uploads/pages/'. $data['image']) }}'),'facebook-share-dialog','width=626,height=436'); return false;">
            <i class="fa fa-facebook-square fa-2x"></i>
        </a>
        <a target="_blank" href="" onclick="javascript:window.open('https://twitter.com/share?text={{ '' }}&url={{ url()->full() }}','Twitter-dialog','width=626,height=436'); return false;">
            <i class="fa fa-twitter-square fa-2x"></i>
        </a>
        <a target="_blank" href="" onclick="window.open('https://plus.google.com/share?url={{ url()->full() }}','Google-dialog','width=626,height=436'); return false;">
            <i class="fa fa-google-plus-square fa-2x"></i>
        </a>
    </div>

    @if(request()->headers->has('referer') && strpos(request()->headers->get('referer'), route('home.index')) === 0)
        <p align="center" class="no-print">
            <span onclick="javascript:parent.$.colorbox.close()" style="text-decoration: none;color: #000;cursor:pointer;">
                <i class="fa fa-times-circle"></i>Close this page
            </span>
        </p>
    @endif
</body>
</html>