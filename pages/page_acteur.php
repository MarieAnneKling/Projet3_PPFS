<?php
session_start();
?>

<!DOCTYPE html>
<html>
<link rel="stylesheet" href="..\styles\style.css" />
    <head>
        <?php include("..\communs\head.php");?>
    </head>

    <body>   
        
       
        <div id="container">
        <?php require ("..\communs\bdd_gbaf.php");?>     
        
        <?php include("..\communs\header.php");?>
                      
        <section id="actor_presentation">
            <div class= "actor">
            
            <?php
            if (isset($_GET['id_actor']))
            {
            $_SESSION['id_actor'] = $_GET['id_actor'];
            $id_actor=$_SESSION['id_actor'];
            $req=$bdd->prepare('SELECT * FROM actors WHERE id_actor = :id_actor');
            $req->execute(array('id_actor'=>$id_actor));
            $donnees=$req->fetch();

            echo '<img class="img_actor" src='.$donnees["logo"].'>';
            echo '<h2>' .$donnees["actor_name"]. '</h2>' ; ?>
            <div class="actor_description"><?php echo '<p>' .$donnees["description"]. '</p></div>'; 
            }
            ?>
            
          </section>

          <section id="votes">
           <!--Total des votes pour l'acteur--> 
           
                       
              <div class="vote_btns">
              <a href="..\processus\insert_votes.php?id_user=$id_user&id_actor=$id_actor&vote=1">
              <button class="vote_btn vote_like"><i class="far fa-thumbs-up"></i></a><?php echo "1";?> 
              </button>
                       
              <a href="..\processus\insert_votes.php?id_user=$id_user&id_actor=$id_actor&vote=0">
              <button class="vote_btn vote_dislike"><i class="far fa-thumbs-down"></i></a><?php echo "2";?></button>
              </div>

          <!--insertion d'un commentaire à l'aide d'un formulaire-->
          <section id="insert_comment">
            <form action="..\processus\insert_comment.php" method="post">                
            <div class="post"><label>Commentaires<input type="text" placeholder="Saisissez votre commentaire" name="post" class="champ_saisie"></label></div>
            <p><input type="submit" value="Validez votre commentaire"/></a></p>
            </form>
            </div>
          </section>

            <!--affichage des 10 dernierscommentaires-->
            <section id="view__comment">
            <?php
            $req = $bdd->prepare('SELECT * FROM posts NATURAL JOIN account WHERE id_actor = :id_actor ORDER BY id_user DESC LIMIT 0, 10');
            $req->execute(array(
              'id_actor'=> $id_actor
            ));
            while ($donnees = $req->fetch())
            {
            echo '<div class=view_comm><div class="forname">'.$donnees['forname'].'</div>'; 
            echo '<div class="date_comment">Le '.$donnees['date_add'].'</div>';
            echo '<div class="comment">'.nl2br(htmlspecialchars($donnees['post'])).'</div></div>';  
            }   
            ?>

                        

</section>   
        </section>
        
        <?php include("..\communs\Footer.php");?>
          
    </body>
</html>

