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
  <form action="traitement/traiAjoutCom.php" method="post">
  <div class="container">
  <h1 class="form-heading">Commentaire</h1>
  <input type="button" class="btn btn-outline-success" value="Retour" onclick="javascript:history.back()">
  <div class="login-form">
  <div class="main-div">
    <div class="panel">
   <h2>Ajout d'un commentaire</h2>
   </div>
   <h5>Entrez l'adresse mail de l'utilisateur</h5>
   <div class="form-group">
   <label for="mail"></label>
          <input type="email" name="mail" class="form-control" placeholder="E-mail" required>
      </div> <br>
      <h5>Ajoutez un commentaire</h5>

   <div class="form-group">
<label for="com"></label>
       <input type="text" name="com" class="form-control" placeholder="Votre commentaire" required>
   </div>

        <button type="submit" class="btn btn-primary">Ajouter</button>
  <br><br>
          <button type="reset" class="btn btn-primary">Annuler</button>
    </div>
  </div></div>
  </form>
    <!-- Ce formulaire va envoyé les données entrées dans les champs dans la page de traitement traiAjoutCom.php -->
  </body>
</html>
