<!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN"
		"http://www.w3.org/TR/html4/loose.dtd">

<html lang ="en">
	<head>
	
		<title>Validation Errors http://i.imgur.com/2rjYn6s.png</title>
	</head>
	<body>

	<?php
		
		//accumulate errors and store
		$errors = array();
		
		// * presence
		// use trim() so empty spaces don't count
		// use === to avoid false positives
		// empty() would consider "0" to be empty
		$value = trim("");
		if (!isset($value) || $value === "") {
			$errors['value'] = "Value can't be blank";
		}
		
		// * string length
		// minimum length
		$value = "ab";
		$min = 3;
		if (strlen($value) < $min) {
			$errors['valueZ'] = "Value must be greater than 3";
		}
		?>

		<?php // commented out error reporting,
			//if (!empty($errors)) {
				// redirect_to("first_page.php");
			// 	include("form.php");
			// } else {
			// 	include("success.php");
			// }

			//accumulate errors and add to $output
			function form_errors($errors=array()) {
				$output = "";  //intialize
				if (!empty($errors)) {
				  $output .= "<div class=\"error\">";
				  $output .= "Please fix the following errors:";
				  $output .= "<ul>";
				  foreach ($errors as $key => $error) {
				    $output .= "<li>{$error}</li>";  //outputs each dictionary value
				  }
				  $output .= "</ul>";
				  $output .= "</div>";
				}
				return $output;
			}
		?>
		<?php echo form_errors($errors); ?>

	</body>
</html>