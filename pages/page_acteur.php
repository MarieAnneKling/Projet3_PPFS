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

        <section id="votes">
            <form action="..\processus\insert_votes.php" method="post">  
            </div>
            <div class="vote_btns">
              <button class="vote_btn vote_like"><i class="far fa-thumbs-up">75</i></button>
              <div class="vote_btn vote_dislike"><i class="far fa-thumbs-down">25</i></div>
            </div>
            
            <?php
            $req=$bdd->prepare('SELECT * FROM votes where id_actor = :id_actor');
            $req->execute(array('id_actor'=>$id_actor));
            $donnees=$req->fetch();

        ?>
            




        </section>  
        <section id="comments">
             
            <form action="..\processus\insert_comment.php" method="post">                
            <p class="post"><label>Commentaires<input type="text" placeholder="Saisissez votre commentaire" name="post" class="champ_saisie"></label></p>
            <p><input type="submit" value="Validez votre commentaire"/></a></p>
            </form>
            
            <?php
            
            $req = $bdd->query('SELECT * FROM posts NATURAL JOIN account ORDER BY date_add DESC LIMIT 0, 10');

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
            ?>

        </section>
        
        <?php include("..\communs\Footer.php");?>
          
    </body>
</html>

