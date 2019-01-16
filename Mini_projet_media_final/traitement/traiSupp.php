<?php
if(isset($_POST['ref']))
//On vérifie que le champs a bien été rempli

{
  $bdd = new PDO('mysql:host=localhost;dbname=mini_projet;charset=utf8', 'root', '');
  //On se connecte à la base de donnée mini_projet
  $requete = $bdd->query("SELECT * FROM films WHERE Ref ='".$_POST['ref']."'");

  $r=$requete->fetchAll();
//On effectue une requête sql permettant de vérifier s'il y a une référence dans la base de donnée coreespondant à celle que l'on a rentré
//Si c'est le cas on rentre dans la condition if
  if($r==true)
  {

    $req=$bdd->prepare("DELETE FROM films WHERE Ref=:ref");
    $req->execute(array('ref'=>$_POST['ref']));
//On effectue une requête sql permetttant de supprimer des données de la table films
      header('location: ../index.php');
  }

else {
  echo "Ce film ne se trouve pas sur le film.";
}
} ?>
