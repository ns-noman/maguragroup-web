@extends('layouts.frontend.master')
@section('content')
@php
$default = ['title'=>'Default'];
$content = $data['breadcrumb'] ?? $default;
@endphp
	{{-- <section class="breadcrumb-area" style=" padding: 30px;background-image:url({{ asset("public/frontend-assets/img/product-list-banner.png") }});">
		<div class="container">
			<div class="row">
				<div class="col-lg-12" style="padding: 90px 0px 90px 0px">
					<div class="breadcrumb-content">
						<h2>{{ $content['title'] }}</h2>
						<ul>
							<li><a href="{{ route('home.index') }}">Home</a></li>
							<li><i class="fas fa-angle-double-right"></i></li>
							<li>{{ $content['title'] }}</li>
						</ul>
					</div>
				</div>
			</div>
		</div>
	</section> --}}
	<section class="about-area section-padding section-bg">
		<div class="container">
			<h4 class="sc_subtitle mb-3 text-center"><span>Product Details</span></h4>
			<div class="row">
				<div class="col-lg-6">
					<div class="about-img">
						<img style="width: 800px!important; height: 400px!important;" src="{{ asset("public/uploads/products/". $data['productDetails']['image']) }}" alt="img">
					</div>
				</div>
				<div class="col-lg-6 align-self-center mt-20">
					<div class="product-content">
						<h2 class="sc_title">{{ $data['productDetails']['title'] }}</h2>
						<p>{!! $data['productDetails']['description'] !!}</p>
					</div>
				</div>
			</div>
		</div>
	</section>
@endsection
