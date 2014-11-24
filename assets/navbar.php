<div class="page-wrap">
	<div id="top-nav" class="navbar navbar-default">
		<div class="container">
			<div class="container">
				<button type="button" class="btn btn-navbar" style="visibility: hidden;" data-toggle="collapse" data-target=".nav-collapse">
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
				</button>
				<a class="navbar-brand" href="/"><img src="<?php echo $fullUrl; ?>assets/img/logo.png" alt="hi"></a>
				
				<div class="collapse navbar-collapse">
					<ul class="nav navbar-nav pull-right">
						<li class=""><a href="account">Your Account</a></li>
						<li class=""><a href="shop">Your Orders</a></li>
						<?php echo $navlogin; ?>
					</ul>
					<ul class="nav social-bar navbar-nav">
						<li class=""><a href="//instagram.com/gunsdaily1">Instagram</a></li>
						<li class=""><a href="//twitter.com/gunsdaily1">Twitter</a></li>
					</ul>
					<ul class="nav pull-right navbar-nav lar-nav">
						<?php

								// Sets the active tab
							//	if ($x == $activeTab ) {
							//		$navbar[$activeTab]["active"] = "current";
							//	}
							//	$navbar[$activeTab]["active"] = "current";

								// Generates the navbar
								foreach($navbar as $x => $x_value) {

									/* 
										if the class array in the main associative array is defined
										then echo it (to display "active" on the page you are on).
									*/
									if (!empty($x_value["active"])) {
										// set $class to echo content
										$class = $x_value["active"];
									} else {
										// else set to echo literally nothing.
										$class = "";
									}



									/* 
										if the url array in the main associative array is defined
										then echo it. This is if you need to use an external link
										that does not match the array key.
									*/
									if (!empty($x_value["url"])) {
										// set $url to echo content
										$url = $x_value["url"];
									} else {
										// else set to echo literally nothing.
										$url = $x;
									}


									// Sets the active tab
									if ($x == $activeTab) {
										$class = "current";
									}

									/*
										if there is some submenu content then echo it,
										else treat it as as a normal tab menu
									*/
									if (!empty($x_value["submenu"])) {
										echo "<li class='" . $class . "'>";
											echo "<a>" . $x . " <i class='fa fa-caret-down'></i></a>";
											echo "<ul>";
											// echos the submenu
											foreach($x_value["submenu"][0] as $y => $y_value) {
												echo "<li><a href='" . $url . "'>" . $x_value["submenu"][0][1] . "</a></li>";
											}
											echo "</ul>";
										echo "</li>";
										
									} elseif ($activeTab = "shop" && empty($url) ){
										// to fix the .htaccess file that tidies up the shop url.
										// this allows the shop links to work and external links to work.
										echo "<li class='" . $class . "'><a href='../$url'>";
										echo $x;
										echo "</a></li>";

									} else {
										// else treat it as a normal tab
										echo "<li class='" . $class . "'><a href='$url'>";
										echo $x;
										echo "</a></li>";
									}
								}
							?>
					</ul>
				</div>
			</div><!--CONTAINER-->
		</div><!--CONTAINER AGAIN-->
	</div><!--NAVBAR-->
