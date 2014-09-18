<div class="container">
	<div class="row" style="margin-top:50px;">

		<div class="col-md-2" style="padding-top:20px;">
			<div class="avatar">
				<img class="avatar" src="<?php echo $grav_url; ?>"><br>
				<a class="logout" href="account.php?logout">Logout</a>
			</div>
		</div>

		<div class="col-md-5">
			<div class="form-box">
					<h3><i class="fa fa-shopping-cart"></i> <b>3</b> products are in your cart.</h3>
					<h5><a href="t">View your cart now</a></h5>
					<h3><i class="fa fa-paper-plane"></i> <b>2</b> products are on the way to you.</h3>
					<h5><a href="t">Track your orders</a></h5>
			</div>
		</div>

		<div class="col-md-5">
			<div class="form-box">
					<h3><i class="fa fa-pencil"></i> <b>3</b> products awaiting your review</h3>
					<h5><a href="t">Write your opinion now</a></h5>
					<h3><i class="fa fa-warning"></i> <b>2</b> issues that need addressing</h3>
					<h5><a href="t">Address issues at hand</a></h5>
			</div>
		</div>

	</div>
	<hr>
	<div class="row">
		<h3>Your Details</h3>
		<div class="col-md-3">
			<p class="form">
				<label class="et_pb_contact_form_label">First Name</label>
				<input type="text" class="input et_pb_contact_name" readonly=readonly placeholder="<?php echo $_SESSION['user_name']; ?>" name="et_pb_contact_name">
			</p>
		</div>
		<div class="col-md-3">
			<p class="form">
				<label class="et_pb_contact_form_label">Last Name</label>
				<input type="text" class="input et_pb_contact_name" readonly=readonly placeholder="coming soon" name="et_pb_contact_name">
			</p>
		</div>
		<div class="col-md-5">
			<p class="form">
				<label class="et_pb_contact_form_label">Email Address</label>
				<input type="text" class="input et_pb_contact_email" readonly=readonly value="<?php echo $_SESSION['user_email'];?>" name="et_pb_contact_email">
			</p>
		</div>

	</div>
	<div class="row" style="margin-top:30px;">
		<div class="col-md-4">
			<p class="form">
				<label class="et_pb_contact_form_label">Account Type</label>
				<input type="text" class="input et_pb_contact_name" readonly=readonly placeholder="Business Account" name="et_pb_contact_name">
			</p>
		</div>
		<div class="col-md-4">
			<p class="form">
				<label class="et_pb_contact_form_label">Date Registered</label>
				<input type="text" class="input et_pb_contact_name" readonly=readonly placeholder="coming soon" name="et_pb_contact_name">
			</p>
		</div>

	</div>

</div>