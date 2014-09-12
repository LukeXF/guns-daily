<?php include './assets/header.php'; ?>
<?php include './assets/navbar.php'; ?>

	<!-- ////////////////////////////////////
		HOMEPAGE HEADER
	///////////////////////////////////// -->


	<?php require './assets/slider.php'; ?>

	<div class="container">
		<h1 align="center">Login</h1>
		<form style="margin-bottom:50px;" method="post" action="http://dev.gunsdaily.net/login">


		<div class="row">
			<div class="col-md-4 col-md-offset-4">	

				<div class="row">
					<div class="col-md-12">
						<p class="form">
							<label class="et_pb_contact_form_label">Email Address</label>
							<input type="email" placeholder="Email Address" name="et_pb_contact_email">
						</p>
					</div>
					<div class="col-md-12" style="margin-top:20px;">			
						<p class="form">
							<label class="et_pb_contact_form_label">Password</label>
							<input type="password" placeholder="password" name="et_pb_contact_name">
						</p>
					</div>

				</div>
				<div class="row" style="margin-top:20px;">
					<div class="col-md-12">
						<input style="display: inline" type="submit" value="Login" class="form-button green">
						<input type="button" style="display: inline; margin-right: 10px" name="complete1" class="form-button red" value="Register" onClick="parent.location='register'">
					</div>


				</div>

				<input type="hidden" id="_wpnonce-et-pb-contact-form-submitted" name="_wpnonce-et-pb-contact-form-submitted" value="22e23944ed"><input type="hidden" name="_wp_http_referer" value="/contact/">


			</div>
		</div>


		</form>
	</div>



	<?php require './assets/footer.php'; ?>