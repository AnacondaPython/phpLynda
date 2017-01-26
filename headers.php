<?php
	header("HTTP 1.1/404 NOT FOUND");
	header("X-Powered-By: none of your business");
?>

<!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN"
		"http://www.w3.org/TR/html4/loose.dtd">

<html lang ="en">
	<head>
	
		<title>Headers http://i.imgur.com/oYiEGUj.png</title>
	</head>
	<body>
		

		<!-- basically, we add headers to the top, print_R to show it in action -->
		<?php 
		// header("HTTP 1.1/404 NOT FOUND")   - wont' work, unless output 
		//buffering was on
		?>

		<pre>
			<?php
			print_r(headers_list());
			?>
		</pre>
	</body>
</html>