<?php
session_start();

if (isset($_SESSION['user_is_connected']) && $_SESSION['user_is_connected'])
{
    header('Location: Presentation_acteurs_gbaf.php');
}

else
{