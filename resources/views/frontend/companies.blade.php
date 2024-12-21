@extends('layouts.frontend.master')
@section('content')
	<section class="about-area section-bg p-4">
		<div class="container">
			<div class="row">
				<div class="col-lg-12 text-center">
					<div class="about-content">
						<h4 class="sc_subtitle"><span>Our Companies</span></h4>
					</div>
				</div>
			</div>

			<style>
				.list-group img {
					height: 50px;
					width: 50px;
					/* object-fit: cover; */
					border-radius: 5px;
				}

				.list-group-item, .list-group-item:first-child, .list-group-item:last-child {
					border: none;
					border-radius: 10px;
					transition: transform 0.3s, box-shadow 0.3s, background-color 1s;
					background-color: #F8D6E6;
					box-shadow: 4px 4px 8px rgba(0, 0, 0, 0.7);
				}
				h3{
				    	font-family: 'Times New Roman', Times, serif;
				    	text-align: left;
				}

				/* Hover effect for list items */
				.list-group-item:hover {
					transform: translateY(-5px);
					box-shadow: 0 8px 15px rgba(0, 0, 0, 0.2); 
					background-color: #28a745 !important; /* Green hover color */
					color: #fff !important; /* Ensure text remains white on hover */
				}

				.list-group-item h3 {
					font-size: 20px;
					font-weight: 700;
					margin: 0;
					text-transform: uppercase; /* Make the text uppercase */
				}

				.list-group-item a {
					color: inherit; /* Ensure link color is inherited */
					text-transform: uppercase; /* Make the link text uppercase */
				}
			</style>

			<div class="row mt-3">
				@foreach($data['companies'] as $key => $company)
					@php
						$target = 'target="_blank"';
						if (!$company['site_link']) {
							$company['site_link'] = 'javascript:void(0)';
							$target = '';
						}
					@endphp
					@if($key == 0 || $key == ceil(count($data['companies']) / 2))
						<div class="col-md-6">
							<ul class="list-group">
					@endif
								<li class="list-group-item text-white d-flex align-items-center shadow-sm p-3 mb-3">
									<a {{ $target }} href="{{ $company['site_link'] }}" class="d-flex align-items-center text-decoration-none text-white">
										<img src="{{ asset("public/uploads/companies/" . $company['logo']) }}" alt="{{ $company['alt'] }}" class="me-3">
										<h3>{{ $company['title'] }}</h3>
									</a>
								</li>
					@if($key == ceil(count($data['companies']) / 2) - 1 || $key == count($data['companies']) - 1)
							</ul>
						</div>
					@endif
				@endforeach
			</div>
		</div>
	</section>
@endsection
