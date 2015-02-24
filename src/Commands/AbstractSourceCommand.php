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
* Time: 16:57
*/

namespace DigitalBaker\AppManager\Commands;


use DigitalBaker\AppManager\Contracts\DeploymentManager;
use Illuminate\Support\Facades\App;
use Symfony\Component\Console\Input\InputArgument;
use Symfony\Component\Console\Input\InputOption;

abstract class AbstractSourceCommand extends AbstractDeploymentCommand
{

    /**
     * @return DeploymentManager
     */
    public function getManager()
    {
        return App::make('manage.source');
    }

    /**
     * Get the console command arguments.
     *
     * @return array
     */
    protected function getArguments()
    {
        return [
            ['from', InputArgument::REQUIRED, 'The origin'],
            ['to', InputArgument::REQUIRED, 'The destination'],
        ];
    }

    /**
     * Get the console command options.
     *
     * @return array
     */
    protected function getOptions()
    {
        return [
            ['transfer', 't', InputOption::VALUE_OPTIONAL, 'Transfer mode: sftp, git', DeploymentManager::SFTP_TRANSFER],
            ['archive', 'a', InputOption::VALUE_NONE, 'transfer as zip archive, only in sftp mode', null],
        ];
    }

}