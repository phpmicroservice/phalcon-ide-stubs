<?php

namespace Phalcon\Logger\Formatter;

use Phalcon\Logger\Formatter;

/**
 * Phalcon\Logger\Formatter\Line
 *
 * Formats messages using an one-line string
 */
class Line extends Formatter
{
    /**
     * Default date format
     *
     * @var string
     */
    protected $_dateFormat = 'D, d M y H:i:s O';

    /**
     * Format applied to each message
     *
     * @var string
     */
    protected $_format = '[%date%][%type%] %message%';


    /**
     * Default date format
     *
     * @return string
     */
    public function getDateFormat(): string
    {
    }

    /**
     * Default date format
     *
     * @param string $dateFormat
     */
    public function setDateFormat(string $dateFormat)
    {
    }

    /**
     * Format applied to each message
     *
     * @return string
     */
    public function getFormat(): string
    {
    }

    /**
     * Format applied to each message
     *
     * @param string $format
     */
    public function setFormat(string $format)
    {
    }

    /**
     * Phalcon\Logger\Formatter\Line construct
     *
     * @param string $format
     * @param string $dateFormat
     */
    public function __construct($format = null, $dateFormat = null)
    {
    }

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
