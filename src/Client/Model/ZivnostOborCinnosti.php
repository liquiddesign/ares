<?php
/**
 * ZivnostOborCinnosti
 *
 * PHP version 5
 *
 * @category Class
 * @package  Swagger\Client
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */

/**
 * ARES: REST API - veřejné
 *
 * REST rozhraní systému ARES
 *
 * OpenAPI spec version: 0.6.1
 * 
 * Generated by: https://github.com/swagger-api/swagger-codegen.git
 * Swagger Codegen version: 3.0.47
 */
/**
 * NOTE: This class is auto generated by the swagger code generator program.
 * https://github.com/swagger-api/swagger-codegen
 * Do not edit the class manually.
 */

namespace Ares\Client\Model;

use \ArrayAccess;
use \Ares\Client\ObjectSerializer;

/**
 * ZivnostOborCinnosti Class Doc Comment
 *
 * @category Class
 * @package  Swagger\Client
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class ZivnostOborCinnosti implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'ZivnostOborCinnosti';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'platnost_od' => '\DateTime',
        'platnost_do' => '\DateTime',
        'obor_nazev' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'platnost_od' => 'date',
        'platnost_do' => 'date',
        'obor_nazev' => null
    ];

    /**
     * Array of property to type mappings. Used for (de)serialization
     *
     * @return array
     */
    public static function swaggerTypes()
    {
        return self::$swaggerTypes;
    }

    /**
     * Array of property to format mappings. Used for (de)serialization
     *
     * @return array
     */
    public static function swaggerFormats()
    {
        return self::$swaggerFormats;
    }

    /**
     * Array of attributes where the key is the local name,
     * and the value is the original name
     *
     * @var string[]
     */
    protected static $attributeMap = [
        'platnost_od' => 'platnostOd',
        'platnost_do' => 'platnostDo',
        'obor_nazev' => 'oborNazev'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'platnost_od' => 'setPlatnostOd',
        'platnost_do' => 'setPlatnostDo',
        'obor_nazev' => 'setOborNazev'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'platnost_od' => 'getPlatnostOd',
        'platnost_do' => 'getPlatnostDo',
        'obor_nazev' => 'getOborNazev'
    ];

    /**
     * Array of attributes where the key is the local name,
     * and the value is the original name
     *
     * @return array
     */
    public static function attributeMap()
    {
        return self::$attributeMap;
    }

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @return array
     */
    public static function setters()
    {
        return self::$setters;
    }

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @return array
     */
    public static function getters()
    {
        return self::$getters;
    }

    /**
     * The original name of the model.
     *
     * @return string
     */
    public function getModelName()
    {
        return self::$swaggerModelName;
    }



    /**
     * Associative array for storing property values
     *
     * @var mixed[]
     */
    protected $container = [];

    /**
     * Constructor
     *
     * @param mixed[] $data Associated array of property values
     *                      initializing the model
     */
    public function __construct(array $data = null)
    {
        $this->container['platnost_od'] = isset($data['platnost_od']) ? $data['platnost_od'] : null;
        $this->container['platnost_do'] = isset($data['platnost_do']) ? $data['platnost_do'] : null;
        $this->container['obor_nazev'] = isset($data['obor_nazev']) ? $data['obor_nazev'] : null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        return $invalidProperties;
    }

    /**
     * Validate all the properties in the model
     * return true if all passed
     *
     * @return bool True if all properties are valid
     */
    public function valid()
    {
        return count($this->listInvalidProperties()) === 0;
    }


    /**
     * Gets platnost_od
     *
     * @return \DateTime
     */
    public function getPlatnostOd()
    {
        return $this->container['platnost_od'];
    }

    /**
     * Sets platnost_od
     *
     * @param \DateTime $platnost_od Platnost záznamu od data
     *
     * @return $this
     */
    public function setPlatnostOd($platnost_od)
    {
        $this->container['platnost_od'] = $platnost_od;

        return $this;
    }

    /**
     * Gets platnost_do
     *
     * @return \DateTime
     */
    public function getPlatnostDo()
    {
        return $this->container['platnost_do'];
    }

    /**
     * Sets platnost_do
     *
     * @param \DateTime $platnost_do Platnost záznamu do data
     *
     * @return $this
     */
    public function setPlatnostDo($platnost_do)
    {
        $this->container['platnost_do'] = $platnost_do;

        return $this;
    }

    /**
     * Gets obor_nazev
     *
     * @return string
     */
    public function getOborNazev()
    {
        return $this->container['obor_nazev'];
    }

    /**
     * Sets obor_nazev
     *
     * @param string $obor_nazev Název oboru
     *
     * @return $this
     */
    public function setOborNazev($obor_nazev)
    {
        $this->container['obor_nazev'] = $obor_nazev;

        return $this;
    }
    /**
     * Returns true if offset exists. False otherwise.
     *
     * @param integer $offset Offset
     *
     * @return boolean
     */
    #[\ReturnTypeWillChange]
    public function offsetExists($offset)
    {
        return isset($this->container[$offset]);
    }

    /**
     * Gets offset.
     *
     * @param integer $offset Offset
     *
     * @return mixed
     */
    #[\ReturnTypeWillChange]
    public function offsetGet($offset)
    {
        return isset($this->container[$offset]) ? $this->container[$offset] : null;
    }

    /**
     * Sets value based on offset.
     *
     * @param integer $offset Offset
     * @param mixed   $value  Value to be set
     *
     * @return void
     */
    #[\ReturnTypeWillChange]
    public function offsetSet($offset, $value)
    {
        if (is_null($offset)) {
            $this->container[] = $value;
        } else {
            $this->container[$offset] = $value;
        }
    }

    /**
     * Unsets offset.
     *
     * @param integer $offset Offset
     *
     * @return void
     */
    #[\ReturnTypeWillChange]
    public function offsetUnset($offset)
    {
        unset($this->container[$offset]);
    }

    /**
     * Gets the string presentation of the object
     *
     * @return string
     */
    public function __toString()
    {
        if (defined('JSON_PRETTY_PRINT')) { // use JSON pretty print
            return json_encode(
                ObjectSerializer::sanitizeForSerialization($this),
                JSON_PRETTY_PRINT
            );
        }

        return json_encode(ObjectSerializer::sanitizeForSerialization($this));
    }
}
