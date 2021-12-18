
# blogproject

Configuration

Le blog a été réalisé sous PHP 7.4.9.

Installation

Afin de tester le site en local: 

Etape 1: 
Transférer les fichiers dans le dossier racine de de votre serveur web (généralement "www/").

Etape 2 : 
Créer une base données sur votre SGDB (MySQL) et importer le fichier sql/blog.sql afin d'y créer les différentes tables , les champs et y insérer des données (blog posts , comptes utilisateurs, commentaires …)

Etape 3 : 
Dans le fichier config/prod.php modifier les paramètres suivants avec votre identifiant et votre mot de passe de connexion à la base de données :
const DB_USER = 'votre_identifiant';
const DB_PASS = 'votre_mot_de_passe';

Etape 4 : Formulaire de contact : 

SMTP= adresse du serveur smtp de votre operateur (ex: smtp.orange.fr)
smtp_port = 1025
sendmail_from = votre_adresse_email 

Pour consulter la liste des serveurs smtp rendez-vous sur : https://www.commentcamarche.net/applis-sites/mail/981-pop-imap-smtp-adresses-serveurs-mail/

Dans le fichier templates/contact.php, modifier la ligne 33 avec votre adresse mail:
$retour = mail(‘votre_adresse_email’, $_POST['name'],  $_POST['comments'], 'From: ' . $_POST['email']);
Puis modifier la ligne 40 avec l’adresse de votre serveur SMTP:
ini_set("SMTP", "votre_serveur_SMTP");

Vous pourrez ainsi réceptionner tous les mails provenant du blog à l’adresse: http://localhost:1080/#/ 
N.B. Si vous utilisez le blog en local sur Windows avec Wamp, la solution n'intègre pas l'envoi d'email. Vous devez donc au préalable configurer sendmail: https://grafikart.fr/blog/mail-local-wamp.




