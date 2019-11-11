<?php

namespace Phalcon\Mvc;

use Phalcon\DiInterface;
use Phalcon\Di\Injectable;
use Phalcon\Mvc\Controller;
use Phalcon\Di\FactoryDefault;
use Phalcon\Mvc\Micro\Exception;
use Phalcon\Di\ServiceInterface;
use Phalcon\Mvc\Micro\Collection;
use Phalcon\Mvc\Micro\LazyLoader;
use Phalcon\Http\ResponseInterface;
use Phalcon\Mvc\Model\BinderInterface;
use Phalcon\Mvc\Router\RouteInterface;
use Phalcon\Mvc\Micro\MiddlewareInterface;
use Phalcon\Mvc\Micro\CollectionInterface;

/**
 * Phalcon\Mvc\Micro
 *
 * With Phalcon you can create "Micro-Framework like" applications. By doing this, you only need to
 * write a minimal amount of code to create a PHP application. Micro applications are suitable
 * to small applications, APIs and prototypes in a practical way.
 *
 * <code>
 * $app = new \Phalcon\Mvc\Micro();
 *
 * $app->get(
 *     "/say/welcome/{name}",
 *     function ($name) {
 *         echo "<h1>Welcome $name!</h1>";
 *     }
 * );
 *
 * $app->handle();
 * </code>
 */
class Micro extends Injectable implements ArrayAccess
{

    protected $_dependencyInjector;


    protected $_handlers = array();


    protected $_router;


    protected $_stopped;


    protected $_notFoundHandler;


    protected $_errorHandler;


    protected $_activeHandler;


    protected $_beforeHandlers;


    protected $_afterHandlers;


    protected $_finishHandlers;


    protected $_returnedValue;


    protected $_modelBinder;


    protected $_afterBindingHandlers;


    /**
     * Phalcon\Mvc\Micro constructor
     *
     * @param \Phalcon\DiInterface $dependencyInjector
     */
    public function __construct(\Phalcon\DiInterface $dependencyInjector = null)
    {
    }

    /**
     * Sets the DependencyInjector container
     *
     * @param \Phalcon\DiInterface $dependencyInjector
     */
    public function setDI(\Phalcon\DiInterface $dependencyInjector)
    {
    }

    /**
     * Maps a route to a handler without any HTTP method constraint
     *
     * @param string $routePattern
     * @param callable $handler
     * @return \Phalcon\Mvc\Router\RouteInterface
     */
    public function map(string $routePattern, $handler): RouteInterface
    {
    }

    /**
     * Maps a route to a handler that only matches if the HTTP method is GET
     *
     * @param string $routePattern
     * @param callable $handler
     * @return \Phalcon\Mvc\Router\RouteInterface
     */
    public function get(string $routePattern, $handler): RouteInterface
    {
    }

    /**
     * Maps a route to a handler that only matches if the HTTP method is POST
     *
     * @param string $routePattern
     * @param callable $handler
     * @return \Phalcon\Mvc\Router\RouteInterface
     */
    public function post(string $routePattern, $handler): RouteInterface
    {
    }

    /**
     * Maps a route to a handler that only matches if the HTTP method is PUT
     *
     * @param string $routePattern
     * @param callable $handler
     * @return \Phalcon\Mvc\Router\RouteInterface
     */
    public function put(string $routePattern, $handler): RouteInterface
    {
    }

    /**
     * Maps a route to a handler that only matches if the HTTP method is PATCH
     *
     * @param string $routePattern
     * @param callable $handler
     * @return \Phalcon\Mvc\Router\RouteInterface
     */
    public function patch(string $routePattern, $handler): RouteInterface
    {
    }

    /**
     * Maps a route to a handler that only matches if the HTTP method is HEAD
     *
     * @param string $routePattern
     * @param callable $handler
     * @return \Phalcon\Mvc\Router\RouteInterface
     */
    public function head(string $routePattern, $handler): RouteInterface
    {
    }

    /**
     * Maps a route to a handler that only matches if the HTTP method is DELETE
     *
     * @param string $routePattern
     * @param callable $handler
     * @return \Phalcon\Mvc\Router\RouteInterface
     */
    public function delete(string $routePattern, $handler): RouteInterface
    {
    }

    /**
     * Maps a route to a handler that only matches if the HTTP method is OPTIONS
     *
     * @param string $routePattern
     * @param callable $handler
     * @return \Phalcon\Mvc\Router\RouteInterface
     */
    public function options(string $routePattern, $handler): RouteInterface
    {
    }

