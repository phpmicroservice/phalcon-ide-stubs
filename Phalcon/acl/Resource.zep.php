<?php

namespace Phalcon\Acl;

use Phalcon\Acl\Exception;

/**
 * Phalcon\Acl\Resource
 *
 * This class defines resource entity and its description
 */
class Resource implements Phalcon\Acl\ResourceInterface
{
    /**
     * Resource name
     *
     * @var string
     */
    protected $_name;

    /**
     * Resource description
     *
     * @var string
     */
    protected $_description;


    /**
     * Resource name
     *
     * @return string
     */
    public function getName(): string
    {
    }

    /**
     * Resource name
     *
     * @return string
     */
    public function __toString(): string
    {
    }

    /**
     * Resource description
     *
     * @return string
     */
    public function getDescription(): string
    {
    }

    /**
     * Phalcon\Acl\Resource constructor
     *
     * @param string $name
     * @param string $description
     */
    public function __construct(string $name, string $description = null)
    {
    }

}
