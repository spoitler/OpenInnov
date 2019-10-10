<?php
session_start();
include ("functions.php");
// Eléments d'authentification LDAP
$ldapusr= $_POST['username'];     // DN ou RDN LDAP
$ldappass = $_POST['password'];  // Mot de passe
$auth = connection($ldapusr,$ldappass);
//var_dump($auth);
// $auth = "admin";
if ($auth){
   if ($auth == "admin") {
      $_SESSION['admin'] = true;
   }
   $_SESSION['user']['cn'] = $auth;
   $bdd = getbdd();
   $user = getUser($bdd,$auth);
   $_SESSION['user']['id'] = $user->id_utilisateur;
   $_SESSION['user']['connect'] = true;
   header('Location: projets.php?cn='.$auth);
}else {
   header('Location: index.php?Error='.true);
}
