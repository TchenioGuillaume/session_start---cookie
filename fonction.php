<?php

//creer une fonction
function afficherTexte()
{
  //ce que fera notre fonction
  $text = "Salut toi <br>";
  echo $text;
}
//afficher la fonction
afficherTexte();

//----------------------------

//creer une fonction avec des arguments
function voitures($marque, $model)
{
  return "La voiture que vous avez choisi et de marque " .$marque . " et son model est " . $model . ". <br>";
}
echo voitures("Porche", "A4");

//----------------------------

//creer une fonction de multiplication
function multiplicateur($nombre)
{
  return $nombre * 10;
}
echo multiplicateur("10");
echo "<br>";

//----------------------------

//la function verifie si la valeur est bien un nombre
function multiplicator($nombres)
{
  //is_numeric verifie si la veleur est bien un nombre
  if (is_numeric($nombres)) {
    return $nombres * 10;
  }else {
    echo "c'est pas un nombre";
  }
}
echo multiplicator("10");
echo "<br>";

//----------------------------

//mettre une fonction dans une fonction
function a()
{
  echo "Ceci est la fonction 'a' <br>";
  function b()
  {
    echo "Ceci est la fonction 'b' <br>";
  }
}
//lances des deux fonctions obligatoirement
a();
b();

//----------------------------

//permettre de compter de x jusqu'a 20
function compter($debut, $fin)
{
  //il faut que : $debut soit inferieur à $fin && $debut soit un entier && $fin soit un entier
  if ($debut < $fin && is_int($debut) && is_int($fin)) {
    //tant que $debut est inferieur ou egal a $fin
    while ($debut <= $fin) {
      echo $debut; //affiche $debut
      $debut++; //rajoute +1 a $debut
    }
  }else {
    echo "Te fou pas dma geul <br>";
  }
}
compter(1, 50);
