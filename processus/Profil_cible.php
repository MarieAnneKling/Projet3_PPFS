<?php
session_start();

require '..\communs\bdd_gbaf.php';

$id_user = $_SESSION['id_user'];

  //changement du nom d'utilisateur :
  
  $username = htmlspecialchars($_POST['new_username']);

    $req = $bdd->prepare('UPDATE account SET username =  :new_username WHERE id_user = :id_user ');
    $req->execute(array(
        'id_user' => $id_user,
        'new_username' =>$username
    ));

  //changement du nom :
  
  $name = htmlspecialchars($_POST['new_name']);

    $req = $bdd->prepare('UPDATE account SET name =  :new_name WHERE id_user = :id_user');
    $req->execute(array(
        'id_user' => $id_user,
        'new_name' =>$name
    ));
  $_SESSION['name'] = $name;

//changement du prénom :
  $forname = htmlspecialchars($_POST['new_forname']);

    $req = $bdd->prepare('UPDATE account SET forname =  :new_forname WHERE id_user = :id_user');
    $req->execute(array(
        'id_user' => $id_user,
        'new_forname' =>$forname
    ));
  $_SESSION['forname'] = $forname;

  //changement du mot de passe :
  $password = password_hash($_POST['new_password'], PASSWORD_DEFAULT);
  
    $req = $bdd->prepare('UPDATE account SET password =  :new_password WHERE id_user = :id_user');
    $req->execute(array(
        'id_user' => $id_user,
        'new_password' =>$password,
    ));

  //changement de la question secrète :
  $question = htmlspecialchars($_POST['new_question']);

    $req = $bdd->prepare('UPDATE account SET question =  :new_question WHERE id_user = :id_user');
    $req->execute(array(
        'id_user' => $id_user,
        'new_question' =>$question
    ));

  //changement de la réponse à la question secrète :
  $response = htmlspecialchars($_POST['new_response']);

    $req = $bdd->prepare('UPDATE account SET response =  :new_response WHERE id_user = :id_user');
    $req->execute(array(
        'id_user' => $id_user,
        'new_response' =>$response
    ));
    ?>
    <a href = "..\pages\presentation_acteurs.php"><input type="submit" class="retour_page" value="Vos modifications ont bien été prises en compte.  Cliquez ici pour retourner à l'accueil du GBAF"></a></p>