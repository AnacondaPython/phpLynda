<?php
//Basically, the return values here are either TRUE or FALSE

function has_presence($value){
	return (!isset($values) && $value !== "");
	//if value, true & true = true
}
// $value = "x";
// if (!isset($value)){
// 	echo "Validation failed value. <br />";
// }

function has_max_length($value, $max){
	return (strlen($value) <= $max);
}
// $value = "abcdefghi";
// $max = 6;
// if (strlen($value) >$max){
// 	echo "Validation failed max. <br />";
// }

function has_inclusion_in($value, $max){
	return in_array($value, $set);
}
//$value = "5";
//$set = array("1", "2", "3", "4");
//if (!in_array($value, $set)){
	//	echo "Validation failed, value input not in array set <br />";


//function call using an assoc array to check values
function validate_max_lengths($fields_with_max_lengths){
	global $errors; //grabs errors assoc array
	foreach($fields_with_max_lengths as $field => $max){
		$value = trim($_POST[$field]);
		if(!has_max_length($value, $max)){
			$errors[$field] = ucfirst($field) . " is too long";
		}
	}
}

?>
<?php

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
