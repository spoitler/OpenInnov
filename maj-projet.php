<?php
session_start();
include_once ('functions.php');



$id = $_POST['id'];
$titre = htmlspecialchars($_POST['titre']);

if (stristr($_POST['descriptionL'], '<br />') === false) {
   $descriptionC = nl2br(htmlspecialchars($_POST['descriptionC']));
   $descriptionL = getDescImg($_POST['descriptionL'], true);
}else {
   $descriptionC = getDescImg($_POST['descriptionC'], false);//nl2br(htmlspecialchars(str_replace("<br />", "", $_POST['descriptionC'])));
   $descriptionL = getDescImg($_POST['descriptionL'], false);
}


$createur = $_SESSION['user']['id'];
$bdd = getbdd();

$user = getUserById($bdd, $_SESSION['user']['id']);

echo $_POST['cb'];
if (isset($_POST['cb']) && $user->projet == 0) {
   $chefProjet = $_POST['cb'];
   echo $chefProjet."<br>";
   $chefProjet = $createur;
}else {
   $chefProjet = 0;
   // echo "false";
}

// echo $titre."<br>";
// echo $descriptionC."<br>";
// echo $descriptionL."<br>";
// echo $createur."<br>";
// echo $chefProjet."<br>";
//
// if (empty($user->projet) && $chefProjet != 0) {
//    addMembres($bdd,$createur,$id);
// }elseif(!empty($user->projet) && $id == $user->projet && $chefProjet == 0) {
//    addMembres($bdd,$createur,0);
// }

$maj = majProjet($bdd,$id,$titre,$descriptionC,$descriptionL);

header ('Location: selection-projet.php');
