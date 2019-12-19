<?php session_start(); //se connecte a la session ?>

<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <?php
      session_unset(); //se deconnecte a de la session
    ?>
    <br>
    <a href="session_start-cyble.php">Clique ici pour retourner sur l'index</a>
  </body>
</html>
