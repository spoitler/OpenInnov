<?php
session_start();
include_once ('functions.php');

$titre = $_POST['titre'];
$descriptionC = $_POST['descriptionC'];
$descriptionL = $_POST['descriptionL'];

$createur = $_SESSION['user']['id'];
var_dump($_SESSION);

if (isset($_POST['cb'])) {
   $chefProjet = $_POST['cb'];
   echo $chefProjet."<br>";
   $chefProjet = $createur;
}else {
   $chefProjet = 3;
   echo "false";
}

echo $titre."<br>";
echo $descriptionC."<br>";
echo $descriptionL."<br>";
echo $createur."<br>";
echo $chefProjet."<br>";

$bdd = getbdd();

$user = getUserById($bdd, $createur);

if (!empty($user->projet) && $chefProjet != 3) {
   header('Location: nouveau-projet.php?Error='.true);
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
