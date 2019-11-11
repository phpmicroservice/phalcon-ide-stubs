<?php

namespace Phalcon\Events;

/**
 * Phalcon\Events\EventInterface
 *
 * Interface for Phalcon\Events\Event class
 */
interface EventInterface
{

    /**
     * Gets event data
     *
     * @return mixed
     */
    public function getData();

    /**
     * Sets event data
     *
     * @param mixed $data
     * @return EventInterface
     */
    public function setData($data = null): EventInterface;

    /**
     * Gets event type
     *
     * @return mixed
     */
    public function getType();

    /**
     * Sets event type
     *
     * @param string $type
     * @return EventInterface
     */
    public function setType(string $type): EventInterface;

    /**
     * Stops the event preventing propagation
     *
     * @return EventInterface
     */
    public function stop(): EventInterface;

    /**
     * Check whether the event is currently stopped
     *
     * @return bool
     */
    public function isStopped(): bool;

    /**
     * Check whether the event is cancelable
     *
     * @return bool
     */
    public function isCancelable(): bool;

}
