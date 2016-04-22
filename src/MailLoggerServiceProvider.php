<?php
/**
 * This file is part of Oprudkyi\LaravelMailLogger package.
 *
 * (c) 2016 Oleksii Prudkyi <Oleksii.Prudkyi@gmail.com>
 */
namespace Oprudkyi\LaravelMailLogger;

use Illuminate\Support\ServiceProvider;
use Swift_Mailer;
use \Swift_Plugins_LoggerPlugin;

class MailLoggerServiceProvider extends ServiceProvider 
{
    /**
     * Bootstrap the application services.
     *
     * @return void
     */
    public function boot()
    {
        //
    }

    /**
     * Register the application services.
     *
     * @return void
     */
    public function register()
    {
		if(env('SWIFT_MAIL_LOG', false)) {
			$this->app->resolving('swift.mailer', function (Swift_Mailer $mailer, $app) {
				$mailer->registerPlugin(new Swift_Plugins_LoggerPlugin(new MailLoggerPlugin));
			}); 
		}
    }
}
