<?php

namespace Phalcon\Validation;

use Phalcon\Validation\Message;

/**
 * Phalcon\Validation\Message
 *
 * Interface for Phalcon\Validation\Message
 */
interface MessageInterface
{

    /**
     * Sets message type
     *
     * @param string $type
     * @return Message
     */
    public function setType(string $type): Message;

    /**
     * Returns message type
     *
     * @return string
     */
    public function getType(): string;

    /**
     * Sets verbose message
     *
     * @param string $message
     * @return Message
     */
    public function setMessage(string $message): Message;

    /**
     * Returns verbose message
     *
     * @return string
     */
    public function getMessage(): string;

    /**
     * Sets field name related to message
     *
     * @param string $field
     * @return Message
     */
    public function setField(string $field): Message;

    /**
     * Returns field name related to message
     *
     * @return string
     */
    public function getField();

    /**
     * Magic __toString method returns verbose message
     *
     * @return string
     */
    public function __toString(): string;

    /**
     * Magic __set_state helps to recover messages from serialization
     *
     * @param array $message
     * @return MessageInterface
     */
    public static function __set_state(array $message): MessageInterface;

}
