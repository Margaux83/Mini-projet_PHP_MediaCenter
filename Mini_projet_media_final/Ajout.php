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
  <form action="traitement/traiAjout.php" method="post">
  <div class="container">
  <h1 class="form-heading">Gestion des films</h1>
  <input type="button" class="btn btn-outline-success" value="Retour" onclick="javascript:history.back()">
  <div class="login-form">
  <div class="main-div">
    <div class="panel">
   <h2>Ajoutez un film</h2>
   </div>
   <div class="form-group">
 <label for="nom"></label>
       <input type="text" name="nom" class="form-control" placeholder="Titre" required>
   </div>
   <div class="form-group">
<label for="temps"></label>
       <input type="time" name="temps" class="form-control" placeholder="Durée" required>
   </div>
   <div class="form-group">
   <label for="resum"></label>
          <input type="text" name="resum" class="form-control" placeholder="Résumé" required>
      </div>
   <div class="form-group">
<label for="reali"></label>
       <input type="text" name="reali" class="form-control" placeholder="Réalisateur" required>
   </div>
   <div class="form-group">
   <label for="ref"></label>
          <input type="number" name="ref" class="form-control" placeholder="Référence" required>
      </div>
      <div class="form-group">
      <label for="imag"></label>
             <input type="text" name="imag" class="form-control" placeholder="Image : image.jpg">
         </div>
      <div class="form-group">
      <label for="cat"></label>
             <input type="text" name="cat" class="form-control" placeholder="Catégorie" required>
         </div>

        <button type="submit" class="btn btn-primary">Ajout du film</button>
  <br><br>
          <button type="reset" class="btn btn-primary">Annuler</button>
    </div>
  </div></div>
  </form>
  <!-- Ceci est le formulaire de modification, on ne peut y accéder qu'après s'être connecté -->
  <!-- Il va envoyé les données entrées dans les champs dans la page de traitement traiAjout.php -->

  </body>

</html>
