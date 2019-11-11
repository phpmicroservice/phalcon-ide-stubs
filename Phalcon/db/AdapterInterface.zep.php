<?php

namespace Phalcon\Db;

/**
 * Phalcon\Db\AdapterInterface
 *
 * Interface for Phalcon\Db adapters
 */
interface AdapterInterface
{

    /**
     * Returns the first row in a SQL query result
     *
     * @param string $sqlQuery
     * @param int $fetchMode
     * @param int $placeholders
     * @return array
     */
    public function fetchOne(string $sqlQuery, $fetchMode = 2, $placeholders = null);

    /**
     * Dumps the complete result of a query into an array
     *
     * @param string $sqlQuery
     * @param int $fetchMode
     * @param int $placeholders
     * @return array
     */
    public function fetchAll(string $sqlQuery, $fetchMode = 2, $placeholders = null);

    /**
     * Inserts data into a table using custom RDBMS SQL syntax
     *
     * @param string $table
     * @param array $values
     * @param array $fields
     * @param array $dataTypes
     * @return 	boolean
     */
    public function insert($table, array $values, $fields = null, $dataTypes = null);

    /**
     * Updates data on a table using custom RDBMS SQL syntax
     *
     * @param string $table
     * @param array $fields
     * @param array $values
     * @param string $whereCondition
     * @param array $dataTypes
     * @return 	boolean
     */
    public function update($table, $fields, $values, $whereCondition = null, $dataTypes = null);

    /**
     * Deletes data from a table using custom RDBMS SQL syntax
     *
     * @param string $table
     * @param string $whereCondition
     * @param array $placeholders
     * @param array $dataTypes
     * @return boolean
     */
    public function delete($table, $whereCondition = null, $placeholders = null, $dataTypes = null);

    /**
     * Gets a list of columns
     *
     * @param array $columnList
     * @return	string
     */
    public function getColumnList($columnList);

    /**
     * Appends a LIMIT clause to sqlQuery argument
     *
     * @param string $sqlQuery
     * @param int $number
     * @return 	string
     */
    public function limit(string $sqlQuery, int $number);

    /**
     * Generates SQL checking for the existence of a schema.table
     *
     * @param string $tableName
     * @param string $schemaName
     * @return bool
     */
    public function tableExists(string $tableName, string $schemaName = null): bool;

    /**
     * Generates SQL checking for the existence of a schema.view
     *
     * @param string $viewName
     * @param string $schemaName
     * @return bool
     */
    public function viewExists(string $viewName, string $schemaName = null): bool;

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
     * Creates a table
     *
     * @param string $tableName
     * @param string $schemaName
     * @param array $definition
     * @return bool
     */
    public function createTable(string $tableName, string $schemaName, array $definition): bool;

    /**
     * Drops a table from a schema/database
     *
     * @param string $tableName
     * @param string $schemaName
     * @param bool $ifExists
     * @return bool
     */
    public function dropTable(string $tableName, string $schemaName = null, bool $ifExists = true): bool;

    /**
     * Creates a view
     *
     * @param string $viewName
     * @param array $definition
     * @param string $schemaName
     * @return bool
     */
    public function createView(string $viewName, array $definition, string $schemaName = null): bool;

    /**
     * Drops a view
     *
     * @param string $viewName
     * @param string $schemaName
     * @param bool $ifExists
     * @return bool
     */
    public function dropView(string $viewName, string $schemaName = null, bool $ifExists = true): bool;

    /**
     * Adds a column to a table
     *
     * @param string $tableName
     * @param string $schemaName
     * @param ColumnInterface $column
     * @return bool
     */
    public function addColumn(string $tableName, string $schemaName, ColumnInterface $column): bool;

    /**
     * Modifies a table column based on a definition
     *
     * @param string $tableName
     * @param string $schemaName
     * @param ColumnInterface $column
     * @param ColumnInterface $currentColumn
     * @return bool
     */
    public function modifyColumn(string $tableName, string $schemaName, ColumnInterface $column, ColumnInterface $currentColumn = null): bool;

