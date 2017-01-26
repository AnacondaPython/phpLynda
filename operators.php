<!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN"
		"http://www.w3.org/TR/html4/loose.dtd">

<html lang ="en">
	<head>
	
		<title>Comparison and Logical Operators http://i.imgur.com/3IHIM34.png</title>
	</head>
	<body>

		<!-- basic comparison operator and IF statement -->
		<?php 
			$a = 4;
			$b = 3;
			$c = 1;
			$d = 20;

			if (($a >$b) || ($c >$d)){
				echo ("a is greater than b OR");
				echo ("c is greater than d");
			}
		?>
		<br />


		<!-- if e is not set then 200 -->
		<?php
			$e = 100;
			if (!isset($e)){
				$e = 200;
			}
			echo $e;
		?>
		<br />

		<!-- if the input isn't a number and not empty, show msg -->
		<?php
			//don't reject 0 to 0..0
			$quantity = "";
			if (empty($quantity) && !is_numeric($quantity)){
			echo "You must enter a quantity.";
		}
		?>
	</body>
</html>