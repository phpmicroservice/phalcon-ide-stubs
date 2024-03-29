<?php

namespace Phalcon\Mvc\Model;

use Phalcon\DiInterface;
use Phalcon\Mvc\Model\Relation;
use Phalcon\Mvc\Model\RelationInterface;
use Phalcon\Mvc\Model\Exception;
use Phalcon\Mvc\ModelInterface;
use Phalcon\Db\AdapterInterface;
use Phalcon\Mvc\Model\ResultsetInterface;
use Phalcon\Mvc\Model\ManagerInterface;
use Phalcon\Di\InjectionAwareInterface;
use Phalcon\Events\EventsAwareInterface;
use Phalcon\Mvc\Model\Query;
use Phalcon\Mvc\Model\QueryInterface;
use Phalcon\Mvc\Model\Query\Builder;
use Phalcon\Mvc\Model\Query\BuilderInterface;
use Phalcon\Mvc\Model\BehaviorInterface;
use Phalcon\Events\ManagerInterface as EventsManagerInterface;

/**
 * Phalcon\Mvc\Model\Manager
 *
 * This components controls the initialization of models, keeping record of relations
 * between the different models of the application.
 *
 * A ModelsManager is injected to a model via a Dependency Injector/Services Container such as Phalcon\Di.
 *
 * <code>
 * use Phalcon\Di;
 * use Phalcon\Mvc\Model\Manager as ModelsManager;
 *
 * $di = new Di();
 *
 * $di->set(
 *     "modelsManager",
 *     function() {
 *         return new ModelsManager();
 *     }
 * );
 *
 * $robot = new Robots($di);
 * </code>
 */
class Manager implements \Phalcon\Mvc\Model\ManagerInterface, \Phalcon\Di\InjectionAwareInterface, \Phalcon\Events\EventsAwareInterface
{

    protected $_dependencyInjector;


    protected $_eventsManager;


    protected $_customEventsManager;


    protected $_readConnectionServices;


    protected $_writeConnectionServices;


    protected $_aliases;


    protected $_modelVisibility = array();

    /**
     * Has many relations
     */
    protected $_hasMany;

    /**
     * Has many relations by model
     */
    protected $_hasManySingle;

    /**
     * Has one relations
     */
    protected $_hasOne;

    /**
     * Has one relations by model
     */
    protected $_hasOneSingle;

    /**
     * Belongs to relations
     */
    protected $_belongsTo;

    /**
     * All the relationships by model
     */
    protected $_belongsToSingle;

    /**
     * Has many-Through relations
     */
    protected $_hasManyToMany;

    /**
     * Has many-Through relations by model
     */
    protected $_hasManyToManySingle;

    /**
     * Mark initialized models
     */
    protected $_initialized;


    protected $_prefix = '';


    protected $_sources;


    protected $_schemas;

    /**
     * Models' behaviors
     */
    protected $_behaviors;

    /**
     * Last model initialized
     */
    protected $_lastInitialized;

    /**
     * Last query created/executed
     */
    protected $_lastQuery;

    /**
     * Stores a list of reusable instances
     */
    protected $_reusable;


    protected $_keepSnapshots;

    /**
     * Does the model use dynamic update, instead of updating all rows?
     */
    protected $_dynamicUpdate;


    protected $_namespaceAliases;


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
     * @return DiInterface
     */
    public function getDI(): DiInterface
    {
    }

    /**
     * Sets a global events manager
     *
     * @param \Phalcon\Events\ManagerInterface $eventsManager
     * @return Manager
     */
    public function setEventsManager(\Phalcon\Events\ManagerInterface $eventsManager): Manager
    {
    }

    /**
     * Returns the internal event manager
     *
     * @return EventsManagerInterface
     */
    public function getEventsManager(): EventsManagerInterface
    {
    }

    /**
     * Sets a custom events manager for a specific model
     *
     * @param \Phalcon\Mvc\ModelInterface $model
     * @param \Phalcon\Events\ManagerInterface $eventsManager
     */
    public function setCustomEventsManager(\Phalcon\Mvc\ModelInterface $model, \Phalcon\Events\ManagerInterface $eventsManager)
    {
    }

    /**
     * Returns a custom events manager related to a model
     *
     * @param \Phalcon\Mvc\ModelInterface $model
     * @return bool|\Phalcon\Events\ManagerInterface
     */
    public function getCustomEventsManager(\Phalcon\Mvc\ModelInterface $model)
    {
    }

