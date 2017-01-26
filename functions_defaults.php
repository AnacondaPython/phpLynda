<!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN"
		"http://www.w3.org/TR/html4/loose.dtd">

<html lang ="en">
	<head>
	
		<title>functions Defaults http://i.imgur.com/AM8McEz.png</title>
	</head>
	<body>
		<?php
		
		function paint($room="office",$color="red"){
			return "The color of the {$room} is {$color}.<br />";
		}

		echo paint(); //prints default
		echo paint("bedroom", "blue");
		echo paint("bedroom", null); //prints null since null IS being sent
		echo paint("blue"); //changes the $room parameter since its the first argument

		?>
	</body>
</html>