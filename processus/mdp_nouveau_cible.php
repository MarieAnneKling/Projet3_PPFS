<?php

  //Démarrage de session avant toute chose :
  session_start();
  
  $id_user=$_POST['id_user'];
  $password = password_hash($_POST['new_password'], PASSWORD_DEFAULT);


  //Appel de la base de données :
  require '..\communs\bdd_gbaf.php';
    // Préparation et exécution de la requête à la base de données pour mettre à jour le nouveau mot de passe
    $req = $bdd->prepare('UPDATE account SET password = :new_password WHERE id_user = :id_user');
    $req->execute(array(
        'id_user' => $id_user,
        'new_password' =>$password
    ));
  ?>
    <!--Redirection vers la page de présentation des acteurs-->
        <a href = "../index.php"><input type="submit" class="retour_page" value="Votre mot de passe a bien été modifié.  Cliquez ici pour retourner à la page de connexion"></a></p>