<!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN"
		"http://www.w3.org/TR/html4/loose.dtd">

<html lang ="en">
	<head>
	
		<title>TYPE CASTING http://i.imgur.com/13kLwCj.png</title>
	</head>
	<body>
		Type Juggling <br />
		<!-- string -->
		<?php $count = "2"; ?>
		Type: <?php echo gettype($count); ?><br />

		<!-- gets converted, string to number -->
		<?php $count +=3; ?>
		Type: <?php echo gettype($count); ?><br />

		<!-- String still stays string -->
		<?php $cats = "I have " . $count . " cats."; ?>
		Cats: <?php echo gettype($cats); ?><br />
		<br />



		Type Casting<br /> <!-- defining var type ahead of time -->
		<!-- first method is to set in place-->
		<?php settype($count, "integer"); ?>
		count: <?php echo gettype($count); ?><br />

		<!-- count2 is set to string AS it is being used-->
		<?php $count2 = (string) $count; ?>
		count: <?php echo gettype($count); ?><br />
		count2: <?php echo gettype($count2); ?><br />
		<br />

		<!-- showing the differences, SET-IN-PLACe vs SET-DURING-USE, test2 outputs an integer since it became string temporarily.-->
		<?php $test1 = 3; ?>
		<?php $test2 = 3; ?>
		<?php settype($test1, "string"); ?>
		<?php (string) $test2; ?>
		test1: <?php echo gettype($test1); ?><br />
		test2: <?php echo gettype($test2); ?><br />



	</body>
</html>