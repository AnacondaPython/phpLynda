<!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN"
		"http://www.w3.org/TR/html4/loose.dtd">

<html lang ="en">
	<head>
	
		<title>untitled</title>
	</head>
	<body>
		<?php
			//Arrays are 0 indexed in PHP
			$numbers = array(4,8,15,16,23,42);
			echo $numbers[1];
		?>

		<!-- we have an error here  http://i.imgur.com/MM83q14.png, because array to string conversion -->
		<?php $mixed = array(6, "fox", "dog", array("x", "y", "z")); ?>
		<?php echo $mixed[2]; ?><br />
		<?php echo $mixed[3]; ?><br />
		<?php echo $mixed ?><br />


		<!-- this is for debugging to see what array look like http://i.imgur.com/heL6hW1.png-->
		<pre>
		<?php echo print_r($mixed); ?>		
		</pre>


		<!-- this prints Y, array in an array-->
		<?php echo $mixed[3][1];?><br />

		<?php $mixed[2] = "cat"; ?>
		<?php $mixed[4] = "mouse"; ?>
		<?php $mixed[] = "horse"; ?>


		<!-- this prints above with the Y input http://i.imgur.com/A79OnRY.png -->
		<pre>
		<?php echo print_r($mixed); ?>
		</pre>

		<?php
			//PHP 5.4 added the short array syntax, currently at 5.6
			$array = [1,2,3];
		?>


	</body>
</html>