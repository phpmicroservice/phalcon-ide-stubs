<?php

namespace Phalcon\Mvc\Model\MetaData;

use Phalcon\Mvc\Model\MetaData;
use Phalcon\Mvc\Model\Exception;

/**
 * Phalcon\Mvc\Model\MetaData\Session
 *
 * Stores model meta-data in session. Data will erased when the session finishes.
 * Meta-data are permanent while the session is active.
 *
 * You can query the meta-data by printing $_SESSION['$PMM$']
 *
 * <code>
 * $metaData = new \Phalcon\Mvc\Model\Metadata\Session(
 *     [
 *        "prefix" => "my-app-id",
 *     ]
 * );
 * </code>
 */
class Session extends MetaData
{

    protected $_prefix = '';


    /**
     * Phalcon\Mvc\Model\MetaData\Session constructor
     *
     * @param array $options
     */
    public function __construct($options = null)
    {
    }

    /**
     * Reads meta-data from $_SESSION
     *
     * @param string $key
     * @return array
     */
    public function read(string $key)
    {
    }

    /**
     * Writes the meta-data to $_SESSION
     *
     * @param string $key
     * @param array $data
     */
    public function write(string $key, $data)
    {
    }

}