    /**
     * Initializes a model in the model manager
     *
     * @param \Phalcon\Mvc\ModelInterface $model
     * @return bool
     */
    public function initialize(\Phalcon\Mvc\ModelInterface $model): bool
    {
    }

    /**
     * Check whether a model is already initialized
     *
     * @param string $modelName
     * @return bool
     */
    public function isInitialized(string $modelName): bool
    {
    }

    /**
     * Get last initialized model
     *
     * @return ModelInterface
     */
    public function getLastInitialized(): ModelInterface
    {
    }

    /**
     * Loads a model throwing an exception if it doesn't exist
     *
     * @param string $modelName
     * @param bool $newInstance
     * @return ModelInterface
     */
    public function load(string $modelName, bool $newInstance = false): ModelInterface
    {
    }

    /**
     * Sets the prefix for all model sources.
     *
     * <code>
     * use Phalcon\Mvc\Model\Manager;
     *
     * $di->set("modelsManager", function () {
     *     $modelsManager = new Manager();
     *     $modelsManager->setModelPrefix("wp_");
     *
     *     return $modelsManager;
     * });
     *
     * $robots = new Robots();
     * echo $robots->getSource(); // wp_robots
     * </code>
     *
     * @param string $prefix
     */
    public function setModelPrefix(string $prefix)
    {
    }

    /**
     * Returns the prefix for all model sources.
     *
     * <code>
     * use Phalcon\Mvc\Model\Manager;
     *
     * $di->set("modelsManager", function () {
     *     $modelsManager = new Manager();
     *     $modelsManager->setModelPrefix("wp_");
     *
     *     return $modelsManager;
     * });
     *
     * $robots = new Robots();
     * echo $robots->getSource(); // wp_robots
     * </code>
     *
     * @return string
     */
    public function getModelPrefix(): string
    {
    }

    /**
     * Sets the mapped source for a model
     *
     * @param \Phalcon\Mvc\ModelInterface $model
     * @param string $source
     */
    public function setModelSource(\Phalcon\Mvc\ModelInterface $model, string $source)
    {
    }

    /**
     * Check whether a model property is declared as public.
     *
     * <code>
     * $isPublic = $manager->isVisibleModelProperty(
     *     new Robots(),
     *     "name"
     * );
     * </code>
     *
     * @param \Phalcon\Mvc\ModelInterface $model
     * @param string $property
     * @return bool
     */
    public final function isVisibleModelProperty(\Phalcon\Mvc\ModelInterface $model, string $property): bool
    {
    }

    /**
     * Returns the mapped source for a model
     *
     * @param \Phalcon\Mvc\ModelInterface $model
     * @return string
     */
    public function getModelSource(\Phalcon\Mvc\ModelInterface $model): string
    {
    }

    /**
     * Sets the mapped schema for a model
     *
     * @param \Phalcon\Mvc\ModelInterface $model
     * @param string $schema
     */
    public function setModelSchema(\Phalcon\Mvc\ModelInterface $model, string $schema)
    {
    }

    /**
     * Returns the mapped schema for a model
     *
     * @param \Phalcon\Mvc\ModelInterface $model
     * @return string
     */
    public function getModelSchema(\Phalcon\Mvc\ModelInterface $model): string
    {
    }

    /**
     * Sets both write and read connection service for a model
     *
     * @param \Phalcon\Mvc\ModelInterface $model
     * @param string $connectionService
     */
    public function setConnectionService(\Phalcon\Mvc\ModelInterface $model, string $connectionService)
    {
    }

    /**
     * Sets write connection service for a model
     *
     * @param \Phalcon\Mvc\ModelInterface $model
     * @param string $connectionService
     */
    public function setWriteConnectionService(\Phalcon\Mvc\ModelInterface $model, string $connectionService)
    {
    }

    /**
     * Sets read connection service for a model
     *
     * @param \Phalcon\Mvc\ModelInterface $model
     * @param string $connectionService
     */
    public function setReadConnectionService(\Phalcon\Mvc\ModelInterface $model, string $connectionService)
    {
    }

    /**
     * Returns the connection to read data related to a model
     *
     * @param \Phalcon\Mvc\ModelInterface $model
     * @return AdapterInterface
     */
    public function getReadConnection(\Phalcon\Mvc\ModelInterface $model): AdapterInterface
    {
    }

