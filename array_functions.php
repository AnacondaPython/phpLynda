<!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN"
		"http://www.w3.org/TR/html4/loose.dtd">

<html lang ="en">
	<head>
	
		<title>http://i.imgur.com/JnW54eG.png</title>
	</head>
	<body>
		
		<?php $numbers = array(8,23,15,42,16,4); ?>

		<!-- count, min, max -->
		Count: 		<?php echo count($numbers); ?><br />
		Max value: 	<?php echo max($numbers); ?><br />
		Min value: 	<?php echo min($numbers); ?><br />
		<br />

		<!-- sort, reverse sort the arrays -->
		<pre>
		Sort:		  <?php sort($numbers); print_r($numbers); ?><br />
		Reverse sort: <?php rsort($numbers); print_r($numbers); ?><br />
		<br />
		</pre>

		<!-- useful for CSV baed list, similar to SPLIT function in excel VBA)-->
		Implode: 		<?php echo $num_string = implode(" * ", $numbers); ?><br />
		Explode: 		<?php print_r(explode(" * ", $num_string)); ?><br />
		<br />

		<!-- true false check if item is in array -->
		15 in array?: <?php echo in_array(15, $numbers); //returns T/F ?><br />
		19 in array?: <?php echo in_array(19, $numbers); //returns T/F ?><br />

		<!-- http://php.net/manual/en/ref.array.php   for more information on array functions -->
		<!-- http://i.imgur.com/apKN8op.png -->


	</body>
</html>