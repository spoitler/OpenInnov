<?php
session_start();
include_once ('functions.php');
$auth = connection();
$_SESSION['user']['cn'] = $auth;
$bdd = getbdd();
$user = getUser($bdd,$auth);
$_SESSION['user']['id'] = $user->id_utilisateur;
if ($auth){
   header('Location: projets.php?cn='.$auth);
}else {
   header('Location: index.php?Error='.true);
}
