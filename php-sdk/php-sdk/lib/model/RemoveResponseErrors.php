<?php
/**
 * RemoveResponseErrors
 *
 * PHP version 5
 *
 * @category Class
 * @package  org.egoi.client
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */

/**
 * APIv3 (Beta)
 *
 * # Introduction Just a quick pick!!! This is our new version of API. Remember, it is not stable yet!!! But we invite you play with it and give us your feedback ;) # Getting Started  E-goi can be integrated with many environments and programming languages via our REST API. We've created a developer focused portal to give your organization a clear and quick overview of how to integrate with E-goi. The developer portal focuses on scenarios for integration and flow of events. We recommend familiarizing yourself with all of the content in the developer portal, before start using our rest API.   The E-goi  APIv3 is served over HTTPS. To ensure data privacy, unencrypted HTTP is not supported.  Request data is passed to the API by POSTing JSON objects to the API endpoints with the appropriate parameters.   BaseURL = api.egoiapp.com  # HTTP Methods for RESTful Services This API supports 5 HTTP methods:  * <b>GET</b>: The HTTP GET method is used to **read** (or retrieve) a representation of a resource. * <b>POST</b>: The POST verb is most-often utilized to **create** new resources. * <b>PATCH</b>: PATCH is used for **modify** capabilities. The PATCH request only needs to contain the changes to the resource, not the complete resource * <b>PUT</b>: PUT is most-often utilized for **update** capabilities, PUT-ing to a known resource URI with the request body containing the newly-updated representation of the original resource. * <b>DELETE</b>: DELETE is pretty easy to understand. It is used to **delete** a resource identified by a URI.  # Authentication   We use a custom authentication method, you will need a apikey that you can find in your account settings. Below you will see a curl example to get your account information:  #!/bin/bash  curl -X GET 'https://api.egoiapp.com/my-account' \\  -H 'accept: application/json' \\  -H 'Apikey: <YOUR_APY_KEY>'  Here you can see a curl Post example with authentication:  #!/bin/bash  curl -X POST 'http://api.egoiapp.com/tags' \\  -H 'accept: application/json' \\  -H 'Apikey: <YOUR_APY_KEY>' \\  -H 'Content-Type: application/json' \\  -d '{`name`:`Your custom tag`,`color`:`#FFFFFF`}'  <security-definitions/>
 *
 * The version of the OpenAPI document: 3.0.0-beta
 * 
 * Generated by: https://openapi-generator.tech
 * OpenAPI Generator version: 4.2.0
 */

/**
 * NOTE: This class is auto generated by OpenAPI Generator (https://openapi-generator.tech).
 * https://openapi-generator.tech
 * Do not edit the class manually.
 */

namespace org.egoi.client\org.egoi.client.model;

use \ArrayAccess;
use \org.egoi.client\ObjectSerializer;

