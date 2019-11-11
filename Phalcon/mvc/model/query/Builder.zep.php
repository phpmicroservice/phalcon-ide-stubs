<?php

namespace Phalcon\Mvc\Model\Query;

use Phalcon\Di;
use Phalcon\Db\Column;
use Phalcon\DiInterface;
use Phalcon\Mvc\Model\Exception;
use Phalcon\Di\InjectionAwareInterface;
use Phalcon\Mvc\Model\QueryInterface;
use Phalcon\Mvc\Model\Query\BuilderInterface;

/**
 * Phalcon\Mvc\Model\Query\Builder
 *
 * Helps to create PHQL queries using an OO interface
 *
 * <code>
 * $params = [
 *     "models"     => ["Users"],
 *     "columns"    => ["id", "name", "status"],
 *     "conditions" => [
 *         [
 *             "created > :min: AND created < :max:",
 *             [
 *                 "min" => "2013-01-01",
 *                 "max" => "2014-01-01",
 *             ],
 *             [
 *                 "min" => PDO::PARAM_STR,
 *                 "max" => PDO::PARAM_STR,
 *             ],
 *         ],
 *     ],
 *     // or "conditions" => "created > '2013-01-01' AND created < '2014-01-01'",
 *     "group"      => ["id", "name"],
 *     "having"     => "name = 'Kamil'",
 *     "order"      => ["name", "id"],
 *     "limit"      => 20,
 *     "offset"     => 20,
 *     // or "limit" => [20, 20],
 * ];
 *
 * $queryBuilder = new \Phalcon\Mvc\Model\Query\Builder($params);
 * </code>
 */
class Builder implements \Phalcon\Mvc\Model\Query\BuilderInterface, \Phalcon\Di\InjectionAwareInterface
{

    protected $_dependencyInjector;


    protected $_columns;


    protected $_models;


    protected $_joins;

    /**
     * @deprecated Will be removed in version 4.0.0
     */
    protected $_with;


    protected $_conditions;


    protected $_group;


    protected $_having;


    protected $_order;


    protected $_limit;


    protected $_offset;


    protected $_forUpdate;


    protected $_sharedLock;


    protected $_bindParams;


    protected $_bindTypes;


    protected $_distinct;


    protected $_hiddenParamNumber = 0;


    /**
     * Phalcon\Mvc\Model\Query\Builder constructor
     *
     * @param mixed $params
     * @param \Phalcon\DiInterface $dependencyInjector
     */
    public function __construct($params = null, \Phalcon\DiInterface $dependencyInjector = null)
    {
    }

    /**
     * Sets the DependencyInjector container
     *
     * @param \Phalcon\DiInterface $dependencyInjector
     * @return Builder
     */
    public function setDI(\Phalcon\DiInterface $dependencyInjector): Builder
    {
    }

    /**
     * Returns the DependencyInjector container
     *
     * @return DiInterface
     */
    public function getDI(): DiInterface
    {
    }

    /**
     * Sets SELECT DISTINCT / SELECT ALL flag
     *
     * <code>
     * $builder->distinct("status");
     * $builder->distinct(null);
     * </code>
     *
     * @param mixed $distinct
     * @return Builder
     */
    public function distinct($distinct): Builder
    {
    }

    /**
     * Returns SELECT DISTINCT / SELECT ALL flag
     *
     * @return bool
     */
    public function getDistinct(): bool
    {
    }

    /**
     * Sets the columns to be queried
     *
     * <code>
     * $builder->columns("id, name");
     *
     * $builder->columns(
     *     [
     *         "id",
     *         "name",
     *     ]
     * );
     *
     * $builder->columns(
     *     [
     *         "name",
     *         "number" => "COUNT()",
     *     ]
     * );
     * </code>
     *
     * @param mixed $columns
     * @return Builder
     */
    public function columns($columns): Builder
    {
    }

    /**
     * Return the columns to be queried
     *
     * @return string|array
     */
    public function getColumns()
    {
    }

    /**
     * Sets the models who makes part of the query
     *
     * <code>
     * $builder->from("Robots");
     *
     * $builder->from(
     *     [
     *         "Robots",
     *         "RobotsParts",
     *     ]
     * );
     *
     * $builder->from(
     *     [
     *         "r"  => "Robots",
     *         "rp" => "RobotsParts",
     *     ]
     * );
     * </code>
     *
     * @param mixed $models
     * @return Builder
     */
    public function from($models): Builder
    {
    }

    /**
     * Add a model to take part of the query
     *
     * NOTE: The third parameter $with is deprecated and will be removed in future releases.
     *
     * <code>
     * // Load data from models Robots
     * $builder->addFrom("Robots");
     *
     * // Load data from model 'Robots' using 'r' as alias in PHQL
     * $builder->addFrom("Robots", "r");
     * </code>
     *
     * @param mixed $model
     * @param mixed $alias
     * @param mixed $with
     * @return Builder
     */
    public function addFrom($model, $alias = null, $with = null): Builder
    {
    }

