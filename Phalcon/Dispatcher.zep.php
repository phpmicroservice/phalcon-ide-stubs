<?php

namespace Phalcon;

use Exception;
use Phalcon\DiInterface;
use Phalcon\Di\InjectionAwareInterface;
use Phalcon\DispatcherInterface;
use Phalcon\Events\EventsAwareInterface;
use Phalcon\Events\ManagerInterface;
use Phalcon\Exception as PhalconException;
use Phalcon\FilterInterface;
use Phalcon\Mvc\Model\Binder;
use Phalcon\Mvc\Model\BinderInterface;

/**
 * Phalcon\Dispatcher
 *
 * This is the base class for Phalcon\Mvc\Dispatcher and Phalcon\Cli\Dispatcher.
 * This class can't be instantiated directly, you can use it to create your own dispatchers.
 */
abstract class Dispatcher implements \Phalcon\DispatcherInterface, \Phalcon\Di\InjectionAwareInterface, \Phalcon\Events\EventsAwareInterface
{

    const EXCEPTION_NO_DI = 0;


    const EXCEPTION_CYCLIC_ROUTING = 1;


    const EXCEPTION_HANDLER_NOT_FOUND = 2;


    const EXCEPTION_INVALID_HANDLER = 3;


    const EXCEPTION_INVALID_PARAMS = 4;


    const EXCEPTION_ACTION_NOT_FOUND = 5;


    protected $_dependencyInjector;


    protected $_eventsManager;


    protected $_activeHandler;


    protected $_finished = false;


    protected $_forwarded = false;


    protected $_moduleName = null;


    protected $_namespaceName = null;


    protected $_handlerName = null;


    protected $_actionName = '';


    protected $_params = array();


    protected $_returnedValue = null;


    protected $_lastHandler = null;


    protected $_defaultNamespace = null;


    protected $_defaultHandler = null;


    protected $_defaultAction = '';


    protected $_handlerSuffix = '';


    protected $_actionSuffix = 'Action';


    protected $_previousNamespaceName = null;


    protected $_previousHandlerName = null;


    protected $_previousActionName = null;


    protected $_modelBinding = false;


    protected $_modelBinder = null;


    protected $_isControllerInitialize = false;


    protected $_handlerLasting = true;


    /**
     * Sets the dependency injector
     *
     * @param \Phalcon\DiInterface $dependencyInjector
     */
    public function setDI(\Phalcon\DiInterface $dependencyInjector)
    {
    }

    /**
     * Returns the internal dependency injector
     *
     * @return DiInterface
     */
    public function getDI(): DiInterface
    {
    }

    /**
     * Sets the events manager
     *
     * @param \Phalcon\Events\ManagerInterface $eventsManager
     */
    public function setEventsManager(\Phalcon\Events\ManagerInterface $eventsManager)
    {
    }

    /**
     * Returns the internal event manager
     *
     * @return ManagerInterface
     */
    public function getEventsManager(): ManagerInterface
    {
    }

    /**
     * Sets the default action suffix
     *
     * @param string $actionSuffix
     */
    public function setActionSuffix(string $actionSuffix)
    {
    }

    /**
     * Gets the default action suffix
     *
     * @return string
     */
    public function getActionSuffix(): string
    {
    }

    /**
     * Sets the module where the controller is (only informative)
     *
     * @param string $moduleName
     */
    public function setModuleName(string $moduleName)
    {
    }

    /**
     * Gets the module where the controller class is
     *
     * @return string
     */
    public function getModuleName(): string
    {
    }

    /**
     * Sets the namespace where the controller class is
     *
     * @param string $namespaceName
     */
    public function setNamespaceName(string $namespaceName)
    {
    }

    /**
     * Gets a namespace to be prepended to the current handler name
     *
     * @return string
     */
    public function getNamespaceName(): string
    {
    }

    /**
     * Sets the default namespace
     *
     * @param string $namespaceName
     */
    public function setDefaultNamespace(string $namespaceName)
    {
    }

    /**
     * Returns the default namespace
     *
     * @return string
     */
    public function getDefaultNamespace(): string
    {
    }

    /**
     * Sets the default action name
     *
     * @param string $actionName
     */
    public function setDefaultAction(string $actionName)
    {
    }

    /**
     * Set whether the handler uses singleton mode
     *
     * @param bool $handlerLasting
     */
    public function setHandlerLasting(bool $handlerLasting)
    {
    }

    /**
     * Gets whether the handler uses singleton mode
     *
     * @return bool
     */
    public function getHandlerLasting(): bool
    {
    }

    /**
     * Sets the action name to be dispatched
     *
     * @param string $actionName
     */
    public function setActionName(string $actionName)
    {
    }

