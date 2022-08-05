<?php
include ("dbconn.php");
?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>CRUD App (Money Management)</title>


	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">


</head>
<body>
 
	<main>
		<div class="container text-center">
			<h1 class="py-4 bg-dark text-light rounded"><i class="fas fa-university"></i> Money Management </h1>

			<div class="d-flex justify-content-center">

				<form action="dbadd.php" method="POST" class="w-50"><!--Form-->
					<div class="py-2">
						 <div class="input-group mb-2">
						 	<!--ID-->
        <div class="input-group-prepend">
          <div class="input-group-text bg-warning"><i class="fas fa-id-badge"></i></div>
        </div>
        <input type="text" autocomplete="off" class="form-control" id="inlineFormInputGroup" name="money_id" placeholder="ID" disabled>
      </div>

      <div class="pt-2">
      	 <div class="input-group mb-2"> 
        <div class="input-group-prepend"> <!--Item-->
          <div class="input-group-text bg-warning"><i class="fas fa-book"></i></div>
        </div>
        <input type="text" class="form-control" autocomplete="off" id="inlineFormInputGroup" name="item_name" placeholder="Item Name" required>
      </div>
      	
      </div>
					</div>

					<div class="row pt-2">
						<div class="col">
							<div class="input-group mb-2">
        <div class="input-group-prepend"><!--Date-->
          <div class="input-group-text bg-warning"><i class="fas fa-calendar-week"></i></div>
        </div>
        <input type="date" autocomplete="off" class="form-control" id="inlineFormInputGroup" name="datee" required>
      </div>
						 </div>

						 <div class="col">
						<div class="input-group mb-2">
        <div class="input-group-prepend"><!--Price-->
          <div class="input-group-text bg-warning"><i class="fas fa-money-bill-wave-alt"></i></div>
        </div>
        <input type="text" autocomplete="off" class="form-control" id="inlineFormInputGroup" name="item_price" placeholder="Price" required>
      </div>
						
		 </div>
		</div>

		<div class="d-flex justify-content-center">
			
			<div style="margin-bottom: 10px;"><input type="submit" name="submit" value="Add" class="btn btn-success"></div> 

		</div>

					
				</form>
				
			</div>

			<div class="d-flex table-data">
				<table class="table table-striped table-light">

					<thead class="thead-dark">
						<tr>
							<th class="rounded-left">ID</th>
							<th>Item Name</th>
							<th>Date</th>
							<th>Item Price</th>
							<th>Edit</th>
							<th class="rounded-right">Delete</th>
						</tr>
						
                     

					</thead>

					<?php

error_reporting(0);
$query = "SELECT * FROM `money`";
$data = mysqli_query($conn,$query);
$total = mysqli_num_rows($data);

if ($total != 0) 
{
$index = 0;
	while (($result = mysqli_fetch_assoc($data))) {
		$index += 1;
		echo "<tr><td>".$index."</td><td>".$result['item_name']."</td><td>".$result['datee']."</td><td>".$result['price']."</td><td> <a href='update.php?rn=$result[ID]&ri=$result[item_name]&rd=$result[datee]&rp=$result[price]'><i class='fas fa-edit btnedit text-warning' style='cursor: pointer;'></i></a> </td><td><a href ='delete.php?rn=$result[ID]'><i class='fas fa-trash-alt text-danger' style='cursor: pointer;'></i></a></td></tr>";
	}
}

else 
{
	echo "No records are found";
}
 ?>
					
				</table>
				
			</div>


		</div>

	</main>


<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.min.js" integrity="sha384-w1Q4orYjBQndcko6MimVbzY0tgp4pWB4lZ7lr30WKz0vr/aWKhXdBNmNb5D92v7s" crossorigin="anonymous"></script>
<script src="https://kit.fontawesome.com/814d59ea53.js" crossorigin="anonymous"></script>
<script src="https://use.fontawesome.com/ca400cd3e7.js"></script>
</body>
</html>