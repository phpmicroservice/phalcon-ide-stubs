<?php

namespace Phalcon\Db\Adapter\Pdo;

use Phalcon\Db;
use Phalcon\Db\Column;
use Phalcon\Db\Index;
use Phalcon\Db\Reference;
use Phalcon\Db\IndexInterface;
use Phalcon\Db\Adapter\Pdo as PdoAdapter;
use Phalcon\Application\Exception;
use Phalcon\Db\ReferenceInterface;

/**
 * Phalcon\Db\Adapter\Pdo\Mysql
 *
 * Specific functions for the Mysql database system
 *
 * <code>
 * use Phalcon\Db\Adapter\Pdo\Mysql;
 *
 * $config = [
 *     "host"     => "localhost",
 *     "dbname"   => "blog",
 *     "port"     => 3306,
 *     "username" => "sigma",
 *     "password" => "secret",
 * ];
 *
 * $connection = new Mysql($config);
 * </code>
 */
class Mysql extends \Phalcon\Db\Adapter\Pdo
{

    protected $_type = 'mysql';


    protected $_dialectType = 'mysql';


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
     * @return \Phalcon\Db\IndexInterface[]
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
     * @return array|\Phalcon\Db\ReferenceInterface[]
     */
    public function describeReferences(string $table, string $schema = null): array
    {
    }

    /**
     * Adds a foreign key to a table
     *
     * @param string $tableName
     * @param string $schemaName
     * @param \Phalcon\Db\ReferenceInterface $reference
     * @return bool
     */
    public function addForeignKey(string $tableName, string $schemaName, \Phalcon\Db\ReferenceInterface $reference): bool
    {
    }

}
