<?php

namespace Phalcon\Mvc\Model;

use Phalcon\DiInterface;
use Phalcon\Mvc\ModelInterface;
use Phalcon\Mvc\Model\Exception;
use Phalcon\Di\InjectionAwareInterface;
use Phalcon\Mvc\Model\MetaData\Strategy\Introspection;
use Phalcon\Mvc\Model\MetaData\StrategyInterface;

/**
 * Phalcon\Mvc\Model\MetaData
 *
 * <p>Because Phalcon\Mvc\Model requires meta-data like field names, data types, primary keys, etc.
 * this component collect them and store for further querying by Phalcon\Mvc\Model.
 * Phalcon\Mvc\Model\MetaData can also use adapters to store temporarily or permanently the meta-data.</p>
 *
 * <p>A standard Phalcon\Mvc\Model\MetaData can be used to query model attributes:</p>
 *
 * <code>
 * $metaData = new \Phalcon\Mvc\Model\MetaData\Memory();
 *
 * $attributes = $metaData->getAttributes(
 *     new Robots()
 * );
 *
 * print_r($attributes);
 * </code>
 */
abstract class MetaData implements \Phalcon\Di\InjectionAwareInterface, Phalcon\Mvc\Model\MetaDataInterface
{

    const MODELS_ATTRIBUTES = 0;


    const MODELS_PRIMARY_KEY = 1;


    const MODELS_NON_PRIMARY_KEY = 2;


    const MODELS_NOT_NULL = 3;


    const MODELS_DATA_TYPES = 4;


    const MODELS_DATA_TYPES_NUMERIC = 5;


    const MODELS_DATE_AT = 6;


    const MODELS_DATE_IN = 7;


    const MODELS_IDENTITY_COLUMN = 8;


    const MODELS_DATA_TYPES_BIND = 9;


    const MODELS_AUTOMATIC_DEFAULT_INSERT = 10;


    const MODELS_AUTOMATIC_DEFAULT_UPDATE = 11;


    const MODELS_DEFAULT_VALUES = 12;


    const MODELS_EMPTY_STRING_VALUES = 13;


    const MODELS_COLUMN_MAP = 0;


    const MODELS_REVERSE_COLUMN_MAP = 1;


    protected $_dependencyInjector;


    protected $_strategy;


    protected $_metaData;


    protected $_columnMap;


    /**
     * Initialize the metadata for certain table
     *
     * @param \Phalcon\Mvc\ModelInterface $model
     * @param mixed $key
     * @param mixed $table
     * @param mixed $schema
     */
    protected final function _initialize(\Phalcon\Mvc\ModelInterface $model, $key, $table, $schema)
    {
    }

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
     * Set the meta-data extraction strategy
     *
     * @param \Phalcon\Mvc\Model\MetaData\StrategyInterface $strategy
     */
    public function setStrategy(\Phalcon\Mvc\Model\MetaData\StrategyInterface $strategy)
    {
    }

    /**
     * Return the strategy to obtain the meta-data
     *
     * @return StrategyInterface
     */
    public function getStrategy(): StrategyInterface
    {
    }

    /**
     * Reads the complete meta-data for certain model
     *
     * <code>
     * print_r(
     *     $metaData->readMetaData(
     *         new Robots()
     *     )
     * );
     * </code>
     *
     * @param \Phalcon\Mvc\ModelInterface $model
     */
    public final function readMetaData(\Phalcon\Mvc\ModelInterface $model)
    {
    }

    /**
     * Reads meta-data for certain model
     *
     * <code>
     * print_r(
     *     $metaData->readMetaDataIndex(
     *         new Robots(),
     *         0
     *     )
     * );
     * </code>
     *
     * @param \Phalcon\Mvc\ModelInterface $model
     * @param int $index
     */
    public final function readMetaDataIndex(\Phalcon\Mvc\ModelInterface $model, int $index)
    {
    }

    /**
     * Writes meta-data for certain model using a MODEL_ constant
     *
     * <code>
     * print_r(
     *     $metaData->writeColumnMapIndex(
     *         new Robots(),
     *         MetaData::MODELS_REVERSE_COLUMN_MAP,
     *         [
     *             "leName" => "name",
     *         ]
     *     )
     * );
     * </code>
     *
     * @param \Phalcon\Mvc\ModelInterface $model
     * @param int $index
     * @param mixed $data
     */
    public final function writeMetaDataIndex(\Phalcon\Mvc\ModelInterface $model, int $index, $data)
    {
    }

