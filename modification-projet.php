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
            <form action="maj-projet.php" method="post" class="msform form-maj">
               <fieldset>
                  <h2 class="fs-title">Modification Projet</h2>
                  <input type="text" name="titre" placeholder="Nom du projet" value="<?= $projets['titre'] ?>" required/>
                  <textarea id="descriptionC" name="descriptionC" placeholder="Description courte du projet (330 caractères maximum)" onkeyup="javascript:MaxLengthTextarea(this, 350);" required><?= $projets['description_courte'] ?></textarea>
                  <textarea id="descriptionL" name="descriptionL" placeholder="Description longue du projet (4000 caractères maximum)" onkeyup="javascript:MaxLengthTextarea(this, 4000);" required><?= $projets['description_longue'] ?></textarea>
                  <div class="wrapper">
                     <p><input type="checkbox" name="cb" id="cb1" <?php if ($projets['createur'] == $projets['chef_projet']) {echo "checked";} ?>><label id="labelcb" for="cb1">Créateur + Chef de projet</label></p>
                     <div class="popupinfo" onclick="myFunction()">
                        <p><img src="img/information.png" alt="information"></p>
                        <p class="popuptexteinfo" id="myPopup" >Si la case est coché, le projet vous appartient. Sinon c'est une idée sans porteur de projet</p>
                     </div>
                  </div>
               </fieldset>
               <input type="hidden" name="id" value="<?= $id ?>">
               <button  id="creation" type="submit"  type="button" name="button">
                  Mettre à jour le projet
               </button>
            </form>
         </div>
         <div class="container-candidature">
            <div class="container-display">
               <div class="box-candidature candidature1">
                  <div class="title-candidature">
                     <h3>Romain BONNES - B1</h3>
                     <a href="#">Accepter</a>
                  </div>
                  <div class="trait"></div>
                  <p class="message">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Morbi arcu nulla, volutpat quis laoreet ac, imperdiet at orci. Nullam ultricies molestie tellus, quis scelerisque diam elementum molestie. Duis posuere tempus nulla at molestie. Aliquam dapibus nisl vel turpis ultrices ullamcorper. Phasellus non porta enim. Aenean laoreet mauris eget ipsum ultricies, a pretium odio pulvinar. Ut sodales felis at ultricies blandit. Ut ut ex enim. Vestibulum quis fringilla sapien, pharetra sollicitudin erat. Morbi vehicula diam nec semper fermentum. Proin quis elit eu lectus iaculis ultrices. </p>
               </div>
               <div class="box-candidature candidature1">
                  <div class="title-candidature">
                     <h3>Romain BONNES - B1</h3>
                     <a href="#">Accepter</a>
                  </div>
                  <div class="trait"></div>
                  <p class="message">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Morbi arcu nulla, volutpat quis laoreet ac, imperdiet at orci. Nullam ultricies molestie tellus, quis scelerisque diam elementum molestie. Duis posuere tempus nulla at molestie. Aliquam dapibus nisl vel turpis ultrices ullamcorper. Phasellus non porta enim. Aenean laoreet mauris eget ipsum ultricies, a pretium odio pulvinar. Ut sodales felis at ultricies blandit. Ut ut ex enim. Vestibulum quis fringilla sapien, pharetra sollicitudin erat. Morbi vehicula diam nec semper fermentum. Proin quis elit eu lectus iaculis ultrices. </p>
               </div>
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
   </body>
</html>
