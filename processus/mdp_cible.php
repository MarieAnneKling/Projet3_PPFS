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
      
      $id_user=$verif['id_user'];
      
      // Comparaison de la réponse saisie ($_POST) avec la bdd - si la réponse à la questions secrète correspond
    
     if ($response === $verif['response']) 
     {
     
      header('Location: ..\pages\mdp_nouveau_index.php?id_user='.$id_user);
      }
      else
      {
      ?>
      <a href = "../index.php"><input type="submit" class="retour_page" value="La réponse à la question secrète est fausse.  Cliquez ici pour retourner à la page de connexion"></a></p> 
    <?php
    }
  }
?>      