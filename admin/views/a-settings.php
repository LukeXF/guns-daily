<style type="text/css">
#top-nav.navbar {
border-bottom: 1px solid #2D2D2D;
}
</style>
<div class="shadow dark" style="margin-left: -1px; margin-bottom: 0px; margin-right: -1px;">
    <div class="container dashboard">
        <div class="row">
            <div class="col-md-1">
                <img class="avatar" src="<?php echo $grav_url; ?>">
            </div>
            <div class="col-md-6">
                <h3 class="main dash left"><?php echo $_SESSION['user_name'] . " " . $focedshrink .  $_SESSION['user_last'] ?></h3>
            </div>
            <div class="col-md-5">
                <h3 class="main dash right">Settings</h3>
            </div>
        </div>
    </div>
</div>

<?php


    $servername = DB_HOST;
    $username   = DB_USER;
    $password   = DB_PASS;
    $dbname     = DB_NAME;
    
    $navbar = array(
        "Overview" =>   array(
            "active" => "",
            "url" => "overview",
        ),

        "Edit Desc" =>   array(
            "active" => "",
            "url" => "descriptions",          
        ),

        "Apply Desc" =>  array(
            "active" => "",
            "url" => "applydesc",          
        ),

        "Testimonials" => array(
            "active" => "",
            "url" => "testimonials",          
        ),

        "Advertising" => array(
            "active" => "",
            "url" => "advertising",          
        ),

        "FAQ" => array(
            "active" => "",
            "url" => "support",          
        ),

        "Site Config" => array(
            "active" => "",
            "url" => "siteconfig",0          
        )

    );

if ( empty($_GET['p']) ) {
    $activeTab = "overview";
} else {
    $activeTab = $_GET['p'];
}
    

    if ($_GET['p'] == 'overview'){
        $select_tab = '../views/settings/s-overview.php';
    } elseif ($_GET['p'] == 'descriptions'){
        $select_tab = '../views/settings/s-descriptions.php';
    } elseif ($_GET['p'] == 'billing'){
        $select_tab = '../views/settings/s-billing.php';
    } elseif ($_GET['p'] == 'apps'   ){
        $select_tab = '../views/settings/s-apps.php';
    } elseif ($_GET['p'] == 'hosting'){
        $select_tab = '../views/settings/s-hosting.php';
    } elseif ($_GET['p'] == 'support'){
        $select_tab = '../views/settings/s-support.php';
    } elseif ($_GET['p'] == 'profile'){
        $select_tab = '../views/settings/s-profile.php';
    } elseif ($_GET['p'] == 'loading'){
        $select_tab = '../views/settings/s-loading.php';
    } else {
        $select_tab = '../views/settings/s-overview.php';
    }



?>
<div class="outershadow cream" style="margin-left: -1px;">
    <div class="container dashboardnav">
        <ul class="nav navbar-nav navbar-left dashnav">
            <?php

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
                    if ($url == $activeTab) {
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
                        
                    } else {
                        // else treat it as a normal tab
                        echo "<li><a class='" . $class . "' href='" . $url . "'><i class='fa2 " . $url . "'></i><span>";
                        echo $x;
                        echo "</a></span></li>";
                    }
                }
            ?>
        </ul>
    </div>
</div>
<div class="container">
    <?php
        include $select_tab;
    ?>
</div>
