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
         <h1>Modification projet</h1>
      </div>
      <?php include ("menu.php");
      include("functions.php");
      $id = $_GET['id'];
      $bdd = getbdd();
      $projets = getProjet($bdd, $id);?>
         <div class="menu-maj">
            <a href="#" class="modification" >Modification</a>
            <a href="#" class="candidature" onkeyup="javascript:menu();">Candidature</a>
         </div>
         <div class="container-modification">
            <form action="maj-projet.php" method="post" id="lien-modif-proj" class="msform form-maj">
               <fieldset>
                  <h2 class="fs-title">Modification Projet</h2>
                  <input type="text" name="titre" placeholder="Nom du projet" value="<?= $projets->titre ?>" required/>
                  <textarea id="descriptionC" name="descriptionC" placeholder="Description courte du projet (330 caractères maximum)" onkeyup="javascript:MaxLengthTextarea(this, 350);" required><?= $projets->description_courte ?></textarea>
                  <textarea id="descriptionL" name="descriptionL" placeholder="Description longue du projet (4000 caractères maximum)" onkeyup="javascript:MaxLengthTextarea(this, 4000);" required><?= $projets->description_longue ?></textarea>
                  <div class="wrapper">
                     <p><input type="checkbox" name="cb" id="cb1" <?php if ($projets->createur == $projets->chef_projet) {echo "checked";} ?>><label id="labelcb" for="cb1">Créateur + Chef de projet</label></p>
                     <div class="popupinfo" onclick="myFunction()">
                        <p><img src="img/information.png" alt="information"></p>
                        <p class="popuptexteinfo" id="myPopup" >Si la case est coché, le projet vous appartient. Sinon c'est une idée sans porteur de projet</p>
                     </div>
                  </div>
               </fieldset>
               <input type="hidden" name="id" value="<?= $id ?>">
               <button onclick="changelien('maj-projet.php');"  class="creation" type="submit"  type="button" name="button">
                  Mettre à jour le projet
               </button>
               <button onclick="changelien('suppr-projet.php');" class="creation suppresion-projet" type="submit"  type="button" name="button">
                  Supprimer le projet
               </button>
            </form>

         </div>
         <div class="container-candidature">
            <div class="container-display">
         <?php
         $candidatures = getcandidature($bdd,$id);
            foreach ($candidatures as $candidature) {
            ?>
               <div class="box-candidature candidature candidature<?= $candidature->id_candidature; ?>">
                  <div class="title-candidature">
                     <h3><?= $candidature->nom_complet; ?> - <?= $candidature->classe; ?></h3>
                     <div class="container-button-cadidature">
                        <a href="accepte-candidature.php?id=<?= $id ?>&idU=<?= $candidature->id_utilisateur; ?>">Accepter</a>
                        <a href="suppr-candidature.php?id=<?= $candidature->id_candidature ?>">Refuser</a>
                     </div>

                  </div>
                  <div class="trait"></div>
                  <p class="message"><?= $candidature->message; ?></p>
               </div>
         <?php } ?>
            </div>
         </div>
      <script>
         function MaxLengthTextarea(objettextarea,maxlength){
            if (objettextarea.value.length > maxlength) {
               objettextarea.value = objettextarea.value.substring(0, maxlength);
               alert('Votre texte ne doit pas dépasser '+maxlength+' caractères!');
            }
         }
      </script>
      <script src='http://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script>
      <script  src="js/index.js"></script>
      <script>
         function changelien(lien) {
            button = document.getElementById('lien-modif-proj');
            button.setAttribute('action', lien);
         }
      </script>
   </body>
</html>
