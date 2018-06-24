<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title></title>
	<link rel="stylesheet" href="">
</head>
<body>
	<?php
	foreach ($content as $key) {
		header('Content-type: application/pdf');
	    header("Cache-Control: no-cache");
	    header("Pragma: no-cache");
	    header("Content-Disposition: inline;filename='document.pdf'");
	    header("Content-length: ".strlen($key->data));
	    echo $key->data;
	  exit();
	}
	  
	?>
</body>
</html>