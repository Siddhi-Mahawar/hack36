<!DOCTYPE html>
<html>
<head>
	<title> display pdf</title>
</head>
	<body>
		<div class="header">
		<h2> Home page</h2>
	</div>
		<?php 
		$file= 'bcd.pdf';
		$filename='bcd.pdf';
		header('Content-type:application/pdf');
		header('Content-Disposition:inline;filename"'.$filename.'"');
		header('Content-Transfer-Encoding:binary');
		header('Accept-Ranges:bytes');
        @readfile($file);
        ?>
	</body>
	</html>

