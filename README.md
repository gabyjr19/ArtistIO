<!--<<<<<<< HEAD-->
<!--<p align="center"><a href="https://laravel.com" target="_blank"><img src="https://raw.githubusercontent.com/laravel/art/master/logo-lockup/5%20SVG/2%20CMYK/1%20Full%20Color/laravel-logolockup-cmyk-red.svg" width="400" alt="Laravel Logo"></a></p>
======= -->
<!--<p align="center"><a href="https://laravel.com" target="_blank"><img src="https://raw.githubusercontent.com/laravel/art/master/logo-lockup/5%20SVG/2%20CMYK/1%20Full%20Color/laravel-logolockup-cmyk-red.svg" width="400" alt="Laravel Logo"></a></p>
>>>>>>> 8ffa5c65b84adccc8dcba9bd6235f7596413c975

<!--<p align="center">
<a href="https://github.com/laravel/framework/actions"><img src="https://github.com/laravel/framework/workflows/tests/badge.svg" alt="Build Status"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/dt/laravel/framework" alt="Total Downloads"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/v/laravel/framework" alt="Latest Stable Version"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/l/laravel/framework" alt="License"></a>
</p>-->

## ArtistIO: An Art Website that Aims at Providing a Free Platform for Artists to Upload their Work

<!--The work is licensed under Laravel.-->

## Description

This repository contains information about ArtistIO,code that enables an artist to upload their work free of charge and reap maximum profit from the sale of their artworks. It also enables artists to engage with one another and collaborate on art together.

It aims at providing upcoming artists with a chance to showcase their artworks in the ever competitive art market without having to suffer hefty commissions or having to pay to display their art pieces.

