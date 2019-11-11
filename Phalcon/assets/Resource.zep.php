<?php

namespace Phalcon\Assets;

/**
 * Phalcon\Assets\Resource
 *
 * Represents an asset resource
 *
 * <code>
 * $resource = new \Phalcon\Assets\Resource("js", "javascripts/jquery.js");
 * </code>
 */
class Resource implements Phalcon\Assets\ResourceInterface
{
    /**
     * @var string
     */
    protected $_type;

    /**
     * @var string
     */
    protected $_path;

    /**
     * @var boolean
     */
    protected $_local;

    /**
     * @var bool
     */
    protected $_filter;

    /**
     * @var array | null
     */
    protected $_attributes;


    protected $_sourcePath;


    protected $_targetPath;


    protected $_targetUri;


    /**
     * @return string
     */
    public function getType(): string
    {
    }

    /**
     * @return string
     */
    public function getPath(): string
    {
    }

    /**
     * @return boolean
     */
    public function getLocal()
    {
    }

    /**
     * @return bool
     */
    public function getFilter(): bool
    {
    }

    /**
     * @return array|null
     */
    public function getAttributes(): ?array
    {
    }


    public function getSourcePath()
    {
    }


    public function getTargetPath()
    {
    }


    public function getTargetUri()
    {
    }

    /**
     * Phalcon\Assets\Resource constructor
     *
     * @param string $type
     * @param string $path
     * @param boolean $local
     * @param boolean $filter
     * @param array $attributes
     */
    public function __construct(string $type, string $path, bool $local = true, bool $filter = true, $attributes = null)
    {
    }

    /**
     * Sets the resource's type
     *
     * @param string $type
     * @return ResourceInterface
     */
    public function setType(string $type): ResourceInterface
    {
    }

    /**
     * Sets the resource's path
     *
     * @param string $path
     * @return Resource
     */
    public function setPath(string $path): Resource
    {
    }

    /**
     * Sets if the resource is local or external
     *
     * @param bool $local
     * @return Resource
     */
    public function setLocal(bool $local): Resource
    {
    }

    /**
     * Sets if the resource must be filtered or not
     *
     * @param bool $filter
     * @return ResourceInterface
     */
    public function setFilter(bool $filter): ResourceInterface
    {
    }

    /**
     * Sets extra HTML attributes
     *
     * @param array $attributes
     * @return ResourceInterface
     */
    public function setAttributes(array $attributes): ResourceInterface
    {
    }

    /**
     * Sets a target uri for the generated HTML
     *
     * @param string $targetUri
     * @return Resource
     */
    public function setTargetUri(string $targetUri): Resource
    {
    }

    /**
     * Sets the resource's source path
     *
     * @param string $sourcePath
     * @return Resource
     */
    public function setSourcePath(string $sourcePath): Resource
    {
    }

    /**
     * Sets the resource's target path
     *
     * @param string $targetPath
     * @return Resource
     */
    public function setTargetPath(string $targetPath): Resource
    {
    }

    /**
     * Returns the content of the resource as an string
     * Optionally a base path where the resource is located can be set
     *
     * @param string $basePath
     * @return string
     */
    public function getContent(string $basePath = null): string
    {
    }

    /**
     * Returns the real target uri for the generated HTML
     *
     * @return string
     */
    public function getRealTargetUri(): string
    {
    }

    /**
     * Returns the complete location where the resource is located
     *
     * @param string $basePath
     * @return string
     */
    public function getRealSourcePath(string $basePath = null): string
    {
    }

    /**
     * Returns the complete location where the resource must be written
     *
     * @param string $basePath
     * @return string
     */
    public function getRealTargetPath(string $basePath = null): string
    {
    }

    /**
     * Gets the resource's key.
     *
     * @return string
     */
    public function getResourceKey(): string
    {
    }

}
