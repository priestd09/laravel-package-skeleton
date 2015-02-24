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
* Time: 17:13
*/

namespace DigitalBaker\AppManager\Contracts;


interface ManagerAware
{
    public function getManager();
}