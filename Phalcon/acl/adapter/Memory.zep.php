<?php

namespace Phalcon\Acl\Adapter;

use Phalcon\Acl;
use Phalcon\Acl\Adapter;
use Phalcon\Acl\Role;
use Phalcon\Acl\RoleInterface;
use Phalcon\Acl\Resource;
use Phalcon\Acl\Exception;
use Phalcon\Events\Manager as EventsManager;
use Phalcon\Acl\RoleAware;
use Phalcon\Acl\ResourceAware;
use Phalcon\Acl\ResourceInterface;

/**
 * Phalcon\Acl\Adapter\Memory
 *
 * Manages ACL lists in memory
 *
 * <code>
 * $acl = new \Phalcon\Acl\Adapter\Memory();
 *
 * $acl->setDefaultAction(
 *     \Phalcon\Acl::DENY
 * );
 *
 * // Register roles
 * $roles = [
 *     "users"  => new \Phalcon\Acl\Role("Users"),
 *     "guests" => new \Phalcon\Acl\Role("Guests"),
 * ];
 * foreach ($roles as $role) {
 *     $acl->addRole($role);
 * }
 *
 * // Private area resources
 * $privateResources = [
 *     "companies" => ["index", "search", "new", "edit", "save", "create", "delete"],
 *     "products"  => ["index", "search", "new", "edit", "save", "create", "delete"],
 *     "invoices"  => ["index", "profile"],
 * ];
 *
 * foreach ($privateResources as $resourceName => $actions) {
 *     $acl->addResource(
 *         new \Phalcon\Acl\Resource($resourceName),
 *         $actions
 *     );
 * }
 *
 * // Public area resources
 * $publicResources = [
 *     "index"   => ["index"],
 *     "about"   => ["index"],
 *     "session" => ["index", "register", "start", "end"],
 *     "contact" => ["index", "send"],
 * ];
 *
 * foreach ($publicResources as $resourceName => $actions) {
 *     $acl->addResource(
 *         new \Phalcon\Acl\Resource($resourceName),
 *         $actions
 *     );
 * }
 *
 * // Grant access to public areas to both users and guests
 * foreach ($roles as $role){
 *     foreach ($publicResources as $resource => $actions) {
 *         $acl->allow($role->getName(), $resource, "");
 *     }
 * }
 *
 * // Grant access to private area to role Users
 * foreach ($privateResources as $resource => $actions) {
 *     foreach ($actions as $action) {
 *         $acl->allow("Users", $resource, $action);
 *     }
 * }
 * </code>
 */
class Memory extends Adapter
{
    /**
     * Roles Names
     *
     * @var mixed
     */
    protected $_rolesNames;

    /**
     * Roles
     *
     * @var mixed
     */
    protected $_roles;

    /**
     * Resource Names
     *
     * @var mixed
     */
    protected $_resourcesNames;

    /**
     * Resources
     *
     * @var mixed
     */
    protected $_resources;

    /**
     * Access
     *
     * @var mixed
     */
    protected $_access;

    /**
     * Role Inherits
     *
     * @var mixed
     */
    protected $_roleInherits;

    /**
     * Access List
     *
     * @var mixed
     */
    protected $_accessList;

    /**
     * Function List
     *
     * @var mixed
     */
    protected $_func;

    /**
     * Default action for no arguments is allow
     *
     * @var mixed
     */
    protected $_noArgumentsDefaultAction = Acl::ALLOW;


    /**
     * Phalcon\Acl\Adapter\Memory constructor
     */
    public function __construct()
    {
    }

    /**
     * Adds a role to the ACL list. Second parameter allows inheriting access data from other existing role
     *
     * Example:
     * <code>
     * $acl->addRole(
     *     new Phalcon\Acl\Role("administrator"),
     *     "consultant"
     * );
     *
     * $acl->addRole("administrator", "consultant");
     * </code>
     *
     * @param array|string $accessInherits
     * @param RoleInterface|string $role
     * @return bool
     */
    public function addRole($role, $accessInherits = null): bool
    {
    }

    /**
     * Do a role inherit from another existing role
     *
     * @param string $roleName
     * @param mixed $roleToInherit
     * @return bool
     */
    public function addInherit(string $roleName, $roleToInherit): bool
    {
    }

    /**
     * Check whether role exist in the roles list
     *
     * @param string $roleName
     * @return bool
     */
    public function isRole(string $roleName): bool
    {
    }

    /**
     * Check whether resource exist in the resources list
     *
     * @param string $resourceName
     * @return bool
     */
    public function isResource(string $resourceName): bool
    {
    }

