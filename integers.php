<!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN"
		"http://www.w3.org/TR/html4/loose.dtd">

<html lang ="en">
	<head>
		<!-- http://i.imgur.com/lPEtAbZ.png -->
	
		<title>untitled</title>
	</head>
	<body>
		<?php
			$var1 = 3;
			$var2 = 4;
		?>

		<!-- order of operations var math -->

		Basic Math: <?php echo ((1 + 2 + $var1) * $var2) / 2 - 5; ?><br />
		<br />

		<!-- basic operations -->
		Absolute value: <?php echo abs(0 - 300); ?><br />
		Exponential: <?php echo pow(2,8); ?><br />
		Square root: <?php echo sqrt(100); ?><br />
		Modulo: <?php echo fmod(20,7); ?><br />
		Random: <?php echo rand(); ?><br />
		Random (min,max): <?php echo rand(1,10); ?><br />
		<br />

		<!-- various shorthand math operations -->
		+= : <?php $var2 += 4; echo $var2; ?><br />
		-= : <?php $var2 -= 4; echo $var2; ?><br />
		*= : <?php $var2 *= 4; echo $var2; ?><br />
		/= : <?php $var2 /= 4; echo $var2; ?><br />
		<br />

		<!-- decrement and increment shorthand -->
		Incremenet: <?php $var2++; echo $var2; ?><br />
		Decrement: <?php $var2--; echo $var2; ?><br />

		<br />
		<?php 
			echo 1 + "1"
			//echo 1 + "2 houses" //sloppy programming, grabs first number, throws rest out
		?>
	</body>
</html>