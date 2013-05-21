<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
<title>Collecting Input: PHP Problem Set 1.1</title>
<link rel="stylesheet" type="text/css" href="problems.css" />
</head>

<body>
<h2>Collecting Input: PHP Problem Set 1.1</h2>



<form action="" method="get">
Name: <input type="text" name="fname">
Age: <input type="text" name="age">
<input type="submit">
</form> 

<?php
	// Write a PHP program that takes the content 
	// From an input field and displays it under the
	// form after pressing the submit button. Do not
	// use more than one document (i.e. the "action"
	// must be in the same script).
	if($_GET["fname"] != ""){
		echo $_GET["fname"];
		echo $_GET["age"];
	}
?>

</body>
</html>