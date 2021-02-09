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

        <?php include("..\communs\header.php");?>
         
        <section>

  <div id="formulaire">

    <h2>Changez votre mot de passe</h2><br/>                   
 
        <form action="..\processus\mdp_nouveau_cible.php" method="post" >
         
         <p><label for="new_password">Saisissez votre nouveau mot de passe</label><input type="text" name="new_password" id="new_password" class="champ_saisie" placeholder="Votre nouveau mot de passe" value="" required ></p>
          
          <p><label for="confirm_new_password">Confirmez la saisie de votre nouveau mot de passe</label><input type="text" name="confirm_new_password" id="confirm_new_password" class="champ_saisie" placeholder="Saisissez à nouveau votre mot de passe" value="" required ></p>
                <p><input type="submit" name="submit" value="Valider"/></p>
          </br> 
        </form> 
          </div>
    </section>
                
     	<?php include("..\communs\Footer.php");?>
            
    </body>

</html>

 