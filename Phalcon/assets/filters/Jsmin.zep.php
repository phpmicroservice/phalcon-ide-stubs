<?php

namespace Phalcon\Assets\Filters;

use Phalcon\Assets\FilterInterface;

/**
 * Phalcon\Assets\Filters\Jsmin
 *
 * Deletes the characters which are insignificant to JavaScript. Comments will be removed. Tabs will be
 * replaced with spaces. Carriage returns will be replaced with linefeeds.
 * Most spaces and linefeeds will be removed.
 */
class Jsmin implements \Phalcon\Assets\FilterInterface
{

    /**
     * Filters the content using JSMIN
     *
     * @param string $content
     * @return string
     */
    public function filter(string $content): string
    {
    }

}