    /**
     * Drops a column from a table
     *
     * @param string $tableName
     * @param string $schemaName
     * @param string $columnName
     * @return bool
     */
    public function dropColumn(string $tableName, string $schemaName, string $columnName): bool;

    /**
     * Adds an index to a table
     *
     * @param string $tableName
     * @param string $schemaName
     * @param IndexInterface $index
     * @return bool
     */
    public function addIndex(string $tableName, string $schemaName, IndexInterface $index): bool;

    /**
     * Drop an index from a table
     *
     * @param string $tableName
     * @param string $schemaName
     * @param string $indexName
     * @return bool
     */
    public function dropIndex(string $tableName, string $schemaName, string $indexName): bool;

    /**
     * Adds a primary key to a table
     *
     * @param string $tableName
     * @param string $schemaName
     * @param IndexInterface $index
     * @return bool
     */
    public function addPrimaryKey(string $tableName, string $schemaName, IndexInterface $index): bool;

    /**
     * Drops primary key from a table
     *
     * @param string $tableName
     * @param string $schemaName
     * @return bool
     */
    public function dropPrimaryKey(string $tableName, string $schemaName): bool;

    /**
     * Adds a foreign key to a table
     *
     * @param string $tableName
     * @param string $schemaName
     * @param ReferenceInterface $reference
     * @return bool
     */
    public function addForeignKey(string $tableName, string $schemaName, ReferenceInterface $reference): bool;

    /**
     * Drops a foreign key from a table
     *
     * @param string $tableName
     * @param string $schemaName
     * @param string $referenceName
     * @return bool
     */
    public function dropForeignKey(string $tableName, string $schemaName, string $referenceName): bool;

    /**
     * Returns the SQL column definition from a column
     *
     * @param ColumnInterface $column
     * @return string
     */
    public function getColumnDefinition(ColumnInterface $column): string;

    /**
     * List all tables on a database
     *
     * @param string $schemaName
     * @return array
     */
    public function listTables(string $schemaName = null): array;

    /**
     * List all views on a database
     *
     * @param string $schemaName
     * @return array
     */
    public function listViews(string $schemaName = null): array;

    /**
     * Return descriptor used to connect to the active database
     *
     * @return array
     */
    public function getDescriptor();

    /**
     * Gets the active connection unique identifier
     *
     * @return string
     */
    public function getConnectionId();

    /**
     * Active SQL statement in the object
     *
     * @return string
     */
    public function getSQLStatement(): string;

    /**
     * Active SQL statement in the object without replace bound parameters
     *
     * @return string
     */
    public function getRealSQLStatement(): string;

    /**
     * Active SQL statement in the object
     *
     * @return array
     */
    public function getSQLVariables();

    /**
     * Active SQL statement in the object
     *
     * @return array
     */
    public function getSQLBindTypes();

    /**
     * Returns type of database system the adapter is used for
     *
     * @return string
     */
    public function getType();

    /**
     * Returns the name of the dialect used
     *
     * @return string
     */
    public function getDialectType();

    /**
     * Returns internal dialect instance
     *
     * @return DialectInterface
     */
    public function getDialect(): DialectInterface;

    /**
     * This method is automatically called in \Phalcon\Db\Adapter\Pdo constructor.
     * Call it when you need to restore a database connection
     *
     * @param array $descriptor
     * @return bool
     */
    public function connect(array $descriptor = null): bool;

    /**
     * Sends SQL statements to the database server returning the success state.
     * Use this method only when the SQL statement sent to the server return rows
     *
     * @param string $sqlStatement
     * @param mixed $placeholders
     * @param mixed $dataTypes
     * @return bool|ResultInterface
     */
    public function query(string $sqlStatement, $placeholders = null, $dataTypes = null);

    /**
     * Sends SQL statements to the database server returning the success state.
     * Use this method only when the SQL statement sent to the server doesn't return any rows
     *
     * @param string $sqlStatement
     * @param mixed $placeholders
     * @param mixed $dataTypes
     * @return bool
     */
    public function execute(string $sqlStatement, $placeholders = null, $dataTypes = null): bool;

