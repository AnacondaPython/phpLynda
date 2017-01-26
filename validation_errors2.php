<!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN"
		"http://www.w3.org/TR/html4/loose.dtd">

<html lang ="en">
	<head>
	
		<title>Validation Errors2 http://i.imgur.com/rgciOJc.png/title>
	</head>
	<body>

	<?php
		
		//Basically, makes an array. calls a function check. Stores error in array. Calls another function for error print
		require_once('validation_functions.php');
		$errors = array();
		
		//$username = trim($_POST["username"]);
		$username = trim("");
		if(!has_presence($username)){ //if false condition
			$errors['username'] = "Username can't be blank";
		}
		?>	
		<?php echo form_errors($errors); ?>

	</body>
</html>