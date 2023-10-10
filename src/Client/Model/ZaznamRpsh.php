<?php
/**
 * ZaznamRpsh
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
 * ZaznamRpsh Class Doc Comment
 *
 * @category Class
 * @description Detailní informace o ekonomickém subjektu ze zdroje RPSH
 * @package  Swagger\Client
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class ZaznamRpsh extends EkonomickySubjektZaklad 
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'ZaznamRpsh';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'cislo_registrace' => 'string',
        'typ_subjektu' => 'string',
        'obchodni_jmeno_zkratka' => 'string',
        'angazovane_osoby' => '\Ares\Client\Model\AngazovanaOsobaRpsh[]',
        'primarni_zaznam' => 'bool',
        'zmena_stanov' => '\Ares\Client\Model\ZmenaStanov[]',
        'statutarni_organ' => '\Ares\Client\Model\StatutarniOrgan[]',
        'stav_subjektu' => '\Ares\Client\Model\StavSubjektu[]'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'cislo_registrace' => null,
        'typ_subjektu' => null,
        'obchodni_jmeno_zkratka' => null,
        'angazovane_osoby' => null,
        'primarni_zaznam' => null,
        'zmena_stanov' => null,
        'statutarni_organ' => null,
        'stav_subjektu' => null
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
        'cislo_registrace' => 'cisloRegistrace',
        'typ_subjektu' => 'typSubjektu',
        'obchodni_jmeno_zkratka' => 'obchodniJmenoZkratka',
        'angazovane_osoby' => 'angazovaneOsoby',
        'primarni_zaznam' => 'primarniZaznam',
        'zmena_stanov' => 'zmenaStanov',
        'statutarni_organ' => 'statutarniOrgan',
        'stav_subjektu' => 'stavSubjektu'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'cislo_registrace' => 'setCisloRegistrace',
        'typ_subjektu' => 'setTypSubjektu',
        'obchodni_jmeno_zkratka' => 'setObchodniJmenoZkratka',
        'angazovane_osoby' => 'setAngazovaneOsoby',
        'primarni_zaznam' => 'setPrimarniZaznam',
        'zmena_stanov' => 'setZmenaStanov',
        'statutarni_organ' => 'setStatutarniOrgan',
        'stav_subjektu' => 'setStavSubjektu'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'cislo_registrace' => 'getCisloRegistrace',
        'typ_subjektu' => 'getTypSubjektu',
        'obchodni_jmeno_zkratka' => 'getObchodniJmenoZkratka',
        'angazovane_osoby' => 'getAngazovaneOsoby',
        'primarni_zaznam' => 'getPrimarniZaznam',
        'zmena_stanov' => 'getZmenaStanov',
        'statutarni_organ' => 'getStatutarniOrgan',
        'stav_subjektu' => 'getStavSubjektu'
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

        $this->container['cislo_registrace'] = isset($data['cislo_registrace']) ? $data['cislo_registrace'] : null;
        $this->container['typ_subjektu'] = isset($data['typ_subjektu']) ? $data['typ_subjektu'] : null;
        $this->container['obchodni_jmeno_zkratka'] = isset($data['obchodni_jmeno_zkratka']) ? $data['obchodni_jmeno_zkratka'] : null;
        $this->container['angazovane_osoby'] = isset($data['angazovane_osoby']) ? $data['angazovane_osoby'] : null;
        $this->container['primarni_zaznam'] = isset($data['primarni_zaznam']) ? $data['primarni_zaznam'] : null;
        $this->container['zmena_stanov'] = isset($data['zmena_stanov']) ? $data['zmena_stanov'] : null;
        $this->container['statutarni_organ'] = isset($data['statutarni_organ']) ? $data['statutarni_organ'] : null;
        $this->container['stav_subjektu'] = isset($data['stav_subjektu']) ? $data['stav_subjektu'] : null;
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
     * Gets cislo_registrace
     *
     * @return string
     */
    public function getCisloRegistrace()
    {
        return $this->container['cislo_registrace'];
    }

    /**
     * Sets cislo_registrace
     *
     * @param string $cislo_registrace Číslo registrace
     *
     * @return $this
     */
    public function setCisloRegistrace($cislo_registrace)
    {
        $this->container['cislo_registrace'] = $cislo_registrace;

        return $this;
    }

    /**
     * Gets typ_subjektu
     *
     * @return string
     */
    public function getTypSubjektu()
    {
        return $this->container['typ_subjektu'];
    }

    /**
     * Sets typ_subjektu
     *
     * @param string $typ_subjektu Typ subjektu - strana/hnutí - kód (ciselnikKod: TypSubjektuRpsh)
     *
     * @return $this
     */
    public function setTypSubjektu($typ_subjektu)
    {
        $this->container['typ_subjektu'] = $typ_subjektu;

        return $this;
    }

    /**
     * Gets obchodni_jmeno_zkratka
     *
     * @return string
     */
    public function getObchodniJmenoZkratka()
    {
        return $this->container['obchodni_jmeno_zkratka'];
    }

    /**
     * Sets obchodni_jmeno_zkratka
     *
     * @param string $obchodni_jmeno_zkratka Obchodní jméno zkrácené
     *
     * @return $this
     */
    public function setObchodniJmenoZkratka($obchodni_jmeno_zkratka)
    {
        $this->container['obchodni_jmeno_zkratka'] = $obchodni_jmeno_zkratka;

        return $this;
    }

    /**
     * Gets angazovane_osoby
     *
     * @return \Ares\Client\Model\AngazovanaOsobaRpsh[]
     */
    public function getAngazovaneOsoby()
    {
        return $this->container['angazovane_osoby'];
    }

    /**
     * Sets angazovane_osoby
     *
     * @param \Ares\Client\Model\AngazovanaOsobaRpsh[] $angazovane_osoby angazovane_osoby
     *
     * @return $this
     */
    public function setAngazovaneOsoby($angazovane_osoby)
    {
        $this->container['angazovane_osoby'] = $angazovane_osoby;

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
     * @param bool $primarni_zaznam primarni_zaznam
     *
     * @return $this
     */
    public function setPrimarniZaznam($primarni_zaznam)
    {
        $this->container['primarni_zaznam'] = $primarni_zaznam;

        return $this;
    }

    /**
     * Gets zmena_stanov
     *
     * @return \Ares\Client\Model\ZmenaStanov[]
     */
    public function getZmenaStanov()
    {
        return $this->container['zmena_stanov'];
    }

    /**
     * Sets zmena_stanov
     *
     * @param \Ares\Client\Model\ZmenaStanov[] $zmena_stanov zmena_stanov
     *
     * @return $this
     */
    public function setZmenaStanov($zmena_stanov)
    {
        $this->container['zmena_stanov'] = $zmena_stanov;

        return $this;
    }

    /**
     * Gets statutarni_organ
     *
     * @return \Ares\Client\Model\StatutarniOrgan[]
     */
    public function getStatutarniOrgan()
    {
        return $this->container['statutarni_organ'];
    }

    /**
     * Sets statutarni_organ
     *
     * @param \Ares\Client\Model\StatutarniOrgan[] $statutarni_organ statutarni_organ
     *
     * @return $this
     */
    public function setStatutarniOrgan($statutarni_organ)
    {
        $this->container['statutarni_organ'] = $statutarni_organ;

        return $this;
    }

    /**
     * Gets stav_subjektu
     *
     * @return \Ares\Client\Model\StavSubjektu[]
     */
    public function getStavSubjektu()
    {
        return $this->container['stav_subjektu'];
    }

    /**
     * Sets stav_subjektu
     *
     * @param \Ares\Client\Model\StavSubjektu[] $stav_subjektu stav_subjektu
     *
     * @return $this
     */
    public function setStavSubjektu($stav_subjektu)
    {
        $this->container['stav_subjektu'] = $stav_subjektu;

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