    /**
     * Adds a resource to the ACL list
     *
     * Access names can be a particular action, by example
     * search, update, delete, etc or a list of them
     *
     * Example:
     * <code>
     * // Add a resource to the the list allowing access to an action
     * $acl->addResource(
     *     new Phalcon\Acl\Resource("customers"),
     *     "search"
     * );
     *
     * $acl->addResource("customers", "search");
     *
     * // Add a resource  with an access list
     * $acl->addResource(
     *     new Phalcon\Acl\Resource("customers"),
     *     [
     *         "create",
     *         "search",
     *     ]
     * );
     *
     * $acl->addResource(
     *     "customers",
     *     [
     *         "create",
     *         "search",
     *     ]
     * );
     * </code>
     *
     * @param Phalcon\Acl\Resource|string $resourceValue
     * @param array|string $accessList
     * @return bool
     */
    public function addResource($resourceValue, $accessList): bool
    {
    }

    /**
     * Adds access to resources
     *
     * @param array|string $accessList
     * @param string $resourceName
     * @return bool
     */
    public function addResourceAccess(string $resourceName, $accessList): bool
    {
    }

    /**
     * Removes an access from a resource
     *
     * @param array|string $accessList
     * @param string $resourceName
     */
    public function dropResourceAccess(string $resourceName, $accessList)
    {
    }

    /**
     * Checks if a role has access to a resource
     *
     * @param string $roleName
     * @param string $resourceName
     * @param mixed $access
     * @param mixed $action
     * @param mixed $func
     */
    protected function _allowOrDeny(string $roleName, string $resourceName, $access, $action, $func = null)
    {
    }

    /**
     * Allow access to a role on a resource
     *
     * You can use '' as wildcard
     *
     * Example:
     * <code>
     * //Allow access to guests to search on customers
     * $acl->allow("guests", "customers", "search");
     *
     * //Allow access to guests to search or create on customers
     * $acl->allow("guests", "customers", ["search", "create"]);
     *
     * //Allow access to any role to browse on products
     * $acl->allow("", "products", "browse");
     *
     * //Allow access to any role to browse on any resource
     * $acl->allow("", "", "browse");
     * </code>
     *
     * @param string $roleName
     * @param string $resourceName
     * @param mixed $access
     * @param mixed $func
     */
    public function allow(string $roleName, string $resourceName, $access, $func = null)
    {
    }

    /**
     * Deny access to a role on a resource
     *
     * You can use '' as wildcard
     *
     * Example:
     * <code>
     * //Deny access to guests to search on customers
     * $acl->deny("guests", "customers", "search");
     *
     * //Deny access to guests to search or create on customers
     * $acl->deny("guests", "customers", ["search", "create"]);
     *
     * //Deny access to any role to browse on products
     * $acl->deny("", "products", "browse");
     *
     * //Deny access to any role to browse on any resource
     * $acl->deny("", "", "browse");
     * </code>
     *
     * @param string $roleName
     * @param string $resourceName
     * @param mixed $access
     * @param mixed $func
     */
    public function deny(string $roleName, string $resourceName, $access, $func = null)
    {
    }

    /**
     * Check whether a role is allowed to access an action from a resource
     *
     * <code>
     * //Does andres have access to the customers resource to create?
     * $acl->isAllowed("andres", "Products", "create");
     *
     * //Do guests have access to any resource to edit?
     * $acl->isAllowed("guests", "", "edit");
     * </code>
     *
     * @param RoleInterface|RoleAware|string $roleName
     * @param ResourceInterface|ResourceAware|string $resourceName
     * @param string $access
     * @param array $parameters
     * @return bool
     */
    public function isAllowed($roleName, $resourceName, string $access, array $parameters = null): bool
    {
    }

    /**
     * Sets the default access level (Phalcon\Acl::ALLOW or Phalcon\Acl::DENY)
     * for no arguments provided in isAllowed action if there exists func for
     * accessKey
     *
     * @param int $defaultAccess
     */
    public function setNoArgumentsDefaultAction(int $defaultAccess)
    {
    }

    /**
     * Returns the default ACL access level for no arguments provided in
     * isAllowed action if there exists func for accessKey
     *
     * @return int
     */
    public function getNoArgumentsDefaultAction(): int
    {
    }

    /**
     * Return an array with every role registered in the list
     *
     * @return array|\Phalcon\Acl\RoleInterface[]
     */
    public function getRoles(): array
    {
    }

    /**
     * Return an array with every resource registered in the list
     *
     * @return array|\Phalcon\Acl\ResourceInterface[]
     */
    public function getResources(): array
    {
    }

}
