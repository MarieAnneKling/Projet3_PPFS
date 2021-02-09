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

    <h2>Récupérez votre compte et changez votre mot de passe</h2><br/>           
 
        <form action="..\processus\mdp_cible.php" method="post" >
         
         <p><label for="username">Saisissez votre nom d'utilisateur</label><input type="text" name="username" id="username" class="champ_saisie" placeholder="Votre nom d'utilisateur" value="" required ></p>
        
                
          
          <p><label for="question">Question secrète</label>
                <select name="question"id="question"class="champ_saisie" placeholder="Votre question secrète" value="" required>
                  <option value="">Cliquez sur la question que vous avez choisie lors de votre inscription dans la liste ci-dessous...</option>
                  <option value="Nom 1er animal de compagnie">Quel était le nom de votre 1er animal de compagnie?</option>
                  <option value="Nom de jeune fille grand-mère maternelle">Quel était le nom de jeune fille de votre grand-mère maternelle?</option>
                  <option value="Marque 1ère voiture">Quelle était la marque de votre 1ère voiture?</option>
                  <option value="Chanteur ou groupe préféré à 17 ans">Quel était votre chanteur ou votre groupe préféré à 17 ans?</option>
                  <option value="Prof préféré au collège">Quel était votre professeur préféré au collège?</option>
                  <option value="Métier arrière-grand-père paternel">Quel était le métier de votre arrière-grand-père paternel?</option>
                </select>
                </p>     
                <p><label for="response">Saisissez votre réponse</label><input type="text" name="response" id="response" class="champ_saisie" placeholder="Votre réponse à la question secrète" value="" required ></p>
                </br>
                <p><input type="submit" name="submit" value="Valider"/></p>
                </br> 
        </form> 
      </div>
    </section>
                
     	<?php include("..\communs\Footer.php");?>
            
    </body>

</html>