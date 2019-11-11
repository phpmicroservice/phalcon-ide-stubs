<?php

namespace Phalcon\Db;

use Phalcon\Db;
use Phalcon\Db\ColumnInterface;
use Phalcon\Events\EventsAwareInterface;
use Phalcon\Events\ManagerInterface;

/**
 * Phalcon\Db\Adapter
 *
 * Base class for Phalcon\Db adapters
 */
abstract class Adapter implements Phalcon\Db\AdapterInterface, \Phalcon\Events\EventsAwareInterface
{
    /**
     * Event Manager
     *
     * @var Phalcon\Events\Manager
     */
    protected $_eventsManager;

    /**
     * Descriptor used to connect to a database
     */
    protected $_descriptor = array();

    /**
     * Name of the dialect used
     */
    protected $_dialectType;

    /**
     * Type of database system the adapter is used for
     */
    protected $_type;

    /**
     * Dialect instance
     */
    protected $_dialect;

    /**
     * Active connection ID
     *
     * @var long
     */
    protected $_connectionId;

    /**
     * Active SQL Statement
     *
     * @var string
     */
    protected $_sqlStatement;

    /**
     * Active SQL bound parameter variables
     *
     * @var array
     */
    protected $_sqlVariables;

    /**
     * Active SQL Bind Types
     *
     * @var array
     */
    protected $_sqlBindTypes;

    /**
     * Current transaction level
     */
    protected $_transactionLevel = 0;

    /**
     * Whether the database supports transactions with save points
     */
    protected $_transactionsWithSavepoints = false;

    /**
     * Connection ID
     */
    static protected $_connectionConsecutive = 0;


    /**
     * Name of the dialect used
     */
    public function getDialectType()
    {
    }

    /**
     * Type of database system the adapter is used for
     */
    public function getType()
    {
    }

    /**
     * Active SQL bound parameter variables
     *
     * @return array
     */
    public function getSqlVariables(): array
    {
    }

    /**
     * Phalcon\Db\Adapter constructor
     *
     * @param array $descriptor
     */
    public function __construct(array $descriptor)
    {
    }

    /**
     * Sets the event manager
     *
     * @param \Phalcon\Events\ManagerInterface $eventsManager
     */
    public function setEventsManager(\Phalcon\Events\ManagerInterface $eventsManager)
    {
    }

    /**
     * Returns the internal event manager
     *
     * @return ManagerInterface
     */
    public function getEventsManager(): ManagerInterface
    {
    }

    /**
     * Sets the dialect used to produce the SQL
     *
     * @param DialectInterface $dialect
     */
    public function setDialect(DialectInterface $dialect)
    {
    }

    /**
     * Returns internal dialect instance
     *
     * @return DialectInterface
     */
    public function getDialect(): DialectInterface
    {
    }

    /**
     * Returns the first row in a SQL query result
     *
     * <code>
     * // Getting first robot
     * $robot = $connection->fetchOne("SELECT FROM robots");
     * print_r($robot);
     *
     * // Getting first robot with associative indexes only
     * $robot = $connection->fetchOne("SELECT FROM robots", \Phalcon\Db::FETCH_ASSOC);
     * print_r($robot);
     * </code>
     *
     * @param string $sqlQuery
     * @param mixed $fetchMode
     * @param mixed $bindParams
     * @param mixed $bindTypes
     * @return array
     */
    public function fetchOne(string $sqlQuery, $fetchMode = Db::FETCH_ASSOC, $bindParams = null, $bindTypes = null): array
    {
    }

