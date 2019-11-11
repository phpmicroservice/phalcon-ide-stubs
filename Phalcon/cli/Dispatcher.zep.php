<?php

namespace Phalcon\Cli;

use Phalcon\FilterInterface;
use Phalcon\Events\ManagerInterface;
use Phalcon\Cli\Dispatcher\Exception;
use Phalcon\Dispatcher as CliDispatcher;

/**
 * Phalcon\Cli\Dispatcher
 *
 * Dispatching is the process of taking the command-line arguments, extracting the module name,
 * task name, action name, and optional parameters contained in it, and then
 * instantiating a task and calling an action on it.
 *
 * <code>
 * use Phalcon\Di;
 * use Phalcon\Cli\Dispatcher;
 *
 * $di = new Di();
 * $dispatcher = new Dispatcher();
 * $dispatcher->setDi($di);
 *
 * $dispatcher->setTaskName("posts");
 * $dispatcher->setActionName("index");
 * $dispatcher->setParams([]);
 *
 * $handle = $dispatcher->dispatch();
 * </code>
 */
class Dispatcher extends \Phalcon\Dispatcher implements Phalcon\Cli\DispatcherInterface
{

    protected $_handlerSuffix = 'Task';


    protected $_defaultHandler = 'main';


    protected $_defaultAction = 'main';


    protected $_options = array();


    /**
     * Sets the default task suffix
     *
     * @param string $taskSuffix
     */
    public function setTaskSuffix(string $taskSuffix)
    {
    }

    /**
     * Sets the default task name
     *
     * @param string $taskName
     */
    public function setDefaultTask(string $taskName)
    {
    }

    /**
     * Sets the task name to be dispatched
     *
     * @param string $taskName
     */
    public function setTaskName(string $taskName)
    {
    }

    /**
     * Gets last dispatched task name
     *
     * @return string
     */
    public function getTaskName(): string
    {
    }

    /**
     * Throws an internal exception
     *
     * @param string $message
     * @param int $exceptionCode
     */
    protected function _throwDispatchException(string $message, int $exceptionCode = 0)
    {
    }

    /**
     * Handles a user exception
     *
     * @param \Exception $exception
     */
    protected function _handleException(\Exception $exception)
    {
    }

    /**
     * Returns the latest dispatched controller
     *
     * @return TaskInterface
     */
    public function getLastTask(): TaskInterface
    {
    }

    /**
     * Returns the active task in the dispatcher
     *
     * @return TaskInterface
     */
    public function getActiveTask(): TaskInterface
    {
    }

    /**
     * Set the options to be dispatched
     *
     * @param array $options
     */
    public function setOptions(array $options)
    {
    }

    /**
     * Get dispatched options
     *
     * @return array
     */
    public function getOptions(): array
    {
    }

    /**
     * Gets an option by its name or numeric index
     *
     * @param  mixed $option
     * @param  string|array $filters
     * @param  mixed $defaultValue
     * @return mixed
     */
    public function getOption($option, $filters = null, $defaultValue = null)
    {
    }

    /**
     * Check if an option exists
     *
     * @param mixed $option
     * @return bool
     */
    public function hasOption($option): bool
    {
    }

    /**
     * Calls the action method.
     *
     * @param mixed $handler
     * @param string $actionMethod
     * @param array $params
     * @return mixed
     */
    public function callActionMethod($handler, string $actionMethod, array $params = array())
    {
    }

}
