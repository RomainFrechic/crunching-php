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

	$countElementArray = count($dico);

	echo "Ce Dictionnaire contient: ".$countElementArray." mots";


//Combien de mots font exactement 15 caractères dans le dictionnaire	
	function longeurCaractere($dico){
		$val=0;
	foreach ($dico as $key => $value ) {
      if(strlen($value) === 15){
      	$val++;
      }
     } 
     echo strval($val);
	}
		longeurCaractere($dico);
	?> 	

</body>
</html>