<header>

	<div class="entete">
  
  		<p><div class ="logo_gbaf"><img src="https://user.oc-static.com/upload/2019/07/15/15631755744257_LOGO_GBAF_ROUGE%20%281%29.png" alt="LOGO_GBAF" width="100"></div></p>
  
  		<p><?php 
		if (isset($_SESSION['forname']) AND isset($_SESSION['name']))       
		{   
    	echo $_SESSION['forname'] . ' ' . $_SESSION['name']; 
 	 	?></p>
  
  		<p><a href="..\pages\profil_index.php"/><input type="submit" class="paramètres" value="Modifier mes informations personnelles"></a></p>
  		<p><a href="..\communs\deconnexion.php"/><input type="submit" class="deconnexion" value="Se déconnecter"></a></p>
  		
  		<div class ="titre_gbaf">Le Groupement Banque Assurance Français</div>
  		
  		<?php
  		}
		else
		{
		?>
		<div class ="titre_gbaf">Le Groupement Banque Assurance Français</div>
  		<?php
		}
		?>
	</div>
</header>
      	