    /**
     * Returns the number of affected rows by the last INSERT/UPDATE/DELETE reported by the database system
     *
     * @return int
     */
    public function affectedRows(): int;

    /**
     * Closes active connection returning success. Phalcon automatically closes
     * and destroys active connections within Phalcon\Db\Pool
     *
     * @return bool
     */
    public function close(): bool;

    /**
     * Escapes a column/table/schema name
     *
     * @param string $identifier
     * @return string
     */
    public function escapeIdentifier($identifier): string;

    /**
     * Escapes a value to avoid SQL injections
     *
     * @param string $str
     * @return string
     */
    public function escapeString(string $str): string;

    /**
     * Returns insert id for the auto_increment column inserted in the last SQL statement
     *
     * @param string $sequenceName
     * @return int
     */
    public function lastInsertId($sequenceName = null);

    /**
     * Starts a transaction in the connection
     *
     * @param bool $nesting
     * @return bool
     */
    public function begin(bool $nesting = true): bool;

    /**
     * Rollbacks the active transaction in the connection
     *
     * @param bool $nesting
     * @return bool
     */
    public function rollback(bool $nesting = true): bool;

    /**
     * Commits the active transaction in the connection
     *
     * @param bool $nesting
     * @return bool
     */
    public function commit(bool $nesting = true): bool;

    /**
     * Checks whether connection is under database transaction
     *
     * @return bool
     */
    public function isUnderTransaction(): bool;

    /**
     * Return internal PDO handler
     *
     * @return \Pdo
     */
    public function getInternalHandler(): \Pdo;

    /**
     * Lists table indexes
     *
     * @param string $table
     * @param string $schema
     * @return array|IndexInterface[]
     */
    public function describeIndexes(string $table, string $schema = null): array;

    /**
     * Lists table references
     *
     * @param string $table
     * @param string $schema
     * @return array|ReferenceInterface[]
     */
    public function describeReferences(string $table, string $schema = null): array;

    /**
     * Gets creation options from a table
     *
     * @param string $tableName
     * @param string $schemaName
     * @return array
     */
    public function tableOptions(string $tableName, string $schemaName = null): array;

    /**
     * Check whether the database system requires an explicit value for identity columns
     *
     * @return bool
     */
    public function useExplicitIdValue(): bool;

    /**
     * Return the default identity value to insert in an identity column
     *
     * @return RawValue
     */
    public function getDefaultIdValue(): RawValue;

    /**
     * Check whether the database system requires a sequence to produce auto-numeric values
     *
     * @return bool
     */
    public function supportSequences(): bool;

    /**
     * Creates a new savepoint
     *
     * @param string $name
     * @return bool
     */
    public function createSavepoint(string $name): bool;

    /**
     * Releases given savepoint
     *
     * @param string $name
     * @return bool
     */
    public function releaseSavepoint(string $name): bool;

    /**
     * Rollbacks given savepoint
     *
     * @param string $name
     * @return bool
     */
    public function rollbackSavepoint(string $name): bool;

    /**
     * Set if nested transactions should use savepoints
     *
     * @param bool $nestedTransactionsWithSavepoints
     * @return AdapterInterface
     */
    public function setNestedTransactionsWithSavepoints(bool $nestedTransactionsWithSavepoints): AdapterInterface;

    /**
     * Returns if nested transactions should use savepoints
     *
     * @return bool
     */
    public function isNestedTransactionsWithSavepoints(): bool;

    /**
     * Returns the savepoint name to use for nested transactions
     *
     * @return string
     */
    public function getNestedTransactionSavepointName(): string;

    /**
     * Returns an array of Phalcon\Db\Column objects describing a table
     *
     * @param string $table
     * @param string $schema
     * @return array|ColumnInterface[]
     */
    public function describeColumns(string $table, string $schema = null): array;

}
