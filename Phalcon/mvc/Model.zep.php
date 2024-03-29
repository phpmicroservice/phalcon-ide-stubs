<?php

namespace Phalcon\Mvc;

use Phalcon\Di;
use Phalcon\Db\Column;
use Phalcon\Db\RawValue;
use Phalcon\DiInterface;
use Phalcon\Mvc\Model\Message;
use Phalcon\Mvc\Model\ResultInterface;
use Phalcon\Di\InjectionAwareInterface;
use Phalcon\Mvc\Model\ManagerInterface;
use Phalcon\Mvc\Model\MetaDataInterface;
use Phalcon\Mvc\Model\Criteria;
use Phalcon\Db\AdapterInterface;
use Phalcon\Db\DialectInterface;
use Phalcon\Mvc\Model\CriteriaInterface;
use Phalcon\Mvc\Model\TransactionInterface;
use Phalcon\Mvc\Model\Resultset;
use Phalcon\Mvc\Model\ResultsetInterface;
use Phalcon\Mvc\Model\Query;
use Phalcon\Mvc\Model\Query\Builder;
use Phalcon\Mvc\Model\Relation;
use Phalcon\Mvc\Model\RelationInterface;
use Phalcon\Mvc\Model\BehaviorInterface;
use Phalcon\Mvc\Model\Exception;
use Phalcon\Mvc\Model\MessageInterface;
use Phalcon\ValidationInterface;
use Phalcon\Mvc\Model\ValidationFailed;
use Phalcon\Events\ManagerInterface as EventsManagerInterface;

/**
 * Phalcon\Mvc\Model
 *
 * Phalcon\Mvc\Model connects business objects and database tables to create
 * a persistable domain model where logic and data are presented in one wrapping.
 * It‘s an implementation of the object-relational mapping (ORM).
 *
 * A model represents the information (data) of the application and the rules to manipulate that data.
 * Models are primarily used for managing the rules of interaction with a corresponding database table.
 * In most cases, each table in your database will correspond to one model in your application.
 * The bulk of your application's business logic will be concentrated in the models.
 *
 * Phalcon\Mvc\Model is the first ORM written in Zephir/C languages for PHP, giving to developers high performance
 * when interacting with databases while is also easy to use.
 *
 * <code>
 * $robot = new Robots();
 *
 * $robot->type = "mechanical";
 * $robot->name = "Astro Boy";
 * $robot->year = 1952;
 *
 * if ($robot->save() === false) {
 *     echo "Umh, We can store robots: ";
 *
 *     $messages = $robot->getMessages();
 *
 *     foreach ($messages as $message) {
 *         echo $message;
 *     }
 * } else {
 *     echo "Great, a new robot was saved successfully!";
 * }
 * </code>
 */
abstract class Model implements Phalcon\Mvc\EntityInterface, Phalcon\Mvc\ModelInterface, \Phalcon\Mvc\Model\ResultInterface, \Phalcon\Di\InjectionAwareInterface, Serializable, JsonSerializable
{

    const TRANSACTION_INDEX = 'transaction';


    const OP_NONE = 0;


    const OP_CREATE = 1;


    const OP_UPDATE = 2;


    const OP_DELETE = 3;


    const DIRTY_STATE_PERSISTENT = 0;


    const DIRTY_STATE_TRANSIENT = 1;


    const DIRTY_STATE_DETACHED = 2;


    protected $_dependencyInjector;


    protected $_modelsManager;


    protected $_modelsMetaData;


    protected $_errorMessages;


    protected $_operationMade = 0;


    protected $_dirtyState = 1;


    protected $_transaction;


    protected $_uniqueKey;


    protected $_uniqueParams;


    protected $_uniqueTypes;


    protected $_skipped;


    protected $_related;


    protected $_snapshot;


    protected $_oldSnapshot;



    public function getTransaction()
    {
    }

    /**
     * Phalcon\Mvc\Model constructor
     *
     * @param mixed $data
     * @param \Phalcon\DiInterface $dependencyInjector
     * @param \Phalcon\Mvc\Model\ManagerInterface $modelsManager
     */
    public final function __construct($data = null, \Phalcon\DiInterface $dependencyInjector = null, \Phalcon\Mvc\Model\ManagerInterface $modelsManager = null)
    {
    }

    /**
     * Sets the dependency injection container
     *
     * @param \Phalcon\DiInterface $dependencyInjector
     */
    public function setDI(\Phalcon\DiInterface $dependencyInjector)
    {
    }

    /**
     * Returns the dependency injection container
     *
     * @return DiInterface
     */
    public function getDI(): DiInterface
    {
    }

    /**
     * Sets a custom events manager
     *
     * @param \Phalcon\Events\ManagerInterface $eventsManager
     */
    protected function setEventsManager(\Phalcon\Events\ManagerInterface $eventsManager)
    {
    }

    /**
     * Returns the custom events manager
     *
     * @return EventsManagerInterface
     */
    protected function getEventsManager(): EventsManagerInterface
    {
    }

    /**
     * Returns the models meta-data service related to the entity instance
     *
     * @return MetaDataInterface
     */
    public function getModelsMetaData(): MetaDataInterface
    {
    }

    /**
     * Returns the models manager related to the entity instance
     *
     * @return ManagerInterface
     */
    public function getModelsManager(): ManagerInterface
    {
    }

