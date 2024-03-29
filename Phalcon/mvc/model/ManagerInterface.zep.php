<?php

namespace Phalcon\Mvc\Model;

use Phalcon\Db\AdapterInterface;
use Phalcon\Mvc\ModelInterface;

/**
 * Phalcon\Mvc\Model\ManagerInterface
 *
 * Interface for Phalcon\Mvc\Model\Manager
 */
interface ManagerInterface
{

    /**
     * Initializes a model in the model manager
     *
     * @param \Phalcon\Mvc\ModelInterface $model
     */
    public function initialize(\Phalcon\Mvc\ModelInterface $model);

    /**
     * Sets the mapped source for a model
     *
     * @param \Phalcon\Mvc\ModelInterface $model
     * @param string $source
     */
    public function setModelSource(\Phalcon\Mvc\ModelInterface $model, string $source);

    /**
     * Returns the mapped source for a model
     *
     * @param \Phalcon\Mvc\ModelInterface $model
     * @return string
     */
    public function getModelSource(\Phalcon\Mvc\ModelInterface $model): string;

    /**
     * Sets the mapped schema for a model
     *
     * @param \Phalcon\Mvc\ModelInterface $model
     * @param string $schema
     */
    public function setModelSchema(\Phalcon\Mvc\ModelInterface $model, string $schema);

    /**
     * Returns the mapped schema for a model
     *
     * @param \Phalcon\Mvc\ModelInterface $model
     * @return string
     */
    public function getModelSchema(\Phalcon\Mvc\ModelInterface $model): string;

    /**
     * Sets both write and read connection service for a model
     *
     * @param \Phalcon\Mvc\ModelInterface $model
     * @param string $connectionService
     */
    public function setConnectionService(\Phalcon\Mvc\ModelInterface $model, string $connectionService);

    /**
     * Sets read connection service for a model
     *
     * @param \Phalcon\Mvc\ModelInterface $model
     * @param string $connectionService
     */
    public function setReadConnectionService(\Phalcon\Mvc\ModelInterface $model, string $connectionService);

    /**
     * Returns the connection service name used to read data related to a model
     *
     * @param \Phalcon\Mvc\ModelInterface $model
     * @return string
     */
    public function getReadConnectionService(\Phalcon\Mvc\ModelInterface $model): string;

    /**
     * Sets write connection service for a model
     *
     * @param \Phalcon\Mvc\ModelInterface $model
     * @param string $connectionService
     */
    public function setWriteConnectionService(\Phalcon\Mvc\ModelInterface $model, string $connectionService);

    /**
     * Returns the connection service name used to write data related to a model
     *
     * @param \Phalcon\Mvc\ModelInterface $model
     * @return string
     */
    public function getWriteConnectionService(\Phalcon\Mvc\ModelInterface $model): string;

    /**
     * Returns the connection to read data related to a model
     *
     * @param \Phalcon\Mvc\ModelInterface $model
     * @return AdapterInterface
     */
    public function getReadConnection(\Phalcon\Mvc\ModelInterface $model): AdapterInterface;

    /**
     * Returns the connection to write data related to a model
     *
     * @param \Phalcon\Mvc\ModelInterface $model
     * @return AdapterInterface
     */
    public function getWriteConnection(\Phalcon\Mvc\ModelInterface $model): AdapterInterface;

    /**
     * Check of a model is already initialized
     *
     * @param string $modelName
     * @return bool
     */
    public function isInitialized(string $modelName): bool;

    /**
     * Get last initialized model
     *
     * @return ModelInterface
     */
    public function getLastInitialized(): ModelInterface;

    /**
     * Loads a model throwing an exception if it doesn't exist
     *
     * @param string $modelName
     * @param bool $newInstance
     * @return ModelInterface
     */
    public function load(string $modelName, bool $newInstance = false): ModelInterface;

    /**
     * Setup a 1-1 relation between two models
     *
     * @param   \Phalcon\Mvc\ModelInterface $model
     * @param	mixed $fields
     * @param	string $referencedModel
     * @param	mixed $referencedFields
     * @param	array $options
     * @return  \Phalcon\Mvc\Model\RelationInterface
     */
    public function addHasOne(\Phalcon\Mvc\ModelInterface $model, $fields, string $referencedModel, $referencedFields, $options = null);

    /**
     * Setup a relation reverse 1-1  between two models
     *
     * @param 	\Phalcon\Mvc\ModelInterface $model
     * @param	mixed $fields
     * @param	string $referencedModel
     * @param	mixed $referencedFields
     * @param	array $options
     * @return 	\Phalcon\Mvc\Model\RelationInterface
     */
    public function addBelongsTo(\Phalcon\Mvc\ModelInterface $model, $fields, string $referencedModel, $referencedFields, $options = null);

    /**
     * Setup a relation 1-n between two models
     *
     * @param 	\Phalcon\Mvc\ModelInterface $model
     * @param	mixed $fields
     * @param	string $referencedModel
     * @param	mixed $referencedFields
     * @param	array $options
     * @return 	\Phalcon\Mvc\Model\RelationInterface
     */
    public function addHasMany(\Phalcon\Mvc\ModelInterface $model, $fields, string $referencedModel, $referencedFields, $options = null);

    /**
     * Checks whether a model has a belongsTo relation with another model
     *
     * @param 	string $modelName
     * @param 	string $modelRelation
     * @return 	boolean
     */
    public function existsBelongsTo(string $modelName, string $modelRelation);

