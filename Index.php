<!DOCTYPE html>
<html>

    <head>
        <?php include("head.php");?>
    </head>

    <body>

        <?php include("header.php");?>
         
        <section>

  <div id="container">

    <h2>Connectez-vous à votre espace extranet</h2><br/>           
 
        <form action="Accueil_cible.php" method="post" >
         
          <p><label>Nom d'utilisateur<input type="text" name="username"></label></p>
          
          <p><label>Mot de passe<input type="password" name="password"></label></p>
          
          <p><input type="submit" value="Se connecter"/></p>
          </br> 
</form> 
          
          <p><a href="Inscription_index.php"/><input type="submit" value="Inscrivez-vous sur l'extranet GBAF"/></p>
          
          <p><a href="mdp_index.php"/><input type="submit" value="Mot de passe oublié ?"/></p>
                    
          
</div>
        

    </div>

</section>
                
     	<?php include("footer.php");?>
            
    </body>

</html>