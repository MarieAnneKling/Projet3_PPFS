
<?php
session_start();
?>
<!DOCTYPE html>
<html>
<link rel="stylesheet" href="styles\style.css" />
    <head>
        <?php include("communs\head.php");?>
    </head>

    <body>

        <?php include("communs\header.php");?>
         
        <section>
        <div id="formulaire">
        <h2>Connectez-vous à votre espace extranet</h2><br/>           
         
        
        <form action="processus\Accueil_cible.php" method="post">        
        <p><label for="username">Nom d'utilisateur</label><input type="text" name="username" id="username" class="champ_saisie" placeholder="Saisissez ici votre nom d'utilisateur" value="" required ></p>
        <p><label for="password">Mot de passe</label><input type="password" name="password" id="password" class="champ_saisie" placeholder="Saisissez ici votre mot de passe" value="" required ></p>
       
        <p><input type="submit" name="submit" value="Valider"/></p>
        </br>
        </form> 
        <p><a href="pages\Inscription_index.php"/><input type="submit" class="champ_saisie" value="Vous n'avez pas encore de compte ? Cliquez ici pour vous inscrire sur l'extranet GBAF."></a></p>
        <p><a href="pages\mdp_index.php"/><input type="submit" class="champ_saisie" value="Mot de passe oublié ? Cliquez ici pour récupérer votre compte d'utilisateur."></a></p>
    </div>
    </br>               
    </section>
                
     <footer id=Footer>

        <p>
            <a href="pages\legal_mentions.php"/>Politique de confidentialité 
            |
            <a href="pages\contact.php"/>Contact
        <p/>
</footer>
            
  </body>

</html>

