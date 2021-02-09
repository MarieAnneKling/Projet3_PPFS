<?php
session_start();
 
 require 'bdd_gbaf.php';

    if (isset($_POST['id_user']) && isset ($_POST['id_actor']) && isset ($_POST['date_add()']) && isset  ($_POST['post']))
   {
      if (isset($_POST['submit'])) // vérification que le bouton "valider" a été cliqué
        {
        //Stockage des POSTS dans des htmlspecialchars + password_hash pour éviter la faille XSS :
        
        $id_user = htmlspecialchars($_POST['id_user']); 
        $id_user = htmlspecialchars($_POST['id_user']); 

        $post = htmlspecialchars($_POST['post']);
    
        //Requête pour insérer des nouveaux commentaires dans la base de données :
        /*$bdd->exec('INSERT INTO posts(id_user, id_actor, date_add, post') VALUES(:id_user, :id_actor, :date_add, :post)); 
        echo (le post a été ajouté!);
      
          
          header('Location:Presentation_acteurs_gbaf.php');
      
     
      }else header('Location:Accueil_index.php'); 
    }

require 'bdd_gbaf.php';
$req = $bdd->query('SELECT * FROM posts NATURAL JOIN account ORDER BY date_add DESC LIMIT 0, 5');

while ($donnees = $req->fetch())
{

?>
<div class="commentaires">
 <p><?php echo $donnees['forname']; ?></p>
 <p>le <?php echo $donnees['date_add']; ?></p>
 <p>
<?php
    // On affiche le contenu du post
    echo nl2br(htmlspecialchars($donnees['post']));
}          