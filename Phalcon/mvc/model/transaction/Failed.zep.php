<?php

namespace Phalcon\Mvc\Model\Transaction;

use Phalcon\Mvc\ModelInterface;
use Phalcon\Mvc\Model\Transaction\Exception;
use Phalcon\Mvc\Model\MessageInterface;

/**
 * Phalcon\Mvc\Model\Transaction\Failed
 *
 * This class will be thrown to exit a try/catch block for isolated transactions
 */
class Failed extends Exception
{

    protected $_record = null;


    /**
     * Phalcon\Mvc\Model\Transaction\Failed constructor
     *
     * @param string $message
     * @param \Phalcon\Mvc\ModelInterface $record
     */
    public function __construct(string $message, \Phalcon\Mvc\ModelInterface $record = null)
    {
    }

    /**
     * Returns validation record messages which stop the transaction
     *
     * @return array|\Phalcon\Mvc\Model\MessageInterface[]
     */
    public function getRecordMessages(): array
    {
    }

    /**
     * Returns validation record messages which stop the transaction
     *
     * @return ModelInterface
     */
    public function getRecord(): ModelInterface
    {
    }

}
