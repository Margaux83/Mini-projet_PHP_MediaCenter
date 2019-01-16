<!DOCTYPE html>
<html lang="fr" dir="ltr">
  <head>
    <meta charset="utf-8">
<link rel="stylesheet" href="/css/image.css">
<link rel="stylesheet" href="/css/films.css">
<link rel="stylesheet" href="/js/films.min.js">
  <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
  <script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
  <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  <?php include "app/header.php"; ?><!-- On inclue la page header.php où se trouve la navbar -->
  </head>
  <body>
    <h1>Tri par catégorie</h1>
    <form action="categorie.php" method="POST">
<select class="" name="tri">
<option value=""></option>

  <option value="Dramatique">Dramatique</option>
  <option value="Humour">Humour</option>
  <option value="Action">Action</option>
</select>
<input class="btn btn-outline-success" type="submit" name="submit" value="Trier">
</form>
<div class="container">

<div class="row">



<?php

if(isset($_POST['tri'])) //On vérifie si une donnée a bien été entrée dans le formulaire de tri
{
    $tri = $_POST['tri']; //On associe la valeur de tri à une variable
    $bdd = new PDO('mysql:host=localhost;dbname=mini_projet;charset=utf8', 'root', '');


      //On se connecte à la base de donnée mini_projet
    $requete = $bdd->prepare("SELECT Categorie, Titre, Duree, Image, Realisateur,Resume FROM films INNER JOIN categorie ON films.Ref=categorie.Reference WHERE Categorie =:tri ORDER BY Titre ASC");
    $requete->execute(array('tri'=>$tri));

    //On effectue la requête sql qui permet de récupérer des données dans les tables films et categorie grâce à une concaténation
    //On affiche les données récupérées
    while($tri2 = $requete-> fetch(2))
    {
      echo '<div class="col-md-4">
          <div class="card"><div class="card-body"><img class="img-fluid" src="image/'.$tri2['Image'].'">
       <br>';



    echo '<ul class="itemized">
          <li><b>Titre</b> : '.$tri2['Titre'].'</li>
          <li><b>Durée</b> : '.$tri2['Duree'].'</li>
          <li><b>Réalisateur</b> : '.$tri2['Realisateur'].'</li>
          <li><b>Résumé</b> : '.$tri2['Resume'].'</li>
          <li><b>Catégorie</b> : '.$tri2['Categorie'].'</li>
      </ul>
      </div>

      </div>  </div>
      <br>';
    }}



    echo '</div></div>';


?>
<script>
    window.cards = new card_controller();
</script>
</body>
  <?php include "app/footer.php" ?>
</html>
