@extends('layouts.frontend.master')
@section('content')
	@include('layouts.frontend.breadcrumb')
	<section class="about-area section-padding">
		<div class="container">
			<div class="row">
				<div class="col-lg-12 align-self-center text-center">
					<div class="about-content">
						<h4 class="sc_subtitle"><span>Companies</span></h4>
						<h2 class="sc_title">Our Companies</h2>
					</div>
					<style>
						.list-group img{
							height: 50px;
							width: 50px;
						}
					</style>
					<div class="row">
						@foreach($data['companies'] as $key => $company)
							@if($key==0 || ceil(count($data['companies'])/2) == $key)
								<div class="col-md-6">
									<ul class="list-group">
							@endif
										<li class="bg-info list-group-item d-flex align-items-center shadow-sm p-3 mb-3 rounded-3 hover-shadow">
											<a href="{{ $company['site_link'] }}" class="d-flex align-items-center text-decoration-none">
												<img src="{{ asset("public/uploads/companies/". $company['logo']) }}" alt="{{ $company['alt'] }}" class="rounded-circle me-3">
												<h3>{{ $company['title'] }}</h3>
											</a>
										</li>
							@if(ceil(count($data['companies'])/2-1) == $key || (count($data['companies'])-1 == $key))
									</ul>
								</div>
							@endif
						@endforeach
							</ul>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>
@endsection
