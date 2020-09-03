<?php

function getbdd(){
	 include ("conf.php");
    try
    {
        $bdd = new PDO('mysql:host='.$bddHost.';dbname='.$dbName.';charset=utf8', $login, $password, array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION));
    }
    catch (Exception $e)
    {
        $bdd = null;
        die('Erreur : ' . $e->getMessage());
    }

    return $bdd;
}

function getDescImg($chaines, $check){

   $posD = strpos($chaines, "<img");
   $posF = strpos($chaines, "\">", $posD);

   if ($posD != false) {
      if ($posF == null) {
            $posF = strpos($chaines, "\" >", $posD);
            $lenght = $posF - $posD +3;
         }else {
            $lenght = $posF - $posD +2;
         }
      $img = substr($chaines, $posD, $lenght);
      substr_replace($chaines, "", $posD, $lenght);
      if ($check == false) {
         $specialChar = nl2br(htmlspecialchars(str_replace("<br />", "", $chaines)));
      }else {
         $specialChar = nl2br(htmlspecialchars($chaines));
      }

      $posD = strpos($specialChar, "&lt;img");
      $posF = strpos($specialChar, "&quot;&gt;", $posD);

      if ($posF == null) {
         $posF = strpos($specialChar, "&quot; &gt;", $posD);
         $lenght = $posF - $posD +11;
      }else {
         $lenght = $posF - $posD +10;
      }
      $result = substr_replace($specialChar, $img, $posD, $lenght);
      //var_dump($posD);
   }else {
      if ($check == false) {
         $specialChar = nl2br(htmlspecialchars(str_replace("<br />", "", $chaines)));
      }else {
         $specialChar = nl2br(htmlspecialchars($chaines));
      }
      $result = $specialChar;
   }
   //print $img."<br />";

   return $result;

}

function createNews(pdo $bdd, $date, $desc){
	$query = "INSERT INTO news (`date`,`description`) VALUES (:date,:description)";

	$resultat = $bdd->prepare($query);

	$resultat->bindParam(":description", $desc);
	$resultat->bindParam(":date", $date);

	$resultat->execute();
}

function getAllNews(PDO $bdd){
	$query = "SELECT * FROM news WHERE 1";

	$resultat = $bdd->prepare($query);

	$resultat->execute();

  	return $resultat->fetchAll(PDO::FETCH_OBJ);
}

function searchUser(PDO $bdd, $user){
	$query = "SELECT * FROM utilisateur WHERE nom_complet like :user";

	$resultat = $bdd->prepare($query);

	$user = "%".$user."%";

	$resultat->bindParam(":user", $user);

	$resultat->execute();

  return $resultat->fetchAll(PDO::FETCH_OBJ);
}


function searchProjet(PDO $bdd, $projet){
	$query = "SELECT * FROM projets WHERE titre like :projet OR description_courte like :projet OR description_longue like :projet";

	$resultat = $bdd->prepare($query);

	$projet = "%".$projet."%";

	$resultat->bindParam(":projet", $projet);

	$resultat->execute();

  return $resultat->fetchAll(PDO::FETCH_OBJ);
}

function getAllUser($bdd){
	$query = "SELECT * FROM utilisateur WHERE id_utilisateur != 3";

	$resultat = $bdd->prepare($query);

	$resultat->execute();

  return $resultat->fetchAll();
}

function rmProjet($bdd,$id){
	$query = "DELETE FROM projets WHERE id_projet=:id;UPDATE utilisateur SET projet=0 WHERE projet=:id;DELETE FROM candidature WHERE id_projet=:id";

  	$resultat = $bdd->prepare($query);

	$resultat->bindParam(":id",$id);

	$resultat->execute();
}

function getVar($name)
{
    if (isset($_GET[$name]) && !empty($_GET[$name]))
    {
        return htmlspecialchars($_GET[$name]);
    }
    return false;
}

function postVar($name)
{
    if (isset($_POST[$name]) && !empty($_POST[$name]))
    {
        return htmlspecialchars($_POST[$name]);
    }
    return false;
}

function selectProjetWithChefProjet($bdd){
	$query = "SELECT * FROM projets WHERE chef_projet!=0";

	$resultat = $bdd->prepare($query);

	$resultat->execute();

	return $resultat->fetchAll(PDO::FETCH_OBJ);
}

function selectProjetWithoutChefProjet($bdd){
	$query = "SELECT * FROM projets WHERE chef_projet=0";

	$resultat = $bdd->prepare($query);

	$resultat->execute();

	return $resultat->fetchAll(PDO::FETCH_OBJ);
}

