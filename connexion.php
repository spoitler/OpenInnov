<?php

include_once ('functions.php');
$auth = connection();
if ($auth){
   header("Location: index.php?cn=$auth");
}else {
   header('Location: index.php?Error='.true);
}
