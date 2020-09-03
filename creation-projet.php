<?php
session_start();
include_once ('functions.php');

$titre = htmlspecialchars($_POST['titre']);
$descriptionC = nl2br(htmlentities($_POST['descriptionC']));
$descriptionL = getDescImg($_POST['descriptionL'], true);

$createur = $_SESSION['user']['id'];
//var_dump($_SESSION);

if (isset($_POST['cb'])) {
   $chefProjet = $_POST['cb'];
   echo $chefProjet."<br>";
   $chefProjet = $createur;
}else {
   $chefProjet = 0;
   echo "false";
}

// echo $titre."<br>";
// echo $descriptionC."<br>";
// echo $descriptionL."<br>";
echo $createur."<br>";
echo $chefProjet."<br>";

$bdd = getbdd();

$user = getUserById($bdd, $createur);

if (!empty($user->projet) && $chefProjet != 0) {
   header('Location: nouveau-projet.php?Error='.true);
   echo "test";
}else {
   try
   {
      $creation = insertProjet($bdd,$titre,$createur,$chefProjet,$descriptionC,$descriptionL);
      $rid = new ArrayObject($creation);
      $rid->asort();
      $idP = $rid["LAST_INSERT_ID()"];
      var_dump($user);
      if (empty($user->projet) && $createur == $chefProjet) {
         addMembres($bdd,$createur,$idP);
      }elseif (empty($user->projet) && $createur != $chefProjet) {
         addMembres($bdd,$createur,0);
      }
      header('Location: selection-projet.php');
   }
   catch (Exception $e)
   {
       $bdd = null;
       die('Erreur : ' . $e->getMessage());
   }
}
