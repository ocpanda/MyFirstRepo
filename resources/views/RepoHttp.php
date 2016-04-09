<!DOCTYPE html>
<html>
<head>
	<title>MyFirstRepo</title>
	<meta charset="utf-8">
</head>
<body>

	<?php
	echo Form::open(array('method' => 'put'));
		echo Form::text('email', 'E-Mail Address');
 		echo Form::close() ;
	?>
</body>
</html>