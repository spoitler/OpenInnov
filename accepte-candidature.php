<?php
session_start();
include_once ('functions.php');

$bdd = getbdd();

rmCandidatureAdd($bdd,$_GET['idU']);
addMembres($bdd, $_GET['idU'], $_GET['id']);

header ('Location: modification-projet.php?id='.$_GET['id']);
