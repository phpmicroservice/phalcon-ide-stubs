<?php

namespace Phalcon;

use Phalcon\Application\Exception;
use Phalcon\DiInterface;
use Phalcon\Di\Injectable;
use Phalcon\Events\EventsAwareInterface;
use Phalcon\Events\ManagerInterface;

/**
 * Phalcon\Application
 *
 * Base class for Phalcon\Cli\Console and Phalcon\Mvc\Application.
 */
abstract class Application extends Injectable implements \Phalcon\Events\EventsAwareInterface
{

    protected $_eventsManager;


    protected $_dependencyInjector;

    /**
     * @var string
     */
    protected $_defaultModule;

    /**
     * @var array
     */
    protected $_modules = array();


    /**
     * Phalcon\Application
     *
     * @param \Phalcon\DiInterface $dependencyInjector
     */
    public function __construct(\Phalcon\DiInterface $dependencyInjector = null)
    {
    }

    /**
     * Sets the events manager
     *
     * @param \Phalcon\Events\ManagerInterface $eventsManager
     * @return Application
     */
    public function setEventsManager(\Phalcon\Events\ManagerInterface $eventsManager): Application
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
     * Register an array of modules present in the application
     *
     * <code>
     * $this->registerModules(
     *     [
     *         "frontend" => [
     *             "className" => "Multiple\\Frontend\\Module",
     *             "path"      => "../apps/frontend/Module.php",
     *         ],
     *         "backend" => [
     *             "className" => "Multiple\\Backend\\Module",
     *             "path"      => "../apps/backend/Module.php",
     *         ],
     *     ]
     * );
     * </code>
     *
     * @param array $modules
     * @param bool $merge
     * @return Application
     */
    public function registerModules(array $modules, bool $merge = false): Application
    {
    }

    /**
     * Return the modules registered in the application
     *
     * @return array
     */
    public function getModules(): array
    {
    }

    /**
     * Gets the module definition registered in the application via module name
     *
     * @param string $name
     * @return array|object
     */
    public function getModule(string $name): array
    {
    }

    /**
     * Sets the module name to be used if the router doesn't return a valid module
     *
     * @param string $defaultModule
     * @return Application
     */
    public function setDefaultModule(string $defaultModule): Application
    {
    }

    /**
     * Returns the default module name
     *
     * @return string
     */
    public function getDefaultModule(): string
    {
    }

    /**
     * Handles a request
     */
    abstract public function handle();

}
