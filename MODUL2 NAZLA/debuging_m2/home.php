<html>
	<head>
		<title>Home</title>
		<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
		<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
        <link rel="stylesheet" href="home.css">		
	</head>
	<body class="justify-content-center">
		<nav class="navbar navbar-dark bg-dark justify-content-center text-center">
			<a href="#" class="navbar-brand text-center menu">Home</a>
			<a href="fungsibook.php" class="navbar-brand text-center menu">Booking</a>
		</nav>		
		<div class="container text-center mt-4">
			<p class="title1">WELCOME TO EAD RENT</p>			
		</div>

		<div class=" container text-center mt-2">
			<p class="title2 pb-2 pt-2">Find your best deal, here!</p>	
		</div>
        <div class="row">
		<div class=" container mt-2 text-white  ml-5">
			<div class="row text-black justify-content-center">
				<div class="col-md-4">
					<div class="card" style="width: 25rem;">
					  <img class="card-img-top" src="car1.jpg" width="200" height="250" alt="Card image cap">
					  <div class="card-body">
					    <h5 class="card-title">Mercedes Benz GLC Class</h5>
					    <p class="card-text">Rp1500000 / Day</p>					    
					  </div>
					  <ul class="list-group list-group-flush text-center">
					    <li class="list-group-item"><b class="text-primary">5 Kursi</b></li>
					    <li class="list-group-item"><b class="text-primary">Automatic</b></li>
					  </ul>
					  <div class="card-footer text-center">

					  	<form method="post" action="fungsibook.php">
					  		<input type="hidden" name="tipe" value="car1">
					    	<button type="submit" class="btn btn-primary" value="car1">Book Now</button>	
					  	</form>
					  </div>
					</div>
				</div>
				<div class="col-md-4">
					<div class="col" style="width: 25rem;">
					  <img class="card-img-top pt-4 pb-3" src="car2.jpg" width="200" height="250" alt="Card image cap">
					  <div class="card-body">
					    <h5 class="card-title">BMW X5</h5>
					    <p class="card-text">Rp1500000 / Day</p>						    
					  </div>
					  <ul class="list-group list-group-flush text-center">
					    <li class="list-group-item"><b class="text-primary">7 Kursi</b></li>
					    <li class="list-group-item"><b class="text-primary">Automatic</b></li>
					  </ul>
					  <div class="card-footer text-center">
					  	<form method="post" action="fungsibook.php">

					  		<input type="hidden" name="tipe" value="car2">
					    	<button type="submit" class="btn btn-primary" value="car2">Book Now</button>	
					  	</form>
					  </div>
					</div>
				</div>
				<div class="col-md-4">
					<div class="card" style="width: 25rem;">
					  <img class="card-img-top" src="car3.jpg" width="200" height="250" alt="Card image cap">
					  <div class="card-body">
					    <h5 class="card-title">Mini Cooper</h5>
					    <p class="card-text">Rp2000000 / Day</p>						    
					  </div>
					  <ul class="list-group list-group-flush text-center">
					    <li class="list-group-item"><b class="text-primary">4 Kursi</b></li>
					    <li class="list-group-item"><b class="text-primary">Automatic</b></li>
					  </ul>
					  <div class="card-footer text-center">
					  	<form method="post" action="fungsibook.php">

					  		<input type="hidden" name="tipe" value="car3">
					    	<button type="submit" class="btn btn-primary" value="car3">Book Now</button>	
					  	</form>
					  </div>
					</div>
				</div>
			</div>
		</div>
		<footer class="text-center text-lg-start mt-5" style="background-color: lightgray;">
		  <div class="text-center p-3">
		    <a class="text-dark">Created by NAZLA_1202204344</a>
		  </div>
		</footer>
	</body>
</html>