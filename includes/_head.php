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
</header>