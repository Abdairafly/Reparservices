<!DOCTYPE html>
<html lang="fr">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Répar'Service</title>
  <!-- Ajout de Bootstrap CSS -->
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <link rel="stylesheet" href="http://reparservices/assets/css/style.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/signature_pad/1.5.3/signature-pad.min.css">
  
</head>
<body>

  <header>
    <div class="container py-3">
      <div class="d-flex flex-wrap justify-content-between align-items-center">
        <a class="logo mb-3 mb-md-0" href="/"><strong>Répar'Service</strong></a>
        <nav class="navbar mt-3 mt-md-0">
          <ul class="nav nav-links">
            <li class="nav-item">
              <a class="nav-link" href="http://reparservices/views/formulaire.php">Nos Services</a>
            </li>
          
            <li class="nav-item">
              <a class="nav-link" href="">Nos Prestations</a>
            </li>
          </ul>
        </nav>
        <a class="cta btn btn-primary mt-3 mt-md-0" href="">Contact</a>
      </div>
    </div>
  </header>

<div class="container">
  
  <form method="post" action="http://reparservices/app/model/traitement_client.php">
    
      
  <div class="form-group">
    <h3>Informations Client :</h3>
    <table class="table table-bordered">
      <tbody>
        <tr>
          <td><label for="client">Client :</label></td>
          <td><input type="text" class="form-control" id="client" name="client" placeholder="Nom du client"></td>
        </tr>
        <tr>
          <td><label for="adresse">Adresse :</label></td>
          <td><input type="text" class="form-control" id="adresse" name="adresse" placeholder="Adresse du client"></td>
        </tr>
        <tr>
          <td><label for="telephone">Téléphone :</label></td>
          <td><input type="tel" class="form-control" id="telephone" name="telephone" placeholder="Numéro de téléphone"></td>
        </tr>
        <!-- Ajout du sélecteur d'activité -->
        <tr>
          <td><label for="activite">Activité :</label></td>
          <td>
            <select class="form-control" id="activite" name="activite">
              <option value="electricite">Electricité</option>
              <option value="plomberie">Plomberie</option>
            </select>
          </td>
        </tr>
        <!-- Fin du sélecteur d'activité -->
      </tbody>
    </table>
  </div>


    
    <div class="form-group">
      <h3>Informations Intervention :</h3>
      <table class="table table-bordered">
        <tbody>
          <tr>
            <td><label for="date_demande">Date demande :</label></td>
            <td><input type="date" class="form-control" id="date_demande"></td>
          </tr>
          <tr>
            <td><label for="date_intervention">Date d'intervention :</label></td>
            <td><input type="date" class="form-control" id="date_intervention"></td>
          </tr>
          <tr>
            <td><label for="num_demande">N° Demande :</label></td>
            <td><input type="text" class="form-control" id="num_demande" placeholder="Numéro de demande"></td>
          </tr>
          <tr>
            <td><label for="intervention_demandee">Intervention demandée par :</label></td>
            <td><input type="text" class="form-control" id="intervention_demandee" placeholder="Nom de la personne demandant l'intervention"></td>
          </tr>
          <tr>
            <td><label for="num_chantier">N° de chantier :</label></td>
            <td><input type="text" class="form-control" id="num_chantier" placeholder="Numéro de chantier"></td>
          </tr>
        </tbody>
      </table>
    </div>
    
    <div class="form-group">
      <h3>Désignation des Travaux :</h3>
      <table class="table table-bordered">
        <thead>
          <tr>
            <th>Travaux</th>
            <th>Réf. Articles</th>
            <th>Quantité</th>
            <th>Prix unitaire</th>
          </tr>
        </thead>
        <tbody>
          <tr>
            <td><textarea class="form-control" rows="3" placeholder="Description des travaux"></textarea></td>
            <td><input type="text" class="form-control" placeholder="Référence des articles"></td>
            <td><input type="number" class="form-control" placeholder="Quantité"></td>
            <td><input type="number" class="form-control" placeholder="Prix unitaire"></td>
          </tr>
          <!-- Ajouter d'autres lignes de travaux si nécessaire -->
        </tbody>
      </table>
    </div>
    
    <!-- Ajouter d'autres champs de travail ici -->
    
    <div class="form-group">
      <h3>Informations Technicien :</h3>
      <table class="table table-bordered">
        <tbody>
          <tr>
            <td><label for="technicien">Technicien :</label></td>
            <td><input type="text" class="form-control" id="technicien" placeholder="Nom du technicien"></td>
          </tr>
          <tr>
            <td><label for="jours">Jour :</label></td>
            <td><input type="text" class="form-control" id="jours" placeholder="Jour de la semaine"></td>
          </tr>
          <tr>
            <td><label for="total_heures">Total Heures :</label></td>
            <td><input type="number" class="form-control" id="total_heures" placeholder="Total des heures"></td>
          </tr>
          <tr>
            <td><label for="forfait_deplacement">Forfait déplacement :</label></td>
            <td><input type="number" class="form-control" id="forfait_deplacement" placeholder="Forfait de déplacement"></td>
          </tr>
        </tbody>
      </table>
    </div>
    
    <div class="form-group">
    <h3>Signatures :</h3>
    <div class="row">
        <div class="col-md-6 mb-3">
            <label for="clientSignature">Signature du client :</label>
            <input type="text" class="form-control" id="clientSignature" placeholder="Tapez le nom du client comme signature">
        </div>
        <div class="col-md-6">
            <label for="technicianSignature">Signature Technicien :</label>
            <input type="text" class="form-control" id="technicianSignature" placeholder="Tapez le nom du technicien comme signature">
        </div>
    </div>
</div>

    
    <div class="form-group">
      <h3>Observations :</h3>
      <textarea class="form-control" id="observations" rows="4" placeholder="Observations"></textarea>
    </div>
    
    <button type="submit" class="btn btn-primary">Soumettre</button>
  </form>
</div>

<!-- Ajout de Bootstrap JS (si nécessaire) -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
<link rel="stylesheet" href="http://reparservices/assets/Js/sign.js">
</body>
</html>
