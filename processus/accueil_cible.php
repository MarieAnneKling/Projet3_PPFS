<?php
session_start();

  require '..\communs\bdd_gbaf.php';
    
    if (isset($_POST['username']) && isset  ($_POST['password']))
    {
    $reqdata_user = $bdd->prepare('SELECT * FROM account WHERE username = :username'); 
    $reqdata_user->execute(array('username' => $_POST['username']));
    $data_user = $reqdata_user->fetch();
    
    
    $id_user = $data_user['id_user']; 
    $name = $data_user['name']; 
    $forname = $data_user['forname']; 
    $username = $data_user['username']; 
    $passWord = $data_user['password'];
    $question = $data_user['question'];
    $response = $data_user['response'];

    $passWord_verify = password_verify($_POST['password'], $passWord);
     
      if ($passWord_verify == 1) // si le mot de passe correspond
      {
        $_SESSION['id_user'] = $id_user;
        $_SESSION['username'] = $username;
        $_SESSION['name'] = $name;
        $_SESSION['forname'] = $forname;
        $_SESSION['connecté'] = True;
     
      header('Location: ..\pages\presentation_acteurs.php');
      }
    
      else
      {
        ?>
        <a href = "..\index.php"><input type="submit" class="retour_page" value="Le mot de passe ou identifiant est faux.  Cliquez ici pour retourner à la page d'accueil de l'extranet"></a></p>
        <?php
      }
    }
?>      


