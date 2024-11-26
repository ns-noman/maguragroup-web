@extends('layouts.frontend.master')
@section('content')
	@include('layouts.frontend.breadcrumb')
	<section class="about-area section-padding">
		<div class="container">
			<div class="row">
				<div class="col-lg-6">
					<!--<h4 class="sc_subtitle mb-3"><span>{{ $data['productDetails']['title'] }}</span></h4>-->
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
