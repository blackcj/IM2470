<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
<link rel="stylesheet" type="text/css" href="problems.css" />
<title>Basic Logic: PHP Problem Set 1.4</title>
</head>

<body>
<h2>Demo</h2>
 
<?php
// http://devzone.zend.com/6/php-101-php-for-the-absolute-beginner/
// WRITE TO FILE
$file = 'data.txt';
// Append a new person to the file
$current .= "Mary Johnson\n";
// Write the contents back to the file
file_put_contents($file, $current, FILE_APPEND);


 

// READ FROM FILE
// Declare array
$data = array();

// Open file
$gb_file = file( 'data.txt' );
 
// Loop through file data
while( list($line_nums, $line) = each($gb_file) ) {
    $data[] = $line;
}

// var_dump($data);

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

echo $johnCount."<br/>";
echo $maryCount;


/*
for($i = 0; $i < 50; $i++)
{
	if($i % 2 == 0){
		echo "<div style='font-size:" . $i . "px'>Hello</div>";	
	}else {
		echo "<div style='color:blue;font-size:" . $i . "px'>Hello</div>";
	}
}
*/

?>
</body>
</html>