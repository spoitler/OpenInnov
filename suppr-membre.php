<?php
include ('functions.php');
$bdd = getbdd();
$id = $_GET['id'];
$idm = $_GET['idm'];

rmMembres($bdd,$idm);
$projets = selecteProjetWithChef($bdd, $idm);

if (!empty($projets)){
   rmChef($bdd, $id);
}

header('Location: modification-projet.php?id='.$id);
