<?php

namespace Phalcon\Forms;

use Phalcon\Validation;
use Phalcon\ValidationInterface;
use Phalcon\DiInterface;
use Phalcon\FilterInterface;
use Phalcon\Di\Injectable;
use Phalcon\Forms\Exception;
use Phalcon\Forms\ElementInterface;
use Phalcon\Validation\Message\Group;

/**
 * Phalcon\Forms\Form
 *
 * This component allows to build forms using an object-oriented interface
 */
class Form extends Injectable implements Countable, Iterator
{

    protected $_position;


    protected $_entity;


    protected $_options = array();


    protected $_data;


    protected $_elements = array();


    protected $_elementsIndexed;


    protected $_messages;


    protected $_action;


    protected $_validation;


    /**
     * @param mixed $validation
     */
    public function setValidation($validation)
    {
    }


    public function getValidation()
    {
    }

    /**
     * Phalcon\Forms\Form constructor
     *
     * @param object $entity
     * @param array $userOptions
     */
    public function __construct($entity = null, $userOptions = null)
    {
    }

    /**
     * Sets the form's action
     *
     * @param string $action
     * @return Form
     */
    public function setAction(string $action): Form
    {
    }

    /**
     * Returns the form's action
     *
     * @return string
     */
    public function getAction(): string
    {
    }

    /**
     * Sets an option for the form
     *
     * @param string $option
     * @param mixed $value
     * @return Form
     */
    public function setUserOption($option, $value): Form
    {
    }

    /**
     * Returns the value of an option if present
     *
     * @param string $option
     * @param mixed $defaultValue
     * @return mixed
     */
    public function getUserOption($option, $defaultValue = null)
    {
    }

    /**
     * Sets options for the element
     *
     * @param array $options
     * @return Form
     */
    public function setUserOptions(array $options): Form
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
     * Sets the entity related to the model
     *
     * @param object $entity
     * @return Form
     */
    public function setEntity($entity): Form
    {
    }

    /**
     * Returns the entity related to the model
     *
     * @return object
     */
    public function getEntity()
    {
    }

    /**
     * Returns the form elements added to the form
     *
     * @return array|\Phalcon\Forms\ElementInterface[]
     */
    public function getElements(): array
    {
    }

    /**
     * Binds data to the entity
     *
     * @param array $data
     * @param object $entity
     * @param array $whitelist
     * @return Form
     */
    public function bind(array $data, $entity, $whitelist = null): Form
    {
    }

    /**
     * Validates the form
     *
     * @param array $data
     * @param object $entity
     * @return bool
     */
    public function isValid($data = null, $entity = null): bool
    {
    }

    /**
     * Returns the messages generated in the validation.
     *
     * <code>
     * if ($form->isValid($_POST) == false) {
     *     // Get messages separated by the item name
     *     // $messages is an array of Group object
     *     $messages = $form->getMessages(true);
     *
     *     foreach ($messages as $message) {
     *         echo $message, "<br>";
     *     }
     *
     *     // Default behavior.
     *     // $messages is a Group object
     *     $messages = $form->getMessages();
     *
     *     foreach ($messages as $message) {
     *         echo $message, "<br>";
     *     }
     * }
     * </code>
     *
     * @param bool $byItemName
     * @return array|\Phalcon\Validation\Message\Group
     */
    public function getMessages(bool $byItemName = false)
    {
    }

    /**
     * Returns the messages generated for a specific element
     *
     * @param string $name
     * @return Group
     */
    public function getMessagesFor(string $name): Group
    {
    }

    /**
     * Check if messages were generated for a specific element
     *
     * @param string $name
     * @return bool
     */
    public function hasMessagesFor(string $name): bool
    {
    }

    /**
     * Adds an element to the form
     *
     * @param \Phalcon\Forms\ElementInterface $element
     * @param string $position
     * @param bool $type
     * @return Form
     */
    public function add(\Phalcon\Forms\ElementInterface $element, string $position = null, bool $type = null): Form
    {
    }

    /**
     * Renders a specific item in the form
     *
     * @param string $name
     * @param array $attributes
     * @return string
     */
    public function render(string $name, $attributes = null): string
    {
    }

    /**
     * Returns an element added to the form by its name
     *
     * @param string $name
     * @return ElementInterface
     */
    public function get(string $name): ElementInterface
    {
    }

    /**
     * Generate the label of an element added to the form including HTML
     *
     * @param string $name
     * @param array $attributes
     * @return string
     */
    public function label(string $name, array $attributes = null): string
    {
    }

    /**
     * Returns a label for an element
     *
     * @param string $name
     * @return string
     */
    public function getLabel(string $name): string
    {
    }

    /**
     * Gets a value from the internal related entity or from the default value
     *
     * @param string $name
     * @return mixed|null
     */
    public function getValue(string $name)
    {
    }

    /**
     * Check if the form contains an element
     *
     * @param string $name
     * @return bool
     */
    public function has(string $name): bool
    {
    }

    /**
     * Removes an element from the form
     *
     * @param string $name
     * @return bool
     */
    public function remove(string $name): bool
    {
    }

    /**
     * Clears every element in the form to its default value
     *
     * @param array $fields
     * @return Form
     */
    public function clear($fields = null): Form
    {
    }

    /**
     * Returns the number of elements in the form
     *
     * @return int
     */
    public function count(): int
    {
    }

    /**
     * Rewinds the internal iterator
     */
    public function rewind()
    {
    }

    /**
     * Returns the current element in the iterator
     *
     * @return bool|\Phalcon\Forms\ElementInterface
     */
    public function current()
    {
    }

    /**
     * Returns the current position/key in the iterator
     *
     * @return int
     */
    public function key(): int
    {
    }

    /**
     * Moves the internal iteration pointer to the next position
     */
    public function next()
    {
    }

    /**
     * Check if the current element in the iterator is valid
     *
     * @return bool
     */
    public function valid(): bool
    {
    }

}
