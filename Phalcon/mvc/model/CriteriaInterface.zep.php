<?php

namespace Phalcon\Mvc\Model;

use Phalcon\DiInterface;

/**
 * Phalcon\Mvc\Model\CriteriaInterface
 *
 * Interface for Phalcon\Mvc\Model\Criteria
 */
interface CriteriaInterface
{

    /**
     * Set a model on which the query will be executed
     *
     * @param string $modelName
     * @return CriteriaInterface
     */
    public function setModelName(string $modelName): CriteriaInterface;

    /**
     * Returns an internal model name on which the criteria will be applied
     *
     * @return string
     */
    public function getModelName(): string;

    /**
     * Sets the bound parameters in the criteria
     * This method replaces all previously set bound parameters
     *
     * @param array $bindParams
     * @param bool $merge
     * @return CriteriaInterface
     */
    public function bind(array $bindParams, bool $merge = false): CriteriaInterface;

    /**
     * Sets the bind types in the criteria
     * This method replaces all previously set bound parameters
     *
     * @param array $bindTypes
     * @return CriteriaInterface
     */
    public function bindTypes(array $bindTypes): CriteriaInterface;

    /**
     * Sets the conditions parameter in the criteria
     *
     * @param string $conditions
     * @param mixed $bindParams
     * @param mixed $bindTypes
     * @return CriteriaInterface
     */
    public function where(string $conditions, $bindParams = null, $bindTypes = null): CriteriaInterface;

    /**
     * Adds the conditions parameter to the criteria
     *
     * @param string $conditions
     * @return CriteriaInterface
     */
    public function conditions(string $conditions): CriteriaInterface;

    /**
     * Adds the order-by parameter to the criteria
     *
     * @param string $orderColumns
     * @return CriteriaInterface
     */
    public function orderBy(string $orderColumns): CriteriaInterface;

    /**
     * Sets the limit parameter to the criteria
     *
     * @param int $limit
     * @param int $offset
     * @return \Phalcon\Mvc\Model\CriteriaInterface
     */
    public function limit(int $limit, $offset = null): CriteriaInterface;

    /**
     * Sets the "for_update" parameter to the criteria
     *
     * @param bool $forUpdate
     * @return CriteriaInterface
     */
    public function forUpdate(bool $forUpdate = true): CriteriaInterface;

    /**
     * Sets the "shared_lock" parameter to the criteria
     *
     * @param bool $sharedLock
     * @return CriteriaInterface
     */
    public function sharedLock(bool $sharedLock = true): CriteriaInterface;

    /**
     * Appends a condition to the current conditions using an AND operator
     *
     * @param string $conditions
     * @param array $bindParams
     * @param array $bindTypes
     * @return \Phalcon\Mvc\Model\CriteriaInterface
     */
    public function andWhere(string $conditions, $bindParams = null, $bindTypes = null): CriteriaInterface;

    /**
     * Appends a condition to the current conditions using an OR operator
     *
     * @param string $conditions
     * @param array $bindParams
     * @param array $bindTypes
     * @return \Phalcon\Mvc\Model\CriteriaInterface
     */
    public function orWhere(string $conditions, $bindParams = null, $bindTypes = null): CriteriaInterface;

    /**
     * Appends a BETWEEN condition to the current conditions
     *
     * <code>
     * $criteria->betweenWhere("price", 100.25, 200.50);
     * </code>
     *
     * @param string $expr
     * @param mixed $minimum
     * @param mixed $maximum
     * @return \Phalcon\Mvc\Model\CriteriaInterface
     */
    public function betweenWhere(string $expr, $minimum, $maximum): CriteriaInterface;

    /**
     * Appends a NOT BETWEEN condition to the current conditions
     *
     * <code>
     * $criteria->notBetweenWhere("price", 100.25, 200.50);
     * </code>
     *
     * @param string $expr
     * @param mixed $minimum
     * @param mixed $maximum
     * @return \Phalcon\Mvc\Model\CriteriaInterface
     */
    public function notBetweenWhere(string $expr, $minimum, $maximum): CriteriaInterface;

    /**
     * Appends an IN condition to the current conditions
     *
     * <code>
     * $criteria->inWhere("id", [1, 2, 3]);
     * </code>
     *
     * @param string $expr
     * @param array $values
     * @return CriteriaInterface
     */
    public function inWhere(string $expr, array $values): CriteriaInterface;

    /**
     * Appends a NOT IN condition to the current conditions
     *
     * <code>
     * $criteria->notInWhere("id", [1, 2, 3]);
     * </code>
     *
     * @param string $expr
     * @param array $values
     * @return CriteriaInterface
     */
    public function notInWhere(string $expr, array $values): CriteriaInterface;

    /**
     * Returns the conditions parameter in the criteria
     *
     * @return string|null
     */
    public function getWhere();

    /**
     * Returns the conditions parameter in the criteria
     *
     * @return string|null
     */
    public function getConditions();

    /**
     * Returns the limit parameter in the criteria, which will be
     * an integer if limit was set without an offset,
     * an array with 'number' and 'offset' keys if an offset was set with the limit,
     * or null if limit has not been set.
     *
     * @return int|array|null
     */
    public function getLimit();

    /**
     * Returns the order parameter in the criteria
     *
     * @return string|null
     */
    public function getOrderBy();

    /**
     * Returns all the parameters defined in the criteria
     *
     * @return array
     */
    public function getParams();

    /**
     * Executes a find using the parameters built with the criteria
     *
     * @return ResultsetInterface
     */
    public function execute(): ResultsetInterface;

}
