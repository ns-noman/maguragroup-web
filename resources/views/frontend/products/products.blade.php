@extends('layouts.frontend.master')
@section('content')
	@include('layouts.frontend.breadcrumb')
	<section class="section-padding">
		<div class="container">
			<div class="row">
				@foreach($data['products'] as $key => $product)
					<div class="col-lg-4 col-md-6 mb-30">
						<div class="product-item">
							<div class="thumbnail">
								<a href="{{ route('home.index', ['products', $product['id']]) }}">
									<img src="{{ asset("public/uploads/products/". $product['image']) }}" alt="img">
								</a>
								<div class="product-overly">
									<ul>
										<li><a href="{{ route('home.index', ['products', $product['id']]) }}" title="Views:2021"><i class="bi bi-eye"></i></a></li>
									</ul>
								</div>
							</div>
							<div class="content">
								<h2 class="title"><a href="{{ route('home.index', ['products', $product['id']]) }}">{{ $product['title'] }}</a></h2>
							</div>
						</div>
					</div>
				@endforeach
				{{-- <div class="row mt-10 mb-30 text-center">
					<div class="col-lg-12">
						<div class="bhouse_pagination">
							<ul>
								<li><a href="#"><i class="fas fa-angle-left"></i></a>
								</li>
								<li><a class="active" href="#">1</a>
								</li>
								<li><span>2</span></li>
								<li><a href="#">3</a>
								</li>
								<li><a href="#">4</a>
								</li>
								<li><a href="#"><i class="fas fa-angle-right"></i></a>
								</li>
							</ul>
						</div>
					</div>
				</div> --}}
			</div>
	</section>
@endsection
