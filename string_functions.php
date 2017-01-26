<!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN"
		"http://www.w3.org/TR/html4/loose.dtd">

<html lang ="en">
	<head>
	
		<title>untitled</title>
	</head>
	<body>
		<?php
		//http://i.imgur.com/4WXUdYZ.png
		//http://i.imgur.com/TmtiqrP.png

			$first = "The quick brown fox";
			$second = " jumped over the lazy dog.";

			$third = $first;
			//concatenation of strings third + second
			$third .= $second;
			echo $third

		?>
		<br />

		Lowercase: <?php echo strtolower($third); ?><br />
		Uppercase: <?php echo strtoupper($third); ?><br />
		Uppercase First: <?php echo ucfirst($third); ?><br />
		Uppercase Words: <?php echo ucwords($third); ?><br />

		<br />
		<!-- various outputs for handling strings such as str replace, things after the string, trim, and length-->

		Length: <?php echo strlen($third); ?><br />
		Trim: <?php echo "A" . trim( "B C D ") . "E"; ?><br />
		Find: <?php echo strstr($third, "brown"); ?><br />
		Replace by string: <?php echo str_replace("quick", "super-fast", $third); ?><br />

		<br />
		<!-- various functions for repeating strings, parts of a string, the starting character location of a word, and letters onward from a location-->

		Repeat: <?php echo str_repeat($third, 2); ?><br />
		Make substring: <?php echo substr($third, 5, 10); ?><br />
		Find position: <?php echo strpos($third, "brown"); ?><br />
		Find character: <?php echo strchr($third, "z"); ?><br />

	</body>
</html>