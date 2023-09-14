<!DOCTYPE html>
<html lang="fr">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Connexion</title>
  <!-- Ajout de Bootstrap CSS -->
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <!-- Autres liens CSS ici -->
  <link rel="stylesheet" href="http://reparservices/assets/css/Mespages.css">
  <link rel="stylesheet" href="http://reparservices/assets/css/style.css">
  <link rel="stylesheet" href="http://reparservices/assets/css/Acceuil.css">


</head>
<body>


    <header>
        <div class="container py-2">
        <div class="d-flex flex-wrap justify-content-between align-items-center">
            <a class="logo mb-3 mb-md-0" href="/Acceuil.html"><strong>Répar'Service</strong></a>
            <nav class="navbar mt-3 mt-md-0">
              <ul class="nav nav-links">
                  <li class="nav-item">
                  <a class="nav-link" href="http://reparservices/views/formulaire_client.php">Nos Services</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="">Nos Prestations</a>
                </li>
              
              </ul>
            </nav>
            <a class="cta btn btn-primary mt-3 mt-md-0" href="*">Contact</a>
            <div class="d-flex">
              <a href="http://reparservices/views/login.php" class="btn btn-primary btn-login mr-2">Connexion</a>
              <a href="http://reparservices/views/signup.php" class="btn btn-secondary btn-signup">Inscription</a>
            </div>
        </div>
    </div>
    </header>


  <div class="container py-5">
    <h2>Connexion</h2>
    
    <form method="POST" action="http://reparservices/connexion/login.php">

      <div class="form-group">
        <label for="loginEmail">Adresse email</label>
        <input type="email" class="form-control" id="loginEmail" name="email" placeholder="Adresse email">
      </div>
      <div class="form-group">
        <label for="loginPassword">Mot de passe</label>
        <input type="password" class="form-control" id="loginPassword" name="password" placeholder="Mot de passe">
      </div>
      <button type="submit" class="btn btn-primary">Se connecter</button>
    </form>
  </div>
</body>
</html>
