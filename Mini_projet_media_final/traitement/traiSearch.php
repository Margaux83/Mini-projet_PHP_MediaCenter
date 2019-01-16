<!DOCTYPE html>
<html lang="fr" dir="ltr">
  <head>
    <meta charset="utf-8">
    <link rel="stylesheet" href="/css/films.css">
    <link rel="stylesheet" href="/js/films.min.js">

    <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
    <script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
    <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <!------ Include the above in your HEAD tag ---------->

  </head>
  <body>
    <h4>Résultat(s) de la recherche :</h4>
<input type="button" class="btn btn-outline-success" value="Retour" onclick="javascript:history.back()">

<div class="container">

<div class="row">

<?php

$bdd=new PDO('mysql:host=localhost; dbname=mini_projet; charset=utf8','root','');

  //On se connecte à la base de donnée mini_projet
if(empty($_POST['titre'])) //On vérifie que le champs a bien été rempli

{

echo "Veuillez entrer un titre de film.";
}
else
{
  $t=$_POST['titre'];

  $requete2 = $bdd->prepare("SELECT Image, Titre, Duree, Realisateur, Resume, Categorie FROM films INNER JOIN categorie ON films.Ref=categorie.Reference WHERE Titre LIKE \"%$t%\" ");
  $requete2->execute(array('titre'=>$t));

//On effectue la requête sql qui permet de récupérer des données dans les tables films et categorie grâce à une concaténation
 //On affiche les données récupérées
 while($d = $requete2-> fetch(2))
 {
      echo '<div class="col-md-4">
          <div class="card"><div class="card-body"><img class="img-fluid" src="../image/'.$d['Image'].'">
      <br>';
echo '<ul class="itemized">
          <li><b>Titre</b> : '.$d['Titre'].'</li>
          <li><b>Durée</b> : '.$d['Duree'].'</li>
          <li><b>Réalisateur</b> : '.$d['Realisateur'].'</li>
          <li><b>Résumé</b> : '.$d['Resume'].'</li>
          <li><b>Catégorie</b> : '.$d['Categorie'].'</li>
      </ul>
</div></div></div>
      <br>';
}}



echo '</div></div>';


?>
<script>
    window.cards = new card_controller();
</script>

  </body>
  <footer>
  <?php include "../app/footer.php" ?>
  </footer>
</html>
