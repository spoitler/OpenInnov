<?php
session_start();
 if ($_SESSION["user"] != "admin"){
   header('Location: projets.php');
}

include ("functions.php");
$bdd = getbdd();
$description = $_POST["description"];
$date = date("Y-m-d");
createNews($bdd,$date,$description);
header("Location: projets.php");
