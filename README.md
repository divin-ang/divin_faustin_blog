# divin_faustin_blog
projet blog Laravel


Pour éxecuter l'application


1. sur votre ordinateur , ouvrir le terminal , se positionner sur le repertoire dans le quel vous souhaitez clonner l'application(commande cd )
1. Sur gitHub cliquer sur clone or download, copier le lien de clonnage
3. éxecuter la commande  git clone le lien de clonage 
4. éxecuter la commande   cd .\divin_faustin_blog\divinBlog\ 
5. éxecuter la commande composer install 
6. creer un fichier database.sqlite dans le dossier database
7. creer un fichier .env à la racine du projet y et copier coller le contenu du fichier .env.example.  Dans le fichier .env ,modifier la valeur de DB_CONNECTION à sqlite ,remplacer la valeur de DB_DATABASE par le chemin absolue vers le fichier database.sqlite crée précédemment. 
8. éxecuter la commande php artisan key:generate pour génerer une clé dans le fichier .env

9. éxecuter la commande php artisan migrate:fresh --seed    pour creer les tables et  remplir la base de données avec des données fictifs.
10. éxecuter la commande php artisan serve pour lancer le serveur .


vous pouver acceder à la visualisation graphique de la base des données sur le lien http://127.0.0.1:8000/fichier.php  , le mot de passe est admin

pour manupiler le style scss de l'application ,assurer vous d'avoir node et npm installés sur votre ordinateur.

executer la commande npm install  pour installer les dépendances, ensuite
faites npm run watch pour voir les modification que vous effectuez en même temps.
les fichiers scss se trouvent dans ressources/sass
