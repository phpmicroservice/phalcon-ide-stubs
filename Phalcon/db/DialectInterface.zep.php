<?php

namespace Phalcon\Db;

use Phalcon\Db\ColumnInterface;
use Phalcon\Db\ReferenceInterface;
use Phalcon\Db\IndexInterface;

/**
 * Phalcon\Db\DialectInterface
 *
 * Interface for Phalcon\Db dialects
 */
interface DialectInterface
{

    /**
     * Generates the SQL for LIMIT clause
     *
     * @param string $sqlQuery
     * @param mixed $number
     * @return string
     */
    public function limit(string $sqlQuery, $number): string;

    /**
     * Returns a SQL modified with a FOR UPDATE clause
     *
     * @param string $sqlQuery
     * @return string
     */
    public function forUpdate(string $sqlQuery): string;

    /**
     * Returns a SQL modified with a LOCK IN SHARE MODE clause
     *
     * @param string $sqlQuery
     * @return string
     */
    public function sharedLock(string $sqlQuery): string;

    /**
     * Builds a SELECT statement
     *
     * @param array $definition
     * @return string
     */
    public function select(array $definition): string;

    /**
     * Gets a list of columns
     *
     * @param array $columnList
     * @return string
     */
    public function getColumnList(array $columnList): string;

    /**
     * Gets the column name in RDBMS
     *
     * @param \Phalcon\Db\ColumnInterface $column
     * @return string
     */
    public function getColumnDefinition(\Phalcon\Db\ColumnInterface $column): string;

    /**
     * Generates SQL to add a column to a table
     *
     * @param string $tableName
     * @param string $schemaName
     * @param \Phalcon\Db\ColumnInterface $column
     * @return string
     */
    public function addColumn(string $tableName, string $schemaName, \Phalcon\Db\ColumnInterface $column): string;

    /**
     * Generates SQL to modify a column in a table
     *
     * @param string $tableName
     * @param string $schemaName
     * @param \Phalcon\Db\ColumnInterface $column
     * @param \Phalcon\Db\ColumnInterface $currentColumn
     * @return string
     */
    public function modifyColumn(string $tableName, string $schemaName, \Phalcon\Db\ColumnInterface $column, \Phalcon\Db\ColumnInterface $currentColumn = null): string;

    /**
     * Generates SQL to delete a column from a table
     *
     * @param string $tableName
     * @param string $schemaName
     * @param string $columnName
     * @return string
     */
    public function dropColumn(string $tableName, string $schemaName, string $columnName): string;

    /**
     * Generates SQL to add an index to a table
     *
     * @param string $tableName
     * @param string $schemaName
     * @param \Phalcon\Db\IndexInterface $index
     * @return string
     */
    public function addIndex(string $tableName, string $schemaName, \Phalcon\Db\IndexInterface $index): string;

    /**
     * Generates SQL to delete an index from a table
     *
     * @param string $tableName
     * @param string $schemaName
     * @param string $indexName
     * @return string
     */
    public function dropIndex(string $tableName, string $schemaName, string $indexName): string;

    /**
     * Generates SQL to add the primary key to a table
     *
     * @param string $tableName
     * @param string $schemaName
     * @param \Phalcon\Db\IndexInterface $index
     * @return string
     */
    public function addPrimaryKey(string $tableName, string $schemaName, \Phalcon\Db\IndexInterface $index): string;

    /**
     * Generates SQL to delete primary key from a table
     *
     * @param string $tableName
     * @param string $schemaName
     * @return string
     */
    public function dropPrimaryKey(string $tableName, string $schemaName): string;

    /**
     * Generates SQL to add an index to a table
     *
     * @param string $tableName
     * @param string $schemaName
     * @param \Phalcon\Db\ReferenceInterface $reference
     * @return string
     */
    public function addForeignKey(string $tableName, string $schemaName, \Phalcon\Db\ReferenceInterface $reference): string;

    /**
     * Generates SQL to delete a foreign key from a table
     *
     * @param string $tableName
     * @param string $schemaName
     * @param string $referenceName
     * @return string
     */
    public function dropForeignKey(string $tableName, string $schemaName, string $referenceName): string;

    /**
     * Generates SQL to create a table
     *
     * @param string $tableName
     * @param string $schemaName
     * @param array $definition
     */
    public function createTable(string $tableName, string $schemaName, array $definition);

    /**
     * Generates SQL to create a view
     *
     * @param string $viewName
     * @param array $definition
     * @param string $schemaName
     * @return string
     */
    public function createView(string $viewName, array $definition, string $schemaName = null): string;

    /**
     * Generates SQL to drop a table
     *
     * @param string $tableName
     * @param string $schemaName
     * @return string
     */
    public function dropTable(string $tableName, string $schemaName): string;

    /**
     * Generates SQL to drop a view
     *
     * @param string $viewName
     * @param string $schemaName
     * @param bool $ifExists
     * @return string
     */
    public function dropView(string $viewName, string $schemaName = null, bool $ifExists = true): string;

    /**
     * Generates SQL checking for the existence of a schema.table
     *
     * @param string $tableName
     * @param string $schemaName
     * @return string
     */
    public function tableExists(string $tableName, string $schemaName = null): string;

    /**
     * Generates SQL checking for the existence of a schema.view
     *
     * @param string $viewName
     * @param string $schemaName
     * @return string
     */
    public function viewExists(string $viewName, string $schemaName = null): string;

    /**
     * Generates SQL to describe a table
     *
     * @param string $table
     * @param string $schema
     * @return string
     */
    public function describeColumns(string $table, string $schema = null): string;

    /**
     * List all tables in database
     *
     * @param string $schemaName
     * @return string
     */
    public function listTables(string $schemaName = null): string;

    /**
     * Generates SQL to query indexes on a table
     *
     * @param string $table
     * @param string $schema
     * @return string
     */
    public function describeIndexes(string $table, string $schema = null): string;

    /**
     * Generates SQL to query foreign keys on a table
     *
     * @param string $table
     * @param string $schema
     * @return string
     */
    public function describeReferences(string $table, string $schema = null): string;

    /**
     * Generates the SQL to describe the table creation options
     *
     * @param string $table
     * @param string $schema
     * @return string
     */
    public function tableOptions(string $table, string $schema = null): string;

    /**
     * Checks whether the platform supports savepoints
     *
     * @return bool
     */
    public function supportsSavepoints(): bool;

    /**
     * Checks whether the platform supports releasing savepoints.
     *
     * @return bool
     */
    public function supportsReleaseSavepoints(): bool;

    /**
     * Generate SQL to create a new savepoint
     *
     * @param string $name
     * @return string
     */
    public function createSavepoint(string $name): string;

    /**
     * Generate SQL to release a savepoint
     *
     * @param string $name
     * @return string
     */
    public function releaseSavepoint(string $name): string;

    /**
     * Generate SQL to rollback a savepoint
     *
     * @param string $name
     * @return string
     */
    public function rollbackSavepoint(string $name): string;

}
