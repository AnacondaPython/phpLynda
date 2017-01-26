<?php
//Summary: http://i.imgur.com/CAawZWP.png
//This program checks userinput is clean (password too long, username blank)
//using functions defined and passing the assoc array dictionary values

require_once("included_functions.php");
require_once("validation_functions.php");

$errors=array();
$message = "";



//check for submit action
if (isset($_POST['submit'])){
	
	//grab the post data
	$username = trim($_POST["username"]);
	$password = trim($_POST["password"]);

	//store post data in array, check for errors using function
	$fields_required = array("username", "password");
	foreach ($fields_required as $field) {
		$value = trim($_POST[$field]);
		if (!has_presence($value)){
			$errors[$field] = ucfirst($field) . " can't be blank";
		}
	}

	//store data in another array, check if too long username and password
	$fields_with_max_lengths = array("username" => 30, "password" => 8);
	validate_max_lengths($fields_with_max_lengths);

		if (empty($errors)) {

		// try to login
		if ($username == "kevin" && $password == "secret"){
			//successful login
			redirect_to("basic.html");
		} else {
			$message = "There were some errors";
		}
	}

} else{
	$username = "";
	$message = "Please log in";
}
?>

<!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN"
		"http://www.w3.org/TR/html4/loose.dtd">

<html lang ="en">
	<head>
	
		<title>untitled</title>
	</head>
	<body>
		<?php echo $message; ?><br />
		<?php echo form_errors($errors); ?>
		<form action="form_with_validation.php" method = "post">
			<!-- modified line to grab username with !@#$%{} chars -->
			Username: <input type = "text" name = "username" value = "<?php echo htmlspecialchars($username);?>" /><br /> 

			Password: <input type = "password" name = "password" value = ""/><br />
			<br />
			<input type ="submit" name="submit" value="Submit" />

		</form>
	</body>
</html>