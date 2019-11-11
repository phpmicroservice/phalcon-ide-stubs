<?php

namespace Phalcon\Db;

/**
 * Phalcon\Db\Dialect
 *
 * This is the base class to each database dialect. This implements
 * common methods to transform intermediate code into its RDBMS related syntax
 */
abstract class Dialect implements Phalcon\Db\DialectInterface
{

    protected $_escapeChar;


    protected $_customFunctions;


    /**
     * Registers custom SQL functions
     *
     * @param string $name
     * @param callable $customFunction
     * @return Dialect
     */
    public function registerCustomFunction(string $name, $customFunction): Dialect
    {
    }

    /**
     * Returns registered functions
     *
     * @return array
     */
    public function getCustomFunctions(): array
    {
    }

    /**
     * Escape Schema
     *
     * @param string $str
     * @param string $escapeChar
     * @return string
     */
    public final function escapeSchema(string $str, string $escapeChar = null): string
    {
    }

    /**
     * Escape identifiers
     *
     * @param string $str
     * @param string $escapeChar
     * @return string
     */
    public final function escape(string $str, string $escapeChar = null): string
    {
    }

    /**
     * Generates the SQL for LIMIT clause
     *
     * <code>
     * $sql = $dialect->limit("SELECT FROM robots", 10);
     * echo $sql; // SELECT FROM robots LIMIT 10
     *
     * $sql = $dialect->limit("SELECT FROM robots", [10, 50]);
     * echo $sql; // SELECT FROM robots LIMIT 10 OFFSET 50
     * </code>
     *
     * @param string $sqlQuery
     * @param mixed $number
     * @return string
     */
    public function limit(string $sqlQuery, $number): string
    {
    }

    /**
     * Returns a SQL modified with a FOR UPDATE clause
     *
     * <code>
     * $sql = $dialect->forUpdate("SELECT FROM robots");
     * echo $sql; // SELECT FROM robots FOR UPDATE
     * </code>
     *
     * @param string $sqlQuery
     * @return string
     */
    public function forUpdate(string $sqlQuery): string
    {
    }

    /**
     * Gets a list of columns with escaped identifiers
     *
     * <code>
     * echo $dialect->getColumnList(
     *     [
     *         "column1",
     *         "column",
     *     ]
     * );
     * </code>
     *
     * @param array $columnList
     * @param string $escapeChar
     * @param mixed $bindCounts
     * @return string
     */
    public final function getColumnList(array $columnList, string $escapeChar = null, $bindCounts = null): string
    {
    }

    /**
     * Resolve Column expressions
     *
     * @param mixed $column
     * @param string $escapeChar
     * @param mixed $bindCounts
     * @return string
     */
    public final function getSqlColumn($column, string $escapeChar = null, $bindCounts = null): string
    {
    }

    /**
     * Transforms an intermediate representation for an expression into a database system valid expression
     *
     * @param array $expression
     * @param string $escapeChar
     * @param mixed $bindCounts
     * @return string
     */
    public function getSqlExpression(array $expression, string $escapeChar = null, $bindCounts = null): string
    {
    }

    /**
     * Transform an intermediate representation of a schema/table into a database system valid expression
     *
     * @param mixed $table
     * @param string $escapeChar
     * @return string
     */
    public final function getSqlTable($table, string $escapeChar = null): string
    {
    }

    /**
     * Builds a SELECT statement
     *
     * @param array $definition
     * @return string
     */
    public function select(array $definition): string
    {
    }

    /**
     * Checks whether the platform supports savepoints
     *
     * @return bool
     */
    public function supportsSavepoints(): bool
    {
    }

    /**
     * Checks whether the platform supports releasing savepoints.
     *
     * @return bool
     */
    public function supportsReleaseSavepoints(): bool
    {
    }

    /**
     * Generate SQL to create a new savepoint
     *
     * @param string $name
     * @return string
     */
    public function createSavepoint(string $name): string
    {
    }

    /**
     * Generate SQL to release a savepoint
     *
     * @param string $name
     * @return string
     */
    public function releaseSavepoint(string $name): string
    {
    }

    /**
     * Generate SQL to rollback a savepoint
     *
     * @param string $name
     * @return string
     */
    public function rollbackSavepoint(string $name): string
    {
    }

    /**
     * Resolve Column expressions
     *
     * @param array $expression
     * @param string $escapeChar
     * @param mixed $bindCounts
     * @return string
     */
    protected final function getSqlExpressionScalar(array $expression, string $escapeChar = null, $bindCounts = null): string
    {
    }

    /**
     * Resolve object expressions
     *
     * @param array $expression
     * @param string $escapeChar
     * @param mixed $bindCounts
     * @return string
     */
    protected final function getSqlExpressionObject(array $expression, string $escapeChar = null, $bindCounts = null): string
    {
    }

    /**
     * Resolve qualified expressions
     *
     * @param array $expression
     * @param string $escapeChar
     * @return string
     */
    protected final function getSqlExpressionQualified(array $expression, string $escapeChar = null): string
    {
    }

