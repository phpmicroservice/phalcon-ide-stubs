<?php

namespace Phalcon\Assets;

/**
 * Phalcon\Assets\ResourceInterface
 *
 * Interface for custom Phalcon\Assets reources
 */
interface ResourceInterface
{

    /**
     * Sets the resource's type.
     *
     * @param string $type
     * @return ResourceInterface
     */
    public function setType(string $type): ResourceInterface;

    /**
     * Gets the resource's type.
     *
     * @return string
     */
    public function getType(): string;

    /**
     * Sets if the resource must be filtered or not.
     *
     * @param bool $filter
     * @return ResourceInterface
     */
    public function setFilter(bool $filter): ResourceInterface;

    /**
     * Gets if the resource must be filtered or not.
     *
     * @return bool
     */
    public function getFilter(): bool;

    /**
     * Sets extra HTML attributes.
     *
     * @param array $attributes
     * @return ResourceInterface
     */
    public function setAttributes(array $attributes): ResourceInterface;

    /**
     * Gets extra HTML attributes.
     *
     * @return array|null
     */
    public function getAttributes(): ?array;

    /**
     * Gets the resource's key.
     *
     * @return string
     */
    public function getResourceKey(): string;

}
