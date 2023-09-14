<?php
session_start();

// Vérifiez si l'utilisateur est connecté
if (!isset($_SESSION['user_id'])) {
    header("Location: http://reparservices/admin/dashboard_admin.php");
    exit();
}

// Récupérez les informations de l'utilisateur à partir de la session
$user_id = $_SESSION['user_id'];
$user_nom = $_SESSION['user_nom'];
$user_role = $_SESSION['user_role'];

// Redirigez l'utilisateur vers le tableau de bord approprié
if ($user_role == 1) {
    header("Location: http://reparservices/views/dashboard.php");
    exit();
} elseif ($user_role == 2) {
    header("Location: http://reparservices/views/dashboard_admin.php");
    exit();
}
?>
