 <?php
 session_start();

	require ('..\communs\bdd_gbaf.php');

	if (isset($_POST['post']))
	{
		
		$id_user = $_SESSION['id_user'];
		$id_actor = $_SESSION['id_actor'];
		$post = htmlspecialchars($_POST['post']);
    	
	    $req = $bdd->prepare('INSERT INTO posts(id_user, id_actor, date_add, post) VALUES(:id_user, :id_actor, now(), :post)');
    	$req->execute(array(
        'id_user' => $id_user,
        'id_actor' => $id_actor,
        'post' => htmlspecialchars($post)
        ));
    	$req->closeCursor();
    	
            
    	header('Location:..\pages\page_acteur.php?id_actor=' . $id_actor);	
		
		}
?>