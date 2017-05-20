<?php
// Create connection
$dbhost = "localhost";
$dbuser = "root";
$dbpass = "banco0606";
$dbname = "ppp_eval";
$connection = mysqli_connect($dbhost, $dbuser, $dbpass, $dbname);
//test connection
if(mysqli_connect_errno()){
	die("Connection Failed: " .
	   mysqli_connect_error().
	   "(" . mysqli_connect_errno() . ")"
		);
}

?>

<?php
//query
$query = "SELECT * FROM info";
$result = mysqli_query($connection, $query);
if(!$result){
	die("Failed to Connect");
}

?>
