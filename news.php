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
   <body><?php
      include ("menu.php");
      include ("functions.php");

      $bdd = getbdd();
      $news = getAllNews($bdd);
      ?>

      <table id="table-membres" class="table">
          <thead>
          <tr>
             <th scope="col">ID</th>
             <th scope="col">Date</th>
             <th scope="col">Description</th>
             <th>
                <div class="container-news-button">
                   <a href="add-news.php" type="button" class="nouveau-news" name="button"><p><img src="img/add.png"></p>Nouveau</a>
                </div>
            </th>
          </tr>
          </thead>
          <tbody>

          <?php
         if (!empty($news)) {
           foreach ($news as $new) {
             //var_dump($projets)

            ?>
          <tr>

             <th scope="col"><?=$new->id ?></th>
             <th scope="col"><?=$new->date ?></th>
             <th scope="col"><?=$new->description ?></th>
             <!-- <th scope="col" title="supprimer du projet"><?php if ($_SESSION['admin'] == true){?><a href="suppr-membre.php?id=<?= $id ?>&idm=<?= $membre->id_utilisateur ?> "><img class="edit-button" src="img/delete.png" style="height:15px; width:15px;" alt=""></a><?php } ?></th> -->
          </tr>
       <?php }
    }else {?>
          <tr>
             <th colspan="4" style="text-align:center">Aucune News</th>
          </tr>
       <?php }?>
          </tbody>
      </table>
   </body>
</html>
