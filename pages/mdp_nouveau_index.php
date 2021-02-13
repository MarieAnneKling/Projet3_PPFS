
<!DOCTYPE html>
<html>
<link rel="stylesheet" href="../styles/style.css" />
    <head>
        <?php include("../communs/head.php");?>
    </head>

    <body>

        <?php include("../communs/header.php");?>
         
        <section>

  <div id="formulaire">

    <h2>Changez votre mot de passe</h2><br/>                   
 
        <form action="../processus/mdp_nouveau_cible.php" method="post" >
         <input type="hidden" name="id_user" id="id_user" value="<?php echo $id_user;?>" required ></p>
         <p><label for="new_password">Saisissez votre nouveau mot de passe</label><input type="text" name="new_password" id="new_password" class="champ_saisie" placeholder="Votre nouveau mot de passe" value="" required >
         <p><input type="submit" name="submit" value="Valider"/></p>
          </br> 
        </form> 
          </div>
    </section>
                
     	<?php include("../communs/footer.php");?>
            
    </body>

</html>

 