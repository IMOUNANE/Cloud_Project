<?php require_once 'tpl/header_user.php'?>


<section class="service-container">
    <div class="sub-menu">
        <h4 class="company"><?= $company['entreprise'] ?></h4>

        <div class="menu-backoffice">
            <div class="menu-container">
                <a class="menu-link" href="">
                    <img class="svg" src="assets/icon/accueil.svg" alt="">
                    <p class="item">Accueil</p>
                </a>
            </div>

            <div class="menu-container">
                <a class="menu-link" href="">
                    <img class="svg" src="assets/icon/api.svg" alt="">
                    <p class="item">Api</p>
                </a>
            </div>

            <div class="menu-container">
                <a class="menu-link" href="">
                    <img class="svg" src="assets/icon/donnees.svg" alt="">
                    <p class="item">Données</p>
                </a>
            </div>

            <div class="menu-container">
                <a class="menu-link" href="">
                    <img class="svg" src="assets/icon/registre.svg" alt="">
                    <p class="item">Registre RGPD</p>
                </a>
            </div>

            <div class="menu-container">
                <a class="menu-link" href="">
                    <img class="svg" src="assets/icon/incident.svg" alt="">
                    <p class="item">Incident</p>
                </a>
            </div>

            <div class="menu-container">
                <a class="menu-link" href="">
                    <img class="svg" src="assets/icon/abonnement.svg" alt="">
                    <p class="item">Abonnement</p>
                </a>
            </div>

            <div class="menu-container">
                <a class="menu-link" href="">
                    <img class="svg" src="assets/icon/parametre.svg" alt="">
                    <p class="item">Paramètre</p>
                </a>
            </div>

        </div>

    </div>
    <div class="service-container-child">
        <h4 class="title-api">API</h4>

        <p class="subtitle-api">Liens </p>
        <p class="recipient">Afin de nous permettre de générer votre script privé merci de nous fournir les liens de suivi commercial et marketing et d’analyse d’audience</p>

        <form method="post" action="?url=client_script">
            <div class="form-container">
                <label class="label-choice" for="script_1">Analyse d'audience</label>
                <input class="input-form" type="text" name="script_1" value="<?=$client_script_1?>" placeholder="https://mon-lien.fr">
            </div>

            <div class="form-container">
                <label class="label-choice" for="script_2">Contenu personnalisé</label>
                <input class="input-form" type="text" name="script_2"value="<?=$client_script_2?>" placeholder="https://mon-lien.fr">
            </div>

            <div class="form-container">
                <label  class="label-choice"for="script_3">Publicité personnalisée ou ciblée</label>
                <input class="input-form" type="text" name="script_3" value="<?=$client_script_3?>" placeholder="https://mon-lien.fr">
            </div>

            <div class="form-container">
                <label class="label-choice" for="script_4">Publicités standards et mesure de performance des publicités</label>
                <input class="input-form" type="text" name="script_4" value="<?=$client_script_4?>" placeholder="https://mon-lien.fr">
            </div>
            
            <input type="hidden" name="client_id" value="<?=$id_client?>">

            <div class="form-bottom">
                <input class="button-choice" type=submit value="generer le script"/>  
            </div>
        </form>
        <div>
            <p class="subtitle-api">Script</p>
            <p class="recipient">Utilisez ce script pour générer automatiquement la fenetre permettant à vos utilisateurs d’etre informé sur la collecte de leur donnéees personnelles et de donner leur consentement.
Ce script est destiné à un usage strictement privée et ne doit pas être partagé</p>
        </div>

        
        <div class="button-script">
            <div class="script-wrapper">
                <svg class="svg-script" width="62" height="28" viewBox="0 0 62 28" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path d="M13.9971 28C11.4918 27.9995 9.03257 27.3267 6.8759 26.0519C4.71923 24.777 2.94416 22.9468 1.73587 20.7521C0.527586 18.5575 -0.0696518 16.0788 0.00646446 13.5747C0.0825807 11.0705 0.829262 8.63269 2.16861 6.51547C3.50797 4.39825 5.39092 2.67922 7.62104 1.53771C9.85115 0.396199 12.3467 -0.125971 14.8474 0.0256748C17.3481 0.177321 19.7623 0.997225 21.8382 2.39986C23.914 3.80249 25.5754 5.73645 26.6491 8H55.9971L61.9971 14L55.9971 20L51.9971 16L47.9971 20L43.9971 16L39.9971 20L35.9971 16L31.9971 20H26.6491C25.5135 22.3941 23.7217 24.4168 21.4821 25.8329C19.2425 27.2491 16.6469 28.0006 13.9971 28ZM9.99711 18C11.058 18 12.0754 17.5786 12.8255 16.8284C13.5757 16.0783 13.9971 15.0609 13.9971 14C13.9971 12.9391 13.5757 11.9217 12.8255 11.1716C12.0754 10.4214 11.058 10 9.99711 10C8.93625 10 7.91883 10.4214 7.16868 11.1716C6.41854 11.9217 5.99711 12.9391 5.99711 14C5.99711 15.0609 6.41854 16.0783 7.16868 16.8284C7.91883 17.5786 8.93625 18 9.99711 18Z" fill="#605FF6"/>
                </svg>
                <input class="input-group-script" id="script_path"  name="script_path" value='<?='<script src="'.$script_path.'"></script>'?>' disabled="disabled">
            </div>  
            <div class="button-choice-container" > 
                <input type="hidden" id="copy_link">
                <button class="button-choice" type="button" onclick="copy_link()">Copier le script</button>
            </div> 
        </div>

        <!-- <div class="registre">
            <p>Le registre simplifié, ces exemples et modèles pour le respect de la RGPD</p>
            <button class="button-choice" type="button"><a href="https://www.cnil.fr/sites/default/files/atoms/files/registre-traitement-simplifie.ods">Télécharger : Registre Simplifié</a></button>
        </div> -->

        <div class="customization">
            <p class="subtitle-api">Personnaliser</p>
            <p class="recipient">Choisissez votre thème personnalisé</p>
            <input type="color" id="colorpicker">
            <div class="button-choice-container">
                <button class="button-choice" type="submit" value="Choisir">Choisir</button> 
            </div> 
        </div>


    </div>
</section>




<script src="//cdn.jsdelivr.net/npm/sweetalert2@10"></script>
<script>
function copy_link(){
    let linkToCopy = document.getElementById('copy_link');
        linkToCopy.value = document.getElementById('script_path').value;
        linkToCopy.setAttribute('type', 'text');
        linkToCopy.select();

    let success = document.execCommand('copy');

    if(success){
        Swal.fire({
            position: 'center',
            icon: 'success',
            title: 'Lien copié avec succès !',
            showConfirmButton: false,
            timer: 1000
        })
        linkToCopy.value = '';
        linkToCopy.setAttribute('type', 'hidden');
    }
}
</script>
