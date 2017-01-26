<!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN"
		"http://www.w3.org/TR/html4/loose.dtd">

<html lang ="en">
	<head>
	
		<title>Constants http://i.imgur.com/RDvcn8c.png</title>
	</head>
	<body>
		<?php
			//when we normally set a variable
			$max_width = 980;

			define("MAX_WIDTH", 980);
			echo MAX_WIDTH; //outputs 980
		?>
		<br />


		<?php //can't change the value
		//MAX_WIDTH = MAX_WIDTH +1
		//echo MAX_WIDTH
		?>
		<br />
		

		<?php //can't even redefine it
			define("MAX_WIDTH", 981);
			echo MAX_WIDTH;
		?>

		<!-- constants stay defined for the duration of the script-->

	</body>
</html>