<?php
session_start();
?>
<!-- Formulaire de contact-->
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
                    <form action="#" method="POST" >
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
         </section>  
       <?php include("../communs/footer.php");?>
    </body>
 </html>