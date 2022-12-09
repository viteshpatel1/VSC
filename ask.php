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
$que = $_POST['que'];


$query = "INSERT INTO ask_tbl (id, name, question) VALUES 
        (null,'$name','$que')";

if (!mysqli_query($con, $query)) {
  die('Error: ' . mysqli_error($con));
} else {
  header("Location: http://localhost/VSC/contact.php#form9-17");

  echo "<script>alert('question submitted')</script>";
  exit;
}

mysqli_close($con);