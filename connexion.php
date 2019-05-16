<?php
session_start();
include_once ('functions.php');
$auth = connection();
$_SESSION['user'] = $auth;
if ($auth){
   header('Location: projets.php?cn='.$auth);
}else {
   header('Location: index.php?Error='.true);
}
