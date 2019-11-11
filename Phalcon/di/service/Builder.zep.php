<?php

namespace Phalcon\Di\Service;

use Phalcon\DiInterface;
use Phalcon\Di\Exception;

/**
 * Phalcon\Di\Service\Builder
 *
 * This class builds instances based on complex definitions
 */
class Builder
{

    /**
     * Resolves a constructor/call parameter
     *
     * @param \Phalcon\DiInterface $dependencyInjector
     * @param int $position
     * @param array $argument
     * @return mixed
     */
    private function _buildParameter(\Phalcon\DiInterface $dependencyInjector, int $position, array $argument)
    {
    }

    /**
     * Resolves an array of parameters
     *
     * @param \Phalcon\DiInterface $dependencyInjector
     * @param array $arguments
     * @return array
     */
    private function _buildParameters(\Phalcon\DiInterface $dependencyInjector, array $arguments): array
    {
    }

    /**
     * Builds a service using a complex service definition
     *
     * @param \Phalcon\DiInterface $dependencyInjector
     * @param array $definition
     * @param array $parameters
     * @return mixed
     */
    public function build(\Phalcon\DiInterface $dependencyInjector, array $definition, $parameters = null)
    {
    }

}
