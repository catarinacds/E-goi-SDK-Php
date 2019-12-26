<?php
/**
 * ComplexContact
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
 * ComplexContact Class Doc Comment
 *
 * @category Class
 * @description Complex contact schema
 * @package  org.egoi.client
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */
class ComplexContact implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'ComplexContact';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'base' => 'ContactInsideBase',
        'extra' => '\org.egoi.client\org.egoi.client.model\ContactExtraFields[]',
        'tags' => 'int[]',
        'email_stats' => '\org.egoi.client\org.egoi.client.model\ComplexContactAllOfEmailStats',
        'sms_stats' => '\org.egoi.client\org.egoi.client.model\ComplexContactAllOfSmsStats',
        'push_stats' => '\org.egoi.client\org.egoi.client.model\ComplexContactAllOfPushStats',
        'webpush_stats' => '\org.egoi.client\org.egoi.client.model\ComplexContactAllOfWebpushStats',
        'voice_stats' => '\org.egoi.client\org.egoi.client.model\ComplexContactAllOfVoiceStats'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPIFormats = [
        'base' => null,
        'extra' => null,
        'tags' => null,
        'email_stats' => null,
        'sms_stats' => null,
        'push_stats' => null,
        'webpush_stats' => null,
        'voice_stats' => null
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
        'base' => 'base',
        'extra' => 'extra',
        'tags' => 'tags',
        'email_stats' => 'email_stats',
        'sms_stats' => 'sms_stats',
        'push_stats' => 'push_stats',
        'webpush_stats' => 'webpush_stats',
        'voice_stats' => 'voice_stats'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'base' => 'setBase',
        'extra' => 'setExtra',
        'tags' => 'setTags',
        'email_stats' => 'setEmailStats',
        'sms_stats' => 'setSmsStats',
        'push_stats' => 'setPushStats',
        'webpush_stats' => 'setWebpushStats',
        'voice_stats' => 'setVoiceStats'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'base' => 'getBase',
        'extra' => 'getExtra',
        'tags' => 'getTags',
        'email_stats' => 'getEmailStats',
        'sms_stats' => 'getSmsStats',
        'push_stats' => 'getPushStats',
        'webpush_stats' => 'getWebpushStats',
        'voice_stats' => 'getVoiceStats'
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
        $this->container['base'] = isset($data['base']) ? $data['base'] : null;
        $this->container['extra'] = isset($data['extra']) ? $data['extra'] : null;
        $this->container['tags'] = isset($data['tags']) ? $data['tags'] : null;
        $this->container['email_stats'] = isset($data['email_stats']) ? $data['email_stats'] : null;
        $this->container['sms_stats'] = isset($data['sms_stats']) ? $data['sms_stats'] : null;
        $this->container['push_stats'] = isset($data['push_stats']) ? $data['push_stats'] : null;
        $this->container['webpush_stats'] = isset($data['webpush_stats']) ? $data['webpush_stats'] : null;
        $this->container['voice_stats'] = isset($data['voice_stats']) ? $data['voice_stats'] : null;
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
     * Gets base
     *
     * @return ContactInsideBase|null
     */
    public function getBase()
    {
        return $this->container['base'];
    }

    /**
     * Sets base
     *
     * @param ContactInsideBase|null $base Contact base fields
     *
     * @return $this
     */
    public function setBase($base)
    {
        $this->container['base'] = $base;

        return $this;
    }

    /**
     * Gets extra
     *
     * @return \org.egoi.client\org.egoi.client.model\ContactExtraFields[]|null
     */
    public function getExtra()
    {
        return $this->container['extra'];
    }

    /**
     * Sets extra
     *
     * @param \org.egoi.client\org.egoi.client.model\ContactExtraFields[]|null $extra Array of the contact's extra fields
     *
     * @return $this
     */
    public function setExtra($extra)
    {
        $this->container['extra'] = $extra;

        return $this;
    }

    /**
     * Gets tags
     *
     * @return int[]|null
     */
    public function getTags()
    {
        return $this->container['tags'];
    }

    /**
     * Sets tags
     *
     * @param int[]|null $tags Array of tags for this contact
     *
     * @return $this
     */
    public function setTags($tags)
    {
        $this->container['tags'] = $tags;

        return $this;
    }

    /**
     * Gets email_stats
     *
     * @return \org.egoi.client\org.egoi.client.model\ComplexContactAllOfEmailStats|null
     */
    public function getEmailStats()
    {
        return $this->container['email_stats'];
    }

    /**
     * Sets email_stats
     *
     * @param \org.egoi.client\org.egoi.client.model\ComplexContactAllOfEmailStats|null $email_stats email_stats
     *
     * @return $this
     */
    public function setEmailStats($email_stats)
    {
        $this->container['email_stats'] = $email_stats;

        return $this;
    }

    /**
     * Gets sms_stats
     *
     * @return \org.egoi.client\org.egoi.client.model\ComplexContactAllOfSmsStats|null
     */
    public function getSmsStats()
    {
        return $this->container['sms_stats'];
    }

    /**
     * Sets sms_stats
     *
     * @param \org.egoi.client\org.egoi.client.model\ComplexContactAllOfSmsStats|null $sms_stats sms_stats
     *
     * @return $this
     */
    public function setSmsStats($sms_stats)
    {
        $this->container['sms_stats'] = $sms_stats;

        return $this;
    }

    /**
     * Gets push_stats
     *
     * @return \org.egoi.client\org.egoi.client.model\ComplexContactAllOfPushStats|null
     */
    public function getPushStats()
    {
        return $this->container['push_stats'];
    }

    /**
     * Sets push_stats
     *
     * @param \org.egoi.client\org.egoi.client.model\ComplexContactAllOfPushStats|null $push_stats push_stats
     *
     * @return $this
     */
    public function setPushStats($push_stats)
    {
        $this->container['push_stats'] = $push_stats;

        return $this;
    }

    /**
     * Gets webpush_stats
     *
     * @return \org.egoi.client\org.egoi.client.model\ComplexContactAllOfWebpushStats|null
     */
    public function getWebpushStats()
    {
        return $this->container['webpush_stats'];
    }

    /**
     * Sets webpush_stats
     *
     * @param \org.egoi.client\org.egoi.client.model\ComplexContactAllOfWebpushStats|null $webpush_stats webpush_stats
     *
     * @return $this
     */
    public function setWebpushStats($webpush_stats)
    {
        $this->container['webpush_stats'] = $webpush_stats;

        return $this;
    }

    /**
     * Gets voice_stats
     *
     * @return \org.egoi.client\org.egoi.client.model\ComplexContactAllOfVoiceStats|null
     */
    public function getVoiceStats()
    {
        return $this->container['voice_stats'];
    }

    /**
     * Sets voice_stats
     *
     * @param \org.egoi.client\org.egoi.client.model\ComplexContactAllOfVoiceStats|null $voice_stats voice_stats
     *
     * @return $this
     */
    public function setVoiceStats($voice_stats)
    {
        $this->container['voice_stats'] = $voice_stats;

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


