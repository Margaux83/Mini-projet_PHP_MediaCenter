<!DOCTYPE html>
<html lang="fr" dir="ltr">
  <head>
    <meta charset="utf-8">
    <link rel="stylesheet" href="css/insc.css">
    <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
 <script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
 <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  </head>
  <body id="LoginForm">
  <form action="traitement/traiInsc.php" method="post">
  <div class="container">
  <h1 class="form-heading">Inscription</h1>
  <input type="button" class="btn btn-outline-success" value="Retour" onclick="javascript:history.back()">
  <div class="login-form">
  <div class="main-div">
    <div class="panel">
   <h2>Inscription d'utilisateur</h2>
   </div>
   <div class="form-group">
 <label for="nom"></label>
       <input type="text" name="nom" class="form-control" placeholder="Votre nom" required>
   </div>
   <div class="form-group">
<label for="prenom"></label>
       <input type="text" name="prenom" class="form-control" placeholder="Votre prénom" required>
   </div>
   <div class="form-group">
   <label for="numero"></label>
          <input type="number" name="numero" class="form-control" placeholder="Votre numéro" required>
      </div>
   <div class="form-group">
<label for="code"></label>
       <input type="number" name="code" class="form-control" placeholder="Votre code postal" required>
   </div>
        <div class="form-group">
  <label for="mail"></label>
            <input type="email" name="mail" class="form-control" placeholder="Votre adresse email" required>
        </div>
        <div class="form-group">
  <label for="mdp"></label>
            <input type="password" name="mdp" class="form-control" placeholder="Votre mot de passe" required>
        </div>
        <button type="submit" class="btn btn-primary">S'inscrire</button>
  <br><br>
          <button type="reset" class="btn btn-primary">Annuler</button>
    </div>
  </div></div>
  </form>
    <!-- Ce formulaire va envoyé les données entrées dans les champs dans la page de traitement traiInsc.php -->
  </body>
</html>
