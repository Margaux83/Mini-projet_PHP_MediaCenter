<!DOCTYPE html>
<html lang="fr" dir="ltr">
  <head>
    <meta charset="utf-8">
    <link rel="stylesheet" href="../css/insc.css">
    <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
 <script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
 <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  </head>
  <body id="LoginForm">
  <form action="../traitement/traiModifUti.php" method="post">
  <div class="container">
  <h1 class="form-heading">Gestion des utilisateurs</h1>
  <input type="button" class="btn btn-outline-success" value="Retour" onclick="javascript:history.back()">
  <div class="login-form">
  <div class="main-div">
    <div class="panel">
   <h3>Modifier un utilisateur</h3>
   </div>
   <br>
   <h5>Entrez l'adresse mail de l'utilisateur</h5>
   <div class="form-group">
   <label for="mail"></label>
          <input type="email" name="mail" class="form-control" placeholder="E-mail" required>
      </div> <br>
   <h5>Modifiez les informations</h5>
   <div class="form-group">
 <label for="nom"></label>
       <input type="text" name="nom" class="form-control" placeholder="Nom" required>
   </div>
   <div class="form-group">
<label for="prenom"></label>
       <input type="text" name="prenom" class="form-control" placeholder="Prénom" required>
   </div>
   <div class="form-group">
   <label for="tel"></label>
          <input type="number" name="tel" class="form-control" placeholder="Numéro" required>
      </div>
   <div class="form-group">
<label for="code"></label>
       <input type="number" name="code" class="form-control" placeholder="Code Postal" required>
   </div>
   <label for="mdp"></label>
          <input type="password" name="mdp" class="form-control" placeholder="Mot de passe"> <br><br>
        <button type="submit" class="btn btn-primary">Modification du film</button>
  <br><br>
          <button type="reset" class="btn btn-primary">Annuler</button>
    </div>
  </div></div>
  </form>
  <!-- Ceci est le formulaire de modification d'utilisateur, on ne peut y accéder qu'après s'être connecté en tant qu'administrateur -->
  <!-- Il va envoyé les données entrées dans les champs dans la page de traitement traiModifUti.php -->
  </body>
</html>
