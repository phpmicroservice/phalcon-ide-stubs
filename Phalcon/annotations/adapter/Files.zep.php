<?php

namespace Phalcon\Annotations\Adapter;

use Phalcon\Annotations\Adapter;
use Phalcon\Annotations\Reflection;
use Phalcon\Annotations\Exception;

/**
 * Phalcon\Annotations\Adapter\Files
 *
 * Stores the parsed annotations in files. This adapter is suitable for production
 *
 * <code>
 * use Phalcon\Annotations\Adapter\Files;
 *
 * $annotations = new Files(
 *     [
 *         "annotationsDir" => "app/cache/annotations/",
 *     ]
 * );
 * </code>
 */
class Files extends Adapter
{

    protected $_annotationsDir = './';


    /**
     * Phalcon\Annotations\Adapter\Files constructor
     *
     * @param array $options
     */
    public function __construct($options = null)
    {
    }

    /**
     * Reads parsed annotations from files
     *
     * @param string $key
     * @return \Phalcon\Annotations\Reflection
     */
    public function read(string $key)
    {
    }

    /**
     * Writes parsed annotations to files
     *
     * @param string $key
     * @param \Phalcon\Annotations\Reflection $data
     */
    public function write(string $key, \Phalcon\Annotations\Reflection $data)
    {
    }

}
