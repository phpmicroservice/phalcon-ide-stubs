<?php

namespace Phalcon\Mvc\Model;

use Phalcon\Mvc\Controller\BindModelInterface;
use Phalcon\Mvc\Model\Binder\BindableInterface;
use Phalcon\Cache\BackendInterface;

/**
 * Phalcon\Mvc\Model\Binding
 *
 * This is an class for binding models into params for handler
 */
class Binder implements Phalcon\Mvc\Model\BinderInterface
{
    /**
     * Array for storing active bound models
     *
     * @var array
     */
    protected $boundModels = array();

    /**
     * Cache object used for caching parameters for model binding
     */
    protected $cache;

    /**
     * Internal cache for caching parameters for model binding during request
     */
    protected $internalCache = array();

    /**
     * Array for original values
     */
    protected $originalValues = array();


    /**
     * Array for storing active bound models
     *
     * @return array
     */
    public function getBoundModels(): array
    {
    }

    /**
     * Array for original values
     */
    public function getOriginalValues()
    {
    }

    /**
     * Phalcon\Mvc\Model\Binder constructor
     *
     * @param \Phalcon\Cache\BackendInterface $cache
     */
    public function __construct(\Phalcon\Cache\BackendInterface $cache = null)
    {
    }

    /**
     * Gets cache instance
     *
     * @param \Phalcon\Cache\BackendInterface $cache
     * @return BinderInterface
     */
    public function setCache(\Phalcon\Cache\BackendInterface $cache): BinderInterface
    {
    }

    /**
     * Sets cache instance
     *
     * @return BackendInterface
     */
    public function getCache(): BackendInterface
    {
    }

    /**
     * Bind models into params in proper handler
     *
     * @param object $handler
     * @param array $params
     * @param string $cacheKey
     * @param mixed $methodName
     * @return array
     */
    public function bindToHandler($handler, array $params, string $cacheKey, $methodName = null): array
    {
    }

    /**
     * Find the model by param value.
     *
     * @param mixed $paramValue
     * @param string $className
     * @return object|bool
     */
    protected function findBoundModel($paramValue, string $className): bool
    {
    }

    /**
     * Get params classes from cache by key
     *
     * @param string $cacheKey
     * @return array|null
     */
    protected function getParamsFromCache(string $cacheKey): ?array
    {
    }

    /**
     * Get modified params for handler using reflection
     *
     * @param object $handler
     * @param array $params
     * @param string $cacheKey
     * @param mixed $methodName
     * @return array
     */
    protected function getParamsFromReflection($handler, array $params, string $cacheKey, $methodName): array
    {
    }

}
