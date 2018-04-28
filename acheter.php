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
  <nav><a href="acheter.php">Acheter</a><a href="contact.php">A propos</a><? if (isset($_SESSION['email'])){ ?>
    <ul> 
      <li><span>Bonjour <? echo $_SESSION['nom']; ?> </span><img src="images/downArrow.svg" alt=""></li>
      <li> <a href="#">Mon compte</a></li>
      <li> <a href="deconnection.php">Se deconnecter</a></li>
    </ul><?}else {?>
    <ul>
      <li><a class="connexion" href="connection.php">Se connecter</a><?};?></li>
    </ul>
  </nav>
</header><? include_once 'includes/functions.php';?>
<div id="acheter">
  <div class="cf" id="banner">
    <h1>3 630 annonces</h1>
    <h2>Vente appartement ou maison </h2>
  </div>
  <div class="wrapper">
    <div id="contentAcheter">
      <h1>Nos annonces</h1><? $biens = new afficheBien();?>
<? $biens->getBien();?>
    </div>
  </div>
</div>
<banerdfooter class="cf" id="footer"><a class="logo" href="index.php">immo</a>
  <p>©2016 immo. All rights Reserved</p>
  <p>Terms of Service Privacy Policy</p>
</banerdfooter>
<script>$('#bannerAccueil, #banner').parallax({imageSrc: 'images/banner.jpg'});</script>