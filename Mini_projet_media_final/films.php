<!DOCTYPE html>
<html lang="fr" dir="ltr">
  <head>
    <meta charset="utf-8">
    <link rel="stylesheet" href="css/back-to-top.css">
    <link rel="stylesheet" href="js/back-to-top.min.js">
    <link rel="stylesheet" href="css/films.css">
    <link rel="stylesheet" href="js/films.min.js">

<!------------------------------------------------------>
    <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
    <script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
    <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>

    <?php include "app/header.php"; ?> <!-- On inclue la page header.php où se trouve la navbar -->
  </head>
<body>
  <div class="container">

<div class="row">
          <?php
  $bdd = new PDO('mysql:host=localhost;dbname=mini_projet;charset=utf8', 'root', '');
  //On se connecte à la base de donnée mini_projet
            $requete2 = $bdd->query("SELECT * FROM films INNER JOIN categorie ON films.Ref=categorie.Reference");
//On effectue la requête sql qui permet de récupérer des données dans les tables films et categorie grâce à une concaténation
//On affiche les données récupérées
            while($donnee2 = $requete2 -> fetch())
            {
              echo '<div class="col-md-4"><div class="card">
               <div class="card-body">';
                echo '<img class="img-fluid" src="image/'.$donnee2['Image'].'">
                <br>';

echo'
                <ul class="itemized">
                    <li><b>Titre</b> : '.$donnee2['Titre'].'</li>
                    <li><b>Durée</b> : '.$donnee2['Duree'].'</li>
                    <li><b>Réalisateur</b> : '.$donnee2['Realisateur'].'</li>
                    <li><b>Résumé</b> : '.$donnee2['Resume'].'</li>
                    <li><b>Catégorie</b> : '.$donnee2['Categorie'].'</li>
                </ul>
</div></div></div>
                <br>';
              }
echo '</div></div>';
?>
<script>
    window.cards = new card_controller();
</script>
</body>
<?php include "app/footer.php" ?>
</html>
