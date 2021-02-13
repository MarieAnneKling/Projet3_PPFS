 <?php
 session_start();
 
 require ('..\communs\bdd_gbaf.php');
 
 if (isset($_POST['post']))
 {
	$id_user = $_SESSION['id_user'];
	$id_actor = $_SESSION['id_actor'];
	$post = htmlspecialchars($_POST['post']);
    
	$req = $bdd->prepare('SELECT COUNT(*) AS nb_posts FROM posts WHERE id_actor = :id_actor && id_user = :id_user');
			$req->execute(array(
			 'id_actor'=>$id_actor,
			 'id_user'=>$id_user,
			  ));
			  $nb_posts = $req->fetch();
			  $post_exist = $nb_posts['nb_posts'];
		if($post_exist == 0)
		{
		$req = $bdd->prepare('INSERT INTO posts(id_user, id_actor, date_add, post) VALUES(:id_user, :id_actor, now(), :post)');
    	$req->execute(array(
        'id_user' => $id_user,
        'id_actor' => $id_actor,
        'post' => htmlspecialchars($post)
        ));
    	$req->closeCursor();
    	          
    	header('Location:..\pages\page_acteur.php?id_actor=' . $id_actor);	
		}
		else
		{
		?>
		<a href = "../pages/presentation_acteurs.php"><input type="submit" class="retour_page" value="Vous avez déjà commenté cet acteur.  Cliquez ici pour retourner sur la page d'accueil de l'extranet"></a></p>
		<?php  
		}
	}
		?>