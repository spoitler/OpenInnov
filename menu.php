<?php session_start();
if (empty($_SESSION['user'])) {
   header('Location: index.php');
}elseif (isset($_SESSION['public'])) { ?>
   <div class="container-menu">
      <div class="container-icones">
      <div class="icones">
         <a href="deconnexion.php"><p><img src="img/logout.png" alt="modification projet"><span class="menu-texte-icones">Déconnexion</span></p></a>
      </div>
      <div class="icones">
      </div>
   </div>
</div>
<?php }else {
// var_dump($_SESSION);
?>
<div class="container-menu">
   <div class="container-icones">
      <div class="icones">
         <a href="projets.php"><p><img src="img/list.png" alt="liste projets"><span class="menu-texte-icones">Projets</span></p></a>
      </div>
      <div class="icones">
         <div class="icones-cross">
            <a href="nouveau-projet.php"><p><img src="img/add.png" alt="ajout projets"><span class="menu-texte-icones">Nouveau Projet</span></p></a>
         </div>
      </div>
      <div class="icones">
         <a href="selection-projet.php"><p><img src="img/edit.png" alt="modification projet"><span class="menu-texte-icones">Modification Projet</span></p></a>
      </div>
      <?php
      if (!empty($_SESSION['admin'])) {
         if ($_SESSION['admin'] == true) {
            ?><div class="icones">
               <a href="admin.php"><p><img src="img/admin.png"><span class="menu-texte-icones">Admin</span></p></a>
            </div>
            <div class="icones">
               <a href="news.php"><p><img src="img/news.png"><span class="menu-texte-icones">News</span></p></a>
            </div><?php
         }
      }
      ?>
      <div class="icones">
         <a href="deconnexion.php"><p><img src="img/logout.png" alt="modification projet"><span class="menu-texte-icones">Déconnexion</span></p></a>
      </div>
      <div class="icones">
      </div>
   </div>
</div>
<?php } ?>
