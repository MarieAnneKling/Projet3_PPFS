 <?php
 session_start();

	require ('..\communs\bdd_gbaf.php');

		
 		 $id_user = $_SESSION['id_user'];
		 $id_actor = $_SESSION['id_actor'];
		 $vote = $_GET['vote'];		
		 
		 /*$req = $bdd->prepare('SELECT COUNT(*) FROM votes WHERE id_actor = :id_actor && id_user = :id_user');
		 $req->execute(array(
			 'id_user' => $id_user,
			 'id_actor' => $id_actor,
			 ));
		 $vote_nb=$req->fetch();
		 		 
		 if ($vote_nb == 0)
		 {*/
		   	$req = $bdd->prepare('INSERT INTO votes(id_user, id_actor,vote) VALUES(:id_user, :id_actor, :vote)');
    		$req->execute(array(
        	'id_user' => $id_user,
        	'id_actor' => $id_actor,
        	'vote' => $vote
        	));
				
    		header('Location:..\pages\page_acteur.php?id_actor=' . $id_actor);
			/*
		}
		else
		{
			echo "vous avez déjà voté pour cet acteur";
		}
		*/
	?>

