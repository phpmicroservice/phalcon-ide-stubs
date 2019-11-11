<?php

namespace Phalcon\Mvc\Router;

use Phalcon\Mvc\Router\RouteInterface;

/**
 * Phalcon\Mvc\Router\GroupInterface
 *
 * <code>
 * $router = new \Phalcon\Mvc\Router();
 *
 * // Create a group with a common module and controller
 * $blog = new Group(
 *     [
 *         "module"     => "blog",
 *         "controller" => "index",
 *     ]
 * );
 *
 * // All the routes start with /blog
 * $blog->setPrefix("/blog");
 *
 * // Add a route to the group
 * $blog->add(
 *     "/save",
 *     [
 *         "action" => "save",
 *     ]
 * );
 *
 * // Add another route to the group
 * $blog->add(
 *     "/edit/{id}",
 *     [
 *         "action" => "edit",
 *     ]
 * );
 *
 * // This route maps to a controller different than the default
 * $blog->add(
 *     "/blog",
 *     [
 *         "controller" => "about",
 *         "action"     => "index",
 *     ]
 * );
 *
 * // Add the group to the router
 * $router->mount($blog);
 * </code>
 */
interface GroupInterface
{

    /**
     * Set a hostname restriction for all the routes in the group
     *
     * @param string $hostname
     * @return GroupInterface
     */
    public function setHostname(string $hostname): GroupInterface;

    /**
     * Returns the hostname restriction
     *
     * @return string
     */
    public function getHostname(): string;

    /**
     * Set a common uri prefix for all the routes in this group
     *
     * @param string $prefix
     * @return GroupInterface
     */
    public function setPrefix(string $prefix): GroupInterface;

    /**
     * Returns the common prefix for all the routes
     *
     * @return string
     */
    public function getPrefix(): string;

    /**
     * Sets a callback that is called if the route is matched.
     * The developer can implement any arbitrary conditions here
     * If the callback returns false the route is treated as not matched
     *
     * @param callable $beforeMatch
     * @return GroupInterface
     */
    public function beforeMatch($beforeMatch): GroupInterface;

    /**
     * Returns the 'before match' callback if any
     *
     * @return callable
     */
    public function getBeforeMatch();

    /**
     * Set common paths for all the routes in the group
     *
     * @param array $paths
     * @return \Phalcon\Mvc\Router\Group
     */
    public function setPaths($paths): GroupInterface;

    /**
     * Returns the common paths defined for this group
     *
     * @return array|string
     */
    public function getPaths();

    /**
     * Returns the routes added to the group
     *
     * @return array|\Phalcon\Mvc\Router\RouteInterface[]
     */
    public function getRoutes(): array;

    /**
     * Adds a route to the router on any HTTP method
     *
     * <code>
     * router->add("/about", "About::index");
     * </code>
     *
     * @param string $pattern
     * @param mixed $paths
     * @param mixed $httpMethods
     * @return RouteInterface
     */
    public function add(string $pattern, $paths = null, $httpMethods = null): RouteInterface;

    /**
     * Adds a route to the router that only match if the HTTP method is GET
     *
     * @param string $pattern
     * @param mixed $paths
     * @return RouteInterface
     */
    public function addGet(string $pattern, $paths = null): RouteInterface;

    /**
     * Adds a route to the router that only match if the HTTP method is POST
     *
     * @param string $pattern
     * @param mixed $paths
     * @return RouteInterface
     */
    public function addPost(string $pattern, $paths = null): RouteInterface;

    /**
     * Adds a route to the router that only match if the HTTP method is PUT
     *
     * @param string $pattern
     * @param mixed $paths
     * @return RouteInterface
     */
    public function addPut(string $pattern, $paths = null): RouteInterface;

    /**
     * Adds a route to the router that only match if the HTTP method is PATCH
     *
     * @param string $pattern
     * @param mixed $paths
     * @return RouteInterface
     */
    public function addPatch(string $pattern, $paths = null): RouteInterface;

    /**
     * Adds a route to the router that only match if the HTTP method is DELETE
     *
     * @param string $pattern
     * @param mixed $paths
     * @return RouteInterface
     */
    public function addDelete(string $pattern, $paths = null): RouteInterface;

    /**
     * Add a route to the router that only match if the HTTP method is OPTIONS
     *
     * @param string $pattern
     * @param mixed $paths
     * @return RouteInterface
     */
    public function addOptions(string $pattern, $paths = null): RouteInterface;

    /**
     * Adds a route to the router that only match if the HTTP method is HEAD
     *
     * @param string $pattern
     * @param mixed $paths
     * @return RouteInterface
     */
    public function addHead(string $pattern, $paths = null): RouteInterface;

    /**
     * Removes all the pre-defined routes
     */
    public function clear();

}
