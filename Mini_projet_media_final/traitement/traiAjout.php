<?php
if(isset($_POST['nom']) && isset($_POST['temps']) && isset($_POST['resum']) && isset($_POST['reali']) && isset($_POST['ref']) && isset($_POST['cat']))
//On vérifie que les champs ont bien été remplis
{
  $bdd = new PDO('mysql:host=localhost;dbname=mini_projet;charset=utf8', 'root', '');
  //On se connecte à la base de donnée mini_projet

  $requete = $bdd->query("SELECT * FROM films WHERE Ref = '".$_POST['ref']."'");

  $r=$requete->fetch();
  //On effectue une requête sql permettant de vérifier s'il n'y a pas déjà une référence dans la base de donnée coreespondant à celle que l'on a rentré

  if($r==false)
  {
    $req=$bdd->prepare("INSERT INTO films (Titre,Duree,Resume,Realisateur,Ref, Image) VALUES(:nom,:temps,:resum,:reali,:ref,:imag)");
    $req->execute(array('nom'=>$_POST['nom'], 'temps'=>$_POST['temps'], 'resum'=>$_POST['resum'], 'reali'=>$_POST['reali'],'ref'=>$_POST['ref'],'imag'=>$_POST['imag']));
    //On effectue une requête sql permettant de rentrer des données dans la table films

    $req2=$bdd->prepare("INSERT INTO categorie (Reference, Categorie) VALUES(:ref,:cat)");
    $req2->execute(array('ref'=>$_POST['ref'],'cat'=>$_POST['cat']));
    //On effectue une requête sql permettant de rentrer des données dans la table categorie
      header('location: ../index.php');
  }
  else {
    echo "Ce livre est déjà sur le site";
  }
  }
 ?>
