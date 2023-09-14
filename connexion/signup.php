<?php


if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nom = $_POST['nom'];
    $email = $_POST['email'];
    $password = $_POST['password']; 

    // Connexion à la base de données (remplacez les informations par les vôtres)
    //$connexion = new mysqli("localhost", "root", "", "connexion");
    try {
        $connexion = new PDO("mysql:host=localhost;dbname=connexion", "root", "");
        // set the PDO error mode to exception
        $connexion->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        echo "Connected successfully";
      } catch(PDOException $e) {
        echo "Connection failed: " . $e->getMessage();
      }



    // Vérification de la connexion
    // if ($connexion->connect_error) {
    //     die("Connexion échouée : " . $connexion->connect_error);
    // }


    // Utilisez des requêtes préparées pour éviter les injections SQL
    $hashed_password = password_hash($password, PASSWORD_BCRYPT);
        //$sql = "INSERT INTO utilisateurs (nom, email, mot_de_passe) VALUES ('$nom','$email' ,'$hashed_password' )";

    $requete = $connexion->prepare("INSERT INTO utilisateurs (nom, email, mot_de_passe) VALUES (:nom, :email, :mot_de_passe)");
    $requete->bindParam(':nom', $nom);
    $requete->bindParam(':email', $email);
    $requete->bindParam(':mot_de_passe', $hashed_password);

    // Hachez le mot de passe avec Bcrypt
    // $hashed_password = password_hash($password, PASSWORD_BCRYPT);

    // Vérifiez si la préparation de la requête a réussi
    if (!$requete) {
        die("Erreur de préparation de la requête : " . $connexion->error);
    }

    // Liez les paramètres et exécutez la requête
   // $requete->bind_param("sss", $nom, $email, $hashed_password);

    if ($requete->execute()) {
        // Redirigez vers la page d'accueil avec un message de succès
        header("Location: http://reparservices/views/index.php");
        exit();
    } else {
        // En cas d'échec de l'insertion, redirigez vers la page d'inscription avec un message d'erreur

        header("Location: http://reparservices/views/signup.php?erreur=" . urlencode($connexion->error));
        exit();
    }
  
    // Fermeture de la connexion à la base de données (placez cette ligne après l'utilisation de la connexion)
    $connexion->close();
}
?>

