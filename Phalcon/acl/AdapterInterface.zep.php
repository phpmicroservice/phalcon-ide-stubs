<?php

namespace Phalcon\Acl;

/**
 * Phalcon\Acl\AdapterInterface
 *
 * Interface for Phalcon\Acl adapters
 */
interface AdapterInterface
{

    /**
     * Sets the default access level (Phalcon\Acl::ALLOW or Phalcon\Acl::DENY)
     *
     * @param int $defaultAccess
     */
    public function setDefaultAction(int $defaultAccess);

    /**
     * Returns the default ACL access level
     *
     * @return int
     */
    public function getDefaultAction(): int;

    /**
     * Sets the default access level (Phalcon\Acl::ALLOW or Phalcon\Acl::DENY)
     * for no arguments provided in isAllowed action if there exists func for accessKey
     *
     * @param int $defaultAccess
     */
    public function setNoArgumentsDefaultAction(int $defaultAccess);

    /**
     * Returns the default ACL access level for no arguments provided in
     * isAllowed action if there exists func for accessKey
     *
     * @return int
     */
    public function getNoArgumentsDefaultAction(): int;

    /**
     * Adds a role to the ACL list. Second parameter lets to inherit access data from other existing role
     *
     * @param mixed $role
     * @param mixed $accessInherits
     * @return bool
     */
    public function addRole($role, $accessInherits = null): bool;

    /**
     * Do a role inherit from another existing role
     *
     * @param string $roleName
     * @param mixed $roleToInherit
     * @return bool
     */
    public function addInherit(string $roleName, $roleToInherit): bool;

    /**
     * Check whether role exist in the roles list
     *
     * @param string $roleName
     * @return bool
     */
    public function isRole(string $roleName): bool;

    /**
     * Check whether resource exist in the resources list
     *
     * @param string $resourceName
     * @return bool
     */
    public function isResource(string $resourceName): bool;

    /**
     * Adds a resource to the ACL list
     *
     * Access names can be a particular action, by example
     * search, update, delete, etc or a list of them
     *
     * @param mixed $resourceObject
     * @param mixed $accessList
     * @return bool
     */
    public function addResource($resourceObject, $accessList): bool;

    /**
     * Adds access to resources
     *
     * @param string $resourceName
     * @param mixed $accessList
     */
    public function addResourceAccess(string $resourceName, $accessList);

    /**
     * Removes an access from a resource
     *
     * @param string $resourceName
     * @param mixed $accessList
     */
    public function dropResourceAccess(string $resourceName, $accessList);

    /**
     * Allow access to a role on a resource
     *
     * @param string $roleName
     * @param string $resourceName
     * @param mixed $access
     * @param mixed $func
     */
    public function allow(string $roleName, string $resourceName, $access, $func = null);

    /**
     * Deny access to a role on a resource
     *
     * @param string $roleName
     * @param string $resourceName
     * @param mixed $access
     * @param mixed $func
     */
    public function deny(string $roleName, string $resourceName, $access, $func = null);

    /**
     * Check whether a role is allowed to access an action from a resource
     *
     * @param mixed $roleName
     * @param mixed $resourceName
     * @param string $access
     * @param array $parameters
     * @return bool
     */
    public function isAllowed($roleName, $resourceName, string $access, array $parameters = null): bool;

    /**
     * Returns the role which the list is checking if it's allowed to certain resource/access
     *
     * @return string
     */
    public function getActiveRole(): string;

    /**
     * Returns the resource which the list is checking if some role can access it
     *
     * @return string
     */
    public function getActiveResource(): string;

    /**
     * Returns the access which the list is checking if some role can access it
     *
     * @return string
     */
    public function getActiveAccess(): string;

    /**
     * Return an array with every role registered in the list
     *
     * @return array|RoleInterface[]
     */
    public function getRoles(): array;

    /**
     * Return an array with every resource registered in the list
     *
     * @return array|ResourceInterface[]
     */
    public function getResources(): array;

}
