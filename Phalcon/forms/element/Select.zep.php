<?php

namespace Phalcon\Forms\Element;

use Phalcon\Tag\Select;
use Phalcon\Forms\Element;

/**
 * Phalcon\Forms\Element\Select
 *
 * Component SELECT (choice) for forms
 */
class Select extends Element
{

    protected $_optionsValues;


    /**
     * Phalcon\Forms\Element constructor
     *
     * @param string $name
     * @param object|array $options
     * @param array $attributes
     */
    public function __construct(string $name, $options = null, $attributes = null)
    {
    }

    /**
     * Set the choice's options
     *
     * @param array|object $options
     * @return \Phalcon\Forms\Element
     */
    public function setOptions($options): Element
    {
    }

    /**
     * Returns the choices' options
     *
     * @return array|object
     */
    public function getOptions()
    {
    }

    /**
     * Adds an option to the current options
     *
     * @param array $option
     * @return this
     */
    public function addOption($option): Element
    {
    }

    /**
     * Renders the element widget returning html
     *
     * @param array $attributes
     * @return string
     */
    public function render($attributes = null): string
    {
    }

}