    /**
     * Returns the connection to write data related to a model
     *
     * @param \Phalcon\Mvc\ModelInterface $model
     * @return AdapterInterface
     */
    public function getWriteConnection(\Phalcon\Mvc\ModelInterface $model): AdapterInterface
    {
    }

    /**
     * Returns the connection to read or write data related to a model depending on the connection services.
     *
     * @param \Phalcon\Mvc\ModelInterface $model
     * @param mixed $connectionServices
     * @return AdapterInterface
     */
    protected function _getConnection(\Phalcon\Mvc\ModelInterface $model, $connectionServices): AdapterInterface
    {
    }

    /**
     * Returns the connection service name used to read data related to a model
     *
     * @param \Phalcon\Mvc\ModelInterface $model
     * @return string
     */
    public function getReadConnectionService(\Phalcon\Mvc\ModelInterface $model): string
    {
    }

    /**
     * Returns the connection service name used to write data related to a model
     *
     * @param \Phalcon\Mvc\ModelInterface $model
     * @return string
     */
    public function getWriteConnectionService(\Phalcon\Mvc\ModelInterface $model): string
    {
    }

    /**
     * Returns the connection service name used to read or write data related to
     * a model depending on the connection services
     *
     * @param \Phalcon\Mvc\ModelInterface $model
     * @param mixed $connectionServices
     * @return string
     */
    public function _getConnectionService(\Phalcon\Mvc\ModelInterface $model, $connectionServices): string
    {
    }

    /**
     * Receives events generated in the models and dispatches them to an events-manager if available
     * Notify the behaviors that are listening in the model
     *
     * @param string $eventName
     * @param \Phalcon\Mvc\ModelInterface $model
     */
    public function notifyEvent(string $eventName, \Phalcon\Mvc\ModelInterface $model)
    {
    }

    /**
     * Dispatch an event to the listeners and behaviors
     * This method expects that the endpoint listeners/behaviors returns true
     * meaning that a least one was implemented
     *
     * @param \Phalcon\Mvc\ModelInterface $model
     * @param string $eventName
     * @param mixed $data
     */
    public function missingMethod(\Phalcon\Mvc\ModelInterface $model, string $eventName, $data)
    {
    }

    /**
     * Binds a behavior to a model
     *
     * @param \Phalcon\Mvc\ModelInterface $model
     * @param \Phalcon\Mvc\Model\BehaviorInterface $behavior
     */
    public function addBehavior(\Phalcon\Mvc\ModelInterface $model, \Phalcon\Mvc\Model\BehaviorInterface $behavior)
    {
    }

    /**
     * Sets if a model must keep snapshots
     *
     * @param \Phalcon\Mvc\ModelInterface $model
     * @param bool $keepSnapshots
     */
    public function keepSnapshots(\Phalcon\Mvc\ModelInterface $model, bool $keepSnapshots)
    {
    }

    /**
     * Checks if a model is keeping snapshots for the queried records
     *
     * @param \Phalcon\Mvc\ModelInterface $model
     * @return bool
     */
    public function isKeepingSnapshots(\Phalcon\Mvc\ModelInterface $model): bool
    {
    }

    /**
     * Sets if a model must use dynamic update instead of the all-field update
     *
     * @param \Phalcon\Mvc\ModelInterface $model
     * @param bool $dynamicUpdate
     */
    public function useDynamicUpdate(\Phalcon\Mvc\ModelInterface $model, bool $dynamicUpdate)
    {
    }

    /**
     * Checks if a model is using dynamic update instead of all-field update
     *
     * @param \Phalcon\Mvc\ModelInterface $model
     * @return bool
     */
    public function isUsingDynamicUpdate(\Phalcon\Mvc\ModelInterface $model): bool
    {
    }

    /**
     * Setup a 1-1 relation between two models
     *
     * @param Phalcon\Mvc\Model $model
     * @param mixed $fields
     * @param string $referencedModel
     * @param mixed $referencedFields
     * @param array $options
     * @return  Phalcon\Mvc\Model\Relation
     */
    public function addHasOne(\Phalcon\Mvc\ModelInterface $model, $fields, string $referencedModel, $referencedFields, $options = null): Relation
    {
    }

    /**
     * Setup a relation reverse many to one between two models
     *
     * @param Phalcon\Mvc\Model $model
     * @param mixed $fields
     * @param string $referencedModel
     * @param mixed $referencedFields
     * @param array $options
     * @return  Phalcon\Mvc\Model\Relation
     */
    public function addBelongsTo(\Phalcon\Mvc\ModelInterface $model, $fields, string $referencedModel, $referencedFields, $options = null): Relation
    {
    }

