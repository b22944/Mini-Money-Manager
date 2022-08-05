<?php 

include ("dbconn.php");
error_reporting(0);

$rn = $_GET['rn'];
$ri = $_GET['ri'];
$rd = $_GET['rd'];
$rp = $_GET['rp'];

 ?>


<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Update (Money Management)</title>


	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
</head>
<body>

	<div class="container text-center">
			<h1 class="py-4 bg-dark text-light rounded"><i class="fas fa-university"></i> Money Management </h1>

			<div class="d-flex justify-content-center">

				<form action="" method="GET" class="w-50"><!--Form-->
					<div class="py-2">
						 <div class="input-group mb-2">
						 	<!--ID-->
        <div class="input-group-prepend">
          <div class="input-group-text bg-warning"><i class="fas fa-id-badge"></i></div>
        </div>
        <input type="text" autocomplete="off" class="form-control" value="<?php echo $rn ?>" id="inlineFormInputGroup" name="money_id" placeholder="ID" required>
      </div>

      <div class="pt-2">
      	 <div class="input-group mb-2"> 
        <div class="input-group-prepend"> <!--Item-->
          <div class="input-group-text bg-warning"><i class="fas fa-book"></i></div>
        </div>
        <input type="text" class="form-control" autocomplete="off" value="<?php echo $ri ?>" id="inlineFormInputGroup" name="item_name" placeholder="Item Name" required>
      </div>
      	
      </div>
					</div>

					<div class="row pt-2">
						<div class="col">
							<div class="input-group mb-2">
        <div class="input-group-prepend"><!--Date-->
          <div class="input-group-text bg-warning"><i class="fas fa-calendar-week"></i></div>
        </div>
        <input type="date" autocomplete="off" class="form-control" value="<?php echo $rd ?>" id="inlineFormInputGroup" name="datee" required>
      </div>
						 </div>

						 <div class="col">
						<div class="input-group mb-2">
        <div class="input-group-prepend"><!--Price-->
          <div class="input-group-text bg-warning"><i class="fas fa-money-bill-wave-alt"></i></div>
        </div>
        <input type="text" autocomplete="off" class="form-control" value="<?php echo $rp ?>" id="inlineFormInputGroup" name="item_price" placeholder="Price" required>
      </div>
						
		 </div>
		</div>

		<div class="d-flex justify-content-center">
			
			<div style="margin-bottom: 10px;"><input type="submit" name="submit" value="UPDATE" class="btn btn-success"></div> 

		</div>

					
				</form>

<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.min.js" integrity="sha384-w1Q4orYjBQndcko6MimVbzY0tgp4pWB4lZ7lr30WKz0vr/aWKhXdBNmNb5D92v7s" crossorigin="anonymous"></script>
<script src="https://kit.fontawesome.com/814d59ea53.js" crossorigin="anonymous"></script>
<script src="https://use.fontawesome.com/ca400cd3e7.js"></script>

</body>
</html>


<?php

if ($_GET['submit']) 
{
 	$id = $_GET['money_id'];
 	$item = $_GET['item_name'];
 	$date = $_GET['datee'];
 	$price = $_GET['item_price'];

 	$query = "UPDATE `money` SET ID ='$id', item_name = '$item' , datee = '$date' , price = '$price'  WHERE  ID = '$id' ";
 	         
 	$data = mysqli_query($conn,$query);

if ($data == TRUE) 
{
	echo "Updated";
	header('Location: index.php');
}

else
{
	echo "Error";
}

} 



 ?>

