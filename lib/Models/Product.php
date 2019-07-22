<?php
/**
 * Product
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
 * Product Class Doc Comment
 *
 * @category Class
 * @package  Lumminary\Client
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class Product implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'Product';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'snpsAuthorizedAny' => 'bool',
        'productPartners' => 'string[]',
        'snpsAuthorized' => 'string[]',
        'authorizedScopes' => 'string[]',
        'email' => 'string',
        'redirectUri' => 'string',
        'snpsMinRequiredAny' => 'bool',
        'snpsMinRequired' => '\Lumminary\Client\Models\SnpsMinRequired',
        'productUuid' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'snpsAuthorizedAny' => null,
        'productPartners' => null,
        'snpsAuthorized' => null,
        'authorizedScopes' => null,
        'email' => null,
        'redirectUri' => null,
        'snpsMinRequiredAny' => null,
        'snpsMinRequired' => null,
        'productUuid' => null
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
        'snpsAuthorizedAny' => 'snps_authorized_any',
        'productPartners' => 'product_partners',
        'snpsAuthorized' => 'snps_authorized',
        'authorizedScopes' => 'authorized_scopes',
        'email' => 'email',
        'redirectUri' => 'redirect_uri',
        'snpsMinRequiredAny' => 'snps_min_required_any',
        'snpsMinRequired' => 'snps_min_required',
        'productUuid' => 'product_uuid'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'snpsAuthorizedAny' => 'setSnpsAuthorizedAny',
        'productPartners' => 'setProductPartners',
        'snpsAuthorized' => 'setSnpsAuthorized',
        'authorizedScopes' => 'setAuthorizedScopes',
        'email' => 'setEmail',
        'redirectUri' => 'setRedirectUri',
        'snpsMinRequiredAny' => 'setSnpsMinRequiredAny',
        'snpsMinRequired' => 'setSnpsMinRequired',
        'productUuid' => 'setProductUuid'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'snpsAuthorizedAny' => 'getSnpsAuthorizedAny',
        'productPartners' => 'getProductPartners',
        'snpsAuthorized' => 'getSnpsAuthorized',
        'authorizedScopes' => 'getAuthorizedScopes',
        'email' => 'getEmail',
        'redirectUri' => 'getRedirectUri',
        'snpsMinRequiredAny' => 'getSnpsMinRequiredAny',
        'snpsMinRequired' => 'getSnpsMinRequired',
        'productUuid' => 'getProductUuid'
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
        $this->container['snpsAuthorizedAny'] = isset($data['snpsAuthorizedAny']) ? $data['snpsAuthorizedAny'] : null;
        $this->container['productPartners'] = isset($data['productPartners']) ? $data['productPartners'] : null;
        $this->container['snpsAuthorized'] = isset($data['snpsAuthorized']) ? $data['snpsAuthorized'] : null;
        $this->container['authorizedScopes'] = isset($data['authorizedScopes']) ? $data['authorizedScopes'] : null;
        $this->container['email'] = isset($data['email']) ? $data['email'] : null;
        $this->container['redirectUri'] = isset($data['redirectUri']) ? $data['redirectUri'] : null;
        $this->container['snpsMinRequiredAny'] = isset($data['snpsMinRequiredAny']) ? $data['snpsMinRequiredAny'] : null;
        $this->container['snpsMinRequired'] = isset($data['snpsMinRequired']) ? $data['snpsMinRequired'] : null;
        $this->container['productUuid'] = isset($data['productUuid']) ? $data['productUuid'] : null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        if ($this->container['snpsAuthorizedAny'] === null) {
            $invalidProperties[] = "'snpsAuthorizedAny' can't be null";
        }
        if ($this->container['productPartners'] === null) {
            $invalidProperties[] = "'productPartners' can't be null";
        }
        if ($this->container['snpsAuthorized'] === null) {
            $invalidProperties[] = "'snpsAuthorized' can't be null";
        }
        if ($this->container['authorizedScopes'] === null) {
            $invalidProperties[] = "'authorizedScopes' can't be null";
        }
        if ($this->container['snpsMinRequiredAny'] === null) {
            $invalidProperties[] = "'snpsMinRequiredAny' can't be null";
        }
        if ($this->container['snpsMinRequired'] === null) {
            $invalidProperties[] = "'snpsMinRequired' can't be null";
        }
        if ($this->container['productUuid'] === null) {
            $invalidProperties[] = "'productUuid' can't be null";
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

        if ($this->container['snpsAuthorizedAny'] === null) {
            return false;
        }
        if ($this->container['productPartners'] === null) {
            return false;
        }
        if ($this->container['snpsAuthorized'] === null) {
            return false;
        }
        if ($this->container['authorizedScopes'] === null) {
            return false;
        }
        if ($this->container['snpsMinRequiredAny'] === null) {
            return false;
        }
        if ($this->container['snpsMinRequired'] === null) {
            return false;
        }
        if ($this->container['productUuid'] === null) {
            return false;
        }
        return true;
    }


    /**
     * Gets snpsAuthorizedAny
     *
     * @return bool
     */
    public function getSnpsAuthorizedAny()
    {
        return $this->container['snpsAuthorizedAny'];
    }

    /**
     * Sets snpsAuthorizedAny
     *
     * @param bool $snpsAuthorizedAny A boolean value specifying if SNP set is not strict
     *
     * @return $this
     */
    public function setSnpsAuthorizedAny($snpsAuthorizedAny)
    {
        $this->container['snpsAuthorizedAny'] = $snpsAuthorizedAny;

        return $this;
    }

    /**
     * Gets productPartners
     *
     * @return string[]
     */
    public function getProductPartners()
    {
        return $this->container['productPartners'];
    }

    /**
     * Sets productPartners
     *
     * @param string[] $productPartners A list of Partner UUIDs that manage the product
     *
     * @return $this
     */
    public function setProductPartners($productPartners)
    {
        $this->container['productPartners'] = $productPartners;

        return $this;
    }

    /**
     * Gets snpsAuthorized
     *
     * @return string[]
     */
    public function getSnpsAuthorized()
    {
        return $this->container['snpsAuthorized'];
    }

    /**
     * Sets snpsAuthorized
     *
     * @param string[] $snpsAuthorized A superset of snps_min_required, containing all SNPs to which an Product has access (includes optional SNPs)
     *
     * @return $this
     */
    public function setSnpsAuthorized($snpsAuthorized)
    {
        $this->container['snpsAuthorized'] = $snpsAuthorized;

        return $this;
    }

    /**
     * Gets authorizedScopes
     *
     * @return string[]
     */
    public function getAuthorizedScopes()
    {
        return $this->container['authorizedScopes'];
    }

    /**
     * Sets authorizedScopes
     *
     * @param string[] $authorizedScopes A list of scopes that the product can require from clients
     *
     * @return $this
     */
    public function setAuthorizedScopes($authorizedScopes)
    {
        $this->container['authorizedScopes'] = $authorizedScopes;

        return $this;
    }

    /**
     * Gets email
     *
     * @return string
     */
    public function getEmail()
    {
        return $this->container['email'];
    }

    /**
     * Sets email
     *
     * @param string $email The contact email for the product
     *
     * @return $this
     */
    public function setEmail($email)
    {
        $this->container['email'] = $email;

        return $this;
    }

    /**
     * Gets redirectUri
     *
     * @return string
     */
    public function getRedirectUri()
    {
        return $this->container['redirectUri'];
    }

    /**
     * Sets redirectUri
     *
     * @param string $redirectUri A redirect url registered as a callback for the Connect with Lumminary authorization flow
     *
     * @return $this
     */
    public function setRedirectUri($redirectUri)
    {
        $this->container['redirectUri'] = $redirectUri;

        return $this;
    }

    /**
     * Gets snpsMinRequiredAny
     *
     * @return bool
     */
    public function getSnpsMinRequiredAny()
    {
        return $this->container['snpsMinRequiredAny'];
    }

    /**
     * Sets snpsMinRequiredAny
     *
     * @param bool $snpsMinRequiredAny A boolean value specifying if SNP set is not strict
     *
     * @return $this
     */
    public function setSnpsMinRequiredAny($snpsMinRequiredAny)
    {
        $this->container['snpsMinRequiredAny'] = $snpsMinRequiredAny;

        return $this;
    }

    /**
     * Gets snpsMinRequired
     *
     * @return \Lumminary\Client\Models\SnpsMinRequired
     */
    public function getSnpsMinRequired()
    {
        return $this->container['snpsMinRequired'];
    }

    /**
     * Sets snpsMinRequired
     *
     * @param \Lumminary\Client\Models\SnpsMinRequired $snpsMinRequired Minimum required snps for Dataset-Product compatibility
     *
     * @return $this
     */
    public function setSnpsMinRequired($snpsMinRequired)
    {
        $this->container['snpsMinRequired'] = $snpsMinRequired;

        return $this;
    }

    /**
     * Gets productUuid
     *
     * @return string
     */
    public function getProductUuid()
    {
        return $this->container['productUuid'];
    }

    /**
     * Sets productUuid
     *
     * @param string $productUuid The product identifier
     *
     * @return $this
     */
    public function setProductUuid($productUuid)
    {
        $this->container['productUuid'] = $productUuid;

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


