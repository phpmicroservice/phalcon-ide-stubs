<?php

namespace Phalcon\Mvc\Router;

use Phalcon\DiInterface;
use Phalcon\Mvc\Router;
use Phalcon\Annotations\Annotation;
use Phalcon\Mvc\Router\Exception;

/**
 * Phalcon\Mvc\Router\Annotations
 *
 * A router that reads routes annotations from classes/resources
 *
 * <code>
 * use Phalcon\Mvc\Router\Annotations;
 *
 * $di->setShared(
 *     "router",
 *     function() {
 *         // Use the annotations router
 *         $router = new Annotations(false);
 *
 *         // This will do the same as above but only if the handled uri starts with /robots
 *         $router->addResource("Robots", "/robots");
 *
 *         return $router;
 *     }
 * );
 * </code>
 */
class Annotations extends Router
{

    protected $_handlers = array();


    protected $_controllerSuffix = 'Controller';


    protected $_actionSuffix = 'Action';


    protected $_routePrefix;


    /**
     * Adds a resource to the annotations handler
     * A resource is a class that contains routing annotations
     *
     * @param string $handler
     * @param string $prefix
     * @return Annotations
     */
    public function addResource(string $handler, string $prefix = null): Annotations
    {
    }

    /**
     * Adds a resource to the annotations handler
     * A resource is a class that contains routing annotations
     * The class is located in a module
     *
     * @param string $module
     * @param string $handler
     * @param string $prefix
     * @return Annotations
     */
    public function addModuleResource(string $module, string $handler, string $prefix = null): Annotations
    {
    }

    /**
     * Produce the routing parameters from the rewrite information
     *
     * @param string $uri
     */
    public function handle(string $uri = null)
    {
    }

    /**
     * Checks for annotations in the controller docblock
     *
     * @param string $handler
     * @param \Phalcon\Annotations\Annotation $annotation
     */
    public function processControllerAnnotation(string $handler, \Phalcon\Annotations\Annotation $annotation)
    {
    }

    /**
     * Checks for annotations in the public methods of the controller
     *
     * @param string $module
     * @param string $namespaceName
     * @param string $controller
     * @param string $action
     * @param \Phalcon\Annotations\Annotation $annotation
     */
    public function processActionAnnotation(string $module, string $namespaceName, string $controller, string $action, \Phalcon\Annotations\Annotation $annotation)
    {
    }

    /**
     * Changes the controller class suffix
     *
     * @param string $controllerSuffix
     */
    public function setControllerSuffix(string $controllerSuffix)
    {
    }

    /**
     * Changes the action method suffix
     *
     * @param string $actionSuffix
     */
    public function setActionSuffix(string $actionSuffix)
    {
    }

    /**
     * Return the registered resources
     *
     * @return array
     */
    public function getResources(): array
    {
    }

}
