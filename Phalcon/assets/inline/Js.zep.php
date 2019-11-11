<?php

namespace Phalcon\Assets\Inline;

use Phalcon\Assets\Inline as InlineBase;

/**
 * Phalcon\Assets\Inline\Js
 *
 * Represents an inline Javascript
 */
class Js extends \Phalcon\Assets\Inline
{

    /**
     * Phalcon\Assets\Inline\Js
     *
     * @param string $content
     * @param boolean $filter
     * @param array $attributes
     */
    public function __construct(string $content, bool $filter = true, $attributes = null)
    {
    }

}
