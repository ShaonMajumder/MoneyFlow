<p align="center"><a href="https://laravel.com" target="_blank"><img src="https://raw.githubusercontent.com/laravel/art/master/logo-lockup/5%20SVG/2%20CMYK/1%20Full%20Color/laravel-logolockup-cmyk-red.svg" width="400"></a></p>

<p align="center">
<a href="https://travis-ci.org/laravel/framework"><img src="https://travis-ci.org/laravel/framework.svg" alt="Build Status"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/dt/laravel/framework" alt="Total Downloads"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/v/laravel/framework" alt="Latest Stable Version"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/l/laravel/framework" alt="License"></a>
</p>

## About Laravel

Laravel is a web application framework with expressive, elegant syntax. We believe development must be an enjoyable and creative experience to be truly fulfilling. Laravel takes the pain out of development by easing common tasks used in many web projects, such as:

- [Simple, fast routing engine](https://laravel.com/docs/routing).
- [Powerful dependency injection container](https://laravel.com/docs/container).
- Multiple back-ends for [session](https://laravel.com/docs/session) and [cache](https://laravel.com/docs/cache) storage.
- Expressive, intuitive [database ORM](https://laravel.com/docs/eloquent).
- Database agnostic [schema migrations](https://laravel.com/docs/migrations).
- [Robust background job processing](https://laravel.com/docs/queues).
- [Real-time event broadcasting](https://laravel.com/docs/broadcasting).

Laravel is accessible, powerful, and provides tools required for large, robust applications.

## Learning Laravel

Laravel has the most extensive and thorough [documentation](https://laravel.com/docs) and video tutorial library of all modern web application frameworks, making it a breeze to get started with the framework.

If you don't feel like reading, [Laracasts](https://laracasts.com) can help. Laracasts contains over 1500 video tutorials on a range of topics including Laravel, modern PHP, unit testing, and JavaScript. Boost your skills by digging into our comprehensive video library.

## Laravel Sponsors

We would like to extend our thanks to the following sponsors for funding Laravel development. If you are interested in becoming a sponsor, please visit the Laravel [Patreon page](https://patreon.com/taylorotwell).

### Premium Partners

- **[Vehikl](https://vehikl.com/)**
- **[Tighten Co.](https://tighten.co)**
- **[Kirschbaum Development Group](https://kirschbaumdevelopment.com)**
- **[64 Robots](https://64robots.com)**
- **[Cubet Techno Labs](https://cubettech.com)**
- **[Cyber-Duck](https://cyber-duck.co.uk)**
- **[Many](https://www.many.co.uk)**
- **[Webdock, Fast VPS Hosting](https://www.webdock.io/en)**
- **[DevSquad](https://devsquad.com)**
- **[Curotec](https://www.curotec.com/)**
- **[OP.GG](https://op.gg)**

## Contributing

Thank you for considering contributing to the Laravel framework! The contribution guide can be found in the [Laravel documentation](https://laravel.com/docs/contributions).

## Code of Conduct

In order to ensure that the Laravel community is welcoming to all, please review and abide by the [Code of Conduct](https://laravel.com/docs/contributions#code-of-conduct).

## Security Vulnerabilities

If you discover a security vulnerability within Laravel, please send an e-mail to Taylor Otwell via [taylor@laravel.com](mailto:taylor@laravel.com). All security vulnerabilities will be promptly addressed.

## License

The Laravel framework is open-sourced software licensed under the [MIT license](https://opensource.org/licenses/MIT).

## Building Sequence

1. Setup laravel project directory - `composer create-project --prefer-dist laravel/laravel:^8 MoneyFlow`

2. edit host file:

   ​	127.0.0.1       moneyflow.test

3. edit virtual host file:

   <VirtualHost *:80>

     ServerName moneyflow.test

     DocumentRoot "D:\Projects\MoneyFlow\public"

     <Directory "D:\Projects\MoneyFlow\public">

   ​    Options Indexes FollowSymLinks

   ​    AllowOverride all

   ​    Require all granted

     </Directory>

   </VirtualHost>

4. cd MoneyFlow

5. setting ui panel -

   ``composer require laravel/ui
   php artisan ui vue --auth``

6. Once the dependencies have been installed using `npm install && npm run dev`

   After build ui will be available

7. edit .env file :

   APP_NAME=MoneyFlow
   APP_ENV=local
   APP_KEY=base64:RQ+tGz6oEmUnPz6o5MuT0m65xRj3/LfmanDCKm6phPw=
   APP_DEBUG=true
   APP_URL=http://moneyflow.test

   LOG_CHANNEL=stack
   LOG_LEVEL=debug

   DB_CONNECTION=mysql
   DB_HOST=127.0.0.1
   DB_PORT=3306
   DB_DATABASE=moneyflow
   DB_USERNAME=root
   DB_PASSWORD=

   BROADCAST_DRIVER=log
   CACHE_DRIVER=file
   QUEUE_CONNECTION=database

8. create database named moneyflow with utf8_general_ci

9. To populate data `php artisan migrate:fresh --seed`

10. install packages `composer install`

11. git repository -

    git init

    git add .

    git commit -m "initial commit"

    git remote add origin https://github.com/ShaonMajumder/MoneyFlow.git

    git push origin master

12. 'mix' is not recognized as an internal or external command -

    ```bash
    npm install laravel-mix@latest
    ```

13. composer update

14. ```bash
    npm install font-awesome --save
    ```

15. Then edit the `resources/assets/sass/app.scss` file and add at the top this line:

    ```php
    @import "node_modules/font-awesome/scss/font-awesome.scss";
    ```

16. ```bash
    npm run dev
    ```

17. php artisan make:model Tasks -m

Reading

mix can not be recognized -

https://stackoverflow.com/questions/65779378/mix-is-not-recognized-as-an-internal-or-external-command-in-laravel-8-new-inst

Tables - https://getbootstrap.com/docs/4.0/content/tables/

frontend framework - https://laravel.com/docs/7.x/frontend

upgrade 7 to 8 - https://laravel.com/docs/8.x/upgrade

fontawesome - https://stackoverflow.com/questions/43451509/how-to-install-font-awesome-in-laravel-mix/49716723

inline bootstrap - https://getbootstrap.com/docs/4.0/utilities/flex/

