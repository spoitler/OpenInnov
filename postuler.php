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

      $id = $_GET['id'];
      $chef = $_GET['c'];

      $idUtilisateur = $_SESSION['user']['id'];

      $bdd = getbdd();

      $candidature = getCandidatureByUser($bdd, $id, $idUtilisateur);
      $membres = getMembres($bdd, $id);

      if ($chef == "true") {
         addChef($bdd,$id,$idUtilisateur);
         header('Location: selection-projet.php');
      }

      $projet = getProjetPostuler($bdd, $id);

      if (!empty($projet->chef_projet)) {
         $chef_projet = getUserById($bdd, $projet->chef_projet);
      }
      //var_dump($membres);
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
                  </div>
               </div>
            </div>
         </div>
      </div>
      <?php if (!empty($candidature)) { ?>
         <div class="message-projet">
            <h2>Candidature deja envoyée</h2>
         </div>
      <?php }else if (count($membres) == 6) { ?>
         <div class="message-projet">
            <h2>Le projet n'a plus de place disponible</h2>
         </div>
      <?php }else { ?>
      <div class="message-projet">
         <h2>Votre message</h2>
         <form action="envoi-postuler.php" method="post" class="msform">
            <fieldset>
               <textarea id="message" name="message" placeholder="Votre message au chef de projet" rows="10" onkeyup="javascript:MaxLengthTextarea(this, 4000);" required></textarea>
               <input type="hidden" name="id" value="<?= $projet->id_projet; ?>">
            </fieldset>
            <button class="creation" type="submit" class="mdl-button mdl-js-button mdl-js-ripple-effect mdl-button--raised mdl-button--colored">
               Envoyer
            </button>
         </form>
      </div>
   <?php } ?>
   </body>
</html>
