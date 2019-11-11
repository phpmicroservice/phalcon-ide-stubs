<?php

namespace Phalcon\Di;

use Phalcon\DiInterface;
use Phalcon\Di\Exception;
use Phalcon\Di\ServiceInterface;
use Phalcon\Di\Service\Builder;

/**
 * Phalcon\Di\Service
 *
 * Represents individually a service in the services container
 *
 * <code>
 * $service = new \Phalcon\Di\Service(
 *     "request",
 *     "Phalcon\\Http\\Request"
 * );
 *
 * $request = service->resolve();
 * </code>
 */
class Service implements \Phalcon\Di\ServiceInterface
{

    protected $_name;


    protected $_definition;


    protected $_shared = false;


    protected $_resolved = false;


    protected $_sharedInstance;


    /**
     * Phalcon\Di\Service
     *
     * @param string $name
     * @param mixed $definition
     * @param boolean $shared
     */
    public final function __construct(string $name, $definition, bool $shared = false)
    {
    }

    /**
     * Returns the service's name
     *
     * @return string
     */
    public function getName(): string
    {
    }

    /**
     * Sets if the service is shared or not
     *
     * @param bool $shared
     */
    public function setShared(bool $shared)
    {
    }

    /**
     * Check whether the service is shared or not
     *
     * @return bool
     */
    public function isShared(): bool
    {
    }

    /**
     * Sets/Resets the shared instance related to the service
     *
     * @param mixed $sharedInstance
     */
    public function setSharedInstance($sharedInstance)
    {
    }

    /**
     * Set the service definition
     *
     * @param mixed $definition
     */
    public function setDefinition($definition)
    {
    }

    /**
     * Returns the service definition
     *
     * @return mixed
     */
    public function getDefinition()
    {
    }

    /**
     * Resolves the service
     *
     * @param array $parameters
     * @param \Phalcon\DiInterface $dependencyInjector
     * @return mixed
     */
    public function resolve($parameters = null, \Phalcon\DiInterface $dependencyInjector = null)
    {
    }

    /**
     * Changes a parameter in the definition without resolve the service
     *
     * @param int $position
     * @param array $parameter
     * @return ServiceInterface
     */
    public function setParameter(int $position, array $parameter): ServiceInterface
    {
    }

    /**
     * Returns a parameter in a specific position
     *
     * @param int $position
     * @return array
     */
    public function getParameter(int $position)
    {
    }

    /**
     * Returns true if the service was resolved
     *
     * @return bool
     */
    public function isResolved(): bool
    {
    }

    /**
     * Restore the internal state of a service
     *
     * @param array $attributes
     * @return ServiceInterface
     */
    public static function __set_state(array $attributes): ServiceInterface
    {
    }

}
