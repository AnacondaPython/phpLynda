<!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN"
		"http://www.w3.org/TR/html4/loose.dtd">

<html lang ="en">
	<head>
	
		<title>Functions Defining http://i.imgur.com/uX8QprV.png</title>
	</head>
	<body>

		<!-- function with void arguments -->
		<?php
		
			function say_hello() {
				echo "Hello World";
			}

			say_hello(); 
		?>
		<br />
		<br />


		<!-- Using a function and passing a variable to it -->
		<?php
			function say_hello_to($word){
				echo "Hello {$word}!<br />";
			}

			say_hello_to("World");
			say_hello_to("Everyone");
		?>
		<br />
		<br />

		<!-- Function cannot be changed once they've been called, but can be called after the call-->
		<?php

			say_hello_loudly();

			function say_hello_loudly(){
				echo "HELLO WORLD!<br />";
			}

			//function say_hello_loudly(){
				//echo "We can't redefine a function <br />";
			//}
		?>

	</body>
</html>