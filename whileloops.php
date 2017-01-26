<!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN"
		"http://www.w3.org/TR/html4/loose.dtd">

<html lang ="en">
	<head>
	
		<title>whileLoops http://i.imgur.com/sJ0rUhz.png</title>
	</head>
	<body>
		<!-- simple whileloop with an if condition inside to do something at 5-->
		<?php
			$count = 0;
			while ($count <= 10){
				if ($count ==5){

					echo "FIVE, ";
				} else{
					echo $count . ", ";
				}


				$count++; //increment by 1
			}
			echo "<br />";
			echo "Count: {$count}";
		?>
		<br />
		<br />

		<!-- Do things with odd numbers -->
		<?php
			$count = 0;
			while ($count <= 10){
				if ($count%2 ==1){
					
					echo "ODD, ";
				} else{
					echo $count . ", ";
				}


				$count++; //increment by 1
			}
			echo "<br />";
			echo "Count: {$count}";
		?>

	</body>
</html>