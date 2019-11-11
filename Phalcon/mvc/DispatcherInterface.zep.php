<?php

namespace Phalcon\Mvc;

use Phalcon\Mvc\ControllerInterface;
use Phalcon\DispatcherInterface as DispatcherInterfaceBase;

/**
 * Phalcon\Mvc\DispatcherInterface
 *
 * Interface for Phalcon\Mvc\Dispatcher
 */
interface DispatcherInterface extends DispatcherInterfaceBase
{

    /**
     * Sets the default controller suffix
     *
     * @param string $controllerSuffix
     */
    public function setControllerSuffix(string $controllerSuffix);

    /**
     * Sets the default controller name
     *
     * @param string $controllerName
     */
    public function setDefaultController(string $controllerName);

    /**
     * Sets the controller name to be dispatched
     *
     * @param string $controllerName
     */
    public function setControllerName(string $controllerName);

    /**
     * Gets last dispatched controller name
     *
     * @return string
     */
    public function getControllerName(): string;

    /**
     * Returns the latest dispatched controller
     *
     * @return ControllerInterface
     */
    public function getLastController(): ControllerInterface;

    /**
     * Returns the active controller in the dispatcher
     *
     * @return ControllerInterface
     */
    public function getActiveController(): ControllerInterface;

}
