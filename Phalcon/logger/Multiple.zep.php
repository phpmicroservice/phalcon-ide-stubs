<?php

namespace Phalcon\Logger;

use Phalcon\Logger;
use Phalcon\Logger\AdapterInterface;
use Phalcon\Logger\FormatterInterface;
use Phalcon\Logger\Exception;

/**
 * Phalcon\Logger\Multiple
 *
 * Handles multiples logger handlers
 */
class Multiple
{

    protected $_loggers;


    protected $_formatter;


    protected $_logLevel;



    public function getLoggers()
    {
    }


    public function getFormatter()
    {
    }


    public function getLogLevel()
    {
    }

    /**
     * Pushes a logger to the logger tail
     *
     * @param \Phalcon\Logger\AdapterInterface $logger
     */
    public function push(\Phalcon\Logger\AdapterInterface $logger)
    {
    }

    /**
     * Sets a global formatter
     *
     * @param \Phalcon\Logger\FormatterInterface $formatter
     */
    public function setFormatter(\Phalcon\Logger\FormatterInterface $formatter)
    {
    }

    /**
     * Sets a global level
     *
     * @param int $level
     */
    public function setLogLevel(int $level)
    {
    }

    /**
     * Sends a message to each registered logger
     *
     * @param mixed $type
     * @param mixed $message
     * @param array $context
     */
    public function log($type, $message = null, array $context = null)
    {
    }

    /**
     * Sends/Writes an critical message to the log
     *
     * @param string $message
     * @param array $context
     */
    public function critical(string $message, array $context = null)
    {
    }

    /**
     * Sends/Writes an emergency message to the log
     *
     * @param string $message
     * @param array $context
     */
    public function emergency(string $message, array $context = null)
    {
    }

    /**
     * Sends/Writes a debug message to the log
     *
     * @param string $message
     * @param array $context
     */
    public function debug(string $message, array $context = null)
    {
    }

    /**
     * Sends/Writes an error message to the log
     *
     * @param string $message
     * @param array $context
     */
    public function error(string $message, array $context = null)
    {
    }

    /**
     * Sends/Writes an info message to the log
     *
     * @param string $message
     * @param array $context
     */
    public function info(string $message, array $context = null)
    {
    }

    /**
     * Sends/Writes a notice message to the log
     *
     * @param string $message
     * @param array $context
     */
    public function notice(string $message, array $context = null)
    {
    }

    /**
     * Sends/Writes a warning message to the log
     *
     * @param string $message
     * @param array $context
     */
    public function warning(string $message, array $context = null)
    {
    }

    /**
     * Sends/Writes an alert message to the log
     *
     * @param string $message
     * @param array $context
     */
    public function alert(string $message, array $context = null)
    {
    }

}
