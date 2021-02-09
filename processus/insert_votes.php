 <?php
 session_start();

	require ('..\communs\bdd_gbaf.php');

		$id_user = $_SESSION['id_user'];
		$id_actor = $_SESSION['id_actor'];
		$vote = $_GET['vote'];
    	
	    	$req = $bdd->prepare('INSERT INTO votes(id_user, id_actor,vote) VALUES(:id_user, :id_actor, :vote)');
    		$req->execute(array(
        	'id_user' => $id_user,
        	'id_actor' => $id_actor,
        	'vote' => $vote
        	));
				
    		header('Location:..\pages\page_acteur.php?id_actor=' . $id_actor);
    		
	
?>

