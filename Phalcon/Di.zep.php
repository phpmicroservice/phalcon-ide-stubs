<?php

namespace Phalcon;

use Phalcon\Config;
use Phalcon\Di\Service;
use Phalcon\DiInterface;
use Phalcon\Di\Exception;
use Phalcon\Config\Adapter\Php;
use Phalcon\Config\Adapter\Yaml;
use Phalcon\Di\ServiceInterface;
use Phalcon\Events\ManagerInterface;
use Phalcon\Di\InjectionAwareInterface;
use Phalcon\Di\ServiceProviderInterface;

/**
 * Phalcon\Di
 *
 * Phalcon\Di is a component that implements Dependency Injection/Service Location
 * of services and it's itself a container for them.
 *
 * Since Phalcon is highly decoupled, Phalcon\Di is essential to integrate the different
 * components of the framework. The developer can also use this component to inject dependencies
 * and manage global instances of the different classes used in the application.
 *
 * Basically, this component implements the `Inversion of Control` pattern. Applying this,
 * the objects do not receive their dependencies using setters or constructors, but requesting
 * a service dependency injector. This reduces the overall complexity, since there is only one
 * way to get the required dependencies within a component.
 *
 * Additionally, this pattern increases testability in the code, thus making it less prone to errors.
 *
 * <code>
 * use Phalcon\Di;
 * use Phalcon\Http\Request;
 *
 * $di = new Di();
 *
 * // Using a string definition
 * $di->set("request", Request::class, true);
 *
 * // Using an anonymous function
 * $di->setShared(
 *     "request",
 *     function () {
 *         return new Request();
 *     }
 * );
 *
 * $request = $di->getRequest();
 * </code>
 */
class Di implements \Phalcon\DiInterface
{
    /**
     * List of registered services
     */
    protected $_services;

    /**
     * List of shared instances
     */
    protected $_sharedInstances;

    /**
     * To know if the latest resolved instance was shared or not
     */
    protected $_freshInstance = false;

    /**
     * Events Manager
     *
     * @var \Phalcon\Events\ManagerInterface
     */
    protected $_eventsManager;

    /**
     * Latest DI build
     */
    static protected $_default;


    /**
     * Phalcon\Di constructor
     */
    public function __construct()
    {
    }

    /**
     * Sets the internal event manager
     *
     * @param \Phalcon\Events\ManagerInterface $eventsManager
     */
    public function setInternalEventsManager(\Phalcon\Events\ManagerInterface $eventsManager)
    {
    }

    /**
     * Returns the internal event manager
     *
     * @return ManagerInterface
     */
    public function getInternalEventsManager(): ManagerInterface
    {
    }

    /**
     * Registers a service in the services container
     *
     * @param string $name
     * @param mixed $definition
     * @param bool $shared
     * @return ServiceInterface
     */
    public function set(string $name, $definition, bool $shared = false): ServiceInterface
    {
    }

    /**
     * Registers an "always shared" service in the services container
     *
     * @param string $name
     * @param mixed $definition
     * @return ServiceInterface
     */
    public function setShared(string $name, $definition): ServiceInterface
    {
    }

    /**
     * Removes a service in the services container
     * It also removes any shared instance created for the service
     *
     * @param string $name
     */
    public function remove(string $name)
    {
    }

    /**
     * Attempts to register a service in the services container
     * Only is successful if a service hasn't been registered previously
     * with the same name
     *
     * @param string $name
     * @param mixed $definition
     * @param bool $shared
     * @return bool|\Phalcon\Di\ServiceInterface
     */
    public function attempt(string $name, $definition, bool $shared = false)
    {
    }

    /**
     * Sets a service using a raw Phalcon\Di\Service definition
     *
     * @param string $name
     * @param \Phalcon\Di\ServiceInterface $rawDefinition
     * @return ServiceInterface
     */
    public function setRaw(string $name, \Phalcon\Di\ServiceInterface $rawDefinition): ServiceInterface
    {
    }

    /**
     * Returns a service definition without resolving
     *
     * @param string $name
     * @return mixed
     */
    public function getRaw(string $name)
    {
    }

    /**
     * Returns a Phalcon\Di\Service instance
     *
     * @param string $name
     * @return ServiceInterface
     */
    public function getService(string $name): ServiceInterface
    {
    }

    /**
     * Resolves the service based on its configuration
     *
     * @param string $name
     * @param mixed $parameters
     * @return mixed
     */
    public function get(string $name, $parameters = null)
    {
    }

