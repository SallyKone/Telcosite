<!-- contact section starts here -->

			<section class="contact">
				<div class="container">
					<div class="row">
							<div class="contact-caption clearfix">
								<div class="contact-heading text-center">
									<h2>Contactez-Nous</h2>
								</div>
								<!-- @if(session('success')) 
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
								{{-- ====================================================================================== --}} -->
								<div class="col-md-5 contact-info text-left">
									<h3>Contact</h3>
									<div class="info-detail">
										<ul><li><i class="fa fa-calendar"></i><span>Lundi - Vendredi:</span> 8h30 à 17h30</li></ul>
										<ul><li><i class="fa fa-map-marker"></i><span>Adresse:</span>Cocody, Riviera Bonoumin,imble de la phcie st Moise</li>
										</ul>
										<ul><li><i class="fa fa-phone"></i><span>Téléphone:</span> (+225) 79 37
										66 37</li></ul>
										<ul><li><i class="fa fa-fax"></i><span>Fixe:</span> (+225) 22 46 72 66</li></ul>
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
								<textarea  name="msg" id="message" cols="30" rows="10" placeholder="Message"></textarea required>
								<input class="submit-btn" type="submit" value="Envoyer">
									</form>
					
								</div>

							</div>
					</div>
				</div>

			</section><!-- end of contact section -->



