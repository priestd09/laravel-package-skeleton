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
* Time: 17:25
*/

namespace DigitalBaker\AppManager\Commands;


use Symfony\Component\Console\Input\InputArgument;

class SourceBackupCommand extends AbstractSourceCommand
{
    /**
     * The console command name.
     *
     * @var string
     */
    protected $name = 'manage:source:backup';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Creates an backup on any instance and safe it optional to another location';

    /**
     * Get the console command arguments.
     *
     * @return array
     */
    protected function getArguments()
    {
        return [
            ['from', InputArgument::REQUIRED, 'The origin'],
            ['to', InputArgument::OPTIONAL, 'The destination'],
        ];
    }

    /**
     * Execute the console command.
     *
     * @return mixed
     */
    public function fire()
    {
        $manager = $this->getManager();
        $manager->backup($this->argument('from'), $this->argument('to'), $this->option());
    }
}