function RequestProjet($input,PDO $bdd){
    if ($input == 1){
        $projets = selectProjetWithChefProjet($bdd);
    }
    elseif ($input == 2){
        $projets = selectProjetWithoutChefProjet($bdd);
    }
    else {
        $projets = getAllProjets($bdd);
    }

    return $projets;
}

function RequestUser($input,PDO $bdd){
    if ($input == 1){
        $users = selectUserWithProject($bdd);
    }
    elseif ($input == 2){
        $users = selectUserWithoutProject($bdd);
    }
    else {
        $users = selectAllUsers($bdd);
    }

    return $users;
}

function selecteProjetWithChef(PDO $bdd, $chef){
	$query = "SELECT * FROM projets WHERE chef_projet=:chef";

	$resultat = $bdd->prepare($query);

	$resultat->bindParam(":chef", $chef);

	$resultat->execute();

  return $resultat->fetchAll(PDO::FETCH_OBJ);
}

function selectUserWithProject(PDO $bdd){

 	 $query = "SELECT * FROM utilisateur WHERE projet!=0";

 	 $resultat = $bdd->prepare($query);

 	 $resultat->execute();

	return $resultat->fetchAll(PDO::FETCH_OBJ);
}

function selectUserWithoutProject(PDO $bdd){

	 $query = "SELECT * FROM utilisateur WHERE projet=0";

	 $resultat = $bdd->prepare($query);

	 $resultat->execute();

	return $resultat->fetchAll(PDO::FETCH_OBJ);
}

function selectAllUsers(PDO $bdd){

	 $query = "SELECT * FROM utilisateur WHERE 1";

	 $resultat = $bdd->prepare($query);

	 $resultat->execute();

	return $resultat->fetchAll(PDO::FETCH_OBJ);
}

function addChef($bdd, $id, $idc){
	$query = "UPDATE projets SET chef_projet=:idc WHERE id_projet=:id;UPDATE utilisateur SET projet=:id WHERE id_utilisateur=:idc";

	$resultat = $bdd->prepare($query);

	$resultat->bindParam(":id", $id);
	$resultat->bindParam(":idc", $idc);

	$resultat->execute();
}

function rmChef($bdd, $id){
	$query = "UPDATE projets SET chef_projet=0 WHERE id_projet=:id";

	$resultat = $bdd->prepare($query);

	$resultat->bindParam(":id", $id);

	$resultat->execute();
}

function rmCandidatureSupp($bdd,$id){

	$query = "DELETE FROM candidature WHERE id_candidature=:id";

	$resultat = $bdd->prepare($query);

	$resultat->bindParam(":id", $id);

	$resultat->execute();
}

function rmCandidatureAdd($bdd,$id){

	$query = "DELETE FROM candidature WHERE id_utilisateur=:id";

	$resultat = $bdd->prepare($query);

	$resultat->bindParam(":id", $id);

	$resultat->execute();
}

function rmMembres($bdd,$user){
	$query = 'UPDATE utilisateur SET projet=0 WHERE id_utilisateur=:user';

	$resultat = $bdd->prepare($query);

	$resultat->bindParam(":user", $user);

	$resultat->execute();
}

function addMembres($bdd, $createur, $idP){
	$query = "UPDATE utilisateur SET projet=:idP WHERE id_utilisateur=:createur";

	$resultat = $bdd->prepare($query);

	$resultat->bindParam(":idP", $idP);
	$resultat->bindParam(":createur", $createur);

	$resultat->execute();

}

function getMembres(PDO $bdd, $idprojet){
	$query = "SELECT * FROM utilisateur WHERE projet=:id";

	$resultat = $bdd->prepare($query);

	$resultat->bindParam(":id", $idprojet);

	$resultat->execute();

	return $resultat->fetchAll(PDO::FETCH_OBJ);
}

function getCandidatureByUser(PDO $bdd, $idP, $idU){
	$query = "SELECT * FROM candidature WHERE id_utilisateur=:idU AND id_projet=:idP";

	$resultat = $bdd->prepare($query);

	$resultat->bindParam(":idP", $idP);
	$resultat->bindParam(":idU", $idU);

	$resultat->execute();

	return $resultat->fetchAll(PDO::FETCH_OBJ);
}

function getcandidature(PDO $bdd, $idprojet){
	$query = "SELECT * FROM candidature,utilisateur WHERE candidature.id_utilisateur=utilisateur.id_utilisateur and id_projet=:id";

	$resultat = $bdd->prepare($query);

	$resultat->bindParam(":id", $idprojet);

	$resultat->execute();

	return $resultat->fetchAll(PDO::FETCH_OBJ);
}

