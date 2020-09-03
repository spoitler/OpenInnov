<?php

$posD = 0;
$posF = 0;
$lenght = 0;
$i = 0;
$lastPos = 0;

$chaine = "Plus besoin de téléphone ou télécommande pour contrôler ces lumières (e.g Philips HUE), ou bien ces volet roulant, sa cafetière connecté. Le but de ce projet est de créer un système infrarouge polyvalent qui peut s’intégrer partout <img src=\"https://www.erenumerique.fr/articles/7961/Leap_Motion-01.jpg\">";

function getDescImg($chaines, $check){

   $posD = strpos($chaines, "<img");
   $posF = strpos($chaines, "\">", $posD);

   if ($posD != false) {
      if ($posF == null) {
            $posF = strpos($chaines, "\" >", $posD);
            $lenght = $posF - $posD +3;
         }else {
            $lenght = $posF - $posD +2;
         }
      $img = substr($chaines, $posD, $lenght);
      substr_replace($chaines, "", $posD, $lenght);
      if ($check == false) {
         $specialChar = nl2br(htmlspecialchars(str_replace("<br />", "", $chaines)));
      }else {
         $specialChar = nl2br(htmlspecialchars($chaines));
      }

      $posD = strpos($specialChar, "&lt;img");
      $posF = strpos($specialChar, "&quot;&gt;", $posD);

      if ($posF == null) {
         $posF = strpos($specialChar, "&quot; &gt;", $posD);
         $lenght = $posF - $posD +11;
      }else {
         $lenght = $posF - $posD +10;
      }
      $result = substr_replace($specialChar, $img, $posD, $lenght);
      //var_dump($posD);
   }else {
      if ($check == false) {
         $specialChar = nl2br(htmlspecialchars(str_replace("<br />", "", $chaines)));
      }else {
         $specialChar = nl2br(htmlspecialchars($chaines));
      }
      $result = $specialChar;
   }
   //print $img."<br />";

   return $result;

}

$descriptionL = getDescImg($chaine, false);
print $descriptionL;
