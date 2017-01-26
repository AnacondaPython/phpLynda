<!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN"
		"http://www.w3.org/TR/html4/loose.dtd">

<html lang ="en">
	<head>
	
		<title>Functions Scope http://i.imgur.com/sjuyEUk.png</title>
	</head>
	<body>

		<!-- global variable $bar is used by function -->
		<?php
		$bar = "outside"; //globalscope
		function foo (){
			global $bar;
			if (isset($bar)){
				echo "foo:" . $bar . "<br />";
			}
			$bar = "inside"; //localscope
		}

		//$bar is in main scope, outputs $outside
		echo "1: " . $bar . "<br />";
		//function foo pulls in global $bar, isset output, changes $bar to inside
		foo();
		//output inside
		echo "2: " . $bar . "<br />";
		?> 
	</body>
</html>