<!--- [Simple, fast routing engine](https://laravel.com/docs/routing).
- [Powerful dependency injection container](https://laravel.com/docs/container).
- Multiple back-ends for [session](https://laravel.com/docs/session) and [cache](https://laravel.com/docs/cache) storage.
- Expressive, intuitive [database ORM](https://laravel.com/docs/eloquent).
- Database agnostic [schema migrations](https://laravel.com/docs/migrations).
- [Robust background job processing](https://laravel.com/docs/queues).
- [Real-time event broadcasting](https://laravel.com/docs/broadcasting).

Laravel is accessible, powerful, and provides tools required for large, robust applications.-->

## Dependencies

In order to run ArtistIO efficiently, you need to download and have the following frameworks:

- [Composer](https://getcomposer.org/)
- [Laravel](https://laravel.com/)
- [XAMPP](https://www.apachefriends.org/index.html)
- [GitHub](https://github.com/)
- [Filament](https://filamentphp.com/)

Make sure to install these dependencies before proceeding with the setup and installation of ArtistIO.
<!--Laravel has the most extensive and thorough [documentation](https://laravel.com/docs) and video tutorial library of all modern web application frameworks, making it a breeze to get started with the framework.

You may also try the [Laravel Bootcamp](https://bootcamp.laravel.com), where you will be guided through building a modern Laravel application from scratch.

If you don't feel like reading, [Laracasts](https://laracasts.com) can help. Laracasts contains thousands of video tutorials on a range of topics including Laravel, modern PHP, unit testing, and JavaScript. Boost your skills by digging into our comprehensive video library.-->

## Installation Steps

First, download Composer manually by running the following commands in your command prompt:

1. **Download the Composer installer:**

    ```sh
    php -r "copy('https://getcomposer.org/installer', 'composer-setup.php');"
    ```

2. **Verify the installer SHA-384 hash.** Replace `YOUR_HASH_HERE` with the latest hash value from the [Composer website](https://getcomposer.org/download/):

    ```sh
    php -r "if (hash_file('sha384', 'composer-setup.php') === 'YOUR_HASH_HERE') { echo 'Installer verified'; } else { echo 'Installer corrupt'; unlink('composer-setup.php'); } echo PHP_EOL;"
    ```

3. **Install Composer:**

    ```sh
    php composer-setup.php --install-dir=bin --filename=composer
    ```

4. **Check the Composer version to verify the installation:**

    ```sh
    composer --version
    ```

5. **Remove the installer script:**

    ```sh
    php -r "unlink('composer-setup.php');"
    ```

Make sure to replace `YOUR_HASH_HERE` with the actual hash value from the [Composer website](https://getcomposer.org/download/).

You will then have to clone this repository to your local repository.Run this in command prompt:
```
git clone https://github.com/gabyjr19/ArtistIO.git
```
Finally you shall navigate to your cloned project and run it.
```
cd [path to your cloned project]
php artisan serve
```
In order to import the database for the project, ensure you have installed Xampp. You can visit the **[Apache Friends Website](https://www.apachefriends.org/download.html)** and follow the download prompts and instructions.You then import the ArtistIO database.

## Accessing the Admin Dashboard with Filament

In order to access the admin dashboard using Filament, follow these steps after creating your Laravel project:

1. **Navigate to your Laravel project directory:**

    ```sh
    cd path/to/your/laravel/project
    ```

2. **Download and install Filament using Composer. Run the following command to install Filament version 3.2 or higher:**

    ```sh
    composer require filament/filament:"^3.2" -W
    ```

   The `-W` flag ensures Composer installs the package even if it would cause conflicts.

3. **Install the Widgets package assets:**

    Run the following command to install the Widgets package assets:

    ```sh
    php artisan filament:install --widgets
    ```

   This command installs assets specific to the Widgets package in Filament.

4. **Run database migrations to set up Filament tables:**

    ```sh
    php artisan migrate
    ```

5. **Access the admin dashboard:**

    After completing the installation and migrations, visit [http://localhost:8000/admin](http://localhost:8000/admin) in your web browser to access the admin dashboard.

    **Default credentials:**
    - Email: admin@sahara.com
    - Password: 12345678

For more detailed setup instructions, refer to [Filament's documentation](https://filamentphp.com/).


<!--We would like to extend our thanks to the following sponsors for funding Laravel development. If you are interested in becoming a sponsor, please visit the [Laravel Partners program](https://partners.laravel.com).-->

### Usage Instructions

In order to run the website/project, one uses the following command:
```
php artisan serve
```
To be able to access the admin dashboard, one has to key in the folowing credentials:
-Email:
-Password:

<!--- **[Vehikl](https://vehikl.com/)**
- **[Tighten Co.](https://tighten.co)**
- **[WebReinvent](https://webreinvent.com/)**
- **[Kirschbaum Development Group](https://kirschbaumdevelopment.com)**
- **[64 Robots](https://64robots.com)**
- **[Curotec](https://www.curotec.com/services/technologies/laravel/)**
- **[Cyber-Duck](https://cyber-duck.co.uk)**
- **[DevSquad](https://devsquad.com/hire-laravel-developers)**
- **[Jump24](https://jump24.co.uk)**
- **[Redberry](https://redberry.international/laravel/)**
- **[Active Logic](https://activelogic.com)**
- **[byte5](https://byte5.de)**
- **[OP.GG](https://op.gg)**-->

## Project Structure

Since ArtistIO is using the Laravel framework, the main folders of the project are:
```
├── README.md
├── artisan
├── artistio
├── composer.json
├── composer.lock
├── output.txt
├── package-lock.json
├── package.json
├── phpunit.xml
├── postcss.config.js
├── tailwind.config.js
├── app
│   ├── Filament
│   ├── Http
│   ├── Livewire
│   ├── Models
│   ├── Providers
│   └── View
├── bootstrap
│   ├── app.php
│   ├── cache
│   └── providers.php
├── config
│   ├── app.php
│   ├── auth.php
│   ├── cache.php
│   ├── database.php
│   ├── filesystems.php
│   ├── logging.php
│   ├── mail.php
│   ├── queue.php
│   ├── services.php
│   └── session.php
├── database
│   ├── factories
│   ├── migrations
│   └── seeders
+---node_modules
+---public
|   +---css
|   +---js
+---resources
|   +---css
|   +---js
|   +---views
+---routes
|       api.php
|       channels.php
|       console.php
|       web.php
+---storage
|   +---app
|   +---framework
|   |   +---cache
|   |   +---sessions
|   |   +---views
|   +---logs
+---tests
|       TestCase.php
+---vendor
```



<!--Since ArtistIO is using the Laravel framework, the main folders of the project are:

- Views/Layouts
- Public/Resources

The main files in the project are:

- account.blade.php
- artworks.blade.php-->

<!--Thank you for considering contributing to the Laravel framework! The contribution guide can be found in the [Laravel documentation](https://laravel.com/docs/contributions).-->

## Project Status

The project is currently ongoing.

<!--In order to ensure that the Laravel community is welcoming to all, please review and abide by the [Code of Conduct](https://laravel.com/docs/contributions#code-of-conduct).-->

<!--## Security Vulnerabilities

If you discover a security vulnerability within Laravel, please send an e-mail to Taylor Otwell via [taylor@laravel.com](mailto:taylor@laravel.com). All security vulnerabilities will be promptly addressed.-->

## License

The Laravel framework is open-sourced software licensed under the [MIT license](https://opensource.org/licenses/MIT).

Filament License:[License](https://github.com/filamentphp/filament/blob/1.x/LICENSE.md)