    /**
     * Return the models who makes part of the query
     *
     * @return string|array
     */
    public function getFrom()
    {
    }

    /**
     * Adds an :type: join (by default type - INNER) to the query
     *
     * <code>
     * // Inner Join model 'Robots' with automatic conditions and alias
     * $builder->join("Robots");
     *
     * // Inner Join model 'Robots' specifying conditions
     * $builder->join("Robots", "Robots.id = RobotsParts.robots_id");
     *
     * // Inner Join model 'Robots' specifying conditions and alias
     * $builder->join("Robots", "r.id = RobotsParts.robots_id", "r");
     *
     * // Left Join model 'Robots' specifying conditions, alias and type of join
     * $builder->join("Robots", "r.id = RobotsParts.robots_id", "r", "LEFT");
     * </code>
     *
     * @param string $model
     * @param string $conditions
     * @param string $alias
     * @param string $type
     * @return \Phalcon\Mvc\Model\Query\Builder
     */
    public function join(string $model, $conditions = null, $alias = null, $type = null): Builder
    {
    }

    /**
     * Adds an INNER join to the query
     *
     * <code>
     * // Inner Join model 'Robots' with automatic conditions and alias
     * $builder->innerJoin("Robots");
     *
     * // Inner Join model 'Robots' specifying conditions
     * $builder->innerJoin("Robots", "Robots.id = RobotsParts.robots_id");
     *
     * // Inner Join model 'Robots' specifying conditions and alias
     * $builder->innerJoin("Robots", "r.id = RobotsParts.robots_id", "r");
     * </code>
     *
     * @param string $model
     * @param string $conditions
     * @param string $alias
     * @param string $type
     * @return \Phalcon\Mvc\Model\Query\Builder
     */
    public function innerJoin(string $model, $conditions = null, $alias = null): Builder
    {
    }

    /**
     * Adds a LEFT join to the query
     *
     * <code>
     * $builder->leftJoin("Robots", "r.id = RobotsParts.robots_id", "r");
     * </code>
     *
     * @param string $model
     * @param string $conditions
     * @param string $alias
     * @return \Phalcon\Mvc\Model\Query\Builder
     */
    public function leftJoin(string $model, $conditions = null, $alias = null): Builder
    {
    }

    /**
     * Adds a RIGHT join to the query
     *
     * <code>
     * $builder->rightJoin("Robots", "r.id = RobotsParts.robots_id", "r");
     * </code>
     *
     * @param string $model
     * @param string $conditions
     * @param string $alias
     * @return \Phalcon\Mvc\Model\Query\Builder
     */
    public function rightJoin(string $model, $conditions = null, $alias = null): Builder
    {
    }

    /**
     * Return join parts of the query
     *
     * @return array
     */
    public function getJoins()
    {
    }

    /**
     * Sets the query WHERE conditions
     *
     * <code>
     * $builder->where(100);
     *
     * $builder->where("name = 'Peter'");
     *
     * $builder->where(
     *     "name = :name: AND id > :id:",
     *     [
     *         "name" => "Peter",
     *         "id"   => 100,
     *     ]
     * );
     * </code>
     *
     * @param mixed $conditions
     * @param array $bindParams
     * @param array $bindTypes
     * @return \Phalcon\Mvc\Model\Query\Builder
     */
    public function where($conditions, $bindParams = null, $bindTypes = null): Builder
    {
    }

    /**
     * Appends a condition to the current WHERE conditions using a AND operator
     *
     * <code>
     * $builder->andWhere("name = 'Peter'");
     *
     * $builder->andWhere(
     *     "name = :name: AND id > :id:",
     *     [
     *         "name" => "Peter",
     *         "id"   => 100,
     *     ]
     * );
     * </code>
     *
     * @param string $conditions
     * @param array $bindParams
     * @param array $bindTypes
     * @return \Phalcon\Mvc\Model\Query\Builder
     */
    public function andWhere(string $conditions, $bindParams = null, $bindTypes = null): Builder
    {
    }

    /**
     * Appends a condition to the current conditions using an OR operator
     *
     * <code>
     * $builder->orWhere("name = 'Peter'");
     *
     * $builder->orWhere(
     *     "name = :name: AND id > :id:",
     *     [
     *         "name" => "Peter",
     *         "id"   => 100,
     *     ]
     * );
     * </code>
     *
     * @param string $conditions
     * @param array $bindParams
     * @param array $bindTypes
     * @return \Phalcon\Mvc\Model\Query\Builder
     */
    public function orWhere(string $conditions, $bindParams = null, $bindTypes = null): Builder
    {
    }

