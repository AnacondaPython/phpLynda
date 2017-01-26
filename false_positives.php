<!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN"
		"http://www.w3.org/TR/html4/loose.dtd">

<html lang ="en">
	<head>
	
		<title>False Positibs</title>
	</head>
	<body>
		<?php

		function is_equal($value1, $value2){
			$output = "{value1} == {$value2}: ";
			if($value1 == $value2){
				$output .= "true <br />";
			} else {
				$output .= "false <br />";

			}
			return $output;
			}
		?>

		<?php
		//http://i.imgur.com/oKuOX3r.png
		//these ALL return true because of type juggling

		echo is_equal (0,false);
		echo is_equal (4, true);
		echo is_equal (0, null);
		echo is_equal (0, "0");
		echo is_equal (0, "");
		echo is_equal (0, "a");
		echo is_equal ("1", "01");
		echo is_equal ("", null);
		echo is_equal (3, "3 dogs FO");
		echo is_equal (100, "1e2");
		echo is_equal (100, 100.00);
		echo is_equal ("abc", true);
		echo is_equal ("123", "    123"); //both strings
		echo is_equal ("123", "+0123"); //both strings
		?>
		<br />



		<?php

		function is_exact($value1, $value2){
			$output = "{value1} === {$value2}: ";
			if($value1 === $value2){
				$output .= "true <br />";
			} else {
				$output .= "false <br />";

			}
			return $output;
			}
		?>

		<?php
		//http://i.imgur.com/oKuOX3r.png
		//these ALL return true because of type juggling

		echo is_exact (0,false);
		echo is_exact (4, true);
		echo is_exact (0, null);
		echo is_exact (0, "0");
		echo is_exact (0, "");
		echo is_exact (0, "a");
		echo is_exact ("1", "01");
		echo is_exact ("", null);
		echo is_exact (3, "3 dogs FO");
		echo is_exact (100, "1e2");
		echo is_exact (100, 100.00);
		echo is_exact ("abc", true);
		echo is_exact ("123", "    123"); //both strings
		echo is_exact ("123", "+0123"); //both strings
		?>
	</body>
</html>