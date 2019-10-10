<?php
session_start();
include ("functions.php");
// Elements d'authentification LDAP
$ldapusr= $_POST['username'];     // DN ou RDN LDAP
$ldappass = $_POST['password'];  // Mot de passe
$auth = connection($ldapusr,$ldappass);
var_dump($auth);
if ($auth){
   if ($auth == "admin") {
      $_SESSION['admin'] = true;
   }
   $_SESSION['user']['cn'] = $auth['cn'][0];
   $bdd = getbdd();
   $user = getUserByUid($bdd,$auth['uid'][0]);
   if (empty($user)) {
      // insert dans la bdd
      $user = createUser($bdd, $auth['cn'][0], $auth['description'][0], $auth['mail'][0],$auth['uid'][0]);
	var_dump($user);
      $_SESSION['user']['id'] = $user['0'];
   }else {
      $_SESSION['user']['id'] = $user->id_utilisateur;
   }
   //var_dump($user);
   //$_SESSION['user']['id'] = $user->id_utilisateur;
   $_SESSION['user']['connect'] = true;

   header('Location: projets.php?cn='.$_SESSION['user']['cn']);
}else {
   header('Location: index.php?Error='.true);
}
