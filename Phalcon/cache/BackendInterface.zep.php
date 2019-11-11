<?php

namespace Phalcon\Cache;

/**
 * Phalcon\Cache\BackendInterface
 *
 * Interface for Phalcon\Cache\Backend adapters
 */
interface BackendInterface
{

    /**
     * Starts a cache. The keyname allows to identify the created fragment
     *
     * @param int|string $keyName
     * @param int $lifetime
     * @return  mixed
     */
    public function start($keyName, $lifetime = null);

    /**
     * Stops the frontend without store any cached content
     *
     * @param boolean $stopBuffer
     */
    public function stop(bool $stopBuffer = true);

    /**
     * Returns front-end instance adapter related to the back-end
     *
     * @return mixed
     */
    public function getFrontend();

    /**
     * Returns the backend options
     *
     * @return array
     */
    public function getOptions();

    /**
     * Checks whether the last cache is fresh or cached
     *
     * @return bool
     */
    public function isFresh(): bool;

    /**
     * Checks whether the cache has starting buffering or not
     *
     * @return bool
     */
    public function isStarted(): bool;

    /**
     * Sets the last key used in the cache
     *
     * @param string $lastKey
     */
    public function setLastKey($lastKey);

    /**
     * Gets the last key stored by the cache
     *
     * @return string
     */
    public function getLastKey();

    /**
     * Returns a cached content
     *
     * @param string $keyName
     * @param int $lifetime
     * @return mixed|null
     */
    public function get(string $keyName, int $lifetime = null);

    /**
     * Stores cached content into the file backend and stops the frontend
     *
     * @param int|string $keyName
     * @param string $content
     * @param int $lifetime
     * @param boolean $stopBuffer
     * @return boolean true on success/false otherwise
     */
    public function save($keyName = null, $content = null, $lifetime = null, bool $stopBuffer = true): bool;

    /**
     * Deletes a value from the cache by its key
     *
     * @param string $keyName
     * @return boolean
     */
    public function delete(string $keyName);

    /**
     * Query the existing cached keys
     *
     * @param string $prefix
     * @return array
     */
    public function queryKeys(string $prefix = null): array;

    /**
     * Checks if cache exists and it hasn't expired
     *
     * @param string $keyName
     * @param int $lifetime
     * @return boolean
     */
    public function exists($keyName = null, int $lifetime = null): bool;

}
