<?php

namespace Phalcon;

use Phalcon\Di\Injectable;
use Phalcon\ValidationInterface;
use Phalcon\Validation\Exception;
use Phalcon\Validation\Message\Group;
use Phalcon\Validation\MessageInterface;
use Phalcon\Validation\ValidatorInterface;
use Phalcon\Validation\CombinedFieldsValidator;

/**
 * Phalcon\Validation
 *
 * Allows to validate data using custom or built-in validators
 */
class Validation extends Injectable implements \Phalcon\ValidationInterface
{

    protected $_data;


    protected $_entity;


    protected $_validators = array();


    protected $_combinedFieldsValidators = array();


    protected $_filters = array();


    protected $_messages;


    protected $_defaultMessages;


    protected $_labels = array();


    protected $_values;



    public function getData()
    {
    }

    /**
     * @param mixed $validators
     */
    public function setValidators($validators)
    {
    }

    /**
     * Phalcon\Validation constructor
     *
     * @param array $validators
     */
    public function __construct(array $validators = null)
    {
    }

    /**
     * Validate a set of data according to a set of rules
     *
     * @param array|object $data
     * @param object $entity
     * @return \Phalcon\Validation\Message\Group
     */
    public function validate($data = null, $entity = null): Group
    {
    }

    /**
     * Validate a set of data according to a set of rules
     *
     * @param array|object $data
     * @param object $entity
     * @return boolean
     */
    public function check($data = null, $entity = null): bool
    {
    }

    /**
     * Adds a validator to a field
     *
     * @param mixed $field
     * @param \Phalcon\Validation\ValidatorInterface $validator
     * @return Validation
     */
    public function add($field, \Phalcon\Validation\ValidatorInterface $validator): Validation
    {
    }

    /**
     * Alias of `add` method
     *
     * @param mixed $field
     * @param \Phalcon\Validation\ValidatorInterface $validator
     * @return Validation
     */
    public function rule($field, \Phalcon\Validation\ValidatorInterface $validator): Validation
    {
    }

    /**
     * Adds the validators to a field
     *
     * @param mixed $field
     * @param array $validators
     * @return Validation
     */
    public function rules($field, array $validators): Validation
    {
    }

    /**
     * Adds filters to the field
     *
     * @param array|string $field
     * @param array|string $filters
     * @return \Phalcon\Validation
     */
    public function setFilters($field, $filters): Validation
    {
    }

    /**
     * Returns all the filters or a specific one
     *
     * @param string $field
     * @return mixed
     */
    public function getFilters(string $field = null)
    {
    }

    /**
     * Returns the validators added to the validation
     *
     * @return array
     */
    public function getValidators(): array
    {
    }

    /**
     * Sets the bound entity
     *
     * @param object $entity
     */
    public function setEntity($entity)
    {
    }

    /**
     * Returns the bound entity
     *
     * @return object
     */
    public function getEntity()
    {
    }

    /**
     * Adds default messages to validators
     *
     * @param array $messages
     * @return array
     */
    public function setDefaultMessages(array $messages = array()): array
    {
    }

    /**
     * Get default message for validator type
     *
     * @param string $type
     * @return string
     */
    public function getDefaultMessage(string $type): string
    {
    }

    /**
     * Returns the registered validators
     *
     * @return Group
     */
    public function getMessages(): Group
    {
    }

    /**
     * Adds labels for fields
     *
     * @param array $labels
     */
    public function setLabels(array $labels)
    {
    }

    /**
     * Get label for field
     *
     * @param string $field
     * @return string
     */
    public function getLabel($field)
    {
    }

    /**
     * Appends a message to the messages list
     *
     * @param \Phalcon\Validation\MessageInterface $message
     * @return Validation
     */
    public function appendMessage(\Phalcon\Validation\MessageInterface $message): Validation
    {
    }

    /**
     * Assigns the data to an entity
     * The entity is used to obtain the validation values
     *
     * @param object $entity
     * @param array|object $data
     * @return \Phalcon\Validation
     */
    public function bind($entity, $data): Validation
    {
    }

    /**
     * Gets the a value to validate in the array/object data source
     *
     * @param string $field
     * @return mixed
     */
    public function getValue(string $field)
    {
    }

    /**
     * Internal validations, if it returns true, then skip the current validator
     *
     * @param mixed $field
     * @param \Phalcon\Validation\ValidatorInterface $validator
     * @return bool
     */
    protected function preChecking($field, \Phalcon\Validation\ValidatorInterface $validator): bool
    {
    }

}
