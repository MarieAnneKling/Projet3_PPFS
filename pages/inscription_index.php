<!DOCTYPE html>
<html>
<!-- lien vers la feuille de style associée pour la mise en forme de la page -->
<link rel="stylesheet" href="../styles/style.css" />
    <head>
        <!--Appel du fichier contenant les informations générales non affichées de la page--> 
        <?php include("../communs/head.php");?>
    </head>

    <body>
      <!--Appel du fichier contenant l'en-tête--> 
      <?php include("../communs/header.php");?>
        
      <section>
      <!--Début de la partie formulaire--> 
      <div id="formulaire">
            <h2>Inscrivez-vous à l'extranet GBAF</h2><br/>           
              
              <!--balise <form> pour indiquer qu'il s'agit d'un formulaire (!à ne pas oublier), méthod "post" car ne passe pas par l'URL (l'info est récupérée par le formulaire)
              et l'attribut "action" pour indiquer la page appelée par le formulaire - "class" va permettre d'effectuer la mise en forme en css sur cet élément -->
              <form action="../processus/Inscription_cible.php" method="post">
               
               <!--balise <label> pour indiquer l'étiquette qui sera affichée devant le champ de saisie du formulaire 
               et placeholder pour le texte à l'intérieur du champ du formulaire - name correspond au name du fichier de traitement - essentiel de vérifier la correspondance !-->
                <p><label for="name">Nom</label><input type="text" name="name" id="name" class="champ_saisie" placeholder="Saisissez ici votre nom" value="" required ></p>
                <p><label for="forname">Prénom</label><input type="text" name="forname" id="forname" class="champ_saisie" placeholder="Saisissez ici votre prénom" value="" required ></p>
                <p><label for="username">Nom d'utilisateur</label><input type="text" name="username" id="username" class="champ_saisie" placeholder="Saisissez ici votre nom d'utilisateur" value="" required ></p>
                <p><label for="password">Mot de passe</label><input type="password" name="password" id="password" class="champ_saisie" placeholder="Saisissez ici votre mot de passe" value="" required ></p>
                
                <!--balise <select>	pour insérer une liste déroulante et <option> pour les éléments de la liste-->
                <p><label for="question">Question secrète</label>
                <select name="question"id="question"class="champ_saisie" value="" required>
                  <option value="">Choisissez une question dans la liste ci-dessous...</option>
                  <option value="Nom 1er animal de compagnie">Quel était le nom de votre 1er animal de compagnie?</option>
                  <option value="Nom de jeune fille grand-mère maternelle">Quel était le nom de jeune fille de votre grand-mère maternelle?</option>
                  <option value="Marque 1ère voiture">Quelle était la marque de votre 1ère voiture?</option>
                  <option value="Chanteur ou groupe préféré à 17 ans">Quel était votre chanteur ou votre groupe préféré à 17 ans?</option>
                  <option value="Prof préféré au collège">Quel était votre professeur préféré au collège?</option>
                  <option value="Métier arrière-grand-père paternel">Quel était le métier de votre arrière-grand-père paternel?</option>
                </select>
                </p>     
                <p><label for="response">Réponse à la question secrète</label><input type="text" name="response" id="response" class="champ_saisie" placeholder="Saisissez ici votre réponse à la question secrète" value="" required ></p>
                </br>
                <!-- cliquer sur ce bouton permet l'envoi des données du formulaire vers le serveur-->
                <p><input type="submit" name="submit" value="Valider"/></p>

                </br>
              </form> 
          </div>
      <!-- Fin de la partie formulaire--> 
      </section>
      
      <!--Appel du fichier contenant le pied de page-->   
      <?php include("../communs/footer.php");?>            
    </body>
</html>