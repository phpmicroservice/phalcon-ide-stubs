<?php

namespace Phalcon;

/**
 * Phalcon\DispatcherInterface
 *
 * Interface for Phalcon\Dispatcher
 */
interface DispatcherInterface
{

    /**
     * Sets the default action suffix
     *
     * @param string $actionSuffix
     */
    public function setActionSuffix(string $actionSuffix);

    /**
     * Gets the default action suffix
     *
     * @return string
     */
    public function getActionSuffix(): string;

    /**
     * Sets the default namespace
     *
     * @param string $defaultNamespace
     */
    public function setDefaultNamespace(string $defaultNamespace);

    /**
     * Sets the default action name
     *
     * @param string $actionName
     */
    public function setDefaultAction(string $actionName);

    /**
     * Sets the namespace which the controller belongs to
     *
     * @param string $namespaceName
     */
    public function setNamespaceName(string $namespaceName);

    /**
     * Sets the module name which the application belongs to
     *
     * @param string $moduleName
     */
    public function setModuleName(string $moduleName);

    /**
     * Sets the action name to be dispatched
     *
     * @param string $actionName
     */
    public function setActionName(string $actionName);

    /**
     * Gets last dispatched action name
     *
     * @return string
     */
    public function getActionName(): string;

    /**
     * Sets action params to be dispatched
     *
     * @param array $params
     */
    public function setParams($params);

    /**
     * Gets action params
     *
     * @return array
     */
    public function getParams(): array;

    /**
     * Set a param by its name or numeric index
     *
     * @param mixed $param
     * @param mixed $value
     */
    public function setParam($param, $value);

    /**
     * Gets a param by its name or numeric index
     *
     * @param mixed $param
     * @param string|array $filters
     * @return mixed
     */
    public function getParam($param, $filters = null);

    /**
     * Check if a param exists
     *
     * @param mixed $param
     * @return boolean
     */
    public function hasParam($param): bool;

    /**
     * Checks if the dispatch loop is finished or has more pendent controllers/tasks to dispatch
     *
     * @return bool
     */
    public function isFinished(): bool;

    /**
     * Returns value returned by the latest dispatched action
     *
     * @return mixed
     */
    public function getReturnedValue();

    /**
     * Dispatches a handle action taking into account the routing parameters
     *
     * @return object
     */
    public function dispatch();

    /**
     * Forwards the execution flow to another controller/action
     *
     * @param array $forward
     */
    public function forward($forward);

}
