<?php

namespace Phalcon\Mvc\Model;

use Phalcon\Mvc\ModelInterface;
use Phalcon\Mvc\Model\Transaction\ManagerInterface;

/**
 * Phalcon\Mvc\Model\TransactionInterface
 *
 * Interface for Phalcon\Mvc\Model\Transaction
 */
interface TransactionInterface
{

    /**
     * Sets transaction manager related to the transaction
     *
     * @param \Phalcon\Mvc\Model\Transaction\ManagerInterface $manager
     */
    public function setTransactionManager(\Phalcon\Mvc\Model\Transaction\ManagerInterface $manager);

    /**
     * Starts the transaction
     *
     * @return bool
     */
    public function begin(): bool;

    /**
     * Commits the transaction
     *
     * @return bool
     */
    public function commit(): bool;

    /**
     * Rollbacks the transaction
     *
     * @param mixed $rollbackMessage
     * @param \Phalcon\Mvc\ModelInterface $rollbackRecord
     */
    public function rollback($rollbackMessage = null, \Phalcon\Mvc\ModelInterface $rollbackRecord = null);

    /**
     * Returns connection related to transaction
     *
     * @return \Phalcon\Db\AdapterInterface
     */
    public function getConnection(): \Phalcon\Db\AdapterInterface;

    /**
     * Sets if is a reused transaction or new once
     *
     * @param bool $isNew
     */
    public function setIsNewTransaction(bool $isNew);

    /**
     * Sets flag to rollback on abort the HTTP connection
     *
     * @param bool $rollbackOnAbort
     */
    public function setRollbackOnAbort(bool $rollbackOnAbort);

    /**
     * Checks whether transaction is managed by a transaction manager
     *
     * @return bool
     */
    public function isManaged(): bool;

    /**
     * Returns validations messages from last save try
     *
     * @return array
     */
    public function getMessages(): array;

    /**
     * Checks whether internal connection is under an active transaction
     *
     * @return bool
     */
    public function isValid(): bool;

    /**
     * Sets object which generates rollback action
     *
     * @param \Phalcon\Mvc\ModelInterface $record
     */
    public function setRollbackedRecord(\Phalcon\Mvc\ModelInterface $record);

}
