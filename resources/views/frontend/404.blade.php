@extends('layouts.frontend.master')
@section('content')
    <section class="breadcrumb-area section-padding" style="background-image:url({{ asset("public/frontend-assets/img/breadcrumb.jpg") }});">
		<div class="container">
			<div class="row">
				<div class="col-lg-12">
					<div class="breadcrumb-content">
						<h2>404 Error</h2>
						<ul>
							<li><a href="index-2.html">Home</a></li>
							<li><i class="fas fa-angle-double-right"></i></li>
							<li>404 Error</li>
						</ul>
					</div>
				</div>
			</div>
		</div>
	</section>
	<div class="error-404 section-bg pt-100 pb-100">
		<div class="container">
			<div class="row">
				<div class="col-lg-8 offset-lg-2 text-center">
					<div class="error-404-content">
						<img src="{{ asset("public/frontend-assets/img/404.png") }}" alt="img">
						<h2>Oops! Page not found.</h2>
						<p> The page you are looking for is not available or doesn’t belong to this website! </p>
						<a class="button-1" href="{{ route('home.index') }}"><i class="far fa-share-square"></i> Go To Home </a>
					</div>
				</div>
			</div>
		</div>
	</div>
@endsection
