<?php

namespace Phalcon\Mvc\Model\Query;

use Phalcon\Mvc\ModelInterface;
use Phalcon\Mvc\Model\MessageInterface;

/**
 * Phalcon\Mvc\Model\Query\StatusInterface
 *
 * Interface for Phalcon\Mvc\Model\Query\Status
 */
interface StatusInterface
{

    /**
     * Returns the model which executed the action
     *
     * @return ModelInterface
     */
    public function getModel(): ModelInterface;

    /**
     * Returns the messages produced by an operation failed
     *
     * @return array|\Phalcon\Mvc\Model\MessageInterface[]
     */
    public function getMessages(): array;

    /**
     * Allows to check if the executed operation was successful
     *
     * @return bool
     */
    public function success(): bool;

}
