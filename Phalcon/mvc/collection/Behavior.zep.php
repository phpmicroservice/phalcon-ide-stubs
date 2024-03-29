<?php

namespace Phalcon\Mvc\Collection;

use Phalcon\Mvc\CollectionInterface;

/**
 * Phalcon\Mvc\Collection\Behavior
 *
 * This is an optional base class for ORM behaviors
 */
abstract class Behavior implements Phalcon\Mvc\Collection\BehaviorInterface
{

    protected $_options;


    /**
     * Phalcon\Mvc\Collection\Behavior
     *
     * @param array $options
     */
    public function __construct($options = null)
    {
    }

    /**
     * Checks whether the behavior must take action on certain event
     *
     * @param string $eventName
     * @return bool
     */
    protected function mustTakeAction(string $eventName): bool
    {
    }

    /**
     * Returns the behavior options related to an event
     *
     * @param string $eventName
     * @return array
     */
    protected function getOptions(string $eventName = null)
    {
    }

    /**
     * This method receives the notifications from the EventsManager
     *
     * @param string $type
     * @param \Phalcon\Mvc\CollectionInterface $model
     */
    public function notify(string $type, \Phalcon\Mvc\CollectionInterface $model)
    {
    }

    /**
     * Acts as fallbacks when a missing method is called on the collection
     *
     * @param \Phalcon\Mvc\CollectionInterface $model
     * @param string $method
     * @param mixed $arguments
     */
    public function missingMethod(\Phalcon\Mvc\CollectionInterface $model, string $method, $arguments = null)
    {
    }

}
