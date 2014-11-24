<style type="text/css">
	/* Add spacing to the forms to make it more manageable */
	.col-md-4.form {
		padding 5px;
	}
</style>
<?php

	/*
		This PHP snippet detects if the submit button has been pressed. This is done by detecting
		the post data submit button. If the post data has been submitted then submit all changes
		and previous description array to config.php and export the array called $settings
		to that file.
	*/
	if (isset($_POST['submit'])) {

		// Sets the maximum amount of descriptions to be displayed to 20 (hard coded).
		// This is set to prevent massive files and crazy illiterate 
		$settings['admin config']['descriptions to show'] = 20;
		$putPostToSettings = $settings['admin config']['descriptions to show'];

		// Set the count that will be illiterate in the while loop below
		$whilecount = 0; 

		// While the counter is less than the max amount set the post data to the array that will be
		// Sent to the config file.
		while ($whilecount < $putPostToSettings) {
			$settings['desc'][$whilecount]['title'] = $_POST['desc'][$whilecount]['title'];
			$settings['desc'][$whilecount]['desc'] = $_POST['desc'][$whilecount]['desc'];
			$whilecount++;
		}
		// Export all the data inside the $settings array to the config file
		file_put_contents('config.php', '<?php $settings = ' . var_export($settings, true) . '; ?>');
	}
?>

<br>

<div class="container">
	<div class="row" style="margin:20px;">
		<div class="col-md-4">
			<h1 class="admin-title left">Descriptions</h1>
		</div>
		<div class="col-md-8 right">
			<p>You may have maximum of 20 different description fields. 
				Write out each description here and you can apply then to
				a page once you hit the save button below and return back
				to the dashboard.
			</p>
		</div>			
		<hr>
		<div class="col-md-12">	
			<form action="" class="form" method="post">	
				<div class="row">
					<div class="col-md-6">	
						<br>The buttons on the right do not effect viewing on the main site.
						<?php 
							/* 
								This PHP script is used to count and display how many saved descriptions
								are current in use on the site.
							*/

							// Counts the maximum amount of descriptions
							$countdesc = count($settings['desc']);
							// Sets the variable to illiterate 
							$whilecount = 0; 
							// This is the varible to illiterate only the descriptions that are not empty.
							$countNotEmpty = 0; 

							// While less than or equal to the max amount of description illiterate through the content
							while ( $whilecount <= $countdesc) {
								// If the title of description is not empty then illiterate countNotEmpty
								if (!empty($settings['desc'][$whilecount]['title'])) {
									// Un comment the line below to enable debugging
									// echo "<br>Description " . $whilecount . " is not empty.";
									$countNotEmpty++;
								}
								// Illiterate the counter
								$whilecount++;
							}

							// output the total saved descriptions
							echo "<br>You currently have saved " . $countNotEmpty . "/20 of the available description slots.";
						?>
						<!-- The max number is set by PHP that is picked up by JS once the page has loaded -->
						<div class="max_number" style="display:none"><?php echo $countNotEmpty; ?></div>
					</div>
					<div class="col-md-6">
						<button name="submit" class="form-button red" style="margin-left: 10px;" type="submit">Save</button>	
						<p>							
							<span class="form-button red readonly add"><i class="fa fa-plus"></i></span>	
							<input type="text" readonly="true" value="<?php echo $countNotEmpty; ?>" class="qty form-button red readonly"/>
							<span class="form-button red readonly minus"><i class="fa fa-minus"></i></span>	
						</p>
						
					</div>
				</div>
				<div class="row">
				<?php
					/*
						This PHP snippet below physically outputs each of the descriptions into the page with the HTML structuring						
					*/
					// Sets the variable to be illiterate in the while loop below
					$displayDesc = 0;
					// while the counter is less than the max amount of descriptions then output the descriptions forms.
					while ( $displayDesc < $countdesc) {
						echo "
							<div class='col-md-4 form displaydiv'>
								<h3>Description " . ($displayDesc + 1) . "</h3>
								<input name='desc[" . $displayDesc . "][title]' value='" . $settings['desc'][$displayDesc]['title'] . "' type='text' /><br><br>
								<textarea name='desc[" . $displayDesc . "][desc]' type='text' style='height:300px' />" . $settings['desc'][$displayDesc]['desc'] . "</textarea>
							</div>
							
						";
						// Add one to the counter
						$displayDesc++;
					}
				?>
				</div>

			</form>
		</div>
	</div>
	<?php 
		// Uncomment out to display the debug arrays. $settings is the file data and $post is the data sent to the server.
		/*
			echo "<pre><h3>FILE:<-/h3>";
			print_r($settings);
			echo "</pre>";
			echo "<pre><h3>POST:</h3>";
			print_r($_POST);
			echo "</pre>";
		*/ 
	 ?>
</div>
<script type="text/javascript">
	/*
		The following Javascript/jQuery code hides all the descriptions by default
		Then grabs the total amount not empty descriptions as a number and sets the
		to display that.

		The buttons plus and minus will show and hide each of the descriptions but
		they have no effect on the physical file as one to many clicks could cause
		important data to be lost.

		This way the page is dynamic and has the back end system working in balance
		with each other.
	*/

	$(function () {
		// Sets the max number
		var max_number = parseInt($(this).find('.max_number').text(), 10);


		// Automatically hide all the thumbnails
		$('.displaydiv').hide();
		// Shows just one
		$('.displaydiv:lt(' + (max_number) + ')').show(); 

		// When the add button is clicked
		$('.add').on('click',function(){
			// Find the nearest value of p and set qty to equal the value in the input box
			var $qty=$(this).closest('p').find('.qty');
			// Set variable currentVal to the new value of the qty
			var currentVal = parseInt($qty.val());
			// If the current value is a number then add one.
			if (!isNaN(currentVal) && currentVal < 20 ) {
				$qty.val(currentVal + 1);
				// Return debug message
				console.log("ADDED ONE. VALUE NOW: " + (currentVal + 1));
				$('.displaydiv:lt(' + (currentVal + 1) + ')').show();
			} else {
				// Else say can't lower
				console.log("VALUE HAS REACHED MAX AMOUNT");
				$('.displaydiv:lt(' + (max_number - 1) + ')').show();     
			}

			// This should set the number of divs to display to the 
			// value of currentVal, but it does not work?

		});

		// When the minus button is clicked
		$('.minus').on('click',function(){
			$('.displaydiv').hide();
			// Find the nearest value of p and set qty to equal the value in the input box
			var $qty=$(this).closest('p').find('.qty');
			// Set variable currentVal to the new value of the qty
			var currentVal = parseInt($qty.val());
			// If the current value is more than 0 and is a number then minus one
			if (!isNaN(currentVal) && currentVal > 0) {
				$qty.val(currentVal - 1);   
				// Return debug message
				console.log("SUBTRACTED ONE. VALUE NOW: " + (currentVal - 1));
				$('.displaydiv:lt(' + (currentVal - 1) + ')').show();         
			} else {
				// Else say can't lower
				console.log("VALUE IS ALREADY 0");
				$('.thisdiv:lt(0)').show();
			}

		});
	});
</script>
