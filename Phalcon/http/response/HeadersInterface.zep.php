<?php

namespace Phalcon\Http\Response;

/**
 * Phalcon\Http\Response\HeadersInterface
 *
 * Interface for Phalcon\Http\Response\Headers compatible bags
 */
interface HeadersInterface
{

    /**
     * Sets a header to be sent at the end of the request
     *
     * @param string $name
     * @param string $value
     */
    public function set(string $name, string $value);

    /**
     * Gets a header value from the internal bag
     *
     * @param string $name
     * @return string|bool
     */
    public function get(string $name);

    /**
     * Sets a raw header to be sent at the end of the request
     *
     * @param string $header
     */
    public function setRaw(string $header);

    /**
     * Sends the headers to the client
     *
     * @return bool
     */
    public function send(): bool;

    /**
     * Reset set headers
     */
    public function reset();

    /**
     * Restore a \Phalcon\Http\Response\Headers object
     *
     * @param array $data
     * @return HeadersInterface
     */
    public static function __set_state(array $data): HeadersInterface;

}
