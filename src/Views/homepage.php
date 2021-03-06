<?php require_once 'tpl/header.php'?>
  <link rel="stylesheet" href="css/homepage.css" />
  <section class="hero-container">
    <div class="description-container">
      <h1 class="hero-title">La protection de vos données est notre priorité.</h1>
      <p class="hero-description">Rejoignez les milliers d’entreprises qui nous ont fait confiance pour
stocker, contrôler et gérer leurs données utilisateurs</p>
<img src="assets/img/homepage-secondBackground.png" alt="" class="hero-background">
    </div>
    
  </section>

  <section class="service-container">

    <div class="service-details" id="store">
      <img class="service-detail-icon" src="assets/icon/store-icon.svg" alt="">
      <div class="service-detail">
        <h2 class="service-detail-title">Stocker</h2>
        <p class="service-detail-description">Nous collectons et conservons précieusement toutes vos données utilisateurs</p>
      </div>
    </div>

    <div class="service-details control-container" id="control">
      <img class="service-detail-icon" src="assets/icon/control-icon.svg" alt="">
      <div class="service-detail control">
        <h2 class="service-detail-title">Contrôler</h2>
        <p class="service-detail-description">Nous contrôlons pour vous la conformité de vos données selon la réglementation RGPD</p>
      </div>
    </div>

    <div class="service-details" id="settings">
      <img class="service-detail-icon"src="assets/icon/settings-icon.svg" alt="">
      <div class="service-detail">
        <h2 class="service-detail-title">Gérer</h2>
        <p class="service-detail-description">Gérez l’ensemble de vos données utilisateurs à partir votre accès personnel</p>
      </div>
    </div>

  </section>

  <section class="informations" id="informations-produit">
    <h2 class="informations-title">Pourquoi SERENITY</h2>
    <p class="informations-subtitle">Une vision des données utilisateurs <br> centrée sur la sécurité</p>
    
    <div class="informations-container" id="informations">
      <div class="information-container">
        <div class="information-icon">
          <img src="assets/icon/security-icon.svg" alt="">
        </div>
        <span class="information-title">Gestion des consentements</span>
        <p class="information-description">Des bouton opt-in permettent  de collecter  les consentements de vos utilisateurs sur le traitement des données recueillies.
        chaque collecte remplit automatiquement une ligne dans le <span class="strong">registre</span> <br>de traitement de données</p>
      </div>

     <div class="information-container">
        <div class="information-icon">
          <img src="assets/icon/lock.svg" alt="">
        </div>
        <span class="information-title">Un accès sécurisé à votre interface </span>
        <p class="information-description">Gérez l’ensemble de vos données 
        directement depuis votre <span class="strong">accès privée</span> et 100% sécurisés</p>
     </div>

      <div class="information-container">
        <div class="information-icon">
          <img src="assets/icon/reability.svg" alt="">
        </div>
        <span class="information-title">Une plateforme qui évolue rapidement</span>
        <p class="information-description">Nous publions chaque année des <span class="strong">centaines de fonctionnalités</span> et d’améliorations pour vous garantir un niveau de sécurité maximum respectant la réglementation RGPD</p>
      </div>
    </div>
  </section>

  <div class="background-element">
    <img src="assets/img/square-img.png" alt="">
  </div>

  <section class="start" id="start">
    <div>
      <h2 class="title">Envie de vous lancer ?</h2>
      <p class="description">Découvrez <span class="strong">SERENITY</span> et creez un compte 
        en quelques minute. Commencez dès maintenant.
        Vous pouvez également nous contacter pour concevoir une solution personnalisée pour votre entreprise.</p>
        <div class="contact">
          <button class="button-start">Commencer <img class="chevron" src="assets/icon/chevron-white.svg" alt=""></button>
          <a class="link" href="">Contactez l’équipe commerciale<img src="assets/icon/chevron-purple.svg" alt=""></a>
        </div>
    </div>
  </section>

  <section class="price" id="price">
    <img class="price-icon" src="assets/icon/price-icon.svg" alt="">
    <div>
      <h2 class="title">Ayez toujours une idée claire de ce que vous payez </h2>
      <p class="description">Une tarification sans aucun frais cachés.</p>
      <a class="link" href="">Informations sur les tarifs <img src="assets/icon/chevron-purple.svg" alt=""></a>
    </div>
  </section>

  <div id="main-content">

  </div>
  <div id="footer-content">

  </div>
 
  <script src="js/waypoints.js"></script>
  <script defer src="js/homepage.js"></script>
</div>
<?php require_once 'tpl/footer.php'?>