<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <?php
      session_start(); //se connecte a la session
      $_SESSION['username'] = "Guillaume";
      echo "Bonjour, " .$_SESSION['username'];
    ?>
    <br>
    <a href="session_start-cyble.php">Clique ici</a>

  </body>
</html>