    /**
     * Dumps the complete result of a query into an array
     *
     * <code>
     * // Getting all robots with associative indexes only
     * $robots = $connection->fetchAll(
     *     "SELECT FROM robots",
     *     \Phalcon\Db::FETCH_ASSOC
     * );
     *
     * foreach ($robots as $robot) {
     *     print_r($robot);
     * }
     *
     *  // Getting all robots that contains word "robot" withing the name
     * $robots = $connection->fetchAll(
     *     "SELECT FROM robots WHERE name LIKE :name",
     *     \Phalcon\Db::FETCH_ASSOC,
     *     [
     *         "name" => "%robot%",
     *     ]
     * );
     * foreach($robots as $robot) {
     *     print_r($robot);
     * }
     * </code>
     *
     * @param string $sqlQuery
     * @param int $fetchMode
     * @param array $bindParams
     * @param array $bindTypes
     * @return array
     */
    public function fetchAll(string $sqlQuery, $fetchMode = Db::FETCH_ASSOC, $bindParams = null, $bindTypes = null): array
    {
    }

    /**
     * Returns the n'th field of first row in a SQL query result
     *
     * <code>
     * // Getting count of robots
     * $robotsCount = $connection->fetchColumn("SELECT count() FROM robots");
     * print_r($robotsCount);
     *
     * // Getting name of last edited robot
     * $robot = $connection->fetchColumn(
     *     "SELECT id, name FROM robots order by modified desc",
     *     1
     * );
     * print_r($robot);
     * </code>
     *
     * @param string $sqlQuery
     * @param array $placeholders
     * @param int|string $column
     * @return string|
     */
    public function fetchColumn($sqlQuery, $placeholders = null, $column = 0)
    {
    }

    /**
     * Inserts data into a table using custom RDBMS SQL syntax
     *
     * <code>
     * // Inserting a new robot
     * $success = $connection->insert(
     *     "robots",
     *     ["Astro Boy", 1952],
     *     ["name", "year"]
     * );
     *
     * // Next SQL sentence is sent to the database system
     * INSERT INTO `robots` (`name`, `year`) VALUES ("Astro boy", 1952);
     * </code>
     *
     * @param string|array $table
     * @param array $values
     * @param array $fields
     * @param array $dataTypes
     * @return 	boolean
     */
    public function insert($table, array $values, $fields = null, $dataTypes = null): bool
    {
    }

    /**
     * Inserts data into a table using custom RBDM SQL syntax
     *
     * <code>
     * // Inserting a new robot
     * $success = $connection->insertAsDict(
     *     "robots",
     *     [
     *         "name" => "Astro Boy",
     *         "year" => 1952,
     *     ]
     * );
     *
     * // Next SQL sentence is sent to the database system
     * INSERT INTO `robots` (`name`, `year`) VALUES ("Astro boy", 1952);
     * </code>
     *
     * @param string $table
     * @param array $data
     * @param array $dataTypes
     * @return 	boolean
     */
    public function insertAsDict($table, $data, $dataTypes = null): bool
    {
    }

    /**
     * Updates data on a table using custom RBDM SQL syntax
     *
     * <code>
     * // Updating existing robot
     * $success = $connection->update(
     *     "robots",
     *     ["name"],
     *     ["New Astro Boy"],
     *     "id = 101"
     * );
     *
     * // Next SQL sentence is sent to the database system
     * UPDATE `robots` SET `name` = "Astro boy" WHERE id = 101
     *
     * // Updating existing robot with array condition and $dataTypes
     * $success = $connection->update(
     *     "robots",
     *     ["name"],
     *     ["New Astro Boy"],
     *     [
     *         "conditions" => "id = ?",
     *         "bind"       => [$some_unsafe_id],
     *         "bindTypes"  => [PDO::PARAM_INT], // use only if you use $dataTypes param
     *     ],
     *     [
     *         PDO::PARAM_STR
     *     ]
     * );
     *
     * </code>
     *
     * Warning! If $whereCondition is string it not escaped.
     *
     * @param string|array $table
     * @param array $fields
     * @param array $values
     * @param string|array $whereCondition
     * @param array $dataTypes
     * @return 	boolean
     */
    public function update($table, $fields, $values, $whereCondition = null, $dataTypes = null): bool
    {
    }

