<?php

namespace Phalcon\Mvc\Model;

use Phalcon\Cache\BackendInterface;

/**
 * Phalcon\Mvc\Model\BinderInterface
 *
 * Interface for Phalcon\Mvc\Model\Binder
 */
interface BinderInterface
{

    /**
     * Gets active bound models
     *
     * @return array
     */
    public function getBoundModels(): array;

    /**
     * Gets cache instance
     *
     * @return BackendInterface
     */
    public function getCache(): BackendInterface;

    /**
     * Sets cache instance
     *
     * @param \Phalcon\Cache\BackendInterface $cache
     * @return BinderInterface
     */
    public function setCache(\Phalcon\Cache\BackendInterface $cache): BinderInterface;

    /**
     * Bind models into params in proper handler
     *
     * @param object $handler
     * @param array $params
     * @param string $cacheKey
     * @param mixed $methodName
     * @return array
     */
    public function bindToHandler($handler, array $params, string $cacheKey, $methodName = null): array;

}
