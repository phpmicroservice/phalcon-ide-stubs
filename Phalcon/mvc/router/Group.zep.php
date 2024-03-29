<?php

namespace Phalcon\Mvc\Router;

/**
 * Phalcon\Mvc\Router\Group
 *
 * Helper class to create a group of routes with common attributes
 *
 * <code>
 * $router = new \Phalcon\Mvc\Router();
 *
 * //Create a group with a common module and controller
 * $blog = new Group(
 *     [
 *         "module"     => "blog",
 *         "controller" => "index",
 *     ]
 * );
 *
 * //All the routes start with /blog
 * $blog->setPrefix("/blog");
 *
 * //Add a route to the group
 * $blog->add(
 *     "/save",
 *     [
 *         "action" => "save",
 *     ]
 * );
 *
 * //Add another route to the group
 * $blog->add(
 *     "/edit/{id}",
 *     [
 *         "action" => "edit",
 *     ]
 * );
 *
 * //This route maps to a controller different than the default
 * $blog->add(
 *     "/blog",
 *     [
 *         "controller" => "about",
 *         "action"     => "index",
 *     ]
 * );
 *
 * //Add the group to the router
 * $router->mount($blog);
 * </code>
 */
class Group implements Phalcon\Mvc\Router\GroupInterface
{

    protected $_prefix;


    protected $_hostname;


    protected $_paths;


    protected $_routes;


    protected $_beforeMatch;


    /**
     * Phalcon\Mvc\Router\Group constructor
     *
     * @param mixed $paths
     */
    public function __construct($paths = null)
    {
    }

    /**
     * Set a hostname restriction for all the routes in the group
     *
     * @param string $hostname
     * @return GroupInterface
     */
    public function setHostname(string $hostname): GroupInterface
    {
    }

    /**
     * Returns the hostname restriction
     *
     * @return string
     */
    public function getHostname(): string
    {
    }

    /**
     * Set a common uri prefix for all the routes in this group
     *
     * @param string $prefix
     * @return GroupInterface
     */
    public function setPrefix(string $prefix): GroupInterface
    {
    }

    /**
     * Returns the common prefix for all the routes
     *
     * @return string
     */
    public function getPrefix(): string
    {
    }

    /**
     * Sets a callback that is called if the route is matched.
     * The developer can implement any arbitrary conditions here
     * If the callback returns false the route is treated as not matched
     *
     * @param callable $beforeMatch
     * @return GroupInterface
     */
    public function beforeMatch($beforeMatch): GroupInterface
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
     * Set common paths for all the routes in the group
     *
     * @param mixed $paths
     * @return GroupInterface
     */
    public function setPaths($paths): GroupInterface
    {
    }

    /**
     * Returns the common paths defined for this group
     *
     * @return array|string
     */
    public function getPaths()
    {
    }

    /**
     * Returns the routes added to the group
     *
     * @return array|RouteInterface[]
     */
    public function getRoutes(): array
    {
    }

    /**
     * Adds a route to the router on any HTTP method
     *
     * <code>
     * $router->add("/about", "About::index");
     * </code>
     *
     * @param string $pattern
     * @param mixed $paths
     * @param mixed $httpMethods
     * @return RouteInterface
     */
    public function add(string $pattern, $paths = null, $httpMethods = null): RouteInterface
    {
    }

    /**
     * Adds a route to the router that only match if the HTTP method is GET
     *
     * @param string $pattern
     * @param string/array paths
     * @return \Phalcon\Mvc\Router\Route
     * @param mixed $paths
     * @param string  /array paths
     */
    public function addGet(string $pattern, $paths = null): RouteInterface
    {
    }

    /**
     * Adds a route to the router that only match if the HTTP method is POST
     *
     * @param string $pattern
     * @param string/array paths
     * @return \Phalcon\Mvc\Router\Route
     * @param mixed $paths
     * @param string  /array paths
     */
    public function addPost(string $pattern, $paths = null): RouteInterface
    {
    }

    /**
     * Adds a route to the router that only match if the HTTP method is PUT
     *
     * @param string $pattern
     * @param string/array paths
     * @return \Phalcon\Mvc\Router\Route
     * @param mixed $paths
     * @param string  /array paths
     */
    public function addPut(string $pattern, $paths = null): RouteInterface
    {
    }

    /**
     * Adds a route to the router that only match if the HTTP method is PATCH
     *
     * @param string $pattern
     * @param string/array paths
     * @return \Phalcon\Mvc\Router\Route
     * @param mixed $paths
     * @param string  /array paths
     */
    public function addPatch(string $pattern, $paths = null): RouteInterface
    {
    }

    /**
     * Adds a route to the router that only match if the HTTP method is DELETE
     *
     * @param string $pattern
     * @param string/array paths
     * @return \Phalcon\Mvc\Router\Route
     * @param mixed $paths
     * @param string  /array paths
     */
    public function addDelete(string $pattern, $paths = null): RouteInterface
    {
    }

    /**
     * Add a route to the router that only match if the HTTP method is OPTIONS
     *
     * @param string $pattern
     * @param string/array paths
     * @return \Phalcon\Mvc\Router\Route
     * @param mixed $paths
     * @param string  /array paths
     */
    public function addOptions(string $pattern, $paths = null): RouteInterface
    {
    }

    /**
     * Adds a route to the router that only match if the HTTP method is HEAD
     *
     * @param string $pattern
     * @param string/array paths
     * @return \Phalcon\Mvc\Router\Route
     * @param mixed $paths
     * @param string  /array paths
     */
    public function addHead(string $pattern, $paths = null): RouteInterface
    {
    }

    /**
     * Removes all the pre-defined routes
     */
    public function clear()
    {
    }

    /**
     * Adds a route applying the common attributes
     *
     * @param string $pattern
     * @param mixed $paths
     * @param mixed $httpMethods
     * @return RouteInterface
     */
    protected function _addRoute(string $pattern, $paths = null, $httpMethods = null): RouteInterface
    {
    }

}
