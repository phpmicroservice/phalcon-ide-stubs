<?php

namespace Phalcon\Acl;

use Phalcon\Acl\Exception;

/**
 * Phalcon\Acl\Role
 *
 * This class defines role entity and its description
 */
class Role implements Phalcon\Acl\RoleInterface
{
    /**
     * Role name
     *
     * @var string
     */
    protected $_name;

    /**
     * Role description
     *
     * @var string
     */
    protected $_description;


    /**
     * Role name
     *
     * @return string
     */
    public function getName(): string
    {
    }

    /**
     * Role name
     *
     * @return string
     */
    public function __toString(): string
    {
    }

    /**
     * Role description
     *
     * @return string
     */
    public function getDescription(): string
    {
    }

    /**
     * Phalcon\Acl\Role constructor
     *
     * @param string $name
     * @param string $description
     */
    public function __construct(string $name, string $description = null)
    {
    }

}
