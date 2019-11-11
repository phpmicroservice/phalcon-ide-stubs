<?php

namespace Phalcon\Logger;

use Phalcon\Logger;
use Phalcon\Logger\Item;
use Phalcon\Logger\Exception;
use Phalcon\Logger\AdapterInterface;
use Phalcon\Logger\FormatterInterface;

/**
 * Phalcon\Logger\Adapter
 *
 * Base class for Phalcon\Logger adapters
 */
abstract class Adapter implements \Phalcon\Logger\AdapterInterface
{
    /**
     * Tells if there is an active transaction or not
     *
     * @var boolean
     */
    protected $_transaction = false;

    /**
     * Array with messages queued in the transaction
     *
     * @var array
     */
    protected $_queue = array();

    /**
     * Formatter
     *
     * @var object
     */
    protected $_formatter;

    /**
     * Log level
     *
     * @var int
     */
    protected $_logLevel = 9;


    /**
     * Filters the logs sent to the handlers that are less or equal than a specific level
     *
     * @param int $level
     * @return AdapterInterface
     */
    public function setLogLevel(int $level): AdapterInterface
    {
    }

    /**
     * Returns the current log level
     *
     * @return int
     */
    public function getLogLevel(): int
    {
    }

    /**
     * Sets the message formatter
     *
     * @param \Phalcon\Logger\FormatterInterface $formatter
     * @return AdapterInterface
     */
    public function setFormatter(\Phalcon\Logger\FormatterInterface $formatter): AdapterInterface
    {
    }

    /**
     * Starts a transaction
     *
     * @return AdapterInterface
     */
    public function begin(): AdapterInterface
    {
    }

    /**
     * Commits the internal transaction
     *
     * @return AdapterInterface
     */
    public function commit(): AdapterInterface
    {
    }

    /**
     * Rollbacks the internal transaction
     *
     * @return AdapterInterface
     */
    public function rollback(): AdapterInterface
    {
    }

    /**
     * Returns the whether the logger is currently in an active transaction or not
     *
     * @return bool
     */
    public function isTransaction(): bool
    {
    }

    /**
     * Sends/Writes a critical message to the log
     *
     * @param string $message
     * @param array $context
     * @return AdapterInterface
     */
    public function critical(string $message, array $context = null): AdapterInterface
    {
    }

    /**
     * Sends/Writes an emergency message to the log
     *
     * @param string $message
     * @param array $context
     * @return AdapterInterface
     */
    public function emergency(string $message, array $context = null): AdapterInterface
    {
    }

    /**
     * Sends/Writes a debug message to the log
     *
     * @param string $message
     * @param array $context
     * @return AdapterInterface
     */
    public function debug(string $message, array $context = null): AdapterInterface
    {
    }

    /**
     * Sends/Writes an error message to the log
     *
     * @param string $message
     * @param array $context
     * @return AdapterInterface
     */
    public function error(string $message, array $context = null): AdapterInterface
    {
    }

    /**
     * Sends/Writes an info message to the log
     *
     * @param string $message
     * @param array $context
     * @return AdapterInterface
     */
    public function info(string $message, array $context = null): AdapterInterface
    {
    }

    /**
     * Sends/Writes a notice message to the log
     *
     * @param string $message
     * @param array $context
     * @return AdapterInterface
     */
    public function notice(string $message, array $context = null): AdapterInterface
    {
    }

    /**
     * Sends/Writes a warning message to the log
     *
     * @param string $message
     * @param array $context
     * @return AdapterInterface
     */
    public function warning(string $message, array $context = null): AdapterInterface
    {
    }

    /**
     * Sends/Writes an alert message to the log
     *
     * @param string $message
     * @param array $context
     * @return AdapterInterface
     */
    public function alert(string $message, array $context = null): AdapterInterface
    {
    }

    /**
     * Logs messages to the internal logger. Appends logs to the logger
     *
     * @param mixed $type
     * @param mixed $message
     * @param array $context
     * @return AdapterInterface
     */
    public function log($type, $message = null, array $context = null): AdapterInterface
    {
    }

}
