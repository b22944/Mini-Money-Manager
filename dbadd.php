<?php

error_reporting(0);

if (isset($_POST['submit'])) {
   include ("dbconn.php");
   
$id = $_POST['money_id'];
$item = $_POST['item_name'];
$date = $_POST['datee'];
$price = $_POST['item_price'];

$query = "INSERT INTO `money`(`ID`, `item_name`, `datee`, `price`) VALUES ('$id','$item','$date','$price')";

if (!mysqli_query($conn, $query)) {

  die('Error inserting record');
  }// End of Inside IF

  $result = "New record added";

  echo $result;

  header('Location: index.php');


 }//end of main if 

?>