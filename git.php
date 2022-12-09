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



$query = "INSERT INTO contactus_tbl (id, name, email) VALUES 
        (null,'$name','$email')";

if (!mysqli_query($con, $query)) {
  die('Error: ' . mysqli_error($con));
} else {
  echo "<script>
        alert('Thanks for Contacting us');
        window.location.href='http://localhost/VSC/contact.php#form7-v';
        </script>";
  $to = "$email";
  $sub = "Thanks for Contacting Us ";
  $msg = "Hii $name, ";
  $msg .= " Thanks for Contacting us, we are happy to help you. ";
  $msg .= " From : Veterinary Services Centre";
  mail($to, $sub, $msg);
}




mysqli_close($con);