/**
 * RemoveResponseErrors Class Doc Comment
 *
 * @category Class
 * @package  org.egoi.client
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */
class RemoveResponseErrors implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'RemoveResponse_errors';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'invalid_unsubscription_reason' => 'string[]',
        'invalid_unsubscription_method' => 'string[]',
        'invalid_data_type' => 'string[]',
        'contact_not_in_list' => 'string[]',
        'contact_already_removed' => 'string[]'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPIFormats = [
        'invalid_unsubscription_reason' => null,
        'invalid_unsubscription_method' => null,
        'invalid_data_type' => null,
        'contact_not_in_list' => null,
        'contact_already_removed' => null
    ];

    /**
     * Array of property to type mappings. Used for (de)serialization
     *
     * @return array
     */
    public static function openAPITypes()
    {
        return self::$openAPITypes;
    }

    /**
     * Array of property to format mappings. Used for (de)serialization
     *
     * @return array
     */
    public static function openAPIFormats()
    {
        return self::$openAPIFormats;
    }

    /**
     * Array of attributes where the key is the local name,
     * and the value is the original name
     *
     * @var string[]
     */
    protected static $attributeMap = [
        'invalid_unsubscription_reason' => 'invalid_unsubscription_reason',
        'invalid_unsubscription_method' => 'invalid_unsubscription_method',
        'invalid_data_type' => 'invalid_data_type',
        'contact_not_in_list' => 'contact_not_in_list',
        'contact_already_removed' => 'contact_already_removed'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'invalid_unsubscription_reason' => 'setInvalidUnsubscriptionReason',
        'invalid_unsubscription_method' => 'setInvalidUnsubscriptionMethod',
        'invalid_data_type' => 'setInvalidDataType',
        'contact_not_in_list' => 'setContactNotInList',
        'contact_already_removed' => 'setContactAlreadyRemoved'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'invalid_unsubscription_reason' => 'getInvalidUnsubscriptionReason',
        'invalid_unsubscription_method' => 'getInvalidUnsubscriptionMethod',
        'invalid_data_type' => 'getInvalidDataType',
        'contact_not_in_list' => 'getContactNotInList',
        'contact_already_removed' => 'getContactAlreadyRemoved'
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
        return self::$openAPIModelName;
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
        $this->container['invalid_unsubscription_reason'] = isset($data['invalid_unsubscription_reason']) ? $data['invalid_unsubscription_reason'] : null;
        $this->container['invalid_unsubscription_method'] = isset($data['invalid_unsubscription_method']) ? $data['invalid_unsubscription_method'] : null;
        $this->container['invalid_data_type'] = isset($data['invalid_data_type']) ? $data['invalid_data_type'] : null;
        $this->container['contact_not_in_list'] = isset($data['contact_not_in_list']) ? $data['contact_not_in_list'] : null;
        $this->container['contact_already_removed'] = isset($data['contact_already_removed']) ? $data['contact_already_removed'] : null;
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
     * Gets invalid_unsubscription_reason
     *
     * @return string[]|null
     */
    public function getInvalidUnsubscriptionReason()
    {
        return $this->container['invalid_unsubscription_reason'];
    }

    /**
     * Sets invalid_unsubscription_reason
     *
     * @param string[]|null $invalid_unsubscription_reason invalid_unsubscription_reason
     *
     * @return $this
     */
    public function setInvalidUnsubscriptionReason($invalid_unsubscription_reason)
    {
        $this->container['invalid_unsubscription_reason'] = $invalid_unsubscription_reason;

        return $this;
    }

    /**
     * Gets invalid_unsubscription_method
     *
     * @return string[]|null
     */
    public function getInvalidUnsubscriptionMethod()
    {
        return $this->container['invalid_unsubscription_method'];
    }

    /**
     * Sets invalid_unsubscription_method
     *
     * @param string[]|null $invalid_unsubscription_method invalid_unsubscription_method
     *
     * @return $this
     */
    public function setInvalidUnsubscriptionMethod($invalid_unsubscription_method)
    {
        $this->container['invalid_unsubscription_method'] = $invalid_unsubscription_method;

        return $this;
    }

    /**
     * Gets invalid_data_type
     *
     * @return string[]|null
     */
    public function getInvalidDataType()
    {
        return $this->container['invalid_data_type'];
    }

    /**
     * Sets invalid_data_type
     *
     * @param string[]|null $invalid_data_type invalid_data_type
     *
     * @return $this
     */
    public function setInvalidDataType($invalid_data_type)
    {
        $this->container['invalid_data_type'] = $invalid_data_type;

        return $this;
    }

    /**
     * Gets contact_not_in_list
     *
     * @return string[]|null
     */
    public function getContactNotInList()
    {
        return $this->container['contact_not_in_list'];
    }

    /**
     * Sets contact_not_in_list
     *
     * @param string[]|null $contact_not_in_list contact_not_in_list
     *
     * @return $this
     */
    public function setContactNotInList($contact_not_in_list)
    {
        $this->container['contact_not_in_list'] = $contact_not_in_list;

        return $this;
    }

    /**
     * Gets contact_already_removed
     *
     * @return string[]|null
     */
    public function getContactAlreadyRemoved()
    {
        return $this->container['contact_already_removed'];
    }

    /**
     * Sets contact_already_removed
     *
     * @param string[]|null $contact_already_removed contact_already_removed
     *
     * @return $this
     */
    public function setContactAlreadyRemoved($contact_already_removed)
    {
        $this->container['contact_already_removed'] = $contact_already_removed;

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
        return json_encode(
            ObjectSerializer::sanitizeForSerialization($this),
            JSON_PRETTY_PRINT
        );
    }

    /**
     * Gets a header-safe presentation of the object
     *
     * @return string
     */
    public function toHeaderValue()
    {
        return json_encode(ObjectSerializer::sanitizeForSerialization($this));
    }
}


