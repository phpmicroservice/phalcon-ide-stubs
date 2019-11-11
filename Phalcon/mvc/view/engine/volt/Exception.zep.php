<?php

namespace Phalcon\Mvc\View\Engine\Volt;

use Phalcon\Mvc\View\Exception as BaseException;

/**
 * Phalcon\Mvc\View\Exception
 *
 * Class for exceptions thrown by Phalcon\Mvc\View
 */
class Exception extends \Phalcon\Mvc\View\Exception
{

    protected $statement;


    /**
     * @param string $message
     * @param array $statement
     * @param int $code
     * @param \Exception $previous
     */
    public function __construct(string $message = '', array $statement = array(), int $code = 0, \Exception $previous = null)
    {
    }

    /**
     * Gets currently parsed statement (if any).
     *
     * @return array
     */
    public function getStatement(): array
    {
    }

}
