<!DOCTYPE html>
<html lang="fr" dir="ltr">
    <head>
        <meta charset="utf-8">
        <title></title>
        <link rel="stylesheet" href="style.css">
        <link rel='stylesheet' href='https://storage.googleapis.com/code.getmdl.io/1.0.4/material.indigo-pink.min.css'>
    </head>
    <body>


          <div class="mdl-grid">
            <div class="mdl-cell mdl-cell--12-col">
              <h4>Connexion</h4>
            </div>
            <div class="mdl-cell mdl-cell--12-col mdl-grid mdl-grid--no-spacing">
              <form action="connexion.php" method="post">
                <div class="mdl-cell mdl-cell--10-col">
                  <div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
                    <input id="username" name="username" type="text" class="mdl-textfield__input" />
                    <label class="mdl-textfield__label" for="username">Identifiant</label>
                  </div>
                </div>
                <div class="mdl-cell mdl-cell--10-col">
                  <div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
                    <input id="password" name="password" class="mdl-textfield__input" type="password" />
                    <label class="mdl-textfield__label" for="password">Password</label>
                  </div>
                </div>
                <div class="mdl-cell mdl-cell--10-col">
                  <button id="login" type="submit" class="mdl-button mdl-js-button mdl-js-ripple-effect mdl-button--raised mdl-button--colored">
                    Login
                  </button>
                </div>
              </form>
            </div>
          </div>
        </main>
      </div>

      <script src='https://storage.googleapis.com/code.getmdl.io/1.0.4/material.min.js'></script>
        <!-- <script  src="js/index.js"></script> -->
    </body>
</html>
