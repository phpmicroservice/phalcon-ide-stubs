<?php

namespace Phalcon\Mvc\Model;

use Phalcon\Mvc\EntityInterface;

/**
 * Phalcon\Mvc\Model\ValidatorInterface
 *
 * Interface for Phalcon\Mvc\Model validators
 *
 * @deprecated 3.1.0
 * @see Phalcon\Validation\ValidatorInterface
 */
interface ValidatorInterface
{

    /**
     * Returns messages generated by the validator
     *
     * @return array
     */
    public function getMessages();

    /**
     * Executes the validator
     *
     * @param \Phalcon\Mvc\ModelInterface $record
     * @return boolean
     */
    public function validate(\Phalcon\Mvc\EntityInterface $record): bool;

}