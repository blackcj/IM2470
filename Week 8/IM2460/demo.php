<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
<link rel="stylesheet" type="text/css" href="problems.css" />
<title>Saving Form Data to Server</title>
</head>

<body>
<h2>Demo</h2>

<!-- TODO: Create a form that has a drop down selector with 4 candidates. -->
 
<?php
// http://devzone.zend.com/6/php-101-php-for-the-absolute-beginner/
// WRITE TO FILE
// TODO: Use a form to submit a vote. Only write to the file if the form was submitted.
$file = 'data.txt';
// Append a new person to the file
// TODO: Replace this with a $_GET['candidate'] passed in from the form
$current .= "Mary Johnson\n";	
// Write the contents back to the file
file_put_contents($file, $current, FILE_APPEND);
// END WRITE TO FILE


 

// READ FROM FILE
// Declare array
$data = array();

// Open file
$gb_file = file( 'data.txt' );
 
// Loop through file data and store it in an Array
while( list($line_nums, $line) = each($gb_file) ) {
    $data[] = $line;
}

// var_dump($data);

// Count the number of times each person has been voted for
$maryCount = 0;
$johnCount = 0;
foreach ( $data as $candidate ) {
	if($candidate == "John Smith\n"){
		$johnCount ++;	
	}else if($candidate == "Mary Johnson\n")
	{
		$maryCount++;
	}
}

// Display the results
// TODO: Use jQuery to display the results as a bar graph.
echo "John: " . $johnCount."<br/>";
echo "Mary: " . $maryCount;


?>
</body>
</html>
