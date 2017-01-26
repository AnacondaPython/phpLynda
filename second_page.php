<!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN"
		"http://www.w3.org/TR/html4/loose.dtd">

<html lang ="en">
	<head>
	
		<title>Second Page </title>
	</head>
	<body>
		<pre>
			<!-- http://i.imgur.com/3eP9SCr.png, Basically we use print_r ($_GET) shows exactly what associative array values we had in your GET request in the url-->
			<?php
				//print_r($_GET);
				
			?>
		</pre>

		<!-- in the same example, we only grab ID instead of everything with print_r http://i.imgur.com/P5xwM37.png-->
		<?php
			$id = $_GET['id'];
				echo $id;
		?>
		<br />


		<?php
			$company = $_GET['company'];
			echo $company;
		?>
	</body>
</html>