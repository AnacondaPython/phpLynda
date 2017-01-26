<!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN"
		"http://www.w3.org/TR/html4/loose.dtd">

<html lang ="en">
	<head>
	
		<title>NULL http://i.imgur.com/z7LqVfS.png </title>
	</head>
	<body>
		<?php
			$var1 = null;
			$var2 = "";
		?>

		<!-- are these values set to null? var 3 is undefined, has warning -->
		var1 null? <?php echo is_null($var1); ?><br />
		var2 null? <?php echo is_null($var2); ?><br />
		var3 null? <?php echo is_null($var3); ?><br />
		<br />

		<!-- are these values initialize? 1 is yes, otherwise no -->
		var1 is set? <?php echo isset($var1); ?><br />
		var2 is set? <?php echo isset($var2); ?><br />
		var3 is set? <?php echo isset($var3); ?><br />
		<br />

		<!-- is empty is true if null, 0, 0.0, "0", false, or array() -->
		<?php //empty: "", null, 0, 0.0, "0", false, array() ?>
		<?php $var3 ="0"; ?>
		var1 empty? <?php echo empty($var1); ?><br />
		var2 empty? <?php echo empty($var2); ?><br />
		var3 empty? <?php echo empty($var3); ?><br />

		<!-- if you have 0 children when filling out "How many children do you have"?, it might have problems, so you use (isempty and ALSO notnumeric) to allow 0 children but not other cases-->

	</body>
</html>