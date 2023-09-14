<?php

class db {
    private static $connexion = null;

    public static function connexion() { 
        if (self::$connexion != null) {
            return self::$connexion;
        }

        // Connexion à la base de données
        $serveur = "localhost";
        $utilisateur = "root";
        $motDePasse = "";
        $baseDeDonnees = "gestion_interventions";

        self::$connexion = new mysqli($serveur, $utilisateur, $motDePasse, $baseDeDonnees);

        // Vérification de la connexion
        if (self::$connexion->connect_error) {
            die("Échec de la connexion à la base de données : " . self::$connexion->connect_error);
        }

        return self::$connexion;
    }
}
$conn = db::connexion();
