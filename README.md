<p align="center"><img src="https://res.cloudinary.com/dtfbvvkyp/image/upload/v1566331377/laravel-logolockup-cmyk-red.svg" width="400"></p>

<p align="center">
<a href="https://travis-ci.org/laravel/framework"><img src="https://travis-ci.org/laravel/framework.svg" alt="Build Status"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://poser.pugx.org/laravel/framework/d/total.svg" alt="Total Downloads"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://poser.pugx.org/laravel/framework/v/stable.svg" alt="Latest Stable Version"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://poser.pugx.org/laravel/framework/license.svg" alt="License"></a>
</p>

## Test Mac 2
###Procédure d'installation du projet :

####Config Base de données dans .env : 

DB_DATABASE=test-mac2

DB_USERNAME=root

DB_PASSWORD=

####Executer les migrations et le seeder : AdminCreateSeeder

php artisan migrate --seed

####Lancer le projet sur un serveur local :

php artisan serve

####Interface admin : 

url : /admin ou /login

Email : admin@admin.com

Mot de passe : password

####Interface Utilisateur :

url d'accueil : /

url de souscription avec formulaire : /register

 







