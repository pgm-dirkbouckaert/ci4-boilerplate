# CodeIgniter 4 Boilerplate with Bootstrap, Blade and Shield

## Setup

- Copy `env.example` to `.env` and tailor for your app, specifically:
  - `app.name`
  - `app.domain` and `app.path` which are joined to form `app.baseURL`
  - the database settings
  - email setttings

- This app is designed to be served in the subfolder 'ci4-boilerplate'.  
If you change `app.path` in `.env`, don't forget to change `RewriteBase` in `.htaccess` accordingly.  

- Run `composer install`.  
- Run `npm install`.
- Run `npm run sass:build`.
- Serve your app using e.g. Xammp and create a database  
  (that corresponds to the settings in `.env`). 
- Run `php spark shield:setup`.
- Run `php spark migrate`.
- Visit your app at `http::/localhost/ci4-boilerplate`.
- You can run `npm start`to start a local development server with hot reloading.
- Bootstrap can be customized in `scss/bootstrap.scss`.

## What is CodeIgniter?

CodeIgniter is a PHP full-stack web framework that is light, fast, flexible and secure.  
More information can be found at the [official site](https://codeigniter.com).  

You can read the [user guide](https://codeigniter.com/user_guide/)  
corresponding to the latest version of the framework.

## What is Blade?

Blade is the simple, yet powerful templating engine that is included with Laravel.  
This app implements [BladeOne](https://github.com/EFTEC/BladeOne), a standalone version of the Blade Template Engine  
that uses a single PHP file and allows you to use Blade outside Laravel.

## What is Shield?
[Shield](https://shield.codeigniter.com/) is the official authentication and authorization framework for CodeIgniter 4.

## Updates

Use `composer update` whenever there is a new release of the framework.

When updating, check the release notes to see if there are any changes  
you might need to apply to your `app` folder.  

The affected files can be copied or merged from `vendor/codeigniter4/framework/app`.

## Server Requirements

Codeigniter 4 requires PHP version 7.4 or higher, with the following extensions installed:

- [intl](http://php.net/manual/en/intl.requirements.php)
- [mbstring](http://php.net/manual/en/mbstring.installation.php)

> [!WARNING]
> The end of life date for PHP 7.4 was November 28, 2022.
> The end of life date for PHP 8.0 was November 26, 2023.
> If you are still using PHP 7.4 or 8.0, you should upgrade immediately.
> The end of life date for PHP 8.1 will be November 25, 2024.

Additionally, make sure that the following extensions are enabled in your PHP:

- json (enabled by default - don't turn it off)
- [mysqlnd](http://php.net/manual/en/mysqlnd.install.php) if you plan to use MySQL
- [libcurl](http://php.net/manual/en/curl.requirements.php) if you plan to use the HTTP\CURLRequest library