    /**
     * Setup a relation 1-n between two models
     *
     * @param Phalcon\Mvc\ModelInterface $model
     * @param mixed $fields
     * @param string $referencedModel
     * @param mixed $referencedFields
     * @param array $options
     * @return Relation
     */
    public function addHasMany(\Phalcon\Mvc\ModelInterface $model, $fields, string $referencedModel, $referencedFields, $options = null): Relation
    {
    }

    /**
     * Setups a relation n-m between two models
     *
     * @param Phalcon\Mvc\ModelInterface $model
     * @param string $fields
     * @param string $intermediateModel
     * @param string $intermediateFields
     * @param string $intermediateReferencedFields
     * @param string $referencedModel
     * @param string $referencedFields
     * @param array $options
     * @return  Phalcon\Mvc\Model\Relation
     */
    public function addHasManyToMany(\Phalcon\Mvc\ModelInterface $model, $fields, string $intermediateModel, $intermediateFields, $intermediateReferencedFields, string $referencedModel, $referencedFields, $options = null): Relation
    {
    }

    /**
     * Checks whether a model has a belongsTo relation with another model
     *
     * @param string $modelName
     * @param string $modelRelation
     * @return bool
     */
    public function existsBelongsTo(string $modelName, string $modelRelation): bool
    {
    }

    /**
     * Checks whether a model has a hasMany relation with another model
     *
     * @param string $modelName
     * @param string $modelRelation
     * @return bool
     */
    public function existsHasMany(string $modelName, string $modelRelation): bool
    {
    }

    /**
     * Checks whether a model has a hasOne relation with another model
     *
     * @param string $modelName
     * @param string $modelRelation
     * @return bool
     */
    public function existsHasOne(string $modelName, string $modelRelation): bool
    {
    }

    /**
     * Checks whether a model has a hasManyToMany relation with another model
     *
     * @param string $modelName
     * @param string $modelRelation
     * @return bool
     */
    public function existsHasManyToMany(string $modelName, string $modelRelation): bool
    {
    }

    /**
     * Returns a relation by its alias
     *
     * @param string $modelName
     * @param string $alias
     * @return bool|\Phalcon\Mvc\Model\Relation
     */
    public function getRelationByAlias(string $modelName, string $alias)
    {
    }

    /**
     * Merge two arrays of find parameters
     *
     * @param mixed $findParamsOne
     * @param mixed $findParamsTwo
     * @return array
     */
    protected final function _mergeFindParameters($findParamsOne, $findParamsTwo): array
    {
    }

    /**
     * Helper method to query records based on a relation definition
     *
     * @return \Phalcon\Mvc\Model\Resultset\Simple|Phalcon\Mvc\Model\Resultset\Simple|int|false
     * @param \Phalcon\Mvc\Model\RelationInterface $relation
     * @param string $method
     * @param \Phalcon\Mvc\ModelInterface $record
     * @param mixed $parameters
     */
    public function getRelationRecords(\Phalcon\Mvc\Model\RelationInterface $relation, string $method, \Phalcon\Mvc\ModelInterface $record, $parameters = null)
    {
    }

    /**
     * Returns a reusable object from the internal list
     *
     * @param string $modelName
     * @param string $key
     */
    public function getReusableRecords(string $modelName, string $key)
    {
    }

    /**
     * Stores a reusable record in the internal list
     *
     * @param string $modelName
     * @param string $key
     * @param mixed $records
     */
    public function setReusableRecords(string $modelName, string $key, $records)
    {
    }

    /**
     * Clears the internal reusable list
     */
    public function clearReusableObjects()
    {
    }

    /**
     * Gets belongsTo related records from a model
     *
     * @param string $method
     * @param string $modelName
     * @param mixed $modelRelation
     * @param \Phalcon\Mvc\ModelInterface $record
     * @param mixed $parameters
     * @return bool|\Phalcon\Mvc\Model\ResultsetInterface
     */
    public function getBelongsToRecords(string $method, string $modelName, $modelRelation, \Phalcon\Mvc\ModelInterface $record, $parameters = null)
    {
    }

