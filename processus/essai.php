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
     
        <?php require ("..\communs\bdd_gbaf.php");?>     
        
        <?php include("..\communs\header.php");?>
        
               
      
        
        <?php
        if (isset($_GET['id_actor']) && isset($_GET['vote']))
           {
           $id_user=$_SESSION['id_user'];
           $id_actor=$_GET['id_actor'];
           $vote=$_GET['vote'];

           $req = $bdd->prepare('SELECT COUNT(*) AS nb_likes FROM votes WHERE id_actor = :id_actor && vote = 1');
           $req->execute(array(
          'id_actor'=>$id_actor
           ));
           $nb_likes = $req->fetch();
          echo $nb_likes['nb_likes'];
        }
        ?>
    </body>
 
        <?php include("..\communs\Footer.php");?>
          
    </body>
</html>