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

//Classement du film Gravity

foreach ($top as $key => $value){
	$film= $value['im:name']['label'];
	$expl = explode(" - ", $film);
	$classement = $key + 1;
	if($expl[0] === "Gravity"){
		echo 'le classement du film Gravity est : '.$classement.'</br>';
	}
}


// Les Réalisateur de Lego Movie 
foreach ($top as $key => $value) {
	$film = $value["title"]["label"];
	$expl = explode(" - ", $film);
	if ($expl[0] === "The LEGO Movie") {
		echo  'Le/les Résalisateurs de The LEGO Movie sont : '. $expl[1].'</br>';
	}
}

// Combien de films sont sortis avant 2000
foreach ($top as $key => $value) {
	$film = $value["im:releaseDate"]["label"];
	$timeCurrent = strtotime($film);
	if($timeCurrent < 2000){
		$valueTime++;
		$valueTime;
	}
	
} 

// Quel est le film le plus récent ? Le plus vieux 
foreach ($top as $key => $value) {
	$titleRecent = $value["title"]["label"];
	$expl = explode(" - ", $titleRecent);
	$titleDate=$expl[0];
	$filmDate = $value["im:releaseDate"]["label"];
	$arrDate[$filmDate] = $titleDate;
} 
krsort($arrDate);
$filmReset = reset($arrDate);
$filmEnd = end($arrDate);

echo 'Le film le plus récent est : '.$filmReset.'</br>';
echo 'Le film le plus vieux est : '.$filmEnd.'</br>';	




// Quelle est la catégorie de films la plus représentée 
// Quel est le réalisateur le plus présent dans le top100 
// Combien cela coûterait-il d'acheter le top10 sur iTunes/de le louer 
// Quel est le mois ayant vu le plus de sorties au cinéma 
// Quels sont les 10 meilleurs films à voir en ayant un budget limité 

?>
</body>
</html>

