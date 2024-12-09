@extends('layouts.frontend.master')
@section('content')
	@php
    $default = ['title'=>'Default'];
    $content = $data['breadcrumb'] ?? $default;
    @endphp
    <!--<section class="breadcrumb-area section-padding" style="background-image:url({{ asset("public/frontend-assets/img/breadcrumb.jpg") }});">-->
    <!--    <div class="container">-->
    <!--        <div class="row">-->
    <!--            <div class="col-lg-12">-->
    <!--                <div class="breadcrumb-content">-->
    <!--                    <h2>{{ $content['title'] }}</h2>-->
    <!--                    <ul>-->
    <!--                        <li><a href="{{ route('home.index') }}">Home</a></li>-->
    <!--                        <li><i class="fas fa-angle-double-right"></i></li>-->
    <!--                        <li>{{ $content['title'] }}</li>-->
    <!--                    </ul>-->
    <!--                </div>-->
    <!--            </div>-->
    <!--        </div>-->
    <!--    </div>-->
    <!--</section>-->
	<section class="about-area section-padding section-bg">
		<div class="container">
			<div class="row"  style="text-align: justify;">
				<div class="col-lg-3">
					<div class="about-img">
						<!--<img src="{{ asset("public/frontend-assets/img/president.png") }}" alt="img" class="border border-secondary border-3">-->
						<img src="{{ asset("public/frontend-assets/img/Chairman_SR.jpg") }}" alt="img" class="border border-secondary border-3">
						<h4>Mustafa Kamal Mohiuddin</h4>
						<h5>Chairman</h5>
					</div>
				</div>
				<div class="col-lg-9 align-self-center">
					<div class="about-content">
						<h4 class="sc_subtitle"><span>Chairman Speech</span></h4>
						<h2 class="sc_title"></h2>
						<p>The emergence of Magura Group as a Conglomerate is the result of combined efforts for over the past two and a half decade. The Group is working with the vision to ensure welfare for the people through better social services. To this aim, the Group is being thoroughly involved in multi dimensional activities, related to satisfying the basic needs of human expectation.</p>
						<p>Adaptability, versatility, reliability and capability are the ideals of Magura Group, which are being successfully followed in all our business units. Over the years, we have extended our business activities in different dimensions and have been able to emerge as a promoter of business houses and industrial enterprises with the support of highly capable professionals.</p>
						<p>Since inception we are contributing significantly to the national economy through effective utilization of indigenous resources for production and marketing of quality products at a competitive price and are thereby creating scope for employment.</p>
					</div>
				</div>
				<div class="col-lg-12">
					<p>The members of Magura Group are dedicated to achieve their goals through all out efforts and excellent team spirit. I sincerely hope to join with our prospective friend in addition to existing ones, both domestic as well as overseas, to have closer cooperation for making a better tomorrow. We will be continuing our efforts to improve the performance and thereby enhance our contribution towards the socio-economic upliftment of Bangladesh.</p>
				</div>
			</div>
			{{-- <div class="row">
				<div class="col-lg-12">
					<div class="about-content">
						<p>The members of Magura Group are dedicated to achieve their goals through all out efforts and excellent team spirit. I sincerely hope to join with our prospective friend in addition to existing ones, both domestic as well as overseas, to have closer cooperation for making a better tomorrow. We will be continuing our efforts to improve the performance and thereby enhance our contribution towards the socio-economic upliftment of Bangladesh.</p>
					</div>
				</div>
			</div> --}}
		</div>
	</section>
@endsection
