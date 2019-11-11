<?php

namespace Phalcon\Session\Adapter;

use Phalcon\Session\Adapter;
use Phalcon\Session\Exception;
use Phalcon\Cache\Backend\Libmemcached;
use Phalcon\Cache\Frontend\Data as FrontendData;

/**
 * Phalcon\Session\Adapter\Libmemcached
 *
 * This adapter store sessions in libmemcached
 *
 * <code>
 * use Phalcon\Session\Adapter\Libmemcached;
 *
 * $session = new Libmemcached(
 *     [
 *         "servers" => [
 *             [
 *                 "host"   => "localhost",
 *                 "port"   => 11211,
 *                 "weight" => 1,
 *             ],
 *         ],
 *         "client" => [
 *             \Memcached::OPT_HASH       => \Memcached::HASH_MD5,
 *             \Memcached::OPT_PREFIX_KEY => "prefix.",
 *         ],
 *         "lifetime" => 3600,
 *         "prefix"   => "my_",
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
class Libmemcached extends Adapter
{

    protected $_libmemcached = null;


    protected $_lifetime = 8600;



    public function getLibmemcached()
    {
    }


    public function getLifetime()
    {
    }

    /**
     * Phalcon\Session\Adapter\Libmemcached constructor
     *
     * @throws \Phalcon\Session\Exception
     * @param array $options
     */
    public function __construct(array $options)
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
