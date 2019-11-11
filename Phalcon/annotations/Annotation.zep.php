<?php

namespace Phalcon\Annotations;

use Phalcon\Annotations\Annotation;
use Phalcon\Annotations\Exception;

/**
 * Phalcon\Annotations\Annotation
 *
 * Represents a single annotation in an annotations collection
 */
class Annotation
{
    /**
     * Annotation Name
     *
     * @var string
     */
    protected $_name;

    /**
     * Annotation Arguments
     *
     * @var string
     */
    protected $_arguments;

    /**
     * Annotation ExprArguments
     *
     * @var string
     */
    protected $_exprArguments;


    /**
     * Phalcon\Annotations\Annotation constructor
     *
     * @param array $reflectionData
     */
    public function __construct(array $reflectionData)
    {
    }

    /**
     * Returns the annotation's name
     *
     * @return string
     */
    public function getName(): string
    {
    }

    /**
     * Resolves an annotation expression
     *
     * @param array $expr
     * @return mixed
     */
    public function getExpression(array $expr)
    {
    }

    /**
     * Returns the expression arguments without resolving
     *
     * @return array
     */
    public function getExprArguments()
    {
    }

    /**
     * Returns the expression arguments
     *
     * @return array
     */
    public function getArguments()
    {
    }

    /**
     * Returns the number of arguments that the annotation has
     *
     * @return int
     */
    public function numberArguments(): int
    {
    }

    /**
     * Returns an argument in a specific position
     *
     * @param int|string $position
     * @return mixed
     */
    public function getArgument($position)
    {
    }

    /**
     * Returns an argument in a specific position
     *
     * @param int|string $position
     * @return boolean
     */
    public function hasArgument($position): bool
    {
    }

    /**
     * Returns a named argument
     *
     * @return mixed
     * @param string $name
     */
    public function getNamedArgument(string $name)
    {
    }

    /**
     * Returns a named parameter
     *
     * @return mixed
     * @param string $name
     */
    public function getNamedParameter(string $name)
    {
    }

}