    /**
     * Sets a transaction related to the Model instance
     *
     * <code>
     * use Phalcon\Mvc\Model\Transaction\Manager as TxManager;
     * use Phalcon\Mvc\Model\Transaction\Failed as TxFailed;
     *
     * try {
     *     $txManager = new TxManager();
     *
     *     $transaction = $txManager->get();
     *
     *     $robot = new Robots();
     *
     *     $robot->setTransaction($transaction);
     *
     *     $robot->name       = "WALL·E";
     *     $robot->created_at = date("Y-m-d");
     *
     *     if ($robot->save() === false) {
     *         $transaction->rollback("Can't save robot");
     *     }
     *
     *     $robotPart = new RobotParts();
     *
     *     $robotPart->setTransaction($transaction);
     *
     *     $robotPart->type = "head";
     *
     *     if ($robotPart->save() === false) {
     *         $transaction->rollback("Robot part cannot be saved");
     *     }
     *
     *     $transaction->commit();
     * } catch (TxFailed $e) {
     *     echo "Failed, reason: ", $e->getMessage();
     * }
     * </code>
     *
     * @param \Phalcon\Mvc\Model\TransactionInterface $transaction
     * @return ModelInterface
     */
    public function setTransaction(\Phalcon\Mvc\Model\TransactionInterface $transaction): ModelInterface
    {
    }

    /**
     * Sets the table name to which model should be mapped
     *
     * @param string $source
     * @return Model
     */
    protected function setSource(string $source): Model
    {
    }

    /**
     * Returns the table name mapped in the model
     *
     * @return string
     */
    public function getSource(): string
    {
    }

    /**
     * Sets schema name where the mapped table is located
     *
     * @param string $schema
     * @return Model
     */
    protected function setSchema(string $schema): Model
    {
    }

    /**
     * Returns schema name where the mapped table is located
     *
     * @return string
     */
    public function getSchema(): string
    {
    }

    /**
     * Sets the DependencyInjection connection service name
     *
     * @param string $connectionService
     * @return Model
     */
    public function setConnectionService(string $connectionService): Model
    {
    }

    /**
     * Sets the DependencyInjection connection service name used to read data
     *
     * @param string $connectionService
     * @return Model
     */
    public function setReadConnectionService(string $connectionService): Model
    {
    }

    /**
     * Sets the DependencyInjection connection service name used to write data
     *
     * @param string $connectionService
     * @return Model
     */
    public function setWriteConnectionService(string $connectionService): Model
    {
    }

    /**
     * Returns the DependencyInjection connection service name used to read data related the model
     *
     * @return string
     */
    public function getReadConnectionService(): string
    {
    }

    /**
     * Returns the DependencyInjection connection service name used to write data related to the model
     *
     * @return string
     */
    public function getWriteConnectionService(): string
    {
    }

    /**
     * Sets the dirty state of the object using one of the DIRTY_STATE_ constants
     *
     * @param int $dirtyState
     * @return ModelInterface
     */
    public function setDirtyState(int $dirtyState): ModelInterface
    {
    }

    /**
     * Returns one of the DIRTY_STATE_ constants telling if the record exists in the database or not
     *
     * @return int
     */
    public function getDirtyState(): int
    {
    }

    /**
     * Gets the connection used to read data for the model
     *
     * @return AdapterInterface
     */
    public function getReadConnection(): AdapterInterface
    {
    }

    /**
     * Gets the connection used to write data to the model
     *
     * @return AdapterInterface
     */
    public function getWriteConnection(): AdapterInterface
    {
    }

    /**
     * Assigns values to a model from an array
     *
     * <code>
     * $robot->assign(
     *     [
     *         "type" => "mechanical",
     *         "name" => "Astro Boy",
     *         "year" => 1952,
     *     ]
     * );
     *
     * // Assign by db row, column map needed
     * $robot->assign(
     *     $dbRow,
     *     [
     *         "db_type" => "type",
     *         "db_name" => "name",
     *         "db_year" => "year",
     *     ]
     * );
     *
     * // Allow assign only name and year
     * $robot->assign(
     *     $_POST,
     *     null,
     *     [
     *         "name",
     *         "year",
     *     ]
     * );
     *
     * // By default assign method will use setters if exist, you can disable it by using ini_set to directly use properties
     *
     * ini_set("phalcon.orm.disable_assign_setters", true);
     *
     * $robot->assign(
     *     $_POST,
     *     null,
     *     [
     *         "name",
     *         "year",
     *     ]
     * );
     * </code>
     *
     * @param array $data
     * @param array $dataColumnMap array to transform keys of data to another
     * @param array $whiteList
     * @return \Phalcon\Mvc\Model
     */
    public function assign(array $data, $dataColumnMap = null, $whiteList = null): Model
    {
    }

    /**
     * Assigns values to a model from an array, returning a new model.
     *
     * <code>
     * $robot = \Phalcon\Mvc\Model::cloneResultMap(
     *     new Robots(),
     *     [
     *         "type" => "mechanical",
     *         "name" => "Astro Boy",
     *         "year" => 1952,
     *     ]
     * );
     * </code>
     *
     * @param \Phalcon\Mvc\ModelInterface|\Phalcon\Mvc\Model\Row $base
     * @param array $data
     * @param array $columnMap
     * @param int $dirtyState
     * @param boolean $keepSnapshots
     * @return Model
     */
    public static function cloneResultMap($base, array $data, $columnMap, int $dirtyState = 0, bool $keepSnapshots = null): Model
    {
    }

    /**
     * Returns an hydrated result based on the data and the column map
     *
     * @param array $data
     * @param array $columnMap
     * @param int $hydrationMode
     * @return mixed
     */
    public static function cloneResultMapHydrate(array $data, $columnMap, int $hydrationMode)
    {
    }

