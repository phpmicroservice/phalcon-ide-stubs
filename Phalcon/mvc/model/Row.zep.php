<?php

namespace Phalcon\Mvc\Model;

use Phalcon\Mvc\ModelInterface;
use Phalcon\Mvc\EntityInterface;
use Phalcon\Mvc\Model\Exception;
use Phalcon\Mvc\Model\ResultInterface;

/**
 * Phalcon\Mvc\Model\Row
 *
 * This component allows Phalcon\Mvc\Model to return rows without an associated entity.
 * This objects implements the ArrayAccess interface to allow access the object as object->x or array[x].
 */
class Row implements \Phalcon\Mvc\EntityInterface, \Phalcon\Mvc\Model\ResultInterface, ArrayAccess, JsonSerializable
{

    /**
     * Set the current object's state
     *
     * @param int $dirtyState
     * @return bool
     */
    public function setDirtyState(int $dirtyState): bool
    {
    }

    /**
     * Checks whether offset exists in the row
     *
     * @param string|int $index
     * @return boolean
     */
    public function offsetExists($index): bool
    {
    }

    /**
     * Gets a record in a specific position of the row
     *
     * @param string|int $index
     * @return string|Phalcon\Mvc\ModelInterface
     */
    public function offsetGet($index)
    {
    }

    /**
     * Rows cannot be changed. It has only been implemented to meet the definition of the ArrayAccess interface
     *
     * @param string|int $index
     * @param \Phalcon\Mvc\ModelInterface $value
     */
    public function offsetSet($index, $value)
    {
    }

    /**
     * Rows cannot be changed. It has only been implemented to meet the definition of the ArrayAccess interface
     *
     * @param string|int $offset
     */
    public function offsetUnset($offset)
    {
    }

    /**
     * Reads an attribute value by its name
     *
     * <code>
     * echo $robot->readAttribute("name");
     * </code>
     *
     * @param string $attribute
     * @return mixed
     */
    public function readAttribute($attribute)
    {
    }

    /**
     * Writes an attribute value by its name
     *
     * <code>
     * $robot->writeAttribute("name", "Rosey");
     * </code>
     *
     * @param string $attribute
     * @param mixed $value
     */
    public function writeAttribute(string $attribute, $value)
    {
    }

    /**
     * Returns the instance as an array representation
     *
     * @return array
     */
    public function toArray(): array
    {
    }

    /**
     * Serializes the object for json_encode
     *
     * @return array
     */
    public function jsonSerialize(): array
    {
    }

}
