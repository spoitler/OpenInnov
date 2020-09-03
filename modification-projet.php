<!DOCTYPE html>
<html>
   <head>
      <meta charset="utf-8">
      <meta http-equiv="X-UA-Compatible" content="IE=edge">
      <title></title>
      <meta name="viewport" content="width=device-width, initial-scale=1">
      <link rel="stylesheet" href="bootstrap-4.2.1-dist/css/bootstrap.css">
      <link rel="stylesheet" type="text/css" media="screen" href="css/style.css">
   </head>
   <body>
      <div class="header">
         <h1>Modification projet</h1>
      </div>
      <?php include ("menu.php");
      //var_dump($_SESSION);
      include("functions.php");
      $id = $_GET['id'];
      $email = "";
      $bdd = getbdd();
      $projets = getProjet($bdd, $id);?>
         <div class="menu-maj">
            <a href="#Modification" class="modification" >Modification</a>
            <a href="#candidature" class="candidature">Candidature</a>
            <a href="#Membres" class="membres">Membres</a>
         </div>
         <div class="container-modification">
            <form action="maj-projet.php" method="post" id="lien-modif-proj" class="msform form-maj">
               <fieldset>
                  <h2 class="fs-title">Modification Projet</h2>
                  <input type="text" name="titre" placeholder="Nom du projet" value="<?= $projets->titre ?>" required/>
                  <textarea id="descriptionC" name="descriptionC" placeholder="Description courte du projet (330 caractères maximum)" onkeyup="javascript:MaxLengthTextarea(this, 350);" required><?= $projets->description_courte ?></textarea>
                  <textarea id="descriptionL" name="descriptionL" placeholder="Description longue du projet (4000 caractères maximum)" onkeyup="javascript:MaxLengthTextarea(this, 4000);" required><?= $projets->description_longue ?></textarea>
               </fieldset>
               <input type="hidden" name="id" value="<?= $id ?>">
               <button onclick="changelien('maj-projet.php');" class="creation" type="submit"  type="button" name="button">
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
                        <a href="accepte-candidature.php?id=<?= $id; ?>&idU=<?= $candidature->id_utilisateur; ?>&idC=<?= $candidature->id_candidature; ?>">Accepter</a>
                        <a href="suppr-candidature.php?id=<?= $id; ?>&idC=<?= $candidature->id_candidature; ?>">Refuser</a>
                     </div>

                  </div>
                  <div class="trait"></div>
                  <p class="message"><?= $candidature->message; ?></p>
               </div>
         <?php } ?>
            </div>
         </div>

         <div class="container-membres-modif">
            <div class="container-display">
         <?php
         $membres = getMembres($bdd,$id);
            ?>
           <table id="table-membres" class="table">
               <thead>
               <tr>
                   <th scope="col">ID</th>
                   <th scope="col">Role</th>
                   <th scope="col">Nom</th>
                   <th scope="col">Classe</th>
                   <th scope="col">Email
                  <button id="js-textareacopybtn"><p><img class="anchor" src="img/copy.png" alt="" ></p>
                      <div class="box-message">
                         <em>Copied!</em>
                      </div>
                   </button>
                </th>
                   <th></th>
               </tr>
               </thead>
               <tbody>
               <?php foreach ($membres as $membre) {
                  //var_dump($projets)?>
               <tr>
                   <th scope="col"><?=$membre->id_utilisateur ?></th>
                   <th scope="col"><?php if($projets->chef_projet == $membre->id_utilisateur){echo "Chef de projet";}else{echo "Membre";} ?></th>
                   <th scope="col"><?=$membre->nom_complet ?></th>
                   <th scope="col"><?=$membre->classe ?></th>
                   <th scope="col"><?=$membre->email;  $email = $email . $membre->email.';'?></th>
                   <th scope="col" title="supprimer du projet"><?php if ($_SESSION['admin'] == true){?><a href="suppr-membre.php?id=<?= $id ?>&idm=<?= $membre->id_utilisateur ?> "><img class="edit-button" src="img/delete.png" style="height:15px; width:15px;" alt=""></a><?php } ?></th>
               </tr>
               <?php }?>
               </tbody>
           </table>
           <input style="opacity:0;" type="" value="<?= $email ?>" id="js-copytextarea"></input>
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
      <script src='https://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script>
      <script  src="js/index.js"></script>
      <script type="text/javascript">
         function changelien(lien) {
            button = document.getElementById('lien-modif-proj');
            button.setAttribute('action', lien);
         }
      </script>
      <script type="text/javascript">
         var copyTextareaBtn = document.getElementById('js-textareacopybtn');

         copyTextareaBtn.addEventListener('click', function(event) {
         var copyTextarea = document.getElementById('js-copytextarea');
         copyTextarea.select();

         try {
            var successful = document.execCommand('copy');
            var msg = successful ? 'successful' : 'unsuccessful';
            console.log('Copying text command was ' + msg);
         } catch (err) {
            console.log('Oops, unable to copy');
         }
         });
      </script>
      <script type="text/javascript">
         $(document).ready(function(){
            $(".box-message").hide();
            $(".anchor").on("click",function() {
               $(".box-message").fadeIn(150).delay(1800).fadeOut();
            });
         });
      </script>
   </body>
</html>
