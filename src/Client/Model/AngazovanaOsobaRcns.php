<?php
/**
 * AngazovanaOsobaRcns
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
 * AngazovanaOsobaRcns Class Doc Comment
 *
 * @category Class
 * @package  Swagger\Client
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class AngazovanaOsobaRcns extends AngazovanaOsoba 
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'AngazovanaOsobaRcns';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'platnost_od' => '\DateTime',
        'platnost_do' => '\DateTime',
        'nazev_angazma' => 'string',
        'poznamka' => 'string',
        'kod_statu' => 'string',
        'pravni_forma' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'platnost_od' => 'date',
        'platnost_do' => 'date',
        'nazev_angazma' => null,
        'poznamka' => null,
        'kod_statu' => null,
        'pravni_forma' => null
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
        'platnost_od' => 'platnostOd',
        'platnost_do' => 'platnostDo',
        'nazev_angazma' => 'nazevAngazma',
        'poznamka' => 'poznamka',
        'kod_statu' => 'kodStatu',
        'pravni_forma' => 'pravniForma'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'platnost_od' => 'setPlatnostOd',
        'platnost_do' => 'setPlatnostDo',
        'nazev_angazma' => 'setNazevAngazma',
        'poznamka' => 'setPoznamka',
        'kod_statu' => 'setKodStatu',
        'pravni_forma' => 'setPravniForma'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'platnost_od' => 'getPlatnostOd',
        'platnost_do' => 'getPlatnostDo',
        'nazev_angazma' => 'getNazevAngazma',
        'poznamka' => 'getPoznamka',
        'kod_statu' => 'getKodStatu',
        'pravni_forma' => 'getPravniForma'
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

        $this->container['platnost_od'] = isset($data['platnost_od']) ? $data['platnost_od'] : null;
        $this->container['platnost_do'] = isset($data['platnost_do']) ? $data['platnost_do'] : null;
        $this->container['nazev_angazma'] = isset($data['nazev_angazma']) ? $data['nazev_angazma'] : null;
        $this->container['poznamka'] = isset($data['poznamka']) ? $data['poznamka'] : null;
        $this->container['kod_statu'] = isset($data['kod_statu']) ? $data['kod_statu'] : null;
        $this->container['pravni_forma'] = isset($data['pravni_forma']) ? $data['pravni_forma'] : null;
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
     * @param \DateTime $platnost_od Platnost angažované osoby od data
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
     * @param \DateTime $platnost_do Platnost angažované osoby od data
     *
     * @return $this
     */
    public function setPlatnostDo($platnost_do)
    {
        $this->container['platnost_do'] = $platnost_do;

        return $this;
    }

    /**
     * Gets nazev_angazma
     *
     * @return string
     */
    public function getNazevAngazma()
    {
        return $this->container['nazev_angazma'];
    }

    /**
     * Sets nazev_angazma
     *
     * @param string $nazev_angazma nazev_angazma
     *
     * @return $this
     */
    public function setNazevAngazma($nazev_angazma)
    {
        $this->container['nazev_angazma'] = $nazev_angazma;

        return $this;
    }

    /**
     * Gets poznamka
     *
     * @return string
     */
    public function getPoznamka()
    {
        return $this->container['poznamka'];
    }

    /**
     * Sets poznamka
     *
     * @param string $poznamka poznamka
     *
     * @return $this
     */
    public function setPoznamka($poznamka)
    {
        $this->container['poznamka'] = $poznamka;

        return $this;
    }

    /**
     * Gets kod_statu
     *
     * @return string
     */
    public function getKodStatu()
    {
        return $this->container['kod_statu'];
    }

    /**
     * Sets kod_statu
     *
     * @param string $kod_statu Kód státu  (ciselnikKod: Stat)
     *
     * @return $this
     */
    public function setKodStatu($kod_statu)
    {
        $this->container['kod_statu'] = $kod_statu;

        return $this;
    }

    /**
     * Gets pravni_forma
     *
     * @return string
     */
    public function getPravniForma()
    {
        return $this->container['pravni_forma'];
    }

    /**
     * Sets pravni_forma
     *
     * @param string $pravni_forma Právní forma - kód (ciselnikKod: PravniForma)
     *
     * @return $this
     */
    public function setPravniForma($pravni_forma)
    {
        $this->container['pravni_forma'] = $pravni_forma;

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
