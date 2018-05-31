<!-- contact section starts here -->
			<section class="contact">
				<div class="container">
					<div class="row">
							<div class="contact-caption clearfix">
								<div class="contact-heading text-center">
									<h2>Contactez-Nous</h2>
								</div>
								@if(session('success')) 
								{{-- ====================================================================================== --}}
								
									<div class="alert alert-success"> 
										<button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button> 
										{{ session('success') }} 
									</div> 
								@endif 
								@if(session('error')) 
									<div class="alert alert-danger"> 
										<button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button> 
										{{ session('error') }} 
									</div> 
								@endif 
								{{-- ====================================================================================== --}}
								<div class="col-md-5 contact-info text-left">
									<h3>Contact</h3>
									<div class="info-detail">
										<ul><li><i class="fa fa-calendar"></i><span>Lundi - Vendredi:</span> 8h30 à 17h30</li></ul>
										<ul><li><i class="fa fa-map-marker"></i><span>Adresse:</span>Cocody, Riviera Bonoumin,imble de la phcie st Moise</li>
										</ul>
										<ul><li><i class="fa fa-phone"></i><span>Téléphone:</span> (+225) 79 37
										66 37</li></ul>
										<ul><li><i class="fa fa-fax"></i><span>Fixe:</span> (+225) 22 44 34 24</li></ul>
										<ul><li><i class="fa fa-envelope"></i><span>Email:</span> youin.telco@gmail.com</li></ul>
									</div>
								</div>


								<div class="col-md-6 col-md-offset-1 contact-form">
									<h3>laissez-nous un message</h3>


									<form method="POST" action="{{ route('saveUtilisateurs') }}" class="form">
										{{csrf_field()}}
								<input  name="nom" type="text" placeholder="Nom" required>
								<input name="email" type="email" placeholder="Email" required>
								<input name="phone" type="text" placeholder="Téléphone:" required>
								<textarea  name="message" id="message" cols="30" rows="10" placeholder="Message"></textarea required>
								<input class="submit-btn" type="submit" value="Envoyer">
									</form>
					
								</div>

<div id="customPopup">
     <h3>Titre du popup</h3>
     <p>Message du popup !</p>
     <p> </p>
     <input type="button" value="Ok" onclick="hidePopup();">
</div>

							</div>
					</div>
				</div>

<style type="text/css">
	 #customPopup 
{
     position: fixed;
     display: none;
     left: 50%;
     top: 50%;
     z-index: 2000;
     padding: 20px;
     width: 560px;
     background-color: #EEEEEE;
     font-size: 12px;
     line-height: 16px;
     color: #202020;
     border : 3px outset #555555;
}

</style>
			</section><!-- end of contact section -->



