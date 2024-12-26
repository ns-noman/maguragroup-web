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
	<section class="">
		<div class="container">
			<div class="row pt-4 mb-4">
				<div class="col-lg-12 text-center">
					<div class="about-content">
						<h4 class="sc_subtitle"><span>Blog Details</span></h4>
					</div>
				</div>
			</div>
			<div class="row">
				<!-- Blog Details -->
				<div class="col-lg-8">
					<!-- Details Content -->
					<div class="blog-details mb-30">
						<div class="thumbnail">
							<img src="{{ asset("public/uploads/blogs/". $data['blog']['image']) }}" alt="img">
						</div>
						<div class="content">
							<div class="meta">
								@php
									$date = \Carbon\Carbon::parse($data['blog']['created_at']);
									$day = $date->day;
									$month = $date->format('M');
									$year = $date->year;
								@endphp
								<span><i class="far fa-calendar-alt"></i> {{ $day }} {{ $month }} {{ $year }}</span>
								<span><i class="fas fa-tags"></i> <a href="#">{{ $data['blog']['blogcategory']['title'] }}</a></span>
								<span><i class="fas fa-user"></i> {{ $data['blog']['admin']['name'] }}</span>
							</div>
							<h2>{{ $data['blog']['title'] }}</h2>
							<p>{!! $data['blog']['description'] !!}</p>
						</div>
					</div>
				</div>
				<!-- Sidebar -->
				<div class="col-lg-4">
					<!-- Single -->
					<div class="sidebar-widgets">
						<h2>Recent Posts</h2>
						<div class="side-widgets-l-blog">
							@foreach ($data['recentBlogs'] as $recentBlog)
								<div class="item mb-20">
									<div class="thubnail">
										<a href="{{ route('home.index', ['blogs', $recentBlog['id']]) }}">
											<img src="{{ asset("public/uploads/blogs/". $recentBlog['image']) }}" alt="blog">
										</a>
									</div>
									@php
										$date = \Carbon\Carbon::parse($recentBlog['created_at']);
										$day = $date->day;
										$month = $date->format('M');
										$year = $date->year;
									@endphp
									<div class="content">
										<h4><a href="{{ route('home.index', ['blogs', $recentBlog['id']]) }}">{{ $recentBlog['title'] }}</a></h4>
										<span>{{ $day }} {{ $month }} {{ $year }}</span>
									</div>
								</div>
							@endforeach
							
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>
@endsection
