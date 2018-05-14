<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>{{config('app.name')}}</title>
	<link rel="stylesheet" href="{{URL::asset('css/font-awesome.min.css')}}">
	<link rel="stylesheet" href="{{URL::asset('css/bootstrap.min.css')}}">
	<link rel="stylesheet" href="{{URL::asset('css/style.css')}}">
	<link href='http://fonts.googleapis.com/css?family=Open+Sans:600italic,400,800,700,300' rel='stylesheet' type='text/css'>
	<link href='http://fonts.googleapis.com/css?family=BenchNine:300,400,700' rel='stylesheet' type='text/css'>
</head>

<body>

	
@include('partials._menu')
@yield('content')



<!-- script tags
	============================================================= -->
	<script src="{{URL::asset('js/jquery-2.1.1.js')}}"></script>
	<script src="http://maps.google.com/maps/api/js?sensor=true"></script>
	<script src="{{URL::asset('js/gmaps.js')}}"></script>
	<script src="{{URL::asset('js/smoothscroll.js')}}"></script>
	<script src="{{URL::asset('js/bootstrap.min.js')}}"></script>
	<script src="{{URL::asset('js/custom.js')}}"></script>
</body>
<!-- footer starts here -->
			<footer class="footer clearfix">

				<section class="client text-center" id="client">
				<div class="container">
					<div class="row">
				
						 <h2>Nos clients</h2>
	<!--
				<marquee DIRECTION="right">
						<div class="col-md-2 col-sm-6">
							<div class="single-client">
								<div class="single-client-img">
									<div class="client-img">
										<img class="img-responsive" src="img/service1.png" alt="">
									</div>
								</div>
								
							</div>
							<h3></h3>
						</div>

						<div class="col-md-2 col-sm-6">
							<div class="single-client">
								<div class="single-client-img-img">
									<div class="client-img">
										<img class="img-responsive" src="img/service2.png" alt="">
									</div>
								</div>
								
							</div>
						</div>

						<div class="col-md-2 col-sm-6">
							<div class="single-client">
								<div class="single-client-img">
									<div class="client-img">
										<img class="img-responsive" src="img/service3.png" alt="">
									</div>
								</div>
								
							</div>
						</div>

						<div class="col-md-2 col-sm-6">
							<div class="single-client">
								<div class="single-client-img-img">
									<div class="client-img">
										<img class="img-responsive" src="img/service4.png" alt="">
									</div>
								</div>
								
							</div>
						</div>

						<div class="col-md-2 col-sm-6">
							<div class="single-client">
								<div class="single-client-img">
									<div class="client-img">
										<img class="img-responsive" src="img/service5.png" alt="">
									</div>
								</div>
								
							</div>
						</div>

						<div class="col-md-2 col-sm-6">
							<div class="single-client">
								<div class="single-client-img">
									<div class="client-img">
										<img class="img-responsive" src="img/service6.png" alt="">
									</div>
								</div>
								
							</div>
						</div>						
						</marquee>
						-->

						<div class="panel-body">
       	 			<marquee DIRECTION="right" style="background:url(ImgMarquee/Canigou.jpg); color:#B20;">
                            <img class="img1" src="img/service1.png">
       	 					<img class="img1" src="img/service2.png">
       	 					<img class="img1" src="img/service3.png">
       	 					<img class="img1" src="img/service4.png">
       	 					<img class="img1" src="img/service5.png">
       	 					<img class="img1" src="img/service6.png">
       	 					<img class="img1" src="img/ARTCI.png">
                    </marquee>
					</div>
				</div>
			</section>
			<div class="container">
					<div class="row">
						<div class="col-xs-6 footer-para">
							<p><a href="http://www.telcoanniv.com/">www.telcoanniv.com</a></p>
						</div>

						<div class="col-xs-6 text-right">
							<a href="//web.facebook.com/monincroyableanniv/"><i class="fa fa-facebook"></i></a>
							<a href=""><i class="fa fa-twitter"></i></a>
							<a href=""><i class="fa fa-skype"></i></a>
						</div>
					</div>
				</div>


			<!-- end of service section -->
			</footer>

			<style type="text/css">
		

		.img1 {

			padding-right: 15px;
		}
	</style>

</html>

