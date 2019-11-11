<?php

namespace Phalcon\Assets\Resource;

use Phalcon\Assets\Resource as ResourceBase;

/**
 * Phalcon\Assets\Resource\Css
 *
 * Represents CSS resources
 */
class Css extends \Phalcon\Assets\Resource
{

    /**
     * Phalcon\Assets\Resource\Css
     *
     * @param string $path
     * @param boolean $local
     * @param boolean $filter
     * @param array $attributes
     */
    public function __construct(string $path, bool $local = true, bool $filter = true, $attributes = null)
    {
    }

}