    /**
     * Appends a BETWEEN condition to the current WHERE conditions
     *
     * <code>
     * $builder->betweenWhere("price", 100.25, 200.50);
     * </code>
     *
     * @param string $expr
     * @param mixed $minimum
     * @param mixed $maximum
     * @param string $operator
     * @return Builder
     */
    public function betweenWhere(string $expr, $minimum, $maximum, string $operator = BuilderInterface::OPERATOR_AND): Builder
    {
    }

    /**
     * Appends a NOT BETWEEN condition to the current WHERE conditions
     *
     * <code>
     * $builder->notBetweenWhere("price", 100.25, 200.50);
     * </code>
     *
     * @param string $expr
     * @param mixed $minimum
     * @param mixed $maximum
     * @param string $operator
     * @return Builder
     */
    public function notBetweenWhere(string $expr, $minimum, $maximum, string $operator = BuilderInterface::OPERATOR_AND): Builder
    {
    }

    /**
     * Appends an IN condition to the current WHERE conditions
     *
     * <code>
     * $builder->inWhere("id", [1, 2, 3]);
     * </code>
     *
     * @param string $expr
     * @param array $values
     * @param string $operator
     * @return BuilderInterface
     */
    public function inWhere(string $expr, array $values, string $operator = BuilderInterface::OPERATOR_AND): BuilderInterface
    {
    }

    /**
     * Appends a NOT IN condition to the current WHERE conditions
     *
     * <code>
     * $builder->notInWhere("id", [1, 2, 3]);
     * </code>
     *
     * @param string $expr
     * @param array $values
     * @param string $operator
     * @return BuilderInterface
     */
    public function notInWhere(string $expr, array $values, string $operator = BuilderInterface::OPERATOR_AND): BuilderInterface
    {
    }

    /**
     * Return the conditions for the query
     *
     * @return string|array
     */
    public function getWhere()
    {
    }

    /**
     * Sets an ORDER BY condition clause
     *
     * <code>
     * $builder->orderBy("Robots.name");
     * $builder->orderBy(["1", "Robots.name"]);
     * $builder->orderBy(["Robots.name DESC"]);
     * </code>
     *
     * @param string|array $orderBy
     * @return \Phalcon\Mvc\Model\Query\Builder
     */
    public function orderBy($orderBy): Builder
    {
    }

    /**
     * Returns the set ORDER BY clause
     *
     * @return string|array
     */
    public function getOrderBy()
    {
    }

    /**
     * Sets the HAVING condition clause
     *
     * <code>
     * $builder->having("SUM(Robots.price) > 0");
     *
     * $builder->having(
     *     "SUM(Robots.price) > :sum:",
     *     [
     *         "sum" => 100,
     *     ]
     * );
     * </code>
     *
     * @param mixed $conditions
     * @param array $bindParams
     * @param array $bindTypes
     * @return \Phalcon\Mvc\Model\Query\Builder
     */
    public function having($conditions, $bindParams = null, $bindTypes = null): Builder
    {
    }

    /**
     * Appends a condition to the current HAVING conditions clause using a AND operator
     *
     * <code>
     * $builder->andHaving("SUM(Robots.price) > 0");
     *
     * $builder->andHaving(
     *     "SUM(Robots.price) > :sum:",
     *     [
     *         "sum" => 100,
     *     ]
     * );
     * </code>
     *
     * @param string $conditions
     * @param array $bindParams
     * @param array $bindTypes
     * @return \Phalcon\Mvc\Model\Query\Builder
     */
    public function andHaving(string $conditions, $bindParams = null, $bindTypes = null): Builder
    {
    }

    /**
     * Appends a condition to the current HAVING conditions clause using an OR operator
     *
     * <code>
     * $builder->orHaving("SUM(Robots.price) > 0");
     *
     * $builder->orHaving(
     *     "SUM(Robots.price) > :sum:",
     *     [
     *         "sum" => 100,
     *     ]
     * );
     * </code>
     *
     * @param string $conditions
     * @param array $bindParams
     * @param array $bindTypes
     * @return \Phalcon\Mvc\Model\Query\Builder
     */
    public function orHaving(string $conditions, $bindParams = null, $bindTypes = null): Builder
    {
    }

    /**
     * Appends a BETWEEN condition to the current HAVING conditions clause
     *
     * <code>
     * $builder->betweenHaving("SUM(Robots.price)", 100.25, 200.50);
     * </code>
     *
     * @param string $expr
     * @param mixed $minimum
     * @param mixed $maximum
     * @param string $operator
     * @return Builder
     */
    public function betweenHaving(string $expr, $minimum, $maximum, string $operator = BuilderInterface::OPERATOR_AND): Builder
    {
    }

