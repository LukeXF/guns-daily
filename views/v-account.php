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
					<h3><i class="fa fa-shopping-cart"></i> <b>0</b> products are in your cart.</h3>
					<h5><a href="t">View your cart now</a></h5>
					<h3><i class="fa fa-paper-plane"></i> <b>0</b> products are on the way to you.</h3>
					<h5><a href="t">Track your orders</a></h5>
			</div>
		</div>

		<div class="col-md-5">
			<div class="form-box">
					<h3><i class="fa fa-pencil"></i> <b>0</b> products awaiting your review</h3>
					<h5><a href="t">Write your opinion now</a></h5>
					<h3><i class="fa fa-warning"></i> <b>0</b> issues that need addressing</h3>
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
				<input type="text" class="input et_pb_contact_name" readonly=readonly placeholder="<?php echo $_SESSION['user_last'];?>" name="et_pb_contact_name">
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


	<hr>


	<div class="row">
		<h3>Your Orders</h3>
		<!-- <div class="col-md-6">
			<pre>
				<?php // print_r($orderArray); ?>
			</pre>
		</div> -->
		<!--<div class="col-md-6">
			<pre>
				<?php // print_r($productsInArray); ?>
			</pre>
		</div>-->
		<!--<div class="col-md-6">
			<pre>
				<?php // print_r($finalOrderList);

				$amountOfProducts = 2;
				$height = ($amountOfProducts * 130) + 74 . "px";
				?>
			</pre>
		</div>-->

		<div class="col-md-12">
			<?php
					$arr = array("one", "two", "three");
					reset($finalOrderList);


					/*while (list(, $value) = each($finalOrderList)) {
					    echo "Value: $value<br />\n";
					}*/

					// Counts finalOrderList array to stop the while loop going on forever if an error occurs.
					$countOrders = count($finalOrderList);
					$countProductOrders2 = count($finalOrderList['Order 2']['ProductInfo']);
					// Sets the counter to 1 for use in the while loop
					$displayCounter = 1; 

					while ($displayCounter <= $countOrders) {
						$o_order_id       = $finalOrderList['Order ' . $displayCounter]['OrderInfo']['order_id'];
						$o_date           = $finalOrderList['Order ' . $displayCounter]['OrderInfo']['date'];
						$o_status         = $finalOrderList['Order ' . $displayCounter]['OrderInfo']['status'];
						$o_user_comments  = $finalOrderList['Order ' . $displayCounter]['OrderInfo']['user_comments'];
						$o_admin_comments = $finalOrderList['Order ' . $displayCounter]['OrderInfo']['admin_comments'];
						$o_admin_comments = $finalOrderList['Order ' . $displayCounter]['OrderInfo']['admin_comments'];

						echo "<div class='col-md-9'>";
						echo "<div class='thumbnail account-overview' style='min-height:" . $height . "'>";
						echo "<div class='title row'>";
						echo "<div class='col-md-4 order-title'><b>Latest Order " . $displayCounter . "</b> <i>OrderID #" . $o_order_id . "</i> </div>";
						echo "<div class='col-md-4 col-md-offset-4 title-right'>Two Items - <b>$14.99</b></div>";
						echo "</div>";

						// Gets the product count for that order
						$countProductOrders = count($finalOrderList['Order ' . $displayCounter]['ProductInfo']);
						$displayProductCounter = 0;

						while ($displayProductCounter < $countProductOrders) { 

							echo "<div class='row force-padding'>";
							echo "<div class='col-md-3'>";
							echo "		<img src='/assets/img/store/" . $finalOrderList['Order ' . $displayCounter]['ProductInfo']['Product ' . $displayProductCounter]['Product Number'] . ".png' style='height:75px; width:160px;' alt='Image not found' />";
							echo "	</div>";

							echo "<div class='col-md-9'>";
							echo "<div class='caption'>";
							$p_number   = $finalOrderList['Order ' . $displayCounter]['ProductInfo']['Product ' . $displayProductCounter]['Order_id'];
							$p_quantity = $finalOrderList['Order ' . $displayCounter]['ProductInfo']['Product ' . $displayProductCounter]['Quantity'];
							$p_price    = $finalOrderList['Order ' . $displayCounter]['ProductInfo']['Product ' . $displayProductCounter]['Price'];
							echo "<h4 class='pull-right'>" . $p_quantity . " ordered. <b>$" . $p_price . "</b></h4>";
							echo "<h4><a href='#'>TopHat</a></h4>";
							echo "<p>An authentic American made band. Since the 1990s, debates regarding firearm";
							echo "availability and gun violence in the U.S. have ...</p>";
							echo "</div>";
							echo "</div>";
							echo "</div>";

							echo "<hr>";
							$displayProductCounter++;

						}
						
								
					echo "</div>";
					echo "</div>";

						echo "<div class='col-md-3'>";
						echo "<div class='thumbnail account-overview account-right' style='min-height:" . $height . "'>";
						echo "<div class='title row'>";
						echo "<div class='col-md-12 title-right'>Placed <b>September 23rd</b></div>";
						echo "</div>";
						echo "<div class='row force-padding'>";
						echo "<p class='form'>";
						echo "<label class='et_pb_contact_form_label'>Status</label>";
						echo "<input type='text' class='input et_pb_contact_name' readonly='readonly' placeholder='Dispached - September 25th' name='et_pb_contact_name'>";
						echo "</p>";
						echo "<p class='form'>";
						echo "<label class='et_pb_contact_form_label'>User Comments</label>";
						echo "<input type='text' class='input et_pb_contact_name' readonly='readonly' placeholder='Me loves luke' name='et_pb_contact_name'>";
						echo "</p>";
						echo "<p class='form'>";
						echo "<label class='et_pb_contact_form_label'>Admin Comments</label>";
						echo "<input type='text' class='input et_pb_contact_name' readonly='readonly' placeholder='No my name is ben' name='et_pb_contact_name'>";
						echo "</p>";
						echo "</div>";
						echo "</div>";
						echo "</div>";

						
						$displayCounter++;
					}
					
				?>


	</div>



</div>