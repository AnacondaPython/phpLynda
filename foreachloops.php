<!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN"
		"http://www.w3.org/TR/html4/loose.dtd">

<html lang ="en">
	<head>
	
		<title>Foreachloops http://i.imgur.com/ir9oVBo.png</title>
	</head>
	<body>
		<!-- for each loop, make a var in an array and output each element, similar to excel VBA foreach -->
		<?php
			$ages = array(4,8,15,16,23,42);

			foreach($ages as $age){
				echo "Age: {$age}<br />";
			}
		?>
		<br />
		<br />

		<!-- for each using assoc array, we take each key-value pair, and captialize the left side (First Name, Last Name, etc) using ucwords-->
		<?php
			$person = array(
				"first_name"	=> "Kevin",
				"last_name" 	=> "Skoglund",
				"address"		=> "123 Main Street",
				"city"			=> "Beverly Hills",
				"state"			=> "CA",
				"zip_code"		=> "90210",
				);

			foreach($person as $attribute => $data){
				$attr_nice = ucwords(str_replace("_", " ", $attribute));
				echo "{$attr_nice}: {$data}<br />";
			}
		?>
		<br />
		<br />

		<!-- foreach using assoc array, same as above. BUT this time with an IF ELSE condition in the forloop on the key-value pairs, checks if its an int if not then priceless-->
		<?php
			$prices = array("Brand New computer" => 2000,
							"1 month of lynda.com" => 25,
							"Learning PHP" => null);

			foreach($prices as $item =>$price){
				echo "{$item}: ";
				if (is_int($price)){
					echo "$" . $price;
				} else {
					echo "priceless";
				}
				echo "<br />";
				}
		?>



	</body>
</html>