    /**
     * Assigns values to a model from an array returning a new model
     *
     * <code>
     * $robot = Phalcon\Mvc\Model::cloneResult(
     *     new Robots(),
     *     [
     *         "type" => "mechanical",
     *         "name" => "Astro Boy",
     *         "year" => 1952,
     *     ]
     * );
     * </code>
     *
     * @param \Phalcon\Mvc\ModelInterface $base
     * @param array $data
     * @param int $dirtyState
     * @return \Phalcon\Mvc\ModelInterface
     */
    public static function cloneResult(ModelInterface $base, array $data, int $dirtyState = 0)
    {
    }

    /**
     * Query for a set of records that match the specified conditions
     *
     * <code>
     * // How many robots are there?
     * $robots = Robots::find();
     *
     * echo "There are ", count($robots), "\n";
     *
     * // How many mechanical robots are there?
     * $robots = Robots::find(
     *     "type = 'mechanical'"
     * );
     *
     * echo "There are ", count($robots), "\n";
     *
     * // Get and print virtual robots ordered by name
     * $robots = Robots::find(
     *     [
     *         "type = 'virtual'",
     *         "order" => "name",
     *     ]
     * );
     *
     * foreach ($robots as $robot) {
     *  echo $robot->name, "\n";
     * }
     *
     * // Get first 100 virtual robots ordered by name
     * $robots = Robots::find(
     *     [
     *         "type = 'virtual'",
     *         "order" => "name",
     *         "limit" => 100,
     *     ]
     * );
     *
     * foreach ($robots as $robot) {
     *  echo $robot->name, "\n";
     * }
     *
     * // encapsulate find it into an running transaction esp. useful for application unit-tests
     * // or complex business logic where we wanna control which transactions are used.
     *
     * $myTransaction = new Transaction(\Phalcon\Di::getDefault());
     * $myTransaction->begin();
     * $newRobot = new Robot();
     * $newRobot->setTransaction($myTransaction);
     * $newRobot->save(['name' => 'test', 'type' => 'mechanical', 'year' => 1944]);
     *
     * $resultInsideTransaction = Robot::find(['name' => 'test', Model::TRANSACTION_INDEX => $myTransaction]);
     * $resultOutsideTransaction = Robot::find(['name' => 'test']);
     *
     * foreach ($setInsideTransaction as $robot) {
     *     echo $robot->name, "\n";
     * }
     *
     * foreach ($setOutsideTransaction as $robot) {
     *     echo $robot->name, "\n";
     * }
     *
     * // reverts all not commited changes
     * $myTransaction->rollback();
     *
     * // creating two different transactions
     * $myTransaction1 = new Transaction(\Phalcon\Di::getDefault());
     * $myTransaction1->begin();
     * $myTransaction2 = new Transaction(\Phalcon\Di::getDefault());
     * $myTransaction2->begin();
     *
     *  // add a new robots
     * $firstNewRobot = new Robot();
     * $firstNewRobot->setTransaction($myTransaction1);
     * $firstNewRobot->save(['name' => 'first-transaction-robot', 'type' => 'mechanical', 'year' => 1944]);
     *
     * $secondNewRobot = new Robot();
     * $secondNewRobot->setTransaction($myTransaction2);
     * $secondNewRobot->save(['name' => 'second-transaction-robot', 'type' => 'fictional', 'year' => 1984]);
     *
     * // this transaction will find the robot.
     * $resultInFirstTransaction = Robot::find(['name' => 'first-transaction-robot', Model::TRANSACTION_INDEX => $myTransaction1]);
     * // this transaction won't find the robot.
     * $resultInSecondTransaction = Robot::find(['name' => 'first-transaction-robot', Model::TRANSACTION_INDEX => $myTransaction2]);
     * // this transaction won't find the robot.
     * $resultOutsideAnyExplicitTransaction = Robot::find(['name' => 'first-transaction-robot']);
     *
     * // this transaction won't find the robot.
     * $resultInFirstTransaction = Robot::find(['name' => 'second-transaction-robot', Model::TRANSACTION_INDEX => $myTransaction2]);
     * // this transaction will find the robot.
     * $resultInSecondTransaction = Robot::find(['name' => 'second-transaction-robot', Model::TRANSACTION_INDEX => $myTransaction1]);
     * // this transaction won't find the robot.
     * $resultOutsideAnyExplicitTransaction = Robot::find(['name' => 'second-transaction-robot']);
     *
     * $transaction1->rollback();
     * $transaction2->rollback();
     * </code>
     *
     * @param mixed $parameters
     * @return ResultsetInterface
     */
    public static function find($parameters = null): ResultsetInterface
    {
    }

