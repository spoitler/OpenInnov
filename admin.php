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
      <?php
      include ("menu.php");
      include ("functions.php");
      $bdd = getbdd();
      $inputU = getVar("filterUser");
      $inputP = getVar("filterProjet");
      $searchUserPost = postVar("rechercheutilisateur");
      $searchProjetPost = postVar("rechercheprojet");
      echo $searchProjetPost;
      $users = RequestUser($inputU, $bdd);
      $projets = RequestProjet($inputP, $bdd);
      $email = "";
      ?>
      <div class="container">
          <h1 class="text-center">Utilisateurs</h1>
          <hr>
          <form method="post">
             <div class="input-group mb-3">
                 <input type="text" class="form-control" value="<?= $searchUserPost ?>" placeholder="Rechercher un utilisateur" aria-label="Recipient's username" aria-describedby="button-addon2" name="rechercheutilisateur">
                 <div class="input-group-append">
                     <button class="btn btn-outline-secondary" type="submit" id="button-addon2">Rechercher</button>
                 </div>
             </div>
          </form>
          <table class="table">
              <thead>
              <tr>
                  <th scope="col">ID</th>
                  <th scope="col">Nom</th>
                  <th scope="col">Classe</th>
                  <th scope="col">Email</th>
                  <th scope="col">Projet</th>
              </tr>
              </thead>
              <tbody>
              <?php if (!empty($searchUserPost)) {
                       $searchUsers = searchUser($bdd, $searchUserPost);
                       foreach ($searchUsers as $searchUser) {
                          echo "<tr>
                              <th scope='col'>$searchUser->id_utilisateur</th>
                              <th scope='col'>$searchUser->nom_complet</th>
                              <th scope='col'>$searchUser->classe</th>
                              <th scope='col'>$searchUser->email</th>
                              <th scope='col'>$searchUser->projet</th>
                          </tr>";
                      }
                  }else {
                    echo '<tr style="text-align:center">
                        <th colspan="5" scope="col">aucun utilisateur recherché</th>
                     </tr>';
            } ?>
              </tbody>
          </table>
          <form  method="get">
             <div class="input-group">
                 <select class="custom-select" id="inputGroupSelect04" aria-label="Example select with button addon" name="filterUser">
                     <option>Tous les utilisateurs </option>
                     <option value="1">Utilisateurs avec projet</option>
                     <option value="2">Utilisateurs sans projet</option>
                 </select>
                 <div class="input-group-append">
                     <button class="btn btn-outline-secondary" type="submit">Filtrer</button>
                 </div>
             </div>
          </form>
          <table class="table">
              <thead>
              <tr>
                  <th scope="col">ID</th>
                  <th scope="col">Nom</th>
                  <th scope="col">Classe</th>
                  <th scope="col">Email<button id="js-textareacopybtn"><p><img class="anchor" src="img/copy.png" alt="" ></p>
                     <div class="box-message">
                        <em>Copied!</em>
                     </div>
                  </button></th>
                  <th scope="col">Projet</th>
              </tr>
              </thead>
              <tbody>
              <?php foreach ($users as $user) { ?>
              <tr>
                  <th scope="col"><?=$user->id_utilisateur ?></th>
                  <th scope="col"><?=$user->nom_complet ?></th>
                  <th scope="col"><?=$user->classe ?></th>
                  <th scope="col"><?=$user->email;  $email = $email . $user->email.';'?></th>
                  <th scope="col"><?=$user->projet ?></th>
              </tr>
              <?php }?>
              </tbody>
          </table>
          <h1 class="text-center">Projets</h1>
          <hr>
          <div class="admin-groupe">
             <p><strong>Nombre de projets :<strong>&nbsp;<?= count($projets) ?></p>
          </div>
          <form method="post">
             <div class="input-group mb-3">
                 <input type="text" class="form-control" value="<?= $searchUserPost ?>" placeholder="Rechercher un projet" aria-label="Recipient's username" aria-describedby="button-addon2" name="rechercheprojet">
                 <div class="input-group-append">
                     <button class="btn btn-outline-secondary" type="submit" id="button-addon2">Rechercher</button>
                 </div>
             </div>
          </form>
          <table class="table">
              <thead>
              <tr>
                 <th scope="col">ID</th>
                 <th width="20%" scope="col">Titre</th>
                 <th scope="col">Créateur</th>
                 <th width="10%" scope="col">Chef projet</th>
                 <th scope="col">Description courte</th>
              </tr>
              </thead>
              <tbody>
              <?php if (!empty($searchProjetPost)) {
                       $searchProjets = searchProjet($bdd, $searchProjetPost);
                       foreach ($searchProjets as $searchProjet) {
                          echo "<tr>
                              <th scope='col'>$searchProjet->id_projet</th>
                              <th scope='col'>$searchProjet->titre</th>
                              <th scope='col'>$searchProjet->createur</th>
                              <th scope='col'>$searchProjet->chef_projet</th>
                              <th scope='col'>$searchProjet->description_courte</th>
                          </tr>";
                      }
                  }else {
                    echo '<tr style="text-align:center">
                        <th colspan="5" scope="col">aucun projet recherché</th>
                     </tr>';
            } ?>
              </tbody>
          </table>
          <form method="get">
             <div class="input-group">
                 <select class="custom-select" id="inputGroupSelect04" aria-label="Example select with button addon" name="filterProjet">
                     <option>Tous les projets</option>
                     <option value="1">groupes avec chef de projet</option>
                     <option value="2">groupes sans chef de projet</option>
                 </select>
                 <div class="input-group-append">
                     <button class="btn btn-outline-secondary" type="submit">Filtrer</button>
                 </div>
             </div>
          </form>
          <table class="table">
              <thead>
              <tr>
                  <th scope="col">ID</th>
                  <th width="20%" scope="col">Titre</th>
                  <th scope="col">Créateur</th>
                  <th width="10%" scope="col">Chef projet</th>
                  <th scope="col">Description courte</th>
              </tr>
              </thead>
              <tbody>
              <?php foreach ($projets as $projet) {
                     $chef_projet = getUserById($bdd, $projet->chef_projet);
                     $createur = getUserById($bdd, $projet->createur);
                 ?>
              <tr>
                  <th scope="col"><?=$projet->id_projet ?></th>
                  <th scope="col"><?=$projet->titre ?></th>
                  <th scope="col"><?=$createur->nom_complet ?></th>
                  <th scope="col"><?=$chef_projet->nom_complet?></th>
                  <th scope="col"><?=$projet->description_courte ?></th>
                  <th scope="col"><a href="modification-projet.php?id=<?=$projet->id_projet ?>"><img class="edit-button" src="img/edit.png" alt=""></a></th>
              </tr>
              <?php }?>
              </tbody>
          </table>
          <input style="opacity:0;" type="" value="<?= $email ?>" id="js-copytextarea"></input>
      </div>
      <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
      <script type="text/javascript">
         $(document).ready(function(){
            $(".box-message").hide();
            $(".anchor").on("click",function() {
               $(".box-message").fadeIn(150).delay(1800).fadeOut();
            });
         });
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
      <script src="jquery/jquery.js"></script>
      <script src="bootstrap-4.2.1-dist/js/bootstrap.js"></script>
   </body>
</html>
