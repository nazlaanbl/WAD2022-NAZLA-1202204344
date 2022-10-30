<?php 
	session_start();

?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>My Booking</title>
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
	
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>	
</head>
<body class="justify-content-center">
</body>
	<nav class="navbar navbar-dark bg-dark justify-content-center text-center">
		<a href="home.php" class="navbar-brand text-center menu">Home</a>
		<a href="booking.php" class="navbar-brand text-center menu">Booking</a>
	</nav>	



	<?php if(isset($_SESSION['data_booking']['nama'])){ ?> 
		<h2 class="text-center mt-5">Thank You <?= $_SESSION['data_booking']['nama'] ?> For Reserving</h2>
		<h2 class="text-center mt-5">Please double check your reservation details</h2>
		<div class="container mt-5">
			<div class="table-responsive">
				<table class="table table-striped">
					<tr>
					  <th>Booking Number</th>
					  <th>Nama</th>
					  <th>Check-In</th>
					  <th>Check-Out</th>
					  <th>Car Type</th>
					  <th>Phone Number</th>
					  <th>Service</th>
					  <th>Total Price</th>				
					</tr>
					<tr>
						<td><?= $_SESSION['data_booking']['booking_number'] ?> </td>
						<td><?= $_SESSION['data_booking']['nama'] ?></td>
						<td><?= $_SESSION['data_booking']['check_in'] ?></td>
						<td><?= $_SESSION['data_booking']['check_out'] ?></td>
						<td><?= $_SESSION['data_booking']['car_type'] ?></td>
						<td><?= $_SESSION['data_booking']['phone_number'] ?></td>
						<td>

							<?php 
								if ($_SESSION['data_booking']['service'] != "") {
									echo "<ul>";
							        $serve=$_SESSION['data_booking']['service'];
							        for ($i=0; $i < count($serve) ; $i++){
							        	echo "<li>" . $serve[$i] . "</li>";
							        }
							        echo "</ul>";
							    }else{	
								
							    	echo "-";
							 	}
							 ?>
						</td>
						<td>Rp <?= $_SESSION['data_booking']['total_price'] ?></td>
					</tr>
				</table>
			</div>			
		</div>	



	<?php }else{ ?>
		<h1 class="text-center mt-5">NO SERVICE CHOSEN</h1>	
	<?php } ?>
	<footer class="text-center text-lg-start mt-5" style="background-color: lightgray;">
		<div class="text-center p-3">
		   <a class="text-dark">Created by NAZLA_1202204344</a>
		</div>
	</footer>	

</html>