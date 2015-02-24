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
* Time: 17:22
*/

namespace DigitalBaker\AppManager\Commands;


use DigitalBaker\AppManager\Contracts\DeploymentManager;
use Symfony\Component\Console\Input\InputArgument;
use Symfony\Component\Console\Input\InputOption;

class SourcePullCommand extends AbstractSourceCommand
{

    /**
     * The console command name.
     *
     * @var string
     */
    protected $name = 'manage:source:pull';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Get source from any instance and pull it to another instance.';

    /**
     * Execute the console command.
     *
     * @return mixed
     */
    public function fire()
    {
        $manager = $this->getManager();
        $manager->pull($this->argument('from'), $this->argument('to'), $this->option());
    }

}