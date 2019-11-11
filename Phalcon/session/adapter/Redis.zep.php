<?php

namespace Phalcon\Session\Adapter;

use Phalcon\Session\Adapter;
use Phalcon\Cache\Backend\Redis;
use Phalcon\Cache\Frontend\None as FrontendNone;

/**
 * Phalcon\Session\Adapter\Redis
 *
 * This adapter store sessions in Redis
 *
 * <code>
 * use Phalcon\Session\Adapter\Redis;
 *
 * $session = new Redis(
 *     [
 *         "uniqueId"   => "my-private-app",
 *         "host"       => "localhost",
 *         "port"       => 6379,
 *         "auth"       => "foobared",
 *         "persistent" => false,
 *         "lifetime"   => 3600,
 *         "prefix"     => "my",
 *         "index"      => 1,
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
class Redis extends Adapter
{

    protected $_redis = null;


    protected $_lifetime = 8600;



    public function getRedis()
    {
    }


    public function getLifetime()
    {
    }

    /**
     * Phalcon\Session\Adapter\Redis constructor
     *
     * @param array $options
     */
    public function __construct(array $options = array())
    {
    }

    /**
     * {@inheritdoc}
     *
     * @return bool
     */
    public function open(): bool
    {
    }

    /**
     * {@inheritdoc}
     *
     * @return bool
     */
    public function close(): bool
    {
    }

    /**
     * {@inheritdoc}
     *
     * @param mixed $sessionId
     * @return string
     */
    public function read($sessionId): string
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
