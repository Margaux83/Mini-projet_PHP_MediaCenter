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
<?php include "app/header.php"; ?>  </head>
  <body>
    <h4>Commentaires</h4>


<div class="container">

<div class="row">

<?php

$bdd=new PDO('mysql:host=localhost; dbname=mini_projet; charset=utf8','root','');

  //On se connecte à la base de donnée mini_projet



  $requete2 = $bdd->query("SELECT Nom, Prenom,Commentaires FROM inscription INNER JOIN commentaires ON inscription.Email=commentaires.Email");


//On effectue la requête sql qui permet de récupérer des données dans les tables inscription et commentaires grâce à une concaténation
 //On affiche les données récupérées
 while($d = $requete2-> fetch())
 {
      echo '<div class="col-md-4">
          <div class="card"><div class="card-body">
      ';
echo '
          <b>'.$d['Nom']." ".$d['Prenom'].' </b>: <br>
        '.$d['Commentaires'].'


</div></div></div>
      <br>';
}



echo '</div></div>';


?>
<script>
    window.cards = new card_controller();
</script>

  </body>
  <footer>
  <?php include "app/footer.php" ?>
  </footer>
</html>
