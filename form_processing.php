<!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN"
		"http://www.w3.org/TR/html4/loose.dtd">

<html lang ="en">
	<head>
	
		<title>Form Processing</title>
	</head>
	<body>


		<!-- none of this will populate data unless the action comes from form.php-->
		<pre>
		<?php
		print_r($_POST);
		?>
		</pre>
		
		<br />

		<!-- a unoptimized way of setting default values for post requests-->
		<?php
			//good for default values
			if (isset($_POST["username"])){
				$username = $_POST["username"];
			} else {
				$username = "";
			}
			if (isset($_POST["password"])){	
				$password = $_POST["password"];
			} else {
				$password = "";
			}
		?>
		<br />


		<!-- better way using ternary operators, and checking using "submit form action"-->
		<?php 
		//detect form submissions
		if(isset($_POST['submit'])) {
			echo "form was submitted <br/ >";
			//set default values using ternary operator
			// boolean_test? value_if_true: value_if_false
			$username = isset($_POST['username']) ? $_POST['username'] : "";
			$password = isset($_POST['password']) ? $_POST['password'] : "";
		} else {
			$username = "";
			$password = "";
		}
		?>
		<br />
		
		<?php
			echo "{$username}: {$password}";
		?>
	</body>
</html>