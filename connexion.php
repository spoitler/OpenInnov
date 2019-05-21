<?php
session_start();
include ("functions.php");
$auth = connection();
$_SESSION['user']['cn'] = $auth;
$bdd = getbdd();
// var_dump($bdd);
$user = getUser($bdd,$auth);
// var_dump($user);
// echo $user;
$_SESSION['user']['id'] = $user->id_utilisateur;
if ($auth){
   header('Location: projets.php?cn='.$auth);
}else {
   header('Location: index.php?Error='.true);
}
