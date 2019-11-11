<?php

namespace Phalcon\Flash;

use Phalcon\Flash as FlashBase;

/**
 * Phalcon\Flash\Direct
 *
 * This is a variant of the Phalcon\Flash that immediately outputs any message passed to it
 */
class Direct extends \Phalcon\Flash
{

    /**
     * Outputs a message
     *
     * @param string $type
     * @param mixed $message
     * @return string
     */
    public function message(string $type, $message): string
    {
    }

    /**
     * Prints the messages accumulated in the flasher
     *
     * @param bool $remove
     */
    public function output(bool $remove = true)
    {
    }

}
