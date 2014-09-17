<?php


echo "<p align='center'>Please note the view system is all inside a <b>class</b>. The code needs to be moved outside of the <b>/assets/</b> directory and placed in <b>/classes/</b> directory and the viewing code must be moved into <b>/views/v-rating.php</b> later on.";
echo "<p align='center'>The <b>.htaccess</b> file needs to allow clean urls on this page along with this system been locked to only users who have <b>admin</b> access on the site.";

echo "<hr>";  // SECTION ONE - STORE THE SQL DATA IN AN ARRAY




// Set's defined names into connection variable to work with the more securer PDO connection
$userdb = DB_USER;
$passdb = DB_PASS;
$hostdb = DB_HOST;
$namedb= DB_NAME;

// Creates the array where the SQL data is stored
$sqlIntoArray = array();

// Loads all SQL data and then puts that information into the already created array
try {
	// Connect and create the PDO object
	$conn = new PDO("mysql:host=$hostdb; dbname=$namedb", $userdb, $passdb);
	$conn->exec("SET CHARACTER SET utf8");      // Sets encoding UTF-8

	// Define and perform the SQL SELECT query
	$sql = "SELECT * FROM `rating`";
	// Connects to the database table and query SQL then sets the result to a variable
	$result = $conn->query($sql);

	// Parse returned data, and displays them
	while($row = $result->fetch(PDO::FETCH_ASSOC)) {
		/* For testing purposes only
		echo "<div class='col-md-1'>";
		echo "ID   : " . $row['rating_id'] . "<br>";
		echo "USER : " . $row['rating_user_id'] . "<br>";
		echo "ITEM : " . $row['rating_store_id'] . "<br>";
		echo "SCORE: " . $row['rating_amount'] . "<br>";
		*/
		$sqlIntoArray[ "STORE PRODUCT NUMBER " . $row['rating_store_id'] ] ["rating " . $row['rating_id']] = $row['rating_amount'];
		/* For testing purposes only
		echo "</div>";
		*/
	}
	// Disconnect
	$conn = null;
}
// Returns any exceptions or errors that my code will not get...
catch(PDOException $e) {
	echo $e->getMessage();
}

// Returns all the data in every array (for testing only)
print "<pre>";
print_r($sqlIntoArray);
print "</pre>";





echo "<hr>"; // SECTION TWO - CREATING THE AVERAGES





// Creates the production array of which is later queried to display on the store
$finalAverageRating = array();

// Counts each product that has a rating
$amountofProducts = count($sqlIntoArray);
// Sets value to while-loop through product array.
$productArray = 1; 

/* 
	While (an incrementing number) is less than or equal to the amount
	of products, then continue to calculate the average rating and place
	into a finalized array
*/
while($productArray <= $amountofProducts) {
	// Counts the amount of ratings inside for a product
	$arrayCount = count($sqlIntoArray["STORE PRODUCT NUMBER $productArray"]);
	// Adds all the rating into one big sum
	$totalSum = array_sum($sqlIntoArray["STORE PRODUCT NUMBER $productArray"]);
	// Sets the total sum divided by the amount of ratings
	$averageRating = $totalSum / $arrayCount;
	// Appends this set value to a new array
	$finalAverageRating[("Product " . $productArray)] = $averageRating;
	$productArray++;
} 


// Returns all the data in every array (for testing only)
print "<pre>";
print_r($finalAverageRating);
print "</pre>";




echo "<hr>"; // SECTION THREE - MAKING THE GET REQUESTS


$selectAverage = $_GET['product'];


echo "<h3 align='center'> The average rating for product <b>" . $selectAverage . "</b> is <b>" . $finalAverageRating["Product " . $selectAverage] . "</b> stars.<br>";
echo "<p>";
$starsCounter = 0;
while($starsCounter <= $finalAverageRating["Product " . $selectAverage]) {
	echo "<span class='fa fa-star'>";
	$starsCounter++;
} 
echo "</p>";
echo "<br><p align='center'>Please note, half numbers round up to make the product look better.</p>";
echo "<hr>"; // SECTION FOUR - TESTING AND DEVELOPEMENT




// Counts how many rating are in the first product
$aarrayCount = count($sqlIntoArray["STORE PRODUCT NUMBER 1"]);

// Gets the total adding up of product one
$atotalSum = array_sum($sqlIntoArray["STORE PRODUCT NUMBER 1"]) . "<br>";

// Gets the average of product one
$afinalRating = $atotalSum / $aarrayCount;

// Testing if the average sum works
// $afinalRating;