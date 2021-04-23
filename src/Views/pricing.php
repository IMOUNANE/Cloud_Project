<?php require_once 'tpl/header.php'?>
<link rel="stylesheet" href="css/pricing.css" />

<section class="heroPricing">
  <section class="containerTitle">
    <h1 class="heroTitle">Abonnements et tarification</h1>
  </section>
  <section class="cards">
    <article class="cardClassic card">
      <h4 class="contentCard titleCard ">Gratuit</h4>
      <h2 class="contentCard priceCard">€0</h2>
      <div class="infoCards">
        <p class="infoCard">Par domaine</p>
        <p class="infoCard">14 jours</p>
        <p class="infoCard">Service limité</p>
      </div>
      <div class="containerBtnCard">
        <button class="btnCard">c'est parti</button>
      </div>
    </article>

    <article class="cardSerenity card">
      <h4 class="contentCard titleCard ">Business</h4>
      <h2 class="contentCard priceCard">€59</h2>
      <div class="infoCards">
        <p class="infoCard">Par domaine</p>
        <p class="infoCard">Par mois</p>
        <p  class="infoCard">Import illimité</p>
      </div>
      <div class="containerBtnCard">
        <button class="btnCard">c'est parti</button>
      </div>
    </article>

    <article class="cardZen card">
      <h4 class="contentCard titleCard">Premium</h4>
      <h2 class="contentCard priceCard">€129</h2>
      <div class="infoCards">
        <p class="infoCard">Par domaine</p>
        <p class="infoCard">Par mois</p>
        <p class="infoCard">Import illimité</p>
      </div>
      <div class="containerBtnCard">
        <button class="btnCard">c'est parti</button>
      </div>
    </article>
  </section>
</section>


  <section>
    <article class="ContainerCustomPlan" id="containerCustomPlan">
      <div class="iconCustomPlan">
        <img clas="iconCustom" src="assets/icon/envelope-icon.png" alt="img envelope" />
      </div>
      <div class="contentCustomPlan">
        <h2 class="titleCustomPLan">
          Plan sur mesure, nous sommes à votre écoute pour <br />vous conseiller
        </h2>
        <p class="textCustomPLan">
          Nos experts sont à votre disposition pour vous
          présenter la solution qui <br /> correspond à votre besoin.
        </p>
        <a class="MoreCustomPLan" href="">Parlons-en <img src="assets/icon/chevron-purple.svg" alt=""></a>
      </div>
    </article>
  </section>

<section>
  <article class="ContainerChangePricing" id="containerChangePricing">
    <div class="iconChangePricing">
      <img src="assets/icon/icon-change-pricing.png" alt="img envelope" />
    </div>
    <div class="contentChangePricing">
      <h2 class="titleChangePricing">
        Vos besoins ont changé ?
      </h2>
      <p class="textChangePricing">
        Modifier son plan d’abonnement ou annuler son compte c’est possible !
      </p>
    </div>
  </article>
</section>


<section class="StartRgpd">
  <div class="contentTitleStartRgpd">
    <h2 class="titleStartRgpd">Démarrer sa mise en conformité au RGPD</h2>
  </div>
  <article class="ContainerStartRgpd">
    <div class="contentStartRgpd">
      <button class="btnStartRgpd">Commencer <img class="chevron" src="assets/icon/chevron-white.svg" alt=""></button>
      <a class="moreContactStartRgpd" href="">Contactez l’équipe commerciale <img src="assets/icon/chevron-purple.svg" alt=""></a>
    </div>
  </article>

  <script defer src="js/waypoints.js"></script>
  <script defer src="js/pricing.js"></script>
</section>

<div id="footer-content">
</div>
<?php require_once 'tpl/footer.php'?>