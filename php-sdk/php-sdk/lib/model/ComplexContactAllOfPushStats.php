<?php
/**
 * ComplexContactAllOfPushStats
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
 * ComplexContactAllOfPushStats Class Doc Comment
 *
 * @category Class
 * @description Push stats of the contact
 * @package  org.egoi.client
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */
class ComplexContactAllOfPushStats implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'ComplexContact_allOf_push_stats';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'sent' => 'int',
        'delivered' => 'int',
        'not_delivered' => 'int',
        'views' => 'int',
        'clicks' => 'int',
        'last_view_date' => '\DateTime'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPIFormats = [
        'sent' => null,
        'delivered' => null,
        'not_delivered' => null,
        'views' => null,
        'clicks' => null,
        'last_view_date' => 'date-time'
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
        'sent' => 'sent',
        'delivered' => 'delivered',
        'not_delivered' => 'not_delivered',
        'views' => 'views',
        'clicks' => 'clicks',
        'last_view_date' => 'last_view_date'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'sent' => 'setSent',
        'delivered' => 'setDelivered',
        'not_delivered' => 'setNotDelivered',
        'views' => 'setViews',
        'clicks' => 'setClicks',
        'last_view_date' => 'setLastViewDate'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'sent' => 'getSent',
        'delivered' => 'getDelivered',
        'not_delivered' => 'getNotDelivered',
        'views' => 'getViews',
        'clicks' => 'getClicks',
        'last_view_date' => 'getLastViewDate'
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
        $this->container['sent'] = isset($data['sent']) ? $data['sent'] : null;
        $this->container['delivered'] = isset($data['delivered']) ? $data['delivered'] : null;
        $this->container['not_delivered'] = isset($data['not_delivered']) ? $data['not_delivered'] : null;
        $this->container['views'] = isset($data['views']) ? $data['views'] : null;
        $this->container['clicks'] = isset($data['clicks']) ? $data['clicks'] : null;
        $this->container['last_view_date'] = isset($data['last_view_date']) ? $data['last_view_date'] : null;
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
     * Gets sent
     *
     * @return int|null
     */
    public function getSent()
    {
        return $this->container['sent'];
    }

    /**
     * Sets sent
     *
     * @param int|null $sent Push messages sent to the contact
     *
     * @return $this
     */
    public function setSent($sent)
    {
        $this->container['sent'] = $sent;

        return $this;
    }

    /**
     * Gets delivered
     *
     * @return int|null
     */
    public function getDelivered()
    {
        return $this->container['delivered'];
    }

    /**
     * Sets delivered
     *
     * @param int|null $delivered Push messages delivered to the contact
     *
     * @return $this
     */
    public function setDelivered($delivered)
    {
        $this->container['delivered'] = $delivered;

        return $this;
    }

    /**
     * Gets not_delivered
     *
     * @return int|null
     */
    public function getNotDelivered()
    {
        return $this->container['not_delivered'];
    }

    /**
     * Sets not_delivered
     *
     * @param int|null $not_delivered Push messages that were not delivered to the contact
     *
     * @return $this
     */
    public function setNotDelivered($not_delivered)
    {
        $this->container['not_delivered'] = $not_delivered;

        return $this;
    }

    /**
     * Gets views
     *
     * @return int|null
     */
    public function getViews()
    {
        return $this->container['views'];
    }

    /**
     * Sets views
     *
     * @param int|null $views Push messages that were viewed by the contact
     *
     * @return $this
     */
    public function setViews($views)
    {
        $this->container['views'] = $views;

        return $this;
    }

    /**
     * Gets clicks
     *
     * @return int|null
     */
    public function getClicks()
    {
        return $this->container['clicks'];
    }

    /**
     * Sets clicks
     *
     * @param int|null $clicks Total number of clicks made by the contact
     *
     * @return $this
     */
    public function setClicks($clicks)
    {
        $this->container['clicks'] = $clicks;

        return $this;
    }

    /**
     * Gets last_view_date
     *
     * @return \DateTime|null
     */
    public function getLastViewDate()
    {
        return $this->container['last_view_date'];
    }

    /**
     * Sets last_view_date
     *
     * @param \DateTime|null $last_view_date Date of the last push message view of the contact
     *
     * @return $this
     */
    public function setLastViewDate($last_view_date)
    {
        $this->container['last_view_date'] = $last_view_date;

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


