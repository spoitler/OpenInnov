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
      $input = getVar("filterUser");
      $users = RequestUser($input, $bdd);
      $email = "";
      ?>
      <div class="container">
          <h1 class="text-center">Utilisateurs</h1>
          <hr>
          <form  method="get">
             <div class="input-group mb-3">
                 <input type="text" class="form-control" placeholder="Rechercher un utilisateur" aria-label="Recipient's username" aria-describedby="button-addon2" name="rechercheutilisateur">
                 <div class="input-group-append">
                     <button class="btn btn-outline-secondary" type="submit" id="button-addon2">Rechercher</button>
                 </div>
             </div>
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
