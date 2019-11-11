<?php

namespace Phalcon\Annotations;

use Phalcon\Annotations\AdapterInterface;
use Phalcon\Annotations\Reader;
use Phalcon\Annotations\Exception;
use Phalcon\Annotations\Collection;
use Phalcon\Annotations\Reflection;
use Phalcon\Annotations\ReaderInterface;

/**
 * Phalcon\Annotations\Adapter
 *
 * This is the base class for Phalcon\Annotations adapters
 */
abstract class Adapter implements \Phalcon\Annotations\AdapterInterface
{

    protected $_reader;


    protected $_annotations;


    /**
     * Sets the annotations parser
     *
     * @param \Phalcon\Annotations\ReaderInterface $reader
     */
    public function setReader(\Phalcon\Annotations\ReaderInterface $reader)
    {
    }

    /**
     * Returns the annotation reader
     *
     * @return ReaderInterface
     */
    public function getReader(): ReaderInterface
    {
    }

    /**
     * Parses or retrieves all the annotations found in a class
     *
     * @param string|object $className
     * @return Reflection
     */
    public function get($className): Reflection
    {
    }

    /**
     * Returns the annotations found in all the class' methods
     *
     * @param string $className
     * @return array
     */
    public function getMethods(string $className): array
    {
    }

    /**
     * Returns the annotations found in a specific method
     *
     * @param string $className
     * @param string $methodName
     * @return Collection
     */
    public function getMethod(string $className, string $methodName): Collection
    {
    }

    /**
     * Returns the annotations found in all the class' methods
     *
     * @param string $className
     * @return array
     */
    public function getProperties(string $className): array
    {
    }

    /**
     * Returns the annotations found in a specific property
     *
     * @param string $className
     * @param string $propertyName
     * @return Collection
     */
    public function getProperty(string $className, string $propertyName): Collection
    {
    }

}
