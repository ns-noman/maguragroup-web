@extends('layouts.frontend.master')
@section('content')
	@include('layouts.frontend.breadcrumb')
	<section class="section-padding">
		<div class="container">
			<!-- Blog  -->
			<div class="row">

				@foreach ($data['blogs'] as $blog)
					<div class="col-lg-4 col-md-6 mb-30">
						<div class="blog-item">
							<div class="thumnail">
								<a href="single.html">
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
								<h3><a href="single.html">{{ $blog['title'] }}</a></h3>
								<p>{{ $blog['short_description'] }}</p>
							</div>
						</div>
					</div>
				@endforeach

				<!-- Single -->
				{{-- <div class="col-lg-4 col-md-6 mb-30">
					<div class="blog-item">
						<div class="thumnail">
							<a href="single.html">
								<img src="assets/img/blog/1.jpg" alt="blog">
							</a>
						</div>
						<div class="content">
							<div class="post-date">
                                <span>31</span>
                                Oct
                            </div>
                            <div class="blog-meta">
                            	<a href="#"><i class="fas fa-user"></i> Admin</a>
                            	<a href="#"><i class="fas fa-tags"></i> Technology</a>
                            </div>
                            <h3><a href="single.html">Five Ways to Develop a World Class Sales Operations</a></h3>
                            <p>Nulla ac suscipit nisi. Sed rhoncus, nisl ut rutrum maximus, justo dui malesuada magna, non eleifend</p>
						</div>
					</div>
				</div> --}}



			</div>
			<!-- Pagination -->
			<div class="row mt-10 mb-30 text-center">
				<div class="col-lg-12">
					<div class="bhouse_pagination">
						<ul>
							<li><a href="#"><i class="fas fa-angle-left"></i></a></li>
							<li><a href="#">1</a></li>
							<li><span>2</span></li>
							<li><a href="#">3</a></li>
							<li><a href="#">4</a></li>
							<li><a href="#"><i class="fas fa-angle-right"></i></a></li>
						</ul>
					</div>
				</div>
			</div>
		</div>
	</section>

@endsection
