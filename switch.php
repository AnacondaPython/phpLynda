<!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN"
		"http://www.w3.org/TR/html4/loose.dtd">

<html lang ="en">
	<head>
	
		<title>Switch http://i.imgur.com/6iTEzR5.png</title>
	</head>
	<body>


		<!-- regular case -->
		<?php
			$a = 3;
			switch ($a){
				case 0:
					echo "a equals 0 <br />";
				case 1:
					echo "a equals 1 <br />";
				case 2:
					echo "a equals 2 <br />";
				case 3:
					echo "a equals 3 <br />";
			}
		?>
		<br />


		<!-- switch statements by default do everything after the case-->
		<?php
			$a = 0;
			switch ($a){
				case 0:
					echo "a equals 0 <br />";
				case 1:
					echo "a equals 1 <br />";
				case 2:
					echo "a equals 2 <br />";
				case 3:
					echo "a equals 3 <br />";
			}
		?>
		<br />


		<!-- add break statements so it doesn't execute everything after first case found-->
		<?php
			$a = 9;
			switch ($a){
				case 0:
					echo "a equals 0 <br />";
					break;
				case 1:
					echo "a equals 1 <br />";
					break;
				case 2:
					echo "a equals 2 <br />";
					break;
				case 3:
					echo "a equals 3 <br />";
					break;
				default:
					echo "a is not 0, 1, 2, o";
					break; //last break not necessary
			}
		?>
		<br />
		<br />


		<!-- Chinese Zodiac, whitespaces doesn't matter, but semicolon colons breaks do-->
		<?php
		$year = 2013;
		switch(($year - 4)%12){ //Modulo fmod
			case  0: $zodiac = 'Rat';		break;
			case  1: $zodiac = 'Ox';		break;
			case  2: $zodiac = 'Tiger';		break;
			case  3: $zodiac = 'Rabbit';	break;
			case  4: $zodiac = 'Dragon';	break;
			case  5: $zodiac = 'Snake';		break;
			case  6: $zodiac = 'Horse';		break;
			case  7: $zodiac = 'Goat';		break;
			case  8: $zodiac = 'Monkey';	break;
			case  9: $zodiac = 'Rooster';	break;
			case 10: $zodiac = 'Dog';		break;
			case 11: $zodiac = 'Pig';		break;
		}
		echo "{$year} is the year of the {$zodiac}.";
		?>
		<br />
		<br />


		<!-- multiple cases (press, customer admin) using the same value Hello -->
		<?php
			$user_type = 'customer';

			switch ($user_type){
				case 'student':
					echo "Welcome!";
					break;
				case 'press':
				case 'customer':
				case 'admin':
					echo "Hello!";
					break;
			}
		?>
	</body>
</html>