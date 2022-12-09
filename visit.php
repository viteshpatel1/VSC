<?php
$host = "localhost";
$user = "root";
$pass = "";
$db = "vscdb";
$con = mysqli_connect($host, $user, $pass, $db);

if (!$con) {
	die("can't connect. Connection Error: " . mysqli_connect_errno() . " " . mysqli_connect_error());
}
$name = $_POST['name'];
$email = $_POST['email'];
$date = $_POST['date'];
$date = date("Y-m-d", strtotime($date));
list($y, $m, $d) = explode("-", $date);

// var_dump(checkdate($d,$m,$y));
//if (checkdate($d, $m, $y)) {
//if (isset($date) {
	//echo "OK Date";
//} else {
	//echo "please select correct date";
	//exit();
//}

$doctor = $_POST['dr'];
$address = $_POST['address'];
$description = $_POST['description'];


$query = "INSERT INTO visit_tbl (v_id, name, email, date, doctor, address, description) VALUES 
    		(null,'$name','$email','$date','$doctor','$address','$description')";

if (!mysqli_query($con, $query)) {
	die('Error: ' . mysqli_error($con));
} else {
	echo "<script>
        alert('Visit Booked successfully, Please wait for approval');
        window.location.href='http://localhost/VSC/index.php#form5-4';
        </script>";


	exit;
}

mysqli_close($con);