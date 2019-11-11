<?php

namespace Phalcon\Annotations;

use Phalcon\Factory as BaseFactory;

/**
 * Loads Annotations Adapter class using 'adapter' option
 *
 * <code>
 * use Phalcon\Annotations\Factory;
 *
 * $options = [
 *     "prefix"   => "annotations",
 *     "lifetime" => "3600",
 *     "adapter"  => "apc",
 * ];
 * $annotations = Factory::load($options);
 * </code>
 */
class Factory extends \Phalcon\Factory
{

    /**
     * @param \Phalcon\Config|array $config
     * @return AdapterInterface
     */
    public static function load($config): AdapterInterface
    {
    }

}
