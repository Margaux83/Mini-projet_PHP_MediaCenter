<?php
session_start();
session_unset();
session_destroy();
setcookie('nom', $donnee['Nom'], time()-1, '/');
setcookie('admin', $donnee['Nom'], time()-1, '/');
//On detruit la session pour se déconnecter
header('location: ../index.php');

 ?>
