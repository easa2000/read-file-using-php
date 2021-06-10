<!DOCTYPE html>
<html>
<head>
	<title>working on progress</title>
	<style type="text/css">
		body{
			background-color: aqua;
		}
	</style>
</head>
<body>
	<?php
	  $file = fopen("Myfile.txt","r");
	  while(!feof($file)){
	  	echo fgets($file)."<br>";
	  }
	  fclose($file);
	?>
</body>
</html>