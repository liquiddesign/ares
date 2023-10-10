<?php
/**
 * Zivnost
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
use \Ares\Client\ObjectSerializer;

/**
 * Zivnost Class Doc Comment
 *
 * @category Class
 * @description Živnosti, které ekonomický subjekt provozuje nebo provozoval ve zdroji RŽP
 * @package  Swagger\Client
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class Zivnost extends ZivnostZaklad 
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'Zivnost';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'obory_cinnosti' => '\Ares\Client\Model\ZivnostOborCinnosti[]',
        'odpovedni_zastupci' => '\Ares\Client\Model\AngazovanaOsobaRzp[]',
        'provozovny' => '\Ares\Client\Model\Provozovna[]'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'obory_cinnosti' => null,
        'odpovedni_zastupci' => null,
        'provozovny' => null
    ];

    /**
     * Array of property to type mappings. Used for (de)serialization
     *
     * @return array
     */
    public static function swaggerTypes()
    {
        return self::$swaggerTypes + parent::swaggerTypes();
    }

    /**
     * Array of property to format mappings. Used for (de)serialization
     *
     * @return array
     */
    public static function swaggerFormats()
    {
        return self::$swaggerFormats + parent::swaggerFormats();
    }

    /**
     * Array of attributes where the key is the local name,
     * and the value is the original name
     *
     * @var string[]
     */
    protected static $attributeMap = [
        'obory_cinnosti' => 'oboryCinnosti',
        'odpovedni_zastupci' => 'odpovedniZastupci',
        'provozovny' => 'provozovny'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'obory_cinnosti' => 'setOboryCinnosti',
        'odpovedni_zastupci' => 'setOdpovedniZastupci',
        'provozovny' => 'setProvozovny'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'obory_cinnosti' => 'getOboryCinnosti',
        'odpovedni_zastupci' => 'getOdpovedniZastupci',
        'provozovny' => 'getProvozovny'
    ];

    /**
     * Array of attributes where the key is the local name,
     * and the value is the original name
     *
     * @return array
     */
    public static function attributeMap()
    {
        return parent::attributeMap() + self::$attributeMap;
    }

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @return array
     */
    public static function setters()
    {
        return parent::setters() + self::$setters;
    }

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @return array
     */
    public static function getters()
    {
        return parent::getters() + self::$getters;
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
     * Constructor
     *
     * @param mixed[] $data Associated array of property values
     *                      initializing the model
     */
    public function __construct(array $data = null)
    {
        parent::__construct($data);

        $this->container['obory_cinnosti'] = isset($data['obory_cinnosti']) ? $data['obory_cinnosti'] : null;
        $this->container['odpovedni_zastupci'] = isset($data['odpovedni_zastupci']) ? $data['odpovedni_zastupci'] : null;
        $this->container['provozovny'] = isset($data['provozovny']) ? $data['provozovny'] : null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = parent::listInvalidProperties();

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
     * Gets obory_cinnosti
     *
     * @return \Ares\Client\Model\ZivnostOborCinnosti[]
     */
    public function getOboryCinnosti()
    {
        return $this->container['obory_cinnosti'];
    }

    /**
     * Sets obory_cinnosti
     *
     * @param \Ares\Client\Model\ZivnostOborCinnosti[] $obory_cinnosti obory_cinnosti
     *
     * @return $this
     */
    public function setOboryCinnosti($obory_cinnosti)
    {
        $this->container['obory_cinnosti'] = $obory_cinnosti;

        return $this;
    }

    /**
     * Gets odpovedni_zastupci
     *
     * @return \Ares\Client\Model\AngazovanaOsobaRzp[]
     */
    public function getOdpovedniZastupci()
    {
        return $this->container['odpovedni_zastupci'];
    }

    /**
     * Sets odpovedni_zastupci
     *
     * @param \Ares\Client\Model\AngazovanaOsobaRzp[] $odpovedni_zastupci odpovedni_zastupci
     *
     * @return $this
     */
    public function setOdpovedniZastupci($odpovedni_zastupci)
    {
        $this->container['odpovedni_zastupci'] = $odpovedni_zastupci;

        return $this;
    }

    /**
     * Gets provozovny
     *
     * @return \Ares\Client\Model\Provozovna[]
     */
    public function getProvozovny()
    {
        return $this->container['provozovny'];
    }

    /**
     * Sets provozovny
     *
     * @param \Ares\Client\Model\Provozovna[] $provozovny provozovny
     *
     * @return $this
     */
    public function setProvozovny($provozovny)
    {
        $this->container['provozovny'] = $provozovny;

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