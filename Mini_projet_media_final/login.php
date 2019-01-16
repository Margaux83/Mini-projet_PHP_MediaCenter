<!DOCTYPE html>
<html lang="fr" dir="ltr">
  <head>
    <meta charset="utf-8">
    <link rel="stylesheet" href="css/login.css">
    <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
 <script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
 <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  </head>
  <body id="LoginForm">
<form action="traitement/traiLogin.php" method="post">

<div class="container">
<h1 class="form-heading">Connexion</h1>
<input type="button" class="btn btn-outline-success" value="Retour" onclick="javascript:history.back()">
<div class="login-form">
<div class="main-div">
    <div class="panel">
   <h2>Connexion d'utilisateur</h2>
   <p>Entrez votre email et votre mot de passe</p>
   </div>


        <div class="form-group">

<label for="mail"></label>
            <input type="email" name="mail" class="form-control" placeholder="Adresse email" required>

        </div>

        <div class="form-group">
<label for="mdp"></label>
            <input type="password" name="mdp" class="form-control" placeholder="Mot de passe" required>

        </div>
        <div class="forgot">
        <a href="reset.html">Mot de passe oublié ?</a>
</div>
        <button type="submit" class="btn btn-primary">Se connecter</button> <br><br>
          <button type="reset" class="btn btn-primary">Annuler</button>


    </div>

</div></div></div>


</form>
<!-- Ce formulaire va envoyé les données entrées dans les champs dans la page de traitement traiLogin.php -->

  </body>
</html>
