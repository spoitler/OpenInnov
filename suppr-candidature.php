<?php
session_start();
include_once ('functions.php');

$bdd = getbdd();

rmCandidatureSupp($bdd,$_GET['idC']);

$id = $_GET['id'];

header ('Location: modification-projet.php?id='.$id);
