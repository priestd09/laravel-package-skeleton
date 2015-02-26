<?php
/*
* This file is part of the Monolog package.
*
* (c) Marco Bunge <marco_bunge@web.de>
*
* For the full copyright and license information, please view the LICENSE.txt
* file that was distributed with this source code.
*
* Date: 24.02.2015
* Time: 13:45
*/
namespace DigitalBaker\AppManager\Providers;

use DigitalBaker\AppManager\Managers\SourceManager;
use Illuminate\Support\ServiceProvider;

class AppManagerServiceProvider extends ServiceProvider
{

    /**
     * Bootstrap the application services.
     *
     * @return void
     */
    public function boot()
    {
        $this->publishes([
            realpath(__DIR__ . '/../../config/appmanager.php'), config_path('appmanager.php')
        ]);
    }

    /**
     * Register the application services.
     *
     * @return void
     */
    public function register()
    {
        $this->app->singleton('manage.source', function ($app) {
            return new SourceManager();
        });
    }
}
