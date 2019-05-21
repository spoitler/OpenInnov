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
         <h1>POSTULER</h1>
      </div>
      <?php
      include ("menu.php");
      include ("functions.php");

      $bdd = getbdd();

      $projet = getProjetPostuler($bdd, $_GET['id']);

      if (!empty($projet->chef_projet)) {
         $chef_projet = getUserById($bdd, $projet->chef_projet);
      }

      ?>
      <div class="main-container-projets">
         <div class="box-projet" id="<?= $projet->id_projet ?>">
            <div class="container-projet popup-box popup-box<?= $projet->id_projet ?>">
               <div class="sub-content-postuler">
                  <div class="title">
                     <h2><?= $projet->titre ?></h2>
                  </div>
                  <div class="sub-content-projet">
                     <div class="description-projet-postuler uncache<?= $projet->id_projet ?>">
                        <h3>Description :</h3>
                        <p><?= $projet->description_courte ?></p>
                        <p><?= $projet->description_longue ?></p>
                     </div>
                     <div class="chef-Projet line-height">
                        <h3>Chef de projet :</h3>
                        <p>&nbsp;<?= $chef_projet->nom_complet ?> - <?= $chef_projet->classe ?></p>
                     </div>
                     <div class="createur info-projet line-height">
                        <h3>Créateur :</h3>
                        <p>&nbsp;<?= $projet->nom_complet ?> - <?= $projet->classe ?></p>
                     </div>
                     <div class="membres info-projet line-height">
                        <h3>Membes :</h3><br>
                        <div class="container-membres">
                           <p>&nbsp;Romain BONNES - I5</p>
                           <p>&nbsp;Romain BONNES - I5</p>
                           <p>&nbsp;Romain BONNES - I5</p>
                           <p>&nbsp;Romain BONNES - I5</p>
                        </div>
                     </div>
                     <div class="container-icones-membres membresI<?= $projet->id_projet ?>">
                        <p><img src="img/membres.png" class="icone-membres" alt="membres" title="icone membres"/></p>
                        <p class="nombres-membres">5/7</p>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </div>
      <div class="message-projet">
         <h2>Votre message</h2>
         <form action="creation-projet.php" method="post" class="msform">
            <fieldset>
               <textarea id="descriptionL" name="descriptionL" placeholder="Votre message au chef de projet" rows="10" onkeyup="javascript:MaxLengthTextarea(this, 4000);" required></textarea>
            </fieldset>
            <button onclick="return minlength(150);" id="creation" type="submit" class="mdl-button mdl-js-button mdl-js-ripple-effect mdl-button--raised mdl-button--colored">
               Envoyer
            </button>
         </form>
      </div>
   </body>
</html>
