<!DOCTYPE html>
<html >
   <head>
      <meta charset="utf-8">
      <meta http-equiv="X-UA-Compatible" content="IE=edge">
      <title></title>
      <meta name="viewport" content="width=device-width, initial-scale=1">
      <link rel="stylesheet" type="text/css" media="screen" href="css/style.css">
   </head>
   <body>
      <div class="header">
         <h1>Modification projet</h1>
      </div>
      <?php include ("menu.php");
      include("functions.php");
      $bdd = getbdd();
      $projets = getProjets($bdd, $_SESSION['user']['id']);
      // var_dump($projets);
      ?>
      <div class="main-container-projets"><?php
         foreach ($projets as $projet) {
            if (!empty($projet->chef_projet)) {
               $chef_projet = getUserById($bdd, $projet->chef_projet);
            }
            ?>
               <a class="lien-maj" href="modification-projet.php?id=<?= $projet->id_projet ?>">
                  <div class="container-projet popup-box popup-box1 maj-projet transform-out">
                     <div class="sub-content">
                        <div class="title">
                           <h2><?= $projet->titre ?></h2>
                        </div>
                        <div class="sub-content-projet">
                           <div class="description-projet">
                              <h3>Description :</h3>
                              <p><?= $projet->description_courte ?>
                              </p>
                           </div>
                           <div class="chef-Projet line-height">
                              <h3>Chef de projet :</h3>
                              <p>&nbsp;<?= $chef_projet->nom_complet ?> - <?= $chef_projet->classe ?></p>
                           </div>
                           <div class="container-icones-membres">
                              <p><img src="img/membres.png" class="icone-membres" alt="membres" title="icone membres"/></p>
                              <p class="nombres-membres">5/7</p>
                           </div>
                        </div>
                     </div>
                  </div>
               </a>
            <?php
         }
       ?>
       </div>
   </body>
</html>
