<?php 

	session_start();

	$tipe = $_POST['tipe'];

	$data = null;

	if($tipe == 'car1'){
		$data = array(
			'price' => 1500000,
			'capacity' => 5,
			'tipe' => 'Mercedes Benz G Class'
		);	
	}

	if($tipe == 'car2'){
		$data = array(
			'price' => 1500000,
			'capacity' => 7,
			'tipe' => 'BMW X5'
		);	
	}

	if($tipe == 'car3'){
		$data = array(
			'price' => 2000000,
			'capacity' => 4,
			'tipe' => 'Mini Cooper'
		);	
	}

	if($data != null){

		$_SESSION['data_book'] = $data;
	}

	session_start();
	session_destroy();

	header('Location: http://localhost/MODUL2_NAZLA/booking.php');	
    ?>
