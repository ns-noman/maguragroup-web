@extends('layouts.frontend.master')
@section('content')
	@include('layouts.frontend.breadcrumb')
	<section class="section-padding">
		<style>
			.row>*{padding-left: 2.5px;padding-right: 2.5px;}
		</style>
		<div class="container">
			<div class="row">
				@foreach($data['products'] as $key => $product)
					<div class="col-lg-3 col-md-4 mb-2">
						<div class="product-item">
							<div class="thumbnail">
								<a href="product-details.html">
									<img style="height: 255.75px;" src="{{ asset("public/uploads/products/". $product['image']) }}" alt="img">
								</a>
								<div class="product-overly">
									<ul>
										<li><a href="product-details.html" title="Views:2021"><i class="bi bi-eye"></i></a></li>
									</ul>
								</div>
							</div>
							<div class="content">
								<h2 class="title"><a href="product-details.html">{{ $product['title'] }}</a></h2>
							</div>
						</div>
					</div>
				@endforeach
				<!-- Pagination -->
				<div class="row mt-10 mb-30 text-center">
					<div class="col-lg-12">
						<div class="bhouse_pagination">
							<ul>
								<li><a href="#"><i class="fas fa-angle-left"></i></a>
								</li>
								<li><a href="#">1</a>
								</li>
								<li><span>2</span>
								</li>
								<li><a href="#">3</a>
								</li>
								<li><a href="#">4</a>
								</li>
								<li><a href="#"><i class="fas fa-angle-right"></i></a>
								</li>
							</ul>
						</div>
					</div>
				</div>
			</div>
	</section>
@endsection