    /**
     * Gets hasMany related records from a model
     *
     * @param string $method
     * @param string $modelName
     * @param mixed $modelRelation
     * @param \Phalcon\Mvc\ModelInterface $record
     * @param mixed $parameters
     * @return bool|\Phalcon\Mvc\Model\ResultsetInterface
     */
    public function getHasManyRecords(string $method, string $modelName, $modelRelation, \Phalcon\Mvc\ModelInterface $record, $parameters = null)
    {
    }

    /**
     * Gets belongsTo related records from a model
     *
     * @param string $method
     * @param string $modelName
     * @param mixed $modelRelation
     * @param \Phalcon\Mvc\ModelInterface $record
     * @param mixed $parameters
     * @return bool|\Phalcon\Mvc\ModelInterface
     */
    public function getHasOneRecords(string $method, string $modelName, $modelRelation, \Phalcon\Mvc\ModelInterface $record, $parameters = null)
    {
    }

    /**
     * Gets all the belongsTo relations defined in a model
     *
     * <code>
     * $relations = $modelsManager->getBelongsTo(
     *     new Robots()
     * );
     * </code>
     *
     * @param \Phalcon\Mvc\ModelInterface $model
     * @return array|\Phalcon\Mvc\Model\RelationInterface[]
     */
    public function getBelongsTo(\Phalcon\Mvc\ModelInterface $model): array
    {
    }

    /**
     * Gets hasMany relations defined on a model
     *
     * @param \Phalcon\Mvc\ModelInterface $model
     * @return array|\Phalcon\Mvc\Model\RelationInterface[]
     */
    public function getHasMany(\Phalcon\Mvc\ModelInterface $model): array
    {
    }

    /**
     * Gets hasOne relations defined on a model
     *
     * @param \Phalcon\Mvc\ModelInterface $model
     * @return array
     */
    public function getHasOne(\Phalcon\Mvc\ModelInterface $model): array
    {
    }

    /**
     * Gets hasManyToMany relations defined on a model
     *
     * @param \Phalcon\Mvc\ModelInterface $model
     * @return array|\Phalcon\Mvc\Model\RelationInterface[]
     */
    public function getHasManyToMany(\Phalcon\Mvc\ModelInterface $model): array
    {
    }

    /**
     * Gets hasOne relations defined on a model
     *
     * @param \Phalcon\Mvc\ModelInterface $model
     * @return array|\Phalcon\Mvc\Model\RelationInterface[]
     */
    public function getHasOneAndHasMany(\Phalcon\Mvc\ModelInterface $model): array
    {
    }

    /**
     * Query all the relationships defined on a model
     *
     * @param string $modelName
     * @return array|\Phalcon\Mvc\Model\RelationInterface[]
     */
    public function getRelations(string $modelName): array
    {
    }

    /**
     * Query the first relationship defined between two models
     *
     * @param string $first
     * @param string $second
     * @return array|bool|\Phalcon\Mvc\Model\RelationInterface[]
     */
    public function getRelationsBetween(string $first, string $second)
    {
    }

    /**
     * Creates a Phalcon\Mvc\Model\Query without execute it
     *
     * @param string $phql
     * @return QueryInterface
     */
    public function createQuery(string $phql): QueryInterface
    {
    }

    /**
     * Creates a Phalcon\Mvc\Model\Query and execute it
     *
     * @param string $phql
     * @param mixed $placeholders
     * @param mixed $types
     * @return QueryInterface
     */
    public function executeQuery(string $phql, $placeholders = null, $types = null): QueryInterface
    {
    }

    /**
     * Creates a Phalcon\Mvc\Model\Query\Builder
     *
     * @param mixed $params
     * @return BuilderInterface
     */
    public function createBuilder($params = null): BuilderInterface
    {
    }

    /**
     * Returns the last query created or executed in the models manager
     *
     * @return QueryInterface
     */
    public function getLastQuery(): QueryInterface
    {
    }

    /**
     * Registers shorter aliases for namespaces in PHQL statements
     *
     * @param string $alias
     * @param string $namespaceName
     */
    public function registerNamespaceAlias(string $alias, string $namespaceName)
    {
    }

    /**
     * Returns a real namespace from its alias
     *
     * @param string $alias
     * @return string
     */
    public function getNamespaceAlias(string $alias): string
    {
    }

    /**
     * Returns all the registered namespace aliases
     *
     * @return array
     */
    public function getNamespaceAliases(): array
    {
    }

    /**
     * Destroys the current PHQL cache
     */
    public function __destruct()
    {
    }

}
