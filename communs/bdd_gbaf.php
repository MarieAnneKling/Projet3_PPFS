<?php
try
{
	/* Connexion à la base de données gbaf*/
	$bdd = new PDO('mysql:host=localhost;dbname=gbaf', 'root', 'root', array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION));
}
	/* arrêt de l'exécution de la page en cas d'erreur*/
catch (Exception $e)
{
	/*affichage du message d'erreur si c'est le cas*/
	die('Erreur:'.$e->getMessage());
}