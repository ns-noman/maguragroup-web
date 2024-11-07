@extends('layouts.frontend.master')
@section('content')
	@include('layouts.frontend.breadcrumb')
	<!-- End Breadcrumb Area -->
	<style>
		#value ul li {
			width: 100%;
			float: left;
			line-height: 30px;
			margin-bottom: 5px;
			font-size: 16px;
			font-weight: 500;
			display: block;
		}
	</style>
	<!-- Start About Area -->
	<section class="about-area section-padding">
		<div class="container">
			<div class="row">
				<div class="col-lg-6" style="padding-top: 80px;">
					<div class="about-img">
						<img src="{{ asset("public/frontend-assets/img/mvv.jpg") }}" alt="img" class="border border-secondary border-4">
					</div>
				</div>
				<div class="col-lg-6 align-self-center">
					<div class="about-content">
						<h4 class="sc_subtitle"><span>Mission , Vision & Values</span></h4>
						<h2 class="sc_title">Mission</h2>
						<p>Our mission is to positively impact lives and the global marketplace through excellence and innovation across a wide range of industries. From garments, food, and textiles to software development, pharmaceuticals, and chemical production, we are dedicated to offering products and services that reflect the highest standards of quality, safety, and sustainability. We strive to be a catalyst for change, creating value for our customers, employees, and shareholders by embracing technological advancements and efficient practices. By diversifying into sectors such as shipping, API technology, paper mills, brick manufacturing, and publishing, we aim to contribute to the socio-economic development of the regions we serve, fostering industrial growth and enhancing livelihoods. Our mission is to deliver not just products, but meaningful solutions that elevate the industries we operate in while supporting a sustainable and prosperous future for all.</p>
					</div>
				</div>
			</div>
			<div class="row mt-2">
				<div class="col-lg-6 align-self-center">
					<div class="about-content">
						<h2 class="sc_title">Vision</h2>
						<p>Our vision is to become a global leader and a benchmark of excellence in every industry we operate. We aspire to redefine standards in garment manufacturing, food production, technology services, pharmaceuticals, and beyond, by driving innovation, efficiency, and sustainability. We envision a future where our companies are synonymous with trust, quality, and resilience, leading the way in adopting cutting-edge technologies and practices that meet the evolving needs of the modern world. In industries such as shipping and logistics, chemical production, API tech, and publishing, we seek to push boundaries and set new trends, ensuring that we remain at the forefront of progress. Our vision is not only to excel but to pioneer change and inspire others within the industry while contributing to the well-being of the communities and markets we engage with, both locally and globally. We are dedicated to building a legacy of integrity, innovation, and social responsibility that lasts for generations to come.</p>
					</div>
				</div>
				<div class="col-lg-6">
					<div class="about-content" id="value">
						<h2 class="sc_title">Values</h2>
						<ul>
							<li><strong>Integrity</strong>: We uphold honesty, transparency, and fairness in all our dealings.</li>
							<li><strong>Innovation</strong>: We continuously seek creative solutions and advancements across industries.</li>
							<li><strong>Sustainability</strong>: We prioritize eco-friendly practices to ensure long-term environmental responsibility.</li>
							<li><strong>Customer-Centricity</strong>: Our focus is on delivering exceptional value and satisfaction to our customers.</li>
							<li><strong>Collaboration</strong>: We believe in teamwork and strong partnerships to achieve common goals.</li>
							<li><strong>Excellence</strong>: We pursue the highest quality and performance in everything we do.</li>
							<li><strong>Adaptability</strong>: We are agile and responsive to changes, ensuring resilience in a dynamic global market.</li>
						</ul>               
					</div>
				</div>
			</div>
		</div>
	</section>
	<!-- End About Area -->
@endsection
