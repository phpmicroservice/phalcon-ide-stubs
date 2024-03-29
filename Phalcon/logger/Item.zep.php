<?php

namespace Phalcon\Logger;

/**
 * Phalcon\Logger\Item
 *
 * Represents each item in a logging transaction
 */
class Item
{
    /**
     * Log type
     *
     * @var integer
     */
    protected $_type;

    /**
     * Log message
     *
     * @var string
     */
    protected $_message;

    /**
     * Log timestamp
     *
     * @var integer
     */
    protected $_time;


    protected $_context;


    /**
     * Log type
     *
     * @return integer
     */
    public function getType()
    {
    }

    /**
     * Log message
     *
     * @return string
     */
    public function getMessage(): string
    {
    }

    /**
     * Log timestamp
     *
     * @return integer
     */
    public function getTime()
    {
    }


    public function getContext()
    {
    }

    /**
     * Phalcon\Logger\Item constructor
     *
     * @param string $message
     * @param integer $type
     * @param integer $time
     * @param array $context
     */
    public function __construct(string $message, int $type, int $time = 0, $context = null)
    {
    }

}
