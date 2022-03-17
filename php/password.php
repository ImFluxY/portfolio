<?php

  require (__DIR__ . "/param.inc.php");

  if($_POST['password'] == ADMINPASS)
  {
    header("")
  }

?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="utf-8">
    <title>Aurélien Durier | Contact</title>
    <meta name="description" content="Portfolio web de Aurélien Durier, étudiant en DUT MMI à l'IUT de Laval, France. Apprenez en plus sur Aurélien Durier et découvrez ses différents projets. Contactez Aurélien Durier pour plus d'informations.">
    <meta name="author" content="Aurélien Durier">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <link rel="icon" type="image/png" sizes="32x32" href="/assets/logo/logo_favicon_32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="/assets/logo/logo_favicon_16.png">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/password.css">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Comfortaa:wght@300&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Comfortaa:wght@300&family=Poppins:ital,wght@0,100;0,400;1,900&display=swap" rel="stylesheet">
</head>
<body>
  <div class="loading-content">
    <div class="loading">
        <p>chargement</p>
        <span></span>
    </div>
  </div>
  <a id="logo" href="/index.html"><h1>aurel.</h1></a>
  <h2 class="social-media">
      <a href="https://www.linkedin.com/in/aur%C3%A9lien-durier-5bb745200/" target="_blank">linkedin</a>
      <span>></span>
      <a href="https://www.instagram.com/aureldrr.pro/?hl=fr" target="_blank">instagram</a>
      <span>></span>
      <a href="mailto:contact@aureliendurier.fr" target="_blank">e-mail</a>
      <span>></span>
      <a href="/legal.html" target="_blank">mentions légales</a>
  </h2>
  <div class="menu-btn">
      <div class="menu-btn-graphic"></div>
    </div>
    <div class="menu-burger">
        <a href="/profile.html" class="menu-option">
            <h1>PROFIL ></h1>
        </a>
        <a href="/gallery.html" class="menu-option">
            <h1>GALERIE ></h1>
        </a>
        <a href="/contact.html" class="menu-option">
            <h1>CONTACT ></h1>
        </a>
    </div>
  </div>
  <div class="content">
    <h1>Hop Hop Hop !</h1>
    <h2>Merci de rentrer le mot de passe :</h2>
    <form method="post">
      <input type="text" name="password" value="password">
      <input class="btn" type="submit">
    </form>
  </div>
  <script src="js/script.js"></script>
  <script src="js/contact.js"></script>
</body>
</html>