<?php

namespace Phalcon\Assets\Inline;

use Phalcon\Assets\Inline as InlineBase;

/**
 * Phalcon\Assets\Inline\Css
 *
 * Represents an inlined CSS
 */
class Css extends \Phalcon\Assets\Inline
{

    /**
     * Phalcon\Assets\Inline\Css
     *
     * @param string $content
     * @param boolean $filter
     * @param array $attributes
     */
    public function __construct(string $content, bool $filter = true, $attributes = null)
    {
    }

}
