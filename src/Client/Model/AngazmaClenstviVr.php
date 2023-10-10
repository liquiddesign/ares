<?php
/**
 * AngazmaClenstviVr
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
 * AngazmaClenstviVr Class Doc Comment
 *
 * @category Class
 * @package  Swagger\Client
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class AngazmaClenstviVr implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'AngazmaClenstviVr';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'text_za_osobu' => 'string',
        'clenstvi' => '\Ares\Client\Model\ClenstviVr',
        'funkce' => '\Ares\Client\Model\FunkceVr',
        'text_zruseni' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'text_za_osobu' => null,
        'clenstvi' => null,
        'funkce' => null,
        'text_zruseni' => null
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
        'text_za_osobu' => 'textZaOsobu',
        'clenstvi' => 'clenstvi',
        'funkce' => 'funkce',
        'text_zruseni' => 'textZruseni'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'text_za_osobu' => 'setTextZaOsobu',
        'clenstvi' => 'setClenstvi',
        'funkce' => 'setFunkce',
        'text_zruseni' => 'setTextZruseni'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'text_za_osobu' => 'getTextZaOsobu',
        'clenstvi' => 'getClenstvi',
        'funkce' => 'getFunkce',
        'text_zruseni' => 'getTextZruseni'
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
        $this->container['text_za_osobu'] = isset($data['text_za_osobu']) ? $data['text_za_osobu'] : null;
        $this->container['clenstvi'] = isset($data['clenstvi']) ? $data['clenstvi'] : null;
        $this->container['funkce'] = isset($data['funkce']) ? $data['funkce'] : null;
        $this->container['text_zruseni'] = isset($data['text_zruseni']) ? $data['text_zruseni'] : null;
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
     * Gets text_za_osobu
     *
     * @return string
     */
    public function getTextZaOsobu()
    {
        return $this->container['text_za_osobu'];
    }

    /**
     * Sets text_za_osobu
     *
     * @param string $text_za_osobu Doplňuj&#237;c&#237; text k osobě
     *
     * @return $this
     */
    public function setTextZaOsobu($text_za_osobu)
    {
        $this->container['text_za_osobu'] = $text_za_osobu;

        return $this;
    }

    /**
     * Gets clenstvi
     *
     * @return \Ares\Client\Model\ClenstviVr
     */
    public function getClenstvi()
    {
        return $this->container['clenstvi'];
    }

    /**
     * Sets clenstvi
     *
     * @param \Ares\Client\Model\ClenstviVr $clenstvi clenstvi
     *
     * @return $this
     */
    public function setClenstvi($clenstvi)
    {
        $this->container['clenstvi'] = $clenstvi;

        return $this;
    }

    /**
     * Gets funkce
     *
     * @return \Ares\Client\Model\FunkceVr
     */
    public function getFunkce()
    {
        return $this->container['funkce'];
    }

    /**
     * Sets funkce
     *
     * @param \Ares\Client\Model\FunkceVr $funkce funkce
     *
     * @return $this
     */
    public function setFunkce($funkce)
    {
        $this->container['funkce'] = $funkce;

        return $this;
    }

    /**
     * Gets text_zruseni
     *
     * @return string
     */
    public function getTextZruseni()
    {
        return $this->container['text_zruseni'];
    }

    /**
     * Sets text_zruseni
     *
     * @param string $text_zruseni Doplňuj&#237;c&#237; text k zrušen&#237;  osoby
     *
     * @return $this
     */
    public function setTextZruseni($text_zruseni)
    {
        $this->container['text_zruseni'] = $text_zruseni;

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
