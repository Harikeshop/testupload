<?php 

if (isset($_POST['upload'])) {
	
	$file_name = $_FILES['file']['name'];
	$file_type = $_FILES['file']['type'];
	$file_size = $_FILES['file']['size'];
	$file_type = $_FILES['file']['type'];
	$file_tem_location = $_FILES['file']['tmp_name'];
	$file_store = "uploads/".$file_name; 

   
    move_uploaded_file($file_tem_location, $file_store);
	



}
?>


<!DOCTYPE html>
</!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" type="text/css" href="index.css">
	<link rel="icon" href="DD Golden Alphabet 67511.png">
	<title>Harikesh</title>
</head>
<body>
	<form action="?" method="POST" enctype="multipart/form-data">
		<label><h1>Upload File here</h1></label>
		<p><input type="file" name="file"></p>
		<p><input type="submit" name="upload" value="Upload"></p>
	</form>

</body>
</html>