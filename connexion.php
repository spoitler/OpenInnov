<?php
session_start();
include ("functions.php");
$auth = connection();
$_SESSION['user']['cn'] = $auth;
$user = getUser($bdd,$auth);
$_SESSION['user']['id'] = $user->id_utilisateur;
var_dump($_SESSION);
if ($auth){
   //header('Location: projets.php?cn='.$auth);
}else {
   header('Location: index.php?Error='.true);
}
