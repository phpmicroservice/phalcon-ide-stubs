<?php

namespace Phalcon;

use Phalcon\Factory\Exception;
use Phalcon\Config;

abstract class Factory implements Phalcon\FactoryInterface
{

    /**
     * @param string $namespace
     * @param mixed $config
     */
    protected static function loadClass(string $namespace, $config)
    {
    }

}
