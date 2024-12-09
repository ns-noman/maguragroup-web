@extends('layouts.frontend.master')
@section('content')
@php
$default = ['title'=>'Default'];
$content = $data['breadcrumb'] ?? $default;
@endphp
	<section class="breadcrumb-area" style=" padding: 30px;background-image:url({{ asset("public/frontend-assets/img/banner-mvv.jpg") }});">
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


	<!-- End Breadcrumb Area -->

	<!-- Start About Area -->
	<section class="about-area pt-5">
		<div class="container">
			<div class="row">
				<div class="col-lg-6">
					<div class="about-img">
						<img src="{{ asset("public/frontend-assets/img/mvv.jpg") }}" alt="img" class="border border-secondary border-4">
					</div>
				</div>
				<div class="col-lg-6">
					<div class="about-content">
						<h4 class="sc_subtitle"><span>Mission , Vision & Values</span></h4>
						<h2 class="sc_title">Mission</h2>
						<p>To drive sustainable development and economic growth in Bangladesh through innovation, excellence, and a diverse portfolio of products and services. We are committed to creating value across multiple sectors, including land development, garments, food supply, digital media, e-commerce, online portals, and newspaper publishing, while maintaining the highest standards of quality, safety, and sustainability. By embracing technological advancements and efficient practices, we strive to foster industrial growth, enhance livelihoods, and support the digital transformation of Bangladesh. Through our work in both traditional industries and the digital economy, we aim to contribute to the nation's long-term prosperity, helping to build a brighter, more inclusive, and sustainable future for all.
					</div>
				</div>
			</div>
			<div class="row mt-2">
				<div class="col-lg-6">
					<div class="about-content">
						<h2 class="sc_title">Vision</h2>
						<p>To become a global leader and benchmark of excellence across every industry we operate in. We aim to redefine standards in garment manufacturing, food production, technology services, pharmaceuticals, and beyond, by driving innovation, efficiency, and sustainability. We envision a future where our brands are synonymous with trust, quality, and resilience—leading the way in adopting cutting-edge technologies and practices that meet the evolving demands of the modern world. In industries such as shipping, logistics, chemical production, API technology, and publishing, we seek to push boundaries, set new trends, and remain at the forefront of progress. Our vision is to not only excel but to pioneer transformative change, inspire industry-wide innovation, and contribute to the well-being of communities and markets, both locally and globally. We are committed to building a lasting legacy of integrity, innovation, and social responsibility for generations to come.
					</div>
				</div>
				<div class="col-lg-6">
			    	<style>
                		#value ul li {
                			width: 100%;
                			float: left;
                			line-height: 20px;
                			margin-bottom: 10px;
                			font-size: 16px;
                			font-weight: 500;
                			display: block;
                		}
                	</style>
					<div class="about-content" id="value">
						<h2 class="sc_title">Values</h2>
						<ul>
							<li><strong>Integrity</strong>: We uphold honesty, transparency, and fairness in all our actions, ensuring trust in every relationship.</li>
							<li><strong>Innovation</strong>: We constantly seek creative solutions and advancements that drive progress across all industries.</li>
							<li><strong>Sustainability</strong>: We prioritize eco-friendly practices, ensuring that our operations contribute to long-term environmental responsibility.</li>
							<li><strong>Customer-Centricity</strong>: We are dedicated to delivering exceptional value and satisfaction, always placing our customers at the heart of our business.</li>
							<li><strong>Collaboration</strong>: We foster teamwork and strong partnerships, working together to achieve common goals and mutual success.</li>
							<li><strong>Excellence</strong>: We relentlessly pursue the highest standards of quality, performance, and efficiency in everything we do.</li>
							<li><strong>Adaptability</strong>: We embrace agility, remaining responsive and resilient to the evolving needs and challenges of the global market.</li>
						</ul>								   
					</div>
				</div>
			</div>
		</div>
	</section>
	<!-- End About Area -->
@endsection
