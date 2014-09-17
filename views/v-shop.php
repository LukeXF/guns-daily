<!-- Page Content -->
<div class="container" style="margin-top:30px;">

		<div class="row">

				<div class="col-md-3">
						<p class="lead">Gunsdaily Main Store</p>
						<div class="list-group">
								<a href="#" class="list-group-item active">Accessories</a>
								<a href="#" class="list-group-item">Apparel</a>
						</div>
						<p class="lead">Gundsdaily Clothing</p>
						<div class="list-group">
								<a href="#" class="list-group-item">T-Shirts</a>
						</div>
				</div>

				<div class="col-md-9">
						<div class="row">

								<?php
										$userdb = DB_USER;
										$passdb = DB_PASS;
										$hostdb = DB_HOST;
										$namedb= DB_NAME;

										function limit_desc($text, $limit) {
											if (str_word_count($text, 0) > $limit) {
													$words = str_word_count($text, 2);
													$pos = array_keys($words);
													$text = substr($text, 0, $pos[$limit]) . '...';
											}
											return $text;
										}



										try {
											// Connect and create the PDO object
											$conn = new PDO("mysql:host=$hostdb; dbname=$namedb", $userdb, $passdb);
											$conn->exec("SET CHARACTER SET utf8");      // Sets encoding UTF-8

											// Define and perform the SQL SELECT query
											$sql = "SELECT * FROM `store`";
											$result = $conn->query($sql);

											// Parse returned data, and displays them
											while($row = $result->fetch(PDO::FETCH_ASSOC)) {
												echo "<div class='col-sm-4 col-lg-4 col-md-4'>";
												echo "	<div class='thumbnail'>";
												echo "		<img src='/assets/img/store/" . $row['store_id'] . ".png' style='height:150px; width:320px;' alt='Image not found'>";
												echo "		<div class='caption'>";
												echo "			<h4 class='pull-right'>$" . $row['store_price'] . "</h4>";
												echo "			<h4><a href='#'>" . limit_desc($row['store_name'], 3) . "</a>";
												echo "			</h4>";
												echo "			<p>" . limit_desc($row['store_desc'], 20) . "</p>";
												echo "		</div>";
												echo "		<div class='ratings'>";
												echo "			<p class='pull-right'>0 reviews</p>";
												echo "			<p>";
												echo "				<span class='fa fa-star-o'></span>";
												echo "				<span class='fa fa-star-o'></span>";
												echo "				<span class='fa fa-star-o'></span>";
												echo "				<span class='fa fa-star-o'></span>";
												echo "				<span class='fa fa-star-o'></span>";
												echo "			</p>";
												echo "		</div>";
												echo "	</div>";
												echo "</div>";
											}

											$conn = null;        // Disconnect
										}
										catch(PDOException $e) {
											echo $e->getMessage();
										}
								?>
								<div class="col-sm-4 col-lg-4 col-md-4">
										<h4><a href="#">Have a suggestion for us?</a>
										</h4>
										<p>We are always looking to offer the best range of apparel and merchandise. Do you have a great idea for us? Tell us and get a discount if it goes live!</p>
										<a class="form-button green small" style="float:left !important" target="_blank" href="">Submit Suggestion</a>
								</div>

						</div>

				</div>
		</div>

</div>