    /**
     * Reads the ordered/reversed column map for certain model
     *
     * <code>
     * print_r(
     *     $metaData->readColumnMap(
     *         new Robots()
     *     )
     * );
     * </code>
     *
     * @param \Phalcon\Mvc\ModelInterface $model
     */
    public final function readColumnMap(\Phalcon\Mvc\ModelInterface $model)
    {
    }

    /**
     * Reads column-map information for certain model using a MODEL_ constant
     *
     * <code>
     * print_r(
     *     $metaData->readColumnMapIndex(
     *         new Robots(),
     *         MetaData::MODELS_REVERSE_COLUMN_MAP
     *     )
     * );
     * </code>
     *
     * @param \Phalcon\Mvc\ModelInterface $model
     * @param int $index
     */
    public final function readColumnMapIndex(\Phalcon\Mvc\ModelInterface $model, int $index)
    {
    }

    /**
     * Returns table attributes names (fields)
     *
     * <code>
     * print_r(
     *     $metaData->getAttributes(
     *         new Robots()
     *     )
     * );
     * </code>
     *
     * @param \Phalcon\Mvc\ModelInterface $model
     * @return array
     */
    public function getAttributes(\Phalcon\Mvc\ModelInterface $model): array
    {
    }

    /**
     * Returns an array of fields which are part of the primary key
     *
     * <code>
     * print_r(
     *     $metaData->getPrimaryKeyAttributes(
     *         new Robots()
     *     )
     * );
     * </code>
     *
     * @param \Phalcon\Mvc\ModelInterface $model
     * @return array
     */
    public function getPrimaryKeyAttributes(\Phalcon\Mvc\ModelInterface $model): array
    {
    }

    /**
     * Returns an array of fields which are not part of the primary key
     *
     * <code>
     * print_r(
     *     $metaData->getNonPrimaryKeyAttributes(
     *         new Robots()
     *     )
     * );
     * </code>
     *
     * @param \Phalcon\Mvc\ModelInterface $model
     * @return array
     */
    public function getNonPrimaryKeyAttributes(\Phalcon\Mvc\ModelInterface $model): array
    {
    }

    /**
     * Returns an array of not null attributes
     *
     * <code>
     * print_r(
     *     $metaData->getNotNullAttributes(
     *         new Robots()
     *     )
     * );
     * </code>
     *
     * @param \Phalcon\Mvc\ModelInterface $model
     * @return array
     */
    public function getNotNullAttributes(\Phalcon\Mvc\ModelInterface $model): array
    {
    }

    /**
     * Returns attributes and their data types
     *
     * <code>
     * print_r(
     *     $metaData->getDataTypes(
     *         new Robots()
     *     )
     * );
     * </code>
     *
     * @param \Phalcon\Mvc\ModelInterface $model
     * @return array
     */
    public function getDataTypes(\Phalcon\Mvc\ModelInterface $model): array
    {
    }

    /**
     * Returns attributes which types are numerical
     *
     * <code>
     * print_r(
     *     $metaData->getDataTypesNumeric(
     *         new Robots()
     *     )
     * );
     * </code>
     *
     * @param \Phalcon\Mvc\ModelInterface $model
     * @return array
     */
    public function getDataTypesNumeric(\Phalcon\Mvc\ModelInterface $model): array
    {
    }

    /**
     * Returns the name of identity field (if one is present)
     *
     * <code>
     * print_r(
     *     $metaData->getIdentityField(
     *         new Robots()
     *     )
     * );
     * </code>
     *
     * @param Phalcon\Mvc\ModelInterface $model
     * @return string
     */
    public function getIdentityField(\Phalcon\Mvc\ModelInterface $model)
    {
    }

    /**
     * Returns attributes and their bind data types
     *
     * <code>
     * print_r(
     *     $metaData->getBindTypes(
     *         new Robots()
     *     )
     * );
     * </code>
     *
     * @param \Phalcon\Mvc\ModelInterface $model
     * @return array
     */
    public function getBindTypes(\Phalcon\Mvc\ModelInterface $model): array
    {
    }

    /**
     * Returns attributes that must be ignored from the INSERT SQL generation
     *
     * <code>
     * print_r(
     *     $metaData->getAutomaticCreateAttributes(
     *         new Robots()
     *     )
     * );
     * </code>
     *
     * @param \Phalcon\Mvc\ModelInterface $model
     * @return array
     */
    public function getAutomaticCreateAttributes(\Phalcon\Mvc\ModelInterface $model): array
    {
    }

