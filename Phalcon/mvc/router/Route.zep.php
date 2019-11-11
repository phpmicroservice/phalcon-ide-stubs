<?php

namespace Phalcon\Mvc\Router;

use Phalcon\Mvc\Router\Exception;

/**
 * Phalcon\Mvc\Router\Route
 *
 * This class represents every route added to the router
 */
class Route implements Phalcon\Mvc\Router\RouteInterface
{

    protected $_pattern;


    protected $_compiledPattern;


    protected $_paths;


    protected $_methods;


    protected $_hostname;


    protected $_converters;


    protected $_id;


    protected $_name;


    protected $_beforeMatch;


    protected $_match;


    protected $_group;


    static protected $_uniqueId;



    public function getId()
    {
    }

    /**
     * Phalcon\Mvc\Router\Route constructor
     *
     * @param string $pattern
     * @param mixed $paths
     * @param mixed $httpMethods
     */
    public function __construct(string $pattern, $paths = null, $httpMethods = null)
    {
    }

    /**
     * Replaces placeholders from pattern returning a valid PCRE regular expression
     *
     * @param string $pattern
     * @return string
     */
    public function compilePattern(string $pattern): string
    {
    }

    /**
     * Set one or more HTTP methods that constraint the matching of the route
     *
     * <code>
     * $route->via("GET");
     *
     * $route->via(
     *     [
     *         "GET",
     *         "POST",
     *     ]
     * );
     * </code>
     *
     * @param mixed $httpMethods
     * @return Route
     */
    public function via($httpMethods): Route
    {
    }

    /**
     * Extracts parameters from a string
     *
     * @param string $pattern
     * @return array|bool
     */
    public function extractNamedParams(string $pattern)
    {
    }

    /**
     * Reconfigure the route adding a new pattern and a set of paths
     *
     * @param string $pattern
     * @param mixed $paths
     */
    public function reConfigure(string $pattern, $paths = null)
    {
    }

    /**
     * Returns routePaths
     *
     * @param mixed $paths
     * @return array
     */
    public static function getRoutePaths($paths = null): array
    {
    }

    /**
     * Returns the route's name
     *
     * @return string
     */
    public function getName(): string
    {
    }

    /**
     * Sets the route's name
     *
     * <code>
     * $router->add(
     *     "/about",
     *     [
     *         "controller" => "about",
     *     ]
     * )->setName("about");
     * </code>
     *
     * @param string $name
     * @return Route
     */
    public function setName(string $name): Route
    {
    }

    /**
     * Sets a callback that is called if the route is matched.
     * The developer can implement any arbitrary conditions here
     * If the callback returns false the route is treated as not matched
     *
     * <code>
     * $router->add(
     *     "/login",
     *     [
     *         "module"     => "admin",
     *         "controller" => "session",
     *     ]
     * )->beforeMatch(
     *     function ($uri, $route) {
     *         // Check if the request was made with Ajax
     *         if ($_SERVER["HTTP_X_REQUESTED_WITH"] === "xmlhttprequest") {
     *             return false;
     *         }
     *
     *         return true;
     *     }
     * );
     * </code>
     *
     * @param mixed $callback
     * @return Route
     */
    public function beforeMatch($callback): Route
    {
    }

    /**
     * Returns the 'before match' callback if any
     *
     * @return callable
     */
    public function getBeforeMatch()
    {
    }

    /**
     * Allows to set a callback to handle the request directly in the route
     *
     * <code>
     * $router->add(
     *     "/help",
     *     []
     * )->match(
     *     function () {
     *         return $this->getResponse()->redirect("https://support.google.com/", true);
     *     }
     * );
     * </code>
     *
     * @param mixed $callback
     * @return Route
     */
    public function match($callback): Route
    {
    }

    /**
     * Returns the 'match' callback if any
     *
     * @return callable
     */
    public function getMatch()
    {
    }

    /**
     * Returns the route's id
     *
     * @return string
     */
    public function getRouteId(): string
    {
    }

    /**
     * Returns the route's pattern
     *
     * @return string
     */
    public function getPattern(): string
    {
    }

    /**
     * Returns the route's compiled pattern
     *
     * @return string
     */
    public function getCompiledPattern(): string
    {
    }

    /**
     * Returns the paths
     *
     * @return array
     */
    public function getPaths(): array
    {
    }

    /**
     * Returns the paths using positions as keys and names as values
     *
     * @return array
     */
    public function getReversedPaths(): array
    {
    }

    /**
     * Sets a set of HTTP methods that constraint the matching of the route (alias of via)
     *
     * <code>
     * $route->setHttpMethods("GET");
     * $route->setHttpMethods(["GET", "POST"]);
     * </code>
     *
     * @param mixed $httpMethods
     * @return RouteInterface
     */
    public function setHttpMethods($httpMethods): RouteInterface
    {
    }

    /**
     * Returns the HTTP methods that constraint matching the route
     *
     * @return array|string
     */
    public function getHttpMethods()
    {
    }

    /**
     * Sets a hostname restriction to the route
     *
     * <code>
     * $route->setHostname("localhost");
     * </code>
     *
     * @param string $hostname
     * @return RouteInterface
     */
    public function setHostname(string $hostname): RouteInterface
    {
    }

    /**
     * Returns the hostname restriction if any
     *
     * @return string
     */
    public function getHostname(): string
    {
    }

    /**
     * Sets the group associated with the route
     *
     * @param GroupInterface $group
     * @return Route
     */
    public function setGroup(GroupInterface $group): Route
    {
    }

    /**
     * Returns the group associated with the route
     *
     * @return null|GroupInterface
     */
    public function getGroup(): ?GroupInterface
    {
    }

    /**
     * Adds a converter to perform an additional transformation for certain parameter
     *
     * <code>
     * $router = new Phalcon\Mvc\Router(false); //create Router without default routes
     * $route = $router->add("/catalog/([a-zA-Z0-9\_\-]+)/([^\?]+)", [
     *    "controller" => "catalog",
     *    "action" => "show",
     *    "name" => 1,
     *    "params_" => 2,
     * ]);
     *
     * //additional parsing
     * $route->convert(
     *    'params_',
     *    function ($string) {
     *        $array = explode('/', $string);
     *        array_walk($array, function (&$string) {
     *            $string = explode('-', $string);
     *        });
     *
     *        return $array;
     *    });
     * $router->handle("https://site.com/controller_name/param1-val1-val2/param2-val3");
     * //result is: `["params_"] = [["param1","val1","val2"], ["param2","val3"]]`
     * </code>
     *
     * @param string $name
     * @param mixed $converter
     * @return Route
     */
    public function convert(string $name, $converter): Route
    {
    }

    /**
     * Returns the router converter
     *
     * @return array
     */
    public function getConverters(): array
    {
    }

    /**
     * Resets the internal route id generator
     */
    public static function reset()
    {
    }

}
