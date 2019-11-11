<?php

namespace Phalcon\Mvc\Model;

use Phalcon\Di;
use Phalcon\Db\Column;
use Phalcon\DiInterface;
use Phalcon\Mvc\Model\Exception;
use Phalcon\Di\InjectionAwareInterface;
use Phalcon\Mvc\Model\CriteriaInterface;
use Phalcon\Mvc\Model\ResultsetInterface;
use Phalcon\Mvc\Model\Query\BuilderInterface;

/**
 * Phalcon\Mvc\Model\Criteria
 *
 * This class is used to build the array parameter required by
 * Phalcon\Mvc\Model::find() and Phalcon\Mvc\Model::findFirst()
 * using an object-oriented interface.
 *
 * <code>
 * $robots = Robots::query()
 *     ->where("type = :type:")
 *     ->andWhere("year < 2000")
 *     ->bind(["type" => "mechanical"])
 *     ->limit(5, 10)
 *     ->orderBy("name")
 *     ->execute();
 * </code>
 */
class Criteria implements \Phalcon\Mvc\Model\CriteriaInterface, \Phalcon\Di\InjectionAwareInterface
{

    protected $_model;


    protected $_params;


    protected $_bindParams;


    protected $_bindTypes;


    protected $_hiddenParamNumber = 0;


    /**
     * Sets the DependencyInjector container
     *
     * @param \Phalcon\DiInterface $dependencyInjector
     */
    public function setDI(\Phalcon\DiInterface $dependencyInjector)
    {
    }

    /**
     * Returns the DependencyInjector container
     *
     * @return null|\Phalcon\DiInterface
     */
    public function getDI(): ?DiInterface
    {
    }

    /**
     * Set a model on which the query will be executed
     *
     * @param string $modelName
     * @return CriteriaInterface
     */
    public function setModelName(string $modelName): CriteriaInterface
    {
    }

    /**
     * Returns an internal model name on which the criteria will be applied
     *
     * @return string
     */
    public function getModelName(): string
    {
    }

    /**
     * Sets the bound parameters in the criteria
     * This method replaces all previously set bound parameters
     *
     * @param array $bindParams
     * @param bool $merge
     * @return CriteriaInterface
     */
    public function bind(array $bindParams, bool $merge = false): CriteriaInterface
    {
    }

    /**
     * Sets the bind types in the criteria
     * This method replaces all previously set bound parameters
     *
     * @param array $bindTypes
     * @return CriteriaInterface
     */
    public function bindTypes(array $bindTypes): CriteriaInterface
    {
    }

    /**
     * Sets SELECT DISTINCT / SELECT ALL flag
     *
     * @param mixed $distinct
     * @return Criteria
     */
    public function distinct($distinct): Criteria
    {
    }

    /**
     * Sets the columns to be queried
     *
     * <code>
     * $criteria->columns(
     *     [
     *         "id",
     *         "name",
     *     ]
     * );
     * </code>
     *
     * @param string|array $columns
     * @return \Phalcon\Mvc\Model\Criteria
     */
    public function columns($columns): Criteria
    {
    }

    /**
     * Adds an INNER join to the query
     *
     * <code>
     * $criteria->join("Robots");
     * $criteria->join("Robots", "r.id = RobotsParts.robots_id");
     * $criteria->join("Robots", "r.id = RobotsParts.robots_id", "r");
     * $criteria->join("Robots", "r.id = RobotsParts.robots_id", "r", "LEFT");
     * </code>
     *
     * @param string $model
     * @param mixed $conditions
     * @param mixed $alias
     * @param mixed $type
     * @return Criteria
     */
    public function join(string $model, $conditions = null, $alias = null, $type = null): Criteria
    {
    }

    /**
     * Adds an INNER join to the query
     *
     * <code>
     * $criteria->innerJoin("Robots");
     * $criteria->innerJoin("Robots", "r.id = RobotsParts.robots_id");
     * $criteria->innerJoin("Robots", "r.id = RobotsParts.robots_id", "r");
     * </code>
     *
     * @param string $model
     * @param mixed $conditions
     * @param mixed $alias
     * @return Criteria
     */
    public function innerJoin(string $model, $conditions = null, $alias = null): Criteria
    {
    }

    /**
     * Adds a LEFT join to the query
     *
     * <code>
     * $criteria->leftJoin("Robots", "r.id = RobotsParts.robots_id", "r");
     * </code>
     *
     * @param string $model
     * @param mixed $conditions
     * @param mixed $alias
     * @return Criteria
     */
    public function leftJoin(string $model, $conditions = null, $alias = null): Criteria
    {
    }

    /**
     * Adds a RIGHT join to the query
     *
     * <code>
     * $criteria->rightJoin("Robots", "r.id = RobotsParts.robots_id", "r");
     * </code>
     *
     * @param string $model
     * @param mixed $conditions
     * @param mixed $alias
     * @return Criteria
     */
    public function rightJoin(string $model, $conditions = null, $alias = null): Criteria
    {
    }

    /**
     * Sets the conditions parameter in the criteria
     *
     * @param string $conditions
     * @param mixed $bindParams
     * @param mixed $bindTypes
     * @return CriteriaInterface
     */
    public function where(string $conditions, $bindParams = null, $bindTypes = null): CriteriaInterface
    {
    }

