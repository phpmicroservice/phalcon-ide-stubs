<?php

namespace Phalcon\Validation;

use Phalcon\Validation\MessageInterface;

/**
 * Phalcon\Validation\Message
 *
 * Encapsulates validation info generated in the validation process
 */
class Message implements \Phalcon\Validation\MessageInterface
{

    protected $_type;


    protected $_message;


    protected $_field;


    protected $_code;


    /**
     * Phalcon\Validation\Message constructor
     *
     * @param string $message
     * @param mixed $field
     * @param string $type
     * @param int $code
     */
    public function __construct(string $message, $field = null, string $type = null, int $code = null)
    {
    }

    /**
     * Sets message type
     *
     * @param string $type
     * @return Message
     */
    public function setType(string $type): Message
    {
    }

    /**
     * Returns message type
     *
     * @return string
     */
    public function getType(): string
    {
    }

    /**
     * Sets verbose message
     *
     * @param string $message
     * @return Message
     */
    public function setMessage(string $message): Message
    {
    }

    /**
     * Returns verbose message
     *
     * @return string
     */
    public function getMessage(): string
    {
    }

    /**
     * Sets field name related to message
     *
     * @param mixed $field
     * @return Message
     */
    public function setField($field): Message
    {
    }

    /**
     * Returns field name related to message
     *
     * @return mixed
     */
    public function getField()
    {
    }

    /**
     * Sets code for the message
     *
     * @param int $code
     * @return Message
     */
    public function setCode(int $code): Message
    {
    }

    /**
     * Returns the message code
     *
     * @return int
     */
    public function getCode(): int
    {
    }

    /**
     * Magic __toString method returns verbose message
     *
     * @return string
     */
    public function __toString(): string
    {
    }

    /**
     * Magic __set_state helps to recover messages from serialization
     *
     * @param array $message
     * @return MessageInterface
     */
    public static function __set_state(array $message): MessageInterface
    {
    }

}
