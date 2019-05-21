<?php
session_start();
include ("functions.php");
$auth = connection();
echo "test";
$_SESSION['user']['cn'] = $auth;
echo "test1";
$bdd = getbdd();
echo $bdd;
echo "test2";
// $user = getUser($bdd,$auth);getUser
echo "test3";
$_SESSION['user']['id'] = $user->id_utilisateur;
echo "test4";
if ($auth){
   header('Location: projets.php?cn='.$auth);
}else {
   header('Location: index.php?Error='.true);
}
