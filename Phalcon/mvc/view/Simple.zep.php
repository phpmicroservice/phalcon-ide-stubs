<?php

namespace Phalcon\Mvc\View;

use Phalcon\Di\Injectable;
use Phalcon\Mvc\View\Exception;
use Phalcon\Mvc\ViewBaseInterface;
use Phalcon\Cache\BackendInterface;
use Phalcon\Mvc\View\EngineInterface;
use Phalcon\Mvc\View\Engine\Php as PhpEngine;

/**
 * Phalcon\Mvc\View\Simple
 *
 * This component allows to render views without hierarchical levels
 *
 * <code>
 * use Phalcon\Mvc\View\Simple as View;
 *
 * $view = new View();
 *
 * // Render a view
 * echo $view->render(
 *     "templates/my-view",
 *     [
 *         "some" => $param,
 *     ]
 * );
 *
 * // Or with filename with extension
 * echo $view->render(
 *     "templates/my-view.volt",
 *     [
 *         "parameter" => $here,
 *     ]
 * );
 * </code>
 */
class Simple extends Injectable implements \Phalcon\Mvc\ViewBaseInterface
{

    protected $_options;


    protected $_viewsDir;


    protected $_partialsDir;


    protected $_viewParams;

    /**
     * @var \Phalcon\Mvc\View\EngineInterface[]|false
     */
    protected $_engines = false;

    /**
     * @var array|null
     */
    protected $_registeredEngines;


    protected $_activeRenderPath;


    protected $_content;


    protected $_cache = false;


    protected $_cacheOptions;


    /**
     * @return array|null
     */
    public function getRegisteredEngines(): ?array
    {
    }

    /**
     * Phalcon\Mvc\View\Simple constructor
     *
     * @param array $options
     */
    public function __construct(array $options = array())
    {
    }

    /**
     * Sets views directory. Depending of your platform, always add a trailing slash or backslash
     *
     * @param string $viewsDir
     */
    public function setViewsDir(string $viewsDir)
    {
    }

    /**
     * Gets views directory
     *
     * @return string
     */
    public function getViewsDir(): string
    {
    }

    /**
     * Register templating engines
     *
     * <code>
     * $this->view->registerEngines(
     *     [
     *         ".phtml" => "Phalcon\\Mvc\\View\\Engine\\Php",
     *         ".volt"  => "Phalcon\\Mvc\\View\\Engine\\Volt",
     *         ".mhtml" => "MyCustomEngine",
     *     ]
     * );
     * </code>
     *
     * @param array $engines
     */
    public function registerEngines(array $engines)
    {
    }

    /**
     * Loads registered template engines, if none is registered it will use Phalcon\Mvc\View\Engine\Php
     *
     * @return array
     */
    protected function _loadTemplateEngines()
    {
    }

    /**
     * Tries to render the view with every engine registered in the component
     *
     * @param string $path
     * @param array $params
     */
    protected final function _internalRender(string $path, $params)
    {
    }

    /**
     * Renders a view
     *
     * @param string $path
     * @param array $params
     * @return string
     */
    public function render(string $path, $params = null): string
    {
    }

    /**
     * Renders a partial view
     *
     * <code>
     * // Show a partial inside another view
     * $this->partial("shared/footer");
     * </code>
     *
     * <code>
     * // Show a partial inside another view with parameters
     * $this->partial(
     *     "shared/footer",
     *     [
     *         "content" => $html,
     *     ]
     * );
     * </code>
     *
     * @param string $partialPath
     * @param mixed $params
     */
    public function partial(string $partialPath, $params = null)
    {
    }

    /**
     * Sets the cache options
     *
     * @param array $options
     * @return Simple
     */
    public function setCacheOptions(array $options): Simple
    {
    }

    /**
     * Returns the cache options
     *
     * @return array
     */
    public function getCacheOptions()
    {
    }

    /**
     * Create a Phalcon\Cache based on the internal cache options
     *
     * @return BackendInterface
     */
    protected function _createCache(): BackendInterface
    {
    }

    /**
     * Returns the cache instance used to cache
     *
     * @return BackendInterface
     */
    public function getCache(): BackendInterface
    {
    }

    /**
     * Cache the actual view render to certain level
     *
     * <code>
     * $this->view->cache(
     *     [
     *         "key"      => "my-key",
     *         "lifetime" => 86400,
     *     ]
     * );
     * </code>
     *
     * @param mixed $options
     * @return Simple
     */
    public function cache($options = true): Simple
    {
    }

    /**
     * Adds parameters to views (alias of setVar)
     *
     * <code>
     * $this->view->setParamToView("products", $products);
     * </code>
     *
     * @param string $key
     * @param mixed $value
     * @return Simple
     */
    public function setParamToView(string $key, $value): Simple
    {
    }

    /**
     * Set all the render params
     *
     * <code>
     * $this->view->setVars(
     *     [
     *         "products" => $products,
     *     ]
     * );
     * </code>
     *
     * @param array $params
     * @param bool $merge
     * @return Simple
     */
    public function setVars(array $params, bool $merge = true): Simple
    {
    }

    /**
     * Set a single view parameter
     *
     * <code>
     * $this->view->setVar("products", $products);
     * </code>
     *
     * @param string $key
     * @param mixed $value
     * @return Simple
     */
    public function setVar(string $key, $value): Simple
    {
    }

    /**
     * Returns a parameter previously set in the view
     *
     * @param string $key
     * @return mixed|null
     */
    public function getVar(string $key)
    {
    }

    /**
     * Returns parameters to views
     *
     * @return array
     */
    public function getParamsToView(): array
    {
    }

    /**
     * Externally sets the view content
     *
     * <code>
     * $this->view->setContent("<h1>hello</h1>");
     * </code>
     *
     * @param string $content
     * @return Simple
     */
    public function setContent(string $content): Simple
    {
    }

    /**
     * Returns cached output from another view stage
     *
     * @return string
     */
    public function getContent(): string
    {
    }

    /**
     * Returns the path of the view that is currently rendered
     *
     * @return string
     */
    public function getActiveRenderPath()
    {
    }

    /**
     * Magic method to pass variables to the views
     *
     * <code>
     * $this->view->products = $products;
     * </code>
     *
     * @param string $key
     * @param mixed $value
     */
    public function __set(string $key, $value)
    {
    }

    /**
     * Magic method to retrieve a variable passed to the view
     *
     * <code>
     * echo $this->view->products;
     * </code>
     *
     * @param string $key
     * @return mixed|null
     */
    public function __get(string $key)
    {
    }

}
