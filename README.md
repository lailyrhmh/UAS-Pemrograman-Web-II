# UAS PEMWEB
Demo website 
<!-- commment -->
How to run in local:

- Clone your project
- Create empty database `album`
- Go to the folder application using cd command on your cmd or terminal 

    Run `cd UAS-PEMROGRAMAN-WEB-II`
- Run `composer install` on your cmd or terminal
- Copy `.env.example` file to `.env` on the root folder. 

    Run `copy .env.example .env` if using command prompt Windows

    or `cp .env.example .env` if using terminal, Ubuntu
- Open your `.env` file and change the database name (DB_DATABASE) to `album`, username `root` and password ```""``` .
- Run `php artisan key:generate`
- Run `php artisan migrate:fresh --seed`
- Run `php artisan serve`
- Go to http://localhost:8000/

This website was created to fulfill the final exam of web programming semester II using the laravel framework (https://laravel.com/) as well as the boostrap template from inspinia (https://wrapbootstrap.com/theme/inspinia-responsive-admin-template-WB0R5L90S)