 <?php
 session_start();

	require ('..\communs\bdd_gbaf.php');
		 $id_user = $_SESSION['id_user'];
		 $id_actor = $_SESSION['id_actor'];
		 $vote = $_GET['vote'];		
		 		 
         $req = $bdd->prepare('SELECT COUNT(*) AS nb_votes FROM votes WHERE id_actor = :id_actor && id_user = :id_user');
         $req->execute(array(
          'id_actor'=>$id_actor,
		  'id_user'=>$id_user,
		   ));
           $nb_votes = $req->fetch();
		   $vote_exist = $nb_votes['nb_votes'];
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

