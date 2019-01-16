<!DOCTYPE html>
<html lang="fr" dir="ltr">
  <head>
    <meta charset="utf-8">
    <!-- Favicon -->
    <link rel="stylesheet" href="/css/image.css">
    <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<!------ Include the above in your HEAD tag ---------->

<nav class="navbar navbar-expand navbar-dark bg-dark">
        <a href="header.php" class="navbar-brand">MediaCenter</a>
        <button type="button" class="navbar-toggler" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav mr-auto">
                <a href="films.php" class="nav-item active nav-link">Films</a>
                <a href="categorie.php" class="nav-item active nav-link">Catégories</a>
                <?php if(isset($_COOKIE['nom'])) { ?>
                <a href="membre.php" class="nav item active nav-link">
                <?php
                //On se connecte à la base de donnée mini_projet
                $bdd = new PDO('mysql:host=localhost;dbname=mini_projet;charset=utf8', 'root', '');
                $nom = $_COOKIE['nom'];
                $req = $bdd->prepare('SELECT * FROM inscription WHERE Nom= :nom');
                $req-> execute(array('nom'=>$nom));
                $donnees= $req->fetch();
                  //On effectue la requête sql qui permet de récupérer des données dans la table inscription
                echo $donnees['Nom'] .' ';  //On affiche les données récupérées
                echo $donnees['Prenom'];
                ?></a> /
      <a href="traitement/deco.php" class="nav item active nav-link">Déconnexion</a>
                <?php } elseif(isset($_COOKIE['admin'])) { ?>
                <a href="admin/index.php" class="nav item active nav-link">Panel Admin</a> /
                <a href="traitement/deco.php" class="nav item active nav-link">Deconnexion</a>

                <?php } else { ?>

                  <a href="login.php" class="nav item active nav-link">Se connecter</a>
                   <a href="insc.php" class="nav item active nav-link">S'inscrire</a>

                <?php } ?>


            </ul>

            <form action="traitement/traiSearch.php" method="post" class="form-inline my-2 mylg-0">
              <label for="titre"></label>
                <input type="search" name="titre" class="form-control mr-sm-2" placeholder="Chercher sur le site..." aria-label="Buscar">
                <button class="btn btn-outline-success" type="submit" name="submit">Rechercher</button>
            </form>
<!--Ce formulaire va servir à envoyer le titre entré dans l'input dans la page de traitement traiSearch.php-->
        </div>
    </nav>
    
  </head>
  <body>
    <article class="card mb-4">
                  <a href="post-image.html">
                      <img class="card-img" src="image/ThinkstockPhotos-158497306.jpg" alt="" height="700">
                    </a>
                </article>



    </body>
    </html>
