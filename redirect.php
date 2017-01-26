
<?php //http://i.imgur.com/CoThnqM.gif  . Function with if else redirect cases
	function redirect_to($new_location){
		header("Location: " . $new_location);
		exit;
	}
	$logged_in = $_GET['logged_in'];
	if ($logged_in == "1"){
	redirect_to("basic.html");
	} else {
		redirect_to("http://www.lynda.com");
	}
?>


<!-- Easy example of 302 redirect
<?php
	//This is how you redirect to a new page
	//http://i.imgur.com/ZO8E1m8.gif
	header("Location: basic.html");
	exit;
?> -->


<!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN"
		"http://www.w3.org/TR/html4/loose.dtd">

<html lang ="en">
	<head>
	
		<title>Redirect</title>
	</head>
	<body>
		
	</body>
</html>