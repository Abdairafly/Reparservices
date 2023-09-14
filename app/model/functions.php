
<?php
function connectToDatabase() {
    $serveur = "localhost";
    $utilisateur = "root";
    $motDePasse = "";
    $baseDeDonnees = "gestion_interventions";

    $connexion = mysqli_connect($serveur, $utilisateur, $motDePasse, $baseDeDonnees);

    if (!$connexion) {
        die("La connexion à la base de données a échoué : " . mysqli_connect_error());
        mysqli_report(MYSQLI_REPORT_ERROR | MYSQLI_REPORT_STRICT);

    }

    return $connexion;
}

function insertClient($nom, $adresse, $telephone) {
    $connexion = connectToDatabase();
    $insertionClient = "INSERT INTO clients (nom, adresse, telephone) VALUES (?, ?, ?)";
    $stmt = mysqli_prepare($connexion, $insertionClient);
    mysqli_stmt_bind_param($stmt, 'sss', $nom, $adresse, $telephone);
    if (mysqli_stmt_execute($stmt)) {
        return mysqli_insert_id($connexion);
    } else {
        return false;
    }
}

function insertIntervention($client_id, $date_demande, $date_intervention, $num_demande, $intervention_demandee, $num_chantier) {
    $connexion = connectToDatabase();
    $insertionIntervention = "INSERT INTO interventions (client_id, date_demande, date_intervention, num_demande, intervention_demandee, num_chantier)
                             VALUES (?, ?, ?, ?, ?, ?)";
    $stmt = mysqli_prepare($connexion, $insertionIntervention);
    mysqli_stmt_bind_param($stmt, 'isssss', $client_id, $date_demande, $date_intervention, $num_demande, $intervention_demandee, $num_chantier);
    return mysqli_stmt_execute($stmt);
}

function insertTechnicien($technicien, $jours, $total_heures, $forfait_deplacement) {
    $connexion = connectToDatabase();
    $insertionTechnicien = "INSERT INTO techniciens (nom, jours, total_heures, forfait_deplacement)
                             VALUES (?, ?, ?, ?)";
    $stmt = mysqli_prepare($connexion, $insertionTechnicien);
    mysqli_stmt_bind_param($stmt, 'ssds', $technicien, $jours, $total_heures, $forfait_deplacement);
    return mysqli_stmt_execute($stmt);
}

function insertObservations($observations) {
    $connexion = connectToDatabase();
    $insertionObservations = "INSERT INTO observations (observation) VALUES (?)";
    $stmt = mysqli_prepare($connexion, $insertionObservations);
    mysqli_stmt_bind_param($stmt, 's', $observations);
    return mysqli_stmt_execute($stmt);
}

function insertTravaux($client_id, $description_travaux, $ref_articles, $quantite, $prix_unitaire) {
    $connexion = connectToDatabase();
    $insertionTravaux = "INSERT INTO travaux (client_id, description, ref_articles, quantite, prix_unitaire)
                         VALUES (?, ?, ?, ?, ?)";
    $stmt = mysqli_prepare($connexion, $insertionTravaux);
    mysqli_stmt_bind_param($stmt, 'issds', $client_id, $description_travaux, $ref_articles, $quantite, $prix_unitaire);
    return mysqli_stmt_execute($stmt);
}

function insertSignatures($signature_client, $signature_technicien) {
    $connexion = connectToDatabase();
    $insertionSignatures = "INSERT INTO signatures (signature_client, signature_technicien) VALUES (?, ?)";
    $stmt = mysqli_prepare($connexion, $insertionSignatures);
    mysqli_stmt_bind_param($stmt, 'ss', $signature_client, $signature_technicien);
    $success = mysqli_stmt_execute($stmt);
    mysqli_close($connexion);
    return $success;
}

// Ajoutez d'autres fonctions pour les autres tables
?>