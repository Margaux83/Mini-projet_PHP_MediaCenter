<?php
  if(isset($_POST['mail']) && isset($_POST['mdp']) && isset($_POST['nom']) && isset($_POST['prenom']) && isset($_POST['code']) && isset($_POST['numero']))
  {
    //On vérifie que les champs ont bien été remplis

    $code=$_POST['code'];
    $codetaille=strlen($code);
$prenom=$_POST['prenom'];
$prenomtaille=strlen($prenom);
$nom=$_POST['nom'];
$nomtaille=strlen($nom);
$num=$_POST['numero'];
$numtaille=strlen($num);
$mail=$_POST['mail'];
$modp=$_POST['mdp'];

if($nomtaille<=30)
{
  if($prenomtaille<=30)
  {

  if($numtaille==10)
  {
    if($codetaille==5)
    {


    if(strspn(strtolower($mail), "@") < strlen($mail))
    {
      if(strspn(strtolower($modp), "ab0123456789") < strlen($modp))
      {

  $bdd = new PDO('mysql:host=localhost;dbname=mini_projet;charset=utf8', 'root', '');
  //On se connecte à la base de donnée mini_projet
  $requete = $bdd->query("SELECT * FROM inscription WHERE Email = '".$_POST['mail']."'");

  $r=$requete->fetch();

  if($r==false)
  {
    $req=$bdd->prepare("INSERT INTO inscription (Nom,Prenom,Tel,Code,Email,Mot_de_passe) VALUES(:nom,:prenom,:numero,:code,:mail,:mdp)");
    $req->execute(array('nom'=>$_POST['nom'], 'prenom'=>$_POST['prenom'], 'numero'=>$_POST['numero'], 'code'=>$_POST['code'], 'mail'=>$_POST['mail'],'mdp'=>$_POST['mdp']));
    //On effectue une requête sql permettant de rentrer des données dans la table inscription
      header('location: ../index.php');
  }

else {
  echo "Ce compte existe déjà.";
}
}
else {
echo "Votre mot de passe doit contenir au moins une lettre et un chiffre.";
}
}


else {
echo "Votre adresse email doit contenir '@'. ";
}
}
else{
echo "Votre code postal doit contenir 5 chiffres.";
}
}


else {
echo "Votre numéro de téléphone doit comprendre 10 chiffres";
}
}
else {
echo "Votre prénom est trop long.";
}
}
else {
  echo "Votre nom est trop long.";
}
}


   ?>
