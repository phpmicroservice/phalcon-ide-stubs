<?php

namespace Phalcon\Logger\Adapter;

use Phalcon\Logger\Adapter;
use Phalcon\Logger\Formatter\Line;
use Phalcon\Logger\FormatterInterface;

/**
 * Phalcon\Logger\Adapter\Blackhole
 *
 * Any record it can handle will be thrown away.
 */
class Blackhole extends Adapter
{

    /**
     * Returns the internal formatter
     *
     * @return FormatterInterface
     */
    public function getFormatter(): FormatterInterface
    {
    }

    /**
     * Writes the log to the blackhole
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

}
