<?php
/**
 * PublicSNP
 *
 * PHP version 5
 *
 * @category Class
 * @package  Lumminary\Client
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */

/**
 * Lumminary API
 *
 * A general-purpose API for accessing genomic data
 *
 * OpenAPI spec version: 1.0
 * 
 * Generated by: https://github.com/swagger-api/swagger-codegen.git
 * Swagger Codegen version: 2.3.1
 */

/**
 * NOTE: This class is auto generated by the swagger code generator program.
 * https://github.com/swagger-api/swagger-codegen
 * Do not edit the class manually.
 */

namespace Lumminary\Client\Models;

use \ArrayAccess;
use \Lumminary\Client\ObjectSerializer;

/**
 * PublicSNP Class Doc Comment
 *
 * @category Class
 * @package  Lumminary\Client
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class PublicSNP implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'PublicSNP';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'referenceAllele' => 'string',
        'referenceGenome' => 'string',
        'dbsnpVersion' => 'int',
        'chromosomeAccession' => 'string',
        'snpId' => 'string',
        'alternativeAlleles' => 'string[]',
        'chromosome' => 'string',
        'location' => 'int'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'referenceAllele' => null,
        'referenceGenome' => null,
        'dbsnpVersion' => null,
        'chromosomeAccession' => null,
        'snpId' => null,
        'alternativeAlleles' => null,
        'chromosome' => null,
        'location' => null
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
        'referenceAllele' => 'reference_allele',
        'referenceGenome' => 'reference_genome',
        'dbsnpVersion' => 'dbsnp_version',
        'chromosomeAccession' => 'chromosome_accession',
        'snpId' => 'snp_id',
        'alternativeAlleles' => 'alternative_alleles',
        'chromosome' => 'chromosome',
        'location' => 'location'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'referenceAllele' => 'setReferenceAllele',
        'referenceGenome' => 'setReferenceGenome',
        'dbsnpVersion' => 'setDbsnpVersion',
        'chromosomeAccession' => 'setChromosomeAccession',
        'snpId' => 'setSnpId',
        'alternativeAlleles' => 'setAlternativeAlleles',
        'chromosome' => 'setChromosome',
        'location' => 'setLocation'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'referenceAllele' => 'getReferenceAllele',
        'referenceGenome' => 'getReferenceGenome',
        'dbsnpVersion' => 'getDbsnpVersion',
        'chromosomeAccession' => 'getChromosomeAccession',
        'snpId' => 'getSnpId',
        'alternativeAlleles' => 'getAlternativeAlleles',
        'chromosome' => 'getChromosome',
        'location' => 'getLocation'
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
        $this->container['referenceAllele'] = isset($data['referenceAllele']) ? $data['referenceAllele'] : null;
        $this->container['referenceGenome'] = isset($data['referenceGenome']) ? $data['referenceGenome'] : null;
        $this->container['dbsnpVersion'] = isset($data['dbsnpVersion']) ? $data['dbsnpVersion'] : null;
        $this->container['chromosomeAccession'] = isset($data['chromosomeAccession']) ? $data['chromosomeAccession'] : null;
        $this->container['snpId'] = isset($data['snpId']) ? $data['snpId'] : null;
        $this->container['alternativeAlleles'] = isset($data['alternativeAlleles']) ? $data['alternativeAlleles'] : null;
        $this->container['chromosome'] = isset($data['chromosome']) ? $data['chromosome'] : null;
        $this->container['location'] = isset($data['location']) ? $data['location'] : null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        if ($this->container['referenceAllele'] === null) {
            $invalidProperties[] = "'referenceAllele' can't be null";
        }
        if ((strlen($this->container['referenceAllele']) < 1)) {
            $invalidProperties[] = "invalid value for 'referenceAllele', the character length must be bigger than or equal to 1.";
        }

        if ($this->container['referenceGenome'] === null) {
            $invalidProperties[] = "'referenceGenome' can't be null";
        }
        if ((strlen($this->container['referenceGenome']) < 1)) {
            $invalidProperties[] = "invalid value for 'referenceGenome', the character length must be bigger than or equal to 1.";
        }

        if ($this->container['dbsnpVersion'] === null) {
            $invalidProperties[] = "'dbsnpVersion' can't be null";
        }
        if ($this->container['chromosomeAccession'] === null) {
            $invalidProperties[] = "'chromosomeAccession' can't be null";
        }
        if ((strlen($this->container['chromosomeAccession']) < 1)) {
            $invalidProperties[] = "invalid value for 'chromosomeAccession', the character length must be bigger than or equal to 1.";
        }

        if ($this->container['snpId'] === null) {
            $invalidProperties[] = "'snpId' can't be null";
        }
        if ((strlen($this->container['snpId']) < 1)) {
            $invalidProperties[] = "invalid value for 'snpId', the character length must be bigger than or equal to 1.";
        }

        if ($this->container['chromosome'] === null) {
            $invalidProperties[] = "'chromosome' can't be null";
        }
        if ((strlen($this->container['chromosome']) < 1)) {
            $invalidProperties[] = "invalid value for 'chromosome', the character length must be bigger than or equal to 1.";
        }

        if ($this->container['location'] === null) {
            $invalidProperties[] = "'location' can't be null";
        }
        if (($this->container['location'] < 0)) {
            $invalidProperties[] = "invalid value for 'location', must be bigger than or equal to 0.";
        }

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

        if ($this->container['referenceAllele'] === null) {
            return false;
        }
        if (strlen($this->container['referenceAllele']) < 1) {
            return false;
        }
        if ($this->container['referenceGenome'] === null) {
            return false;
        }
        if (strlen($this->container['referenceGenome']) < 1) {
            return false;
        }
        if ($this->container['dbsnpVersion'] === null) {
            return false;
        }
        if ($this->container['chromosomeAccession'] === null) {
            return false;
        }
        if (strlen($this->container['chromosomeAccession']) < 1) {
            return false;
        }
        if ($this->container['snpId'] === null) {
            return false;
        }
        if (strlen($this->container['snpId']) < 1) {
            return false;
        }
        if ($this->container['chromosome'] === null) {
            return false;
        }
        if (strlen($this->container['chromosome']) < 1) {
            return false;
        }
        if ($this->container['location'] === null) {
            return false;
        }
        if ($this->container['location'] < 0) {
            return false;
        }
        return true;
    }


    /**
     * Gets referenceAllele
     *
     * @return string
     */
    public function getReferenceAllele()
    {
        return $this->container['referenceAllele'];
    }

    /**
     * Sets referenceAllele
     *
     * @param string $referenceAllele One of the possible alleles
     *
     * @return $this
     */
    public function setReferenceAllele($referenceAllele)
    {

        if ((strlen($referenceAllele) < 1)) {
            throw new \InvalidArgumentException('invalid length for $referenceAllele when calling PublicSNP., must be bigger than or equal to 1.');
        }

        $this->container['referenceAllele'] = $referenceAllele;

        return $this;
    }

    /**
     * Gets referenceGenome
     *
     * @return string
     */
    public function getReferenceGenome()
    {
        return $this->container['referenceGenome'];
    }

    /**
     * Sets referenceGenome
     *
     * @param string $referenceGenome The ID and build number of the genome against which the SNP was built and placed
     *
     * @return $this
     */
    public function setReferenceGenome($referenceGenome)
    {

        if ((strlen($referenceGenome) < 1)) {
            throw new \InvalidArgumentException('invalid length for $referenceGenome when calling PublicSNP., must be bigger than or equal to 1.');
        }

        $this->container['referenceGenome'] = $referenceGenome;

        return $this;
    }

    /**
     * Gets dbsnpVersion
     *
     * @return int
     */
    public function getDbsnpVersion()
    {
        return $this->container['dbsnpVersion'];
    }

    /**
     * Sets dbsnpVersion
     *
     * @param int $dbsnpVersion The dbSNP build to which snip attributes like location and chromosome accession refer.
     *
     * @return $this
     */
    public function setDbsnpVersion($dbsnpVersion)
    {
        $this->container['dbsnpVersion'] = $dbsnpVersion;

        return $this;
    }

    /**
     * Gets chromosomeAccession
     *
     * @return string
     */
    public function getChromosomeAccession()
    {
        return $this->container['chromosomeAccession'];
    }

    /**
     * Sets chromosomeAccession
     *
     * @param string $chromosomeAccession The accession of the chromosome on which the SNP is placed
     *
     * @return $this
     */
    public function setChromosomeAccession($chromosomeAccession)
    {

        if ((strlen($chromosomeAccession) < 1)) {
            throw new \InvalidArgumentException('invalid length for $chromosomeAccession when calling PublicSNP., must be bigger than or equal to 1.');
        }

        $this->container['chromosomeAccession'] = $chromosomeAccession;

        return $this;
    }

    /**
     * Gets snpId
     *
     * @return string
     */
    public function getSnpId()
    {
        return $this->container['snpId'];
    }

    /**
     * Sets snpId
     *
     * @param string $snpId The ID of the SNP
     *
     * @return $this
     */
    public function setSnpId($snpId)
    {

        if ((strlen($snpId) < 1)) {
            throw new \InvalidArgumentException('invalid length for $snpId when calling PublicSNP., must be bigger than or equal to 1.');
        }

        $this->container['snpId'] = $snpId;

        return $this;
    }

    /**
     * Gets alternativeAlleles
     *
     * @return string[]
     */
    public function getAlternativeAlleles()
    {
        return $this->container['alternativeAlleles'];
    }

    /**
     * Sets alternativeAlleles
     *
     * @param string[] $alternativeAlleles alternativeAlleles
     *
     * @return $this
     */
    public function setAlternativeAlleles($alternativeAlleles)
    {
        $this->container['alternativeAlleles'] = $alternativeAlleles;

        return $this;
    }

    /**
     * Gets chromosome
     *
     * @return string
     */
    public function getChromosome()
    {
        return $this->container['chromosome'];
    }

    /**
     * Sets chromosome
     *
     * @param string $chromosome The cromosome on which the SNP is placed
     *
     * @return $this
     */
    public function setChromosome($chromosome)
    {

        if ((strlen($chromosome) < 1)) {
            throw new \InvalidArgumentException('invalid length for $chromosome when calling PublicSNP., must be bigger than or equal to 1.');
        }

        $this->container['chromosome'] = $chromosome;

        return $this;
    }

    /**
     * Gets location
     *
     * @return int
     */
    public function getLocation()
    {
        return $this->container['location'];
    }

    /**
     * Sets location
     *
     * @param int $location The SNP's position on the chromosome
     *
     * @return $this
     */
    public function setLocation($location)
    {

        if (($location < 0)) {
            throw new \InvalidArgumentException('invalid value for $location when calling PublicSNP., must be bigger than or equal to 0.');
        }

        $this->container['location'] = $location;

        return $this;
    }
    /**
     * Returns true if offset exists. False otherwise.
     *
     * @param integer $offset Offset
     *
     * @return boolean
     */
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

