<?php
/**
 * StatutatniOrganRcns
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
 * StatutatniOrganRcns Class Doc Comment
 *
 * @category Class
 * @package  Swagger\Client
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class StatutatniOrganRcns implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'StatutatniOrganRcns';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'subjekt_cirkev' => '\Ares\Client\Model\SubjektCirkev',
        'subjekt_svaz_cirkvi' => '\Ares\Client\Model\SubjektSvazCirkvi',
        'subjekt_pravnicka_osoba' => '\Ares\Client\Model\SubjektPravnickaOsoba'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'subjekt_cirkev' => null,
        'subjekt_svaz_cirkvi' => null,
        'subjekt_pravnicka_osoba' => null
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
        'subjekt_cirkev' => 'subjektCirkev',
        'subjekt_svaz_cirkvi' => 'subjektSvazCirkvi',
        'subjekt_pravnicka_osoba' => 'subjektPravnickaOsoba'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'subjekt_cirkev' => 'setSubjektCirkev',
        'subjekt_svaz_cirkvi' => 'setSubjektSvazCirkvi',
        'subjekt_pravnicka_osoba' => 'setSubjektPravnickaOsoba'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'subjekt_cirkev' => 'getSubjektCirkev',
        'subjekt_svaz_cirkvi' => 'getSubjektSvazCirkvi',
        'subjekt_pravnicka_osoba' => 'getSubjektPravnickaOsoba'
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
        $this->container['subjekt_cirkev'] = isset($data['subjekt_cirkev']) ? $data['subjekt_cirkev'] : null;
        $this->container['subjekt_svaz_cirkvi'] = isset($data['subjekt_svaz_cirkvi']) ? $data['subjekt_svaz_cirkvi'] : null;
        $this->container['subjekt_pravnicka_osoba'] = isset($data['subjekt_pravnicka_osoba']) ? $data['subjekt_pravnicka_osoba'] : null;
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
     * Gets subjekt_cirkev
     *
     * @return \Ares\Client\Model\SubjektCirkev
     */
    public function getSubjektCirkev()
    {
        return $this->container['subjekt_cirkev'];
    }

    /**
     * Sets subjekt_cirkev
     *
     * @param \Ares\Client\Model\SubjektCirkev $subjekt_cirkev subjekt_cirkev
     *
     * @return $this
     */
    public function setSubjektCirkev($subjekt_cirkev)
    {
        $this->container['subjekt_cirkev'] = $subjekt_cirkev;

        return $this;
    }

    /**
     * Gets subjekt_svaz_cirkvi
     *
     * @return \Ares\Client\Model\SubjektSvazCirkvi
     */
    public function getSubjektSvazCirkvi()
    {
        return $this->container['subjekt_svaz_cirkvi'];
    }

    /**
     * Sets subjekt_svaz_cirkvi
     *
     * @param \Ares\Client\Model\SubjektSvazCirkvi $subjekt_svaz_cirkvi subjekt_svaz_cirkvi
     *
     * @return $this
     */
    public function setSubjektSvazCirkvi($subjekt_svaz_cirkvi)
    {
        $this->container['subjekt_svaz_cirkvi'] = $subjekt_svaz_cirkvi;

        return $this;
    }

    /**
     * Gets subjekt_pravnicka_osoba
     *
     * @return \Ares\Client\Model\SubjektPravnickaOsoba
     */
    public function getSubjektPravnickaOsoba()
    {
        return $this->container['subjekt_pravnicka_osoba'];
    }

    /**
     * Sets subjekt_pravnicka_osoba
     *
     * @param \Ares\Client\Model\SubjektPravnickaOsoba $subjekt_pravnicka_osoba subjekt_pravnicka_osoba
     *
     * @return $this
     */
    public function setSubjektPravnickaOsoba($subjekt_pravnicka_osoba)
    {
        $this->container['subjekt_pravnicka_osoba'] = $subjekt_pravnicka_osoba;

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
