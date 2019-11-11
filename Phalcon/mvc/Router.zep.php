<?php

namespace Phalcon\Mvc;

use Phalcon\DiInterface;
use Phalcon\Mvc\Router\Route;
use Phalcon\Mvc\Router\Exception;
use Phalcon\Http\RequestInterface;
use Phalcon\Mvc\Router\GroupInterface;
use Phalcon\Mvc\Router\RouteInterface;
use Phalcon\Di\InjectionAwareInterface;
use Phalcon\Events\ManagerInterface;
use Phalcon\Events\EventsAwareInterface;

/**
 * Phalcon\Mvc\Router
 *
 * Phalcon\Mvc\Router is the standard framework router. Routing is the
 * process of taking a URI endpoint (that part of the URI which comes after the base URL) and
 * decomposing it into parameters to determine which module, controller, and
 * action of that controller should receive the request
 *
 * <code>
 * use Phalcon\Mvc\Router;
 *
 * $router = new Router();
 *
 * $router->add(
 *     "/documentation/{chapter}/{name}\.{type:[a-z]+}",
 *     [
 *         "controller" => "documentation",
 *         "action"     => "show",
 *     ]
 * );
 *
 * $router->handle();
 *
 * echo $router->getControllerName();
 * </code>
 */
class Router implements \Phalcon\Di\InjectionAwareInterface, Phalcon\Mvc\RouterInterface, \Phalcon\Events\EventsAwareInterface
{

    const URI_SOURCE_GET_URL = 0;


    const URI_SOURCE_SERVER_REQUEST_URI = 1;


    const POSITION_FIRST = 0;


    const POSITION_LAST = 1;


    protected $_dependencyInjector;


    protected $_eventsManager;


    protected $_uriSource;


    protected $_namespace = null;


    protected $_module = null;


    protected $_controller = null;


    protected $_action = null;


    protected $_params = array();


    protected $_routes;


    protected $_matchedRoute;


    protected $_matches;


    protected $_wasMatched = false;


    protected $_defaultNamespace;


    protected $_defaultModule;


    protected $_defaultController;


    protected $_defaultAction;


    protected $_defaultParams = array();


    protected $_removeExtraSlashes;


    protected $_notFoundPaths;


    protected $_keyRouteNames = array();


    protected $_keyRouteIds = array();



    public function getKeyRouteNames()
    {
    }

    /**
     * @param mixed $keyRouteNames
     */
    public function setKeyRouteNames($keyRouteNames)
    {
    }


    public function getKeyRouteIds()
    {
    }

    /**
     * @param mixed $keyRouteIds
     */
    public function setKeyRouteIds($keyRouteIds)
    {
    }

    /**
     * Phalcon\Mvc\Router constructor
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
     * Get rewrite info. This info is read from $_GET["_url"]. This returns '/' if the rewrite information cannot be read
     *
     * @return string
     */
    public function getRewriteUri(): string
    {
    }

    /**
     * Sets the URI source. One of the URI_SOURCE_ constants
     *
     * <code>
     * $router->setUriSource(
     *     Router::URI_SOURCE_SERVER_REQUEST_URI
     * );
     * </code>
     *
     * @param mixed $uriSource
     * @return RouterInterface
     */
    public function setUriSource($uriSource): RouterInterface
    {
    }

    /**
     * Set whether router must remove the extra slashes in the handled routes
     *
     * @param bool $remove
     * @return RouterInterface
     */
    public function removeExtraSlashes(bool $remove): RouterInterface
    {
    }

    /**
     * Sets the name of the default namespace
     *
     * @param string $namespaceName
     * @return RouterInterface
     */
    public function setDefaultNamespace(string $namespaceName): RouterInterface
    {
    }

    /**
     * Sets the name of the default module
     *
     * @param string $moduleName
     * @return RouterInterface
     */
    public function setDefaultModule(string $moduleName): RouterInterface
    {
    }

    /**
     * Sets the default controller name
     *
     * @param string $controllerName
     * @return RouterInterface
     */
    public function setDefaultController(string $controllerName): RouterInterface
    {
    }

    /**
     * Sets the default action name
     *
     * @param string $actionName
     * @return RouterInterface
     */
    public function setDefaultAction(string $actionName): RouterInterface
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
     * @return RouterInterface
     */
    public function setDefaults(array $defaults): RouterInterface
    {
    }

    /**
     * Returns an array of default parameters
     *
     * @return array
     */
    public function getDefaults(): array
    {
    }

    /**
     * Handles routing information received from the rewrite engine
     *
     * <code>
     * // Read the info from the rewrite engine
     * $router->handle();
     *
     * // Manually passing an URL
     * $router->handle("/posts/edit/1");
     * </code>
     *
     * @param string $uri
     */
    public function handle(string $uri = null)
    {
    }

    /**
     * Attach Route object to the routes stack.
     *
     * <code>
     * use Phalcon\Mvc\Router;
     * use Phalcon\Mvc\Router\Route;
     *
     * class CustomRoute extends Route {
     *      // ...
     * }
     *
     * $router = new Router();
     *
     * $router->attach(
     *     new CustomRoute("/about", "About::index", ["GET", "HEAD"]),
     *     Router::POSITION_FIRST
     * );
     * </code>
     *
     * @todo Add to the interface for 4.0.0
     * @param \Phalcon\Mvc\Router\RouteInterface $route
     * @param mixed $position
     * @return RouterInterface
     */
    public function attach(\Phalcon\Mvc\Router\RouteInterface $route, $position = Router::POSITION_LAST): RouterInterface
    {
    }

