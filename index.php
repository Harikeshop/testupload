<html>

	<?php
  
	if (isset($_POST[Upload])){
  
		$file ['file']
		print(file);
  
	}
  
	?>
<head>Harikesh</head>

<body>
	<form  method="POST" enctype="multipart/form-data" >
		<label>Uploadfiles</label>
       <p> <input type="file" name="file"> </p>
       <p><input type="submit" name="upload" value="Upload Images"></p>
	</form>
</body>
</html>