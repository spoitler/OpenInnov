<?php
include ('functions.php');
$bdd = getbdd();
$id = $_POST['id'];

rmProjet($bdd,$id);
header('Location: selection-projet.php');
