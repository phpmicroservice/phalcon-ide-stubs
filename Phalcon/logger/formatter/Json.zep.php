<?php

namespace Phalcon\Logger\Formatter;

use Phalcon\Logger\Formatter;

/**
 * Phalcon\Logger\Formatter\Json
 *
 * Formats messages using JSON encoding
 */
class Json extends Formatter
{

    /**
     * Applies a format to a message before sent it to the internal log
     *
     * @param string $message
     * @param int $type
     * @param int $timestamp
     * @param array $context
     * @return string
     */
    public function format(string $message, int $type, int $timestamp, $context = null): string
    {
    }

}
