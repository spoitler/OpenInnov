<?php

$titre = $_POST['titre'];
$descriptionC = $_POST['descriptionC'];
$descriptionL = $_POST['descriptionL'];

echo $titre."<br>";
echo $descriptionC."<br>";
echo $descriptionL."<br>";

if (isset($_POST['cb'])) {
   $chefProjet = $_POST['cb'];
   echo $chefProjet."<br>";
}else {
   echo "false";
}
