<?php

namespace Phalcon\Acl;

use Phalcon\Events\ManagerInterface;
use Phalcon\Events\EventsAwareInterface;

/**
 * Phalcon\Acl\Adapter
 *
 * Adapter for Phalcon\Acl adapters
 */
abstract class Adapter implements Phalcon\Acl\AdapterInterface, \Phalcon\Events\EventsAwareInterface
{
    /**
     * Events manager
     *
     * @var mixed
     */
    protected $_eventsManager;

    /**
     * Default access
     *
     * @var bool
     */
    protected $_defaultAccess = true;

    /**
     * Access Granted
     *
     * @var bool
     */
    protected $_accessGranted = false;

    /**
     * Role which the list is checking if it's allowed to certain resource/access
     *
     * @var string
     */
    protected $_activeRole;

    /**
     * Resource which the list is checking if some role can access it
     *
     * @var string
     */
    protected $_activeResource;

    /**
     * Active access which the list is checking if some role can access it
     *
     * @var string
     */
    protected $_activeAccess;


    /**
     * Role which the list is checking if it's allowed to certain resource/access
     *
     * @return string
     */
    public function getActiveRole(): string
    {
    }

    /**
     * Resource which the list is checking if some role can access it
     *
     * @return string
     */
    public function getActiveResource(): string
    {
    }

    /**
     * Active access which the list is checking if some role can access it
     *
     * @return string
     */
    public function getActiveAccess(): string
    {
    }

    /**
     * Sets the events manager
     *
     * @param \Phalcon\Events\ManagerInterface $eventsManager
     */
    public function setEventsManager(\Phalcon\Events\ManagerInterface $eventsManager)
    {
    }

    /**
     * Returns the internal event manager
     *
     * @return ManagerInterface
     */
    public function getEventsManager(): ManagerInterface
    {
    }

    /**
     * Sets the default access level (Phalcon\Acl::ALLOW or Phalcon\Acl::DENY)
     *
     * @param int $defaultAccess
     */
    public function setDefaultAction(int $defaultAccess)
    {
    }

    /**
     * Returns the default ACL access level
     *
     * @return int
     */
    public function getDefaultAction(): int
    {
    }

}
