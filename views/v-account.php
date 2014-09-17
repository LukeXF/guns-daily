<div class="container">
	<div class="row" style="margin-top:50px;">
		<div class="col-md-3" style="padding-top:20px;">
			<div class="avatar">
				<img class="img-circle" src="https://minotar.net/avatar/<?php echo $_SESSION['user_name']; ?>/96">
				<h3><?php echo $_SESSION['user_name']; ?></h3>
			</div>
		</div>

		<div class="col-md-3">
			<div class="form-box">
				<form>
					<h3>Your account is...</h3>
					<button class="btn <?php echo $VerifiedBoxDisplay[0]; ?> btn-block login"></button>
				</form>
				<br><a href="myaccount.php?logout">Logout</a>
			</div>
		</div>

		<div class="col-md-3 greyinfo">
			<h4 class="left">Your Email</h4>
			<h3><?php echo $_SESSION['user_email'];?></h3>
			<h4 class="left">Your UUID</h4>
			<h3><?php echo $_SESSION['user_uuid'];?></h3>
		</div>

		<div class="col-md-3">
			<div class="form-box">
				<a href=""><button class="btn btn-primary btn-block login" type="submit"  name="login" value="Login">Contact Support</button></a>
				<a href=""><button class="btn btn-primary btn-block login" type="submit"  name="login" value="Login">Abuse System</button></a>
				<a href="account.php?logout"><button class="btn btn-danger btn-block login" type="submit"  name="login" value="Login">Logout</button></a>
			</div>
		</div>
	</div>

	<div class="row">
		<h2 class="greystuff">Content</h2>
		<div class="col-md-3 greyinfo center">
			<h3 class="greystuff">Statistics</h3>

				<h4 class="left">Playing Since</h4>
				<h3 class="right">3 months ago</h3>
				
				<h4 class="left">Playing Time</h4>
				<h3 class="right">214 hours</h3>
				
				<h4 class="left">Total Deaths</h4>
				<h3 class="right">949 deaths</h3>
				
				<h4 class="left">Total Kills</h4>
				<h3 class="right">1,913 kills</h3>
		</div>

		<div class="col-md-3">
			<h3 class="greystuff">Infractions</h3>
			<?php  echo $user_id . "<br>" . $_SESSION['user_uuid'] . "<br>" . $_SESSION['user_get_uuid'] ?>
		</div>

		<div class="col-md-3">
			<h3 class="greystuff">Messages</h3>
		</div>

		<div class="col-md-3">
			<h3 class="greystuff">Forum Posts</h3>
		</div>
	</div>

</div>