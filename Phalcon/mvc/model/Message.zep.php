<?php

namespace Phalcon\Mvc\Model;

use Phalcon\Mvc\ModelInterface;
use Phalcon\Mvc\Model\MessageInterface;

/**
 * Phalcon\Mvc\Model\Message
 *
 * Encapsulates validation info generated before save/delete records fails
 *
 * <code>
 * use Phalcon\Mvc\Model\Message as Message;
 *
 * class Robots extends \Phalcon\Mvc\Model
 * {
 *     public function beforeSave()
 *     {
 *         if ($this->name === "Peter") {
 *             $text  = "A robot cannot be named Peter";
 *             $field = "name";
 *             $type  = "InvalidValue";
 *
 *             $message = new Message($text, $field, $type);
 *
 *             $this->appendMessage($message);
 *         }
 *     }
 * }
 * </code>
 */
class Message implements \Phalcon\Mvc\Model\MessageInterface
{
    /**
     * @var string
     */
    protected $_type;

    /**
     * @var string
     */
    protected $_message;


    protected $_field;


    protected $_model;


    protected $_code;


    /**
     * @return string
     */
    public function getType(): string
    {
    }

    /**
     * @return string
     */
    public function getMessage(): string
    {
    }

    /**
     * Phalcon\Mvc\Model\Message constructor
     *
     * @param string $message
     * @param string|array $field
     * @param string $type
     * @param \Phalcon\Mvc\ModelInterface $model
     * @param int|null $code
     */
    public function __construct(string $message, $field = null, $type = null, $model = null, int $code = null)
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
     * Sets verbose message
     *
     * @param string $message
     * @return Message
     */
    public function setMessage(string $message): Message
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
     */
    public function getField()
    {
    }

    /**
     * Set the model who generates the message
     *
     * @param \Phalcon\Mvc\ModelInterface $model
     * @return Message
     */
    public function setModel(\Phalcon\Mvc\ModelInterface $model): Message
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
     * Returns the model that produced the message
     *
     * @return ModelInterface
     */
    public function getModel(): ModelInterface
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
     * Magic __set_state helps to re-build messages variable exporting
     *
     * @param array $message
     * @return MessageInterface
     */
    public static function __set_state(array $message): MessageInterface
    {
    }

}
