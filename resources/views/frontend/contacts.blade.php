@extends('layouts.frontend.master')
@section('content')
	@php
	$default = ['title'=>'Default'];
	$content = $data['breadcrumb'] ?? $default;
	@endphp
	<section class="breadcrumb-area" style=" padding: 30px;background-image:url({{ asset("public/frontend-assets/img/contact-us-banner.jpg") }});">
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
	<section class="contact-area section-padding">
		<div class="container" onclick="showToast()">
			<div class="row">
				<div class="col-lg-8 align-self-center">
					<div class="contact-form">
						<h2>Get In Touch</h2>
						<form id="contact-form" action="{{ route("messages.store") }}" method="POST">
							@csrf
							<div class="row">
								<div class="col-md-6">
									<div class="single-input">
										<input required="required" type="text" name="name" placeholder="Your Name">
										<i class="fas fa-user"></i>
									</div>
								</div>
								<div class="col-md-6">
									<div class="single-input">
										<input required="required" type="email" name="email" placeholder="Your Email">
										<i class="far fa-envelope"></i>
									</div>
								</div>
								<div class="col-md-6">
									<div class="single-input">
										<input type="number" required="required" name="contact" placeholder="Your Phone">
										<i class="fas fa-mobile-alt"></i>
									</div>
								</div>
								<div class="col-md-6">
									<div class="single-input">
										<input type="text" required="required" name="subject" placeholder="Your Subjects">
										<i class="fas fa-file-alt"></i>
									</div>
								</div>
								<div class="col-12">
									<div class="single-input">
										<textarea name="message" required="required" placeholder="Write Message" spellcheck="false"></textarea>
										<i class="fas fa-pen"></i>
									</div>
								</div>
								<div class="col-12">
									<button type="submit">Send Message</button>
								</div>
							</div>
						</form>
						<p class="ajax-response"></p>
					</div>
				</div>
				<div class="col-lg-4 align-self-center">
					<div class="contact-form-info" style="background-image:url('{{ asset("public/frontend-assets/img/contact.jpg") }}');">
						<h2>Don't hesitate to contact us</h2>
						<div class="contact-info-list">
							<div class="item mb-20">
								<div class="icon">
									<i class="fas fa-home"></i>
								</div>
								<div class="content">
									<h4>Locations</h4>
									<p>{{ $data['basicInfo']['address'] }}</p>
								</div>
							</div>
							<div class="item mb-20">
								<div class="icon">
									<i class="far fa-envelope"></i>
								</div>
								<div class="content">
									<h4>Drop A Mail</h4>
									<p>{{ $data['basicInfo']['email'] }}</p>
								</div>
							</div>
							<div class="item">
								<div class="icon">
									<i class="fas fa-mobile-alt"></i>
								</div>
								<div class="content">
									<h4>Call Us</h4>
									{{-- <p>{{ $data['basicInfo']['fax'] }}</p> --}}
									<p>{{ $data['basicInfo']['phone'] }}</p>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
			<style>
				.map-container {
					position: relative;
					width: 100%;
					/* Maintain aspect ratio */
					padding-bottom: 50%; /* 50% height relative to width */
					height: 0;
					overflow: hidden;
				}
				.map-container iframe {
					position: absolute;
					top: 0;
					left: 0;
					width: 100%;
					height: 100%;
					border: 0;
				}
			</style>
			<div class="row mt-5">
				<div class="col-lg-12 align-self-center">
					<div class="map-container">
						<iframe class="border-secondary border-3" src="{{ $data['basicInfo']['map_embed'] }}" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
					</div>
				</div>
			</div>
		</div>
	</section>
@endsection
@section('script')
<script>
	toastr.options = {
		"closeButton": false,
		"debug": false,
		"newestOnTop": false,
		"progressBar": true,
		"positionClass": "toast-top-right",
		"preventDuplicates": false,
		"onclick": null,
		"showDuration": "300",
		"hideDuration": "1000",
		"timeOut": "3000",
		"extendedTimeOut": "1000",
		"showEasingCommand": "swing",
		"hideEasing": "linear",
		"showMethod": "fadeIn",
		"hideMethod": "fadeOut"
	}
	@if(session('alert'))
		if("{{ session('alert')['messageType'] == 'success' }}"){
			toastr.success("{{ session('alert')['message'] }}", "Success!");
		}
		if("{{ session('alert')['messageType'] == 'warning' }}"){
			toastr.warning("{{ session('alert')['message'] }}", "Warning!");
		}
    @endif
</script>
@endsection
