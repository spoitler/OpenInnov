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
      <form action="creation-projet.php" method="post" class="msform form_inscription">
         <fieldset>
            <h2 class="fs-title">Nouveau Projet</h2>
            <input type="text" name="titre" placeholder="Nom du projet" required/>
            <textarea id="descriptionC" name="descriptionC" placeholder="Description courte du projet (330 caractères maximum)" onkeyup="javascript:MaxLengthTextarea(this, 350);" required></textarea>
            <textarea id="descriptionL" name="descriptionL" placeholder="Description longue du projet (4000 caractères maximum)" rows="10" onkeyup="javascript:MaxLengthTextarea(this, 4000);" required></textarea>
            <div class="wrapper">
               <p><input type="checkbox" name="cb" id="cb1" checked><label for="cb1">Créateur + Chef de projet</label></p>
               <div class="popupinfo" onclick="myFunction()">
                  <p><img src="img/information.png" alt="information"></p>
                  <p class="popuptexteinfo" id="myPopup" >Si la case est coché, le projet vous appartient. Sinon c'est une idée sans porteur de projet</p>
               </div>
            </div>

         </fieldset>
      <div id="submit_inscription">
         <button type="submit" name="submit" class="submit action-button" value="Submit">Créer le projet</button>
      </div>
      </form>
      <script>
         // popup
         function myFunction() {
           var popup = document.getElementById("myPopup");
           popup.classList.toggle("show");

         }
         function MaxLengthTextarea(objettextarea,maxlength){
            if (objettextarea.value.length > maxlength) {
               objettextarea.value = objettextarea.value.substring(0, maxlength);
               alert('Votre texte ne doit pas dépasser '+maxlength+' caractères!');
            }
         }
</script>
   </body>
</html>
