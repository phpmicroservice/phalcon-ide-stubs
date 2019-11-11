<?php

namespace Phalcon\Mvc\Micro;

use Phalcon\Mvc\Model\BinderInterface;

/**
 * Phalcon\Mvc\Micro\LazyLoader
 *
 * Lazy-Load of handlers for Mvc\Micro using auto-loading
 */
class LazyLoader
{

    protected $_handler;


    protected $_modelBinder;


    protected $_definition;



    public function getDefinition()
    {
    }

    /**
     * Phalcon\Mvc\Micro\LazyLoader constructor
     *
     * @param string $definition
     */
    public function __construct(string $definition)
    {
    }

    /**
     * Initializes the internal handler, calling functions on it
     *
     * @param string $method
     * @param array $arguments
     * @return mixed
     */
    public function __call(string $method, $arguments)
    {
    }

    /**
     * Calling __call method
     *
     * @param string $method
     * @param array $arguments
     * @return mixed
     * @param \Phalcon\Mvc\Model\BinderInterface $modelBinder
     */
    public function callMethod(string $method, $arguments, \Phalcon\Mvc\Model\BinderInterface $modelBinder = null)
    {
    }

}
