
<?php
session_start();  /* On démarre la session avant toute chose*/
?>

<!DOCTYPE html> <!--indique qu'il s'agit d'une page web html-->
<html>          <!-- balise principale, qui englobe tout le contenu de la page, refermé sur la dernière ligne-->

<!-- lien vers la feuille de style associée-->
<link rel="stylesheet" href="styles/style.css">
    <head>
        <!--Appel du fichier contenant les informations générales non affichées de la page--> 
        <?php include("communs/head.php");?>
    </head>

    <body>
    <!--Appel du fichier contenant l'en-tête-->
    <?php include("communs/header.php");?>
    
        <!--formulaire de connexion à l'extranet et lien vers les pages inscription et mot de passe oublié-->
        <section>
            <div id="formulaire">
                <h2>Connectez-vous à votre espace extranet</h2><br/>           
                    
                <!--balise <form> pour indiquer qu'il s'agit d'un formulaire (!à ne pas oublier), méthod "post" car ne passe pas par l'URL (l'info est récupérée par le formulaire)
                    et l'attribut "action" pour indiquer la page appelée par le formulaire - "class" va permettre d'effectuer la mise en forme en css sur cet élément -->
                        <form action="processus/Accueil_cible.php" method="post"> <!--renvoie vers le fichier de traitement de la connexion-->       
                        <p><label for="username">Nom d'utilisateur</label><input type="text" name="username" id="username" class="champ_saisie" placeholder="Saisissez ici votre nom d'utilisateur" value="" required ></p>
                        
                        <!--balise <label> pour indiquer l'étiquette qui sera affichée devant le champ de saisie du formulaire 
                        et placeholder pour le texte à l'intérieur du champ du formulaire - name correspond au name du fichier de traitement - essentiel de vérifier la correspondance !-->
                        <p><label for="password">Mot de passe</label><input type="password" name="password" id="password" class="champ_saisie" placeholder="Saisissez ici votre mot de passe" value="" required ></p>
                        
                        <!-- cliquer sur ce bouton permet l'envoi des données du formulaire vers le serveur-->
                        <p><input type="submit" name="submit" value="Valider"/></p>
                        </br>
                    </form> 
                    
                    <!-- Liens vers les pages d'inscription et de mot de passe oublié -->
                    <p><a href="pages/inscription_index.php"><input type="submit" class="champ_saisie" value="Vous n'avez pas encore de compte ? Cliquez ici pour vous inscrire sur l'extranet GBAF."></a></p>
                    <p><a href="pages/mdp_index.php"><input type="submit" class="champ_saisie" value="Mot de passe oublié ? Cliquez ici pour récupérer votre compte d'utilisateur."></a></p>
            </div>
            </br>               
        </section>
                
    <!-- le pied de page renvoie à deux pages-->
    <footer id="footer">
	<p>
		<a href="pages/legal_mentions.php">Politique de confidentialité</a>
		|
		<a href="pages/contact.php">Contact</a>
	</p>
    </footer>
        
    </body>
</html>