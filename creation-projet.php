<?php
session_start();
include_once ('functions.php');
var_dump($_SESSION);

$titre = $_POST['titre'];
$descriptionC = $_POST['descriptionC'];
$descriptionL = $_POST['descriptionL'];
$createur = $_SESSION['user'];

if (isset($_POST['cb'])) {
   $chefProjet = $_POST['cb'];
   echo $chefProjet."<br>";
   $chefProjet = $createur;
}else {
   $chefProjet = "";
   echo "false";
}

echo $titre."<br>";
echo $descriptionC."<br>";
echo $descriptionL."<br>";
echo $createur."<br>";
echo $chefProjet."<br>";

$bdd = getbdd();

$test = insertProjet($titre,$createur,$chefProjet,$descriptionC,$descriptionL);
