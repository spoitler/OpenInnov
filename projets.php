<!DOCTYPE html>
<html>
   <head>
      <meta charset="utf-8">
      <meta http-equiv="X-UA-Compatible" content="IE=edge">
      <title></title>
      <meta name="viewport" content="width=device-width, minimum-scale=1">
      <!-- <link rel="stylesheet" href="bootstrap-4.2.1-dist/css/bootstrap.css"> -->
      <!-- <meta name="viewport" content="width=device-width, initial-scale=1"> -->
      <link rel="stylesheet" type="text/css" media="screen" href="css/style.css">

   </head>
   <body>
      <div class="header">
         <h1>PROJETS</h1>
      </div>
<?php
      include ("menu.php");
      include ("functions.php");

      $projetSearch = postVar("rechercheprojet");
      $bdd = getbdd();
      $projets = getAllProjets($bdd);
      $news = getAllNews($bdd);

      if (isset($_SESSION['user']['id'])) {
         $user = getUserById($bdd, $_SESSION['user']['id']);
      }
      //var_dump($user);
      ?>
      <div class="overlay popup-close"></div>
      <div class="main-container-projets">
         <div class="news-container">
            <div class="news-text">
               <?php foreach ($news as $new) {?>
               <p><?= $new->date ?> - <?= $new->description ?></p>
            <?php } ?>
            </div>
         </div>
         <form method="post">
            <div id="block-search">
                <input id="input-search" type="text" value="<?= $projetSearch ?>" placeholder="Rechercher un projet" aria-label="Recipient's username" aria-describedby="button-addon2" name="rechercheprojet">
                <div id="block-button-search" >
                    <button id="button-search" type="submit" id="button-addon2">Rechercher</button>
                </div>
            </div>
         </form>
   <?php if ($projetSearch != false){
            $projets = searchProjet($bdd, $projetSearch);
         }
      foreach ($projets as $projet) {
         $createur = getUserById($bdd, $projet->createur);
         $membres = getMembres($bdd,$projet->id_projet);
         $chef_projet = getUserById($bdd, $projet->chef_projet);
         ?>
         <div class="popup-btn" id="<?= $projet->id_projet ?>">
            <div class="container-projet popup-box popup-box<?= $projet->id_projet ?> transform-out">
               <div class="sub-content">
                  <div class="title">
                     <h2><?= $projet->titre ?></h2>
                     <?php
                     if ($_SESSION['user'] != "public") {   ?>
                     <div class="cache cache<?= $projet->id_projet ?>">
                              <a type="button" <?= ($user->projet != 0 || count($membres) == 6) ? 'class="disabled noAccess"' : 'id="access"'; ?> href="postuler.php?id=<?= $projet->id_projet ?><?= ($chef_projet == 0) ? '&c=true' : '&c=false'; ?>"><?= ($chef_projet == 0) ? 'Devenir chef de projet' : 'Postuler'; ?>
                              </a>
                              <!-- <img onclick="myFunction()" id="imgPopup" src="img/information.png" alt="information">
                              <div class="popuptexteinfo">
                                 <p id="myPopup" ><span>Il n'est pas possible d'etre dans deux projets à la fois</span></p>
                              </div> -->
                     </div>
                  <?php } ?>
                  </div>
                  <div class="sub-content-projet">
                     <div class="description-projet uncache<?= $projet->id_projet ?>">
                        <h3>Description :</h3>
                        <p class="cachepopup<?= $projet->id_projet ?>"><?= $projet->description_courte ?></p>
                        <p class="cache cache<?= $projet->id_projet ?>"><?= $projet->description_longue ?></p>
                     </div>
                     <div class="chef-Projet line-height">
                        <h3>Chef de projet :</h3>
                        <p>&nbsp;<?php if($chef_projet == 0){ echo "Libre -";}else{echo $chef_projet->nom_complet ?> - <?= $chef_projet->classe;} ?></p>
                     </div>
                     <div class="createur cache cache<?= $projet->id_projet ?> info-projet line-height">
                        <h3>Créateur :</h3>
                        <p>&nbsp;<?= $createur->nom_complet ?> - <?= $createur->classe ?></p>
                     </div>
                     <div class="membres cache cache<?= $projet->id_projet ?> info-projet line-height">
                        <h3>Membres :</h3><br><br>
                        <div class="container-membres"><?php
                           foreach ($membres as $membre) { ?>
                           <p><?= $membre->nom_complet ?> - <?= $membre->classe ?></p>
                        <?php } ?>
                        </div>
                     </div>

                  </div>
               </div>
               <div class="container-icones-membres membresI<?= $projet->id_projet ?>">
                  <p><img src="img/membres.png" class="icone-membres" alt="membres" title="icone membres"/></p>
                  <p class="nombres-membres"><?= count($membres); ?>/6</p>
               </div>
            </div>
         </div>
      <?php
       }?>
      </div>
      <script type="text/javascript">
         function myFunction() {
           var popup = document.getElementById("myPopup");
           popup.classList.toggle("show");

         }
      </script>
      <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
      <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.0/jquery.min.js"></script>
      <script src='https://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script>
      <script  src="js/index.js"></script>
   </body>
</html>