    /**
     * Resolve binary operations expressions
     *
     * @param array $expression
     * @param string $escapeChar
     * @param mixed $bindCounts
     * @return string
     */
    protected final function getSqlExpressionBinaryOperations(array $expression, string $escapeChar = null, $bindCounts = null): string
    {
    }

    /**
     * Resolve unary operations expressions
     *
     * @param array $expression
     * @param string $escapeChar
     * @param mixed $bindCounts
     * @return string
     */
    protected final function getSqlExpressionUnaryOperations(array $expression, string $escapeChar = null, $bindCounts = null): string
    {
    }

    /**
     * Resolve function calls
     *
     * @param array $expression
     * @param string $escapeChar
     * @param mixed $bindCounts
     * @return string
     */
    protected final function getSqlExpressionFunctionCall(array $expression, string $escapeChar = null, $bindCounts): string
    {
    }

    /**
     * Resolve Lists
     *
     * @param array $expression
     * @param string $escapeChar
     * @param mixed $bindCounts
     * @return string
     */
    protected final function getSqlExpressionList(array $expression, string $escapeChar = null, $bindCounts = null): string
    {
    }

    /**
     * Resolve
     *
     * @param array $expression
     * @param string $escapeChar
     * @return string
     */
    protected final function getSqlExpressionAll(array $expression, string $escapeChar = null): string
    {
    }

    /**
     * Resolve CAST of values
     *
     * @param array $expression
     * @param string $escapeChar
     * @param mixed $bindCounts
     * @return string
     */
    protected final function getSqlExpressionCastValue(array $expression, string $escapeChar = null, $bindCounts = null): string
    {
    }

    /**
     * Resolve CONVERT of values encodings
     *
     * @param array $expression
     * @param string $escapeChar
     * @param mixed $bindCounts
     * @return string
     */
    protected final function getSqlExpressionConvertValue(array $expression, string $escapeChar = null, $bindCounts = null): string
    {
    }

    /**
     * Resolve CASE expressions
     *
     * @param array $expression
     * @param string $escapeChar
     * @param mixed $bindCounts
     * @return string
     */
    protected final function getSqlExpressionCase(array $expression, string $escapeChar = null, $bindCounts = null): string
    {
    }

    /**
     * Resolve a FROM clause
     *
     * @param mixed $expression
     * @param string $escapeChar
     * @return string
     */
    protected final function getSqlExpressionFrom($expression, string $escapeChar = null): string
    {
    }

    /**
     * Resolve a JOINs clause
     *
     * @param mixed $expression
     * @param string $escapeChar
     * @param mixed $bindCounts
     * @return string
     */
    protected final function getSqlExpressionJoins($expression, string $escapeChar = null, $bindCounts = null): string
    {
    }

    /**
     * Resolve a WHERE clause
     *
     * @param mixed $expression
     * @param string $escapeChar
     * @param mixed $bindCounts
     * @return string
     */
    protected final function getSqlExpressionWhere($expression, string $escapeChar = null, $bindCounts = null): string
    {
    }

    /**
     * Resolve a GROUP BY clause
     *
     * @param mixed $expression
     * @param string $escapeChar
     * @param mixed $bindCounts
     * @return string
     */
    protected final function getSqlExpressionGroupBy($expression, string $escapeChar = null, $bindCounts = null): string
    {
    }

    /**
     * Resolve a HAVING clause
     *
     * @param array $expression
     * @param string $escapeChar
     * @param mixed $bindCounts
     * @return string
     */
    protected final function getSqlExpressionHaving(array $expression, string $escapeChar = null, $bindCounts = null): string
    {
    }

    /**
     * Resolve an ORDER BY clause
     *
     * @param mixed $expression
     * @param string $escapeChar
     * @param mixed $bindCounts
     * @return string
     */
    protected final function getSqlExpressionOrderBy($expression, string $escapeChar = null, $bindCounts = null): string
    {
    }

    /**
     * Resolve a LIMIT clause
     *
     * @param mixed $expression
     * @param string $escapeChar
     * @param mixed $bindCounts
     * @return string
     */
    protected final function getSqlExpressionLimit($expression, string $escapeChar = null, $bindCounts = null): string
    {
    }

    /**
     * Prepares column for this RDBMS
     *
     * @param string $qualified
     * @param string $alias
     * @param string $escapeChar
     * @return string
     */
    protected function prepareColumnAlias(string $qualified, string $alias = null, string $escapeChar = null): string
    {
    }

    /**
     * Prepares table for this RDBMS
     *
     * @param string $table
     * @param string $schema
     * @param string $alias
     * @param string $escapeChar
     * @return string
     */
    protected function prepareTable(string $table, string $schema = null, string $alias = null, string $escapeChar = null): string
    {
    }

    /**
     * Prepares qualified for this RDBMS
     *
     * @param string $column
     * @param string $domain
     * @param string $escapeChar
     * @return string
     */
    protected function prepareQualified(string $column, string $domain = null, string $escapeChar = null): string
    {
    }

}
