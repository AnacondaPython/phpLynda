<?php //http://i.imgur.com/dD4P37n.gif
	//this file basically checks for "submit" from form, grabs username /pw, if a specific login condition met, use redirect function
	//http://i.imgur.com/LxF2biy.png
require_once("included_functions.php");

if (isset($_POST['submit'])){
	//form was submitted
	$username = $_POST["username"];
	$password = $_POST["password"];

	if ($username == "kevin" && $password == "secret"){
		//successful login
		redirect_to("basic.html");
	} else {
		$message = "There were some errors";
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
		<form action="form_single.php" method = "post">
			<!-- modified line to grab username with !@#$%{} chars -->
			Username: <input type = "text" name = "username" value = "<?php echo htmlspecialchars($username);?>" /><br /> 

			Password: <input type = "password" name = "password" value = ""/><br />
			<br />
			<input type ="submit" name="submit" value="Submit" />

		</form>
	</body>
</html>