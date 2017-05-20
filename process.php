<?php
require 'connect.php';

$SAP = $_POST['SAP'];
$first_name = $_POST['first_name'];
$last_name = $_POST['last_name'];
$spec = $_POST['spec'];
$discipline = $_POST['discipline'];
$type = $_POST['type'];
$date = $_POST['date'];
$duration = $_POST['duration'];


$sql = "INSERT INTO info (SAP, first_name, last_name, spec, discipline,
        type, date, duration) VALUES('$SAP', '$first_name', '$last_name',
        '$spec', '$discipline', '$type', '$date', '$duration')";

  if ($connection->query($sql)=== TRUE){
    echo "Submitted!";
  } else{
    echo "ERROR" .$sql . "<br />" . $connection->error;
  }

$connection->close();
?>
