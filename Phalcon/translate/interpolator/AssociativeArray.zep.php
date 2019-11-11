<?php

namespace Phalcon\Translate\Interpolator;

use Phalcon\Translate\InterpolatorInterface;

class AssociativeArray implements \Phalcon\Translate\InterpolatorInterface
{

    /**
     * Replaces placeholders by the values passed
     *
     * @param string $translation
     * @param mixed $placeholders
     * @return string
     */
    public function replacePlaceholders(string $translation, $placeholders = null): string
    {
    }

}
