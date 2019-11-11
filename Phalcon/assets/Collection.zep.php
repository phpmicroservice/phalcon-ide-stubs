<?php

namespace Phalcon\Assets;

use Phalcon\Assets\Resource;
use Phalcon\Assets\FilterInterface;
use Phalcon\Assets\Inline;
use Phalcon\Assets\Resource\Css as ResourceCss;
use Phalcon\Assets\Resource\Js as ResourceJs;
use Phalcon\Assets\Inline\Js as InlineJs;
use Phalcon\Assets\Inline\Css as InlineCss;

/**
 * Phalcon\Assets\Collection
 *
 * Represents a collection of resources
 */
class Collection implements Countable, Iterator
{

    protected $_prefix;


    protected $_local = true;


    protected $_resources = array();


    protected $_codes = array();


    protected $_position;


    protected $_filters = array();


    protected $_attributes = array();


    protected $_join = true;


    protected $_targetUri;


    protected $_targetPath;


    protected $_targetLocal = true;


    protected $_sourcePath;


    protected $_includedResources;



    public function getPrefix()
    {
    }


    public function getLocal()
    {
    }


    public function getResources()
    {
    }


    public function getCodes()
    {
    }


    public function getPosition()
    {
    }


    public function getFilters()
    {
    }


    public function getAttributes()
    {
    }


    public function getJoin()
    {
    }


    public function getTargetUri()
    {
    }


    public function getTargetPath()
    {
    }


    public function getTargetLocal()
    {
    }


    public function getSourcePath()
    {
    }

    /**
     * Phalcon\Assets\Collection constructor
     */
    public function __construct()
    {
    }

    /**
     * Adds a resource to the collection
     *
     * @param \Phalcon\Assets\Resource $resource
     * @return Collection
     */
    public function add(\Phalcon\Assets\Resource $resource): Collection
    {
    }

    /**
     * Adds an inline code to the collection
     *
     * @param \Phalcon\Assets\Inline $code
     * @return Collection
     */
    public function addInline(\Phalcon\Assets\Inline $code): Collection
    {
    }

    /**
     * Checks this the resource is added to the collection.
     *
     * <code>
     * use Phalcon\Assets\Resource;
     * use Phalcon\Assets\Collection;
     *
     * $collection = new Collection();
     * $resource = new Resource("js", "js/jquery.js");
     * $collection->add($resource);
     * $collection->has($resource); // true
     * </code>
     *
     * @param ResourceInterface $resource
     * @return bool
     */
    public function has(ResourceInterface $resource): bool
    {
    }

    /**
     * Adds a CSS resource to the collection
     *
     * @param string $path
     * @param mixed $local
     * @param bool $filter
     * @param mixed $attributes
     * @return Collection
     */
    public function addCss(string $path, $local = null, bool $filter = true, $attributes = null): Collection
    {
    }

    /**
     * Adds an inline CSS to the collection
     *
     * @param string $content
     * @param bool $filter
     * @param mixed $attributes
     * @return Collection
     */
    public function addInlineCss(string $content, bool $filter = true, $attributes = null): Collection
    {
    }

    /**
     * Adds a javascript resource to the collection
     *
     * @param string $path
     * @param boolean $local
     * @param boolean $filter
     * @param array $attributes
     * @return \Phalcon\Assets\Collection
     */
    public function addJs(string $path, $local = null, bool $filter = true, $attributes = null): Collection
    {
    }

    /**
     * Adds an inline javascript to the collection
     *
     * @param string $content
     * @param bool $filter
     * @param mixed $attributes
     * @return Collection
     */
    public function addInlineJs(string $content, bool $filter = true, $attributes = null): Collection
    {
    }

    /**
     * Returns the number of elements in the form
     *
     * @return int
     */
    public function count(): int
    {
    }

    /**
     * Rewinds the internal iterator
     */
    public function rewind()
    {
    }

    /**
     * Returns the current resource in the iterator
     *
     * @return Resource
     */
    public function current(): Resource
    {
    }

    /**
     * Returns the current position/key in the iterator
     *
     * @return int
     */
    public function key()
    {
    }

    /**
     * Moves the internal iteration pointer to the next position
     */
    public function next()
    {
    }

    /**
     * Check if the current element in the iterator is valid
     *
     * @return bool
     */
    public function valid(): bool
    {
    }

    /**
     * Sets the target path of the file for the filtered/join output
     *
     * @param string $targetPath
     * @return Collection
     */
    public function setTargetPath(string $targetPath): Collection
    {
    }

    /**
     * Sets a base source path for all the resources in this collection
     *
     * @param string $sourcePath
     * @return Collection
     */
    public function setSourcePath(string $sourcePath): Collection
    {
    }

    /**
     * Sets a target uri for the generated HTML
     *
     * @param string $targetUri
     * @return Collection
     */
    public function setTargetUri(string $targetUri): Collection
    {
    }

    /**
     * Sets a common prefix for all the resources
     *
     * @param string $prefix
     * @return Collection
     */
    public function setPrefix(string $prefix): Collection
    {
    }

    /**
     * Sets if the collection uses local resources by default
     *
     * @param bool $local
     * @return Collection
     */
    public function setLocal(bool $local): Collection
    {
    }

    /**
     * Sets extra HTML attributes
     *
     * @param array $attributes
     * @return Collection
     */
    public function setAttributes(array $attributes): Collection
    {
    }

    /**
     * Sets an array of filters in the collection
     *
     * @param array $filters
     * @return Collection
     */
    public function setFilters(array $filters): Collection
    {
    }

    /**
     * Sets the target local
     *
     * @param bool $targetLocal
     * @return Collection
     */
    public function setTargetLocal(bool $targetLocal): Collection
    {
    }

    /**
     * Sets if all filtered resources in the collection must be joined in a single result file
     *
     * @param bool $join
     * @return Collection
     */
    public function join(bool $join): Collection
    {
    }

    /**
     * Returns the complete location where the joined/filtered collection must be written
     *
     * @param string $basePath
     * @return string
     */
    public function getRealTargetPath(string $basePath): string
    {
    }

    /**
     * Adds a filter to the collection
     *
     * @param \Phalcon\Assets\FilterInterface $filter
     * @return Collection
     */
    public function addFilter(\Phalcon\Assets\FilterInterface $filter): Collection
    {
    }

    /**
     * Adds a resource or inline-code to the collection
     *
     * @param ResourceInterface $resource
     * @return bool
     */
    protected final function addResource(ResourceInterface $resource): bool
    {
    }

}
