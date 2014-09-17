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

?>

<div class="container" style="margin-top:50px;">
    <div class="row">
        <div class="col-md-4 col-md-offset-4">
            <?php include './assets/store-rating.php'; ?>
        </div>
    </div>
</div>

<?php  
    // Load footer
    include("assets/footer.php");
?>