    /**
     * Mounts a collection of handlers
     *
     * @param \Phalcon\Mvc\Micro\CollectionInterface $collection
     * @return Micro
     */
    public function mount(\Phalcon\Mvc\Micro\CollectionInterface $collection): Micro
    {
    }

    /**
     * Sets a handler that will be called when the router doesn't match any of the defined routes
     *
     * @param callable $handler
     * @return \Phalcon\Mvc\Micro
     */
    public function notFound($handler): Micro
    {
    }

    /**
     * Sets a handler that will be called when an exception is thrown handling the route
     *
     * @param callable $handler
     * @return \Phalcon\Mvc\Micro
     */
    public function error($handler): Micro
    {
    }

    /**
     * Returns the internal router used by the application
     *
     * @return RouterInterface
     */
    public function getRouter(): RouterInterface
    {
    }

    /**
     * Sets a service from the DI
     *
     * @param string $serviceName
     * @param mixed $definition
     * @param boolean $shared
     * @return \Phalcon\Di\ServiceInterface
     */
    public function setService(string $serviceName, $definition, bool $shared = false): ServiceInterface
    {
    }

    /**
     * Checks if a service is registered in the DI
     *
     * @param string $serviceName
     * @return bool
     */
    public function hasService(string $serviceName): bool
    {
    }

    /**
     * Obtains a service from the DI
     *
     * @param string $serviceName
     * @return object
     */
    public function getService(string $serviceName)
    {
    }

    /**
     * Obtains a shared service from the DI
     *
     * @param string $serviceName
     * @return mixed
     */
    public function getSharedService($serviceName)
    {
    }

    /**
     * Handle the whole request
     *
     * @param string $uri
     * @return mixed
     */
    public function handle($uri = null)
    {
    }

    /**
     * Stops the middleware execution avoiding than other middlewares be executed
     */
    public function stop()
    {
    }

    /**
     * Sets externally the handler that must be called by the matched route
     *
     * @param callable $activeHandler
     */
    public function setActiveHandler($activeHandler)
    {
    }

    /**
     * Return the handler that will be called for the matched route
     *
     * @return callable
     */
    public function getActiveHandler()
    {
    }

    /**
     * Returns the value returned by the executed handler
     *
     * @return mixed
     */
    public function getReturnedValue()
    {
    }

    /**
     * Check if a service is registered in the internal services container using the array syntax
     *
     * @param string $alias
     * @return boolean
     */
    public function offsetExists($alias): bool
    {
    }

    /**
     * Allows to register a shared service in the internal services container using the array syntax
     *
     * <code>
     * $app["request"] = new \Phalcon\Http\Request();
     * </code>
     *
     * @param string $alias
     * @param mixed $definition
     */
    public function offsetSet($alias, $definition)
    {
    }

    /**
     * Allows to obtain a shared service in the internal services container using the array syntax
     *
     * <code>
     * var_dump(
     *     $app["request"]
     * );
     * </code>
     *
     * @param string $alias
     * @return mixed
     */
    public function offsetGet($alias)
    {
    }

    /**
     * Removes a service from the internal services container using the array syntax
     *
     * @param string $alias
     */
    public function offsetUnset($alias)
    {
    }

    /**
     * Appends a before middleware to be called before execute the route
     *
     * @param callable $handler
     * @return \Phalcon\Mvc\Micro
     */
    public function before($handler): Micro
    {
    }

    /**
     * Appends a afterBinding middleware to be called after model binding
     *
     * @param callable $handler
     * @return \Phalcon\Mvc\Micro
     */
    public function afterBinding($handler): Micro
    {
    }

    /**
     * Appends an 'after' middleware to be called after execute the route
     *
     * @param callable $handler
     * @return \Phalcon\Mvc\Micro
     */
    public function after($handler): Micro
    {
    }

    /**
     * Appends a 'finish' middleware to be called when the request is finished
     *
     * @param callable $handler
     * @return \Phalcon\Mvc\Micro
     */
    public function finish($handler): Micro
    {
    }

    /**
     * Returns the internal handlers attached to the application
     *
     * @return array
     */
    public function getHandlers(): array
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
     * Sets model binder
     *
     * <code>
     * $micro = new Micro($di);
     * $micro->setModelBinder(new Binder(), 'cache');
     * </code>
     *
     * @param \Phalcon\Mvc\Model\BinderInterface $modelBinder
     * @param mixed $cache
     * @return Micro
     */
    public function setModelBinder(\Phalcon\Mvc\Model\BinderInterface $modelBinder, $cache = null): Micro
    {
    }

    /**
     * Returns bound models from binder instance
     *
     * @return array
     */
    public function getBoundModels(): array
    {
    }

}
