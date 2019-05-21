<?php
session_start();
include_once ('functions.php');
$auth = connection();
echo "test";
$_SESSION['user']['cn'] = $auth;
echo "test1";
$bdd = getbdd();
echo "test2";
$user = getUser($bdd,$auth);
var_dump($user);
echo "test3";
$_SESSION['user']['id'] = $user->id_utilisateur;
echo "test4";
if ($auth){
   header('Location: projets.php?cn='.$auth);
}else {
   header('Location: index.php?Error='.true);
}
