
@php
    $startTime = microtime(true);
@endphp
@php
    $basicInfo = Cache::remember('basic_info', 60, function () {
        return \App\Models\BasicInfo::first();
    });
    $frontendmenus = \App\Models\FrontendMenu::with('frontendsubmenus.frontendsubmenus')->where(['parent_id'=>0 ,'is_in_menus'=>1, 'status'=>1])->select(['id', 'parent_id', 'title', 'slug'])->orderBy('srln')->get()->toArray();
    $pages = \App\Models\FrontendMenu::where(['is_in_pages'=>1, 'status'=>1])->select(['title', 'slug'])->orderBy('srln')->get()->toArray();
@endphp
<!DOCTYPE html>
<html class="no-js" lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <title>{{ $basicInfo->title }}</title>



        {{-- <meta charset="utf-8">
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
        <meta name="keywords" content="{{ $basicInfo->MetaTag }}"/> --}}

		@include('layouts.frontend.links')

</head>
    <body>
        @include('layouts.frontend.header')
        @yield('content')
        @include('layouts.frontend.footer')
        @include('layouts.frontend.scripts')
        @yield('script')
    </body>
</html>


