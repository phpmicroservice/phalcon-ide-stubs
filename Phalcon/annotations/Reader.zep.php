<?php

namespace Phalcon\Annotations;

use Phalcon\Annotations\ReaderInterface;

/**
 * Phalcon\Annotations\Reader
 *
 * Parses docblocks returning an array with the found annotations
 */
class Reader implements \Phalcon\Annotations\ReaderInterface
{

    /**
     * Reads annotations from the class dockblocks, its methods and/or properties
     *
     * @param string $className
     * @return array
     */
    public function parse(string $className): array
    {
    }

    /**
     * Parses a raw doc block returning the annotations found
     *
     * @param string $docBlock
     * @param mixed $file
     * @param mixed $line
     * @return array
     */
    public static function parseDocBlock(string $docBlock, $file = null, $line = null): array
    {
    }

}
