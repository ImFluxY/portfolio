<?php

  require (__DIR__ . "/param.inc.php");

  $bd = new PDO("mysql:host=".MYHOST.";dbname=".MYDB.";charset=UTF8", MYUSER, MYPASS);

  try{

    //Infos utilisateur
    $nom = $_POST["name"];
    $mail = $_POST["mail"];
    $message = $_POST["message"];

    //Insérer les données dans la table formulaire
    $donnees = $bd->prepare("INSERT INTO formulaire(nom, mail, message) VALUES(:nom, :mail, :message)");
    $donnees->bindParam(":nom", $nom);
    $donnees->bindParam(":mail", $mail);
    $donnees->bindParam(":message", $message);
    $donnees->execute();

    header("Location: ../congrat.html");
  }catch(PDOException $e){
    echo 'Impossible de traiter les données. Erreur : '.$e->getMessage();
  }

?>