    /**
     * Updates data on a table using custom RBDM SQL syntax
     * Another, more convenient syntax
     *
     * <code>
     * // Updating existing robot
     * $success = $connection->updateAsDict(
     *     "robots",
     *     [
     *         "name" => "New Astro Boy",
     *     ],
     *     "id = 101"
     * );
     *
     * // Next SQL sentence is sent to the database system
     * UPDATE `robots` SET `name` = "Astro boy" WHERE id = 101
     * </code>
     *
     * @param string $table
     * @param array $data
     * @param string $whereCondition
     * @param array $dataTypes
     * @return 	boolean
     */
    public function updateAsDict($table, $data, $whereCondition = null, $dataTypes = null): bool
    {
    }

    /**
     * Deletes data from a table using custom RBDM SQL syntax
     *
     * <code>
     * // Deleting existing robot
     * $success = $connection->delete(
     *     "robots",
     *     "id = 101"
     * );
     *
     * // Next SQL sentence is generated
     * DELETE FROM `robots` WHERE `id` = 101
     * </code>
     *
     * @param string|array $table
     * @param string $whereCondition
     * @param array $placeholders
     * @param array $dataTypes
     * @return boolean
     */
    public function delete($table, $whereCondition = null, $placeholders = null, $dataTypes = null): bool
    {
    }

    /**
     * Escapes a column/table/schema name
     *
     * <code>
     * $escapedTable = $connection->escapeIdentifier(
     *     "robots"
     * );
     *
     * $escapedTable = $connection->escapeIdentifier(
     *     [
     *         "store",
     *         "robots",
     *     ]
     * );
     * </code>
     *
     * @param array|string $identifier
     * @return string
     */
    public function escapeIdentifier($identifier): string
    {
    }

    /**
     * Gets a list of columns
     *
     * @param array $columnList
     * @return	string
     */
    public function getColumnList($columnList): string
    {
    }

    /**
     * Appends a LIMIT clause to $sqlQuery argument
     *
     * <code>
     * echo $connection->limit("SELECT FROM robots", 5);
     * </code>
     *
     * @param string $sqlQuery
     * @param int $number
     * @return string
     */
    public function limit(string $sqlQuery, int $number): string
    {
    }

    /**
     * Generates SQL checking for the existence of a schema.table
     *
     * <code>
     * var_dump(
     *     $connection->tableExists("blog", "posts")
     * );
     * </code>
     *
     * @param string $tableName
     * @param string $schemaName
     * @return bool
     */
    public function tableExists(string $tableName, string $schemaName = null): bool
    {
    }

    /**
     * Generates SQL checking for the existence of a schema.view
     *
     * <code>
     * var_dump(
     *     $connection->viewExists("active_users", "posts")
     * );
     * </code>
     *
     * @param string $viewName
     * @param string $schemaName
     * @return bool
     */
    public function viewExists(string $viewName, string $schemaName = null): bool
    {
    }

    /**
     * Returns a SQL modified with a FOR UPDATE clause
     *
     * @param string $sqlQuery
     * @return string
     */
    public function forUpdate(string $sqlQuery): string
    {
    }

    /**
     * Returns a SQL modified with a LOCK IN SHARE MODE clause
     *
     * @param string $sqlQuery
     * @return string
     */
    public function sharedLock(string $sqlQuery): string
    {
    }

    /**
     * Creates a table
     *
     * @param string $tableName
     * @param string $schemaName
     * @param array $definition
     * @return bool
     */
    public function createTable(string $tableName, string $schemaName, array $definition): bool
    {
    }

    /**
     * Drops a table from a schema/database
     *
     * @param string $tableName
     * @param string $schemaName
     * @param bool $ifExists
     * @return bool
     */
    public function dropTable(string $tableName, string $schemaName = null, bool $ifExists = true): bool
    {
    }

