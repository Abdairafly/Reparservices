<?php
session_start();

// Vérifiez si l'utilisateur est connecté
if (!isset($_SESSION['user_id'])) {
    header("Location: http://reparservices/views/login.php");
    exit();
}

// Récupérez les informations de l'utilisateur à partir de la session
$user_id = $_SESSION['user_id'];
$user_nom = $_SESSION['user_nom'];
$user_role = $_SESSION['user_role'];

// Vérifiez si l'utilisateur est un administrateur, sinon redirigez
if ($user_role != 2) {
    header("Location: http://reparservices/views/dashboard.php");
    exit();
}
?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Gestion des Utilisateurs</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <!-- Autres liens CSS ici -->
    <link rel="stylesheet" href="/css/Mespages.css">
    <link rel="stylesheet" href="/css/style.css">
</head>
<body>
    <header>
        <div class="container py-2">
            <div class="d-flex flex-wrap justify-content-between align-items-center">
                <a class="logo mb-3 mb-md-0" href="/Acceuil.html"><strong>Répar'Service</strong></a>
                <nav class="navbar mt-3 mt-md-0">
                    <ul class="nav nav-links">
                        <li class="nav-item">
                            <a class="nav-link" href="/Elec'Services.html">Elec'Services</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="/Plomb'Services.html">Plomb' Services</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="/Nos Prestations.html">Nos Prestations</a>
                        </li>
                    </ul>
                </nav>
                <a class="cta btn btn-primary mt-3 mt-md-0" href="/Contact.html">Contact</a>
                <div class="d-flex">
                    <a href="/logout.php" class="btn btn-danger">Déconnexion</a>
                </div>
            </div>
        </div>
    </header>

    <div class="container py-5">
        <h2>Gestion des Utilisateurs (Admin)</h2>
        <!-- Mettez ici le contenu pour la gestion des utilisateurs -->
    </div>

    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.1/dist/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>
