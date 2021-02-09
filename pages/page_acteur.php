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
            $req=$bdd->prepare('SELECT * FROM actors where id_actor = :id_actor');
            $req->execute(array('id_actor'=>$id_actor));
            $donnees=$req->fetch();

            echo '<img class="img_actor" src='.$donnees["logo"].'>';
            echo '<h2>' .$donnees["actor_name"]. '</h2>' ; ?>
            <div class="actor_description"><?php echo '<p>' .$donnees["description"]. '</p></div>';
            }
            ?>
          </section>

          <!--insertion d'un commentaire à l'aide d'un formulaire-->
          <section id="comment">
            <form action="..\processus\insert_comment.php" method="post">                
            <div class="post"><label>Commentaires<input type="text" placeholder="Saisissez votre commentaire" name="post" class="champ_saisie"></label></div>
            <p><input type="submit" value="Validez votre commentaire"/></a></p>
            </form>
            </div>
          </section>

            <!--affichage des 10 dernierscommentaires-->
            <?php
            $req = $bdd->query('SELECT * FROM posts NATURAL JOIN account ORDER BY date_add DESC LIMIT 0, 10');
            while ($donnees = $req->fetch())
            {
            echo $donnees['forname']; 
            echo $donnees['date_add'];
            echo nl2br(htmlspecialchars($donnees['post']));  
            }   
            ?>

        </section>
        
        <?php include("..\communs\Footer.php");?>
          
    </body>
</html>

