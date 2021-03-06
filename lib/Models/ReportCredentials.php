<?php
/**
 * ReportCredentials
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
 * ReportCredentials Class Doc Comment
 *
 * @category Class
 * @package  Lumminary\Client
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class ReportCredentials implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'ReportCredentials';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'reportCredentialsUuid' => 'string',
        'clientUsername' => 'string',
        'authorizationUuid' => 'string',
        'reportUrl' => 'string',
        'createTimestamp' => 'int',
        'clientPassword' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'reportCredentialsUuid' => null,
        'clientUsername' => null,
        'authorizationUuid' => null,
        'reportUrl' => null,
        'createTimestamp' => null,
        'clientPassword' => null
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
        'reportCredentialsUuid' => 'report_credentials_uuid',
        'clientUsername' => 'client_username',
        'authorizationUuid' => 'authorization_uuid',
        'reportUrl' => 'report_url',
        'createTimestamp' => 'create_timestamp',
        'clientPassword' => 'client_password'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'reportCredentialsUuid' => 'setReportCredentialsUuid',
        'clientUsername' => 'setClientUsername',
        'authorizationUuid' => 'setAuthorizationUuid',
        'reportUrl' => 'setReportUrl',
        'createTimestamp' => 'setCreateTimestamp',
        'clientPassword' => 'setClientPassword'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'reportCredentialsUuid' => 'getReportCredentialsUuid',
        'clientUsername' => 'getClientUsername',
        'authorizationUuid' => 'getAuthorizationUuid',
        'reportUrl' => 'getReportUrl',
        'createTimestamp' => 'getCreateTimestamp',
        'clientPassword' => 'getClientPassword'
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
        $this->container['reportCredentialsUuid'] = isset($data['reportCredentialsUuid']) ? $data['reportCredentialsUuid'] : null;
        $this->container['clientUsername'] = isset($data['clientUsername']) ? $data['clientUsername'] : null;
        $this->container['authorizationUuid'] = isset($data['authorizationUuid']) ? $data['authorizationUuid'] : null;
        $this->container['reportUrl'] = isset($data['reportUrl']) ? $data['reportUrl'] : null;
        $this->container['createTimestamp'] = isset($data['createTimestamp']) ? $data['createTimestamp'] : null;
        $this->container['clientPassword'] = isset($data['clientPassword']) ? $data['clientPassword'] : null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        if ($this->container['reportCredentialsUuid'] === null) {
            $invalidProperties[] = "'reportCredentialsUuid' can't be null";
        }
        if ($this->container['authorizationUuid'] === null) {
            $invalidProperties[] = "'authorizationUuid' can't be null";
        }
        if ($this->container['createTimestamp'] === null) {
            $invalidProperties[] = "'createTimestamp' can't be null";
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

        if ($this->container['reportCredentialsUuid'] === null) {
            return false;
        }
        if ($this->container['authorizationUuid'] === null) {
            return false;
        }
        if ($this->container['createTimestamp'] === null) {
            return false;
        }
        return true;
    }


    /**
     * Gets reportCredentialsUuid
     *
     * @return string
     */
    public function getReportCredentialsUuid()
    {
        return $this->container['reportCredentialsUuid'];
    }

    /**
     * Sets reportCredentialsUuid
     *
     * @param string $reportCredentialsUuid The uuid of the report
     *
     * @return $this
     */
    public function setReportCredentialsUuid($reportCredentialsUuid)
    {
        $this->container['reportCredentialsUuid'] = $reportCredentialsUuid;

        return $this;
    }

    /**
     * Gets clientUsername
     *
     * @return string
     */
    public function getClientUsername()
    {
        return $this->container['clientUsername'];
    }

    /**
     * Sets clientUsername
     *
     * @param string $clientUsername The generated username, on the partner product website
     *
     * @return $this
     */
    public function setClientUsername($clientUsername)
    {
        $this->container['clientUsername'] = $clientUsername;

        return $this;
    }

    /**
     * Gets authorizationUuid
     *
     * @return string
     */
    public function getAuthorizationUuid()
    {
        return $this->container['authorizationUuid'];
    }

    /**
     * Sets authorizationUuid
     *
     * @param string $authorizationUuid The uuid of the authorization that generated this report
     *
     * @return $this
     */
    public function setAuthorizationUuid($authorizationUuid)
    {
        $this->container['authorizationUuid'] = $authorizationUuid;

        return $this;
    }

    /**
     * Gets reportUrl
     *
     * @return string
     */
    public function getReportUrl()
    {
        return $this->container['reportUrl'];
    }

    /**
     * Sets reportUrl
     *
     * @param string $reportUrl URL to the report location
     *
     * @return $this
     */
    public function setReportUrl($reportUrl)
    {
        $this->container['reportUrl'] = $reportUrl;

        return $this;
    }

    /**
     * Gets createTimestamp
     *
     * @return int
     */
    public function getCreateTimestamp()
    {
        return $this->container['createTimestamp'];
    }

    /**
     * Sets createTimestamp
     *
     * @param int $createTimestamp Creation timestamp for Report
     *
     * @return $this
     */
    public function setCreateTimestamp($createTimestamp)
    {
        $this->container['createTimestamp'] = $createTimestamp;

        return $this;
    }

    /**
     * Gets clientPassword
     *
     * @return string
     */
    public function getClientPassword()
    {
        return $this->container['clientPassword'];
    }

    /**
     * Sets clientPassword
     *
     * @param string $clientPassword The password generated password, on the partner product website
     *
     * @return $this
     */
    public function setClientPassword($clientPassword)
    {
        $this->container['clientPassword'] = $clientPassword;

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


