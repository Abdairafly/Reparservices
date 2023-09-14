<?php
include 'functions.php';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {

    $client = $_POST['client'];
    $adresse = $_POST['adresse'];
    $telephone = $_POST['telephone'];

    $client_id = insertClient($client, $adresse, $telephone);
    if ($client_id) {
        echo "Le client a été ajouté avec l'ID : " . $client_id . "<br><br>";
    } else {
        echo "Erreur lors de l'ajout du client.<br><br>";
    }

    $date_demande = $_POST['date_demande'];
    $date_intervention = $_POST['date_intervention'];
    $num_demande = $_POST['num_demande'];
    $intervention_demandee = $_POST['intervention_demandee'];
    $num_chantier = $_POST['num_chantier'];

    if (insertIntervention($client_id, $date_demande, $date_intervention, $num_demande, $intervention_demandee, $num_chantier)) {
        echo "L'intervention a été ajoutée avec succès.<br><br>";
    } else {
        echo "Erreur lors de l'ajout de l'intervention.<br><br>";
    }

    $observations = $_POST['observations'];
    if (insertObservations($observations)) {
        echo "Les observations ont été enregistrées avec succès.<br><br>";
    } else {
        echo "Erreur lors de l'enregistrement des observations.<br><br>";
    }

    $signature_client = $_POST['signature_client'];
    $signature_technicien = $_POST['signature_technicien'];
    if (insertSignatures($signature_client, $signature_technicien)) {
        echo "Les signatures ont été enregistrées avec succès.<br><br>";
    } else {
        echo "Erreur lors de l'enregistrement des signatures.<br><br>";
    }

    $technicien = $_POST['technicien'];
    $jours = $_POST['jours'];
    $total_heures = $_POST['total_heures'];
    $forfait_deplacement = $_POST['forfait_deplacement'];
    if (insertTechnicien($technicien, $jours, $total_heures, $forfait_deplacement)) {
        echo "Les informations du technicien ont été ajoutées avec succès.<br><br>";
    } else {
        echo "Erreur lors de l'ajout des informations du technicien.<br><br>";
    }

    $description_travaux = $_POST['description_travaux'];
    $ref_articles = $_POST['ref_articles'];
    $quantite = $_POST['quantite'];
    $prix_unitaire = $_POST['prix_unitaire'];
    if (insertTravaux($client_id, $description_travaux, $ref_articles, $quantite, $prix_unitaire)) {
        echo "Les détails des travaux ont été ajoutés avec succès.<br><br>";
    } else {
        echo "Erreur lors de l'ajout des détails des travaux.<br><br>";
    }

}
?>