    /**
     * Returns attributes that must be ignored from the UPDATE SQL generation
     *
     * <code>
     * print_r(
     *     $metaData->getAutomaticUpdateAttributes(
     *         new Robots()
     *     )
     * );
     * </code>
     *
     * @param \Phalcon\Mvc\ModelInterface $model
     * @return array
     */
    public function getAutomaticUpdateAttributes(\Phalcon\Mvc\ModelInterface $model): array
    {
    }

    /**
     * Set the attributes that must be ignored from the INSERT SQL generation
     *
     * <code>
     * $metaData->setAutomaticCreateAttributes(
     *     new Robots(),
     *     [
     *         "created_at" => true,
     *     ]
     * );
     * </code>
     *
     * @param \Phalcon\Mvc\ModelInterface $model
     * @param array $attributes
     */
    public function setAutomaticCreateAttributes(\Phalcon\Mvc\ModelInterface $model, array $attributes)
    {
    }

    /**
     * Set the attributes that must be ignored from the UPDATE SQL generation
     *
     * <code>
     * $metaData->setAutomaticUpdateAttributes(
     *     new Robots(),
     *     [
     *         "modified_at" => true,
     *     ]
     * );
     * </code>
     *
     * @param \Phalcon\Mvc\ModelInterface $model
     * @param array $attributes
     */
    public function setAutomaticUpdateAttributes(\Phalcon\Mvc\ModelInterface $model, array $attributes)
    {
    }

    /**
     * Set the attributes that allow empty string values
     *
     * <code>
     * $metaData->setEmptyStringAttributes(
     *     new Robots(),
     *     [
     *         "name" => true,
     *     ]
     * );
     * </code>
     *
     * @param \Phalcon\Mvc\ModelInterface $model
     * @param array $attributes
     */
    public function setEmptyStringAttributes(\Phalcon\Mvc\ModelInterface $model, array $attributes)
    {
    }

    /**
     * Returns attributes allow empty strings
     *
     * <code>
     * print_r(
     *     $metaData->getEmptyStringAttributes(
     *         new Robots()
     *     )
     * );
     * </code>
     *
     * @param \Phalcon\Mvc\ModelInterface $model
     * @return array
     */
    public function getEmptyStringAttributes(\Phalcon\Mvc\ModelInterface $model): array
    {
    }

    /**
     * Returns attributes (which have default values) and their default values
     *
     * <code>
     * print_r(
     *     $metaData->getDefaultValues(
     *         new Robots()
     *     )
     * );
     * </code>
     *
     * @param \Phalcon\Mvc\ModelInterface $model
     * @return array
     */
    public function getDefaultValues(\Phalcon\Mvc\ModelInterface $model): array
    {
    }

    /**
     * Returns the column map if any
     *
     * <code>
     * print_r(
     *     $metaData->getColumnMap(
     *         new Robots()
     *     )
     * );
     * </code>
     *
     * @param \Phalcon\Mvc\ModelInterface $model
     * @return array
     */
    public function getColumnMap(\Phalcon\Mvc\ModelInterface $model): array
    {
    }

    /**
     * Returns the reverse column map if any
     *
     * <code>
     * print_r(
     *     $metaData->getReverseColumnMap(
     *         new Robots()
     *     )
     * );
     * </code>
     *
     * @param \Phalcon\Mvc\ModelInterface $model
     * @return array
     */
    public function getReverseColumnMap(\Phalcon\Mvc\ModelInterface $model): array
    {
    }

    /**
     * Check if a model has certain attribute
     *
     * <code>
     * var_dump(
     *     $metaData->hasAttribute(
     *         new Robots(),
     *         "name"
     *     )
     * );
     * </code>
     *
     * @param \Phalcon\Mvc\ModelInterface $model
     * @param string $attribute
     * @return bool
     */
    public function hasAttribute(\Phalcon\Mvc\ModelInterface $model, string $attribute): bool
    {
    }

    /**
     * Checks if the internal meta-data container is empty
     *
     * <code>
     * var_dump(
     *     $metaData->isEmpty()
     * );
     * </code>
     *
     * @return bool
     */
    public function isEmpty(): bool
    {
    }

    /**
     * Resets internal meta-data in order to regenerate it
     *
     * <code>
     * $metaData->reset();
     * </code>
     */
    public function reset()
    {
    }

}
