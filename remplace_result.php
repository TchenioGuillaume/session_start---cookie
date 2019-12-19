<?php

//str_replace remplace les caractaire choisis
//ex : dans ce cas il supprime les "ll" et les remplace par rien "" dans la phrase "good golly miss molly!"
$str = str_replace("ll", "", "good golly miss molly!");
echo $str;

$var = str_replace("%p%", "<p>", "%p%Salut%p%");
echo $var;

//----------------------------

//isset verifie si il existe
if (isset($_POST['text']))
{
  $text = $_POST['text'];
}

$debut = str_replace("%h%", "<h1>", "%h%");
$fin = str_replace("%h%", "</h1>","%h%");

//!empty permet de verifier si y'a quelque chose dans le message
//empty permet de verifier si c'est vide
if (!empty($text)) {
  echo $debut . $text . $fin;
}

//----------------------------

if (isset($_POST['text']))
{
  $text = $_POST['text'];
}
$text = str_replace("%p%", "<p>", $text);
$text = str_replace("%/p%", "</p>", $text);

if (!empty($text)) {
  echo $text;
}

//----------------------------
