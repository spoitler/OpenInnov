<?php
session_start();
include ("functions.php");
include ("conf.php");
// Elements d'authentification LDAP
$ldapusr= $_POST['username'];     // DN ou RDN LDAP
$ldappass = $_POST['password'];  // Mot de passe
var_dump($_SESSION);
if ($ldapusr == $loginAdmin || $ldapusr == $loginPublic) {
   if ($ldappass == $passAdmin) {
      $_SESSION['admin'] = true;
      $_SESSION['user'] = "admin";
      header('Location: projets.php?cn=Admin');
   }elseif ($ldappass == $passPublic) {
      $_SESSION['public'] = true;
      $_SESSION['user'] = "public";
      header('Location: projets.php?cn=Public');
   }else {
      header('Location: index.php?Error='.true);
   }
}else {

$auth = connection($ldapusr,$ldappass);

//var_dump($auth);
if ($auth){
   // if ($auth == "admin") {
   //    $_SESSION['admin'] = true;
   // }
   $_SESSION['user']['cn'] = $auth['cn'][0];
   $bdd = getbdd();
   $user = getUserByUid($bdd,$auth['uid'][0]);

   if (empty($user)) {
      $classe = "";
      foreach ($auth['memberof'] as $memberOf) {
         switch ($memberOf) {
            case $ldapClassB1:
               $classe = "B1";
               break;
            case $ldapClassB2;
               $classe = "B2";
               break;
            case $ldapClassB3;
               $classe = "B3";
               break;
            case $ldapClassI4;
               $classe = "I1";
               break;
            case $ldapClassI5;
               $classe = "I2";
               break;
            case $ldapClassWIS1;
               $classe = "WIS1";
               break;
            case $ldapClassWIS2;
               $classe = "WIS2";
               break;
            case $ldapClassWIS3;
               $classe = "WIS3";
               break;
            case $ldapClassE1;
               $classe = "E1";
               break;
            case $ldapClassE2;
               $classe = "E2";
               break;
            default:
               $classe = "";
               break;
         }
      }
      if ($classe == "") {
         $classe = "NA";
      }

      //echo "\n".$classe;

      // insert dans la bdd
      $user = createUser($bdd, $auth['cn'][0], $classe, $auth['mail'][0],$auth['uid'][0]);
	   //var_dump($user);
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
}
