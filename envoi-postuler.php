<?php
session_start();
include_once ('functions.php');

$id = $_POST['id'];
$message = $_POST['message'];
$idUtilisateur = $_SESSION['user']['id'];
$bdd = getbdd();

envoiCandidature($bdd, $message,$idUtilisateur,$id);

header('Location: postuler.php?id='.$id);
