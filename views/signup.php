<!DOCTYPE html>
<html lang="fr">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Inscription</title>
  <!-- Ajout de Bootstrap CSS -->
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <!-- Autres liens CSS ici -->
  <link rel="stylesheet" href="http://reparservices/assets/css/Mespages.css">
  <link rel="stylesheet" href="http://reparservices/assets/css/style.css">

</head>
<body>
    <header>
        <div class="container py-2">
          <div class="d-flex flex-wrap justify-content-between align-items-center">
            <a class="logo mb-3 mb-md-0" href="/Acceuil.html"><strong>Répar'Service</strong></a>
            <nav class="navbar mt-3 mt-md-0">
              <ul class="nav nav-links">
              
                <li class="nav-item">
                  <a class="nav-link" href="*">Nos Prestations</a>
                </li>
              </ul>
            </nav>
            <a class="cta btn btn-primary mt-3 mt-md-0" href="/Contact.html">Contact</a>
            <div class="d-flex">
              <a href="http://reparservices/views/login.php" class="btn btn-primary btn-login mr-2">Connexion</a>
              <a href="http://reparservices/views/signup.php" class="btn btn-secondary btn-signup">Inscription</a>
            </div>
        </div>
    </div>
  </header>



  <div class="container py-5">
    <h2>Inscription</h2>
    
  
    <form method="POST" action="http://reparservices/connexion/signup.php">
  <div class="form-group">
    <label for="signupUsername">Nom d'utilisateur</label>
    <input type="text" class="form-control" id="signupUsername" name="nom" placeholder="Nom d'utilisateur">
  </div>
  <div class="form-group">
    <label for="signupEmail">Adresse email</label>
    <input type="email" class="form-control" id="signupEmail" name="email" placeholder="Adresse email">
  </div>
  <div class="form-group">
    <label for="signupPassword">Mot de passe</label>
    <input type="password" class="form-control" id="signupPassword" name="password" placeholder="Mot de passe">
  </div>
  <button type="submit" class="btn btn-primary">S'inscrire</button>
</form>

</body>
</html>
