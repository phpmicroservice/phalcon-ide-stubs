<?php

namespace Phalcon\Logger;

use Phalcon\Logger;

/**
 * Phalcon\Logger\Formatter
 *
 * This is a base class for logger formatters
 */
abstract class Formatter implements Phalcon\Logger\FormatterInterface
{

    /**
     * Returns the string meaning of a logger constant
     *
     * @param int $type
     * @return string
     */
    public function getTypeString(int $type): string
    {
    }

    /**
     * Interpolates context values into the message placeholders
     *
     * @see http://www.php-fig.org/psr/psr-3/ Section 1.2 Message
     * @param string $message
     * @param array $context
     */
    public function interpolate(string $message, $context = null)
    {
    }

}
