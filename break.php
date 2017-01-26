<!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN"
		"http://www.w3.org/TR/html4/loose.dtd">

<html lang ="en">
	<head>
	
		<title>Break http://i.imgur.com/VhegodD.png</title>
	</head>
	<body>
		<!-- A simple Break out of loop-->
		<?php
			for ($count=0; $count<= 10; $count++){
				if ($count ==5){
					break; //break is like continue but stops all iterations after
				}
				echo $count . ", ";

			}
		?>
		<br />
		<br />


		<!-- break out of inner loop 1-3 but continue to 3-0 then 5-0 later -->
		<?php //loop inside a loop with break
			for ($i=0; $i<=5; $i++){
				if ($i % 2 == 0){ continue(1); }
				for ($k=0; $k<=5; $k++){
					if ($k == 3) {break(1); }
					echo $i . "-" . $k . "<br />";
				}
			}
		?>
		<br />
		<br />


		<!-- break out of all loops once 1-3 is reached -->
		<?php //loop inside a loop with break
			for ($i=0; $i<=5; $i++){
				if ($i % 2 == 0){ continue(1); }
				for ($k=0; $k<=5; $k++){
					if ($k == 3) {break(2); }
					echo $i . "-" . $k . "<br />";
				}
			}
		?>

	</body>
</html>