<?php
session_start();
//var_dump($_SESSION);
if (!empty($_SESSION['user']['connect'])) {
  if ($_SESSION['user']['connect'] == true) {
    header('Location: projets.php');
  }
}else {
   //session_destroy();
   session_start();
// var_dump($_SESSION);
?>
<!DOCTYPE html>
<html>
    <head>
      <meta charset="utf-8">
      <meta http-equiv="X-UA-Compatible" content="IE=edge">
      <title></title>
      <meta name="viewport" content="width=device-width, initial-scale=1">
      <link rel="stylesheet" type="text/css" media="screen" href="css/style.css">
      <link rel='stylesheet' href='https://storage.googleapis.com/code.getmdl.io/1.0.4/material.indigo-pink.min.css'>
    </head>
    <body>
      <?php
         if (isset($_GET['Error'])) {
            if ($_GET['Error'] == 1) {
               echo '<span id="Error">Veuillez rentrer des identifiants valide</span>';
            }
         }
      ?>
      <div id="container-auth">
         <li class="gradient--5">
           <div class="gradient"></div>
           <div class="start-color"></div>
           <div class="end-color"></div>
         </li>
         <div id="container-connexion">
            <div>
              <h4>Connexion</h4>
            </div>
            <div >
              <form action="connexion.php" method="post">
                <div >
                  <div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
                    <input id="username" name="username" type="text" class="mdl-textfield__input" />
                    <label class="mdl-textfield__label" for="username">Identifiant</label>
                  </div>
                </div>
                <div>
                  <div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
                    <input id="password" name="password" class="mdl-textfield__input" type="password" />
                    <label class="mdl-textfield__label" for="password">Password</label>
                  </div>
                </div>
                <div>
                  <button id="login" type="submit" class="mdl-button mdl-js-button mdl-js-ripple-effect mdl-button--raised mdl-button--colored">
                    Login
                  </button>
                </div>
              </form>
            </div>
         </div>
      </div>
      <script src='https://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script>
      <script src='https://storage.googleapis.com/code.getmdl.io/1.0.4/material.min.js'></script>
      <script  src="js/index.js"></script>
    </body>
</html>
<?php
} ?>