    /**
     * Query the first record that matches the specified conditions
     *
     * <code>
     * // What's the first robot in robots table?
     * $robot = Robots::findFirst();
     *
     * echo "The robot name is ", $robot->name;
     *
     * // What's the first mechanical robot in robots table?
     * $robot = Robots::findFirst(
     *  "type = 'mechanical'"
     * );
     *
     * echo "The first mechanical robot name is ", $robot->name;
     *
     * // Get first virtual robot ordered by name
     * $robot = Robots::findFirst(
     *     [
     *         "type = 'virtual'",
     *         "order" => "name",
     *     ]
     * );
     *
     * echo "The first virtual robot name is ", $robot->name;
     *
     * // behaviour with transaction
     * $myTransaction = new Transaction(\Phalcon\Di::getDefault());
     * $myTransaction->begin();
     * $newRobot = new Robot();
     * $newRobot->setTransaction($myTransaction);
     * $newRobot->save(['name' => 'test', 'type' => 'mechanical', 'year' => 1944]);
     *
     * $findsARobot = Robot::findFirst(['name' => 'test', Model::TRANSACTION_INDEX => $myTransaction]);
     * $doesNotFindARobot = Robot::findFirst(['name' => 'test']);
     *
     * var_dump($findARobot);
     * var_dump($doesNotFindARobot);
     *
     * $transaction->commit();
     * $doesFindTheRobotNow = Robot::findFirst(['name' => 'test']);
     * </code>
     *
     * @param mixed $parameters
     * @return Model
     */
    public static function findFirst($parameters = null): Model
    {
    }

    /**
     * shared prepare query logic for find and findFirst method
     *
     * @param mixed $params
     * @param mixed $limit
     * @return Query
     */
    private static function getPreparedQuery($params, $limit = null): Query
    {
    }

    /**
     * Create a criteria for a specific model
     *
     * @param \Phalcon\DiInterface $dependencyInjector
     * @return Criteria
     */
    public static function query(\Phalcon\DiInterface $dependencyInjector = null): Criteria
    {
    }

    /**
     * Checks whether the current record already exists
     *
     * @param \Phalcon\Mvc\Model\MetaDataInterface $metaData
     * @param \Phalcon\Db\AdapterInterface $connection
     * @param string|array $table
     * @return boolean
     */
    protected function _exists(\Phalcon\Mvc\Model\MetaDataInterface $metaData, \Phalcon\Db\AdapterInterface $connection, $table = null): bool
    {
    }

    /**
     * Generate a PHQL SELECT statement for an aggregate
     *
     * @param string $function
     * @param string $alias
     * @param array $parameters
     * @return \Phalcon\Mvc\Model\ResultsetInterface
     * @param string $functionName
     */
    protected static function _groupResult(string $functionName, string $alias, $parameters): ResultsetInterface
    {
    }

    /**
     * Counts how many records match the specified conditions
     *
     * <code>
     * // How many robots are there?
     * $number = Robots::count();
     *
     * echo "There are ", $number, "\n";
     *
     * // How many mechanical robots are there?
     * $number = Robots::count("type = 'mechanical'");
     *
     * echo "There are ", $number, " mechanical robots\n";
     * </code>
     *
     * @param array $parameters
     * @return mixed
     */
    public static function count($parameters = null)
    {
    }

    /**
     * Calculates the sum on a column for a result-set of rows that match the specified conditions
     *
     * <code>
     * // How much are all robots?
     * $sum = Robots::sum(
     *     [
     *         "column" => "price",
     *     ]
     * );
     *
     * echo "The total price of robots is ", $sum, "\n";
     *
     * // How much are mechanical robots?
     * $sum = Robots::sum(
     *     [
     *         "type = 'mechanical'",
     *         "column" => "price",
     *     ]
     * );
     *
     * echo "The total price of mechanical robots is  ", $sum, "\n";
     * </code>
     *
     * @param array $parameters
     * @return mixed
     */
    public static function sum($parameters = null)
    {
    }

    /**
     * Returns the maximum value of a column for a result-set of rows that match the specified conditions
     *
     * <code>
     * // What is the maximum robot id?
     * $id = Robots::maximum(
     *     [
     *         "column" => "id",
     *     ]
     * );
     *
     * echo "The maximum robot id is: ", $id, "\n";
     *
     * // What is the maximum id of mechanical robots?
     * $sum = Robots::maximum(
     *     [
     *         "type = 'mechanical'",
     *         "column" => "id",
     *     ]
     * );
     *
     * echo "The maximum robot id of mechanical robots is ", $id, "\n";
     * </code>
     *
     * @param array $parameters
     * @return mixed
     */
    public static function maximum($parameters = null)
    {
    }

    /**
     * Returns the minimum value of a column for a result-set of rows that match the specified conditions
     *
     * <code>
     * // What is the minimum robot id?
     * $id = Robots::minimum(
     *     [
     *         "column" => "id",
     *     ]
     * );
     *
     * echo "The minimum robot id is: ", $id;
     *
     * // What is the minimum id of mechanical robots?
     * $sum = Robots::minimum(
     *     [
     *         "type = 'mechanical'",
     *         "column" => "id",
     *     ]
     * );
     *
     * echo "The minimum robot id of mechanical robots is ", $id;
     * </code>
     *
     * @param array $parameters
     * @return mixed
     */
    public static function minimum($parameters = null)
    {
    }

    /**
     * Returns the average value on a column for a result-set of rows matching the specified conditions
     *
     * <code>
     * // What's the average price of robots?
     * $average = Robots::average(
     *     [
     *         "column" => "price",
     *     ]
     * );
     *
     * echo "The average price is ", $average, "\n";
     *
     * // What's the average price of mechanical robots?
     * $average = Robots::average(
     *     [
     *         "type = 'mechanical'",
     *         "column" => "price",
     *     ]
     * );
     *
     * echo "The average price of mechanical robots is ", $average, "\n";
     * </code>
     *
     * @param array $parameters
     * @return double
     */
    public static function average($parameters = null)
    {
    }

    /**
     * Fires an event, implicitly calls behaviors and listeners in the events manager are notified
     *
     * @param string $eventName
     * @return bool
     */
    public function fireEvent(string $eventName): bool
    {
    }

