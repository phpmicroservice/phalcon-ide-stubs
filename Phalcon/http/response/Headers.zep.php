<?php

namespace Phalcon\Http\Response;

use Phalcon\Http\Response\HeadersInterface;

/**
 * Phalcon\Http\Response\Headers
 *
 * This class is a bag to manage the response headers
 */
class Headers implements \Phalcon\Http\Response\HeadersInterface
{

    protected $_headers = array();


    /**
     * Sets a header to be sent at the end of the request
     *
     * @param string $name
     * @param string $value
     */
    public function set(string $name, string $value)
    {
    }

    /**
     * Gets a header value from the internal bag
     *
     * @param string $name
     * @return string|bool
     */
    public function get(string $name)
    {
    }

    /**
     * Sets a raw header to be sent at the end of the request
     *
     * @param string $header
     */
    public function setRaw(string $header)
    {
    }

    /**
     * Removes a header to be sent at the end of the request
     *
     * @param string $header
     */
    public function remove(string $header)
    {
    }

    /**
     * Sends the headers to the client
     *
     * @return bool
     */
    public function send(): bool
    {
    }

    /**
     * Reset set headers
     */
    public function reset()
    {
    }

    /**
     * Returns the current headers as an array
     *
     * @return array
     */
    public function toArray(): array
    {
    }

    /**
     * Restore a \Phalcon\Http\Response\Headers object
     *
     * @param array $data
     * @return HeadersInterface
     */
    public static function __set_state(array $data): HeadersInterface
    {
    }

}
