<?php
if(isset($_POST['mail']) && isset($_POST['nom']) && isset($_POST['prenom']) && isset($_POST['tel']) && isset($_POST['code']) && isset($_POST['mdp']))
//On vérifie que les champs ont bien été remplis

{
  //On se connecte à la base de donnée projetsite
$bdd = new PDO('mysql:host=localhost;dbname=mini_projet;charset=utf8', 'root', '');

$req = $bdd->prepare("SELECT * FROM inscription WHERE Email=:mail");
$req->execute(array('mail'=>$_POST['mail']));
$donnee=$req->fetch();

//On effectue une requête sql permettant de récupérer les données correspondant à l'adresse mail
if($_POST['mail'] == $donnee['Email'])
    {
      $reqnom=$bdd->prepare("UPDATE inscription SET Nom=:nom, Prenom=:prenom, Tel=:tel, Code=:code, Mot_de_passe=:mdp WHERE Email=:mail");
      $reqnom->execute(array('nom'=>$_POST['nom'],'prenom'=>$_POST['prenom'],'tel'=>$_POST['tel'],'code'=>$_POST['code'], 'mdp'=>$_POST['mdp'], 'mail'=>$_POST['mail']));
      //On effectue une requête sql permettant de modifier les données de la table inscription correspondant à l'adresse mail saisie
      header('location: ../index.php');
    }
  }
?>
