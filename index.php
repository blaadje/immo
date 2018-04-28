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
<script>
  $(document).ready(function(){
      $( ".search" ).tabs();
  });
</script>
<div class="cf" id="bannerAccueil"> 
  <h1>Chercher, trouvez</h1>
  <h2>parmi <? countBiens(); ?> annonces immobilières</h2>
  <div class="cf search"> 
    <ul> 
      <li><a href="#tabs1">Acheter</a></li>
      <li><a href="#tabs2">Louer</a></li>
    </ul><br>
    <div id="tabs1">
      <form action="#" method="POST">
        <input type="text" placeholder="Lieu">
        <input type="text" placeholder="Budget max €">
        <input type="text" placeholder="Type de bien">
        <input class="submit" type="submit" value="Rechercher">
      </form>
    </div>
    <div id="tabs2">
      <form action="#" method="POST">
        <input type="text" placeholder="Lieu">
        <input type="text" placeholder="test max €">
        <input type="text" placeholder="Type de bien">
        <input class="submit" type="submit" value="Rechercher">
      </form>
    </div>
    <div style="clear:both;"></div>
  </div>
</div>
<div class="wrapper">
  <div class="cf" id="newAnnonce">  
    <h1>Les nouvelles annonces
      <hr>
    </h1>
    <div id="slider"><? $biens2 = new afficheBienLimited();?>
<? $biens2->getBien();?>
    </div>
  </div>
  <div id="content">
    <h1>Le logement qu’il vous faut est déjà sur Immo.com </h1><img src="images/contentImg.png" alt="">
    <p>
      Vous êtes intéressé par l’achat d’un logement neuf ? Nous vous proposons 
      les offres les plus récentes ou les avant-premières des principaux promoteurs
      du marché. <br> <br>
      Les modélisations en 3 dimensions des programmes immobiliers neufs et les visites 
      virtuelles proposées par Bien’ici, vous permettent de vous projeter dans votre 
      future maison ou appartement. <br> <br>
      En vous offrant le meilleur de l’immobilier, des annonces claires et à jour et des 
      services uniques, nous avons pour ambition de vous simplifier la vie durant toute 
      la durée de votre recherche immobilière.  
    </p>
  </div>
</div>
<div id="bandeauVert">
  <h1>Avec Immo.com vous</h1><br>
  <div class="choisissez">
    <h2>Choisissez</h2>
    <p>Parmis une selection affinee des meilleurs biens immobiliers du marche, pour</p>
    <div class="maison"><img src="images/house.svg" alt=""><span>maisons</span><br><span class="subtitle">testikuhn</span></div>
    <p class="ou">ou</p>
    <div class="appartement"><img src="images/immeuble.svg" alt=""><span>appartements</span><br><span class="subtitle">testikuhn</span></div>
  </div>
  <div class="reservez">
    <h2>Reservez</h2>
    <div class="rapide"><img src="images/clock.svg" alt="">
      <p>Les offres qui correspondent a vos attentes et recevez une reponse rapidement</p>
    </div>
    <div class="rapide"><img src="images/clock.svg" alt="">
      <p>Les offres qui correspondent a vos attentes et recevez une reponse rapidement</p>
    </div>
  </div>
</div>
<banerdfooter class="cf" id="footer"><a class="logo" href="index.php">immo</a>
  <p>©2016 immo. All rights Reserved</p>
  <p>Terms of Service Privacy Policy</p>
</banerdfooter>
<script>$('#bannerAccueil, #banner').parallax({imageSrc: 'images/banner.jpg'});</script>