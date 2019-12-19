url du codeshare : https://codeshare.io/DFS15PHP

Paquets nécessaires pour nos projets en PHP :
-	apache2
- php7.0 ou 7.2
- libapache2-mod-php7.0 ou 7.2

Pour activer les erreurs PHP :
sudo nano /etc/php/7.0(ou 7.2)/apache2/php.ini
Une fois dedans, faire un "CTRL + W" et taper "display_errors", puis
répéter l'opération puis passer :
display_errors : off en on
display_startup_errors : off en on

COMMANDE MAGIQUE : sudo service apache2 restart
Permet de redémarrer le serveur avec les modifications/paquets modifiés
N'hésitez pas à la lancer.

########### PHP ###########

Connaître le type d'une variable :
gettype($variable)

Les différents types :
- string
- interger (int)
- float (double)
- array

Les différents array :
$tableau = array ("Salade", "Tomates", "Courgette"); ====> Tableau numératif
echo $tableau[2]


Les types de tableaux: http://php.net/manual/fr/language.types.array.php

#Numératif
Ex:
<?php
// initialisation d 'une variable
$variable = array ("Mummy", "Daddy", "Sisters", "brothers");

echo $variable[2];
?>

#Associatif.
Ex:
<?php
// initialisation d 'une variable
$variable = [
    "nom" => "Dede",
    "prenom" => "Jaja",
    "age" => 35,
    "ville" => "Falaise",
    "alive ?" => true
];

echo $variable["nom"];
echo $variable["prenom"];
?>

---------------------------------------

les structures de controles sous php: http://php.net/manual/fr/language.control-structures.php

########### LES SESSIONS ###########

Initialiser une session :
session_start();  -----> PREMIERE ligne à écrire.

Enregistrer une information en session :
$_SESSION['CLEF'] = "VALEUR";

Afficher cette dite-infirmation :
echo $_SESSION['CLEF'];

Vérifier la connexion :
if(!empty($_SESSION)) {
    echo "Haha, c'était un piège ! Je sais que tu t'appelles " . $_SESSION['username'] . '<br>';
    echo "<a href='logout.php'>Déconnexion</a>";
} else {
    echo "Vous n'êtes pas connecté !";
}

Mini-TP :

Vous allez devoir générer un formulaire (tout d'abord en GET) qui
aura au minimum 6 inputs, et vous devrez faire une sorte de paragraphe
en récupérant toutes ces inputs.
Exemple : Vous vous appelez PRENOM, vous habitez dans la ville VILLE,
vous avez AGE ans, etc etc

Petit bonus : Vous pouvez faire faire un choix à la personne sur un
input. Par exemple, vous pouvez mettre un input type="text" qui demande
si la personne a des enfants, et si elle a écrit "oui" ou "non", vous
adapterez le contenu de votre réponse.

Autre bonus :
Vous devrez utiliser différents types d'inputs en plus, comme :
- Un Select
- Deux checkbox
- Un input type radio
- Et plus si affinité
- :>

 ############## LES FONCTIONS ##############
 Créer une fonction :
 function nomDeLaFonction() {
    // Actions
}