    /**
     * Gets the latest dispatched action name
     *
     * @return string
     */
    public function getActionName(): string
    {
    }

    /**
     * Sets action params to be dispatched
     *
     * @param array $params
     */
    public function setParams($params)
    {
    }

    /**
     * Gets action params
     *
     * @return array
     */
    public function getParams(): array
    {
    }

    /**
     * Set a param by its name or numeric index
     *
     * @param mixed $param
     * @param mixed $value
     */
    public function setParam($param, $value)
    {
    }

    /**
     * Gets a param by its name or numeric index
     *
     * @param mixed $param
     * @param string|array $filters
     * @param mixed $defaultValue
     * @return mixed
     */
    public function getParam($param, $filters = null, $defaultValue = null)
    {
    }

    /**
     * Check if a param exists
     *
     * @param mixed $param
     * @return boolean
     */
    public function hasParam($param): bool
    {
    }

    /**
     * Returns the current method to be/executed in the dispatcher
     *
     * @return string
     */
    public function getActiveMethod(): string
    {
    }

    /**
     * Checks if the dispatch loop is finished or has more pendent controllers/tasks to dispatch
     *
     * @return bool
     */
    public function isFinished(): bool
    {
    }

    /**
     * Sets the latest returned value by an action manually
     *
     * @param mixed $value
     */
    public function setReturnedValue($value)
    {
    }

    /**
     * Returns value returned by the latest dispatched action
     *
     * @return mixed
     */
    public function getReturnedValue()
    {
    }

    /**
     * Enable/Disable model binding during dispatch
     *
     * <code>
     * $di->set('dispatcher', function() {
     *     $dispatcher = new Dispatcher();
     *
     *     $dispatcher->setModelBinding(true, 'cache');
     *     return $dispatcher;
     * });
     * </code>
     *
     * @deprecated 3.1.0 Use setModelBinder method
     * @see Phalcon\Dispatcher::setModelBinder()
     * @param bool $value
     * @param mixed $cache
     * @deprecated
     * @return Dispatcher
     */
    public function setModelBinding(bool $value, $cache = null): Dispatcher
    {
    }

    /**
     * Enable model binding during dispatch
     *
     * <code>
     * $di->set('dispatcher', function() {
     *     $dispatcher = new Dispatcher();
     *
     *     $dispatcher->setModelBinder(new Binder(), 'cache');
     *     return $dispatcher;
     * });
     * </code>
     *
     * @param \Phalcon\Mvc\Model\BinderInterface $modelBinder
     * @param mixed $cache
     * @return Dispatcher
     */
    public function setModelBinder(\Phalcon\Mvc\Model\BinderInterface $modelBinder, $cache = null): Dispatcher
    {
    }

    /**
     * Gets model binder
     *
     * @return null|\Phalcon\Mvc\Model\BinderInterface
     */
    public function getModelBinder(): ?BinderInterface
    {
    }

    /**
     * Process the results of the router by calling into the appropriate controller action(s)
     * including any routing data or injected parameters.
     *
     * @return object|false Returns the dispatched handler class (the Controller for Mvc dispatching or a Task
     *                      for CLI dispatching) or <tt>false</tt> if an exception occurred and the operation was
     *                      stopped by returning <tt>false</tt> in the exception handler.
     *
     * @throws \Exception if any uncaught or unhandled exception occurs during the dispatcher process.
     */
    public function dispatch()
    {
    }

    /**
     * Forwards the execution flow to another controller/action.
     *
     * <code>
     * $this->dispatcher->forward(
     *     [
     *         "controller" => "posts",
     *         "action"     => "index",
     *     ]
     * );
     * </code>
     *
     * @param array $forward *
     * @throws \Phalcon\Exception
     */
    public function forward($forward)
    {
    }

    /**
     * Check if the current executed action was forwarded by another one
     *
     * @return bool
     */
    public function wasForwarded(): bool
    {
    }

    /**
     * Possible class name that will be located to dispatch the request
     *
     * @return string
     */
    public function getHandlerClass(): string
    {
    }

    /**
     * @param mixed $handler
     * @param string $actionMethod
     * @param array $params
     */
    public function callActionMethod($handler, string $actionMethod, array $params = array())
    {
    }

    /**
     * Returns bound models from binder instance
     *
     * <code>
     * class UserController extends Controller
     * {
     *     public function showAction(User $user)
     *     {
     *         $boundModels = $this->dispatcher->getBoundModels(); // return array with $user
     *     }
     * }
     * </code>
     *
     * @return array
     */
    public function getBoundModels(): array
    {
    }

    /**
     * Set empty properties to their defaults (where defaults are available)
     */
    protected function _resolveEmptyProperties()
    {
    }

}