    /**
     * Checks whether a model has a hasMany relation with another model
     *
     * @param 	string $modelName
     * @param 	string $modelRelation
     * @return 	boolean
     */
    public function existsHasMany(string $modelName, string $modelRelation);

    /**
     * Checks whether a model has a hasOne relation with another model
     *
     * @param 	string $modelName
     * @param 	string $modelRelation
     * @return 	boolean
     */
    public function existsHasOne(string $modelName, string $modelRelation);

    /**
     * Gets belongsTo related records from a model
     *
     * @param string $method
     * @param string $modelName
     * @param string $modelRelation
     * @param \Phalcon\Mvc\Model $record
     * @param array $parameters
     * @return \Phalcon\Mvc\Model\ResultsetInterface
     */
    public function getBelongsToRecords(string $method, string $modelName, $modelRelation, \Phalcon\Mvc\ModelInterface $record, $parameters = null);

    /**
     * Gets hasMany related records from a model
     *
     * @param string $method
     * @param string $modelName
     * @param string $modelRelation
     * @param \Phalcon\Mvc\Model $record
     * @param array $parameters
     * @return \Phalcon\Mvc\Model\ResultsetInterface
     */
    public function getHasManyRecords(string $method, string $modelName, $modelRelation, \Phalcon\Mvc\ModelInterface $record, $parameters = null);

    /**
     * Gets belongsTo related records from a model
     *
     * @param string $method
     * @param string $modelName
     * @param string $modelRelation
     * @param \Phalcon\Mvc\Model $record
     * @param array $parameters
     * @return \Phalcon\Mvc\Model\ResultsetInterface
     */
    public function getHasOneRecords(string $method, string $modelName, $modelRelation, \Phalcon\Mvc\ModelInterface $record, $parameters = null);

    /**
     * Gets belongsTo relations defined on a model
     *
     * @param  \Phalcon\Mvc\ModelInterface $model
     * @return array
     */
    public function getBelongsTo(\Phalcon\Mvc\ModelInterface $model);

    /**
     * Gets hasMany relations defined on a model
     *
     * @param  \Phalcon\Mvc\ModelInterface $model
     * @return array
     */
    public function getHasMany(\Phalcon\Mvc\ModelInterface $model);

    /**
     * Gets hasOne relations defined on a model
     *
     * @param  \Phalcon\Mvc\ModelInterface $model
     * @return array
     */
    public function getHasOne(\Phalcon\Mvc\ModelInterface $model);

    /**
     * Gets hasOne relations defined on a model
     *
     * @param  \Phalcon\Mvc\ModelInterface $model
     * @return array
     */
    public function getHasOneAndHasMany(\Phalcon\Mvc\ModelInterface $model);

    /**
     * Query all the relationships defined on a model
     *
     * @param string $modelName
     * @return \Phalcon\Mvc\Model\RelationInterface[]
     */
    public function getRelations(string $modelName);

    /**
     * Query the relations between two models
     *
     * @param string $first
     * @param string $second
     * @return array
     */
    public function getRelationsBetween(string $first, string $second);

    /**
     * Creates a Phalcon\Mvc\Model\Query without execute it
     *
     * @param string $phql
     * @return \Phalcon\Mvc\Model\QueryInterface
     */
    public function createQuery(string $phql);

    /**
     * Creates a Phalcon\Mvc\Model\Query and execute it
     *
     * @param string $phql
     * @param array $placeholders
     * @param array $types
     * @return \Phalcon\Mvc\Model\QueryInterface
     */
    public function executeQuery(string $phql, $placeholders = null, $types = null);

    /**
     * Creates a Phalcon\Mvc\Model\Query\Builder
     *
     * @param string $params
     * @return \Phalcon\Mvc\Model\Query\BuilderInterface
     */
    public function createBuilder($params = null);

    /**
     * Binds a behavior to a model
     *
     * @param \Phalcon\Mvc\ModelInterface $model
     * @param \Phalcon\Mvc\Model\BehaviorInterface $behavior
     */
    public function addBehavior(\Phalcon\Mvc\ModelInterface $model, \Phalcon\Mvc\Model\BehaviorInterface $behavior);

    /**
     * Receives events generated in the models and dispatches them to an events-manager if available
     * Notify the behaviors that are listening in the model
     *
     * @param string $eventName
     * @param \Phalcon\Mvc\ModelInterface $model
     */
    public function notifyEvent(string $eventName, \Phalcon\Mvc\ModelInterface $model);

    /**
     * Dispatch an event to the listeners and behaviors
     * This method expects that the endpoint listeners/behaviors returns true
     * meaning that a least one is implemented
     *
     * @param \Phalcon\Mvc\ModelInterface $model
     * @param string $eventName
     * @param array $data
     * @return boolean
     */
    public function missingMethod(\Phalcon\Mvc\ModelInterface $model, string $eventName, $data);

    /**
     * Returns the last query created or executed in the models manager
     *
     * @return \Phalcon\Mvc\Model\QueryInterface
     */
    public function getLastQuery();

    /**
     * Returns a relation by its alias
     *
     * @param string $modelName
     * @param string $alias
     * @return \Phalcon\Mvc\Model\Relation
     */
    public function getRelationByAlias(string $modelName, string $alias);

}
