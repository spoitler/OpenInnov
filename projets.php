<!DOCTYPE html>
<html>
   <head>
      <meta charset="utf-8">
      <meta http-equiv="X-UA-Compatible" content="IE=edge">
      <title></title>
      <meta name="viewport" content="width=device-width, initial-scale=1">
      <link rel="stylesheet" type="text/css" media="screen" href="css/style.css">
      	<link rel="stylesheet" href="css/jquery.mCustomScrollbar.min.css" />
   </head>
   <body>
      <div class="header">
         <h1>PROJETS</h1>
      </div>
<?php
      if (!empty($_GET['cn'])) {
         echo "Bonjour <strong>" . $_GET['cn'] . "</strong>";
      }

      include ("menu.php");
      ?>
      <div class="overlay popup-close"></div>
      <div class="main-container-projets">
         <div class="popup-btn" id="1">
            <div class="container-projet popup-box popup-box1 transform-out">
               <div class="sub-content">
                  <div class="title">
                     <h2>Nom du projet</h2>
                     <div class="cache cache1">
                        <a href="#">Postuler</a>
                     </div>
                  </div>
                  <div class="sub-content-projet">
                     <div class="description-projet">
                        <h3>Description :</h3>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing
                           elit. Sed turpis ligula, aliquam vitae commodo ut,
                           egestas at nisi. Vivamus vulputate efficitur varius.
                           Donec at egestas lectus. Aliquam fringilla pretium
                           euismod. In ac interdum ligula....
                        </p>
                        <p class="cache cache1">
                              Bonjour, Dans le cadre d'Open Innovation je souhaite développer un projet personnel pour l’améliorer et le présenter. Dans cette optique je suis à la recherche de personnes motivées pour former une équipe (WIS et EPSI ). A l’heure actuelle nous sommes deux personnes, moi-même ainsi qu’un ami diplômé d’une école de commerce. Le projet CoinVestigator consiste en une plateforme web donnant accès à tous les internautes à de nombreuses données liées au marché des crypto monnaies. Sous forme de graphiques, d’indicateurs ou encore de données brutes, l'utilisateur peut personnaliser son “tableau de bord” et accéder aux informations de manière totalement gratuite. Différentes offres existent ainsi que différents produits selon l’offre, gratuite ou payante selon l'utilisation. Composé de 5 blocs principaux: 1°) Différents scripts sous nodejs qui récupèrent des données ( prix sur différentes plateformes de trading, activité sur la blockchain, activité des Github, activité des recherches googles, tweets , récupération d’articles de journaux mainstream ou spécialisé...) d’autres fonctionnalités seront ajoutées par la suite. Les scripts tournent grâce à un Cloud chez Ovh (tâches cron, pm2). 2°) La base de données sous MYSQL qui enregistre et stocke les données envoyées par les scripts. Un couplage avec Elasticsearch est prévu Et/Ou un passage sur une base Nosql type MangoDB. Notre base de donnée est hébergé chez OVH. 3°) Un site internet ( https://coinvestigator.co ), il y a encore beaucoup à faire, au niveau du design, des performances ( temps de réponse, sécurité) ou encore des différentes fonctionnalités. Site réalisé sous Angular, il récupère les données via l’api (voir bloc d'après). Le site web lui aussi est hébergé chez Ovh. 4°) L’API, réalisé sous Nodejs avec Expressjs fait des appels, pour la plupart sur la base de données mais pas seulement. Hébergé avec les scripts sur un cloud OVH. 5°) IA, avec l’aide du Machine Learning (neural network) nous souhaitons collecter, analyser puis classer les articles de journaux spécialisés ( probabilité de l’impact sur le marché, catégorisation …). ceci afin de mieux anticiper les mouvements liés au facteur de nombre, mouvements de panique... Pour l’instant seulement des test ont été réalisés et le modèle est à développer. Fait sous Js mais exploration des solution sous Python. Le projet est bien avancé mais il reste encore de nombreuse étapes à franchir avant d’atteindre le succès. Nous avons besoin de développeurs avec des tâches variées, pour le site, les scripts, l’IA ( principalement du Js (Angular/Nodejs), les programmeurs sont aussi les bienvenu! Au niveau de la communication il y a beaucoup à faire concernant les réseaux sociaux (page facebook, twitter), le design et l’identité web ou encore des articles sur le blog du site, en anglais de préférence. B1 ou B2, vous êtes les bienvenus ce sera l'occasion d’apprendre et de vous perfectionner dans de nombreux domaines I4 et I5, nous avons besoin de vous pour avoir un regard critique sur la logique de notre projet mais aussi des conseils de personnes expérimentées WIS, il y à du travail concernant le développement web et mobile, mais aussi toute la communication numérique, ou encore des compétences en webmarketing et le développement du modèle CoinVestigator, vous pouvez apporter beaucoup à ce projet. Bref, si vous êtes passionnés par les Crypto Monnaie avec une forte envie d’être partie prenant de notre projet, contactez-moi. Je vous donnerais avec plaisir plus d’informations. N’hésitez pas à me contacter sur mon adresse gmail: farailba@gmail.com

                        </p>
                     </div>
                     <div class="chef-Projet line-height">
                        <h3>Chef de projet :</h3>
                        <p>&nbsp;Romain BONNES - I5</p>
                     </div>
                     <div class="container-icones-membres">
                        <p><img src="img/membres.png" class="icone-membres" alt="membres" title="icone membres"></p>
                        <p class="nombres-membres">5/7</p>
                     </div>
                     <div class="createur cache cache1 info-projet line-height">
                        <h3>Créateur :</h3>
                        <p>&nbsp;Romain BONNES - I5</p>
                     </div>
                     <div class="membres cache cache1 info-projet line-height">
                        <h3>Membes :</h3><br>
                        <div class="container-membres">
                           <p>&nbsp;Romain BONNES - I5</p>
                           <p>&nbsp;Romain BONNES - I5</p>
                           <p>&nbsp;Romain BONNES - I5</p>
                           <p>&nbsp;Romain BONNES - I5</p>
                        </div>

                     </div>

                  </div>
               </div>
            </div>
         </div>
         <div class="popup-btn" id="0">
            <div class="container-projet popup-box popup-box0 transform-out">
               <div class="sub-content">
                  <div class="title">
                     <h2>Nom du projet 2</h2>
                     <div class="cache cache0">
                        <a href="#">Postuler</a>
                     </div>
                  </div>
                  <div class="sub-content-projet">
                     <div class="description-projet">
                        <h3>Description :</h3>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing
                           elit. Sed turpis ligula, aliquam vitae commodo ut,
                           egestas at nisi. Vivamus vulputate efficitur varius.
                           Donec at egestas lectus. Aliquam fringilla pretium
                           euismod. In ac interdum ligula....
                        </p>
                        <p class="cache cache0">
                           #Miaou Créer une gamelle capable d'identifier l'animal qui se nourrit, mesurer la quantité de nourriture consommé (mesure du poids ?) et stocker cette mesure (écran d'affichage ?) permettant un suivit de la consommation journalière par animal. Une recharge capable de remplir la gamelle lorsqu'elle est vide serait un plus :) . But => Arriver à produire un prototype fonctionnel. #Le groupe recherche des membres : B3
                        </p>
                     </div>
                     <div class="chef-Projet line-height">
                        <h3>Chef de projet :</h3>
                        <p>&nbsp;Romain BONNES - I5</p>
                     </div>
                     <div class="container-icones-membres">
                        <p><img src="img/membres.png" class="icone-membres" alt="membres" title="icone membres"></p>
                        <p class="nombres-membres">5/7</p>
                     </div>
                     <div class="createur cache cache0 info-projet line-height">
                        <h3>Créateur :</h3>
                        <p>&nbsp;Romain BONNES - I5</p>
                     </div>
                     <div class="membres cache cache0 info-projet line-height">
                        <h3>Membes :</h3><br>
                        <div class="container-membres">
                           <p>&nbsp;Romain BONNES - I5</p>
                           <p>&nbsp;Romain BONNES - I5</p>
                           <p>&nbsp;Romain BONNES - I5</p>
                           <p>&nbsp;Romain BONNES - I5</p>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
         </div>
         <div class="popup-btn" id="3">
            <div class="container-projet popup-box popup-box3 transform-out">
               <div class="sub-content">
                  <div class="title">
                     <h2>Nom du projet 3</h2>
                     <div class="cache cache3">
                        <a href="#">Postuler</a>
                     </div>
                  </div>
                  <div class="sub-content-projet">
                     <div class="description-projet">
                        <h3>Description :</h3>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing
                           elit. Sed turpis ligula, aliquam vitae commodo ut,
                           egestas at nisi. Vivamus vulputate efficitur varius.
                           Donec at egestas lectus. Aliquam fringilla pretium
                           euismod. In ac interdum ligula....
                        </p>
                     </div>
                     <div class="chef-Projet line-height">
                        <h3>Chef de projet :</h3>
                        <p>&nbsp;Romain BONNES - I5</p>
                     </div>
                     <div class="container-icones-membres">
                        <p><img src="img/membres.png" class="icone-membres" alt="membres" title="icone membres"></p>
                        <p class="nombres-membres">5/7</p>
                     </div>
                     <div class="createur cache cache3 info-projet line-height">
                        <h3>Créateur :</h3>
                        <p>&nbsp;Romain BONNES - I5</p>
                     </div>
                     <div class="membres cache cache3 info-projet line-height">
                        <h3>Membes :</h3><br>
                        <div class="container-membres">
                           <p>&nbsp;Romain BONNES - I5</p>
                           <p>&nbsp;Romain BONNES - I5</p>
                           <p>&nbsp;Romain BONNES - I5</p>
                           <p>&nbsp;Romain BONNES - I5</p>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
         </div>
         <div class="popup-btn 2" id="2">
            <div class="container-projet popup-box popup-box2 transform-out">
               <div class="sub-content">
                  <div class="title">
                     <h2>Nom du projet 4</h2>
                     <div class="cache cache2">
                        <a href="#">Postuler</a>
                     </div>
                  </div>
                  <div class="sub-content-projet">
                     <div class="description-projet">
                        <h3>Description :</h3>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing
                           elit. Sed turpis ligula, aliquam vitae commodo ut,
                           egestas at nisi. Vivamus vulputate efficitur varius.
                           Donec at egestas lectus. Aliquam fringilla pretium
                           euismod. In ac interdum ligula....
                        </p>
                     </div>
                     <div class="chef-Projet line-height">
                        <h3>Chef de projet :</h3>
                        <p>&nbsp;Romain BONNES - I5</p>
                     </div>
                     <div class="container-icones-membres">
                        <p><img src="img/membres.png" class="icone-membres" alt="membres" title="icone membres"></p>
                        <p class="nombres-membres">5/7</p>
                     </div>
                     <div class="createur cache cache2 info-projet line-height">
                        <h3>Créateur :</h3>
                        <p>&nbsp;Romain BONNES - I5</p>
                     </div>
                     <div class="membres cache cache2 info-projet line-height">
                        <h3>Membes :</h3><br>
                        <div class="container-membres">
                           <p>&nbsp;Romain BONNES - I5</p>
                           <p>&nbsp;Romain BONNES - I5</p>
                           <p>&nbsp;Romain BONNES - I5</p>
                           <p>&nbsp;Romain BONNES - I5</p>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
         </div>
         <div class="popup-btn" id="3">
            <div class="container-projet popup-box popup-box3 transform-out">
               <div class="sub-content">
                  <div class="title">
                     <h2>Nom du projet 3</h2>
                     <div class="cache cache3">
                        <a href="#">Postuler</a>
                     </div>
                  </div>
                  <div class="sub-content-projet">
                     <div class="description-projet">
                        <h3>Description :</h3>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing
                           elit. Sed turpis ligula, aliquam vitae commodo ut,
                           egestas at nisi. Vivamus vulputate efficitur varius.
                           Donec at egestas lectus. Aliquam fringilla pretium
                           euismod. In ac interdum ligula....
                        </p>
                     </div>
                     <div class="chef-Projet line-height">
                        <h3>Chef de projet :</h3>
                        <p>&nbsp;Romain BONNES - I5</p>
                     </div>
                     <div class="container-icones-membres">
                        <p><img src="img/membres.png" class="icone-membres" alt="membres" title="icone membres"></p>
                        <p class="nombres-membres">5/7</p>
                     </div>
                     <div class="createur cache cache3 info-projet line-height">
                        <h3>Créateur :</h3>
                        <p>&nbsp;Romain BONNES - I5</p>
                     </div>
                     <div class="membres cache cache3 info-projet line-height">
                        <h3>Membes :</h3><br>
                        <div class="container-membres">
                           <p>&nbsp;Romain BONNES - I5</p>
                           <p>&nbsp;Romain BONNES - I5</p>
                           <p>&nbsp;Romain BONNES - I5</p>
                           <p>&nbsp;Romain BONNES - I5</p>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
         </div>
         <div class="popup-btn" id="3">
            <div class="container-projet popup-box popup-box3 transform-out">
               <div class="sub-content">
                  <div class="title">
                     <h2>Nom du projet 3</h2>
                     <div class="cache cache3">
                        <a href="#">Postuler</a>
                     </div>
                  </div>
                  <div class="sub-content-projet">
                     <div class="description-projet">
                        <h3>Description :</h3>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing
                           elit. Sed turpis ligula, aliquam vitae commodo ut,
                           egestas at nisi. Vivamus vulputate efficitur varius.
                           Donec at egestas lectus. Aliquam fringilla pretium
                           euismod. In ac interdum ligula....
                        </p>
                     </div>
                     <div class="chef-Projet line-height">
                        <h3>Chef de projet :</h3>
                        <p>&nbsp;Romain BONNES - I5</p>
                     </div>
                     <div class="container-icones-membres">
                        <p><img src="img/membres.png" class="icone-membres" alt="membres" title="icone membres"></p>
                        <p class="nombres-membres">5/7</p>
                     </div>
                     <div class="createur cache cache3 info-projet line-height">
                        <h3>Créateur :</h3>
                        <p>&nbsp;Romain BONNES - I5</p>
                     </div>
                     <div class="membres cache cache3 info-projet line-height">
                        <h3>Membes :</h3><br>
                        <div class="container-membres">
                           <p>&nbsp;Romain BONNES - I5</p>
                           <p>&nbsp;Romain BONNES - I5</p>
                           <p>&nbsp;Romain BONNES - I5</p>
                           <p>&nbsp;Romain BONNES - I5</p>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
         </div>
         <div class="popup-btn" id="3">
            <div class="container-projet popup-box popup-box3 transform-out">
               <div class="sub-content">
                  <div class="title">
                     <h2>Nom du projet 3</h2>
                     <div class="cache cache3">
                        <a href="#">Postuler</a>
                     </div>
                  </div>
                  <div class="sub-content-projet">
                     <div class="description-projet">
                        <h3>Description :</h3>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing
                           elit. Sed turpis ligula, aliquam vitae commodo ut,
                           egestas at nisi. Vivamus vulputate efficitur varius.
                           Donec at egestas lectus. Aliquam fringilla pretium
                           euismod. In ac interdum ligula....
                        </p>
                     </div>
                     <div class="chef-Projet line-height">
                        <h3>Chef de projet :</h3>
                        <p>&nbsp;Romain BONNES - I5</p>
                     </div>
                     <div class="container-icones-membres">
                        <p><img src="img/membres.png" class="icone-membres" alt="membres" title="icone membres"></p>
                        <p class="nombres-membres">5/7</p>
                     </div>
                     <div class="createur cache cache3 info-projet line-height">
                        <h3>Créateur :</h3>
                        <p>&nbsp;Romain BONNES - I5</p>
                     </div>
                     <div class="membres cache cache3 info-projet line-height">
                        <h3>Membes :</h3><br>
                        <div class="container-membres">
                           <p>&nbsp;Romain BONNES - I5</p>
                           <p>&nbsp;Romain BONNES - I5</p>
                           <p>&nbsp;Romain BONNES - I5</p>
                           <p>&nbsp;Romain BONNES - I5</p>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
         </div>
         <div class="popup-btn" id="3">
            <div class="container-projet popup-box popup-box3 transform-out">
               <div class="sub-content">
                  <div class="title">
                     <h2>Nom du projet 3</h2>
                     <div class="cache cache3">
                        <a href="#">Postuler</a>
                     </div>
                  </div>
                  <div class="sub-content-projet">
                     <div class="description-projet">
                        <h3>Description :</h3>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing
                           elit. Sed turpis ligula, aliquam vitae commodo ut,
                           egestas at nisi. Vivamus vulputate efficitur varius.
                           Donec at egestas lectus. Aliquam fringilla pretium
                           euismod. In ac interdum ligula....
                        </p>
                     </div>
                     <div class="chef-Projet line-height">
                        <h3>Chef de projet :</h3>
                        <p>&nbsp;Romain BONNES - I5</p>
                     </div>
                     <div class="container-icones-membres">
                        <p><img src="img/membres.png" class="icone-membres" alt="membres" title="icone membres"></p>
                        <p class="nombres-membres">5/7</p>
                     </div>
                     <div class="createur cache cache3 info-projet line-height">
                        <h3>Créateur :</h3>
                        <p>&nbsp;Romain BONNES - I5</p>
                     </div>
                     <div class="membres cache cache3 info-projet line-height">
                        <h3>Membes :</h3><br>
                        <div class="container-membres">
                           <p>&nbsp;Romain BONNES - I5</p>
                           <p>&nbsp;Romain BONNES - I5</p>
                           <p>&nbsp;Romain BONNES - I5</p>
                           <p>&nbsp;Romain BONNES - I5</p>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
         </div>
         <div class="popup-btn" id="3">
            <div class="container-projet popup-box popup-box3 transform-out">
               <div class="sub-content">
                  <div class="title">
                     <h2>Nom du projet 3</h2>
                     <div class="cache cache3">
                        <a href="#">Postuler</a>
                     </div>
                  </div>
                  <div class="sub-content-projet">
                     <div class="description-projet">
                        <h3>Description :</h3>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing
                           elit. Sed turpis ligula, aliquam vitae commodo ut,
                           egestas at nisi. Vivamus vulputate efficitur varius.
                           Donec at egestas lectus. Aliquam fringilla pretium
                           euismod. In ac interdum ligula....
                        </p>
                     </div>
                     <div class="chef-Projet line-height">
                        <h3>Chef de projet :</h3>
                        <p>&nbsp;Romain BONNES - I5</p>
                     </div>
                     <div class="container-icones-membres">
                        <p><img src="img/membres.png" class="icone-membres" alt="membres" title="icone membres"></p>
                        <p class="nombres-membres">5/7</p>
                     </div>
                     <div class="createur cache cache3 info-projet line-height">
                        <h3>Créateur :</h3>
                        <p>&nbsp;Romain BONNES - I5</p>
                     </div>
                     <div class="membres cache cache3 info-projet line-height">
                        <h3>Membes :</h3><br>
                        <div class="container-membres">
                           <p>&nbsp;Romain BONNES - I5</p>
                           <p>&nbsp;Romain BONNES - I5</p>
                           <p>&nbsp;Romain BONNES - I5</p>
                           <p>&nbsp;Romain BONNES - I5</p>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
         </div>
         <div class="popup-btn" id="3">
            <div class="container-projet popup-box popup-box3 transform-out">
               <div class="sub-content">
                  <div class="title">
                     <h2>Nom du projet 3</h2>
                     <div class="cache cache3">
                        <a href="#">Postuler</a>
                     </div>
                  </div>
                  <div class="sub-content-projet">
                     <div class="description-projet">
                        <h3>Description :</h3>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing
                           elit. Sed turpis ligula, aliquam vitae commodo ut,
                           egestas at nisi. Vivamus vulputate efficitur varius.
                           Donec at egestas lectus. Aliquam fringilla pretium
                           euismod. In ac interdum ligula....
                        </p>
                     </div>
                     <div class="chef-Projet line-height">
                        <h3>Chef de projet :</h3>
                        <p>&nbsp;Romain BONNES - I5</p>
                     </div>
                     <div class="container-icones-membres">
                        <p><img src="img/membres.png" class="icone-membres" alt="membres" title="icone membres"></p>
                        <p class="nombres-membres">5/7</p>
                     </div>
                     <div class="createur cache cache3 info-projet line-height">
                        <h3>Créateur :</h3>
                        <p>&nbsp;Romain BONNES - I5</p>
                     </div>
                     <div class="membres cache cache3 info-projet line-height">
                        <h3>Membes :</h3><br>
                        <div class="container-membres">
                           <p>&nbsp;Romain BONNES - I5</p>
                           <p>&nbsp;Romain BONNES - I5</p>
                           <p>&nbsp;Romain BONNES - I5</p>
                           <p>&nbsp;Romain BONNES - I5</p>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
         </div>
         <div class="popup-btn" id="3">
            <div class="container-projet popup-box popup-box3 transform-out">
               <div class="sub-content">
                  <div class="title">
                     <h2>Nom du projet 3</h2>
                     <div class="cache cache3">
                        <a href="#">Postuler</a>
                     </div>
                  </div>
                  <div class="sub-content-projet">
                     <div class="description-projet">
                        <h3>Description :</h3>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing
                           elit. Sed turpis ligula, aliquam vitae commodo ut,
                           egestas at nisi. Vivamus vulputate efficitur varius.
                           Donec at egestas lectus. Aliquam fringilla pretium
                           euismod. In ac interdum ligula....
                        </p>
                     </div>
                     <div class="chef-Projet line-height">
                        <h3>Chef de projet :</h3>
                        <p>&nbsp;Romain BONNES - I5</p>
                     </div>
                     <div class="container-icones-membres">
                        <p><img src="img/membres.png" class="icone-membres" alt="membres" title="icone membres"></p>
                        <p class="nombres-membres">5/7</p>
                     </div>
                     <div class="createur cache cache3 info-projet line-height">
                        <h3>Créateur :</h3>
                        <p>&nbsp;Romain BONNES - I5</p>
                     </div>
                     <div class="membres cache cache3 info-projet line-height">
                        <h3>Membes :</h3><br>
                        <div class="container-membres">
                           <p>&nbsp;Romain BONNES - I5</p>
                           <p>&nbsp;Romain BONNES - I5</p>
                           <p>&nbsp;Romain BONNES - I5</p>
                           <p>&nbsp;Romain BONNES - I5</p>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
         </div>
         <div class="popup-btn" id="3">
            <div class="container-projet popup-box popup-box3 transform-out">
               <div class="sub-content">
                  <div class="title">
                     <h2>Nom du projet 3</h2>
                     <div class="cache cache3">
                        <a href="#">Postuler</a>
                     </div>
                  </div>
                  <div class="sub-content-projet">
                     <div class="description-projet">
                        <h3>Description :</h3>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing
                           elit. Sed turpis ligula, aliquam vitae commodo ut,
                           egestas at nisi. Vivamus vulputate efficitur varius.
                           Donec at egestas lectus. Aliquam fringilla pretium
                           euismod. In ac interdum ligula....
                        </p>
                     </div>
                     <div class="chef-Projet line-height">
                        <h3>Chef de projet :</h3>
                        <p>&nbsp;Romain BONNES - I5</p>
                     </div>
                     <div class="container-icones-membres">
                        <p><img src="img/membres.png" class="icone-membres" alt="membres" title="icone membres"></p>
                        <p class="nombres-membres">5/7</p>
                     </div>
                     <div class="createur cache cache3 info-projet line-height">
                        <h3>Créateur :</h3>
                        <p>&nbsp;Romain BONNES - I5</p>
                     </div>
                     <div class="membres cache cache3 info-projet line-height">
                        <h3>Membes :</h3><br>
                        <div class="container-membres">
                           <p>&nbsp;Romain BONNES - I5</p>
                           <p>&nbsp;Romain BONNES - I5</p>
                           <p>&nbsp;Romain BONNES - I5</p>
                           <p>&nbsp;Romain BONNES - I5</p>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
         </div>
         <div class="popup-btn" id="3">
            <div class="container-projet popup-box popup-box3 transform-out">
               <div class="sub-content">
                  <div class="title">
                     <h2>Nom du projet 3</h2>
                     <div class="cache cache3">
                        <a href="#">Postuler</a>
                     </div>
                  </div>
                  <div class="sub-content-projet">
                     <div class="description-projet">
                        <h3>Description :</h3>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing
                           elit. Sed turpis ligula, aliquam vitae commodo ut,
                           egestas at nisi. Vivamus vulputate efficitur varius.
                           Donec at egestas lectus. Aliquam fringilla pretium
                           euismod. In ac interdum ligula....
                        </p>
                     </div>
                     <div class="chef-Projet line-height">
                        <h3>Chef de projet :</h3>
                        <p>&nbsp;Romain BONNES - I5</p>
                     </div>
                     <div class="container-icones-membres">
                        <p><img src="img/membres.png" class="icone-membres" alt="membres" title="icone membres"></p>
                        <p class="nombres-membres">5/7</p>
                     </div>
                     <div class="createur cache cache3 info-projet line-height">
                        <h3>Créateur :</h3>
                        <p>&nbsp;Romain BONNES - I5</p>
                     </div>
                     <div class="membres cache cache3 info-projet line-height">
                        <h3>Membes :</h3><br>
                        <div class="container-membres">
                           <p>&nbsp;Romain BONNES - I5</p>
                           <p>&nbsp;Romain BONNES - I5</p>
                           <p>&nbsp;Romain BONNES - I5</p>
                           <p>&nbsp;Romain BONNES - I5</p>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
         </div>
         <div class="popup-btn" id="3">
            <div class="container-projet popup-box popup-box3 transform-out">
               <div class="sub-content">
                  <div class="title">
                     <h2>Nom du projet 3</h2>
                     <div class="cache cache3">
                        <a href="#">Postuler</a>
                     </div>
                  </div>
                  <div class="sub-content-projet">
                     <div class="description-projet">
                        <h3>Description :</h3>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing
                           elit. Sed turpis ligula, aliquam vitae commodo ut,
                           egestas at nisi. Vivamus vulputate efficitur varius.
                           Donec at egestas lectus. Aliquam fringilla pretium
                           euismod. In ac interdum ligula....
                        </p>
                     </div>
                     <div class="chef-Projet line-height">
                        <h3>Chef de projet :</h3>
                        <p>&nbsp;Romain BONNES - I5</p>
                     </div>
                     <div class="container-icones-membres">
                        <p><img src="img/membres.png" class="icone-membres" alt="membres" title="icone membres"></p>
                        <p class="nombres-membres">5/7</p>
                     </div>
                     <div class="createur cache cache3 info-projet line-height">
                        <h3>Créateur :</h3>
                        <p>&nbsp;Romain BONNES - I5</p>
                     </div>
                     <div class="membres cache cache3 info-projet line-height">
                        <h3>Membes :</h3><br>
                        <div class="container-membres">
                           <p>&nbsp;Romain BONNES - I5</p>
                           <p>&nbsp;Romain BONNES - I5</p>
                           <p>&nbsp;Romain BONNES - I5</p>
                           <p>&nbsp;Romain BONNES - I5</p>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
         </div>
         <div class="popup-btn" id="3">
            <div class="container-projet popup-box popup-box3 transform-out">
               <div class="sub-content">
                  <div class="title">
                     <h2>Nom du projet 3</h2>
                     <div class="cache cache3">
                        <a href="#">Postuler</a>
                     </div>
                  </div>
                  <div class="sub-content-projet">
                     <div class="description-projet">
                        <h3>Description :</h3>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing
                           elit. Sed turpis ligula, aliquam vitae commodo ut,
                           egestas at nisi. Vivamus vulputate efficitur varius.
                           Donec at egestas lectus. Aliquam fringilla pretium
                           euismod. In ac interdum ligula....
                        </p>
                     </div>
                     <div class="chef-Projet line-height">
                        <h3>Chef de projet :</h3>
                        <p>&nbsp;Romain BONNES - I5</p>
                     </div>
                     <div class="container-icones-membres">
                        <p><img src="img/membres.png" class="icone-membres" alt="membres" title="icone membres"></p>
                        <p class="nombres-membres">5/7</p>
                     </div>
                     <div class="createur cache cache3 info-projet line-height">
                        <h3>Créateur :</h3>
                        <p>&nbsp;Romain BONNES - I5</p>
                     </div>
                     <div class="membres cache cache3 info-projet line-height">
                        <h3>Membes :</h3><br>
                        <div class="container-membres">
                           <p>&nbsp;Romain BONNES - I5</p>
                           <p>&nbsp;Romain BONNES - I5</p>
                           <p>&nbsp;Romain BONNES - I5</p>
                           <p>&nbsp;Romain BONNES - I5</p>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
         </div>
         <div class="popup-btn" id="3">
            <div class="container-projet popup-box popup-box3 transform-out">
               <div class="sub-content">
                  <div class="title">
                     <h2>Nom du projet 3</h2>
                     <div class="cache cache3">
                        <a href="#">Postuler</a>
                     </div>
                  </div>
                  <div class="sub-content-projet">
                     <div class="description-projet">
                        <h3>Description :</h3>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing
                           elit. Sed turpis ligula, aliquam vitae commodo ut,
                           egestas at nisi. Vivamus vulputate efficitur varius.
                           Donec at egestas lectus. Aliquam fringilla pretium
                           euismod. In ac interdum ligula....
                        </p>
                     </div>
                     <div class="chef-Projet line-height">
                        <h3>Chef de projet :</h3>
                        <p>&nbsp;Romain BONNES - I5</p>
                     </div>
                     <div class="container-icones-membres">
                        <p><img src="img/membres.png" class="icone-membres" alt="membres" title="icone membres"></p>
                        <p class="nombres-membres">5/7</p>
                     </div>
                     <div class="createur cache cache3 info-projet line-height">
                        <h3>Créateur :</h3>
                        <p>&nbsp;Romain BONNES - I5</p>
                     </div>
                     <div class="membres cache cache3 info-projet line-height">
                        <h3>Membes :</h3><br>
                        <div class="container-membres">
                           <p>&nbsp;Romain BONNES - I5</p>
                           <p>&nbsp;Romain BONNES - I5</p>
                           <p>&nbsp;Romain BONNES - I5</p>
                           <p>&nbsp;Romain BONNES - I5</p>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
         </div>
         <div class="popup-btn" id="3">
            <div class="container-projet popup-box popup-box3 transform-out">
               <div class="sub-content">
                  <div class="title">
                     <h2>Nom du projet 3</h2>
                     <div class="cache cache3">
                        <a href="#">Postuler</a>
                     </div>
                  </div>
                  <div class="sub-content-projet">
                     <div class="description-projet">
                        <h3>Description :</h3>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing
                           elit. Sed turpis ligula, aliquam vitae commodo ut,
                           egestas at nisi. Vivamus vulputate efficitur varius.
                           Donec at egestas lectus. Aliquam fringilla pretium
                           euismod. In ac interdum ligula....
                        </p>
                     </div>
                     <div class="chef-Projet line-height">
                        <h3>Chef de projet :</h3>
                        <p>&nbsp;Romain BONNES - I5</p>
                     </div>
                     <div class="container-icones-membres">
                        <p><img src="img/membres.png" class="icone-membres" alt="membres" title="icone membres"></p>
                        <p class="nombres-membres">5/7</p>
                     </div>
                     <div class="createur cache cache3 info-projet line-height">
                        <h3>Créateur :</h3>
                        <p>&nbsp;Romain BONNES - I5</p>
                     </div>
                     <div class="membres cache cache3 info-projet line-height">
                        <h3>Membes :</h3><br>
                        <div class="container-membres">
                           <p>&nbsp;Romain BONNES - I5</p>
                           <p>&nbsp;Romain BONNES - I5</p>
                           <p>&nbsp;Romain BONNES - I5</p>
                           <p>&nbsp;Romain BONNES - I5</p>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
         </div>
         <div class="popup-btn" id="3">
            <div class="container-projet popup-box popup-box3 transform-out">
               <div class="sub-content">
                  <div class="title">
                     <h2>Nom du projet 3</h2>
                     <div class="cache cache3">
                        <a href="#">Postuler</a>
                     </div>
                  </div>
                  <div class="sub-content-projet">
                     <div class="description-projet">
                        <h3>Description :</h3>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing
                           elit. Sed turpis ligula, aliquam vitae commodo ut,
                           egestas at nisi. Vivamus vulputate efficitur varius.
                           Donec at egestas lectus. Aliquam fringilla pretium
                           euismod. In ac interdum ligula....
                        </p>
                     </div>
                     <div class="chef-Projet line-height">
                        <h3>Chef de projet :</h3>
                        <p>&nbsp;Romain BONNES - I5</p>
                     </div>
                     <div class="container-icones-membres">
                        <p><img src="img/membres.png" class="icone-membres" alt="membres" title="icone membres"></p>
                        <p class="nombres-membres">5/7</p>
                     </div>
                     <div class="createur cache cache3 info-projet line-height">
                        <h3>Créateur :</h3>
                        <p>&nbsp;Romain BONNES - I5</p>
                     </div>
                     <div class="membres cache cache3 info-projet line-height">
                        <h3>Membes :</h3><br>
                        <div class="container-membres">
                           <p>&nbsp;Romain BONNES - I5</p>
                           <p>&nbsp;Romain BONNES - I5</p>
                           <p>&nbsp;Romain BONNES - I5</p>
                           <p>&nbsp;Romain BONNES - I5</p>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
         </div>
         <div class="popup-btn 5" id="5">
            <div class="container-projet popup-box popup-box5 transform-out">
               <div class="sub-content">
                  <div class="title">
                     <h2>Nom du projet 5</h2>
                     <div class="cache cache5">
                        <a href="#">Postuler</a>
                     </div>
                  </div>
                  <div class="sub-content-projet">
                     <div class="description-projet">
                        <h3>Description :</h3>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing
                           elit. Sed turpis ligula, aliquam vitae commodo ut,
                           egestas at nisi. Vivamus vulputate efficitur varius.
                           Donec at egestas lectus. Aliquam fringilla pretium
                           euismod. In ac interdum ligula....
                        </p>
                     </div>
                     <div class="chef-Projet line-height">
                        <h3>Chef de projet :</h3>
                        <p>&nbsp;Romain BONNES - I5</p>
                     </div>
                     <div class="container-icones-membres">
                        <p><img src="img/membres.png" class="icone-membres" alt="membres" title="icone membres"></p>
                        <p class="nombres-membres">5/7</p>
                     </div>
                     <div class="createur cache cache5 info-projet line-height">
                        <h3>Créateur :</h3>
                        <p>&nbsp;Romain BONNES - I5</p>
                     </div>
                     <div class="membres cache cache5 info-projet line-height">
                        <h3>Membes :</h3><br>
                        <div class="container-membres">
                           <p>&nbsp;Romain BONNES - I5</p>
                           <p>&nbsp;Romain BONNES - I5</p>
                           <p>&nbsp;Romain BONNES - I5</p>
                           <p>&nbsp;Romain BONNES - I5</p>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
         </div>
         <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
         <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.0/jquery.min.js"></script>
         <script src='http://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script>

      <script  src="js/index.js"></script>
      <script type="text/javascript">
         (function($){
             $(window).on("load",function(){/*mise en place de la scroll barre sur la classe transform-in*/
                 $(".transform-in").mCustomScrollbar({
                    theme:"minimal",
                    scrollInertia: 300
                 });
             });
         })(jQuery);
      </script>
      <script src="js/jquery.mCustomScrollbar.concat.min.js"></script>
   </body>
</html>
