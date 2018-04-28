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
  <h1>Connexion</h1>
  <h2>Inscrivez vous ou connectez vous</h2>
</div>
<div class="wrapper">
  <div id="contentAcheter"><? include 'includes/functions.php';?>
<? if (isset($_SESSION['email'])){ ?>
<?    echo 'Vous etes deja connecte!';} else{?>
    <form action="" method="post">
      <h1>Connection</h1>
      <label>Identifiant
        <input name="email" type="text">
      </label><br>
      <label>Mot de passe
        <input name="password" type="text">
      </label><br>
      <input type="submit"><br><a href="inscription.php">S'inscrire</a>
    </form><?};?>
<? if (isset($_POST['email']) && isset($_POST['password'])){ ?>
<? $email = $_POST['email']; $password = $_POST['password']; ?>
<? connection($email, $password); };?>
  </div>
</div>
<footer class="cf" id="footer"><a class="logo" href="index.php">immo</a>
  <p>©2016 immo. All rights Reserved</p>
  <p>Terms of Service Privacy Policy</p>
</footer>
<script>$('#bannerAccueil, #banner').parallax({imageSrc: 'images/banner.jpg'});</script>