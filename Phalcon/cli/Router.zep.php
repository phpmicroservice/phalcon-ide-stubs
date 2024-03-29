<?php

namespace Phalcon\Cli;

use Phalcon\DiInterface;
use Phalcon\Cli\Router\Route;
use Phalcon\Cli\Router\Exception;

/**
 * Phalcon\Cli\Router
 *
 * <p>Phalcon\Cli\Router is the standard framework router. Routing is the
 * process of taking a command-line arguments and
 * decomposing it into parameters to determine which module, task, and
 * action of that task should receive the request</p>
 *
 * <code>
 * $router = new \Phalcon\Cli\Router();
 *
 * $router->handle(
 *     [
 *         "module" => "main",
 *         "task"   => "videos",
 *         "action" => "process",
 *     ]
 * );
 *
 * echo $router->getTaskName();
 * </code>
 */
class Router implements Phalcon\Di\InjectionAwareInterface
{

    protected $_dependencyInjector;


    protected $_module;


    protected $_task;


    protected $_action;


    protected $_params = array();


    protected $_defaultModule = null;


    protected $_defaultTask = null;


    protected $_defaultAction = null;


    protected $_defaultParams = array();


    protected $_routes;


    protected $_matchedRoute;


    protected $_matches;


    protected $_wasMatched = false;


    /**
     * Phalcon\Cli\Router constructor
     *
     * @param bool $defaultRoutes
     */
    public function __construct(bool $defaultRoutes = true)
    {
    }

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
     * Sets the name of the default module
     *
     * @param string $moduleName
     */
    public function setDefaultModule(string $moduleName)
    {
    }

    /**
     * Sets the default controller name
     *
     * @param string $taskName
     */
    public function setDefaultTask(string $taskName)
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
     * Sets an array of default paths. If a route is missing a path the router will use the defined here
     * This method must not be used to set a 404 route
     *
     * <code>
     * $router->setDefaults(
     *     [
     *         "module" => "common",
     *         "action" => "index",
     *     ]
     * );
     * </code>
     *
     * @param array $defaults
     * @return Router
     */
    public function setDefaults(array $defaults): Router
    {
    }

    /**
     * Handles routing information received from command-line arguments
     *
     * @param array $arguments
     */
    public function handle($arguments = null)
    {
    }

    /**
     * Adds a route to the router
     *
     * <code>
     * $router->add("/about", "About::main");
     * </code>
     *
     * @param string $pattern
     * @param string/array paths
     * @return \Phalcon\Cli\Router\Route
     * @param mixed $paths
     * @param string  /array paths
     */
    public function add(string $pattern, $paths = null): RouteInterface
    {
    }

    /**
     * Returns processed module name
     *
     * @return string
     */
    public function getModuleName(): string
    {
    }

    /**
     * Returns processed task name
     *
     * @return string
     */
    public function getTaskName(): string
    {
    }

    /**
     * Returns processed action name
     *
     * @return string
     */
    public function getActionName(): string
    {
    }

    /**
     * Returns processed extra params
     *
     * @return array
     */
    public function getParams()
    {
    }

    /**
     * Returns the route that matches the handled URI
     *
     * @return RouteInterface
     */
    public function getMatchedRoute(): RouteInterface
    {
    }

    /**
     * Returns the sub expressions in the regular expression matched
     *
     * @return array
     */
    public function getMatches()
    {
    }

    /**
     * Checks if the router matches any of the defined routes
     *
     * @return bool
     */
    public function wasMatched(): bool
    {
    }

    /**
     * Returns all the routes defined in the router
     *
     * @return array|\Phalcon\Cli\Router\Route[]
     */
    public function getRoutes(): array
    {
    }

    /**
     * Returns a route object by its id
     *
     * @param int $id
     * @return \Phalcon\Cli\Router\Route
     */
    public function getRouteById($id)
    {
    }

    /**
     * Returns a route object by its name
     *
     * @param string $name
     * @return bool|RouteInterface
     */
    public function getRouteByName(string $name)
    {
    }

}
