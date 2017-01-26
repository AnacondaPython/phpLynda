<!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN"
		"http://www.w3.org/TR/html4/loose.dtd">

<html lang ="en">
	<head>
	
		<title>untitled</title>
	</head>
	<body>
		<!-- associative array for POST requests-->
		<!-- http://i.imgur.com/7lSo8LV.gif-->
		<!-- this sends data, using form action, "post" to form_processing.php. Going to form.php via URL would be a $_GET request-->
		<form action="form_processing.php" method = "post">
			Username: <input type = "text" name = "username" value = "" /><br />
			Password: <input type = "password" name = "password" value = ""/><br />
			<br />
			<input type ="submit" name="submit" value="Submit" />

		</form>
	</body>
</html>