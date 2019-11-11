<?php

namespace Phalcon\Mvc\Model\Query;

/**
 * Phalcon\Mvc\Model\Query\BuilderInterface
 *
 * Interface for Phalcon\Mvc\Model\Query\Builder
 */
interface BuilderInterface
{

    const OPERATOR_OR = 'or';


    const OPERATOR_AND = 'and';


    /**
     * Sets the columns to be queried
     *
     * @param string|array $columns
     * @return \Phalcon\Mvc\Model\Query\BuilderInterface
     */
    public function columns($columns);

    /**
     * Return the columns to be queried
     *
     * @return string|array
     */
    public function getColumns();

    /**
     * Sets the models who makes part of the query
     *
     * @param string|array $models
     * @return \Phalcon\Mvc\Model\Query\BuilderInterface
     */
    public function from($models);

    /**
     * Add a model to take part of the query
     *
     * @param string $model
     * @param string $alias
     * @return \Phalcon\Mvc\Model\Query\BuilderInterface
     */
    public function addFrom($model, $alias = null);

    /**
     * Return the models who makes part of the query
     *
     * @return string|array
     */
    public function getFrom();

    /**
     * Adds an :type: join (by default type - INNER) to the query
     *
     * @param string $model
     * @param string $conditions
     * @param string $alias
     * @param string $type
     * @return \Phalcon\Mvc\Model\Query\BuilderInterface
     */
    public function join(string $model, $conditions = null, $alias = null, $type = null);

    /**
     * Adds an INNER join to the query
     *
     * @param string $model
     * @param string $conditions
     * @param string $alias
     * @param string $type
     * @return \Phalcon\Mvc\Model\Query\Builder
     */
    public function innerJoin(string $model, $conditions = null, $alias = null);

    /**
     * Adds a LEFT join to the query
     *
     * @param string $model
     * @param string $conditions
     * @param string $alias
     * @return \Phalcon\Mvc\Model\Query\Builder
     */
    public function leftJoin(string $model, $conditions = null, $alias = null);

    /**
     * Adds a RIGHT join to the query
     *
     * @param string $model
     * @param string $conditions
     * @param string $alias
     * @return \Phalcon\Mvc\Model\Query\Builder
     */
    public function rightJoin(string $model, $conditions = null, $alias = null);

    /**
     * Return join parts of the query
     *
     * @return array
     */
    public function getJoins();

    /**
     * Sets conditions for the query
     *
     * @param string $conditions
     * @param array $bindParams
     * @param array $bindTypes
     * @return \Phalcon\Mvc\Model\Query\BuilderInterface
     */
    public function where($conditions, $bindParams = null, $bindTypes = null);

    /**
     * Appends a condition to the current conditions using a AND operator
     *
     * @param string $conditions
     * @param array $bindParams
     * @param array $bindTypes
     * @return \Phalcon\Mvc\Model\Query\Builder
     */
    public function andWhere(string $conditions, $bindParams = null, $bindTypes = null);

    /**
     * Appends a condition to the current conditions using an OR operator
     *
     * @param string $conditions
     * @param array $bindParams
     * @param array $bindTypes
     * @return \Phalcon\Mvc\Model\Query\Builder
     */
    public function orWhere(string $conditions, $bindParams = null, $bindTypes = null);

    /**
     * Appends a BETWEEN condition to the current conditions
     *
     * @param string $expr
     * @param mixed $minimum
     * @param mixed $maximum
     * @return \Phalcon\Mvc\Model\Query\Builder
     * @param string $operator
     */
    public function betweenWhere(string $expr, $minimum, $maximum, string $operator = BuilderInterface::OPERATOR_AND);

    /**
     * Appends a NOT BETWEEN condition to the current conditions
     *
     * @param string $expr
     * @param mixed $minimum
     * @param mixed $maximum
     * @return \Phalcon\Mvc\Model\Query\Builder
     * @param string $operator
     */
    public function notBetweenWhere(string $expr, $minimum, $maximum, string $operator = BuilderInterface::OPERATOR_AND);

    /**
     * Appends an IN condition to the current conditions
     *
     * @param string $expr
     * @param array $values
     * @param string $operator
     * @return BuilderInterface
     */
    public function inWhere(string $expr, array $values, string $operator = BuilderInterface::OPERATOR_AND): BuilderInterface;

    /**
     * Appends a NOT IN condition to the current conditions
     *
     * @param string $expr
     * @param array $values
     * @param string $operator
     * @return BuilderInterface
     */
    public function notInWhere(string $expr, array $values, string $operator = BuilderInterface::OPERATOR_AND): BuilderInterface;

    /**
     * Return the conditions for the query
     *
     * @return string|array
     */
    public function getWhere();

    /**
     * Sets an ORDER BY condition clause
     *
     * @param string $orderBy
     * @return \Phalcon\Mvc\Model\Query\BuilderInterface
     */
    public function orderBy($orderBy);

    /**
     * Return the set ORDER BY clause
     *
     * @return string|array
     */
    public function getOrderBy();

    /**
     * Sets a HAVING condition clause
     *
     * @param string $having
     * @return \Phalcon\Mvc\Model\Query\BuilderInterface
     */
    public function having($having);

    /**
     * Returns the HAVING condition clause
     *
     * @return string|array
     */
    public function getHaving();

    /**
     * Sets a LIMIT clause
     *
     * @param int $limit
     * @param int $offset
     * @return \Phalcon\Mvc\Model\Query\BuilderInterface
     */
    public function limit(int $limit, $offset = null);

    /**
     * Returns the current LIMIT clause
     *
     * @return string|array
     */
    public function getLimit();

    /**
     * Sets a LIMIT clause
     *
     * @param string $group
     * @return \Phalcon\Mvc\Model\Query\BuilderInterface
     */
    public function groupBy($group);

    /**
     * Returns the GROUP BY clause
     *
     * @return string
     */
    public function getGroupBy();

    /**
     * Returns a PHQL statement built based on the builder parameters
     *
     * @return string
     */
    public function getPhql();

    /**
     * Returns the query built
     *
     * @return \Phalcon\Mvc\Model\QueryInterface
     */
    public function getQuery();

}