    /**
     * Fires an event, implicitly calls behaviors and listeners in the events manager are notified
     * This method stops if one of the callbacks/listeners returns boolean false
     *
     * @param string $eventName
     * @return bool
     */
    public function fireEventCancel(string $eventName): bool
    {
    }

    /**
     * Cancel the current operation
     */
    protected function _cancelOperation()
    {
    }

    /**
     * Appends a customized message on the validation process
     *
     * <code>
     * use Phalcon\Mvc\Model;
     * use Phalcon\Mvc\Model\Message as Message;
     *
     * class Robots extends Model
     * {
     *     public function beforeSave()
     *     {
     *         if ($this->name === "Peter") {
     *             $message = new Message(
     *                 "Sorry, but a robot cannot be named Peter"
     *             );
     *
     *             $this->appendMessage($message);
     *         }
     *     }
     * }
     * </code>
     *
     * @param \Phalcon\Mvc\Model\MessageInterface $message
     * @return Model
     */
    public function appendMessage(\Phalcon\Mvc\Model\MessageInterface $message): Model
    {
    }

    /**
     * Executes validators on every validation call
     *
     * <code>
     * use Phalcon\Mvc\Model;
     * use Phalcon\Validation;
     * use Phalcon\Validation\Validator\ExclusionIn;
     *
     * class Subscriptors extends Model
     * {
     *     public function validation()
     *     {
     *         $validator = new Validation();
     *
     *         $validator->add(
     *             "status",
     *             new ExclusionIn(
     *                 [
     *                     "domain" => [
     *                         "A",
     *                         "I",
     *                     ],
     *                 ]
     *             )
     *         );
     *
     *         return $this->validate($validator);
     *     }
     * }
     * </code>
     *
     * @param \Phalcon\ValidationInterface $validator
     * @return bool
     */
    protected function validate(\Phalcon\ValidationInterface $validator): bool
    {
    }

    /**
     * Check whether validation process has generated any messages
     *
     * <code>
     * use Phalcon\Mvc\Model;
     * use Phalcon\Validation;
     * use Phalcon\Validation\Validator\ExclusionIn;
     *
     * class Subscriptors extends Model
     * {
     *     public function validation()
     *     {
     *         $validator = new Validation();
     *
     *         $validator->validate(
     *             "status",
     *             new ExclusionIn(
     *                 [
     *                     "domain" => [
     *                         "A",
     *                         "I",
     *                     ],
     *                 ]
     *             )
     *         );
     *
     *         return $this->validate($validator);
     *     }
     * }
     * </code>
     *
     * @return bool
     */
    public function validationHasFailed(): bool
    {
    }

    /**
     * Returns array of validation messages
     *
     * <code>
     * $robot = new Robots();
     *
     * $robot->type = "mechanical";
     * $robot->name = "Astro Boy";
     * $robot->year = 1952;
     *
     * if ($robot->save() === false) {
     *     echo "Umh, We can't store robots right now ";
     *
     *     $messages = $robot->getMessages();
     *
     *     foreach ($messages as $message) {
     *         echo $message;
     *     }
     * } else {
     *     echo "Great, a new robot was saved successfully!";
     * }
     * </code>
     *
     * @param mixed $filter
     * @return array|\Phalcon\Mvc\Model\MessageInterface[]
     */
    public function getMessages($filter = null): array
    {
    }

    /**
     * Reads "belongs to" relations and check the virtual foreign keys when inserting or updating records
     * to verify that inserted/updated values are present in the related entity
     *
     * @return bool
     */
    protected final function _checkForeignKeysRestrict(): bool
    {
    }

    /**
     * Reads both "hasMany" and "hasOne" relations and checks the virtual foreign keys (cascade) when deleting records
     *
     * @return bool
     */
    protected final function _checkForeignKeysReverseCascade(): bool
    {
    }

    /**
     * Reads both "hasMany" and "hasOne" relations and checks the virtual foreign keys (restrict) when deleting records
     *
     * @return bool
     */
    protected final function _checkForeignKeysReverseRestrict(): bool
    {
    }

    /**
     * Executes internal hooks before save a record
     *
     * @param \Phalcon\Mvc\Model\MetaDataInterface $metaData
     * @param bool $exists
     * @param mixed $identityField
     * @return bool
     */
    protected function _preSave(\Phalcon\Mvc\Model\MetaDataInterface $metaData, bool $exists, $identityField): bool
    {
    }

    /**
     * Executes internal events after save a record
     *
     * @param bool $success
     * @param bool $exists
     * @return bool
     */
    protected function _postSave(bool $success, bool $exists): bool
    {
    }

    /**
     * Sends a pre-build INSERT SQL statement to the relational database system
     *
     * @param \Phalcon\Mvc\Model\MetaDataInterface $metaData
     * @param \Phalcon\Db\AdapterInterface $connection
     * @param string|array $table
     * @param boolean|string $identityField
     * @return boolean
     */
    protected function _doLowInsert(\Phalcon\Mvc\Model\MetaDataInterface $metaData, \Phalcon\Db\AdapterInterface $connection, $table, $identityField): bool
    {
    }

    /**
     * Sends a pre-build UPDATE SQL statement to the relational database system
     *
     * @param \Phalcon\Mvc\Model\MetaDataInterface $metaData
     * @param \Phalcon\Db\AdapterInterface $connection
     * @param string|array $table
     * @return boolean
     */
    protected function _doLowUpdate(\Phalcon\Mvc\Model\MetaDataInterface $metaData, \Phalcon\Db\AdapterInterface $connection, $table): bool
    {
    }

