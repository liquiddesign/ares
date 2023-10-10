<?php
/**
 * ZaznamRes
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
 * ZaznamRes Class Doc Comment
 *
 * @category Class
 * @description Detailní informace o ekonomickém subjektu ze zdroje RES
 * @package  Swagger\Client
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class ZaznamRes extends EkonomickySubjektZaklad 
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'ZaznamRes';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'pravni_forma_ros' => 'string',
        'cz_nace' => 'string[]',
        'doplnkove_pravni_formy' => 'string[]',
        'statisticke_udaje' => '\Ares\Client\Model\StatistickeUdaje',
        'zakladni_uzemni_jednotka' => 'string',
        'primarni_zaznam' => 'bool'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'pravni_forma_ros' => null,
        'cz_nace' => null,
        'doplnkove_pravni_formy' => null,
        'statisticke_udaje' => null,
        'zakladni_uzemni_jednotka' => null,
        'primarni_zaznam' => null
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
        'pravni_forma_ros' => 'pravniFormaRos',
        'cz_nace' => 'czNace',
        'doplnkove_pravni_formy' => 'doplnkovePravniFormy',
        'statisticke_udaje' => 'statistickeUdaje',
        'zakladni_uzemni_jednotka' => 'zakladniUzemniJednotka',
        'primarni_zaznam' => 'primarniZaznam'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'pravni_forma_ros' => 'setPravniFormaRos',
        'cz_nace' => 'setCzNace',
        'doplnkove_pravni_formy' => 'setDoplnkovePravniFormy',
        'statisticke_udaje' => 'setStatistickeUdaje',
        'zakladni_uzemni_jednotka' => 'setZakladniUzemniJednotka',
        'primarni_zaznam' => 'setPrimarniZaznam'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'pravni_forma_ros' => 'getPravniFormaRos',
        'cz_nace' => 'getCzNace',
        'doplnkove_pravni_formy' => 'getDoplnkovePravniFormy',
        'statisticke_udaje' => 'getStatistickeUdaje',
        'zakladni_uzemni_jednotka' => 'getZakladniUzemniJednotka',
        'primarni_zaznam' => 'getPrimarniZaznam'
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

        $this->container['pravni_forma_ros'] = isset($data['pravni_forma_ros']) ? $data['pravni_forma_ros'] : null;
        $this->container['cz_nace'] = isset($data['cz_nace']) ? $data['cz_nace'] : null;
        $this->container['doplnkove_pravni_formy'] = isset($data['doplnkove_pravni_formy']) ? $data['doplnkove_pravni_formy'] : null;
        $this->container['statisticke_udaje'] = isset($data['statisticke_udaje']) ? $data['statisticke_udaje'] : null;
        $this->container['zakladni_uzemni_jednotka'] = isset($data['zakladni_uzemni_jednotka']) ? $data['zakladni_uzemni_jednotka'] : null;
        $this->container['primarni_zaznam'] = isset($data['primarni_zaznam']) ? $data['primarni_zaznam'] : null;
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
     * Gets pravni_forma_ros
     *
     * @return string
     */
    public function getPravniFormaRos()
    {
        return $this->container['pravni_forma_ros'];
    }

    /**
     * Sets pravni_forma_ros
     *
     * @param string $pravni_forma_ros Pr&#225;vn&#237; forma ROS - k&#243;d (ciselnikKod: PravniForma, zdroj:res, com)
     *
     * @return $this
     */
    public function setPravniFormaRos($pravni_forma_ros)
    {
        $this->container['pravni_forma_ros'] = $pravni_forma_ros;

        return $this;
    }

    /**
     * Gets cz_nace
     *
     * @return string[]
     */
    public function getCzNace()
    {
        return $this->container['cz_nace'];
    }

    /**
     * Sets cz_nace
     *
     * @param string[] $cz_nace cz_nace
     *
     * @return $this
     */
    public function setCzNace($cz_nace)
    {
        $this->container['cz_nace'] = $cz_nace;

        return $this;
    }

    /**
     * Gets doplnkove_pravni_formy
     *
     * @return string[]
     */
    public function getDoplnkovePravniFormy()
    {
        return $this->container['doplnkove_pravni_formy'];
    }

    /**
     * Sets doplnkove_pravni_formy
     *
     * @param string[] $doplnkove_pravni_formy doplnkove_pravni_formy
     *
     * @return $this
     */
    public function setDoplnkovePravniFormy($doplnkove_pravni_formy)
    {
        $this->container['doplnkove_pravni_formy'] = $doplnkove_pravni_formy;

        return $this;
    }

    /**
     * Gets statisticke_udaje
     *
     * @return \Ares\Client\Model\StatistickeUdaje
     */
    public function getStatistickeUdaje()
    {
        return $this->container['statisticke_udaje'];
    }

    /**
     * Sets statisticke_udaje
     *
     * @param \Ares\Client\Model\StatistickeUdaje $statisticke_udaje statisticke_udaje
     *
     * @return $this
     */
    public function setStatistickeUdaje($statisticke_udaje)
    {
        $this->container['statisticke_udaje'] = $statisticke_udaje;

        return $this;
    }

    /**
     * Gets zakladni_uzemni_jednotka
     *
     * @return string
     */
    public function getZakladniUzemniJednotka()
    {
        return $this->container['zakladni_uzemni_jednotka'];
    }

    /**
     * Sets zakladni_uzemni_jednotka
     *
     * @param string $zakladni_uzemni_jednotka Z&#225;kladn&#237; &#250;zemn&#237; jednotka s&#237;dla organizace - k&#243;d (ciselnikKod: ZakladniUzemniJednotka)
     *
     * @return $this
     */
    public function setZakladniUzemniJednotka($zakladni_uzemni_jednotka)
    {
        $this->container['zakladni_uzemni_jednotka'] = $zakladni_uzemni_jednotka;

        return $this;
    }

    /**
     * Gets primarni_zaznam
     *
     * @return bool
     */
    public function getPrimarniZaznam()
    {
        return $this->container['primarni_zaznam'];
    }

    /**
     * Sets primarni_zaznam
     *
     * @param bool $primarni_zaznam Logická informace o primárním(hlavním) záznamu ekonomického subjektu.
     *
     * @return $this
     */
    public function setPrimarniZaznam($primarni_zaznam)
    {
        $this->container['primarni_zaznam'] = $primarni_zaznam;

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
