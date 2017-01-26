<!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN"
		"http://www.w3.org/TR/html4/loose.dtd">

<html lang ="en">
	<head>
	
		<title>HTML encoding</title>
	</head>
	<body>

		<!-- encoding special chars like <>& -->
		<?php 
		$linktext ="<Click> & learn more";
		?>

		<a href ="">
			<?php echo htmlspecialchars($linktext); ?>
		</a>
		<br />


		<!-- encoding even more, unicode chars like †¥ http://i.imgur.com/RUHBW63.png-->
		<?php
		$text = "†¥";
		echo htmlentities($text);
		?>
		<br />


		<!-- urlencoding vs htmlspecialchars. Specialchars are for the text, urlencode for hyperlinks http://i.imgur.com/80RSkab.png-->
		<!-- it doesn't convert things like <>& to   &lt, &gt , &amp for the URL string since it doens't need too-->
		<?php //what to use when
		$url_page = "php/created/page/url.php";
		$param1 = "This is a string with < >";
		$param2 = "&#?*$[]+ are bad characters";
		$linktext = "<Click> & learn more";

		$url = "http://localhost/";
		$url .= rawurlencode($url_page);
		$url .= "?" . "param1=" . urlencode($param1);
		$url .= "&" . "param2=" . urlencode($param2);
		?>

		<a href="<?php echo htmlspecialchars($url); ?>">
			<?php echo htmlspecialchars($linktext); ?>
		</a>
	</html>