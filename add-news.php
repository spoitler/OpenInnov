<?php
session_start();
 if ($_SESSION["user"] != "admin"){
   header('Location: projets.php');
} ?>
<html lang="fr">
   <head>
      <meta charset="utf-8">
      <meta http-equiv="X-UA-Compatible" content="IE=edge">
      <title></title>
      <meta name="viewport" content="width=device-width, initial-scale=1">
      <link rel="stylesheet" href="bootstrap-4.2.1-dist/css/bootstrap.css">
      <link rel="stylesheet" type="text/css" media="screen" href="css/style.css">
   </head>
   <body>
      <?php
      include ("menu.php");
      include ("functions.php");
       ?>

       <form action="add-news-bdd.php" method="post" class="msform">
          <fieldset>
             <h2 class="fs-title">Nouvelle news</h2>
             <textarea id="description" name="description" placeholder="Description news" rows="1" required></textarea>

          </fieldset>
          <button class="creation" type="submit" class="mdl-button mdl-js-button mdl-js-ripple-effect mdl-button--raised mdl-button--colored">
             Créer la news
          </button>
       </form>

   </body>
</html>
