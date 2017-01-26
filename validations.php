<!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN"
		"http://www.w3.org/TR/html4/loose.dtd">

<html lang ="en">
	<head>
	
		<title>Validations</title>
	</head>
	<body>
		<?php

		// * presence
		$value = "x";
		if (!isset($value)){
			echo "Validation failed value. <br />";
		}

		// * string length
		$value = "";
		$min = 3;
		if (strlen($value) < $min){
			echo "Validation failed min. <br />";
		}
		// * max length
		$value = "abcdefghi";
		$max = 6;
		if (strlen($value) >$max){
			echo "Validation failed max. <br />";
		}
		// * type
		$value = "1"; ///when you submit form values its always treated as string regardless if number. Else you have to parse/convert
		if (!is_string($value)){
			echo "Validation failed, not a string <br / >";
		}
		// * inclusion in a set
		$value = "5";
		$set = array("1", "2", "3", "4");
		if (!in_array($value, $set)){
			echo "Validation failed, value input not in array set <br />";
		}

		// * uniqueness
		// uses a database to check uniqueness
		// * format
		// use a regex on a string
		// preg_match ($regex, $subject)
		if (preg_match("/PHP/", "PHP is fun")){
			echo "A match was found (default example)<br />";
		} else {
			echo "A match was NOT found <br/>";
		}

		// * check if email @ sign valid
		$value = "nobody (at) nowhere.com";
		if (!preg_match("/@/", $value)){
			echo "Validation failed, not an email username<br/>";
		}

		//equivalent as above, but faster. === for check type and value
		if(strpos($value, "@") === false){
			echo "Validation failed, strpos check on @ email.";
		}

		?>
	</body>
</html>