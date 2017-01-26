<!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN"
		"http://www.w3.org/TR/html4/loose.dtd">

<html lang ="en">
	<head>
	
		<title>untitled</title>
	</head>
	<body>
		<?php

		//http://i.imgur.com/pVyzg3F.png

		//you should only use "" for outputting text  see below
		echo "Hello World <br />";
		echo 'Hello World <br />';

		$greeting = "Hello";
		$target = "World";
		$phrase = $greeting . " " . $target;

		echo $phrase;

		?>
		<br />
		<?php

		//literal phrase output using ''
		echo "$phrase Again <br />";
		echo '$phrase Again <br />';

		//differentiating variables from text
		echo "{$phrase} Again <br />";

		?>
	</body>
</html>