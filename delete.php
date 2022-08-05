<?php

include ("dbconn.php");
error_reporting(0);

$did = $_GET['rn']; 
$query = "DELETE FROM `money` WHERE ID = '$did'";

$data = mysqli_query($conn,$query);

if ($data == TRUE) 
{
	echo "Deleted";
}

else
{
	echo "Error";
}



 header('Location: index.php');

 ?>