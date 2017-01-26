<!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN"
		"http://www.w3.org/TR/html4/loose.dtd">

<html lang ="en">
	<head>
	
		<title>Validations http://i.imgur.com/e6090Xy.png  and http://i.imgur.com/UMu6yLn.png</title>
	</head>
	<body>
		<?php

		// * presence
		$value = "x";
		if (!isset($value) || empty($value)){
			echo "Validation failed value \"X\". <br />";
		}

		$value = "0";
		if (!isset($value) || empty($value)){
			echo "Validation failed value \"0\". <br />";
		}

		$value = "00";
		if (!isset($value) || empty($value)){
			echo "Validation failed value \"00\". <br />";
		}

		$value = trim("   ");
		if (!isset($value) || empty($value)){
			echo "Validation failed value blank trim, is empty \"\". <br />";
		}

		$value = trim("");
		if (!isset($value) || $value === ""){
			echo "Validation failed value === trim. <br />";
		}


		?>
	</body>
</html>