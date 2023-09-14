<?php
session_start();

// Détruire toutes les variables de session
session_unset();

// Détruire la session
session_destroy();

// Rediriger vers la page de connexion avec un message de déconnexion réussie
header("Location: login.php?logout=1");
exit();
?>
