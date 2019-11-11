<?php

namespace Phalcon\Cli;

use Phalcon\DispatcherInterface as DispatcherInterfaceBase;

/**
 * Phalcon\Cli\DispatcherInterface
 *
 * Interface for Phalcon\Cli\Dispatcher
 */
interface DispatcherInterface extends DispatcherInterfaceBase
{

    /**
     * Sets the default task suffix
     *
     * @param string $taskSuffix
     */
    public function setTaskSuffix(string $taskSuffix);

    /**
     * Sets the default task name
     *
     * @param string $taskName
     */
    public function setDefaultTask(string $taskName);

    /**
     * Sets the task name to be dispatched
     *
     * @param string $taskName
     */
    public function setTaskName(string $taskName);

    /**
     * Gets last dispatched task name
     *
     * @return string
     */
    public function getTaskName(): string;

    /**
     * Returns the latest dispatched controller
     *
     * @return TaskInterface
     */
    public function getLastTask(): TaskInterface;

    /**
     * Returns the active task in the dispatcher
     *
     * @return TaskInterface
     */
    public function getActiveTask(): TaskInterface;

}