    /**
     * Appends a NOT BETWEEN condition to the current HAVING conditions clause
     *
     * <code>
     * $builder->notBetweenHaving("SUM(Robots.price)", 100.25, 200.50);
     * </code>
     *
     * @param string $expr
     * @param mixed $minimum
     * @param mixed $maximum
     * @param string $operator
     * @return Builder
     */
    public function notBetweenHaving(string $expr, $minimum, $maximum, string $operator = BuilderInterface::OPERATOR_AND): Builder
    {
    }

    /**
     * Appends an IN condition to the current HAVING conditions clause
     *
     * <code>
     * $builder->inHaving("SUM(Robots.price)", [100, 200]);
     * </code>
     *
     * @param string $expr
     * @param array $values
     * @param string $operator
     * @return Builder
     */
    public function inHaving(string $expr, array $values, string $operator = BuilderInterface::OPERATOR_AND): Builder
    {
    }

    /**
     * Appends a NOT IN condition to the current HAVING conditions clause
     *
     * <code>
     * $builder->notInHaving("SUM(Robots.price)", [100, 200]);
     * </code>
     *
     * @param string $expr
     * @param array $values
     * @param string $operator
     * @return Builder
     */
    public function notInHaving(string $expr, array $values, string $operator = BuilderInterface::OPERATOR_AND): Builder
    {
    }

    /**
     * Return the current having clause
     *
     * @return string
     */
    public function getHaving()
    {
    }

    /**
     * Sets a FOR UPDATE clause
     *
     * <code>
     * $builder->forUpdate(true);
     * </code>
     *
     * @param bool $forUpdate
     * @return Builder
     */
    public function forUpdate(bool $forUpdate): Builder
    {
    }

    /**
     * Sets a LIMIT clause, optionally an offset clause
     *
     * <code>
     * $builder->limit(100);
     * $builder->limit(100, 20);
     * $builder->limit("100", "20");
     * </code>
     *
     * @param int $limit
     * @param mixed $offset
     * @return Builder
     */
    public function limit(int $limit, $offset = null): Builder
    {
    }

    /**
     * Returns the current LIMIT clause
     *
     * @return string|array
     */
    public function getLimit()
    {
    }

    /**
     * Sets an OFFSET clause
     *
     * <code>
     * $builder->offset(30);
     * </code>
     *
     * @param int $offset
     * @return Builder
     */
    public function offset(int $offset): Builder
    {
    }

    /**
     * Returns the current OFFSET clause
     *
     * @return string|array
     */
    public function getOffset()
    {
    }

    /**
     * Sets a GROUP BY clause
     *
     * <code>
     * $builder->groupBy(
     *     [
     *         "Robots.name",
     *     ]
     * );
     * </code>
     *
     * @param string|array $group
     * @return \Phalcon\Mvc\Model\Query\Builder
     */
    public function groupBy($group): Builder
    {
    }

    /**
     * Returns the GROUP BY clause
     *
     * @return string
     */
    public function getGroupBy()
    {
    }

    /**
     * Returns a PHQL statement built based on the builder parameters
     *
     * @return string
     */
    public final function getPhql(): string
    {
    }

    /**
     * Returns the query built
     *
     * @return QueryInterface
     */
    public function getQuery(): QueryInterface
    {
    }

    /**
     * Automatically escapes identifiers but only if they need to be escaped.
     *
     * @param string $identifier
     * @return string
     */
    final public function autoescape(string $identifier): string
    {
    }

    /**
     * Appends a BETWEEN condition
     *
     * @param string $clause
     * @param string $operator
     * @param string $expr
     * @param mixed $minimum
     * @param mixed $maximum
     * @return Builder
     */
    protected function _conditionBetween(string $clause, string $operator, string $expr, $minimum, $maximum): Builder
    {
    }

    /**
     * Appends a NOT BETWEEN condition
     *
     * @param string $clause
     * @param string $operator
     * @param string $expr
     * @param mixed $minimum
     * @param mixed $maximum
     * @return Builder
     */
    protected function _conditionNotBetween(string $clause, string $operator, string $expr, $minimum, $maximum): Builder
    {
    }

    /**
     * Appends an IN condition
     *
     * @param string $clause
     * @param string $operator
     * @param string $expr
     * @param array $values
     * @return Builder
     */
    protected function _conditionIn(string $clause, string $operator, string $expr, array $values): Builder
    {
    }

    /**
     * Appends a NOT IN condition
     *
     * @param string $clause
     * @param string $operator
     * @param string $expr
     * @param array $values
     * @return Builder
     */
    protected function _conditionNotIn(string $clause, string $operator, string $expr, array $values): Builder
    {
    }

}
