<?php
//-----------------------
// Declarer une variable
//-----------------------

//creer une variable
$variable = "Hello les gens";
echo $variable;
echo "<br><br>";

//permet d'afficher le type de variable
echo gettype($variable);
echo "<br><br>";

//-----------------------
//***** Tableau *********
//-----------------------

//faire un tableau
$tableau = array('Martine', 'Francis', 'Franck');
//afficher le resultat du tableau
echo $tableau[2];
echo "<br><br>";

//faire un tableau associatif
$tableauAssociatif = [
  "nom" => "Tchenio",
  "prenom" => "Guillaume",
  "age" => 26,
  "ville" => "Lyon",
  "mort" => false
];
//afficher le resultat du tableau associatif
//var_dump($tableauAssociatif);
echo $tableauAssociatif['nom'];
echo $tableauAssociatif['age'];
echo $tableauAssociatif['mort'];
echo "<br><br>";

//Afficher toutes les personnes du tableau
$az = array('Damien', 'Crysal', 'Maxime', 'Khenny', 'Guillaume');

for ($i=0; $i < 5 ; $i++) {
  echo $az[$i] . "<br>";
}
echo "<br>";

//foreach
$ze = [
  "nom" => "Mouse",
  "prenom" => "Mickey",
  "age" => 111,
  "taille (cm)" => 90,
  "couleur de cheveux" => "y'en a pas"
];
foreach ($ze as $key => $value) {
  echo $key . " : " .$value . "<br>";
}

//-----------------------
//***** Condition *******
//-----------------------

//faire une condition
$si = 2;

if ($si > 0) {
  echo "Notre chiffre est plus grand que " .$si;
}elseif ($si > 1) {
  echo "Notre chiffre est plus grand que ".$si;
} else {
  echo "Le chiffre est négatif".$si;
}
echo "<br><br>";

//concatenation
$si = 2;
$chiffre = 0;
echo $si . " est supérieur à ". $chiffre;
echo "<br><br>";

//boucle while
$boucle=0;
while ($boucle <= 10) {
  echo "Ma variable est égale à " . $boucle . "<br>";
  $boucle++; //fait +1 jusqu'a qu'il arrive a 10
}
echo "<br>";

//boucle for (pas besoin de declarer une variable)
for ($i=0; $i <=10 ; $i++) {
  echo "Ma variable est égale à " .$i . "<br>";
}
echo "<br>";

//verifier si c'est une string - is_string
$exercice = 1;
if (is_string($exercice)) {
  echo "Ma variable est une string";
}else {
  echo "Ma variable n'est pas une string";
}
echo "<br><br>";

//verifier si c'est une string - gettype
$exercice = "Test";
if (gettype($exercice) == "string") {
  echo "Ma variable est une string";
}else {
  echo "Ma variable n'est pas une string";
}
echo "<br><br>";
