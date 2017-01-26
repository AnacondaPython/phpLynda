<!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN"
		"http://www.w3.org/TR/html4/loose.dtd">

<html lang ="en">
	<head>
	
		<title>Functions return Multiple Values http://i.imgur.com/ypzdhO5.png</title>
	</head>
	<body>
		<!-- functions with multiple return values , return an array -->
		<?php
		function add_subt($val1, $val2){
			$add = $val1 + $val2;
			$subt = $val1 - $val2;
			return array($add, $subt); //returns an array for 2 potential returns
		}

		//array[index] to output value
		$result_array = add_subt(10,5);
		echo "Add: " . $result_array[0] . "<br />";
		echo "Subt: " . $result_array[1] . "<br />";

		//Use lists, pre-built array reference. Similar to C:
		list($add_result, $subt_result) = add_subt(20,7);
		echo "Add: " . $add_result . "<br />";
		echo "Subt: " . $subt_result . "<br />";
		?>

	</body>
</html>