<!DOCTYPE html>
<html lang="fr" dir="ltr">
  <head>
    <meta charset="utf-8">
    <!-- Favicon -->

    <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<!------ Include the above in your HEAD tag ---------->

<nav class="navbar navbar-expand navbar-dark bg-dark">
        <a href="index.php" class="navbar-brand">MediaCenter</a>
        <button type="button" class="navbar-toggler" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav mr-auto">
                <a href="films.php" class="nav-item active nav-link">Films</a>
                <a href="#" class="nav-item active nav-link">Catégories</a>
                <?php if(isset($_COOKIE['nom'])) { ?>
                <a href="membre.php" class="nav item active nav-link">
                <?php
                $bdd = new PDO('mysql:host=localhost;dbname=mini_projet;charset=utf8', 'root', '');
                $nom = $_COOKIE['nom'];
                $req = $bdd->prepare('SELECT * FROM inscription WHERE Nom= :nom');
                $req-> execute(array('nom'=>$nom));
                $donnees= $req->fetch();
                echo $donnees['Nom'] .' ';
                echo $donnees['Prenom'];
                ?></a> /
      <a href="traitement/deco.php" class="nav item active nav-link">Déconnexion</a>
                <?php } elseif(isset($_COOKIE['admin'])) { ?>
                <a href="membre2.php" class="nav item active nav-link">Panel Admin</a> /
                <a href="traitement/deco.php" class="nav item active nav-link">Deconnexion</a>

                <?php } else { ?>

                  <a href="login.php" class="nav item active nav-link">Se connecter</a>
                   <a href="insc.php" class="nav item active nav-link">S'inscrire</a>

                <?php } ?>


            </ul>

            <form action="traitement/traiSearch.php" method="post" class="form-inline my-2 mylg-0">
              <label for="titre"></label>
                <input type="search" name="titre" class="form-control mr-sm-2" placeholder="Chercher sur le site..." aria-label="Buscar">
                <button class="btn btn-outline-success" type="submit">Rechercher</button>
            </form>
        </div>
    </nav>
    <!-- Ceci est la navbar de la page header.php-->
  </head>

  <body>
    <br>
<h1>Gestion des films</h1>
<a href="Ajout.php" class="nav item active nav-link"><button class="btn btn-outline-success">Ajouter un film</button></a>
 <a href="supp.php" class="nav item active nav-link"><button class="btn btn-outline-success">Supprimer un film</button></a>
<a href="modifier.php" class="nav item active nav-link"><button class="btn btn-outline-success">Modifier un film</button></a>
<h1>Commentaires</h1>
<a href="ajoutcommentaires.php" class="nav item active nav-link"><button class="btn btn-outline-success">Ajouter un commentaire</button></a>
<!-- Voici différents lien qui nous permettre d'effectuer des actions précises -->
</body> <br><br><br><br><br><br><br><br><br><br><br><br>
  <footer>
  <?php include "app/footer.php" ?>
  </footer>
    </html>
