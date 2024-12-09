@extends('layouts.frontend.master')
@section('content')
	@php
	$default = ['title'=>'Default'];
	$content = $data['breadcrumb'] ?? $default;
	@endphp
	<section class="breadcrumb-area" style=" padding: 30px;background-image:url({{ asset("public/frontend-assets/img/banner-future-aspect.jpg") }});">
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
	<section class="about-area section-padding">
		<div class="container">
			<div class="row">
				<div class="col-lg-6">
					<div class="about-img">
						<img src="{{ asset("public/frontend-assets/img/futureaspects.jpg") }}" alt="Magura Group Future Aspect">
					</div>
				</div>
				<div class="col-lg-6 align-self-center">
					<div class="about-content">
						<h4 class="sc_subtitle"><span>Future Aspect</span></h4>
						<h2 class="sc_title">Future Aspect</h2>
						<p>Bangladesh Development Group is aiming to utilize its natural resource of fertile land and tropical climate for economical development of the country as well as to revert the ecological imbalance. It has the plan to set up Medicinal Plantation as specialized agriculture project and Oil Palm Tree Plantation as agricultural as well as forest development project. The Oil Palm Tree Plantation will also contribute towards improving the condition of ecological imbalance. Moreover, Palm Oil Production will significantly reduce its import volume. Since Oil Palm Tree Plantation cum Palm Oil Production is a new technology in Bangladesh, the company intends to march forward in collaboration with  experienced foreign associates to implement its objectives.</p>
						<p>Ideals of Bangladesh Development Group, which are being successfully followed in all our business units right from real estate to commercial and industrial enterprises. Over the years, we have extended our business activities in different dimensions and have been able to emerge as a promoter of business houses and industrial enterprises with the support of a group of highly capable professionals.</p>
						<p>The emerging Group has always believed in the philosophy of carrying on business activities for the well being of the people. Years of hard work and dedication has  shaped the Group into a Multidimensional Enterprise with wide spread business coverage for the basic needs of people in the food, cloth, shelter, education and medicare sectors.</p>
						<p>The Group is constantly striving to improve the life style of our people. Each unit of the Group have been contributing for developing the economy of the country as a whole by setting up industries and through other activities in the diverse fields. Thus the Group is aimed at glorifying the image of the country with peace, progress and prosperity.</p>
					</div>
				</div>
			</div>
		</div>
	</section>
@endsection
