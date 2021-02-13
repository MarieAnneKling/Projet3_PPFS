 <?php
 session_start();

	require ('..\communs\bdd_gbaf.php');//Appel de la base de données

		 // Création des variables de session
		 $id_user = $_SESSION['id_user']; 
		 $id_actor = $_SESSION['id_actor'];
		 $vote = $_GET['vote'];		
		 
		 // Récupération du nombre de vote de l'utilisateur pour l'acteur dans la base de données, avec la création d'une variable nb_votes
         $req = $bdd->prepare('SELECT COUNT(*) AS nb_votes FROM votes WHERE id_actor = :id_actor && id_user = :id_user');
         $req->execute(array(
          'id_actor'=>$id_actor,
		  'id_user'=>$id_user,
		   ));
           $nb_votes = $req->fetch();
		   $vote_exist = $nb_votes['nb_votes'];
		   
		 
		 /* s'il l'utilisateur n'a pas envore voté pour cet acteur, lorsqu'il clique sur l'icône choisi, son vote est inséré dans la base de données
		 sinon, le message "vous avez déjà voté pour cet acteur" s'affiche, et il est redirigé vers la page de présentation des acteurs*/
		 
		 if($vote_exist == 0)
		   {
			$req = $bdd->prepare('INSERT INTO votes(id_user, id_actor,vote) VALUES(:id_user, :id_actor, :vote)');
    		$req->execute(array(
        	'id_user' => $id_user,
        	'id_actor' => $id_actor,
        	'vote' => $vote));
			header('Location:../pages/page_acteur.php?id_actor=' . $id_actor);
		   }
		   else
		   {
		?>
		<a href = "../pages/presentation_acteurs.php"><input type="submit" class="retour_page" value="Vous avez déjà voté pour cet acteur.  Cliquez ici pour retourner sur la page d'accueil de l'extranet"></a></p>
		<?php  
		   }
           ?>

