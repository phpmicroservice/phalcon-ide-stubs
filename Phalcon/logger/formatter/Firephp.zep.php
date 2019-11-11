<?php

namespace Phalcon\Logger\Formatter;

use Phalcon\Logger;
use Phalcon\Logger\Formatter;

/**
 * Phalcon\Logger\Formatter\Firephp
 *
 * Formats messages so that they can be sent to FirePHP
 *
 * @deprecated Will be removed in 4.0.0
 */
class Firephp extends Formatter
{

    protected $_showBacktrace = true;


    protected $_enableLabels = true;


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
     * Returns the string meaning of a logger constant
     *
     * @param bool $isShow
     * @return Firephp
     */
    public function setShowBacktrace(bool $isShow = null): Firephp
    {
    }

    /**
     * Returns the string meaning of a logger constant
     *
     * @return bool
     */
    public function getShowBacktrace(): bool
    {
    }

    /**
     * Returns the string meaning of a logger constant
     *
     * @param bool $isEnable
     * @return Firephp
     */
    public function enableLabels(bool $isEnable = null): Firephp
    {
    }

    /**
     * Returns the labels enabled
     *
     * @return bool
     */
    public function labelsEnabled(): bool
    {
    }

    /**
     * Applies a format to a message before sending it to the log
     *
     * @param string $message
     * @param int $type
     * @param int $timestamp
     * @param array $context
     *
     * @return string
     */
    public function format(string $message, int $type, int $timestamp, $context = null): string
    {
    }

}