    /**
     * Resolves a service, the resolved service is stored in the DI, subsequent
     * requests for this service will return the same instance
     *
     * @param string $name
     * @param array $parameters
     * @return mixed
     */
    public function getShared(string $name, $parameters = null)
    {
    }

    /**
     * Check whether the DI contains a service by a name
     *
     * @param string $name
     * @return bool
     */
    public function has(string $name): bool
    {
    }

    /**
     * Check whether the last service obtained via getShared produced a fresh instance or an existing one
     *
     * @return bool
     */
    public function wasFreshInstance(): bool
    {
    }

    /**
     * Return the services registered in the DI
     *
     * @return array|\Phalcon\Di\Service[]
     */
    public function getServices(): array
    {
    }

    /**
     * Check if a service is registered using the array syntax
     *
     * @param mixed $name
     * @return bool
     */
    public function offsetExists($name): bool
    {
    }

    /**
     * Allows to register a shared service using the array syntax
     *
     * <code>
     * $di["request"] = new \Phalcon\Http\Request();
     * </code>
     *
     * @param mixed $name
     * @param mixed $definition
     * @return bool
     */
    public function offsetSet($name, $definition): bool
    {
    }

    /**
     * Allows to obtain a shared service using the array syntax
     *
     * <code>
     * var_dump($di["request"]);
     * </code>
     *
     * @param mixed $name
     * @return mixed
     */
    public function offsetGet($name)
    {
    }

    /**
     * Removes a service from the services container using the array syntax
     *
     * @param mixed $name
     * @return bool
     */
    public function offsetUnset($name): bool
    {
    }

    /**
     * Magic method to get or set services using setters/getters
     *
     * @param string $method
     * @param mixed $arguments
     * @return mixed|null
     */
    public function __call(string $method, $arguments = null)
    {
    }

    /**
     * Registers a service provider.
     *
     * <code>
     * use Phalcon\DiInterface;
     * use Phalcon\Di\ServiceProviderInterface;
     *
     * class SomeServiceProvider implements ServiceProviderInterface
     * {
     *     public function register(DiInterface $di)
     *     {
     *         $di->setShared('service', function () {
     *             // ...
     *         });
     *     }
     * }
     * </code>
     *
     * @param \Phalcon\Di\ServiceProviderInterface $provider
     */
    public function register(\Phalcon\Di\ServiceProviderInterface $provider)
    {
    }

    /**
     * Set a default dependency injection container to be obtained into static methods
     *
     * @param \Phalcon\DiInterface $dependencyInjector
     */
    public static function setDefault(\Phalcon\DiInterface $dependencyInjector)
    {
    }

    /**
     * Return the latest DI created
     *
     * @return DiInterface
     */
    public static function getDefault(): DiInterface
    {
    }

    /**
     * Resets the internal default DI
     */
    public static function reset()
    {
    }

    /**
     * Loads services from a yaml file.
     *
     * <code>
     * $di->loadFromYaml(
     *     "path/services.yaml",
     *     [
     *         "!approot" => function ($value) {
     *             return dirname(__DIR__) . $value;
     *         }
     *     ]
     * );
     * </code>
     *
     * And the services can be specified in the file as:
     *
     * <code>
     * myComponent:
     *     className: \Acme\Components\MyComponent
     *     shared: true
     *
     * group:
     *     className: \Acme\Group
     *     arguments:
     *         - type: service
     *           name: myComponent
     *
     * user:
     *    className: \Acme\User
     * </code>
     *
     * @link https://docs.phalconphp.com/en/latest/reference/di.html
     * @param string $filePath
     * @param array $callbacks
     */
    public function loadFromYaml(string $filePath, array $callbacks = null)
    {
    }

    /**
     * Loads services from a php config file.
     *
     * <code>
     * $di->loadFromPhp("path/services.php");
     * </code>
     *
     * And the services can be specified in the file as:
     *
     * <code>
     * return [
     *      'myComponent' => [
     *          'className' => '\Acme\Components\MyComponent',
     *          'shared' => true,
     *      ],
     *      'group' => [
     *          'className' => '\Acme\Group',
     *          'arguments' => [
     *              [
     *                  'type' => 'service',
     *                  'service' => 'myComponent',
     *              ],
     *          ],
     *      ],
     *      'user' => [
     *          'className' => '\Acme\User',
     *      ],
     * ];
     * </code>
     *
     * @link https://docs.phalconphp.com/en/latest/reference/di.html
     * @param string $filePath
     */
    public function loadFromPhp(string $filePath)
    {
    }

    /**
     * Loads services from a Config object.
     *
     * @param \Phalcon\Config $config
     */
    protected function loadFromConfig(\Phalcon\Config $config)
    {
    }

}
