<!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN"
		"http://www.w3.org/TR/html4/loose.dtd">

<html lang ="en">
	<head>
	
		<title>Debugging http://i.imgur.com/Z7LakTw.png</title>
	</head>
	<body>
		<!-- var dump shows the value and type of the variable-->
		<?php
		$number = 99;
		$string = "Bug";
		$array = array(1 => "Homepage", 2 => "About Us", 3 => "Services");

		var_dump($number);
		var_dump($string);
		var_dump($string);
		?>
		<br />
		<br />

		<!-- prints an array of all the defined variables -->
		<pre>
		<?php //prints a lot of stuff
			print_r(get_defined_vars());
		?>
		</pre>
		<br />
		<br />

		<!--var_dump(debug_backtrace) shows strings and lines used -->
		<?php

		function say_hello_to($word){
			echo "Hello {$word}!<br />";
			var_dump(debug_backtrace());
		}

		say_hello_to('Everyone');

		?>
	</body>
</html>