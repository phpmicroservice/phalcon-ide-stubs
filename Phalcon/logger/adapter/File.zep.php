<?php

namespace Phalcon\Logger\Adapter;

use Phalcon\Logger\Adapter;
use Phalcon\Logger\Exception;
use Phalcon\Logger\FormatterInterface;
use Phalcon\Logger\Formatter\Line as LineFormatter;

/**
 * Phalcon\Logger\Adapter\File
 *
 * Adapter to store logs in plain text files
 *
 * <code>
 * $logger = new \Phalcon\Logger\Adapter\File("app/logs/test.log");
 *
 * $logger->log("This is a message");
 * $logger->log(\Phalcon\Logger::ERROR, "This is an error");
 * $logger->error("This is another error");
 *
 * $logger->close();
 * </code>
 */
class File extends Adapter
{
    /**
     * File handler resource
     *
     * @var resource
     */
    protected $_fileHandler;

    /**
     * File Path
     */
    protected $_path;

    /**
     * Path options
     */
    protected $_options;


    /**
     * File Path
     */
    public function getPath()
    {
    }

    /**
     * Phalcon\Logger\Adapter\File constructor
     *
     * @param string $name
     * @param array $options
     */
    public function __construct(string $name, $options = null)
    {
    }

    /**
     * Returns the internal formatter
     *
     * @return FormatterInterface
     */
    public function getFormatter(): FormatterInterface
    {
    }

    /**
     * Writes the log to the file itself
     *
     * @param string $message
     * @param int $type
     * @param int $time
     * @param array $context
     */
    public function logInternal(string $message, int $type, int $time, array $context)
    {
    }

    /**
     * Closes the logger
     *
     * @return bool
     */
    public function close(): bool
    {
    }

    /**
     * Opens the internal file handler after unserialization
     */
    public function __wakeup()
    {
    }

}
