<?php
session_start();
include_once ('functions.php');

$id = $_POST['id'];
$titre = $_POST['titre'];
$descriptionC = $_POST['descriptionC'];
$descriptionL = $_POST['descriptionL'];

$createur = $_SESSION['user']['id'];

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

if (empty($user->projet) && $chefProjet != 3) {
   addMembres($bdd,$createur,$id);
}elseif(!empty($user->projet) && $id == $user->projet && $chefProjet == 3) {
   addMembres($bdd,$createur,0);
}

$maj = majProjet($bdd,$id,$titre,$createur,$chefProjet,$descriptionC,$descriptionL);

header ('Location: selection-projet.php');
