<?php
session_start();
include_once ('functions.php');

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

$creation = insertProjet($bdd,$titre,$createur,$chefProjet,$descriptionC,$descriptionL);