    /**
     * Saves related records that must be stored prior to save the master record
     *
     * @param \Phalcon\Db\AdapterInterface $connection
     * @param \Phalcon\Mvc\ModelInterface[] related
     * @return boolean
     * @param mixed $related
     * @param \Phalcon\Mvc\ModelInterface  [] related
     */
    protected function _preSaveRelatedRecords(\Phalcon\Db\AdapterInterface $connection, $related): bool
    {
    }

    /**
     * Save the related records assigned in the has-one/has-many relations
     *
     * @param Phalcon\Db\AdapterInterface $connection
     * @param  Phalcon\Mvc\ModelInterface[] related
     * @return boolean
     * @param mixed $related
     * @param Phalcon\Mvc\ModelInterface  [] related
     */
    protected function _postSaveRelatedRecords(\Phalcon\Db\AdapterInterface $connection, $related): bool
    {
    }

    /**
     * Inserts or updates a model instance. Returning true on success or false otherwise.
     *
     * <code>
     * // Creating a new robot
     * $robot = new Robots();
     *
     * $robot->type = "mechanical";
     * $robot->name = "Astro Boy";
     * $robot->year = 1952;
     *
     * $robot->save();
     *
     * // Updating a robot name
     * $robot = Robots::findFirst("id = 100");
     *
     * $robot->name = "Biomass";
     *
     * $robot->save();
     * </code>
     *
     * @param array $data
     * @param array $whiteList
     * @return boolean
     */
    public function save($data = null, $whiteList = null): bool
    {
    }

    /**
     * Inserts a model instance. If the instance already exists in the persistence it will throw an exception
     * Returning true on success or false otherwise.
     *
     * <code>
     * // Creating a new robot
     * $robot = new Robots();
     *
     * $robot->type = "mechanical";
     * $robot->name = "Astro Boy";
     * $robot->year = 1952;
     *
     * $robot->create();
     *
     * // Passing an array to create
     * $robot = new Robots();
     *
     * $robot->create(
     *     [
     *         "type" => "mechanical",
     *         "name" => "Astro Boy",
     *         "year" => 1952,
     *     ]
     * );
     * </code>
     *
     * @param mixed $data
     * @param mixed $whiteList
     * @return bool
     */
    public function create($data = null, $whiteList = null): bool
    {
    }

    /**
     * Updates a model instance. If the instance doesn't exist in the persistence it will throw an exception
     * Returning true on success or false otherwise.
     *
     * <code>
     * // Updating a robot name
     * $robot = Robots::findFirst("id = 100");
     *
     * $robot->name = "Biomass";
     *
     * $robot->update();
     * </code>
     *
     * @param mixed $data
     * @param mixed $whiteList
     * @return bool
     */
    public function update($data = null, $whiteList = null): bool
    {
    }

    /**
     * Deletes a model instance. Returning true on success or false otherwise.
     *
     * <code>
     * $robot = Robots::findFirst("id=100");
     *
     * $robot->delete();
     *
     * $robots = Robots::find("type = 'mechanical'");
     *
     * foreach ($robots as $robot) {
     *     $robot->delete();
     * }
     * </code>
     *
     * @return bool
     */
    public function delete(): bool
    {
    }

    /**
     * Returns the type of the latest operation performed by the ORM
     * Returns one of the OP_ class constants
     *
     * @return int
     */
    public function getOperationMade(): int
    {
    }

    /**
     * Refreshes the model attributes re-querying the record from the database
     *
     * @return Model
     */
    public function refresh(): Model
    {
    }

    /**
     * Skips the current operation forcing a success state
     *
     * @param bool $skip
     */
    public function skipOperation(bool $skip)
    {
    }

    /**
     * Reads an attribute value by its name
     *
     * <code>
     * echo $robot->readAttribute("name");
     * </code>
     *
     * @param string $attribute
     */
    public function readAttribute(string $attribute)
    {
    }

    /**
     * Writes an attribute value by its name
     *
     * <code>
     * $robot->writeAttribute("name", "Rosey");
     * </code>
     *
     * @param string $attribute
     * @param mixed $value
     */
    public function writeAttribute(string $attribute, $value)
    {
    }

    /**
     * Sets a list of attributes that must be skipped from the
     * generated INSERT/UPDATE statement
     *
     * <code>
     *
     * class Robots extends \Phalcon\Mvc\Model
     * {
     *     public function initialize()
     *     {
     *         $this->skipAttributes(
     *             [
     *                 "price",
     *             ]
     *         );
     *     }
     * }
     * </code>
     *
     * @param array $attributes
     */
    protected function skipAttributes(array $attributes)
    {
    }

    /**
     * Sets a list of attributes that must be skipped from the
     * generated INSERT statement
     *
     * <code>
     *
     * class Robots extends \Phalcon\Mvc\Model
     * {
     *     public function initialize()
     *     {
     *         $this->skipAttributesOnCreate(
     *             [
     *                 "created_at",
     *             ]
     *         );
     *     }
     * }
     * </code>
     *
     * @param array $attributes
     */
    protected function skipAttributesOnCreate(array $attributes)
    {
    }

    /**
     * Sets a list of attributes that must be skipped from the
     * generated UPDATE statement
     *
     * <code>
     *
     * class Robots extends \Phalcon\Mvc\Model
     * {
     *     public function initialize()
     *     {
     *         $this->skipAttributesOnUpdate(
     *             [
     *                 "modified_in",
     *             ]
     *         );
     *     }
     * }
     * </code>
     *
     * @param array $attributes
     */
    protected function skipAttributesOnUpdate(array $attributes)
    {
    }

