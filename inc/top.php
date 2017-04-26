<?php
  session_start(); //on declare la session pour toutes les pages
?>

<!DOCTYPE html>
<html lang="fr">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1"> <!--pour le responsive-->
  <title>Magasinage <?php echo $title ?> </title>
  <meta name="description" content="Votre magasinage sans vous prendre la tete">
  <link rel="stylesheet" href="css/style.css">
</head>
<body>
  <div class="container">
    <header>
          <h1>Appli Emplette</h1>
          <nav>
            <a href="index.php" <?=($title=='Accueil')?'class="active"':''?>>Accueil</a>
            <a href="liste.php" <?=($title=='Liste')?'class="active"':''?>>Liste de course</a>
          </nav>
    </header>
