

<!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN"
		"http://www.w3.org/TR/html4/loose.dtd">

<html lang ="en">
	<head>
	
		<title>Page 1 http://i.imgur.com/6KQE5c8.gif</title>
	</head>
	<body>
		
		<?php $link_name = "Second Page"; ?>
		<?php $id = 5; ?>
		<?php $company = "Johnson & Johnson"; ?>

		<!-- send link to page 2 for _GET. & is a special char, so use "echo urlencode" , spaces become "+" sign -->
		<a href = "second_page.php?id=<?php echo $id; ?>
		&company=<?php echo rawurlencode($company); ?>">
		<?php echo $link_name; ?></a>

		<!-- adding rawurlencode instead of urlencode adds this: http://i.imgur.com/655AMSs.png -->

	</body>
</html>

