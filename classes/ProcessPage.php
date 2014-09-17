<?php
	/* This PHP file contains all the neccisary loading for all the pages */

	if (version_compare(PHP_VERSION, '5.3.7', '<')) {
		exit("You must run PHP on atleast version 5.3.7 to allow for password secuirty.");
	} else if (version_compare(PHP_VERSION, '5.5.0', '<')) {
		require_once("assets/password_compatibility_library.php");
	}

	// Handles login status
	$login = new Login();


	// Navbar logged in status
	if ($login->isUserLoggedIn() == true) {
	   $navlogin = "Welcome " . $_SESSION['user_name'];
	   $loginH1DisplayTag = "Welcome <b>" . $_SESSION['user_name'] . "&nbsp;</b>&nbsp;<img style='border-radius: 25%;' src='https://minotar.net/avatar/". $_SESSION['user_name'] . "/20'> ";

	} else {
	    $navlogin = "Login / Register";
	    $loginH1DisplayTag  = "Login";

	}


	// UUID Check
//	$uuidLength = $_SESSION['user_uuid'];
//	if (strlen($uuidLength) > 0) {
//	    $isVerified = true;
//	} else {
//	    $isVerified = false;
//	}

//	if ($isVerified == true) {
//	    $VerifiedBoxDisplay = array(
//	    "btn-success verified",
//	    "verified");
//	} else {
//	    $VerifiedBoxDisplay = array(
//	    "btn-danger notverified",
//	    "verified");
//	}

	// creates an varible to display the fully true url of the web page
	$url = explode('.', $_SERVER['SERVER_NAME']);
	$fullUrl = "http://" . $url[0] . "." . $url[1] . "." . "net";
?>