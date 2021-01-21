<?php
session_start();
?>

<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8" />
    <title>Mon super titre</title>
  </head>
  <body>

  <?php require("bdd_gbaf.php");?>
  <p>Bonjour <?php echo $_POST['username']; ?></p> 
                          <!-- Pour récupérer le prénom, on utilise la méthode POST indiquée dans le formulaire_index
                          crée une variable $_POST(un array $_POST) 
                          On récupère ainsi la valeur de name du $_POST indiqué dans le fichier index
                          Pas de paramètres dans l'adresse URL car méthode POST qui ne passe pas par l'URL-->

</body>
</html>



