<header>
	<div class="entete">
		<p><div class ="logo_gbaf"><img src="https://user.oc-static.com/upload/2019/07/15/15631755744257_LOGO_GBAF_ROUGE%20%281%29.png" alt="LOGO_GBAF" width="100"></div></p>
		<p>
		<?php 
		if (isset($_SESSION['forname']) AND isset($_SESSION['name']))       
		{   
			echo $_SESSION['forname'] . ' ' . $_SESSION['name']; 
		?>
		<!-- en cas de session connectée, des boutons dans l'entête permettent de modifier les informations personnelles, de se déconnecter et de retourner à la page d'accueil-->
		</p>
		<p><a href="..\pages\presentation_acteurs.php"><input type="submit" class="page_presentation" value="Retourner à la page d'accueil"></a>
		<a href="..\pages\profil_index.php"><input type="submit" class="paramètres" value="Modifier mes informations personnelles"></a>
		<a href="..\communs\deconnexion.php"><input type="submit" class="deconnexion" value="Se déconnecter"></a>
		</p>
		<div class ="titre_gbaf">Le Groupement Banque Assurance Français</div>
  		<?php
		}
			else
		
		{
		?>
		<!-- si la session n'est pas connectée, seuls le logo et le titre du GBAF figurent en en-tête-->
		<div class ="titre_gbaf">Le Groupement Banque Assurance Français</div>
		<?php
		}
		?>
	</div>
</header>