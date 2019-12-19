<?php

//permet de creer un cookie, lui donnee une clé, une valeur, et un temps
setcookie("username", "Toto", time()+365*24*3600);

//pour mettre a jours le cookie on en crée un autre et ca l'ecrase
setcookie("username", "Tata", time()+365*24*3600);

//j'affiche le contenu du cookie 
echo $_COOKIE['username'];
