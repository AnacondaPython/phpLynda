

<!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN"
		"http://www.w3.org/TR/html4/loose.dtd">

<html lang ="en">
	<head>
	
		<title>URL encode http://i.imgur.com/vxkow4S.png</title>
	</head>
	<body>
		
		<!-- the first instance of rawurlencode than urlencode for less important specific queries. In the 2nd example the webpage cannot find William+Shakespear file folder -->
		<?php
			$page = "William Shakespear";
			$quote = "To be or not to be";
			$link1 = "/bio/" . rawurlencode($page) . "?quote=" . urlencode($quote);
			$link2 = "/bio/" . urlencode($page) . "?quote=" . rawurlencode($quote);
		
			echo $link1 . "<br />";
			echo $link2 . "Mbr />";
		?>
	</body>
</html>

