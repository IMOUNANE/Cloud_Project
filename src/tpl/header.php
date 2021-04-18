<?php  ?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title><?= $_GET['url'] ? $title  : 'Homepage' ;?></title>
  <script src="https://cdn.jsdelivr.net/npm/vue@2/dist/vue.js"></script>
  <script defer src="js/burgerMenu.js"></script>
</head>
<body>

<div class="header-menu menu">
  <nav class="menu-nav nav" id="nav">
    <div class="nav-open" id="open">
        <div class="nav-openIcon"></div>
    </div>
    <ul class="nav-items">
      <li>cafés</li>
      <li>Nos machines</li>
      <li>Nos accessoires</li>
    </ul>
  </nav>
  
  <div class="menu-logo logo">
    <p class="logo-business">RGPD</p>
    <!-- <img
      src="/IMG/logoNesspresso.svg"
      alt="Logo nespresso"
      class="logo__business"
    /> -->
  </div>
  <!-- <div class="contact icon"> -->
  <div class="icon-user">
    <button class="button">Commencer <img class="chevron" src="css/assets/icon/chevron-white.svg" alt=""></button>
  </div>
</div>

  <!-- <section class="header-container">
    <div class="">
      <p>RGPD</p>
    </div>

    <div class="menu">
      <span>RGBD c’est quoi<a href=""></a></span>
      <span>Tarif<a href=""></a></span>
      <span>Produit<a href=""></a></span>
    </div>

    <div class="contact">
      <button class="button">Commencer <img class="chevron" src="css/assets/icon/chevron-white.svg" alt=""></button>
    </div>
  </section> -->