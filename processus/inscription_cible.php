<?php
  //Appel de la base de données :
  require '..\communs\bdd_gbaf.php';

    //Vérification que les données envoyées via POST existent :
    if (isset($_POST['name']) && isset ($_POST['forname']) && isset ($_POST['username']) && isset  ($_POST['password']) && isset  ($_POST['question']) && isset  ($_POST['response']))
    {
    
      if (isset($_POST['submit'])) // vérification que le bouton "Se connecter" a été cliqué
        {
        //Stockage des POSTS dans des htmlspecialchars + password_hash pour éviter la faille XSS :
        $name = htmlspecialchars($_POST['name']); 
        $forname = htmlspecialchars($_POST['forname']); 
        $username = htmlspecialchars($_POST['username']); 
        $password = password_hash($_POST['password'], PASSWORD_DEFAULT);
        $question = htmlspecialchars($_POST['question']);
        $response = htmlspecialchars($_POST['response']);
    
        //Requête pour insérer le nouvel utilisateur dans la base de données :
        $req = $bdd->prepare('INSERT INTO account(name, forname, username, password, question, response) VALUES(:name, :forname, :username, :password, :question, :response)');
        $req->execute(array(
          'name' => $name,
          'forname' => $forname,
          'username' => $username,
          'password' => $password,
          'question' => $question,
          'response' => $response
          ));
         ?> <!--retour vers la page de connexion après confirmation de l'inscription-->
         <a href = "..\index.php"><input type="submit" class="retour_page" value="Votre inscription est à présent effective.  Cliquez ici pour vous connecter à votre espace extranet du GBAF"></a></p>
        <?php   
    }
  }
