<?php

namespace Phalcon\Cli;

use Phalcon\Application as BaseApplication;
use Phalcon\DiInterface;
use Phalcon\Cli\Router\Route;
use Phalcon\Events\ManagerInterface;
use Phalcon\Cli\Console\Exception;

/**
 * Phalcon\Cli\Console
 *
 * This component allows to create CLI applications using Phalcon
 */
class Console extends \Phalcon\Application
{

    protected $_arguments = array();


    protected $_options = array();


    /**
     * Merge modules with the existing ones
     *
     * <code>
     * $application->addModules(
     *     [
     *         "admin" => [
     *             "className" => "Multiple\\Admin\\Module",
     *             "path"      => "../apps/admin/Module.php",
     *         ],
     *     ]
     * );
     * </code>
     *
     * @param array $modules
     * @deprecated
     */
    public function addModules(array $modules)
    {
    }

    /**
     * Handle the whole command-line tasks
     *
     * @param array $arguments
     */
    public function handle(array $arguments = null)
    {
    }

    /**
     * Set an specific argument
     *
     * @param array $arguments
     * @param bool $str
     * @param bool $shift
     * @return Console
     */
    public function setArgument(array $arguments = null, bool $str = true, bool $shift = true): Console
    {
    }

}
