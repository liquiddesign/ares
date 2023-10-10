<?php
/**
 * EkonomickySubjektSzrZaklad
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
 * EkonomickySubjektSzrZaklad Class Doc Comment
 *
 * @category Class
 * @description Detailn&amp;#237; informace o ekonomick&amp;#233;m subjektu ze zdroje SZR
 * @package  Swagger\Client
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class EkonomickySubjektSzrZaklad extends EkonomickySubjektZaklad 
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'EkonomickySubjektSzrZaklad';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'obchodni_jmeno_zkracene' => 'string',
        'primarni_zaznam' => 'bool',
        'registrace_do' => '\DateTime',
        'registrace_od' => '\DateTime',
        'kod_ukonceni' => 'int',
        'datum_vyrazeni' => '\DateTime',
        'adresy' => '\Ares\Client\Model\AdresaSzr[]',
        'platce_dph' => 'bool',
        'vyrazen' => 'bool',
        'obory' => '\Ares\Client\Model\OborSzr[]',
        'exid' => '\Ares\Client\Model\Exid[]',
        'kontakt' => '\Ares\Client\Model\KontaktSzr[]',
        'odkazy' => '\Ares\Client\Model\OdkazSzr[]'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'obchodni_jmeno_zkracene' => null,
        'primarni_zaznam' => null,
        'registrace_do' => 'date',
        'registrace_od' => 'date',
        'kod_ukonceni' => 'int32',
        'datum_vyrazeni' => 'date',
        'adresy' => null,
        'platce_dph' => null,
        'vyrazen' => null,
        'obory' => null,
        'exid' => null,
        'kontakt' => null,
        'odkazy' => null
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
        'obchodni_jmeno_zkracene' => 'obchodniJmenoZkracene',
        'primarni_zaznam' => 'primarniZaznam',
        'registrace_do' => 'registraceDo',
        'registrace_od' => 'registraceOd',
        'kod_ukonceni' => 'kodUkonceni',
        'datum_vyrazeni' => 'datumVyrazeni',
        'adresy' => 'adresy',
        'platce_dph' => 'platceDph',
        'vyrazen' => 'vyrazen',
        'obory' => 'obory',
        'exid' => 'exid',
        'kontakt' => 'kontakt',
        'odkazy' => 'odkazy'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'obchodni_jmeno_zkracene' => 'setObchodniJmenoZkracene',
        'primarni_zaznam' => 'setPrimarniZaznam',
        'registrace_do' => 'setRegistraceDo',
        'registrace_od' => 'setRegistraceOd',
        'kod_ukonceni' => 'setKodUkonceni',
        'datum_vyrazeni' => 'setDatumVyrazeni',
        'adresy' => 'setAdresy',
        'platce_dph' => 'setPlatceDph',
        'vyrazen' => 'setVyrazen',
        'obory' => 'setObory',
        'exid' => 'setExid',
        'kontakt' => 'setKontakt',
        'odkazy' => 'setOdkazy'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'obchodni_jmeno_zkracene' => 'getObchodniJmenoZkracene',
        'primarni_zaznam' => 'getPrimarniZaznam',
        'registrace_do' => 'getRegistraceDo',
        'registrace_od' => 'getRegistraceOd',
        'kod_ukonceni' => 'getKodUkonceni',
        'datum_vyrazeni' => 'getDatumVyrazeni',
        'adresy' => 'getAdresy',
        'platce_dph' => 'getPlatceDph',
        'vyrazen' => 'getVyrazen',
        'obory' => 'getObory',
        'exid' => 'getExid',
        'kontakt' => 'getKontakt',
        'odkazy' => 'getOdkazy'
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

        $this->container['obchodni_jmeno_zkracene'] = isset($data['obchodni_jmeno_zkracene']) ? $data['obchodni_jmeno_zkracene'] : null;
        $this->container['primarni_zaznam'] = isset($data['primarni_zaznam']) ? $data['primarni_zaznam'] : null;
        $this->container['registrace_do'] = isset($data['registrace_do']) ? $data['registrace_do'] : null;
        $this->container['registrace_od'] = isset($data['registrace_od']) ? $data['registrace_od'] : null;
        $this->container['kod_ukonceni'] = isset($data['kod_ukonceni']) ? $data['kod_ukonceni'] : null;
        $this->container['datum_vyrazeni'] = isset($data['datum_vyrazeni']) ? $data['datum_vyrazeni'] : null;
        $this->container['adresy'] = isset($data['adresy']) ? $data['adresy'] : null;
        $this->container['platce_dph'] = isset($data['platce_dph']) ? $data['platce_dph'] : null;
        $this->container['vyrazen'] = isset($data['vyrazen']) ? $data['vyrazen'] : null;
        $this->container['obory'] = isset($data['obory']) ? $data['obory'] : null;
        $this->container['exid'] = isset($data['exid']) ? $data['exid'] : null;
        $this->container['kontakt'] = isset($data['kontakt']) ? $data['kontakt'] : null;
        $this->container['odkazy'] = isset($data['odkazy']) ? $data['odkazy'] : null;
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
     * Gets obchodni_jmeno_zkracene
     *
     * @return string
     */
    public function getObchodniJmenoZkracene()
    {
        return $this->container['obchodni_jmeno_zkracene'];
    }

    /**
     * Sets obchodni_jmeno_zkracene
     *
     * @param string $obchodni_jmeno_zkracene Zkr&#225;cen&#233; obchodn&#237; jm&#233;no
     *
     * @return $this
     */
    public function setObchodniJmenoZkracene($obchodni_jmeno_zkracene)
    {
        $this->container['obchodni_jmeno_zkracene'] = $obchodni_jmeno_zkracene;

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
     * @param bool $primarni_zaznam Prim&#225;rn&#237; z&#225;znam subjektu
     *
     * @return $this
     */
    public function setPrimarniZaznam($primarni_zaznam)
    {
        $this->container['primarni_zaznam'] = $primarni_zaznam;

        return $this;
    }

    /**
     * Gets registrace_do
     *
     * @return \DateTime
     */
    public function getRegistraceDo()
    {
        return $this->container['registrace_do'];
    }

    /**
     * Sets registrace_do
     *
     * @param \DateTime $registrace_do konec platnosti registrace
     *
     * @return $this
     */
    public function setRegistraceDo($registrace_do)
    {
        $this->container['registrace_do'] = $registrace_do;

        return $this;
    }

    /**
     * Gets registrace_od
     *
     * @return \DateTime
     */
    public function getRegistraceOd()
    {
        return $this->container['registrace_od'];
    }

    /**
     * Sets registrace_od
     *
     * @param \DateTime $registrace_od zač&#225;tek platnosti registrace
     *
     * @return $this
     */
    public function setRegistraceOd($registrace_od)
    {
        $this->container['registrace_od'] = $registrace_od;

        return $this;
    }

    /**
     * Gets kod_ukonceni
     *
     * @return int
     */
    public function getKodUkonceni()
    {
        return $this->container['kod_ukonceni'];
    }

    /**
     * Sets kod_ukonceni
     *
     * @param int $kod_ukonceni k&#243;d ukončen&#237;
     *
     * @return $this
     */
    public function setKodUkonceni($kod_ukonceni)
    {
        $this->container['kod_ukonceni'] = $kod_ukonceni;

        return $this;
    }

    /**
     * Gets datum_vyrazeni
     *
     * @return \DateTime
     */
    public function getDatumVyrazeni()
    {
        return $this->container['datum_vyrazeni'];
    }

    /**
     * Sets datum_vyrazeni
     *
     * @param \DateTime $datum_vyrazeni Datum vyřazen&#237;
     *
     * @return $this
     */
    public function setDatumVyrazeni($datum_vyrazeni)
    {
        $this->container['datum_vyrazeni'] = $datum_vyrazeni;

        return $this;
    }

    /**
     * Gets adresy
     *
     * @return \Ares\Client\Model\AdresaSzr[]
     */
    public function getAdresy()
    {
        return $this->container['adresy'];
    }

    /**
     * Sets adresy
     *
     * @param \Ares\Client\Model\AdresaSzr[] $adresy adresy
     *
     * @return $this
     */
    public function setAdresy($adresy)
    {
        $this->container['adresy'] = $adresy;

        return $this;
    }

    /**
     * Gets platce_dph
     *
     * @return bool
     */
    public function getPlatceDph()
    {
        return $this->container['platce_dph'];
    }

    /**
     * Sets platce_dph
     *
     * @param bool $platce_dph subjekt pl&#225;tce DPH
     *
     * @return $this
     */
    public function setPlatceDph($platce_dph)
    {
        $this->container['platce_dph'] = $platce_dph;

        return $this;
    }

    /**
     * Gets vyrazen
     *
     * @return bool
     */
    public function getVyrazen()
    {
        return $this->container['vyrazen'];
    }

    /**
     * Sets vyrazen
     *
     * @param bool $vyrazen vyřazen&#237; subjektu
     *
     * @return $this
     */
    public function setVyrazen($vyrazen)
    {
        $this->container['vyrazen'] = $vyrazen;

        return $this;
    }

    /**
     * Gets obory
     *
     * @return \Ares\Client\Model\OborSzr[]
     */
    public function getObory()
    {
        return $this->container['obory'];
    }

    /**
     * Sets obory
     *
     * @param \Ares\Client\Model\OborSzr[] $obory obory
     *
     * @return $this
     */
    public function setObory($obory)
    {
        $this->container['obory'] = $obory;

        return $this;
    }

    /**
     * Gets exid
     *
     * @return \Ares\Client\Model\Exid[]
     */
    public function getExid()
    {
        return $this->container['exid'];
    }

    /**
     * Sets exid
     *
     * @param \Ares\Client\Model\Exid[] $exid exid
     *
     * @return $this
     */
    public function setExid($exid)
    {
        $this->container['exid'] = $exid;

        return $this;
    }

    /**
     * Gets kontakt
     *
     * @return \Ares\Client\Model\KontaktSzr[]
     */
    public function getKontakt()
    {
        return $this->container['kontakt'];
    }

    /**
     * Sets kontakt
     *
     * @param \Ares\Client\Model\KontaktSzr[] $kontakt kontakt
     *
     * @return $this
     */
    public function setKontakt($kontakt)
    {
        $this->container['kontakt'] = $kontakt;

        return $this;
    }

    /**
     * Gets odkazy
     *
     * @return \Ares\Client\Model\OdkazSzr[]
     */
    public function getOdkazy()
    {
        return $this->container['odkazy'];
    }

    /**
     * Sets odkazy
     *
     * @param \Ares\Client\Model\OdkazSzr[] $odkazy odkazy
     *
     * @return $this
     */
    public function setOdkazy($odkazy)
    {
        $this->container['odkazy'] = $odkazy;

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