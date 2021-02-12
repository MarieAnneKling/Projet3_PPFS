<?php
	session_start();
	session_destroy();
	header('Location: ../index.php'); /* Redirection vers la page de connexion du site*/