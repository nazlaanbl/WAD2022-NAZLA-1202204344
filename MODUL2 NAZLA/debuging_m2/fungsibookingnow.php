<?php 
	
	session_start();

	$booking_number = rand(10000000, 99999999);

	$car_type = $_POST['tipe'];
	$price = 0;

	if($car_type == "Mercedes Benz G Class"){
		$price = 1500000; 
	}
	if($car_type == "BMW X5"){
		$price = 1500000; 
	}
	if($car_type == "Mini Cooper"){
		$price = 2000000; 
	}	
	$nama = $_POST['nama'];
	$duration = $_POST['duration'];
	$check_in = $_POST['date'] . " " . $_POST['time'];

	$time = strtotime($check_in . "+{$duration} hours");

	$check_out = date('Y-m-d h:i',$time);

	$car_type = $_POST['tipe'];
	$phone_number = $_POST['phone'];
	$service = $_POST['services'];
	$total_price = $price * $duration;

	if (isset($_POST['services'])) {

        $serve=$_POST['services'];
        for ($i=0; $i < count($serve) ; $i++){
            if($serve[$i] == "Health Protocol"){
            	$total_price = $total_price + 50000;
            }
            if($serve[$i] == "Driver"){
            	$total_price = $total_price + 150000;
            }            
            if($serve[$i] == "Fuel Filled"){
            	$total_price = $total_price + 500000;
            }            
        }
    }

	$data = array(
		'booking_number' => $booking_number,
		'nama' => $nama,
		'check_in' => $check_in,
		'check_out' => $check_out,
		'car_type' => $car_type,
		'phone_number' => $phone_number,
		'service' => $service,
		'total_price' => $total_price
	);

	$_SESSION['data_booking'] = $data;

	header('Location: http://localhost/MODUL2_NAZLA/mybooking.php');	
?>