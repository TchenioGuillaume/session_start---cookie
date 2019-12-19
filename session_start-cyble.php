<?php session_start(); //se connecte a la session ?>

<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <?php
      // mauvaise facon
      if(isset($_SESSION['username'])) //isset = est ce qu'il existe ?
      {
        echo "coucou " . $_SESSION['username'] . "<br>";
        echo "<a href='session_start-deconnexion.php'>clique ici pour te deconnecter</a>";
      }else {
        echo "Vous etes deconecter";
      }
    ?>

    <?php
      // bonne facon
      if(!empty($_SESSION)) //!empty = verifie qu'il n'est pas vide
      {
        echo "coucou " . $_SESSION['username'] . "<br>";
        echo "<a href='session_start-deconnexion.php'>clique ici pour te deconnecter</a>";
      }else {
        echo "Vous etes deconecter";
      }
    ?>

  </body>
</html>
