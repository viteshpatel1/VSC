<?php 
if(isset($_POST['upload']))
{
	$target="login/".basename($_FILES['img']['name']);

	if(move_uploaded_file($_FILES['img']['tmp_name'],$target))
	{
		echo "file uploaded successfully";
	}
	else
		echo "file uploading error";
}
?>
<!DOCTYPE html>
<html>
<head>
	<title>image upload</title>
</head>
<body>

<h1>Image Upload</h1>
<form action="img.php" method="POST" enctype="multipart/form-data">
	<input type="file" name="img">
	<input type="submit" name="uload">
</form>
</body>
</html>