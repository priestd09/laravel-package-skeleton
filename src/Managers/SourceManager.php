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
* Time: 14:59
*/

namespace DigitalBaker\AppManager\Managers;


use DigitalBaker\AppManager\Contracts\DeploymentManager;

class SourceManager implements DeploymentManager
{

    public function push($from, $to, array $options = [])
    {
        // TODO: Implement push() method.
    }

    public function pull($from, $to, array $options = [])
    {
        // TODO: Implement pull() method.
    }

    public function backup($from, $to = null, array $options = [])
    {
        // TODO: Implement backup() method.
    }
}