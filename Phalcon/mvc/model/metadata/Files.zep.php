<?php

namespace Phalcon\Mvc\Model\MetaData;

use Phalcon\Mvc\Model\MetaData;
use Phalcon\Mvc\Model\Exception;

/**
 * Phalcon\Mvc\Model\MetaData\Files
 *
 * Stores model meta-data in PHP files.
 *
 * <code>
 * $metaData = new \Phalcon\Mvc\Model\MetaData\Files(
 *     [
 *         "metaDataDir" => "app/cache/metadata/",
 *     ]
 * );
 * </code>
 */
class Files extends MetaData
{

    protected $_metaDataDir = './';


    protected $_metaData = array();


    /**
     * Phalcon\Mvc\Model\MetaData\Files constructor
     *
     * @param array $options
     */
    public function __construct($options = null)
    {
    }

    /**
     * Reads meta-data from files
     *
     * @param string $key
     * @return mixed
     */
    public function read(string $key)
    {
    }

    /**
     * Writes the meta-data to files
     *
     * @param string $key
     * @param array $data
     */
    public function write(string $key, $data)
    {
    }

}
