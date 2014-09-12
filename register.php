<?php include './assets/header.php'; ?>
<?php include './assets/navbar.php'; ?>

	<!-- ////////////////////////////////////
		HOMEPAGE HEADER
	///////////////////////////////////// -->


	<?php require './assets/slider.php'; ?>

	<div class="container">
		<h1 class="et_pb_contact_main_title">Register with us</h1>
		<form style="margin-bottom:50px;" method="post" action="http://gunsdaily.net/contact/">


			<div class="row">

				<div class="col-md-4">	
					<p class="form">
						<label class="et_pb_contact_form_label">First Name</label>
						<input type="text" name="first">
					</p>
				</div>

				<div class="col-md-4">	
					<p class="form">
						<label class="et_pb_contact_form_label">Last Name</label>
						<input type="text" name="last">
					</p>
				</div>

				<div class="col-md-4">
					<p class="form">
						<label class="et_pb_contact_form_label">Email Address</label>
						<input type="text" name="email">
					</p>
				</div>

			</div>
			<div class="row" style="margin-top:20px;">

				<div class="col-md-6">	
					<p class="form">
						<label class="et_pb_contact_form_label">What is this account mainly for?</label>
						<select class="form">
							<option>Customer Account - I will be using the shop</option>
							<option>Business Account - I am looking to use the advertisement scheme</option>
							<option>Joint Account - I will be using both</option>
						</select>			
					</p>
				</div>

				<div class="col-md-3">	
					<p class="form">
						<label class="et_pb_contact_form_label">Password</label>
						<input type="password" name="password">
					</p>
				</div>

				<div class="col-md-3">	
					<p class="form">
						<label class="et_pb_contact_form_label">Confirm</label>
						<input type="password" name="confirm">
					</p>
				</div>

				<div class="col-md-3 col-md-offset-9">
					<input type="submit" value="Submit" class="form-button red">
				</div>


			</div>

			<input type="hidden" id="_wpnonce-et-pb-contact-form-submitted" name="_wpnonce-et-pb-contact-form-submitted" value="22e23944ed"><input type="hidden" name="_wp_http_referer" value="/contact/">
		</form>
	</div>
	<div class="container" id="about-guns">
		<div class="row about-guns">
			<div class="col-md-6">			
				<h2>More Info</h2>
				<p><strong>If you are interested in Sponsoring us here on the website or advertising with us on our instagram or other social media head over our <a href="advertise" target="_blank">Advertise</a> page. If you just want to get ahold of us for any other matter please fill out the form to the left and we will get back to you ASAP. Usually within 24 hours.</strong></p>
			</div>
			<div class="col-md-6">		
				<h2>About Us</h2>
				<p><strong>Gunsdaily was formed on Febuary 3rd 2013, just a few months after the horrible shooting at Sandy Hook school. Our main goal back then and still, is to shine a less evil light on the topic that is guns. For many people, We are a friend business aimed at portaying guns in the right way.</strong></p>

			</div>
		</div>
	</div>




	<?php require './assets/footer.php'; ?>