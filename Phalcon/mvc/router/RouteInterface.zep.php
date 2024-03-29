<?php

namespace Phalcon\Mvc\Router;

/**
 * Phalcon\Mvc\Router\RouteInterface
 *
 * Interface for Phalcon\Mvc\Router\Route
 */
interface RouteInterface
{

    /**
     * Sets a hostname restriction to the route
     *
     * @param string $hostname
     * @return RouteInterface
     */
    public function setHostname(string $hostname): RouteInterface;

    /**
     * Returns the hostname restriction if any
     *
     * @return string
     */
    public function getHostname(): string;

    /**
     * Replaces placeholders from pattern returning a valid PCRE regular expression
     *
     * @param string $pattern
     * @return string
     */
    public function compilePattern(string $pattern): string;

    /**
     * Set one or more HTTP methods that constraint the matching of the route
     *
     * @param mixed $httpMethods
     * @return Route
     */
    public function via($httpMethods): Route;

    /**
     * Reconfigure the route adding a new pattern and a set of paths
     *
     * @param string $pattern
     * @param mixed $paths
     */
    public function reConfigure(string $pattern, $paths = null);

    /**
     * Returns the route's name
     *
     * @return string
     */
    public function getName(): string;

    /**
     * Sets the route's name
     *
     * @param string $name
     * @return Route
     */
    public function setName(string $name): Route;

    /**
     * Sets a set of HTTP methods that constraint the matching of the route
     *
     * @param mixed $httpMethods
     * @return RouteInterface
     */
    public function setHttpMethods($httpMethods): RouteInterface;

    /**
     * Returns the route's id
     *
     * @return string
     */
    public function getRouteId(): string;

    /**
     * Returns the route's pattern
     *
     * @return string
     */
    public function getPattern(): string;

    /**
     * Returns the route's pattern
     *
     * @return string
     */
    public function getCompiledPattern(): string;

    /**
     * Returns the paths
     *
     * @return array
     */
    public function getPaths(): array;

    /**
     * Returns the paths using positions as keys and names as values
     *
     * @return array
     */
    public function getReversedPaths(): array;

    /**
     * Returns the HTTP methods that constraint matching the route
     *
     * @return string|array
     */
    public function getHttpMethods();

    /**
     * Resets the internal route id generator
     */
    public static function reset();

}
