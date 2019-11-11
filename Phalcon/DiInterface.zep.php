<?php

namespace Phalcon;

use Phalcon\DiInterface;
use Phalcon\Di\ServiceInterface;

/**
 * Phalcon\DiInterface
 *
 * Interface for Phalcon\Di
 */
interface DiInterface extends ArrayAccess
{

    /**
     * Registers a service in the services container
     *
     * @param string $name
     * @param mixed $definition
     * @param boolean $shared
     * @return \Phalcon\Di\ServiceInterface
     */
    public function set(string $name, $definition, bool $shared = false): ServiceInterface;

    /**
     * Registers an "always shared" service in the services container
     *
     * @param string $name
     * @param mixed $definition
     * @return \Phalcon\Di\ServiceInterface
     */
    public function setShared(string $name, $definition): ServiceInterface;

    /**
     * Removes a service in the services container
     *
     * @param string $name
     */
    public function remove(string $name);

    /**
     * Attempts to register a service in the services container
     * Only is successful if a service hasn't been registered previously
     * with the same name
     *
     * @param string $name
     * @param mixed $definition
     * @param boolean $shared
     * @return \Phalcon\Di\ServiceInterface
     */
    public function attempt(string $name, $definition, bool $shared = false);

    /**
     * Resolves the service based on its configuration
     *
     * @param string $name
     * @param array $parameters
     * @return mixed
     */
    public function get(string $name, $parameters = null);

    /**
     * Returns a shared service based on their configuration
     *
     * @param string $name
     * @param array $parameters
     * @return mixed
     */
    public function getShared(string $name, $parameters = null);

    /**
     * Sets a service using a raw Phalcon\Di\Service definition
     *
     * @param string $name
     * @param \Phalcon\Di\ServiceInterface $rawDefinition
     * @return ServiceInterface
     */
    public function setRaw(string $name, \Phalcon\Di\ServiceInterface $rawDefinition): ServiceInterface;

    /**
     * Returns a service definition without resolving
     *
     * @param string $name
     * @return mixed
     */
    public function getRaw(string $name);

    /**
     * Returns the corresponding Phalcon\Di\Service instance for a service
     *
     * @param string $name
     * @return ServiceInterface
     */
    public function getService(string $name): ServiceInterface;

    /**
     * Check whether the DI contains a service by a name
     *
     * @param string $name
     * @return bool
     */
    public function has(string $name): bool;

    /**
     * Check whether the last service obtained via getShared produced a fresh instance or an existing one
     *
     * @return bool
     */
    public function wasFreshInstance(): bool;

    /**
     * Return the services registered in the DI
     *
     * @return \Phalcon\Di\ServiceInterface[]
     */
    public function getServices();

    /**
     * Set a default dependency injection container to be obtained into static methods
     *
     * @param \Phalcon\DiInterface $dependencyInjector
     */
    public static function setDefault(\Phalcon\DiInterface $dependencyInjector);

    /**
     * Return the last DI created
     *
     * @return DiInterface
     */
    public static function getDefault(): DiInterface;

    /**
     * Resets the internal default DI
     */
    public static function reset();

}
