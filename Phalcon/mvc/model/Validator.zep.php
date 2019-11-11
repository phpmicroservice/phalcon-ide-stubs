<?php

namespace Phalcon\Mvc\Model;

use Phalcon\Mvc\Model\Message;

/**
 * Phalcon\Mvc\Model\Validator
 *
 * This is a base class for Phalcon\Mvc\Model validators
 *
 * This class is only for backward compatibility reasons to use with Phalcon\Mvc\Collection.
 * Otherwise please use the validators provided by Phalcon\Validation.
 *
 * @deprecated 3.1.0
 * @see Phalcon\Validation\Validator
 */
abstract class Validator implements Phalcon\Mvc\Model\ValidatorInterface
{

    protected $_options;


    protected $_messages = array();


    /**
     * Phalcon\Mvc\Model\Validator constructor
     *
     * @param array $options
     * @deprecated
     */
    public function __construct(array $options)
    {
    }

    /**
     * Appends a message to the validator
     *
     * @param string $message
     * @param string|array $field
     * @param string $type
     */
    protected function appendMessage(string $message, $field = null, $type = null)
    {
    }

    /**
     * Returns messages generated by the validator
     *
     * @return array
     */
    public function getMessages(): array
    {
    }

    /**
     * Returns all the options from the validator
     *
     * @return array
     */
    public function getOptions()
    {
    }

    /**
     * Returns an option
     *
     * @param string $option
     * @param mixed $defaultValue
     * @return mixed
     */
    public function getOption(string $option, $defaultValue = '')
    {
    }

    /**
     * Check whether an option has been defined in the validator options
     *
     * @param string $option
     * @return bool
     */
    public function isSetOption(string $option): bool
    {
    }

}
