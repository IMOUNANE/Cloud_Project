<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> MY-RGPD </title>
    <link rel="stylesheet" href="css/style.css"/>
    <script src="https://cdn.jsdelivr.net/npm/vue@2/dist/vue.js"></script>
    <script defer src="js/burgerMenu.js"></script>
  </head>
  <body>

  <div class="header-container">
    <nav class="nav header-element" id="nav">
      <div class="nav-open" id="open">
          <div class="nav-openIcon"></div>
      </div>
      <div class="nav-items">
        <a class="item" href="">SERENITY c’est quoi ?</a> 
        <a class="item" href="index.php?url=pricing">Tarif</a>
        <a class="item" href="">Produit</a>
      </div>
    </nav>

    <div class="menu-logo element header-element">
      <a class="item" href="index.php">
        <img src="assets/img/serenity.png" alt="">
      </a>   
    </div>

    <div class="user element header-element">
      <a href="index.php?url=login"><img class="user-icon" src="assets/icon/user-icon.svg" alt=""></a>
      <a href="index.php?url=login"><button class="button">Connexion <img class="chevron" src="assets/icon/chevron-white.svg" alt=""></button></a>
    </div>
  </div>
