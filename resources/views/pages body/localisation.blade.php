@include('layouts.header')
<!-- breadcrumb-section -->
	<div class="breadcrumb-section breadcrumb-bg">
		<div class="container">
			<div class="row">
				<div class="col-lg-8 offset-lg-2 text-center">
					<div class="breadcrumb-text">
						<p>Patriarche « KUIPOU » YOUTA Calixte</p>
						<h1>Contacter la famille</h1>
					</div>
				</div>
			</div>
		</div>
	</div>
	<!-- end breadcrumb section -->

    <!-- contact form -->
	<div class="contact-from-section mt-150 mb-150">
		<div class="container">
			<div class="row">
				<div class="col-lg-8 mb-5 mb-lg-0">
					<div class="form-title">
						<h2>Vous avez questions?</h2>
						<p>vous pouver nous laisser un message avec vaux informations en remplissan le formulaire</p>
					</div>
				 	<div id="form_status"></div>
					<div class="contact-form">
						<form type="POST" id="fruitkha-contact" onSubmit="return valid_datas( this );">
							<p>
								<input type="text" placeholder="Name" name="name" id="name">
								<input type="email" placeholder="Email" name="email" id="email">
							</p>
							<p>
								<input type="tel" placeholder="Phone" name="phone" id="phone">
								<input type="text" placeholder="Subject" name="subject" id="subject">
							</p>
							<p><textarea name="message" id="message" cols="30" rows="10" placeholder="Message"></textarea></p>
							<input type="hidden" name="token" value="FsWga4&@f6aw" />
							<p><input type="submit" value="Envoyer"></p>
						</form>
					</div>
				</div>
				<div class="col-lg-4">
					<div class="contact-form-wrap">
						<div class="contact-form-box">
							<h4><i class="fas fa-map"></i>Address</h4>
							<p>BAPA <br> quartier DJEUWANG.
						</div>
						<div class="contact-form-box">
							<h4><i class="far fa-clock"></i> Heure de l'évenement</h4>
							<p>VENDREDI: 13h00 à 22h00 <br> SAMEDI: 08h30 à 17 </p>
						</div>
						<div class="contact-form-box">
							<h4><i class="fas fa-address-book"></i> Contact</h4>
							<p>Phone: +237 699 99 76 25 <br>Phone: +237 696 13 98 51 <br>Email: familleyouta@yahoo.com</p>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	<!-- end contact form -->

	<!-- find our location -->
	<div class="find-location blue-bg">
		<div class="container">
			<div class="row">
				<div class="col-lg-12 text-center">
					<p> <i class="fas fa-map-marker-alt"></i>Location lieu du Deuil</p>
				</div>
			</div>
			<div class="row">
				<div class="col-lg-12 text-center">
					<img src="assets/img/localisation.png" alt="">
				</div>
			</div>	
			<div class="row">
				<div class="col-lg-12 text-center">
					<br><br><br><br><br><br><br><br><br><br>
				</div>			
			</div>	
		</div>
	</div>
	<!-- end find our location -->
	<div class="embed-responsive embed-responsive-21by9">
	</div>
	<!-- google map section -->
	<div class="embed-responsive embed-responsive-21by9">
		<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d63677.669087063325!2d9.7386496!3d4.0501248!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x105feb03c1dd5c37%3A0x8ef65628406314be!2s78HP%2B5F4%20Chefferie%20de%20Bapa%2C%20Bapa!5e0!3m2!1sfr!2scm!4v1670182796054!5m2!1sfr!2scm" width="600" height="450" frameborder="0" style="border:0;" allowfullscreen="" class="embed-responsive-item"></iframe>
	</div>
	<!-- end google map section -->

@include('layouts.footer')