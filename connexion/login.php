<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $email = $_POST['email'];
    $password = $_POST['password'];

    // Connexion à la base de données (remplacez les informations par les vôtres)
    try {
        $connexion = new PDO("mysql:host=localhost;dbname=connexion", "root", "");
        // Configuration pour générer des exceptions en cas d'erreur
        $connexion->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

        // Préparation de la requête pour récupérer le mot de passe et le rôle associés à l'e-mail fourni
        $requete = $connexion->prepare("SELECT mot_de_passe, role FROM utilisateurs WHERE email = :email");
        $requete->bindParam(':email', $email);
        $requete->execute();

        // Récupération du mot de passe haché et du rôle depuis la base de données
        $resultat = $requete->fetch(PDO::FETCH_ASSOC);
        if ($resultat) {
            $mot_de_passe_hache = $resultat['mot_de_passe'];
            $role = $resultat['role'];

            // Vérification du mot de passe
            if (password_verify($password, $mot_de_passe_hache)) {
                // Mot de passe correct, l'utilisateur est connecté

                // Redirigez en fonction du rôle
                if ($role == 'utilisateur') {
                    header("Location: http://reparservices/views/dashboard.php?connexion=success");
                } elseif ($role == 'admin') {
                    header("Location: http://reparservices/views/dashboard_admin.php?connexion=success");
                }
                exit();
            } else {
                // Mot de passe incorrect
                header("Location: http://reparservices/views/login.php?erreur=motdepasseincorrect");
                exit();
            }
        } else {
            // Aucun utilisateur avec cet e-mail
            header("Location: http://reparservices/views/login.php?erreur=utilisateurinexistant");
            exit();
        }
    } catch (PDOException $e) {
        die("Erreur de connexion à la base de données : " . $e->getMessage());
    }
}
?>
