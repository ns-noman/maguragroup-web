@extends('layouts.frontend.master')
@section('content')
@php
$default = ['title'=>'Default'];
$content = $data['breadcrumb'] ?? $default;
@endphp	
{{-- <section class="breadcrumb-area" style=" padding: 30px;background-image:url({{ asset("public/frontend-assets/img/company-organogram.png") }});">
	<div class="container">
		<div class="row">
			<div class="col-lg-12" style="padding: 90px 0px 90px 0px">
			</div>
		</div>
	</div>
</section> --}}
	<style>
		#organogram ul li {
			width: 100%;
			float: left;
			line-height: 20px;
			margin-bottom: 5px;
			font-size: 14px;
			font-weight: 500;
			display: block;
			margin-left: 5px;
		}
	 </style>
	<section class="about-area section-padding section-bg">
		<div class="container">
			<div class="row">
				<div class="col-lg-12 text-center">
					<h4 class="sc_subtitle"><span>Company Organogram</span></h4>
				</div>
			</div>
			<div class="row d-flex justify-content-center">
				<div class="col-lg-8">
					<div class="about-img">
						<img src="{{ asset("public/frontend-assets/img/bdg-organogram.jpg") }}" alt="img" class="border border-secondary border-5">
					</div>
				</div>
				{{-- <div class="col-lg-6 align-self-center">
					<div class="about-content" id="organogram">
						<h4 class="sc_subtitle"><span>Company Organogram</span></h4>
						<h2 class="sc_title">Company Organogram.</h2>
						<p>
							<h4>Top Leadership:</h4>
							<ul class="list-group list-group-flush">
								<li class="list-group-item"><strong>Chairman:</strong> Oversees strategic decisions and governance.</li>
								<li class="list-group-item"><strong>Vice Chairman & Group Director:</strong> Assist in high-level decisions, guiding overall direction.</li>
							</ul>
							<h4>Executive Management:</h4>
							<ul class="list-group list-group-flush">
								<li class="list-group-item"><strong>Director-1 & Director-2:</strong> Support leadership and oversee key departments.</li>
								<li class="list-group-item"><strong>Executive Chairman/CEO:</strong> Manages daily operations and ensures strategic goals are met.</li>
							</ul>
						
							<h4>Core Directors:</h4>
							<ul class="list-group list-group-flush">
								<li class="list-group-item"><strong>IT & MIS Director:</strong> Manages technology and information systems.</li>
								<li class="list-group-item"><strong>Audit & Implementation Director:</strong> Ensures audit processes and improvement strategies.</li>
							</ul>
							<h4>Departmental Directors:</h4>
							<ul class="list-unstyled mt-2">
								<li class="mb-1">• HR, Admin & Compliance</li>
								<li class="mb-1">• Finance & Investment Management</li>
								<li class="mb-1">• Cost, Budget & Accounts</li>
								<li class="mb-1">• Law & Company Affairs</li>
								<li class="mb-1">• Planning & Implementation</li>
								<li class="mb-1">• Production, Research & Engineering</li>
								<li class="mb-1">• Textiles & Garments</li>
								<li class="mb-1">• Commercial</li>
								<li class="mb-1">• Civil Engineering & Infrastructure</li>
								<li class="mb-1">• Land Management</li>
								<li class="mb-1">• Public Relations, Media & Entertainment</li>
							</ul>
												
						</p>
					</div>
				</div> --}}
			</div>
		</div>
	</section>
@endsection
