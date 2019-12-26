<?php
/**
 * SendsCampaignFields
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
 * OpenAPI Generator version: 4.2.3-SNAPSHOT
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
 * SendsCampaignFields Class Doc Comment
 *
 * @category Class
 * @description Campaign fields to include in the report
 * @package  org.egoi.client
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */
class SendsCampaignFields implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'SendsCampaignFields';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'internal_name' => 'bool',
        'campaign_hash' => 'bool',
        'group' => 'bool',
        'channel' => 'bool',
        'type' => 'bool',
        'sender' => 'bool'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPIFormats = [
        'internal_name' => null,
        'campaign_hash' => null,
        'group' => null,
        'channel' => null,
        'type' => null,
        'sender' => null
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
        'internal_name' => 'internal_name',
        'campaign_hash' => 'campaign_hash',
        'group' => 'group',
        'channel' => 'channel',
        'type' => 'type',
        'sender' => 'sender'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'internal_name' => 'setInternalName',
        'campaign_hash' => 'setCampaignHash',
        'group' => 'setGroup',
        'channel' => 'setChannel',
        'type' => 'setType',
        'sender' => 'setSender'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'internal_name' => 'getInternalName',
        'campaign_hash' => 'getCampaignHash',
        'group' => 'getGroup',
        'channel' => 'getChannel',
        'type' => 'getType',
        'sender' => 'getSender'
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
        $this->container['internal_name'] = isset($data['internal_name']) ? $data['internal_name'] : null;
        $this->container['campaign_hash'] = isset($data['campaign_hash']) ? $data['campaign_hash'] : null;
        $this->container['group'] = isset($data['group']) ? $data['group'] : null;
        $this->container['channel'] = isset($data['channel']) ? $data['channel'] : null;
        $this->container['type'] = isset($data['type']) ? $data['type'] : null;
        $this->container['sender'] = isset($data['sender']) ? $data['sender'] : null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        if ($this->container['internal_name'] === null) {
            $invalidProperties[] = "'internal_name' can't be null";
        }
        if ($this->container['campaign_hash'] === null) {
            $invalidProperties[] = "'campaign_hash' can't be null";
        }
        if ($this->container['group'] === null) {
            $invalidProperties[] = "'group' can't be null";
        }
        if ($this->container['channel'] === null) {
            $invalidProperties[] = "'channel' can't be null";
        }
        if ($this->container['type'] === null) {
            $invalidProperties[] = "'type' can't be null";
        }
        if ($this->container['sender'] === null) {
            $invalidProperties[] = "'sender' can't be null";
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
        return count($this->listInvalidProperties()) === 0;
    }


    /**
     * Gets internal_name
     *
     * @return bool
     */
    public function getInternalName()
    {
        return $this->container['internal_name'];
    }

    /**
     * Sets internal_name
     *
     * @param bool $internal_name True to include the internal name of the campaign, false otherwise
     *
     * @return $this
     */
    public function setInternalName($internal_name)
    {
        $this->container['internal_name'] = $internal_name;

        return $this;
    }

    /**
     * Gets campaign_hash
     *
     * @return bool
     */
    public function getCampaignHash()
    {
        return $this->container['campaign_hash'];
    }

    /**
     * Sets campaign_hash
     *
     * @param bool $campaign_hash True to include the hash of the campaign, false otherwise
     *
     * @return $this
     */
    public function setCampaignHash($campaign_hash)
    {
        $this->container['campaign_hash'] = $campaign_hash;

        return $this;
    }

    /**
     * Gets group
     *
     * @return bool
     */
    public function getGroup()
    {
        return $this->container['group'];
    }

    /**
     * Sets group
     *
     * @param bool $group True to include the group of the campaign, false otherwise
     *
     * @return $this
     */
    public function setGroup($group)
    {
        $this->container['group'] = $group;

        return $this;
    }

    /**
     * Gets channel
     *
     * @return bool
     */
    public function getChannel()
    {
        return $this->container['channel'];
    }

    /**
     * Sets channel
     *
     * @param bool $channel True to include the channel of the campaign, false otherwise
     *
     * @return $this
     */
    public function setChannel($channel)
    {
        $this->container['channel'] = $channel;

        return $this;
    }

    /**
     * Gets type
     *
     * @return bool
     */
    public function getType()
    {
        return $this->container['type'];
    }

    /**
     * Sets type
     *
     * @param bool $type True to include the type of the campaign, false otherwise
     *
     * @return $this
     */
    public function setType($type)
    {
        $this->container['type'] = $type;

        return $this;
    }

    /**
     * Gets sender
     *
     * @return bool
     */
    public function getSender()
    {
        return $this->container['sender'];
    }

    /**
     * Sets sender
     *
     * @param bool $sender True to include the sender of the campaign, false otherwise
     *
     * @return $this
     */
    public function setSender($sender)
    {
        $this->container['sender'] = $sender;

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


