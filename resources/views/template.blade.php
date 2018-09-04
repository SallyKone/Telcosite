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
	<script async defer src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBJzgyR3Un04ndSCrm3Ac1goqPxd5U_HQw&callback=initMap" type="text/javascript"></script>
</head>

<body>
	
@include('partials._menu')
@yield('content')

	<footer class="footer clearfix">

		<section class="client text-center" id="client">
		<div class="container">
			<div class="row">
		
				 <h2>Nos clients</h2>


				<div class="panel-body">
	 			<marquee DIRECTION="right" style="background:url(ImgMarquee/Canigou.jpg); color:#B20;">
                    <img class="img1" src="img/service1.png">
	 					<img class="img1" src="img/service2.png">
	 					<img class="img1" src="img/service3.png">
	 					<img class="img1" src="img/service4.png">
	 					<img class="img1" src="img/service5.png">
	 					<img class="img1" src="img/service6.png">
	 					<!-- <img class="img1" src="img/ARTCI.png"> -->
            </marquee>
			</div>
		</div>
		</section>
			<div class="container" id="monfooters">
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
		#conteneur{
			
			height: 900px;
			width: 100%;
			
		}
		.img1 {

			padding-right: 15px;
		}
	</style>
<!-- script tags
	============================================================= -->
	<script src="{{URL::asset('js/jquery-2.1.1.js')}}"></script>
	<!-- <script src="http://maps.google.com/maps/api/js?sensor=true"></script> -->
	<script>
	
			function initMap() {
			
			//ICI uluru represente le point ou sera placer le markeur sur la carte google maps , elle sera aussi centrer a cet endroit sur la carte.
			//La variable "lat" represente la latitude sur le globe et "lng" la longitude
			var uluru = {lat: 5.378038, lng: -3.968965};
			
			//Tu remarqueras bien que le string passé a la fonction getElementById() est l'id qu'on a definit en haut.
			var map = new google.maps.Map(document.getElementById('conteneur'), {
			  zoom: 16,//la valeur de "zoom" represente le zoom qu'aura la google maps sur globe.
			  center: uluru //Tu specifie ici a Google maps que tu veux que ta carte soit centrer a cettre position lors de l'initialisation
			});
			
			
			//C'est avec ce objet que tu pourra crée un marqueur sur la carte google maps.
			var marker = new google.maps.Marker({
			  position: uluru,//position du marqueur sur la carte
			  map: map,//l'objet google maps
			  // icon : "https://image.ibb.co/h3f688/position.png"//l'icon du markeur , l'icon doit être sur internet a une url donné.
			});
		  }
		  
		  initMap(); 
	
	</script>
	<script src="{{URL::asset('js/gmaps.js')}}"></script>
	<script src="{{URL::asset('js/smoothscroll.js')}}"></script>
	<script src="{{URL::asset('js/bootstrap.min.js')}}"></script>
	<script src="{{URL::asset('js/custom.js')}}"></script>
</body>
<!-- footer starts here -->
</html>

