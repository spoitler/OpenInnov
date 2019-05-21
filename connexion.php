<?php
session_start();
include ("functions.php");
$auth = connection();
$_SESSION['user']['cn'] = $auth;
$bdd = getbdd();
echo "test2";
$user = getUser($bdd,$auth);
echo "test3";
$_SESSION['user']['id'] = $user->id_utilisateur;
echo "test4";
if ($auth){
   header('Location: projets.php?cn='.$auth);
}else {
   header('Location: index.php?Error='.true);
}
