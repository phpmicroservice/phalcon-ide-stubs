<?php

namespace Phalcon\Flash;

use Phalcon\Flash as FlashBase;
use Phalcon\DiInterface;
use Phalcon\Flash\Exception;
use Phalcon\Session\AdapterInterface as SessionInterface;

/**
 * Phalcon\Flash\Session
 *
 * Temporarily stores the messages in session, then messages can be printed in the next request
 */
class Session extends \Phalcon\Flash
{

    /**
     * Returns the messages stored in session
     *
     * @param bool $remove
     * @param mixed $type
     * @return array
     */
    protected function _getSessionMessages(bool $remove, $type = null): array
    {
    }

    /**
     * Stores the messages in session
     *
     * @param array $messages
     * @return array
     */
    protected function _setSessionMessages(array $messages): array
    {
    }

    /**
     * Adds a message to the session flasher
     *
     * @param string $type
     * @param string $message
     */
    public function message(string $type, string $message)
    {
    }

    /**
     * Checks whether there are messages
     *
     * @param mixed $type
     * @return bool
     */
    public function has($type = null): bool
    {
    }

    /**
     * Returns the messages in the session flasher
     *
     * @param mixed $type
     * @param bool $remove
     * @return array
     */
    public function getMessages($type = null, bool $remove = true): array
    {
    }

    /**
     * Prints the messages in the session flasher
     *
     * @param bool $remove
     */
    public function output(bool $remove = true)
    {
    }

    /**
     * Clear messages in the session messenger
     */
    public function clear()
    {
    }

}
