<link rel="stylesheet" href="<?= getenv('ROOT_DIRECTORY')?>css/config/fonts.css"/>
<link rel="stylesheet" href="<?= getenv('ROOT_DIRECTORY')?>css/popUp.css"/>
<form class="test" action="?url=post_ajax" method="POST">

<section class="popUp">
  <h1 class="title-popUp">paramétrer les cookies</h1>

  <div class="information-container">
    <p>Nous utilisons des cookies pour stocker et accéder à des données personnelles.
  ces données sont utilisées pour:
  Mesure d’audience
  Fonctionnalités liées à l’amelioration de votre experience
  Contenu personnalisé et mesure de performance des publicités et données d’audience
  Développer et améliorer les produits
  Données de gélolocalisation
  Vous pouvez autoriser ou refuser tout ou partie de ces traitement de données qui sont basés sur votre consentement ou sur l’interet legitime de nos partenaires, à l’exception des cookies necessaires au fonctionnement de ce site. Vous pouvez modifier vos choix à tout moment. Pour en savoir plus, consultez notre politique de protection des données
    </p>
  </div>
  <form action="?url=post_ajax" method="POST">
    <div class="choice-container">

      <div class="container">
        <p class="title">Cookies techniques ou strictement nécessaires au service </p>
        <p class="description">Ces cookies sont strictement nécessaires à la fourniture du service que vous avez expressément demandé ou ont pour finalité exclusive de permettre, ou faciliter la communication par voie électronique. Ils permettent par exemple, de mémoriser les articles que vous avez placés dans le panier d’achat. Ces cookies sont automatiquement activés et ne peuvent pas être désactivés car ils sont indispensables pour vous permettre de naviguer sur notre site.</p>
        <div class="label-container">
          <label class="switch">
            <input class="disabled" type="checkbox" checked disabled>
            <span class="slider round"></span>
          </label>
        </div>
      </div>

      <div class="container">
        <p class="title">Analyse d'audience</p>
        <p class="description">Les cookies de mesure d’audience permettent de comprendre la façon dont vous accédez au site ainsi que votre parcours de navigation (ex: pages vues, temps passé sur une page, contenu cliqué). Ils permettent d’analyser la performance et la conception de notre site et à détecter des éventuelles erreurs. Grâce à ces indicateurs de performances nous améliorons constamment le site ainsi que les produits, contenus ou offres qui y sont proposés.</p>
        <div class="label-container">
          <label class="switch">
            <input type="checkbox" name="user_choice_1" value="" checked>
            <span class="slider round"></span>
          </label>
        </div>
      </div>

      <div class="container">
        <p class="title">Contenu personnalisé</p>
        <p class="description">Ces cookies nous permettent de vous proposer des contenus personnalisés en fonction de votre profil, de vos centres d'intérêt et de votre navigation. Par exemple, les cookies d’AB tests nous permettent de tester différentes versions d’une page/ d’un service afin d’identifier statistiquement les préférences des visiteurs. En acceptant ces cookies vous nous aidez à améliorer l’ergonomie et les fonctionnalités de notre site.</p>
        <div class="label-container">
          <label class="switch">
            <input type="checkbox" name="user_choice_2" value="" checked>
            <span class="slider round"></span>
          </label>
        </div>
      </div>

      <div class="container">
        <p class="title">Publicité standard et mesure de performance des publicités</p>
        <p class="description">Ces cookies recueillent des informations sur vos habitudes de navigation. Ils se rappellent que vous avez visité notre site et partagent cette information avec des partenaires (annonceurs, régies publicitaires). La personnalisation de la publicité englobe différentes opérations techniques: l’affichage de la publicité, le plafonnement de l’affichage pour éviter qu’une publicité ne vous soit affichée de manière trop répétitive, la lutte contre la fraude au clic, la facturation de la prestation d’affichage, la mesure des cibles ayant le mieux réagi à la publicité afin de mieux comprendre l’audience.</p>
        <div class="label-container">
          <label class="switch">
            <input type="checkbox" name="user_choice_3" value=""checked>
            <span class="slider round"></span>
          </label>
        </div>
      </div>

      <div class="container">
        <p class="title">Publicité personnalisée ou ciblée</p>
        <p class="description">des publicités standards peuvent être diffusées et la performance de ces publicités peut être mesurée. les publicités peuvent vous être présentées en fonction du contenu éditorial que vous consultez, de l’application que vous utilisez, de votre localisation approximative, ou de votre type de terminal.</p>
        <div class="label-container">
          <label class="switch">
            <input type="checkbox" name="user_choice_4" value=""checked>
            <span class="slider round"></span>
          </label>
        </div>
      </div>

      <input type='hidden' name='client_id' value="">
      <input type='hidden' name='ip_adress' value="">

      <div class="button-container">
        <a class="link margin" margin href="https://www.cnil.fr/fr/reglement-europeen-protection-donnees" target="_blank">En savoir plus</a>
        <button class="button margin" type="button" onclick="set_choices_false()">Tout refuser</button>
        <button class="button" type="button" onclick="set_choices()">Enregistrer</button>
      </div>
    </div>
  </form>
</section>

<script type="text/javascript" src="<?= getenv('ROOT_DIRECTORY')?>js/traitement.js"></script>

