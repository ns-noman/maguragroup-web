@extends('layouts.frontend.master')
@section('content')
<div class="main_content_section">
    @if($data['page'])
        <div class="left_side">
            <div class="indivisual-page">
                <div class="row" style="padding: 20px;">
                    <div class="col-xs-12 col-md-8 col-lg-8">
                        <ul class="pagination">
                            <!-- First page link -->
                            <li class="page-item {{ $data['current_page'] == 1 ? 'disabled' : '' }}">
                                <a class="page-link" href="{{ $data['current_page'] == 1 ? 'javascript:void(0)' : route('home.index', [$data['date'], 1]) }}">শুরু</a>
                            </li>
                            <!-- Previous page link -->
                            <li class="page-item {{ $data['current_page'] > 1 ? '' : 'disabled' }}">
                                <a class="page-link" href="{{ $data['current_page'] > 1 ? route('home.index', [$data['date'], $data['current_page'] - 1]) : 'javascript:void(0)' }}">
                                    {{ 'আগের' }}
                                </a>
                            </li>
                            <!-- Limited Page number links -->
                            @php
                                $start = max(1, $data['current_page'] - 2);
                                $end = min($data['total_pages'], $data['current_page'] + 2);
                            @endphp
            
                            {!! $start > 1 ? '<li class="page-item disabled"><span class="page-link">...</span></li>' : '' !!}
            
                            @for($i = $start; $i <= $end; $i++)
                                <li class="page-item {{ $i == $data['current_page'] ? 'active' : '' }}">
                                    <a class="page-link" href="{{ $i != $data['current_page'] ? route('home.index', [$data['date'], $i]) : 'javascript:void(0)' }}">
                                        {{ $i }}
                                    </a>
                                </li>
                            @endfor
            
                            {!! $end < $data['total_pages'] ? '<li class="page-item disabled"><span class="page-link">...</span></li>' : '' !!}
            
                            <!-- Next page link -->
                            <li class="page-item {{ $data['current_page'] < $data['total_pages'] ? '' : 'disabled' }}">
                                <a class="page-link" href="{{ $data['current_page'] < $data['total_pages'] ? route('home.index', [$data['date'], $data['current_page'] + 1]) : 'javascript:void(0)' }}">
                                    {{ 'পরের' }}
                                </a>
                            </li>
            
                            <!-- Last page link -->
                            <li class="page-item {{ $data['current_page'] == $data['total_pages'] ? 'disabled' : '' }}">
                                <a class="page-link" href="{{ $data['current_page'] == $data['total_pages'] ? 'javascript:void(0)' : route('home.index', [$data['date'], $data['total_pages']]) }}">শেষ</a>
                            </li>
                        </ul>
                    </div>
                    <div class="col-xs-6 col-md-4 col-lg-4">
                        <div class="form-group">
                            <label for="pageSelect">Select Page</label>
                            <select id="pageSelect" class="form-control" onchange="location=this.value;">
                                @foreach($data['all_pages'] as $all_page)
                                    <option value="{{ route('home.index', [$all_page['pdate'], $all_page['pnumber']]) }}" 
                                            {{ $data['current_page'] == $all_page['pnumber'] ? 'selected' : '' }}>
                                        {{ $all_page['title'] }}
                                    </option>
                                @endforeach
                            </select>
                        </div>
                    </div>
                </div>
            </div>
            

















            {{-- <div class="indivisual-page">
                <div class="row">
                    <div class="col-sm-6 col-md-6 col-lg-8">
                        <ul class="pagination">
                            <!-- First page link -->
                            <li class="page-item {{ $data['current_page'] == 1 ? 'disabled' : '' }}">
                                <a class="page-link" href="{{ $data['current_page'] == 1 ? 'javascript:void(0)' : route('home.index', [$data['date'], 1]) }}">শুরু</a>
                            </li>
                            <!-- Previous page link -->
                            <li class="page-item {{ $data['current_page'] > 1 ? '' : 'disabled' }}">
                                <a class="page-link" href="{{ $data['current_page'] > 1 ? route('home.index', [$data['date'], $data['current_page'] - 1]) : 'javascript:void(0)' }}">
                                    {{ $data['current_page'] > 1 ? 'আগের' : 'আগের' }}
                                </a>
                            </li>
                            <!-- Limited Page number links -->
                            @php
                                $start = max(1, $data['current_page'] - 2);
                                $end = min($data['total_pages'], $data['current_page'] + 2);
                            @endphp
                
                            {!! $start > 1 ? '<li class="page-item disabled"><span class="page-link">...</span></li>' : '' !!}
                
                            @for($i = $start; $i <= $end; $i++)
                                <li class="page-item {{ $i == $data['current_page'] ? 'active' : '' }}">
                                    <a class="page-link" href="{{ $i != $data['current_page'] ? route('home.index', [$data['date'], $i]) : 'javascript:void(0)' }}">
                                        {{ $i }}
                                    </a>
                                </li>
                            @endfor
                
                            {!! $end < $data['total_pages'] ? '<li class="page-item disabled"><span class="page-link">...</span></li>' : '' !!}
                
                            <!-- Next page link -->
                            <li class="page-item {{ $data['current_page'] < $data['total_pages'] ? '' : 'disabled' }}">
                                <a class="page-link" href="{{ $data['current_page'] < $data['total_pages'] ? route('home.index', [$data['date'], $data['current_page'] + 1]) : 'javascript:void(0)' }}">
                                    {{ $data['current_page'] < $data['total_pages'] ? 'পরের' : 'পরের' }}
                                </a>
                            </li>
                
                            <!-- Last page link -->
                            <li class="page-item {{ $data['current_page'] == $data['total_pages'] ? 'disabled' : '' }}">
                                <a class="page-link" href="{{ $data['current_page'] == $data['total_pages'] ? 'javascript:void(0)' : route('home.index', [$data['date'], $data['total_pages']]) }}">শেষ</a>
                            </li>
                        </ul>
                    </div>
                    <div class="col-sm-6 col-md-6 col-lg-4 form-group">
                        <label for="pageSelect">Select Page</label>
                        <select id="pageSelect" class="form-control" onchange="location=this.value;">
                            @foreach($data['all_pages'] as $all_page)
                                <option value="{{ route('home.index', [$all_page['pdate'], $all_page['pnumber']]) }}" 
                                        {{ $data['current_page'] == $all_page['pnumber'] ? 'selected' : '' }}>
                                    {{ $all_page['title'] }}
                                </option>
                            @endforeach
                        </select>
                    </div>                        
                </div>                    
            </div> --}}
            <div id="page-content" class="main_content">
                <img src="{{ asset('public/uploads/pages/'. $data['page']['img_medium']) }}" id="page-'{{ $data['page']['id'] }}" class="main-page-image" />
                @foreach($data['news'] as $n)
                    <a  href="{{ route('home.details', [$n['id'], rand(0, 9999)]) }}"
                        style="width: {{ $n['width'] }}px; height: {{ $n['height'] }}px; top: {{ $n['pos_top'] }}px;left: {{ $n['pos_left'] }}px"
                    class="news-box iframe" data-newsid="{{ $n['id'] }}"></a>
                @endforeach
                <input type="hidden" id="page_date" value="{{ $data['page']['pdate'] }}"/>
                <input type="hidden" id="page_type" value="{{ $data['page']['ptype'] }}"/>
                <input type="hidden" id="page_max" value="{{ $data['page_max'] }}"/>
                <input type="hidden" id="page_current" value="{{ $data['current_page'] }}"/>
            </div>
            <div class="pagination navigation">
                <ul class="pagination">
                    @if($data['current_page'] > 1)
                        <li class="page-item">
                            <a class="page-link" date="{{ $data['date'] }}" data="{{ $data['current_page'] - 1 }}" href="{{ route('home.index', [$data['date'], $data['current_page'] - 1]) }}"
                                title="{{ $data['page']['title'] . ':' . $data['current_page'] }}">
                                <i class="fa fa-angle-double-left" aria-hidden="true"></i> আগের পাতা
                            </a>
                        </li>
                    @endif
            
                    @if($data['current_page'] < $data['total_pages'])
                        <li class="page-item">
                            <a class="page-link" date="{{ $data['date'] }}" data="{{ $data['current_page'] + 1 }}" href="{{ route('home.index', [$data['date'], $data['current_page'] + 1]) }}"
                                title="{{ $data['page']['title'] . ':' . ($data['current_page'] + 1) }}">পরের পাতা <i class="fa fa-angle-double-right" aria-hidden="true"></i>
                            </a>
                        </li>
                    @endif
                </ul>
            </div>
        </div>
    @else
        <div class="left_side">
            <h2>কোন পাতা পাওয়া যায় নি</h2>
        </div>
    @endif
    <div class="right_side">
        <div class="headerSearch" style="width:336px;">
            <div class="serach-portion" style="text-align:center; margin-bottom:20px;" style="background: rebeccapurple">
                <div class="row">
                    <div class="col-sm-12 col-md-12 col-lg-12">
                        <h2 class="archive">আর্কাইভ</h2>
                        <input class="form-control" style="padding: 5px; margin:5px 0 2px 0;" value="{{ $data['date'] }}" />
                        <div class="datepicker-here" data-language='en' data-date-format="dd-mm-yyyy"></div>
                    </div>
                </div>
            </div>
        </div>
        <style>
            .all-pages-section .page-item {
                margin-bottom: 15px; /* Adjust as needed */
                border-radius: 8px; /* Rounded corners for the li */
                border: 1px solid #777575; /* Gray border for visual separation */
                box-shadow: 0 4px 8px rgba(0, 0, 0, 0.3); /* Enhanced shadow */
                overflow: hidden; /* Ensures child elements respect border-radius */
                padding: 10px; /* Add padding inside the li */
            }
            .all-pages-section .page-link {
                display: block;
                text-align: center;
                text-decoration: none;
            }
            .all-pages-section .img-responsive {
                border-radius: 8px; /* Rounded corners for the image */
                box-shadow: 0 2px 4px rgba(0, 0, 0, 0.2); /* Small shadow */
            }
            .all-pages-section .page-number {
                display: block;
                margin-top: 10px; /* Spacing between image and number */
                padding: 5px;
                background-color: #ff614c; /* Background color (optional) */
                border-radius: 4px; /* Rounded corners for the number */
                color: white; /* Text color */
            }
        </style>
        @if(count($data['all_pages']))
            <div class="all_pages all-pages-section">
                <h2>সকল পাতা</h2>
                <ul class="list-unstyled">
                    @foreach($data['all_pages'] as $all_page)
                        <li class="page-item">
                            <a href="{{ route('home.index', [$all_page['pdate'], $all_page['pnumber']]) }}" class="page-link">
                                <img src="{{ asset('public/uploads/pages/'. $all_page['img_small']) }}" alt="" class="img-responsive">
                                <span class="page-number">{{ $all_page['pnumber'] }}</span>
                            </a>
                        </li>
                    @endforeach
                </ul>
            </div>
        @endif
        <div class="advertise">
            <a href="http://www.maguragroup.com.bd/" target="_blank">
                {{-- <img style="border: solid 1px #ccc;" src="http://epaper.bangladesherkhabor.net/assets/ads/300X600.jpg" alt=""></a> --}}
        </div>
    </div>
</div>
@endsection
