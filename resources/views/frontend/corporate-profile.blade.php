@extends('layouts.frontend.master')
@section('content')
	@php
	$default = ['title'=>'Default'];
	$content = $data['breadcrumb'] ?? $default;
	@endphp
	<section class="breadcrumb-area" style=" padding: 30px;background-image:url({{ asset("public/frontend-assets/img/company-profile-banner.png") }});">
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
						<img src="{{ asset("public/frontend-assets/img/corporate-profile-image.jpg") }}" alt="img">
						<div class="about-vedio">
							<div class="video-btn">
								<a data-rel="lightcase" href="{{ $data['basicInfo']['video_embed_3'] }}"><i class="fas fa-play"></i></a>
							</div>
						</div>
					</div>
				</div>

				<div class="col-lg-6 align-self-center">
					<div class="about-content">
						<h4 class="sc_subtitle"><span>Corporate Profile</span></h4>
						{{-- <h2 class="sc_title">Corporate Profile.</h2> --}}
						<p>While diversification and expanding its capacity, has no doubt been lucrative moves for the Magura Group, the management has much more in mind than just making profit.</p>
						<p>Magura Group has always held on to the philosophy of doing business that will benefit people. It has been more than 25 years of exploration and hardworking and Magura Group has become a Multilateral Enterprise with its business covering different aspects including food, cloth, housing, education and medicare.</p>
						<p>The products and services of Magura Group are extremely well-recieived owing to their superb quality and reasonable prices.</p>						
						<p>Present value of the assets of Magura Group would be about TK. 30,000.00 Million (equivalent to US$ 411 million). Total turn over amounts to Tk. 12,000.00 Million (equivalent to US$ 164 million).</p>
						<p>Magura Group now has a staff of more than 8000 Nos.</p>
						<p>Magura Group is very much in tune with current trends. Bangladesh Advance Technologies Ltd. is an example of how Magura Group has recognized the immense importance of information technology in today's world.</p>
						<p>There is therefore a constant effort to improve the quality of life of people. On a broader scale, each company of Magura Group in its own way contributes to the development of the Country. By setting up industries and export oriented businesses, Magura Group significantly contributes to the economy of Bangladesh.</p>
						<p>As we enter into the 21st century, we hope to work with integrity and give greater vitality to our social commitment to this country and its people.</p>
						<p>Magura Group is poised to face the future with a distinct sense of optimism.</p>
					</div>
				</div>
			</div>
		</div>
	</section>
@endsection