function envoiCandidature($bdd,$message,$idUtilisateur,$id_projet){
	$query = "INSERT INTO candidature (message, id_utilisateur, id_projet)
	VALUES (:message,:idUtilisateur,:id_projet)";

	$resultat = $bdd->prepare($query);

	$resultat->bindParam(":message", $message);
	$resultat->bindParam(":idUtilisateur", $idUtilisateur);
	$resultat->bindParam(":id_projet", $id_projet);

	$resultat->execute();
}

function getAllProjets(PDO $bdd){
	$query = "SELECT * FROM projets,utilisateur WHERE id_utilisateur=createur";

	$resultat = $bdd->prepare($query);

	$resultat->execute();

	return $resultat->fetchAll(PDO::FETCH_OBJ);
}

function getUser(PDO $bdd, $nc){
	$query = "SELECT * FROM utilisateur WHERE uid=:user";

	$resultat = $bdd->prepare($query);

	$resultat->bindParam(":user", $nc);

	$resultat->execute();

	return $resultat->fetch(PDO::FETCH_OBJ);
}

function getUserByUid(PDO $bdd, $nc){
	$query = "SELECT * FROM utilisateur WHERE uid=:user";

	$resultat = $bdd->prepare($query);

	$resultat->bindParam(":user", $nc);

	$resultat->execute();

	return $resultat->fetch(PDO::FETCH_OBJ);
}

function getUserById($bdd, $id){
	$query = "SELECT * FROM utilisateur WHERE id_utilisateur=:id";

	$resultat = $bdd->prepare($query);

	$resultat->bindParam(":id", $id);

	$resultat->execute();

	return $resultat->fetch(PDO::FETCH_OBJ);
}

function getProjets(PDO $bdd, $idUtilisateur){
	$query = "SELECT * FROM projets,utilisateur WHERE id_utilisateur=:id and chef_projet=:id";

	$resultat = $bdd->prepare($query);

   $resultat->bindParam(":id", $idUtilisateur);

	$resultat->execute();

	return $resultat->fetchAll(PDO::FETCH_OBJ);
}

function getProjetPostuler(PDO $bdd, $id){
	$query = "SELECT * FROM projets,utilisateur WHERE id_utilisateur=createur and id_projet=:id";

	$resultat = $bdd->prepare($query);

	$resultat->bindParam(":id", $id);

	$resultat->execute();

	return $resultat->fetch(PDO::FETCH_OBJ);
}

function getProjet(PDO $bdd, $id){
	$query = "SELECT * FROM projets WHERE id_projet=:id";

	$resultat = $bdd->prepare($query);

   $resultat->bindParam(":id", $id);

	$resultat->execute();

	return $resultat->fetch(PDO::FETCH_OBJ	);
}

function majProjet($bdd, $id, $titre, $descriptionC, $descriptionL){
	// La requete de base
	$query = "UPDATE projets SET titre=:titre, description_courte=:descriptionC, description_longue=:descriptionL WHERE id_projet=:id";
	// On récupère tout le contenu de la table

	$resultat = $bdd->prepare($query);

	$resultat->bindParam(":id", $id);
	$resultat->bindParam(":titre", $titre);
	$resultat->bindParam(":descriptionC", $descriptionC);
	$resultat->bindParam(":descriptionL", $descriptionL);

	$resultat->execute();
}

function insertProjet(PDO $bdd, $titre, $createur, $chefProjet, $descriptionC, $descriptionL) {
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

	 $query = "SELECT LAST_INSERT_ID()";

	 $resultat = $bdd->prepare($query);

	 $resultat->execute();

	 return $resultat->fetch(PDO::FETCH_OBJ);
}

function createUser($bdd, $nom, $classe, $email, $uid){
	$query = "INSERT INTO utilisateur (nom_complet, classe, email, projet, uid) VALUES (:nom,:classe,:email, 0, :uid)";

	$resultat = $bdd->prepare($query);

	$resultat->bindParam(":nom", $nom);
	$resultat->bindParam(":classe", $classe);
	$resultat->bindParam(":email", $email);
	$resultat->bindParam(":uid", $uid);

	$resultat->execute();

	$query = "SELECT LAST_INSERT_ID()";

	$resultat = $bdd->prepare($query);

	$resultat->execute();

	return $resultat->fetch();
}

