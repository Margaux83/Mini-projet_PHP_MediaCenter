<?php

if(isset($_POST['mail']))
{
  //On vérifie que les champs ont bien été remplis

  //On se connecte à la base de donnée projetsite
$bdd = new PDO('mysql:host=localhost;dbname=mini_projet;charset=utf8', 'root', '');
$req = $bdd->prepare("SELECT * FROM inscription WHERE Email= :mail AND Mot_de_passe=:mdp");
$req->execute(array('mail'=>$_POST['mail'], 'mdp'=>$_POST['mdp']));
$donnee=$req->fetch();

//On effectue une requête permettant de récupérer les données correspondant à l'adresse mail et au mot de passe
if($donnee)
{
if($_POST['mail'] == 'admin@admin.com' && $_POST['mdp'] == 'admin')
    {
            setcookie('admin', $donnee['Nom'], time()+3600, '/');
          header('location: ../index.php');
    }
elseif($_POST['mail']==$donnee['Email'] && $_POST['mdp']==$donnee['Mot_de_passe'])
{
  //On vérifie que l'adresse email et le mot de passe existent dans la base de donnée
setcookie('nom', $donnee['Nom'], time()+3600, '/');
session_start(); //On ouvre la session de l'utilisateur
$_SESSION['prenom'] = $donnee['Prenom'];
$_SESSION['nom'] = $donnee['Nom'];


header('location: ../index.php');

}

}
else {
echo "Votre email ou votre mot de passe est incorrect.";
}
}  ?>
