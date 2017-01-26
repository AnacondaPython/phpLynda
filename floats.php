<!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN"
		"http://www.w3.org/TR/html4/loose.dtd">

<html lang ="en">
	<head>
	
		<title>untitled</title>
	</head>
	<body>

		<!-- http://i.imgur.com/fcIVV7w.png -->
		
		<!-- basic float math, like CS50 -->
		<?php echo $float = 3.14; ?><br />
		<?php echo $float + 7; ?><br />
		<?php echo 4/3;?><br />

		<!--<?php echo 4/0; ?><br /> http://i.imgur.com/gRtvMvt.png cannot divide by 0 -->

		<br />

		<!-- floating point round to decimal places, up to nearest number, or down to nearest number-->
		Round : <?php echo round($float,1); ?><br />
		Ceiling: <?php echo ceil($float); ?><br />
		Floor: <?php echo floor($float); ?><br />
		<br />

		<?php $integer = 3; ?>

		<!-- an output of 1 means true  -->
		<?php echo "Is {$integer} integer?" . is_int($integer); ?><br />
		<?php echo "Is {$float} float" . is_int($float); ?><br />
		<br />
		<?php echo "Is {$integer} float?" . is_float($integer); ?><br />
		<?php echo "Is {$float} float?" . is_float($float); ?><br />
		<br />
		<?php echo "Is {$integer} numeric?" . is_numeric($integer); ?><br />
		<?php echo "Is {$float} numeric?" . is_numeric($float); ?><br />
		<br />



	</body>
</html>