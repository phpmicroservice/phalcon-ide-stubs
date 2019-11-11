<?php

namespace Phalcon\Cache\Frontend;

use Phalcon\Cache\FrontendInterface;
use Phalcon\Factory\Exception;
use Phalcon\Factory as BaseFactory;
use Phalcon\Config;

/**
 * Loads Frontend Cache Adapter class using 'adapter' option
 *
 * <code>
 * use Phalcon\Cache\Frontend\Factory;
 *
 * $options = [
 *     "lifetime" => 172800,
 *     "adapter"  => "data",
 * ];
 * $frontendCache = Factory::load($options);
 * </code>
 */
class Factory extends \Phalcon\Factory
{

    /**
     * @param \Phalcon\Config|array $config
     * @return FrontendInterface
     */
    public static function load($config): FrontendInterface
    {
    }

    /**
     * @param string $namespace
     * @param mixed $config
     */
    protected static function loadClass(string $namespace, $config)
    {
    }

}