    /**
     * Creates a view
     *
     * @param string $viewName
     * @param array $definition
     * @param string $schemaName
     * @return bool
     */
    public function createView(string $viewName, array $definition, string $schemaName = null): bool
    {
    }

    /**
     * Drops a view
     *
     * @param string $viewName
     * @param string $schemaName
     * @param bool $ifExists
     * @return bool
     */
    public function dropView(string $viewName, string $schemaName = null, bool $ifExists = true): bool
    {
    }

    /**
     * Adds a column to a table
     *
     * @param string $tableName
     * @param string $schemaName
     * @param \Phalcon\Db\ColumnInterface $column
     * @return bool
     */
    public function addColumn(string $tableName, string $schemaName, \Phalcon\Db\ColumnInterface $column): bool
    {
    }

    /**
     * Modifies a table column based on a definition
     *
     * @param string $tableName
     * @param string $schemaName
     * @param \Phalcon\Db\ColumnInterface $column
     * @param \Phalcon\Db\ColumnInterface $currentColumn
     * @return bool
     */
    public function modifyColumn(string $tableName, string $schemaName, \Phalcon\Db\ColumnInterface $column, \Phalcon\Db\ColumnInterface $currentColumn = null): bool
    {
    }

    /**
     * Drops a column from a table
     *
     * @param string $tableName
     * @param string $schemaName
     * @param string $columnName
     * @return bool
     */
    public function dropColumn(string $tableName, string $schemaName, string $columnName): bool
    {
    }

    /**
     * Adds an index to a table
     *
     * @param string $tableName
     * @param string $schemaName
     * @param IndexInterface $index
     * @return bool
     */
    public function addIndex(string $tableName, string $schemaName, IndexInterface $index): bool
    {
    }

    /**
     * Drop an index from a table
     *
     * @param string $tableName
     * @param string $schemaName
     * @param mixed $indexName
     * @return bool
     */
    public function dropIndex(string $tableName, string $schemaName, $indexName): bool
    {
    }

    /**
     * Adds a primary key to a table
     *
     * @param string $tableName
     * @param string $schemaName
     * @param IndexInterface $index
     * @return bool
     */
    public function addPrimaryKey(string $tableName, string $schemaName, IndexInterface $index): bool
    {
    }

    /**
     * Drops a table's primary key
     *
     * @param string $tableName
     * @param string $schemaName
     * @return bool
     */
    public function dropPrimaryKey(string $tableName, string $schemaName): bool
    {
    }

    /**
     * Adds a foreign key to a table
     *
     * @param string $tableName
     * @param string $schemaName
     * @param ReferenceInterface $reference
     * @return bool
     */
    public function addForeignKey(string $tableName, string $schemaName, ReferenceInterface $reference): bool
    {
    }

    /**
     * Drops a foreign key from a table
     *
     * @param string $tableName
     * @param string $schemaName
     * @param string $referenceName
     * @return bool
     */
    public function dropForeignKey(string $tableName, string $schemaName, string $referenceName): bool
    {
    }

    /**
     * Returns the SQL column definition from a column
     *
     * @param \Phalcon\Db\ColumnInterface $column
     * @return string
     */
    public function getColumnDefinition(\Phalcon\Db\ColumnInterface $column): string
    {
    }

    /**
     * List all tables on a database
     *
     * <code>
     * print_r(
     *     $connection->listTables("blog")
     * );
     * </code>
     *
     * @param string $schemaName
     * @return array
     */
    public function listTables(string $schemaName = null): array
    {
    }

    /**
     * List all views on a database
     *
     * <code>
     * print_r(
     *     $connection->listViews("blog")
     * );
     * </code>
     *
     * @param string $schemaName
     * @return array
     */
    public function listViews(string $schemaName = null): array
    {
    }

