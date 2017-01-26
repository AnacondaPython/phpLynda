<!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN"
		"http://www.w3.org/TR/html4/loose.dtd">

<html lang ="en">
	<head>
	
		<title>Logical http://i.imgur.com/98My9pu.png  , newest http://i.imgur.com/MN83c1h.png</title>
	</head>
	<body>

		<!-- if statement comparisons simple -->
		<?php
			$a = 4;
			$b = 3;

			if ($a>$b) {
				echo "a is larger than B";
			} elseif ($a<$b){
				echo "b is larger than a";
			} else {
				echo "a is equal b";
			}
		?>
		<br />


		<!-- basic if statement with {} -->
		<?php //Only welcome new users
			$new_user = true;
			if ($new_user){
				echo "<h1>Welcome</h1>";
				echo "<p>We are glad you decided to join us.</p>";
			}
		?>
		<br />


		<!-- declare your variables before if statements -->
		<?php //don't divide by zero
			$numerator = 20;
			$denominator = 4;
			$result = 0; //you need to define variables before IF statements else error
			if ($denominator > 0){
				$result = $numerator / $denominator;
			}
			echo "Result: {$result}";
		?>
	</body>
</html>