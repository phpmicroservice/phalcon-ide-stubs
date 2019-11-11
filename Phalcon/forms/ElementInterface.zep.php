<?php

namespace Phalcon\Forms;

use Phalcon\Forms\Form;
use Phalcon\Validation\MessageInterface;
use Phalcon\Validation\ValidatorInterface;
use Phalcon\Validation\Message\Group;

/**
 * Phalcon\Forms\Element
 *
 * Interface for Phalcon\Forms\Element classes
 */
interface ElementInterface
{

    /**
     * Sets the parent form to the element
     *
     * @param \Phalcon\Forms\Form $form
     * @return ElementInterface
     */
    public function setForm(\Phalcon\Forms\Form $form): ElementInterface;

    /**
     * Returns the parent form to the element
     *
     * @return Form
     */
    public function getForm(): Form;

    /**
     * Sets the element's name
     *
     * @param string $name
     * @return ElementInterface
     */
    public function setName(string $name): ElementInterface;

    /**
     * Returns the element's name
     *
     * @return string
     */
    public function getName(): string;

    /**
     * Sets the element's filters
     *
     * @param array|string $filters
     * @return \Phalcon\Forms\ElementInterface
     */
    public function setFilters($filters): ElementInterface;

    /**
     * Adds a filter to current list of filters
     *
     * @param string $filter
     * @return ElementInterface
     */
    public function addFilter(string $filter): ElementInterface;

    /**
     * Returns the element's filters
     *
     * @return mixed
     */
    public function getFilters();

    /**
     * Adds a group of validators
     *
     * @param \Phalcon\Validation\ValidatorInterface[]
     * @param boolean $merge
     * @return \Phalcon\Forms\ElementInterface
     * @param array $validators
     * @param \Phalcon\Validation\ValidatorInterface  []
     */
    public function addValidators(array $validators, bool $merge = true): ElementInterface;

    /**
     * Adds a validator to the element
     *
     * @param \Phalcon\Validation\ValidatorInterface $validator
     * @return ElementInterface
     */
    public function addValidator(\Phalcon\Validation\ValidatorInterface $validator): ElementInterface;

    /**
     * Returns the validators registered for the element
     *
     * @return array|\Phalcon\Validation\ValidatorInterface[]
     */
    public function getValidators(): array;

    /**
     * Returns an array of prepared attributes for Phalcon\Tag helpers
     * according to the element's parameters
     *
     * @param array $attributes
     * @param bool $useChecked
     * @return array
     */
    public function prepareAttributes(array $attributes = null, bool $useChecked = false): array;

    /**
     * Sets a default attribute for the element
     *
     * @param string $attribute
     * @param mixed $value
     * @return \Phalcon\Forms\ElementInterface
     */
    public function setAttribute(string $attribute, $value): ElementInterface;

    /**
     * Returns the value of an attribute if present
     *
     * @param string $attribute
     * @param mixed $defaultValue
     * @return mixed
     */
    public function getAttribute(string $attribute, $defaultValue = null);

    /**
     * Sets default attributes for the element
     *
     * @param array $attributes
     * @return ElementInterface
     */
    public function setAttributes(array $attributes): ElementInterface;

    /**
     * Returns the default attributes for the element
     *
     * @return array
     */
    public function getAttributes(): array;

    /**
     * Sets an option for the element
     *
     * @param string $option
     * @param mixed $value
     * @return \Phalcon\Forms\ElementInterface
     */
    public function setUserOption(string $option, $value): ElementInterface;

    /**
     * Returns the value of an option if present
     *
     * @param string $option
     * @param mixed $defaultValue
     * @return mixed
     */
    public function getUserOption(string $option, $defaultValue = null);

    /**
     * Sets options for the element
     *
     * @param array $options
     * @return ElementInterface
     */
    public function setUserOptions(array $options): ElementInterface;

    /**
     * Returns the options for the element
     *
     * @return array
     */
    public function getUserOptions(): array;

    /**
     * Sets the element label
     *
     * @param string $label
     * @return ElementInterface
     */
    public function setLabel(string $label): ElementInterface;

    /**
     * Returns the element's label
     *
     * @return string
     */
    public function getLabel(): string;

    /**
     * Generate the HTML to label the element
     *
     * @return string
     */
    public function label(): string;

    /**
     * Sets a default value in case the form does not use an entity
     * or there is no value available for the element in _POST
     *
     * @param mixed $value
     * @return \Phalcon\Forms\ElementInterface
     */
    public function setDefault($value): ElementInterface;

    /**
     * Returns the default value assigned to the element
     *
     * @return mixed
     */
    public function getDefault();

    /**
     * Returns the element's value
     *
     * @return mixed
     */
    public function getValue();

    /**
     * Returns the messages that belongs to the element
     * The element needs to be attached to a form
     *
     * @return \Phalcon\Validation\Message\Group
     */
    public function getMessages();

    /**
     * Checks whether there are messages attached to the element
     *
     * @return bool
     */
    public function hasMessages(): bool;

    /**
     * Sets the validation messages related to the element
     *
     * @param \Phalcon\Validation\Message\Group $group
     * @return ElementInterface
     */
    public function setMessages(\Phalcon\Validation\Message\Group $group): ElementInterface;

    /**
     * Appends a message to the internal message list
     *
     * @param \Phalcon\Validation\MessageInterface $message
     * @return ElementInterface
     */
    public function appendMessage(\Phalcon\Validation\MessageInterface $message): ElementInterface;

    /**
     * Clears every element in the form to its default value
     *
     * @return ElementInterface
     */
    public function clear(): ElementInterface;

    /**
     * Renders the element widget
     *
     * @param array $attributes
     * @return string
     */
    public function render($attributes = null): string;

}
