@extends('layouts.frontend.master')
@section('content')
	<section class="section-padding services-details section-bg">
		<div class="container">
			<div class="row">
				@foreach ($data['services'] as $key => $service)
					@if($key%2==0)
						<div class="col-lg-{{ $service['image']? '6' : '12' }} align-self-center mb-30">
							@if($key == 0)
								<h4 class="sc_subtitle"><span> {{ $data['serviceTypeTitle'] }} </span></h4>
							@endif
							@if($service['title'])
							<h2 class="sc_title">{{ $service['title'] }}</h2>
							@endif
							<p>{!! $service['description'] !!}</p>
						</div>
						@if($service['image'])
							<div class="col-lg-6 mb-30">
								<img src="{{ asset("public/uploads/services/". $service['image']) }}" alt="services" class="border border-secondary border-3">
							</div>
						@endif
					@else
						@if($service['image'])
							<div class="col-lg-6 mb-30">
								<img src="{{ asset("public/uploads/services/". $service['image']) }}" alt="services" class="border border-secondary border-3">
							</div>
						@endif
						<div class="col-lg-{{ $service['image']? '6' : '12' }} align-self-center mb-30">
							@if($key == 0)
								<h4 class="sc_subtitle"><span> {{ $data['serviceTypeTitle'] }} </span></h4>
							@endif
							@if($service['title'])
							<h2 class="sc_title">{{ $service['title'] }}</h2>
							@endif
							<p>{!! $service['description'] !!}</p>
						</div>
					@endif
				@endforeach
		</div>
	</section>
@endsection
