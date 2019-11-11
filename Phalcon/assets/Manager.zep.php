<?php

namespace Phalcon\Assets;

use Phalcon\Tag;
use Phalcon\Assets\Resource;
use Phalcon\Assets\Collection;
use Phalcon\Assets\Exception;
use Phalcon\Assets\Resource\Js as ResourceJs;
use Phalcon\Assets\Resource\Css as ResourceCss;
use Phalcon\Assets\Inline\Css as InlineCss;
use Phalcon\Assets\Inline\Js as InlineJs;

/**
 * Phalcon\Assets\Manager
 *
 * Manages collections of CSS/Javascript assets
 */
class Manager
{
    /**
     * Options configure
     *
     * @var array
     */
    protected $_options;


    protected $_collections;


    protected $_implicitOutput = true;


    /**
     * Phalcon\Assets\Manager
     *
     * @param array $options
     */
    public function __construct($options = null)
    {
    }

    /**
     * Sets the manager options
     *
     * @param array $options
     * @return Manager
     */
    public function setOptions(array $options): Manager
    {
    }

    /**
     * Returns the manager options
     *
     * @return array
     */
    public function getOptions(): array
    {
    }

    /**
     * Sets if the HTML generated must be directly printed or returned
     *
     * @param bool $implicitOutput
     * @return Manager
     */
    public function useImplicitOutput(bool $implicitOutput): Manager
    {
    }

    /**
     * Adds a Css resource to the 'css' collection
     *
     * <code>
     * $assets->addCss("css/bootstrap.css");
     * $assets->addCss("http://bootstrap.my-cdn.com/style.css", false);
     * </code>
     *
     * @param string $path
     * @param mixed $local
     * @param mixed $filter
     * @param mixed $attributes
     * @return Manager
     */
    public function addCss(string $path, $local = true, $filter = true, $attributes = null): Manager
    {
    }

    /**
     * Adds an inline Css to the 'css' collection
     *
     * @param string $content
     * @param mixed $filter
     * @param mixed $attributes
     * @return Manager
     */
    public function addInlineCss(string $content, $filter = true, $attributes = null): Manager
    {
    }

    /**
     * Adds a javascript resource to the 'js' collection
     *
     * <code>
     * $assets->addJs("scripts/jquery.js");
     * $assets->addJs("http://jquery.my-cdn.com/jquery.js", false);
     * </code>
     *
     * @param string $path
     * @param mixed $local
     * @param mixed $filter
     * @param mixed $attributes
     * @return Manager
     */
    public function addJs(string $path, $local = true, $filter = true, $attributes = null): Manager
    {
    }

    /**
     * Adds an inline javascript to the 'js' collection
     *
     * @param string $content
     * @param mixed $filter
     * @param mixed $attributes
     * @return Manager
     */
    public function addInlineJs(string $content, $filter = true, $attributes = null): Manager
    {
    }

    /**
     * Adds a resource by its type
     *
     * <code>
     * $assets->addResourceByType("css",
     *     new \Phalcon\Assets\Resource\Css("css/style.css")
     * );
     * </code>
     *
     * @param string $type
     * @param \Phalcon\Assets\Resource $resource
     * @return Manager
     */
    public function addResourceByType(string $type, \Phalcon\Assets\Resource $resource): Manager
    {
    }

    /**
     * Adds an inline code by its type
     *
     * @param string $type
     * @param Inline $code
     * @return Manager
     */
    public function addInlineCodeByType(string $type, Inline $code): Manager
    {
    }

    /**
     * Adds a raw resource to the manager
     *
     * <code>
     * $assets->addResource(
     *     new Phalcon\Assets\Resource("css", "css/style.css")
     * );
     * </code>
     *
     * @param \Phalcon\Assets\Resource $resource
     * @return Manager
     */
    public function addResource(\Phalcon\Assets\Resource $resource): Manager
    {
    }

    /**
     * Adds a raw inline code to the manager
     *
     * @param Inline $code
     * @return Manager
     */
    public function addInlineCode(Inline $code): Manager
    {
    }

    /**
     * Sets a collection in the Assets Manager
     *
     * <code>
     * $assets->set("js", $collection);
     * </code>
     *
     * @param string $id
     * @param \Phalcon\Assets\Collection $collection
     * @return Manager
     */
    public function set(string $id, \Phalcon\Assets\Collection $collection): Manager
    {
    }

    /**
     * Returns a collection by its id.
     *
     * <code>
     * $scripts = $assets->get("js");
     * </code>
     *
     * @param string $id
     * @return Collection
     */
    public function get(string $id): Collection
    {
    }

    /**
     * Returns the CSS collection of assets
     *
     * @return Collection
     */
    public function getCss(): Collection
    {
    }

    /**
     * Returns the CSS collection of assets
     *
     * @return Collection
     */
    public function getJs(): Collection
    {
    }

    /**
     * Creates/Returns a collection of resources
     *
     * @param string $name
     * @return Collection
     */
    public function collection(string $name): Collection
    {
    }

    /**
     * @param array $resources
     * @param string $type
     * @return array
     */
    public function collectionResourcesByType(array $resources, string $type): array
    {
    }

    /**
     * Traverses a collection calling the callback to generate its HTML
     *
     * @param \Phalcon\Assets\Collection $collection
     * @param callback $callback
     * @param string $type
     * @return string|null
     */
    public function output(\Phalcon\Assets\Collection $collection, $callback, $type): ?string
    {
    }

    /**
     * Traverses a collection and generate its HTML
     *
     * @param \Phalcon\Assets\Collection $collection
     * @param string $type
     * @return string
     */
    public function outputInline(\Phalcon\Assets\Collection $collection, $type): string
    {
    }

    /**
     * Prints the HTML for CSS resources
     *
     * @param string $collectionName
     * @return string
     */
    public function outputCss($collectionName = null): string
    {
    }

    /**
     * Prints the HTML for inline CSS
     *
     * @param string $collectionName
     * @return string
     */
    public function outputInlineCss($collectionName = null): string
    {
    }

    /**
     * Prints the HTML for JS resources
     *
     * @param string $collectionName
     * @return string
     */
    public function outputJs($collectionName = null): string
    {
    }

    /**
     * Prints the HTML for inline JS
     *
     * @param string $collectionName
     * @return string
     */
    public function outputInlineJs($collectionName = null): string
    {
    }

    /**
     * Returns existing collections in the manager
     *
     * @return array|\Phalcon\Assets\Collection[]
     */
    public function getCollections(): array
    {
    }

    /**
     * Returns true or false if collection exists.
     *
     * <code>
     * if ($assets->exists("jsHeader")) {
     *     // \Phalcon\Assets\Collection
     *     $collection = $assets->get("jsHeader");
     * }
     * </code>
     *
     * @param string $id
     * @return bool
     */
    public function exists(string $id): bool
    {
    }

}
