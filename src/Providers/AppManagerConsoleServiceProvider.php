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
* Time: 14:38
*/

namespace DigitalBaker\AppManager\Providers;


use DigitalBaker\AppManager\Commands\SourceBackupCommand;
use DigitalBaker\AppManager\Commands\SourcePullCommand;
use DigitalBaker\AppManager\Commands\SourcePushCommand;
use Illuminate\Support\ServiceProvider;

class AppManagerConsoleServiceProvider extends ServiceProvider
{
    /**
     * Register the application services.
     *
     * @return void
     */
    public function register()
    {
        $this->registerCommands();
    }

    public function registerCommands(){
        $commandIoC = [
            'command.manage.source.push' => function(){
                return new SourcePushCommand();
            },
            'command.manage.source.pull' => function(){
                return new SourcePullCommand();
            },
            'command.manage.source.backup' => function(){
                return new SourceBackupCommand();
            },
        ];

        foreach($commandIoC as $abstract => $concrete){
            $this->app->singleton($abstract, $concrete);
        }

        $this->commands(array_keys($commandIoC));
    }
}