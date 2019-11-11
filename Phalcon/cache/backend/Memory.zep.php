<?php

namespace Phalcon\Cache\Backend;

use Phalcon\Cache\Backend;
use Phalcon\Cache\Exception;

/**
 * Phalcon\Cache\Backend\Memory
 *
 * Stores content in memory. Data is lost when the request is finished
 *
 * <code>
 * use Phalcon\Cache\Backend\Memory;
 * use Phalcon\Cache\Frontend\Data as FrontData;
 *
 * // Cache data
 * $frontCache = new FrontData();
 *
 * $cache = new Memory($frontCache);
 *
 * // Cache arbitrary data
 * $cache->save("my-data", [1, 2, 3, 4, 5]);
 *
 * // Get data
 * $data = $cache->get("my-data");
 * </code>
 */
class Memory extends Backend implements Serializable
{

    protected $_data;


    /**
     * Returns a cached content
     *
     * @param string $keyName
     * @param int $lifetime
     * @return mixed|null
     */
    public function get(string $keyName, int $lifetime = null)
    {
    }

    /**
     * Stores cached content into the backend and stops the frontend
     *
     * @param string $keyName
     * @param string $content
     * @param int $lifetime
     * @param boolean $stopBuffer
     * @return bool
     */
    public function save($keyName = null, $content = null, $lifetime = null, bool $stopBuffer = true): bool
    {
    }

    /**
     * Deletes a value from the cache by its key
     *
     * @param string $keyName
     * @return boolean
     */
    public function delete($keyName): bool
    {
    }

    /**
     * Query the existing cached keys.
     *
     * <code>
     * $cache->save("users-ids", [1, 2, 3]);
     * $cache->save("projects-ids", [4, 5, 6]);
     *
     * var_dump($cache->queryKeys("users")); // ["users-ids"]
     * </code>
     *
     * @param string $prefix
     * @return array
     */
    public function queryKeys(string $prefix = null): array
    {
    }

    /**
     * Checks if cache exists and it hasn't expired
     *
     * @param string|int $keyName
     * @param int $lifetime
     * @return bool
     */
    public function exists($keyName = null, int $lifetime = null): bool
    {
    }

    /**
     * Increment of given $keyName by $value
     *
     * @param string $keyName
     * @param int $value
     * @return int|null
     */
    public function increment($keyName = null, int $value = 1): ?int
    {
    }

    /**
     * Decrement of $keyName by given $value
     *
     * @param string $keyName
     * @param int $value
     * @return int|null
     */
    public function decrement($keyName = null, int $value = 1): ?int
    {
    }

    /**
     * Immediately invalidates all existing items.
     *
     * @return bool
     */
    public function flush(): bool
    {
    }

    /**
     * Required for interface \Serializable
     *
     * @return string
     */
    public function serialize(): string
    {
    }

    /**
     * Required for interface \Serializable
     *
     * @param mixed $data
     */
    public function unserialize($data)
    {
    }

}
