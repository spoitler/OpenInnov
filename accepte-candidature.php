<?php
session_start();
include_once ('functions.php');

$bdd = getbdd();

rmCandidature($bdd,$_GET['id']);
addMembres($bdd, $_GET['idU'], $_GET['id']);

header ('Location: modification-projet');
