<?php

namespace Phalcon\Session;

/**
 * Phalcon\Session\AdapterInterface
 *
 * Interface for Phalcon\Session adapters
 */
interface AdapterInterface
{

    /**
     * Starts session, optionally using an adapter
     */
    public function start();

    /**
     * Sets session options
     *
     * @param array $options
     */
    public function setOptions(array $options);

    /**
     * Get internal options
     *
     * @return array
     */
    public function getOptions(): array;

    /**
     * Gets a session variable from an application context
     *
     * @param string $index
     * @param mixed $defaultValue
     * @return mixed
     */
    public function get(string $index, $defaultValue = null);

    /**
     * Sets a session variable in an application context
     *
     * @param string $index
     * @param mixed $value
     */
    public function set(string $index, $value);

    /**
     * Check whether a session variable is set in an application context
     *
     * @param string $index
     * @return bool
     */
    public function has(string $index): bool;

    /**
     * Removes a session variable from an application context
     *
     * @param string $index
     */
    public function remove(string $index);

    /**
     * Returns active session id
     *
     * @return string
     */
    public function getId(): string;

    /**
     * Check whether the session has been started
     *
     * @return bool
     */
    public function isStarted(): bool;

    /**
     * Destroys the active session
     *
     * @param mixed $removeData
     * @return bool
     */
    public function destroy($removeData = null): bool;

    /**
     * Regenerate session's id
     *
     * @param bool $deleteOldSession
     * @return AdapterInterface
     */
    public function regenerateId(bool $deleteOldSession = true): AdapterInterface;

    /**
     * Set session name
     *
     * @param string $name
     */
    public function setName(string $name);

    /**
     * Get session name
     *
     * @return string
     */
    public function getName(): string;

}
