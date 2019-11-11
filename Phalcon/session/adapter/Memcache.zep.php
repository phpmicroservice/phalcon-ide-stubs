<?php

namespace Phalcon\Session\Adapter;

use Phalcon\Session\Adapter;
use Phalcon\Cache\Backend\Memcache;
use Phalcon\Cache\Frontend\Data as FrontendData;

/**
 * Phalcon\Session\Adapter\Memcache
 *
 * This adapter store sessions in memcache
 *
 * <code>
 * use Phalcon\Session\Adapter\Memcache;
 *
 * $session = new Memcache(
 *     [
 *         "uniqueId"   => "my-private-app",
 *         "host"       => "127.0.0.1",
 *         "port"       => 11211,
 *         "persistent" => true,
 *         "lifetime"   => 3600,
 *         "prefix"     => "my_",
 *     ]
 * );
 *
 * $session->start();
 *
 * $session->set("var", "some-value");
 *
 * echo $session->get("var");
 * </code>
 */
class Memcache extends Adapter
{

    protected $_memcache = null;


    protected $_lifetime = 8600;



    public function getMemcache()
    {
    }


    public function getLifetime()
    {
    }

    /**
     * Phalcon\Session\Adapter\Memcache constructor
     *
     * @param array $options
     */
    public function __construct(array $options = array())
    {
    }

    /**
     * @return bool
     */
    public function open(): bool
    {
    }

    /**
     * @return bool
     */
    public function close(): bool
    {
    }

    /**
     * {@inheritdoc}
     *
     * @param string $sessionId
     * @return string
     */
    public function read(string $sessionId): string
    {
    }

    /**
     * {@inheritdoc}
     *
     * @param string $sessionId
     * @param string $data
     * @return bool
     */
    public function write(string $sessionId, string $data): bool
    {
    }

    /**
     * {@inheritdoc}
     *
     * @param mixed $sessionId
     * @return bool
     */
    public function destroy($sessionId = null): bool
    {
    }

    /**
     * {@inheritdoc}
     *
     * @return bool
     */
    public function gc(): bool
    {
    }

}
