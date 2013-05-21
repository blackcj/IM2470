<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
<link rel="stylesheet" type="text/css" href="problems.css" />
<title>Basic Logic: PHP Problem Set 1.4</title>
</head>

<body>
<h2>Basic Logic: PHP Problem Set 1.4</h2>
 

<form action="" method="get">
Name: <input type="text" name="name">
Age: <input type="text" name="age">
<input type="submit">
</form> 
<?php
if($_GET['name'] != '' && is_numeric($_GET['age'])){
	if($_GET['age'] < 21) {
		echo "Not old enough <br/>";
	} else {
		echo "You may enter <br/>";	
	}
} else {
	echo "Invalid data";	
}


?>





<?php




	// Write a PHP program that asks for the users age. After pressing
	// submit, respond with the word "Allowed" if the age is > 12 or 
	// with the word "Denied" if the age is < 13. Finally, respond with
	// "Invalid age" if the age entered is not numeric. Do not use more 
	// than one document (i.e. the "action" must be in the same script).
?>
</body>
</html>