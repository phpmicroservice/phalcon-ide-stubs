<?php

namespace Phalcon\Mvc\View\Engine;

use Phalcon\Mvc\View\Engine;

/**
 * Phalcon\Mvc\View\Engine\Php
 *
 * Adapter to use PHP itself as templating engine
 */
class Php extends Engine
{

    /**
     * Renders a view using the template engine
     *
     * @param string $path
     * @param mixed $params
     * @param bool $mustClean
     */
    public function render(string $path, $params, bool $mustClean = false)
    {
    }

}