    /**
     * Appends a condition to the current conditions using an AND operator (deprecated)
     *
     * @deprecated 1.0.0
     * @see \Phalcon\Mvc\Model\Criteria::andWhere()
     * @param string $conditions
     * @param mixed $bindParams
     * @param mixed $bindTypes
     * @deprecated
     * @return Criteria
     */
    public function addWhere(string $conditions, $bindParams = null, $bindTypes = null): Criteria
    {
    }

    /**
     * Appends a condition to the current conditions using an AND operator
     *
     * @param string $conditions
     * @param mixed $bindParams
     * @param mixed $bindTypes
     * @return CriteriaInterface
     */
    public function andWhere(string $conditions, $bindParams = null, $bindTypes = null): CriteriaInterface
    {
    }

    /**
     * Appends a condition to the current conditions using an OR operator
     *
     * @param string $conditions
     * @param mixed $bindParams
     * @param mixed $bindTypes
     * @return CriteriaInterface
     */
    public function orWhere(string $conditions, $bindParams = null, $bindTypes = null): CriteriaInterface
    {
    }

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
     * @return CriteriaInterface
     */
    public function betweenWhere(string $expr, $minimum, $maximum): CriteriaInterface
    {
    }

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
     * @return CriteriaInterface
     */
    public function notBetweenWhere(string $expr, $minimum, $maximum): CriteriaInterface
    {
    }

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
    public function inWhere(string $expr, array $values): CriteriaInterface
    {
    }

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
    public function notInWhere(string $expr, array $values): CriteriaInterface
    {
    }

    /**
     * Adds the conditions parameter to the criteria
     *
     * @param string $conditions
     * @return CriteriaInterface
     */
    public function conditions(string $conditions): CriteriaInterface
    {
    }

    /**
     * Adds the order-by parameter to the criteria (deprecated)
     *
     * @see \Phalcon\Mvc\Model\Criteria::orderBy()
     * @param string $orderColumns
     * @deprecated
     * @return Criteria
     */
    public function order(string $orderColumns): Criteria
    {
    }

    /**
     * Adds the order-by clause to the criteria
     *
     * @param string $orderColumns
     * @return CriteriaInterface
     */
    public function orderBy(string $orderColumns): CriteriaInterface
    {
    }

    /**
     * Adds the group-by clause to the criteria
     *
     * @param mixed $group
     * @return Criteria
     */
    public function groupBy($group): Criteria
    {
    }

    /**
     * Adds the having clause to the criteria
     *
     * @param mixed $having
     * @return Criteria
     */
    public function having($having): Criteria
    {
    }

    /**
     * Adds the limit parameter to the criteria.
     *
     * <code>
     * $criteria->limit(100);
     * $criteria->limit(100, 200);
     * $criteria->limit("100", "200");
     * </code>
     *
     * @param int $limit
     * @param mixed $offset
     * @return CriteriaInterface
     */
    public function limit(int $limit, $offset = null): CriteriaInterface
    {
    }

    /**
     * Adds the "for_update" parameter to the criteria
     *
     * @param bool $forUpdate
     * @return CriteriaInterface
     */
    public function forUpdate(bool $forUpdate = true): CriteriaInterface
    {
    }

    /**
     * Adds the "shared_lock" parameter to the criteria
     *
     * @param bool $sharedLock
     * @return CriteriaInterface
     */
    public function sharedLock(bool $sharedLock = true): CriteriaInterface
    {
    }

    /**
     * Sets the cache options in the criteria
     * This method replaces all previously set cache options
     *
     * @param array $cache
     * @return Criteria
     */
    public function cache(array $cache): Criteria
    {
    }

    /**
     * Returns the conditions parameter in the criteria
     *
     * @return string|null
     */
    public function getWhere(): ?string
    {
    }

    /**
     * Returns the columns to be queried
     *
     * @return string|array|null
     */
    public function getColumns(): ?string
    {
    }

    /**
     * Returns the conditions parameter in the criteria
     *
     * @return string|null
     */
    public function getConditions(): ?string
    {
    }

    /**
     * Returns the limit parameter in the criteria, which will be
     * an integer if limit was set without an offset,
     * an array with 'number' and 'offset' keys if an offset was set with the limit,
     * or null if limit has not been set.
     *
     * @return int|array|null
     */
    public function getLimit(): ?string
    {
    }

    /**
     * Returns the order clause in the criteria
     *
     * @return string|null
     */
    public function getOrderBy(): ?string
    {
    }

    /**
     * Returns the group clause in the criteria
     */
    public function getGroupBy()
    {
    }

    /**
     * Returns the having clause in the criteria
     */
    public function getHaving()
    {
    }

    /**
     * Returns all the parameters defined in the criteria
     *
     * @return array
     */
    public function getParams()
    {
    }

    /**
     * Builds a Phalcon\Mvc\Model\Criteria based on an input array like $_POST
     *
     * @param \Phalcon\DiInterface $dependencyInjector
     * @param string $modelName
     * @param array $data
     * @param string $operator
     * @return Criteria
     */
    public static function fromInput(\Phalcon\DiInterface $dependencyInjector, string $modelName, array $data, string $operator = 'AND'): Criteria
    {
    }

    /**
     * Creates a query builder from criteria.
     *
     * <code>
     * $builder = Robots::query()
     *     ->where("type = :type:")
     *     ->bind(["type" => "mechanical"])
     *     ->createBuilder();
     * </code>
     *
     * @return BuilderInterface
     */
    public function createBuilder(): BuilderInterface
    {
    }

    /**
     * Executes a find using the parameters built with the criteria
     *
     * @return ResultsetInterface
     */
    public function execute(): ResultsetInterface
    {
    }

}
