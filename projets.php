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
      include ("functions.php");

      $bdd = getbdd();
      $projets = getAllProjets($bdd);
      $user = getUserById($bdd, $_SESSION['user']['id']);
      // var_dump($_SESSION);
      ?>
      <div class="overlay popup-close"></div>
      <div class="main-container-projets">
      <?php
      foreach ($projets as $projet) {
         $membres = getMembres($bdd,$projet->id_projet);
         if (!empty($projet->chef_projet)) {
            $chef_projet = getUserById($bdd, $projet->chef_projet);
         }
         ?>
         <div class="popup-btn" id="<?= $projet->id_projet ?>">
            <div class="container-projet popup-box popup-box<?= $projet->id_projet ?> transform-out">
               <div class="sub-content">
                  <div class="title">
                     <h2><?= $projet->titre ?></h2>
                     <div class="cache cache<?= $projet->id_projet ?>">
                        <a <?php if(!empty($user->projet)){ echo 'class="disabled"';} ?>href="postuler.php?id=<?= $projet->id_projet ?>">Postuler</a>
                     </div>
                  </div>
                  <div class="sub-content-projet">
                     <div class="description-projet uncache<?= $projet->id_projet ?>">
                        <h3>Description :</h3>
                        <p class="cachepopup<?= $projet->id_projet ?>"><?= $projet->description_courte ?></p>
                        <p class="cache cache<?= $projet->id_projet ?>"><?= $projet->description_longue ?></p>
                     </div>
                     <div class="chef-Projet line-height">
                        <h3>Chef de projet :</h3>
                        <p>&nbsp;<?= $chef_projet->nom_complet ?> - <?= $chef_projet->classe ?></p>
                     </div>
                     <div class="createur cache cache<?= $projet->id_projet ?> info-projet line-height">
                        <h3>Créateur :</h3>
                        <p>&nbsp;<?= $projet->nom_complet ?> - <?= $projet->classe ?></p>
                     </div>
                     <div class="membres cache cache<?= $projet->id_projet ?> info-projet line-height">
                        <h3>Membes :</h3><br>
                        <div class="container-membres"><?php
                           foreach ($membres as $membre) { ?>
                           <p>&nbsp;<?= $membre->nom_complet ?> - <?= $membre->classe ?></p>
                        <?php } ?>
                        </div>
                     </div>
                     <div class="container-icones-membres membresI<?= $projet->id_projet ?>">
                        <p><img src="img/membres.png" class="icone-membres" alt="membres" title="icone membres"/></p>
                        <p class="nombres-membres"><?= count($membres); ?>/7</p>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      <?php
       } ?>
      </div>
      <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
      <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.0/jquery.min.js"></script>
      <script src='http://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script>
      <script  src="js/index.js"></script>
   </body>
</html>
