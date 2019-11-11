<?php

namespace Phalcon\Logger\Formatter;

use Phalcon\Logger\Formatter;

/**
 * Phalcon\Logger\Formatter\Syslog
 *
 * Prepares a message to be used in a Syslog backend
 */
class Syslog extends Formatter
{

    /**
     * Applies a format to a message before sent it to the internal log
     *
     * @param string $message
     * @param int $type
     * @param int $timestamp
     * @param array $context
     * @return array
     */
    public function format($message, int $type, int $timestamp, $context = null): array
    {
    }

}
