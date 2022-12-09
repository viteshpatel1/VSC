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
$des = $_POST['description'];


$query = "INSERT INTO feedback_tbl (id, name, email, des) VALUES 
        (null,'$name','$email','$des')";

if (!mysqli_query($con, $query)) {
  die('Error: ' . mysqli_error($con));
} else {

  echo "<script>
        alert('Feedback Submitted successfully !!');
        window.location.href='http://localhost/VSC/aboutus.php#form6-i';
        </script>";
  exit;
}




mysqli_close($con);