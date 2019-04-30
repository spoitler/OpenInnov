<?php

include_once ('functions.php');

if (connection()){
   header("Location: index.php?cn=$user");
}else {
   header('Location: index.php?Error='.true);
}
