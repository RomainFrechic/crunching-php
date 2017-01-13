<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>PHP CRUNCHING</title>
</head>
<body>
<?php 
$string = file_get_contents("dictionnaire.txt", FILE_USE_INCLUDE__PATH);

$dico = explode("\n", $string);

foreach ($dico as $key => $value) {
	echo $value;
};


 ?> 	
</body>
</html>