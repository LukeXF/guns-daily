<?php 
    // include the configs / constants for the database connection
    require_once("../../config/db.php");
    // Load header
    include './../assets/header.php';
    // load the login class
    require_once("../../classes/AdminLogin.php");
    // Process the page loading
    require("../../classes/ProcessPage.php");
    require_once("../config.php");
    $activeTab = "settings";

    // Load navbar
    include './../assets/navbar.php';

    // Includes slider
    require '../../assets/slider.php';


    // if logged in display content
    if ($login->isUserLoggedIn() == true) {
        include("../views/a-settings.php");
    } else {
        include("../views/a-signin.php");
    }


    // Load footer
    include("../../assets/footer.php");
?>