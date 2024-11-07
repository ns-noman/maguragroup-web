@extends('layouts.frontend.master')
@section('content')
	@include('layouts.frontend.breadcrumb')
	<section class="section-padding-2 section-bg">
		<div class="container">
			<div class="row">
				<div class="col-lg-12 mb-50 text-center">
					<div class="section-headding">
						<h4 class="sc_subtitle"><span>Our Services</span></h4>
						<h2 class="sc_title">Our Main Focus</h2>
					</div>
				</div>
			</div>
			<div class="row">
				@foreach($data['serviceTypes'] as $key => $serviceType)
                    <div class="col-lg-4 col-md-6 mb-30">
                        <div class="info-box">
                            <div class="icon">{!! $serviceType['icon'] !!}</div>
                            <div class="content">
                                <h2><a href="services-details.html">{{ $serviceType['title'] }}</a></h2>
                                <p style="height: 120px;">{{ $serviceType['description'] }}</p>
                                <a class="get_link" href="services-details.html">View Details <i class="bi bi-arrow-right"></i></a>
                            </div>
                        </div>
                    </div>
                @endforeach
				{{-- <div class="col-lg-4 col-md-6 mb-30">
					<div class="info-box">
						<div class="icon">
							<i class="fas fa-utensils" style="font-size: 65px;"></i>
						</div>
						<div class="content">
							<h2><a href="services-details.html">Food</a></h2>
							<p style="height: 120px;">Our food service delivers fresh, high-quality meals and catering options, focusing on taste and customer satisfaction.</p>
							<a class="get_link" href="services-details.html">Get Now <i
									class="bi bi-arrow-right"></i></a>
						</div>
					</div>
				</div> --}}
			</div>
		</div>
	</section>
@endsection
