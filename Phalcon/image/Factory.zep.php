<?php

namespace Phalcon\Image;

use Phalcon\Factory as BaseFactory;
use Phalcon\Factory\Exception;
use Phalcon\Config;

/**
 * Loads Image Adapter class using 'adapter' option
 *
 * <code>
 * use Phalcon\Image\Factory;
 *
 * $options = [
 *     "width"   => 200,
 *     "height"  => 200,
 *     "file"    => "upload/test.jpg",
 *     "adapter" => "imagick",
 * ];
 * $image = Factory::load($options);
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

    /**
     * @param string $namespace
     * @param mixed $config
     */
    protected static function loadClass(string $namespace, $config)
    {
    }

}
