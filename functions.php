<?php

function getbdd(){
	$host = "127.0.0.1";
    $dbName = "stage";
    $login = "admin";
    $password = "mydil123456";

    try
    {
        $bdd = new PDO('mysql:host='.$host.';dbname='.$dbName.';charset=utf8', $login, $password, array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION));
    }
    catch (Exception $e)
    {
        $bdd = null;
        die('Erreur : ' . $e->getMessage());
    }

    return $bdd;
}

function insertProjet(PDO $bdd, $email) {
    // La requete de base
    $query = "INSERT INTO projets (titre, createur, chef_projet, description_courte, description_longue) VALUES (:titre,:createur,:chefProjet,:descriptionC,:descriptionL)";
    // On récupère tout le contenu de la table

    $resultat = $bdd->prepare($query);

    $resultat->bindParam(":titre", $titre);
    $resultat->bindParam(":createur", $createur);
    $resultat->bindParam(":chefProjet", $chefProjet);
    $resultat->bindParam(":descriptionC", $descriptionC);
    $resultat->bindParam(":descriptionL", $descriptionL);

    $resultat->execute();

    return $resultat->fetch(PDO::FETCH_OBJ);

}

function connection (){

      include("conf.php");

      if (!empty($_POST['username']) && !empty($_POST['password'])) {

    // Eléments d'authentification LDAP
        $ldapusr= $_POST['username'];     // DN ou RDN LDAP
        $ldappass = $_POST['password'];  // Mot de passe

    // Connexion au serveur LDAP
        $ldapconn = ldap_connect($ldaphost,$ldapport);
        echo 'Le résultat de connexion est ' . $ldapconn . '<br />';

        if ($ldapconn) {
            echo 'Liaison ...<br />';
            ldap_set_option($ldapconn, LDAP_OPT_PROTOCOL_VERSION, 3);
            // Connexion au serveur LDAP
            echo $ldapUsrAdmin . '<br />';
            echo $ldapPassAdmin . '<br />';
            $ldapbind = ldap_bind($ldapconn,$ldapUsrAdmin,$ldapPassAdmin);
            var_dump($ldapbind);
            echo 'Le résultat de connexion est ' . $ldapbind . '<br />';
            // Vérification de l'authentification
            if ($ldapbind) {
               $user = identification($ldapconn,$ldapusr,$ldappass);
               if($user){
                  ldap_close($ldapconn);
                  return $user;
               }else {
                  return false;
               }
            } else {
                echo "Connexion LDAP échouée...";
                ldap_close($ldapconn);
                return false;
            }
        }else {
           die("Impossible de se connecter au serveur LDAP.");
        }
    }else{
       return false;
    }
}

function identification ($ldapconn,$ldapusr,$ldappass){

   include("conf.php");

   echo "Connexion LDAP réussie..."."<br />";
   echo "Recherchons (givenname=$ldapusr) ..."."<br />";                     //ce que nous allons chercher
   $sr=ldap_search($ldapconn, $baseDnAuth, "(&(objectClass=*)(givenname=$ldapusr))");  // requete search
   echo 'Le résultat de la recherche est ' . $sr . '<br />';

   echo 'Le nombre d\'entrées retournées est ' . ldap_count_entries($ldapconn,$sr). '<br />';
   if (ldap_count_entries($ldapconn,$sr)== 0) {
      return false;
   }
   echo 'Lecture des entrées ...<br />';
   $info = ldap_get_entries($ldapconn, $sr);
   echo 'Données pour ' . $info["count"] . ' entrées:<br />';
   for ($i=0; $i<$info["count"]; $i++) {
      echo 'dn est : ' . $info[$i]["dn"] . '<br />';
      echo 'premiere entree cn : ' . $info[$i]["cn"][0] . '<br />';
      echo 'premiere entree sn : ' . $info[$i]["sn"][0] . '<br />';
      echo 'premiere entree password : ' . $info[$i]["userpassword"][0] . '<br />';
   }
   $user = $info[0]["dn"];
   echo $user."<br />";
   $attr = "userpassword";
   $ldappass = base64_encode($passEncode($ldappass, TRUE ));
   $ldappass = $passEncodePrefix.$ldappass;
   if (ldap_compare($ldapconn, $user, $attr, $ldappass)) {
      $user = $info[0]["cn"][0];
      echo "connexion reussi";
      echo $user;
      return $user;
   }else {
      echo "Identifiant ou Mot de passe incorrect !";
      return false;
   }
   // Fermeture de la connexion
   ldap_close($ldapconn);
}
