<?php

namespace Phalcon\Translate\Adapter;

use Phalcon\Translate\Exception;
use Phalcon\Translate\Adapter;

/**
 * Phalcon\Translate\Adapter\NativeArray
 *
 * Allows to define translation lists using PHP arrays
 */
class NativeArray extends Adapter implements ArrayAccess
{

    protected $_translate;


    /**
     * Phalcon\Translate\Adapter\NativeArray constructor
     *
     * @param array $options
     */
    public function __construct(array $options)
    {
    }

    /**
     * Returns the translation related to the given key
     *
     * @param string $index
     * @param mixed $placeholders
     * @return string
     */
    public function query(string $index, $placeholders = null): string
    {
    }

    /**
     * Check whether is defined a translation key in the internal array
     *
     * @param string $index
     * @return bool
     */
    public function exists(string $index): bool
    {
    }

}
