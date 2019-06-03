<?php
session_start();
include_once ('functions.php');

$bdd = getbdd();

rmCandidature($bdd,$_GET['id']);

header ('Location: modification-projet');
