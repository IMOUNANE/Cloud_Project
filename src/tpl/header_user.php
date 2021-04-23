<?php  ?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SERENITY | Tableau de bord </title>
    <link rel="stylesheet" href="css/style.css" />
    <link rel="stylesheet" href="css/header.css" />
    <link rel="stylesheet" href="css/backoffice.css" />
    <link rel="stylesheet" href="css/config/fonts.css" />
    <script src="https://cdn.jsdelivr.net/npm/vue@2/dist/vue.js"></script>
    <script defer src="js/burgerMenu.js"></script>
  </head>
  <body>

  <div class="header-container">
    <nav class="nav header-element" id="nav">
      <div class="nav-open" id="open">
          <div class="nav-openIcon"></div>
      </div>
    </nav>
    
    <div class="menu-logo element header-element">
      <a href="index.php">
        <img src="assets/img/serenity.png" alt="">
      </a>   
    </div>

    <div class="user element header-element">
      <img class="user-icon" src="assets/icon/user-icon.svg" alt="">
      <button class="button"><a href="index.php?url=logout">Déconnexion</a><img class="chevron" src="assets/icon/chevron-white.svg" alt=""></button>
    </div>
  </div>
