<!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN"
		"http://www.w3.org/TR/html4/loose.dtd">

<html lang ="en">
	<head>
	
		<title>Continue http://i.imgur.com/thdi5C3.png</title>
	</head>
	<body>
		<!-- Continue just goes back to next loop iteration once occurs-->
		<?php
			//initialize, condition, increment
			for ($count =0; $count<=10; $count++){
				if ($count ==5){
					continue;
				}
				echo $count . ", ";
			}
		?>
		<br />
		<br />


		<!-- equivalent as above, but this time skip odd numbers -->
		<?php
			//initialize, condition, increment
			for ($count =0; $count<=10; $count++){
				if ($count%2 ==0){ continue;}
				echo $count . ", ";
			}
		?>
		<br />
		<br />

		<!--$count++ is an optional clause in while loop, you MUST specify this before a continue else infinite loop-->
		<?php //what's wrong with this?
			$count = 0;
			while ($count <=10){
				if ($count ==5){
					$count++; //should this line be omitted, inifnite loop
					continue;
				}
				echo $count . ", ";
				$count++;
			}
		?>
		<br />
		<br />

		<!-- Loop inside a loop with a continue clause, with continue. Continue makes 1-5 go to 3-0. Also, skip 1-3, and 3-3 in the second loop-->
		<?php
		for ($i=0; $i<=5; $i++) {
			if ($i % 2 ==0) { continue;}
			for ($k=0; $k<=5; $k++){
				if ($k==3) {continue ;}
				echo $i . "-" . $k . "<br />";
			}
		}
		?>
		<br />
		<br />


		<!-- loop inside a loop, but with continue(1) and continue(2) clauses. Continue(1) is implicitly default. 
		Continue(2) on the forloop continues twice (past the K loop and into I loop)-->
		<?php //loop inside a loop with continue
		for ($i=0; $i<=5; $i++) {
			if ($i % 2 ==0) { continue(1);}
			for ($k=0; $k<=5; $k++){
				if ($k==3) {continue(2);}
				echo $i . "-" . $k . "<br />";
			}
		}
		?>
		<br />
		<br />

	</body>
</html>