<? session_start(); ?><!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title></title>
    <link rel="stylesheet" href="style/application.css">
    <script src="https://code.jquery.com/jquery-3.1.1.min.js"></script>
    <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.min.js"></script>
    <script src="js/parallax.js"></script>
  </head>
  <body></body>
</html>
<header><a href="index.php">
    <p class="logo">Immo</p></a>
  <nav><a href="acheter.php">Acheter</a><a href="depot.php">Déposer une annonce</a><a href="contact.php">A propos</a><a class="connexion" href="connection.php">Se connecter</a></nav>
</header>
<div class="cf" id="banner">
  <h1>A propos</h1>
  <h2>En savoir plus sur <i>Immo</i></h2>
</div>
<div class="wrapper">
  <div id="contentAcheter">
    <h1>Projet BTS 2016/2017</h1>
    <p>
      L'agence immobilière Immo propose des biens à d'éventuels acheteurs ou locataires, mandaté par des propriétaires ou d'autres agences immobilières.
      Les biens sont des biens d'habitation (studios, appartements, maisons, ou des biens commerciaux (terrains, entrepôts)).
      Pour exercer son activité, l'agence gère les informations suivantes :
      - les noms, adresses, téléphone, heures de présence téléphoniques et adresses mail des propriétaires ou agences sous traitant des biens
      - les noms, adresses, téléphone, heures de présence téléphonique et adresses mail des clients
      - les localisations, dates de soumission, dates de mise à disposition, status (disponible, réservé, loué, acheté), références cadastrales, prix, charges, l’État (en l'état, à restaurer, correct, exceptionnel) des biens.
      Le prix et le montant de l'achat demandé pour un bien à acheter et est le loyer mensuel pour un bien à louer.
    </p>
  </div>
</div>
<footer class="cf" id="footer"><a class="logo" href="index.php">immo</a>
  <p>©2016 immo. All rights Reserved</p>
  <p>Terms of Service Privacy Policy</p>
</footer>
<script>$('#bannerAccueil, #banner').parallax({imageSrc: 'images/banner.jpg'});</script>
