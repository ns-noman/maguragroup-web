@php
    $basicInfo = Cache::remember('basic_info', 60, function () {
        return \App\Models\BasicInfo::first();
    });
@endphp
<!doctype html>
<html class="no-js" lang="en">
    <head prefix="og: http://ogp.me/ns#">
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="google-site-verification" content="C1rJen9q7AGGUWyzzeT3bqMmrmq-sX4QVbcDFuZlpRk" />
        <title>{{ isset($data['title']) ? $data['title']  . ' : ' .$basicInfo->HomePageTitle : $basicInfo->HomePageTitle }}</title>
        <meta http-equiv="x-ua-compatible" content="IE=edge">
        <meta name="csrf-token" content="{{ csrf_token() }}" />
        <meta property="og:type"                 content="website"/> 
        <meta property="og:url"                  content="{{ url()->full() }}"/>
        <meta property="og:site_name"            content="{{ $basicInfo->HomePageTitle }}"/>
        <meta property="og:image"                content="{{ isset($data['image']) ? $data['image'] : asset('public/uploads/basic-info/'.$basicInfo->Logo) }}"/>
        <meta property="og:title"                content="{{ isset($data['title']) ? $data['title'] : $basicInfo->SiteName }}"/>
        <meta property="og:description"          content="{{ isset($data['description']) ? $data['description'] : $basicInfo->MetaDescription }}"/>
        <meta name="description" content="{{ $basicInfo->MetaDescription }}"/>
        <meta name="keywords" content="{{ $basicInfo->MetaTag }}"/>
		@include('layouts.frontend.links')
    </head>
    {{-- <h1 style="position:absolute;top:-15389px">Playing online casino Malaysia through Alibaba33 online casino Malaysia can
        be a fun and rewarding experience for those who enjoy playing games for fun. <a
            href="https://www.judipoker365.com/">judipoker365.com</a>Bet on your favourite slots, live, sporting events and
        win big! If you enjoy sports, duitnow 918kiss slots like Mega888 ewallet Alibaba33 online casino Malaysia has
        something for you.</h1> --}}
    <body>
        <div class="wrapper">
            @include('layouts.frontend.header')
            @yield('content')
        </div>
        @include('layouts.frontend.footer')
        @include('layouts.frontend.scripts')
        @yield('script')
    </body>
</html>


