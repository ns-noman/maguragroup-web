@extends('layouts.frontend.master')
@section('content')
@php
$default = ['title'=>'Default'];
$content = $data['breadcrumb'] ?? $default;
@endphp
	<section class="breadcrumb-area" style=" padding: 30px;background-image:url({{ asset("public/frontend-assets/img/blogs.jpg") }});">
		<div class="container">
			<div class="row">
				<div class="col-lg-12" style="padding: 90px 0px 90px 0px">
					{{-- <div class="breadcrumb-content">
						<h2>{{ $content['title'] }}</h2>
						<ul>
							<li><a href="{{ route('home.index') }}">Home</a></li>
							<li><i class="fas fa-angle-double-right"></i></li>
							<li>{{ $content['title'] }}</li>
						</ul>
					</div> --}}
				</div>
			</div>
		</div>
	</section>	
	<section class="section-bg">
		<div class="container">
			<div class="row pt-4 mb-4">
				<div class="col-lg-12 text-center">
					<div class="about-content">
						<h4 class="sc_subtitle"><span>Blogs</span></h4>
					</div>
				</div>
			</div>
			<div class="row">
				<style>
					.blog-item .content p {
						min-height: 90px;
						overflow: hidden;
					}
					.blog-item .content h3 {
						min-height: 60px;
						overflow: hidden;
					}
				</style>

				@foreach ($data['blogs'] as $blog)
					<div class="col-lg-4 col-md-6 mb-30">
						<div class="blog-item">
							<div class="thumnail">
								<a href="{{ route('home.index', ['blogs', $blog['id']]) }}">
									<img style="width: 387px; height: 259px" src="{{ asset("public/uploads/blogs/". $blog['image']) }}" alt="{{ $blog['alt'] }}">
								</a>
							</div>
							<div class="content">
								@php
									$date = \Carbon\Carbon::parse($blog['created_at']);
									$day = $date->day;
									$month = $date->format('M');
									$year = $date->year;
								@endphp
								<div class="post-date">
									<span>{{ $day }}</span>
									{{ $month }}, {{ $year }}
								</div>
								<div class="blog-meta">
									<a href="#"><i class="fas fa-user"></i> {{ $blog['admin']['name'] }}</a>
									<a href="#"><i class="fas fa-tags"></i> {{ $blog['blogcategory']['title'] }}</a>
								</div>
								<h3><a href="{{ route('home.index', ['blogs', $blog['id']]) }}">{{ Str::limit($blog['title'], 50, '...') }}</a></h3>
								<p>{{ Str::limit($blog['short_description'], 120, '...') }}</p>
							</div>
						</div>
					</div>
				@endforeach
			</div>
			<!-- Pagination -->
			<div class="row mt-10 mb-30 text-center section-bg">
				<div class="col-lg-12">
					<div class="bhouse_pagination">
						<ul>
							{{-- 
								<li><a href="#"><i class="fas fa-angle-left"></i></a></li>
								<li><a href="#">1</a></li>
								<li><span>2</span></li>
								<li><a href="#">3</a></li>
								<li><a href="#">4</a></li>
								<li><a href="#"><i class="fas fa-angle-right"></i></a></li>
							 --}}

							{{-- <li class="page-item {{ $data['current_page'] == 1 ? 'disabled' : '' }}">
                                <a class="page-link" href="{{ $data['current_page'] == 1 ? 'javascript:void(0)' : route('home.index', [$data['date'], 1]) }}">শুরু</a>
                            </li>
                            <li class="page-item {{ $data['current_page'] > 1 ? '' : 'disabled' }}">
                                <a class="page-link" href="{{ $data['current_page'] > 1 ? route('home.index', [$data['date'], $data['current_page'] - 1]) : 'javascript:void(0)' }}">
                                    {{ 'আগের' }}
                                </a>
                            </li>
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
            
                            <li class="page-item {{ $data['current_page'] < $data['total_pages'] ? '' : 'disabled' }}">
                                <a class="page-link" href="{{ $data['current_page'] < $data['total_pages'] ? route('home.index', [$data['date'], $data['current_page'] + 1]) : 'javascript:void(0)' }}">
                                    {{ 'পরের' }}
                                </a>
                            </li>
            
                            <li class="page-item {{ $data['current_page'] == $data['total_pages'] ? 'disabled' : '' }}">
                                <a class="page-link" href="{{ $data['current_page'] == $data['total_pages'] ? 'javascript:void(0)' : route('home.index', [$data['date'], $data['total_pages']]) }}">শেষ</a>
                            </li> --}}

						</ul>
					</div>
				</div>
			</div>
		</div>
	</section>

@endsection
