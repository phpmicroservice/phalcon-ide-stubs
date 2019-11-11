<?php

namespace Phalcon\Logger;

/**
 * Phalcon\Logger\AdapterInterface
 *
 * Interface for Phalcon\Logger adapters
 */
interface AdapterInterface
{

    /**
     * Sets the message formatter
     *
     * @param FormatterInterface $formatter
     * @return AdapterInterface
     */
    public function setFormatter(FormatterInterface $formatter): AdapterInterface;

    /**
     * Returns the internal formatter
     *
     * @return FormatterInterface
     */
    public function getFormatter(): FormatterInterface;

    /**
     * Filters the logs sent to the handlers to be greater or equals than a specific level
     *
     * @param int $level
     * @return AdapterInterface
     */
    public function setLogLevel(int $level): AdapterInterface;

    /**
     * Returns the current log level
     *
     * @return int
     */
    public function getLogLevel(): int;

    /**
     * Sends/Writes messages to the file log
     *
     * @param mixed $type
     * @param mixed $message
     * @param array $context
     * @return AdapterInterface
     */
    public function log($type, $message = null, array $context = null): AdapterInterface;

    /**
     * Starts a transaction
     *
     * @return AdapterInterface
     */
    public function begin(): AdapterInterface;

    /**
     * Commits the internal transaction
     *
     * @return AdapterInterface
     */
    public function commit(): AdapterInterface;

    /**
     * Rollbacks the internal transaction
     *
     * @return AdapterInterface
     */
    public function rollback(): AdapterInterface;

    /**
     * Closes the logger
     *
     * @return bool
     */
    public function close(): bool;

    /**
     * Sends/Writes a debug message to the log
     *
     * @param string $message
     * @param array $context
     * @return AdapterInterface
     */
    public function debug(string $message, array $context = null): AdapterInterface;

    /**
     * Sends/Writes an error message to the log
     *
     * @param string $message
     * @param array $context
     * @return AdapterInterface
     */
    public function error(string $message, array $context = null): AdapterInterface;

    /**
     * Sends/Writes an info message to the log
     *
     * @param string $message
     * @param array $context
     * @return AdapterInterface
     */
    public function info(string $message, array $context = null): AdapterInterface;

    /**
     * Sends/Writes a notice message to the log
     *
     * @param string $message
     * @param array $context
     * @return AdapterInterface
     */
    public function notice(string $message, array $context = null): AdapterInterface;

    /**
     * Sends/Writes a warning message to the log
     *
     * @param string $message
     * @param array $context
     * @return AdapterInterface
     */
    public function warning(string $message, array $context = null): AdapterInterface;

    /**
     * Sends/Writes an alert message to the log
     *
     * @param string $message
     * @param array $context
     * @return AdapterInterface
     */
    public function alert(string $message, array $context = null): AdapterInterface;

    /**
     * Sends/Writes an emergency message to the log
     *
     * @param string $message
     * @param array $context
     * @return AdapterInterface
     */
    public function emergency(string $message, array $context = null): AdapterInterface;

}
