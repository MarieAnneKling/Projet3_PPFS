<?php
session_start();
$id_user=$_GET['id_user'];
?>

<!DOCTYPE html>
<html>
<link rel="stylesheet" href="../styles/style.css" /><!-- lien vers la feuille de style associée pour la mise en forme de la page -->
    <head>
        <?php include("../communs/head.php");?><!--Appel du fichier contenant les informations générales non affichées de la page-->
    </head>
    </head>

    <body>

        <?php include("../communs/header.php");?><!--Appel du fichier contenant l'en-tête-->
         
        <section>
 <!--Début de la partie formulaire--> 
  <div id="formulaire">

    <h2>Changez votre mot de passe</h2><br/>                   
        <!--balise <form> pour indiquer qu'il s'agit d'un formulaire (!à ne pas oublier), méthod "post" car ne passe pas par l'URL (l'info est récupérée par le formulaire)
        et l'attribut "action" pour indiquer la page appelée par le formulaire - "class" va permettre d'effectuer la mise en forme en css sur cet élément -->
        <form action="../processus/mdp_nouveau_cible.php" method="post" >
         <input type="hidden" name="id_user" id="id_user" value="<?php echo $id_user;?>" required ></p><!--champ caché pour plus de sécurité-->
          
         <!--balise <label> pour indiquer l'étiquette qui sera affichée devant le champ de saisie du formulaire 
            et placeholder pour le texte à l'intérieur du champ du formulaire - name correspond au name du fichier de traitement - essentiel de vérifier la correspondance !-->
         <p><label for="new_password">Saisissez votre nouveau mot de passe</label><input type="text" name="new_password" id="new_password" class="champ_saisie" placeholder="Votre nouveau mot de passe" value="" required >
         
         <!-- cliquer sur ce bouton permet l'envoi des données du formulaire vers le serveur-->
         <p><input type="submit" name="submit" value="Valider"/></p>
          </br> 
        </form> 
          </div>
        <!--fin de la partie formulaire--> 
        </section>
      
        <!--Appel du fichier contenant le pied de page-->          
     	<?php include("../communs/footer.php");?>
            
    </body>

</html>

 