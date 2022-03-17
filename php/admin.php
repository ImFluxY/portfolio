<?php

  require (__DIR__ . "/param.inc.php");

  $bd = new PDO("mysql:host=".MYHOST.";dbname=".MYDB.";charset=UTF8", MYUSER, MYPASS);

  $requestInfos = "SELECT id, nom, mail, message FROM formulaire";
  $statementInfo = $bd->query($requestInfos);
  $ligne = $statementInfo->fetch(PDO::FETCH_ASSOC);

?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="utf-8">
    <title>Aurélien Durier | Projet</title>
    <meta name="description" content="Portfolio web de Aurélien Durier, étudiant en DUT MMI à l'IUT de Laval, France. Apprenez en plus sur Aurélien Durier et découvrez ses différents projets. Contactez Aurélien Durier pour plus d'informations.">
    <meta name="author" content="Aurélien Durier">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <link rel="icon" type="image/png" sizes="32x32" href="/assets/logo/logo_favicon_32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="/assets/logo/logo_favicon_16.png">
    <link rel="stylesheet" href="/css/style.css">
    <link rel="stylesheet" href="/css/admin.css">
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
  <div class="menu-btn">
    <div class="menu-btn-graphic"></div>
  </div>
  <div class="menu-burger">
      <a href="/profile.html" class="menu-option">
          <h1>PROFILE ></h1>
      </a>
      <a href="/gallery.html" class="menu-option">
          <h1>GALERIE ></h1>
      </a>
      <a href="/contact.html" class="menu-option">
          <h1>CONTACT ></h1>
      </a>
  </div>
  <section id="messagerie">
    <h1>Messagerie</h1>
    <table>
      <thead>
        <tr>
          <th>Id</th>
          <th>Nom</th>
          <th>Mail</th>
          <th>Message</th>
        </tr>
      </thead>

      <tbody>
<?php
      while ($ligne != false) {
?>
      <tr>
          <td><?php echo ($ligne["id"]) ; ?></td>
          <td><?php echo ($ligne["nom"]) ; ?></td>
          <td><?php echo ($ligne["mail"]) ; ?></td>
          <td><?php echo ($ligne["message"]) ; ?></td>
      </tr>
<?php
      $ligne = $statementInfo->fetch(PDO::FETCH_ASSOC);
  }
?>
      </tbody>
    </table>
  </section>
  <section id="projets">
    <h1>Projets</h1>
  </section>
  <script src="js/script.js"></script>
</body>
</html>