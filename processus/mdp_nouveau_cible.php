<?php

  //Démarrage de session avant toute chose :
  session_start();

  //Appel de la base de données :
  require '..\communs\bdd_gbaf.php';

  if (isset($_POST['new_password']) && isset($_POST['confirm_new_password']))
  {
  $id_user = $_SESSION['id_user'];
  $password = password_hash($_POST['new_password'], PASSWORD_DEFAULT);
  
    $req = $bdd->prepare('UPDATE account SET password = :new_password WHERE id_user = :id_user ');
    $req->execute(array(
        'id_user' => $id_user,
        'new_password' =>$password
    ));


    //Redirection vers la page d'accueil de la gbaf
    echo 'votre mot de passe a bien été modifié';
    echo '<a href = "..\index.php"> ' . ' Cliquez ici pour retourner à la page d\'accueil</a>';
  }
  else
    {
      echo 'erreur';
    }
  ?>