    /**
     * Sets a list of attributes that must be skipped from the
     * generated UPDATE statement
     *
     * <code>
     *
     * class Robots extends \Phalcon\Mvc\Model
     * {
     *     public function initialize()
     *     {
     *         $this->allowEmptyStringValues(
     *             [
     *                 "name",
     *             ]
     *         );
     *     }
     * }
     * </code>
     *
     * @param array $attributes
     */
    protected function allowEmptyStringValues(array $attributes)
    {
    }

    /**
     * Setup a 1-1 relation between two models
     *
     * <code>
     *
     * class Robots extends \Phalcon\Mvc\Model
     * {
     *     public function initialize()
     *     {
     *         $this->hasOne("id", "RobotsDescription", "robots_id");
     *     }
     * }
     * </code>
     *
     * @param mixed $fields
     * @param string $referenceModel
     * @param mixed $referencedFields
     * @param mixed $options
     * @return Relation
     */
    protected function hasOne($fields, string $referenceModel, $referencedFields, $options = null): Relation
    {
    }

    /**
     * Setup a reverse 1-1 or n-1 relation between two models
     *
     * <code>
     *
     * class RobotsParts extends \Phalcon\Mvc\Model
     * {
     *     public function initialize()
     *     {
     *         $this->belongsTo("robots_id", "Robots", "id");
     *     }
     * }
     * </code>
     *
     * @param mixed $fields
     * @param string $referenceModel
     * @param mixed $referencedFields
     * @param mixed $options
     * @return Relation
     */
    protected function belongsTo($fields, string $referenceModel, $referencedFields, $options = null): Relation
    {
    }

    /**
     * Setup a 1-n relation between two models
     *
     * <code>
     *
     * class Robots extends \Phalcon\Mvc\Model
     * {
     *     public function initialize()
     *     {
     *         $this->hasMany("id", "RobotsParts", "robots_id");
     *     }
     * }
     * </code>
     *
     * @param mixed $fields
     * @param string $referenceModel
     * @param mixed $referencedFields
     * @param mixed $options
     * @return Relation
     */
    protected function hasMany($fields, string $referenceModel, $referencedFields, $options = null): Relation
    {
    }

    /**
     * Setup an n-n relation between two models, through an intermediate relation
     *
     * <code>
     *
     * class Robots extends \Phalcon\Mvc\Model
     * {
     *     public function initialize()
     *     {
     *         // Setup a many-to-many relation to Parts through RobotsParts
     *         $this->hasManyToMany(
     *             "id",
     *             "RobotsParts",
     *             "robots_id",
     *             "parts_id",
     *             "Parts",
     *             "id",
     *         );
     *     }
     * }
     * </code>
     *
     * @param string|array $fields
     * @param string $intermediateModel
     * @param string|array $intermediateFields
     * @param string|array $intermediateReferencedFields
     * @param string $referencedModel
     * @param string|array $referencedFields
     * @param array $options
     * @return  Phalcon\Mvc\Model\Relation
     * @param string $referenceModel
     */
    protected function hasManyToMany($fields, string $intermediateModel, $intermediateFields, $intermediateReferencedFields, string $referenceModel, $referencedFields, $options = null): Relation
    {
    }

    /**
     * Setups a behavior in a model
     *
     * <code>
     *
     * use Phalcon\Mvc\Model;
     * use Phalcon\Mvc\Model\Behavior\Timestampable;
     *
     * class Robots extends Model
     * {
     *     public function initialize()
     *     {
     *         $this->addBehavior(
     *             new Timestampable(
     *                [
     *                    "onCreate" => [
     *                         "field"  => "created_at",
     *                         "format" => "Y-m-d",
     *                        ],
     *                 ]
     *             )
     *         );
     *     }
     * }
     * </code>
     *
     * @param \Phalcon\Mvc\Model\BehaviorInterface $behavior
     */
    public function addBehavior(\Phalcon\Mvc\Model\BehaviorInterface $behavior)
    {
    }

    /**
     * Sets if the model must keep the original record snapshot in memory
     *
     * <code>
     *
     * use Phalcon\Mvc\Model;
     *
     * class Robots extends Model
     * {
     *     public function initialize()
     *     {
     *         $this->keepSnapshots(true);
     *     }
     * }
     * </code>
     *
     * @param bool $keepSnapshot
     */
    protected function keepSnapshots(bool $keepSnapshot)
    {
    }

    /**
     * Sets the record's snapshot data.
     * This method is used internally to set snapshot data when the model was set up to keep snapshot data
     *
     * @param array $data
     * @param array $columnMap
     */
    public function setSnapshotData(array $data, $columnMap = null)
    {
    }

    /**
     * Sets the record's old snapshot data.
     * This method is used internally to set old snapshot data when the model was set up to keep snapshot data
     *
     * @param array $data
     * @param array $columnMap
     */
    public function setOldSnapshotData(array $data, $columnMap = null)
    {
    }

    /**
     * Checks if the object has internal snapshot data
     *
     * @return bool
     */
    public function hasSnapshotData(): bool
    {
    }

    /**
     * Returns the internal snapshot data
     *
     * @return array
     */
    public function getSnapshotData(): array
    {
    }

    /**
     * Returns the internal old snapshot data
     *
     * @return array
     */
    public function getOldSnapshotData(): array
    {
    }

