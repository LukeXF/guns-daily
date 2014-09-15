<?php 
    // Load header
    include './assets/header.php';

    // include the configs / constants for the database connection
    require_once("config/db.php");
    // load the login class
    require_once("classes/Login.php");
    // Process the page loading
    require("classes/ProcessPage.php");

    // Load navbar
    include './assets/navbar.php';

    // Includes slider
    require './assets/slider.php';


    // if logged in display content
    if ($login->isUserLoggedIn() == true) {
        include("views/v-shop.php");
    } else {
        include("views/v-shop.php");
    }

    // load the shop class
    echo "<div class='container'><div class='row'><div class='col-md-12'>";
    require_once("classes/Shop.php");
    echo "</div></div></div>";

    // Load footer
    include("assets/footer.php");
?>