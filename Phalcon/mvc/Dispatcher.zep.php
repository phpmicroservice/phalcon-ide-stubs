<?php

namespace Phalcon\Mvc;

use Phalcon\Mvc\DispatcherInterface;
use Phalcon\Mvc\Dispatcher\Exception;
use Phalcon\Events\ManagerInterface;
use Phalcon\Http\ResponseInterface;
use Phalcon\Mvc\ControllerInterface;
use Phalcon\Dispatcher as BaseDispatcher;

/**
 * Phalcon\Mvc\Dispatcher
 *
 * Dispatching is the process of taking the request object, extracting the module name,
 * controller name, action name, and optional parameters contained in it, and then
 * instantiating a controller and calling an action of that controller.
 *
 * <code>
 * $di = new \Phalcon\Di();
 *
 * $dispatcher = new \Phalcon\Mvc\Dispatcher();
 *
 * $dispatcher->setDI($di);
 *
 * $dispatcher->setControllerName("posts");
 * $dispatcher->setActionName("index");
 * $dispatcher->setParams([]);
 *
 * $controller = $dispatcher->dispatch();
 * </code>
 */
class Dispatcher extends \Phalcon\Dispatcher implements \Phalcon\Mvc\DispatcherInterface
{

    protected $_handlerSuffix = 'Controller';


    protected $_defaultHandler = 'index';


    protected $_defaultAction = 'index';


    /**
     * Sets the default controller suffix
     *
     * @param string $controllerSuffix
     */
    public function setControllerSuffix(string $controllerSuffix)
    {
    }

    /**
     * Sets the default controller name
     *
     * @param string $controllerName
     */
    public function setDefaultController(string $controllerName)
    {
    }

    /**
     * Sets the controller name to be dispatched
     *
     * @param string $controllerName
     */
    public function setControllerName(string $controllerName)
    {
    }

    /**
     * Gets last dispatched controller name
     *
     * @return string
     */
    public function getControllerName(): string
    {
    }

    /**
     * Gets previous dispatched namespace name
     *
     * @return string
     */
    public function getPreviousNamespaceName(): string
    {
    }

    /**
     * Gets previous dispatched controller name
     *
     * @return string
     */
    public function getPreviousControllerName(): string
    {
    }

    /**
     * Gets previous dispatched action name
     *
     * @return string
     */
    public function getPreviousActionName(): string
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
     * Forwards the execution flow to another controller/action.
     *
     * <code>
     * use Phalcon\Events\Event;
     * use Phalcon\Mvc\Dispatcher;
     * use App\Backend\Bootstrap as Backend;
     * use App\Frontend\Bootstrap as Frontend;
     *
     * // Registering modules
     * $modules = [
     *     "frontend" => [
     *         "className" => Frontend::class,
     *         "path"      => __DIR__ . "/app/Modules/Frontend/Bootstrap.php",
     *         "metadata"  => [
     *             "controllersNamespace" => "App\Frontend\Controllers",
     *         ],
     *     ],
     *     "backend" => [
     *         "className" => Backend::class,
     *         "path"      => __DIR__ . "/app/Modules/Backend/Bootstrap.php",
     *         "metadata"  => [
     *             "controllersNamespace" => "App\Backend\Controllers",
     *         ],
     *     ],
     * ];
     *
     * $application->registerModules($modules);
     *
     * // Setting beforeForward listener
     * $eventsManager  = $di->getShared("eventsManager");
     *
     * $eventsManager->attach(
     *     "dispatch:beforeForward",
     *     function(Event $event, Dispatcher $dispatcher, array $forward) use ($modules) {
     *         $metadata = $modules[$forward["module"]]["metadata"];
     *
     *         $dispatcher->setModuleName($forward["module"]);
     *         $dispatcher->setNamespaceName($metadata["controllersNamespace"]);
     *     }
     * );
     *
     * // Forward
     * $this->dispatcher->forward(
     *     [
     *         "module"     => "backend",
     *         "controller" => "posts",
     *         "action"     => "index",
     *     ]
     * );
     * </code>
     *
     * @param array $forward
     */
    public function forward($forward)
    {
    }

    /**
     * Possible controller class name that will be located to dispatch the request
     *
     * @return string
     */
    public function getControllerClass(): string
    {
    }

    /**
     * Returns the latest dispatched controller
     *
     * @return ControllerInterface
     */
    public function getLastController(): ControllerInterface
    {
    }

    /**
     * Returns the active controller in the dispatcher
     *
     * @return ControllerInterface
     */
    public function getActiveController(): ControllerInterface
    {
    }

}
