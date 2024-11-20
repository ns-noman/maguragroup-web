@extends('layouts.frontend.master')
@section('content')
	@include('layouts.frontend.breadcrumb')
	<section class="about-area section-padding">
		<div class="container">
			<div class="row">
				<div class="col-lg-12">
					<h2>Result</h2>
                    <gcse:search></gcse:search>
				</div>
			</div>
		</div>
	</section>
@endsection
@section('script')
<script>
    (function() {
      var cx = '17a95b1c11baa4439';
      var gcse = document.createElement('script');
      gcse.type = 'text/javascript';
      gcse.async = true;
      gcse.src = 'https://cse.google.com/cse.js?cx=' + cx;
      var s = document.getElementsByTagName('script')[0];
      s.parentNode.insertBefore(gcse, s);
    })();
  </script>
@endsection

