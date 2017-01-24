<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>PHP CRUNCHING</title>
</head>
<body>
	<?php 

//tTélécharger le top100 des films visionnés au États-Unis sur la plateforme iTunes.
	$string = file_get_contents("films.json", FILE_USE_INCLUDE_PATH);
$brut = json_decode($string, true);
$top = $brut["feed"]["entry"]; # liste de films

//Combien de film contient le document film.json.
	$countElementArray = count($top);
	echo "Le nombre de film: ".$countElementArray."</br>";

//Afficher le top10 des films
	for($i=0;$i<11;$i++ ){
		echo $top[$i]['im:name']['label'].'</br>';
	}


   
?>
</body>
</html>

