<?php
if(isset($_POST['mail']))
{
  //On vérifie que le champs a bien été rempli

  //On se connecte à la base de donnée projetsite
$bdd = new PDO('mysql:host=localhost;dbname=mini_projet;charset=utf8', 'root', '');
$req = $bdd->prepare("SELECT Email FROM inscription WHERE Email= :mail");
$req->execute(array('mail'=>$_POST['mail']));
$donnee=$req->fetch();

//On effectue une requête permettant de récupérer les données correspondant à l'adresse mail
if($donnee)
{
if($_POST['mail'] == $donnee['Email'])
{
  $req=$bdd->prepare("INSERT INTO commentaires (Commentaires,Email) VALUES(:com,:mail)");
  $req->execute(array('com'=>$_POST['com'],'mail'=>$_POST['mail']));
  //On exécute une requête sql qui va permettre d'insérer des données dans la table commentaires
  header('location: ../index.php');
}
}
}
?>
