Ce projet Laravel permet de gérer des livres et leurs avis utilisateurs. Il utilise les relations Eloquent, les formulaires Blade et l'architecture MVC.

Installation:
Prérequis:
PHP >= 8.1
Composer
MySQL
Laravel 9.x
Un serveur local (XAMPP)
Installer les dependances:
composer install

Étapes:
Creer le projet:
composer create-project laravel/laravel nom du projet
Lancer le serveur:
PHP artisan serve
Cloner le projet:
git clone https://github.com/OUZ_SOW/Ousmane_Sow.git
cd Ousmane_Sow

Description des tables:
Table books:(id(int,clé primaire),title(string),author(string),description(text,nullable),published_at(date),timestamps);
Table reviews:(id(int,clé primaire),book_id(foreign key vers books),user_id(foreign key vers users),rating(int,1 à 5),comment(text)
,timestamps);
Table users:(id, name, email, email_verified_at, password, remember_token, timestamps);

