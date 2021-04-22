# Cloud_Project


## Installation du projet et des dépendances

```composer install```<br/>
```composer dump-autoload``` (```composer dump``` pour les intimes)

## Si le dotenv ne vous ai pas fourni 

`APP_ENV=dev<br/>
DATABASE_DNS=mysql:host=localhost;dbname=rgpd;<br/>
DATABASE_USER= *votre user*<br/>
DATABASE_PASSWORD= *votre password*<br/>
ROOT_DIRECTORY=http://localhost/Cloud_Project/src/<br/>
MAIL_KEY= *Pour Générer votre key [https://sendgrid.com/]("Allez sur Sendgrid")*<br/>
SECRET=*Votre secret sera le notre*`.<br/>

## Générer votre script 

Vous devez vous inscrire, vous logguer, préparer vos liens (google-analytics, google-ads, traceurs, ... etc) et les remplir dans votre Tableau de bord.

Une fois que vous aurez sauvegardé vos liens en cliquant sur le bouton "Générer le script",
vous pourrez simplement cliquer sur le second bouton "Copier le scrip" et le coller dans votre page (html, php ... etc).

Le script en question va requêter sur notre API et vous n'avez plus rien à faire.

## A quoi ressemble le script qui vous à été généré

Votre script va se présenter comme suit

```<script src="https://gravity-zero.fr/js/user_script/[le nom de votre entreprise]>```
Pour cette dernière partie, (le nom de votre entreprise) est légèrement transformé pour coller avec un chemin de fichier valide.

## Ce qui va ce passer avec le script

Le script va dans un premier temps récupérer l'adresse ip du visiteur de votre site.
Envoyer une requête vers notre base de donnée pour la questionner sur la présence ou non des choix
utilisateur de ce visiteur. (Nous vérifions que votre compte et l'adresse ip "Match") Si ce n'est pas le cas, une pop-up contenant un formulaire s'ouvre et demande au visiteur de choisir s'il accepte totalement, en partie ou pas du tout la présence de vos scripts (renseigné dans votre Tableau de bord).

Une fois rempli, la fenêtre se ferme automatiquement et au prochain chargement de votre site par le visiteur (ex: à l'adresse ip xxx.xxx.134.12), les préférences déclaré par le visiteur seront connu de votre site et cela permettras à notre script de charger ou non vos scripts.

### La sécurité de vos informations

Le script généré est unique pour chacun de nos clients. La clé API est associé à un script.
A chaque renseignement de nouveaux liens (commerciaux, analytics, ... etc) un nouveau fichier et une nouvelle clé API est généré.

Le chemin du fichier ne changeras néanmoins pas pour vous. Seul le contenu change.
