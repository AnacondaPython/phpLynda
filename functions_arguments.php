<!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN"
		"http://www.w3.org/TR/html4/loose.dtd">

<html lang ="en">
	<head>
	
		<title>Functions Arguments http://i.imgur.com/pHA7PSn.png</title>
	</head>
	<body>
		<!-- basic function, functions can have their own internal $var name reference-->
		<?php
		
		function say_hello_to($word){
			echo "Hello {$word}! <br />";

		}

		$name = "John Doe";
		say_hello_to($name);

		?>
		<br />
		<br />

		<!-- Functions with 3 arguments, you need to pass 3 parameters (value or by ref) to it once calling the function -->
		<?php
		function better_hello($greeting, $target, $punct){
			echo $greeting . " " . $target . $punct . "<br />";
		}

		better_hello("Hello",$name , "!");
		better_hello("Greetings", $name, "!!!");

		better_hello("Greetings", $name, null); //use null if no input for parameter

		?>
	</body>
</html>