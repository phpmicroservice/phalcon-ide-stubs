<?php

namespace Phalcon\Forms;

use Phalcon\Tag;
use Phalcon\Forms\Exception;
use Phalcon\Validation\Message;
use Phalcon\Validation\MessageInterface;
use Phalcon\Validation\Message\Group;
use Phalcon\Validation\ValidatorInterface;

/**
 * Phalcon\Forms\Element
 *
 * This is a base class for form elements
 */
abstract class Element implements Phalcon\Forms\ElementInterface
{

    protected $_form;


    protected $_name;


    protected $_value;


    protected $_label;


    protected $_attributes;


    protected $_validators = array();


    protected $_filters;


    protected $_options;


    protected $_messages;


    /**
     * Phalcon\Forms\Element constructor
     *
     * @param string $name
     * @param array $attributes
     */
    public function __construct(string $name, $attributes = null)
    {
    }

    /**
     * Sets the parent form to the element
     *
     * @param Form $form
     * @return ElementInterface
     */
    public function setForm(Form $form): ElementInterface
    {
    }

    /**
     * Returns the parent form to the element
     *
     * @return Form
     */
    public function getForm(): Form
    {
    }

    /**
     * Sets the element name
     *
     * @param string $name
     * @return ElementInterface
     */
    public function setName(string $name): ElementInterface
    {
    }

    /**
     * Returns the element name
     *
     * @return string
     */
    public function getName(): string
    {
    }

    /**
     * Sets the element filters
     *
     * @param array|string $filters
     * @return \Phalcon\Forms\ElementInterface
     */
    public function setFilters($filters): ElementInterface
    {
    }

    /**
     * Adds a filter to current list of filters
     *
     * @param string $filter
     * @return ElementInterface
     */
    public function addFilter(string $filter): ElementInterface
    {
    }

    /**
     * Returns the element filters
     *
     * @return mixed
     */
    public function getFilters()
    {
    }

    /**
     * Adds a group of validators
     *
     * @param \Phalcon\Validation\ValidatorInterface[]
     * @return \Phalcon\Forms\ElementInterface
     * @param array $validators
     * @param bool $merge
     * @param \Phalcon\Validation\ValidatorInterface  []
     */
    public function addValidators(array $validators, bool $merge = true): ElementInterface
    {
    }

    /**
     * Adds a validator to the element
     *
     * @param \Phalcon\Validation\ValidatorInterface $validator
     * @return ElementInterface
     */
    public function addValidator(\Phalcon\Validation\ValidatorInterface $validator): ElementInterface
    {
    }

    /**
     * Returns the validators registered for the element
     *
     * @return array|\Phalcon\Validation\ValidatorInterface[]
     */
    public function getValidators(): array
    {
    }

    /**
     * Returns an array of prepared attributes for Phalcon\Tag helpers
     * according to the element parameters
     *
     * @param array $attributes
     * @param bool $useChecked
     * @return array
     */
    public function prepareAttributes(array $attributes = null, bool $useChecked = false): array
    {
    }

    /**
     * Sets a default attribute for the element
     *
     * @param string $attribute
     * @param mixed $value
     * @return \Phalcon\Forms\ElementInterface
     */
    public function setAttribute(string $attribute, $value): ElementInterface
    {
    }

    /**
     * Returns the value of an attribute if present
     *
     * @param string $attribute
     * @param mixed $defaultValue
     * @return mixed
     */
    public function getAttribute(string $attribute, $defaultValue = null)
    {
    }

    /**
     * Sets default attributes for the element
     *
     * @param array $attributes
     * @return ElementInterface
     */
    public function setAttributes(array $attributes): ElementInterface
    {
    }

    /**
     * Returns the default attributes for the element
     *
     * @return array
     */
    public function getAttributes(): array
    {
    }

    /**
     * Sets an option for the element
     *
     * @param string $option
     * @param mixed $value
     * @return \Phalcon\Forms\ElementInterface
     */
    public function setUserOption(string $option, $value): ElementInterface
    {
    }

    /**
     * Returns the value of an option if present
     *
     * @param string $option
     * @param mixed $defaultValue
     * @return mixed
     */
    public function getUserOption(string $option, $defaultValue = null)
    {
    }

    /**
     * Sets options for the element
     *
     * @param array $options
     * @return ElementInterface
     */
    public function setUserOptions(array $options): ElementInterface
    {
    }

    /**
     * Returns the options for the element
     *
     * @return array
     */
    public function getUserOptions(): array
    {
    }

    /**
     * Sets the element label
     *
     * @param string $label
     * @return ElementInterface
     */
    public function setLabel(string $label): ElementInterface
    {
    }

    /**
     * Returns the element label
     *
     * @return string
     */
    public function getLabel(): string
    {
    }

    /**
     * Generate the HTML to label the element
     *
     * @param array $attributes
     * @return string
     */
    public function label($attributes = null): string
    {
    }

    /**
     * Sets a default value in case the form does not use an entity
     * or there is no value available for the element in _POST
     *
     * @param mixed $value
     * @return \Phalcon\Forms\ElementInterface
     */
    public function setDefault($value): ElementInterface
    {
    }

    /**
     * Returns the default value assigned to the element
     *
     * @return mixed
     */
    public function getDefault()
    {
    }

    /**
     * Returns the element value
     *
     * @return mixed
     */
    public function getValue()
    {
    }

    /**
     * Returns the messages that belongs to the element
     * The element needs to be attached to a form
     *
     * @return Group
     */
    public function getMessages(): Group
    {
    }

    /**
     * Checks whether there are messages attached to the element
     *
     * @return bool
     */
    public function hasMessages(): bool
    {
    }

    /**
     * Sets the validation messages related to the element
     *
     * @param \Phalcon\Validation\Message\Group $group
     * @return ElementInterface
     */
    public function setMessages(\Phalcon\Validation\Message\Group $group): ElementInterface
    {
    }

    /**
     * Appends a message to the internal message list
     *
     * @param \Phalcon\Validation\MessageInterface $message
     * @return ElementInterface
     */
    public function appendMessage(\Phalcon\Validation\MessageInterface $message): ElementInterface
    {
    }

    /**
     * Clears every element in the form to its default value
     *
     * @return ElementInterface
     */
    public function clear(): ElementInterface
    {
    }

    /**
     * Magic method __toString renders the widget without attributes
     *
     * @return string
     */
    public function __toString(): string
    {
    }

}
