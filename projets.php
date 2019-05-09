<!DOCTYPE html>
<html>
   <head>
      <meta charset="utf-8">
      <meta http-equiv="X-UA-Compatible" content="IE=edge">
      <title></title>
      <meta name="viewport" content="width=device-width, initial-scale=1">
      <link rel="stylesheet" type="text/css" media="screen" href="css/style.css">
   </head>
   <body>
      <div class="header">
         <h1>PROJETS</h1>
      </div>
<?php
      if (!empty($_GET['cn'])) {
         echo "Bonjour <strong>" . $_GET['cn'] . "</strong>";
      }

      include ("menu.php");
      ?>
      <div class="overlay popup-close"></div>
      <div class="main-container-projets">
         <div class="popup-btn" id="1">
            <div class="container-projet popup-box popup-box1 transform-out">
               <div class="sub-content">
                  <div class="title">
                     <h2>Nom du projet</h2>
                     <div class="cache cache1">
                        <a href="#">Postuler</a>
                     </div>
                  </div>
                  <div class="sub-content-projet">
                     <div class="description-projet">
                        <h3>Description :</h3>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing
                           elit. Sed turpis ligula, aliquam vitae commodo ut,
                           egestas at nisi. Vivamus vulputate efficitur varius.
                           Donec at egestas lectus. Aliquam fringilla pretium
                           euismod. In ac interdum ligula....
                        </p>
                     </div>
                     <div class="chef-Projet line-height">
                        <h3>Chef de projet :</h3>
                        <p>&nbsp;Romain BONNES - I5</p>
                     </div>
                     <div class="container-icones-membres">
                        <p><img src="img/membres.png" class="icone-membres" alt="membres" title="icone membres"></p>
                        <p class="nombres-membres">5/7</p>
                     </div>
                     <div class="createur cache cache1 info-projet line-height">
                        <h3>Créateur :</h3>
                        <p>&nbsp;Romain BONNES - I5</p>
                     </div>
                     <div class="membres cache cache1 info-projet line-height">
                        <h3>Membes :</h3><br>
                        <div class="container-membres">
                           <p>&nbsp;Romain BONNES - I5</p>
                           <p>&nbsp;Romain BONNES - I5</p>
                           <p>&nbsp;Romain BONNES - I5</p>
                           <p>&nbsp;Romain BONNES - I5</p>
                        </div>

                     </div>

                  </div>
               </div>
            </div>
         </div>
         <div class="popup-btn" id="0">
            <div class="container-projet popup-box popup-box0 transform-out">
               <div class="sub-content">
                  <div class="title">
                     <h2>Nom du projet 2</h2>
                     <div class="cache cache0">
                        <a href="#">Postuler</a>
                     </div>
                  </div>
                  <div class="sub-content-projet">
                     <div class="description-projet">
                        <h3>Description :</h3>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing
                           elit. Sed turpis ligula, aliquam vitae commodo ut,
                           egestas at nisi. Vivamus vulputate efficitur varius.
                           Donec at egestas lectus. Aliquam fringilla pretium
                           euismod. In ac interdum ligula....
                        </p>
                     </div>
                     <div class="chef-Projet line-height">
                        <h3>Chef de projet :</h3>
                        <p>&nbsp;Romain BONNES - I5</p>
                     </div>
                     <div class="container-icones-membres">
                        <p><img src="img/membres.png" class="icone-membres" alt="membres" title="icone membres"></p>
                        <p class="nombres-membres">5/7</p>
                     </div>
                     <div class="createur cache cache0 info-projet line-height">
                        <h3>Créateur :</h3>
                        <p>&nbsp;Romain BONNES - I5</p>
                     </div>
                     <div class="membres cache cache0 info-projet line-height">
                        <h3>Membes :</h3><br>
                        <div class="container-membres">
                           <p>&nbsp;Romain BONNES - I5</p>
                           <p>&nbsp;Romain BONNES - I5</p>
                           <p>&nbsp;Romain BONNES - I5</p>
                           <p>&nbsp;Romain BONNES - I5</p>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
         </div>
         <div class="popup-btn" id="3">
            <div class="container-projet popup-box popup-box3 transform-out">
               <div class="sub-content">
                  <div class="title">
                     <h2>Nom du projet 3</h2>
                     <div class="cache cache3">
                        <a href="#">Postuler</a>
                     </div>
                  </div>
                  <div class="sub-content-projet">
                     <div class="description-projet">
                        <h3>Description :</h3>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing
                           elit. Sed turpis ligula, aliquam vitae commodo ut,
                           egestas at nisi. Vivamus vulputate efficitur varius.
                           Donec at egestas lectus. Aliquam fringilla pretium
                           euismod. In ac interdum ligula....
                        </p>
                     </div>
                     <div class="chef-Projet line-height">
                        <h3>Chef de projet :</h3>
                        <p>&nbsp;Romain BONNES - I5</p>
                     </div>
                     <div class="container-icones-membres">
                        <p><img src="img/membres.png" class="icone-membres" alt="membres" title="icone membres"></p>
                        <p class="nombres-membres">5/7</p>
                     </div>
                     <div class="createur cache cache3 info-projet line-height">
                        <h3>Créateur :</h3>
                        <p>&nbsp;Romain BONNES - I5</p>
                     </div>
                     <div class="membres cache cache3 info-projet line-height">
                        <h3>Membes :</h3><br>
                        <div class="container-membres">
                           <p>&nbsp;Romain BONNES - I5</p>
                           <p>&nbsp;Romain BONNES - I5</p>
                           <p>&nbsp;Romain BONNES - I5</p>
                           <p>&nbsp;Romain BONNES - I5</p>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
         </div>
         <div class="popup-btn 2" id="2">
            <div class="container-projet popup-box popup-box2 transform-out">
               <div class="sub-content">
                  <div class="title">
                     <h2>Nom du projet 4</h2>
                     <div class="cache cache2">
                        <a href="#">Postuler</a>
                     </div>
                  </div>
                  <div class="sub-content-projet">
                     <div class="description-projet">
                        <h3>Description :</h3>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing
                           elit. Sed turpis ligula, aliquam vitae commodo ut,
                           egestas at nisi. Vivamus vulputate efficitur varius.
                           Donec at egestas lectus. Aliquam fringilla pretium
                           euismod. In ac interdum ligula....
                        </p>
                     </div>
                     <div class="chef-Projet line-height">
                        <h3>Chef de projet :</h3>
                        <p>&nbsp;Romain BONNES - I5</p>
                     </div>
                     <div class="container-icones-membres">
                        <p><img src="img/membres.png" class="icone-membres" alt="membres" title="icone membres"></p>
                        <p class="nombres-membres">5/7</p>
                     </div>
                     <div class="createur cache cache2 info-projet line-height">
                        <h3>Créateur :</h3>
                        <p>&nbsp;Romain BONNES - I5</p>
                     </div>
                     <div class="membres cache cache2 info-projet line-height">
                        <h3>Membes :</h3><br>
                        <div class="container-membres">
                           <p>&nbsp;Romain BONNES - I5</p>
                           <p>&nbsp;Romain BONNES - I5</p>
                           <p>&nbsp;Romain BONNES - I5</p>
                           <p>&nbsp;Romain BONNES - I5</p>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
         </div>
         <div class="popup-btn 5" id="5">
            <div class="container-projet popup-box popup-box5 transform-out">
               <div class="sub-content">
                  <div class="title">
                     <h2>Nom du projet 5</h2>
                     <div class="cache cache5">
                        <a href="#">Postuler</a>
                     </div>
                  </div>
                  <div class="sub-content-projet">
                     <div class="description-projet">
                        <h3>Description :</h3>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing
                           elit. Sed turpis ligula, aliquam vitae commodo ut,
                           egestas at nisi. Vivamus vulputate efficitur varius.
                           Donec at egestas lectus. Aliquam fringilla pretium
                           euismod. In ac interdum ligula....
                        </p>
                     </div>
                     <div class="chef-Projet line-height">
                        <h3>Chef de projet :</h3>
                        <p>&nbsp;Romain BONNES - I5</p>
                     </div>
                     <div class="container-icones-membres">
                        <p><img src="img/membres.png" class="icone-membres" alt="membres" title="icone membres"></p>
                        <p class="nombres-membres">5/7</p>
                     </div>
                     <div class="createur cache cache5 info-projet line-height">
                        <h3>Créateur :</h3>
                        <p>&nbsp;Romain BONNES - I5</p>
                     </div>
                     <div class="membres cache cache5 info-projet line-height">
                        <h3>Membes :</h3><br>
                        <div class="container-membres">
                           <p>&nbsp;Romain BONNES - I5</p>
                           <p>&nbsp;Romain BONNES - I5</p>
                           <p>&nbsp;Romain BONNES - I5</p>
                           <p>&nbsp;Romain BONNES - I5</p>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
         </div>
         <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.0/jquery.min.js"></script>
      <script src='http://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script>
      <script  src="js/index.js"></script>
   </body>
</html>
