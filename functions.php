<?php

function connection (){
    if (isset($_POST['username']) && isset($_POST['password'])) {

    // Eléments d'authentification LDAP
        $ldapusrn = $_POST['username'];     // DN ou RDN LDAP
        $ldappass = $_POST['password'];  // Mot de passe

   // LDAP variables
         $ldaphost = "ldap.example.com";  // serveur LDAP
         $ldapport = 389;                 // port de serveur LDAP

    // Connexion au serveur LDAP
        $ldapconn = ldap_connect($ldaphost,$ldapport);
        or die("Impossible de se connecter au serveur LDAP.");
        echo 'Le résultat de connexion est ' . $ldapconn . '<br />';

        if ($ldapconn) {
            echo 'Liaison ...';
            // Connexion au serveur LDAP
            $ldapbind = ldap_bind($ldapconn);
            echo 'Le résultat de connexion est ' . $ldapbind . '<br />';
            // Vérification de l'authentification
            if ($ldapbind) {
               identification($ldapconn,$ldapusrn,$ldappass);
            } else {
                echo "Connexion LDAP échouée...";
            }
        }
    }else{
        return false;
    }
}

function identification ($ldapconn,$ldapusrn,$ldappass){
   echo "Connexion LDAP réussie...";

   echo 'Recherchons (sn=S*) ...';                       //changer sn par identifiant et S*
   $sr=ldap_search($ldapconn, "o=My Company, c=US", "sn=S*");  // modifier o, c et sn
   echo 'Le résultat de la recherche est ' . $sr . '<br />';

   echo 'Le nombre d\'entrées retournées est ' . ldap_count_entries($ldapconn,$sr). '<br />';

   echo 'Lecture des entrées ...<br />';
   $info = ldap_get_entries($ldapconn, $sr);
   echo 'Données pour ' . $info["count"] . ' entrées:<br />';

   for ($i=0; $i<$info["count"]; $i++) {
      echo 'dn est : ' . $info[$i]["dn"] . '<br />';
      echo 'premiere entree cn : ' . $info[$i]["cn"][0] . '<br />';
      echo 'premier email : ' . $info[$i]["mail"][0] . '<br />';
   }
   // Fermeture de la connexion
   ldap_close($ldapconn);
}
