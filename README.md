**oprudkyi/laravel-mail-logger** is a PHP package built for Laravel 5 to
easily debug mails during the process of sending and to redirect debug info into log. 
It's built as simple wrapper over [Swift_Plugins_Logger](http://swiftmailer.org/docs/plugins.html).

[![Latest Stable Version](https://poser.pugx.org/oprudkyi/laravel-mail-logger/v/stable)](https://packagist.org/packages/oprudkyi/laravel-mail-logger) [![Total Downloads](https://poser.pugx.org/oprudkyi/laravel-mail-logger/downloads)](https://packagist.org/packages/oprudkyi/laravel-mail-logger) [![License](https://poser.pugx.org/oprudkyi/laravel-mail-logger/license)](https://packagist.org/packages/oprudkyi/laravel-mail-logger)

## About

- uses Log::info() for logging
- enable/disable via .env

## Installation

This project can be installed via [Composer](http://getcomposer.org).
To get the latest version of Laravel Mail Logger, simply add the following line to
the require block of your composer.json file:

    {
        "require": {
                "oprudkyi/laravel-mail-logger": "^1.0"
        }

    }

You'll then need to run `composer install` or `composer update` to download the
package and have the autoloader updated.

Or run the following command:

    "composer require oprudkyi/laravel-mail-logger"


### Add the Service Provider

Once Laravel Mail Logger is installed, you need to register the service provider.

Open up `config/app.php` and add the following to the `providers` key:

* `Oprudkyi\LaravelMailLogger\MailLoggerServiceProvider::class,`

## Configuration

Open up `.env` and add the following key:

```sh
SWIFT_MAIL_LOG=true
```


## Contribute

This package is (yet) under development and refactoring but is ready for
production. Please, feel free to comment, contribute and help. I will be happy
to get some help to deliver tests.

## License

Laravel User Verification is licensed under [The MIT License (MIT)](LICENSE).
