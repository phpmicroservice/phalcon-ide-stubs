<?php

namespace Phalcon\Annotations\Adapter;

use Phalcon\Annotations\Adapter;
use Phalcon\Annotations\Reflection;

/**
 * Phalcon\Annotations\Adapter\Apc
 *
 * Stores the parsed annotations in APC. This adapter is suitable for production
 *
 * <code>
 * use Phalcon\Annotations\Adapter\Apc;
 *
 * $annotations = new Apc();
 * </code>
 *
 * @see \Phalcon\Annotations\Adapter\Apcu
 * @deprecated
 */
class Apc extends Adapter
{

    protected $_prefix = '';


    protected $_ttl = 172800;


    /**
     * Phalcon\Annotations\Adapter\Apc constructor
     *
     * @param array $options
     */
    public function __construct($options = null)
    {
    }

    /**
     * Reads parsed annotations from APC
     *
     * @param string $key
     * @return bool|\Phalcon\Annotations\Reflection
     */
    public function read(string $key)
    {
    }

    /**
     * Writes parsed annotations to APC
     *
     * @param string $key
     * @param \Phalcon\Annotations\Reflection $data
     */
    public function write(string $key, \Phalcon\Annotations\Reflection $data)
    {
    }

}