    /**
     * Check if a specific attribute has changed
     * This only works if the model is keeping data snapshots
     *
     * <code>
     * $robot = new Robots();
     *
     * $robot->type = "mechanical";
     * $robot->name = "Astro Boy";
     * $robot->year = 1952;
     *
     * $robot->create();
     *
     * $robot->type = "hydraulic";
     *
     * $hasChanged = $robot->hasChanged("type"); // returns true
     * $hasChanged = $robot->hasChanged(["type", "name"]); // returns true
     * $hasChanged = $robot->hasChanged(["type", "name"], true); // returns false
     * </code>
     *
     * @param string|array $fieldName
     * @param boolean $allFields
     * @return bool
     */
    public function hasChanged($fieldName = null, bool $allFields = false): bool
    {
    }

    /**
     * Check if a specific attribute was updated
     * This only works if the model is keeping data snapshots
     *
     * @param string|array $fieldName
     * @param bool $allFields
     * @return bool
     */
    public function hasUpdated($fieldName = null, bool $allFields = false): bool
    {
    }

    /**
     * Returns a list of changed values.
     *
     * <code>
     * $robots = Robots::findFirst();
     * print_r($robots->getChangedFields()); // []
     *
     * $robots->deleted = 'Y';
     *
     * $robots->getChangedFields();
     * print_r($robots->getChangedFields()); // ["deleted"]
     * </code>
     *
     * @return array
     */
    public function getChangedFields(): array
    {
    }

    /**
     * Returns a list of updated values.
     *
     * <code>
     * $robots = Robots::findFirst();
     * print_r($robots->getChangedFields()); // []
     *
     * $robots->deleted = 'Y';
     *
     * $robots->getChangedFields();
     * print_r($robots->getChangedFields()); // ["deleted"]
     * $robots->save();
     * print_r($robots->getChangedFields()); // []
     * print_r($robots->getUpdatedFields()); // ["deleted"]
     * </code>
     */
    public function getUpdatedFields()
    {
    }

    /**
     * Sets if a model must use dynamic update instead of the all-field update
     *
     * <code>
     *
     * use Phalcon\Mvc\Model;
     *
     * class Robots extends Model
     * {
     *     public function initialize()
     *     {
     *         $this->useDynamicUpdate(true);
     *     }
     * }
     * </code>
     *
     * @param bool $dynamicUpdate
     */
    protected function useDynamicUpdate(bool $dynamicUpdate)
    {
    }

    /**
     * Returns related records based on defined relations
     *
     * @param string $alias
     * @param array $arguments
     * @return \Phalcon\Mvc\Model\ResultsetInterface
     */
    public function getRelated(string $alias, $arguments = null): ResultsetInterface
    {
    }

    /**
     * Returns related records defined relations depending on the method name
     *
     * @param string $modelName
     * @param string $method
     * @param array $arguments
     * @return mixed
     */
    protected function _getRelatedRecords(string $modelName, string $method, $arguments)
    {
    }

    /**
     * Try to check if the query must invoke a finder
     *
     * @param string $method
     * @param array $arguments
     * @return \Phalcon\Mvc\ModelInterface[]|\Phalcon\Mvc\ModelInterface|boolean
     */
    protected final static function _invokeFinder($method, $arguments)
    {
    }

    /**
     * Handles method calls when a method is not implemented
     *
     * @param string $method
     * @param array $arguments
     * @return	mixed
     */
    public function __call(string $method, $arguments)
    {
    }

    /**
     * Handles method calls when a static method is not implemented
     *
     * @param string $method
     * @param array $arguments
     * @return	mixed
     */
    public static function __callStatic(string $method, $arguments)
    {
    }

    /**
     * Magic method to assign values to the the model
     *
     * @param string $property
     * @param mixed $value
     */
    public function __set(string $property, $value)
    {
    }

    /**
     * Check for, and attempt to use, possible setter.
     *
     * @param string $property
     * @param mixed $value
     * @return string
     */
    protected final function _possibleSetter(string $property, $value)
    {
    }

    /**
     * Magic method to get related records using the relation alias as a property
     *
     * @param string $property
     * @return \Phalcon\Mvc\Model\Resultset|Phalcon\Mvc\Model
     */
    public function __get(string $property)
    {
    }

    /**
     * Magic method to check if a property is a valid relation
     *
     * @param string $property
     * @return bool
     */
    public function __isset(string $property): bool
    {
    }

    /**
     * Serializes the object ignoring connections, services, related objects or static properties
     *
     * @return string
     */
    public function serialize(): string
    {
    }

    /**
     * Unserializes the object from a serialized string
     *
     * @param mixed $data
     */
    public function unserialize($data)
    {
    }

    /**
     * Returns a simple representation of the object that can be used with var_dump
     *
     * <code>
     * var_dump(
     *     $robot->dump()
     * );
     * </code>
     *
     * @return array
     */
    public function dump(): array
    {
    }

    /**
     * Returns the instance as an array representation
     *
     * <code>
     * print_r(
     *     $robot->toArray()
     * );
     * </code>
     *
     * @param array $columns
     * @return array
     */
    public function toArray($columns = null): array
    {
    }

    /**
     * Serializes the object for json_encode
     *
     * <code>
     * echo json_encode($robot);
     * </code>
     *
     * @return array
     */
    public function jsonSerialize(): array
    {
    }

    /**
     * Enables/disables options in the ORM
     *
     * @param array $options
     */
    public static function setup(array $options)
    {
    }

    /**
     * Reset a model instance data
     */
    public function reset()
    {
    }

}