function syncLdap($ldapusr,$ldappass){
	include("conf.php");

	$ldapconn = ldap_connect($ldaphost,$ldapport);
	// echo 'Le résultat de connexion est ' . $ldapconn . '<br />';

	if ($ldapconn) {
		// echo 'Liaison ...<br />';
		ldap_set_option($ldapconn, LDAP_OPT_PROTOCOL_VERSION, 3);
		// Connexion au serveur LDAP
		// echo $ldapUsrAdmin . '<br />';
		// echo $ldapPassAdmin . '<br />';
		$ldapbind = ldap_bind($ldapconn,$ldapUsrAdmin,$ldapPassAdmin);
		// echo "connecté<br>";
		$sr=ldap_search($ldapconn, $ldapUsreleve, "objectClass=*");

		if (ldap_count_entries($ldapconn,$sr)== 0) {
	      return false;
	   }
	   // echo 'Lecture des entrées ...<br />';
	   $info = ldap_get_entries($ldapconn, $sr);
		// var_dump($info);
	   // echo 'Données pour ' . $info["count"] . ' entrées:<br />';
	   for ($i=1; $i<$info["count"]; $i++) {
			// echo "<br>";
	      // echo 'dn est : ' . $info[$i]["dn"] . '<br />';
	      // echo 'cn : ' . $info[$i]["cn"][0] . '<br />';
			// if (!empty($info[$i]["description"][0])){
			// 	echo 'classe : ' . $info[$i]["description"][0] . '<br />';
			// }
	   }
		return $info;
	}else {
		echo "cennexion ldap imposible";
		return false;
	}
}

function connection ($ldapusr,$ldappass){

      include("conf.php");

      if (!empty($ldapusr) && !empty($ldappass)) {

 		  // Connexion au serveur LDAP
        $ldapconn = ldap_connect($ldaphost,$ldapport);


        echo 'Le résultat de connexion est ' . $ldapconn . '<br />';

        if ($ldapconn) {
            // echo 'Liaison ...<br />';
            ldap_set_option($ldapconn, LDAP_OPT_PROTOCOL_VERSION, 3);
            // Connexion au serveur LDAP
            // echo $ldapUsrAdmin . '<br />';
            // echo $ldapPassAdmin . '<br />';

				// Identification au serveur LDAP
            $ldapbind = ldap_bind($ldapconn,$ldapUsrAdmin,$ldapPassAdmin);

            // var_dump($ldapbind);
            // echo 'Le résultat de connexion est ' . $ldapbind . '<br />';
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
                // echo "Connexion LDAP échouée...";
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

   // echo "Connexion LDAP réussie..."."<br />";
   // echo "Recherchons (givenname=$ldapusr) ..."."<br />";                     //ce que nous allons chercher
	if ($ldapusr == "admin") {
		echo "admin";

		// recherche du cn (common name) égale a la valeur de la variable $ldapusr
		$sr=ldap_search($ldapconn, $ldapUsrAdmin, "(&(objectClass=*)(cn=$ldapusr))");

	}else {
		echo "normal";
		$attributs = array("uid","mail", "sn", "cn", "userpassword", "dn","memberOf", "givenname","description");
		$sr = ldap_search($ldapconn, $baseDnAuth, "(&(objectClass=*)(uid=$ldapusr))", $attributs);  // requete search
	}

   // echo 'Le résultat de la recherche est ' . $sr . '<br />';

   echo 'Le nombre d\'entrées retournées est ' . ldap_count_entries($ldapconn,$sr). '<br />';
   if (ldap_count_entries($ldapconn,$sr)== 0) {
      return false;
   }
   // echo 'Lecture des entrées ...<br />';
   $info = ldap_get_entries($ldapconn, $sr);
   // echo 'Données pour ' . $info["count"] . ' entrées:<br />';
   // for ($i=0; $i<$info["count"]; $i++) {
   //    echo 'dn est : ' . $info[$i]["dn"] . '<br />';
   //    echo 'premiere entree cn : ' . $info[$i]["cn"][0] . '<br />';
   //    echo 'premiere entree sn : ' . $info[$i]["sn"][0] . '<br />';
   //    echo 'premiere entree password : ' . $info[$i]["userpassword"][0] . '<br />';
   // }
//	var_dump($info);
   $user = $info[0]["dn"];
	//$user = $info;
  //  echo $user."<br />";
   $attr = "userpassword";
//echo $ldappass;
//$ldappass = base64_encode($passEncode($ldappass, TRUE ));
   //$ldappass = $passEncodePrefix.$ldappass;
//echo $bind=@ldap_bind($ldapconn, $user, $ldappass);
//if($bind==true) echo "bind OK";
//else echo "bind  KO";
	// si ldap_compare égale true alors on continue sinon on retourne une erreur
//   if (ldap_compare($ldapconn, $user, $attr, $ldappass)) {
 if(ldap_bind($ldapconn, $user, $ldappass)){
//$user = $info[0]["cn"][0];
		$user = $info[0];
      // echo "connexion reussi";
      // echo $user;
      return $user;
   }else {
      // echo "Identifiant ou Mot de passe incorrect !";
      return false;
   }

   // Fermeture de la connexion
   ldap_close($ldapconn);
}