    /**
     * Adds a route to the router without any HTTP constraint
     *
     * <code>
     * use Phalcon\Mvc\Router;
     *
     * $router->add("/about", "About::index");
     * $router->add("/about", "About::index", ["GET", "POST"]);
     * $router->add("/about", "About::index", ["GET", "POST"], Router::POSITION_FIRST);
     * </code>
     *
     * @param string $pattern
     * @param mixed $paths
     * @param mixed $httpMethods
     * @param mixed $position
     * @return RouteInterface
     */
    public function add(string $pattern, $paths = null, $httpMethods = null, $position = Router::POSITION_LAST): RouteInterface
    {
    }

    /**
     * Adds a route to the router that only match if the HTTP method is GET
     *
     * @param string $pattern
     * @param mixed $paths
     * @param mixed $position
     * @return RouteInterface
     */
    public function addGet(string $pattern, $paths = null, $position = Router::POSITION_LAST): RouteInterface
    {
    }

    /**
     * Adds a route to the router that only match if the HTTP method is POST
     *
     * @param string $pattern
     * @param mixed $paths
     * @param mixed $position
     * @return RouteInterface
     */
    public function addPost(string $pattern, $paths = null, $position = Router::POSITION_LAST): RouteInterface
    {
    }

    /**
     * Adds a route to the router that only match if the HTTP method is PUT
     *
     * @param string $pattern
     * @param mixed $paths
     * @param mixed $position
     * @return RouteInterface
     */
    public function addPut(string $pattern, $paths = null, $position = Router::POSITION_LAST): RouteInterface
    {
    }

    /**
     * Adds a route to the router that only match if the HTTP method is PATCH
     *
     * @param string $pattern
     * @param mixed $paths
     * @param mixed $position
     * @return RouteInterface
     */
    public function addPatch(string $pattern, $paths = null, $position = Router::POSITION_LAST): RouteInterface
    {
    }

    /**
     * Adds a route to the router that only match if the HTTP method is DELETE
     *
     * @param string $pattern
     * @param mixed $paths
     * @param mixed $position
     * @return RouteInterface
     */
    public function addDelete(string $pattern, $paths = null, $position = Router::POSITION_LAST): RouteInterface
    {
    }

    /**
     * Add a route to the router that only match if the HTTP method is OPTIONS
     *
     * @param string $pattern
     * @param mixed $paths
     * @param mixed $position
     * @return RouteInterface
     */
    public function addOptions(string $pattern, $paths = null, $position = Router::POSITION_LAST): RouteInterface
    {
    }

    /**
     * Adds a route to the router that only match if the HTTP method is HEAD
     *
     * @param string $pattern
     * @param mixed $paths
     * @param mixed $position
     * @return RouteInterface
     */
    public function addHead(string $pattern, $paths = null, $position = Router::POSITION_LAST): RouteInterface
    {
    }

    /**
     * Adds a route to the router that only match if the HTTP method is PURGE (Squid and Varnish support)
     *
     * @param string $pattern
     * @param mixed $paths
     * @param mixed $position
     * @return RouteInterface
     */
    public function addPurge(string $pattern, $paths = null, $position = Router::POSITION_LAST): RouteInterface
    {
    }

    /**
     * Adds a route to the router that only match if the HTTP method is TRACE
     *
     * @param string $pattern
     * @param mixed $paths
     * @param mixed $position
     * @return RouteInterface
     */
    public function addTrace(string $pattern, $paths = null, $position = Router::POSITION_LAST): RouteInterface
    {
    }

    /**
     * Adds a route to the router that only match if the HTTP method is CONNECT
     *
     * @param string $pattern
     * @param mixed $paths
     * @param mixed $position
     * @return RouteInterface
     */
    public function addConnect(string $pattern, $paths = null, $position = Router::POSITION_LAST): RouteInterface
    {
    }

    /**
     * Mounts a group of routes in the router
     *
     * @param \Phalcon\Mvc\Router\GroupInterface $group
     * @return RouterInterface
     */
    public function mount(\Phalcon\Mvc\Router\GroupInterface $group): RouterInterface
    {
    }

    /**
     * Set a group of paths to be returned when none of the defined routes are matched
     *
     * @param mixed $paths
     * @return RouterInterface
     */
    public function notFound($paths): RouterInterface
    {
    }

    /**
     * Removes all the pre-defined routes
     */
    public function clear()
    {
    }

    /**
     * Returns the processed namespace name
     *
     * @return string
     */
    public function getNamespaceName(): string
    {
    }

    /**
     * Returns the processed module name
     *
     * @return string
     */
    public function getModuleName(): string
    {
    }

    /**
     * Returns the processed controller name
     *
     * @return string
     */
    public function getControllerName(): string
    {
    }

    /**
     * Returns the processed action name
     *
     * @return string
     */
    public function getActionName(): string
    {
    }

    /**
     * Returns the processed parameters
     *
     * @return array
     */
    public function getParams(): array
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
    public function getMatches(): array
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
     * @return array|\Phalcon\Mvc\Router\RouteInterface[]
     */
    public function getRoutes(): array
    {
    }

    /**
     * Returns a route object by its id
     *
     * @param mixed $id
     * @return bool|\Phalcon\Mvc\Router\RouteInterface
     */
    public function getRouteById($id)
    {
    }

    /**
     * Returns a route object by its name
     *
     * @param string $name
     * @return bool|\Phalcon\Mvc\Router\RouteInterface
     */
    public function getRouteByName(string $name)
    {
    }

    /**
     * Returns whether controller name should not be mangled
     *
     * @return bool
     */
    public function isExactControllerName(): bool
    {
    }

}
