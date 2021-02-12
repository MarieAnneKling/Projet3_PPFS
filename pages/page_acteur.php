<?php
session_start(); 
?>

<!DOCTYPE html>
<html>
  <!-- lien vers la feuille de style associée-->
  <link rel="stylesheet" href="../styles/style.css">
    <head>
      <!--Appel du fichier contenant les informations générales non affichées de la page--> 
      <?php include("../communs/head.php");?>
    </head>
 
    <body>   
      <!--Appel du fichier contenant l'appel de la base de données-->
      <?php require ("../communs/bdd_gbaf.php");?>     
      
      <!--Appel du fichier contenant l'en-tête-->  
      <?php include("../communs/header.php");?>
      
      <!-- début de la partie présentation des acteurs-->          
      <section id="actor_presentation">
            
      <!--Liste des acteurs obtenue grâce à une requête sur la base de données--> 
        <div class= "actor">
        <?php
      if (isset($_GET['id_actor'])) /*Si l'information de l'id_actor a été récupérée par l'URL*/
      {
        $_SESSION['id_actor'] = $_GET['id_actor']; /* la variable de session est égale 
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
          
      <!--Affichage du total des votes likes et dislikes pour l'acteur grâce à une requête sur la base de données--> 
      <section id="votes">
      <?php
      $req = $bdd->prepare('SELECT COUNT(*) AS nb_likes FROM votes WHERE id_actor = :id_actor && vote = 1');
      $req->execute(array(
        'id_actor'=>$id_actor
        ));
      $nb_likes = $req->fetch();
          
      $req = $bdd->prepare('SELECT COUNT(*) AS nb_likes FROM votes WHERE id_actor = :id_actor && vote = 0');
      $req->execute(array(
        'id_actor'=>$id_actor
        ));
      $nb_dislikes = $req->fetch();
      ?>
        <div class="nb_votes">
          <button class="nb_likes"><i class="far fa-thumbs-up"></i></a><?php echo $nb_likes['nb_likes'];?></button>     
          <button class="nb_dislikes"><i class="far fa-thumbs-down"></i></a><?php echo $nb_dislikes['nb_likes'];?></button>
        </div>
      </section></br>
                   
      <!--insertion d'un commentaire pour cet acteur à l'aide d'un formulaire-->
      <section id="insert_comment">
        <form action="..\processus\insert_comment.php" method="post">                
          <div class="post"><label>Votre commentaire sur cet acteur<input type="text" placeholder="Saisissez votre commentaire" name="post" class="champ_saisie"></label></div>
          <p><input type="submit" class="button" value="Validez votre commentaire"/></a></p>
          </div>
        </form>
      </section>

      <!--Insertion du vote pour cet acteur en cliquant sur les boutons likes et dilslikes-->  
      <section id="vote">
        <div class="vote_btns">
          <a href="..\processus\insert_votes.php?id_user=$id_user&id_actor=$id_actor&vote=1">Votez pour cet acteur
          <button class="vote_btn vote_like"><i class="far fa-thumbs-up"></i></a><?php echo "";?> 
          </button>          
          <a href="..\processus\insert_votes.php?id_user=$id_user&id_actor=$id_actor&vote=0">
          <button class="vote_btn vote_dislike"><i class="far fa-thumbs-down"></i></a><?php echo "";?></button>
        </div>
      </section><br> 
         
        <!--affichage des 10 derniers commentaires pour cet acteur grâce à une requête sur la base de données-->
        <section id="view_comment">
          <?php
          $req = $bdd->prepare('SELECT * FROM posts NATURAL JOIN account WHERE id_actor = :id_actor ORDER BY id_user DESC LIMIT 0, 10');
          $req->execute(array(
            'id_actor'=> $id_actor
            ));
          while ($donnees = $req->fetch())
          {
            echo '<div class=view_comm><div class="forname">Posté par '.' '.$donnees['forname'].' '.'le'.' '.$donnees['date_add'].'</div>'; 
            echo '<div class="comment">'.nl2br(htmlspecialchars($donnees['post'])).'</div></div>';  
          }   
          ?>
        </section>  
          
        <!--Appel du fichier contenant le pied de page-->   
        <?php include("../communs/footer.php");?>
          
    </body>
</html>