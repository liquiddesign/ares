<?php
/**
 * ZivnostiRzpStav
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
 * ZivnostiRzpStav Class Doc Comment
 *
 * @category Class
 * @package  Swagger\Client
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class ZivnostiRzpStav implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'ZivnostiRzpStav';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'pocet_aktivnich' => 'int',
        'pocet_zaniklych' => 'int',
        'pocet_pozastavenych' => 'int',
        'pocet_prerusenych' => 'int',
        'pocet_celkem' => 'int'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'pocet_aktivnich' => 'int32',
        'pocet_zaniklych' => 'int32',
        'pocet_pozastavenych' => 'int32',
        'pocet_prerusenych' => 'int32',
        'pocet_celkem' => 'int32'
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
        'pocet_aktivnich' => 'pocetAktivnich',
        'pocet_zaniklych' => 'pocetZaniklych',
        'pocet_pozastavenych' => 'pocetPozastavenych',
        'pocet_prerusenych' => 'pocetPrerusenych',
        'pocet_celkem' => 'pocetCelkem'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'pocet_aktivnich' => 'setPocetAktivnich',
        'pocet_zaniklych' => 'setPocetZaniklych',
        'pocet_pozastavenych' => 'setPocetPozastavenych',
        'pocet_prerusenych' => 'setPocetPrerusenych',
        'pocet_celkem' => 'setPocetCelkem'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'pocet_aktivnich' => 'getPocetAktivnich',
        'pocet_zaniklych' => 'getPocetZaniklych',
        'pocet_pozastavenych' => 'getPocetPozastavenych',
        'pocet_prerusenych' => 'getPocetPrerusenych',
        'pocet_celkem' => 'getPocetCelkem'
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
        $this->container['pocet_aktivnich'] = isset($data['pocet_aktivnich']) ? $data['pocet_aktivnich'] : null;
        $this->container['pocet_zaniklych'] = isset($data['pocet_zaniklych']) ? $data['pocet_zaniklych'] : null;
        $this->container['pocet_pozastavenych'] = isset($data['pocet_pozastavenych']) ? $data['pocet_pozastavenych'] : null;
        $this->container['pocet_prerusenych'] = isset($data['pocet_prerusenych']) ? $data['pocet_prerusenych'] : null;
        $this->container['pocet_celkem'] = isset($data['pocet_celkem']) ? $data['pocet_celkem'] : null;
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
     * Gets pocet_aktivnich
     *
     * @return int
     */
    public function getPocetAktivnich()
    {
        return $this->container['pocet_aktivnich'];
    }

    /**
     * Sets pocet_aktivnich
     *
     * @param int $pocet_aktivnich Celkov&#253; počet aktivn&#237;ch živnost&#237;
     *
     * @return $this
     */
    public function setPocetAktivnich($pocet_aktivnich)
    {
        $this->container['pocet_aktivnich'] = $pocet_aktivnich;

        return $this;
    }

    /**
     * Gets pocet_zaniklych
     *
     * @return int
     */
    public function getPocetZaniklych()
    {
        return $this->container['pocet_zaniklych'];
    }

    /**
     * Sets pocet_zaniklych
     *
     * @param int $pocet_zaniklych Celkov&#253; počet zanikl&#253;ch živnost&#237;
     *
     * @return $this
     */
    public function setPocetZaniklych($pocet_zaniklych)
    {
        $this->container['pocet_zaniklych'] = $pocet_zaniklych;

        return $this;
    }

    /**
     * Gets pocet_pozastavenych
     *
     * @return int
     */
    public function getPocetPozastavenych()
    {
        return $this->container['pocet_pozastavenych'];
    }

    /**
     * Sets pocet_pozastavenych
     *
     * @param int $pocet_pozastavenych Celkov&#253; počet zanikl&#253;ch živnost&#237;
     *
     * @return $this
     */
    public function setPocetPozastavenych($pocet_pozastavenych)
    {
        $this->container['pocet_pozastavenych'] = $pocet_pozastavenych;

        return $this;
    }

    /**
     * Gets pocet_prerusenych
     *
     * @return int
     */
    public function getPocetPrerusenych()
    {
        return $this->container['pocet_prerusenych'];
    }

    /**
     * Sets pocet_prerusenych
     *
     * @param int $pocet_prerusenych Celkov&#253; počet zanikl&#253;ch živnost&#237;
     *
     * @return $this
     */
    public function setPocetPrerusenych($pocet_prerusenych)
    {
        $this->container['pocet_prerusenych'] = $pocet_prerusenych;

        return $this;
    }

    /**
     * Gets pocet_celkem
     *
     * @return int
     */
    public function getPocetCelkem()
    {
        return $this->container['pocet_celkem'];
    }

    /**
     * Sets pocet_celkem
     *
     * @param int $pocet_celkem Celkov&#253; počet živnost&#237;
     *
     * @return $this
     */
    public function setPocetCelkem($pocet_celkem)
    {
        $this->container['pocet_celkem'] = $pocet_celkem;

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
