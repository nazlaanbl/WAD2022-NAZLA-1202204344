<?php 
	session_start();
	if(!isset($_SESSION['data_book'])){
		$data = array(
			'tipe' => ""
		);
		$_SESSION['data_book'] = $data;
	}

?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Booking</title>
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
	
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>	
</head>


<body class="justify-content-center">
	<nav class="navbar navbar-dark bg-dark justify-content-center text-center">
		<a href="home.php" class="navbar-brand text-center menu">Home</a>
		<a href="#" class="navbar-brand text-center menu">Booking</a>
	</nav>		
	<div class="container text-center mt-2">
		<p class="title2 pb-2 pt-2"><fontweight : bold>Rent Your Car Now!</p>	
	</div>	


	<div class=" container mt-2 ml-5 mr-5">
		<div class="row text-black justify-content-center border bg-light pb-5 pt-5">
			<div class="col justify-content-center text-center">
				<?php 
				   if($_SESSION['data_book']['tipe'] == "Mercedes Benz GLC Class"){
				?><img src="car1.jpg" width="400" height="250" alt=""><?php }
                    else if($_SESSION['data_book']['tipe'] == "BMW X5"){	 
                ?><img src="car2.jpg" width="400" height="250" alt=""><?php }
                    else{?><img src="car3.jpg" width="400" height="250" alt=""><?php }?>					
			</div>
			<div class="col_">
				<form method="post" action="fungsibookingnow.php">  
				  <div class="form-group">
				    <label for="nama">Nama</label>
				    <input type="text" class="form-control" id="nama" aria-describedby="" placeholder="NAZLA_1202204344" readonly>
				    <input type="hidden" class="form-control" name="nama" id="nama" aria-describedby="" value="NAZLA_1202204344" >
				  </div>
				  <div class="form-group">
				    <label for="date">Book Date</label>
				    <input type="date" class="form-control" name="date" id="date" aria-describedby="" placeholder="Masukkan Tanggal" required>
				  </div>	
				  <div class="form-group">
				    <label for="time">Start Time</label>
				    <input type="time" class="form-control" name="time" id="time" aria-describedby="" placeholder="Masukan Waktu" required>
				  </div>
				  <div class="form-group">
				    <label for="duration">Duration (Days) </label>
				    <input type="number" class="form-control" name="duration" id="duration" aria-describedby="" placeholder="1" value="1" required>
				  </div>	
				  <div class="form-group">
				    <label for="time">Car Type</label>
				    <select class="form-control" name="tipe" required>
				    	<?php 
				    		if($_SESSION['data_book']['tipe'] == "Mercedes Benz GLC Class"){
				    	?>

                        <!-- MEMILIH MERCEDES BENZ GLC CLASS!--> 
						<option value="Mercedes Benz GLC Class" selected>Mercedes Benz GLC Class</option>
				    	<option value="BMW X5">BMW X5</option>
				    	<option value="Mini Cooper">Mini Cooper</option>	
				    	<?php
				    		}else if($_SESSION['data_book']['tipe'] == "BMW X5"){
						?>

						<!--MEMILIH BMW X5!-->
						<option value="Mercedes Benz GLC Class">Mercedes Benz GLC Class</option>
				    	<option value="BMW X5" selected>BMW X5</option>
				    	<option value="Mini Cooper">Mini Cooper</option>	

				    	<?php
				    		}else if($_SESSION['data_book']['tipe'] == "Mini Cooper"){
						?>
						<!--MEMILIH MINI COOPER!-->
						<option value="Mercedes Benz GLC Class">Mercedes Benz GLC Class</option>
				    	<option value="BMW X5">BMW X5</option>
				    	<option value="Mini Cooper" selected>Mini Cooper</option>	

				    	<?php
				    		}else{
				    	?>
				    	<!-- TIDAK MEMILIH APAPUN!-->
						<option value="" selected disabled ="">Choose...</option>
				    	<option value="Mercedes Benz GLC Class">Mercedes Benz GLC Class</option>
				    	<option value="BMW X5">BMW X5</option>
				    	<option value="Mini Cooper">Mini Cooper</option>	

				    	<?php
				    		}
				    	?>
				    				    					    	
				    </select>
				  </div>
                  
                  <!-- MEMASUKAN NOMOR HP!--> 
				  <div class="form-group">
				    <label for="phone">Phone number</label>
				    <input type="date" class="form-control" name="phone" id="phone" required>
				  </div>

                  <!-- MEMASUKAN SERVICE TAMBAHAN!-->
				  <div class = "form-group">
					  <label for = "phone">Add Service(s)</label>				  	
					  <div class = "form-check">
					    <input type = "checkbox" class="form-check-input" name="services[]" value="Health Protocol" >
					    <label class = "form-check-label" for="exampleCheck1">Health Protocol / Rp50.000</label>
					  </div>				   
					  <div class = "form-check">
					    <input type = "checkbox" class="form-check-input" name="services[]" value="Driver" > 
					    <label class=  "form-check-label" for="exampleCheck1">Driver / Rp150.000</label>
					  </div>	
					  <div class = "form-check">
					    <input type = "checkbox" class="form-check-input" name="services[]" value="Fuel Filled">
					    <label class = "form-check-label" for="exampleCheck1">Fuel Filled / Rp500.000</label>
					  </div>				   					  			   					  
				  </div>
        				  
				  <div class = "form-group">
					 <button type = "submit" class="btn btn-primary form-control">Book</button>	
				  </div>
				</form>
			</div>			
		</div>
	</div>
	<footer class = "text-center text-lg-start mt-5" style="background-color: lightgray;">
		<div class = "text-center p-3">
		   <a class = "text-dark">Created by NAZLA_1202204344</a>
		</div>
	</footer>	
</body>
</html>