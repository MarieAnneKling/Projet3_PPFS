
<!-- Formulaire de contact-->
<!DOCTYPE html>
<html>

<link rel="stylesheet" href="../styles/style.css" /><!-- lien vers la feuille de style associée-->
    <head>
        <?php include("../communs/head.php");?><!--Appel du fichier contenant les informations générales non affichées de la page-->
    </head> 
    <body>
        <?php include("../communs/header.php");?><!--Appel du fichier contenant l'en-tête-->
            <section>
                <div id="formulaire">
                    <form action="#" method="POST">
                    <div class="contact_form">
                        <p><label for="email">Votre adresse de messagerie:</label></br>
                        <input type="text" id="email" class="textarea" name="email" required/></p>
                        <p><label for="message">Votre message: </label></br>
                        <textarea name="message" rows="4" cols="100" id="message" name="message" class="textarea" placeholder="Saisissez ici votre message" required/></textarea></p>
	 		        </div>
	 		        <div class="rgpd">
                    <p><input type="checkbox" id="rgpd" name="rgpd" class="rgpd" required/>
                    <label for="rgpd">J'ai pris connaissance de la politique de confidentialité du site et j'accepte que mes données personnelles soient exploitées dans le cadre de ma demande de contact.</label></p></br>
                    </div>
                    <p><button type="submit" class="button">Envoyer</button></p>    
                    </form>     
                </div>
                <a href = "..\index.php"><input type="submit" class="retour_page" value="Cliquez ici pour retourner sur la page de connexion"></a></p>
         </section>  
       <!--Appel du fichier contenant le pied de page-->   
       <?php include("../communs/footer.php");?>
    </body>
 </html>