    /**
     * Lists table indexes
     *
     * <code>
     * print_r(
     *     $connection->describeIndexes("robots_parts")
     * );
     * </code>
     *
     * @param string $table
     * @param string $schema
     * @return	Phalcon\Db\Index[]
     */
    public function describeIndexes(string $table, string $schema = null): array
    {
    }

    /**
     * Lists table references
     *
     * <code>
     * print_r(
     *     $connection->describeReferences("robots_parts")
     * );
     * </code>
     *
     * @param string $table
     * @param string $schema
     * @return array|ReferenceInterface[]
     */
    public function describeReferences(string $table, string $schema = null): array
    {
    }

    /**
     * Gets creation options from a table
     *
     * <code>
     * print_r(
     *     $connection->tableOptions("robots")
     * );
     * </code>
     *
     * @param string $tableName
     * @param string $schemaName
     * @return array
     */
    public function tableOptions(string $tableName, string $schemaName = null): array
    {
    }

    /**
     * Creates a new savepoint
     *
     * @param string $name
     * @return bool
     */
    public function createSavepoint(string $name): bool
    {
    }

    /**
     * Releases given savepoint
     *
     * @param string $name
     * @return bool
     */
    public function releaseSavepoint(string $name): bool
    {
    }

    /**
     * Rollbacks given savepoint
     *
     * @param string $name
     * @return bool
     */
    public function rollbackSavepoint(string $name): bool
    {
    }

    /**
     * Set if nested transactions should use savepoints
     *
     * @param bool $nestedTransactionsWithSavepoints
     * @return AdapterInterface
     */
    public function setNestedTransactionsWithSavepoints(bool $nestedTransactionsWithSavepoints): AdapterInterface
    {
    }

    /**
     * Returns if nested transactions should use savepoints
     *
     * @return bool
     */
    public function isNestedTransactionsWithSavepoints(): bool
    {
    }

    /**
     * Returns the savepoint name to use for nested transactions
     *
     * @return string
     */
    public function getNestedTransactionSavepointName(): string
    {
    }

    /**
     * Returns the default identity value to be inserted in an identity column
     *
     * <code>
     * // Inserting a new robot with a valid default value for the column 'id'
     * $success = $connection->insert(
     *     "robots",
     *     [
     *         $connection->getDefaultIdValue(),
     *         "Astro Boy",
     *         1952,
     *     ],
     *     [
     *         "id",
     *         "name",
     *         "year",
     *     ]
     * );
     * </code>
     *
     * @return RawValue
     */
    public function getDefaultIdValue(): RawValue
    {
    }

    /**
     * Returns the default value to make the RBDM use the default value declared in the table definition
     *
     * <code>
     * // Inserting a new robot with a valid default value for the column 'year'
     * $success = $connection->insert(
     *     "robots",
     *     [
     *         "Astro Boy",
     *         $connection->getDefaultValue()
     *     ],
     *     [
     *         "name",
     *         "year",
     *     ]
     * );
     * </code>
     *
     * @return RawValue
     */
    public function getDefaultValue(): RawValue
    {
    }

    /**
     * Check whether the database system requires a sequence to produce auto-numeric values
     *
     * @return bool
     */
    public function supportSequences(): bool
    {
    }

    /**
     * Check whether the database system requires an explicit value for identity columns
     *
     * @return bool
     */
    public function useExplicitIdValue(): bool
    {
    }

    /**
     * Return descriptor used to connect to the active database
     *
     * @return array
     */
    public function getDescriptor(): array
    {
    }

    /**
     * Gets the active connection unique identifier
     *
     * @return string
     */
    public function getConnectionId()
    {
    }

    /**
     * Active SQL statement in the object
     *
     * @return string
     */
    public function getSQLStatement(): string
    {
    }

    /**
     * Active SQL statement in the object without replace bound parameters
     *
     * @return string
     */
    public function getRealSQLStatement(): string
    {
    }

    /**
     * Active SQL statement in the object
     *
     * @return array
     */
    public function getSQLBindTypes()
    {
    }

}
