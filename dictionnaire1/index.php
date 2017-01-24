<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>PHP CRUNCHING</title>
</head>
<body>
	<?php 

//télécharger un dictionnaire de la langue française
	$string = file_get_contents("dictionnaire.txt", FILE_USE_INCLUDE__PATH);
	$dico = explode("\n", $string);

//Combien de mots contient ce dictionnaire 
	$countElementArray = count($dico);
	echo "Ce Dictionnaire contient: ".$countElementArray." mots.</br>";


//Combien de mots font exactement 15 caractères dans le dictionnaire	
	function longeurCaractere($dico){
		$val = 0;
		foreach ($dico as $key => $value ) {
			if(strlen($value) === 15){
				$val++;
			}
		} 
		echo "Ce Dictionnaire contient: ".strval($val)." de mots avec 15 caractères.</br>";
	}
	longeurCaractere($dico);


//Combien de mots contiennent la lettre « w » 
	function combienDeMotAvcW($dico){
		$nb_mots = count($dico);
		$lettre = array(w,q);
		for($i=0 ; $i<$nb_mots; $i++){
			$nbreMots = $dico[$i];
			$nbreMots = trim($nbreMots);
			$nbreMots = strtr($nbreMots);
			foreach (count_chars($nbreMots,1) as $key => $value) {
				$value_total += $value;
				for($j = 0; $j<$countElementArray; $j++){
					if (chr($key == $lettre[$j])$lettre[$j]+= $value);
				}
			}

		}
	}
	combienDeMotAvcW($dico);
	?> 	

</body>
</html>