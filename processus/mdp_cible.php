 <?php
session_start();

  //Appel de la base de données :
  require '..\communs\bdd_gbaf.php';

  //Vérification que les données envoyées via POST existent :
  if (isset($_POST['username']) && isset  ($_POST['question'])&& isset  ($_POST['response']))
  {
      //Stockage des POSTS dans des htmlspecialchars pour éviter la faille XSS :
      $username = htmlspecialchars($_POST['username']); 
      $question = htmlspecialchars($_POST['question']); 
      $response = htmlspecialchars($_POST['response']);

      //Récupération de la question secrète de l'utilisateur :
      $req=$bdd->prepare('SELECT * FROM account WHERE username = :username'); 
      $req->execute(array(
        'username' => htmlspecialchars($username),
      ));
      
      $verif = $req->fetch();
      $req->closeCursor();
      
      // Comparaison de la réponse saisie ($_POST) avec la bdd - si la réponse à la questions secrète correspond
    
     if ($response === $verif['response']) 
     {
        $_SESSION['id_user'] = $id_user;
        $_SESSION['username'] = $username;
        $_SESSION['name'] = $name;
        $_SESSION['forname'] = $forname;
        $_SESSION['connecté'] = True;
      header('Location: ..\pages\mdp_nouveau_index.php');
      }
      else
      {
      echo 'La réponse à la question secrète est fausse';
      echo '<a href = "..\index.php"> ' . ' Cliquez ici pour retourner à la page d\'accueil</a>';
      }
  
}
?>         