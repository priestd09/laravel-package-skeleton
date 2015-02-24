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
* Time: 15:03
*/

namespace DigitalBaker\AppManager\Contracts;


interface DeploymentManager
{

    const SFTP_TRANSFER = 'sftp';
    const GIT_TRANSFER = 'git';

    public function push($from, $to, array $options = []);
    public function pull($from, $to, array $options = []);
    public function backup($from, $to = null, array $options = []);

}