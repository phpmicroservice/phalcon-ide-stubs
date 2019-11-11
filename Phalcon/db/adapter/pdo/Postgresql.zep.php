<?php

namespace Phalcon\Db\Adapter\Pdo;

use Phalcon\Db\Column;
use Phalcon\Db\RawValue;
use Phalcon\Db\Adapter\Pdo as PdoAdapter;
use Phalcon\Db\Exception;

/**
 * Phalcon\Db\Adapter\Pdo\Postgresql
 *
 * Specific functions for the Postgresql database system
 *
 * <code>
 * use Phalcon\Db\Adapter\Pdo\Postgresql;
 *
 * $config = [
 *     "host"     => "localhost",
 *     "dbname"   => "blog",
 *     "port"     => 5432,
 *     "username" => "postgres",
 *     "password" => "secret",
 * ];
 *
 * $connection = new Postgresql($config);
 * </code>
 */
class Postgresql extends \Phalcon\Db\Adapter\Pdo
{

    protected $_type = 'pgsql';


    protected $_dialectType = 'postgresql';


    /**
     * This method is automatically called in Phalcon\Db\Adapter\Pdo constructor.
     * Call it when you need to restore a database connection.
     *
     * @param array $descriptor
     * @return bool
     */
    public function connect(array $descriptor = null): bool
    {
    }

    /**
     * Returns an array of Phalcon\Db\Column objects describing a table
     *
     * <code>
     * print_r(
     *     $connection->describeColumns("posts")
     * );
     * </code>
     *
     * @param string $table
     * @param string $schema
     * @return array|\Phalcon\Db\ColumnInterface[]
     */
    public function describeColumns(string $table, string $schema = null): array
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
     * Check whether the database system requires an explicit value for identity columns
     *
     * @return bool
     */
    public function useExplicitIdValue(): bool
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
     * Check whether the database system requires a sequence to produce auto-numeric values
     *
     * @return bool
     */
    public function supportSequences(): bool
    {
    }

}
