<?php

include ("functions.php");
include ("conf.php");

$auth = syncLdap("admin","f43gh3tj");

$bdd = getbdd();
$users = getAllUser($bdd);
$tailleLdap = $auth['count'] -1;
$tailleBdd = count($users);
$idLdap = [];
$existant = [];
for ($i=1; $i < $tailleLdap+1; $i++) {
   for ($j=0; $j < $tailleBdd ; $j++) {
      if (in_array($auth[$i][$ldapFullName][0], $users[$j])) {
         array_push($existant, $auth[$i][$ldapFullName][0]);
      }
   }
   if (!in_array($auth[$i]['cn'][0], $existant)) {
      array_push($idLdap, array($auth[$i][$ldapFullName][0] ,$auth[$i][$ldapClasse][0], $auth[$i][$ldapEmail][0]));
   }
}

foreach ($idLdap as $user) {
   if (createUser($bdd, $user[0],$user[1], $user[2])) {
      echo "reussi<br>";
   }else {
      echo "Erreur sur l'utilisateur :".$user[0];
   }
}

// var_dump($idLdap);
