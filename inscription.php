<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title></title>
    <link rel="stylesheet" href="style/application.css">
    <script src="https://code.jquery.com/jquery-3.1.1.min.js"></script>
    <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.min.js"></script>
  </head>
  <body>
    <header><a href="index.php">
        <p class="logo">Immo</p></a>
      <nav><a href="acheter.php">Acheter</a><a href="depot.php">Déposer une annonce</a><a href="contact.php">A propos</a><a class="connexion" href="connection.php">Se connecter</a></nav>
    </header>
    <div class="cf" id="banner">
      <h1>Connexion</h1>
      <h2>Inscrivez vous ou connectez vous</h2>
    </div>
    <div class="wrapper">
      <div id="contentAcheter">
        <form action="#" METHOD="POST">
          <h1>Inscription</h1>
          <label>Identifiant
            <input type="text">
          </label><br>
          <label>Email
            <input type="text">
          </label><br>
          <label>Nom
            <input type="text">
          </label><br>
          <label>Prénom
            <input type="text">
          </label><br>
          <label>Telephone
            <input type="text">
          </label><br>
          <label>Mot de passe
            <input type="text">
          </label><br>
          <input type="submit"><br><a href="inscription">S'inscrire</a>
        </form>
      </div>
    </div>
    <footer class="cf" id="footer"><a class="logo" href="index.php">immo</a>
      <p>©2016 immo. All rights Reserved</p>
      <p>Terms of Service Privacy Policy</p>
    </footer>
  </body>
</html>