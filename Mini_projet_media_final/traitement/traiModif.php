<?php
if(isset($_POST['ref']) && isset($_POST['nom']) && isset($_POST['temps']) && isset($_POST['resum']) && isset($_POST['reali']))
//On vérifie que les champs ont bien été remplis

{
  //On se connecte à la base de donnée projetsite
$bdd = new PDO('mysql:host=localhost;dbname=mini_projet;charset=utf8', 'root', '');

$req = $bdd->prepare("SELECT * FROM films WHERE Ref=:ref");
$req->execute(array('ref'=>$_POST['ref']));
$donnee=$req->fetch();

//On effectue une requête sql permettant de récupérer les données correspondant à la référence du film
if($_POST['ref'] == $donnee['Ref'])
    {
      $reqnom=$bdd->prepare("UPDATE films SET Titre=:nom, Duree=:temps,Resume=:resum,Realisateur=:reali WHERE Ref=:ref");
      $reqnom->execute(array('nom'=>$_POST['nom'],'temps'=>$_POST['temps'],'resum'=>$_POST['resum'],'reali'=>$_POST['reali'], 'ref'=>$_POST['ref']));
      //On effectue une requête sql permettant de modifier les données de la table films correspondant à la référence saisie
      $reqnom2=$bdd->prepare("UPDATE categorie SET Categorie=:cat WHERE Reference=:ref");
      $reqnom2->execute(array('cat'=>$_POST['cat'], 'ref'=>$_POST['ref']));
      //On effectue une requête sql permettant de modifier des données de la table categorie correspondant à la référence saisie

      header('location: ../index.php');
    }




else {
echo "Ce film ne se trouve pas sur le site.";
}
}  ?>
