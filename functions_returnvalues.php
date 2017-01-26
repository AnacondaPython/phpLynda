<!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN"
		"http://www.w3.org/TR/html4/loose.dtd">

<html lang ="en">
	<head>
	
		<title>Functions Return values http://i.imgur.com/MxnUvNF.png</title>
	</head>
	<body>
		<!-- basic math return function -->
		<?php
		function add($val1, $val2){
			$sum = $val1 +$val2;
			return $sum; //specify a return, it also exits function immediately
		}

		$result1 = add(3,4);
		$result2 = add(5, $result1);
		echo $result2;
		?>
		<br />
		<br />


		<!-- Chinese Zodiac sign revisited, this time using functions-->
		<?php
		function chinese_zodiac($year){
		switch(($year - 4)%12){ //Modulo fmod
			case  0: return 'Rat';		break;
			case  1: return 'Ox';		break;
			case  2: return 'Tiger';		break;
			case  3: return 'Rabbit';	break;
			case  4: return 'Dragon';	break;
			case  5: return 'Snake';		break;
			case  6: return 'Horse';		break;
			case  7: return 'Goat';		break;
			case  8: return 'Monkey';	break;
			case  9: return 'Rooster';	break;
			case 10: return 'Dog';		break;
			case 11: return 'Pig';		break;
			}
		}
		
		//pass by reference
		$this_year = 2016;
		$zodiac = chinese_zodiac($this_year);
		echo ("This year animal is {$zodiac}!<br />");

		//pass by value
		$zodiac = chinese_zodiac(2026);
		echo ("2026 is the year of the {$zodiac}!<br />");
		
		//concatenate one liner
		echo ("2051 is the year of the " . chinese_zodiac(2051) . "!<br />");
		?>
		<br />


		<!-- You should use the return statement by default on function, unless you are only printing out values -->
		<?php
		function better_hello($greeting, $target, $punct){
			return $greeting . " " . $target . $punct . "<br />";
		}
		echo better_hello("Hello", "John Doe", "");
		?>
	</body>
</html>