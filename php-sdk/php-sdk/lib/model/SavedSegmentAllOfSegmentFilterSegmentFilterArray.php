<?php
/**
 * SavedSegmentAllOfSegmentFilterSegmentFilterArray
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
 * SavedSegmentAllOfSegmentFilterSegmentFilterArray Class Doc Comment
 *
 * @category Class
 * @package  org.egoi.client
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */
class SavedSegmentAllOfSegmentFilterSegmentFilterArray implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'SavedSegment_allOf_segment_filter_segment_filter_array';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'segment_field' => 'string',
        'segment_operator' => 'string',
        'segment_value' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPIFormats = [
        'segment_field' => null,
        'segment_operator' => null,
        'segment_value' => null
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
        'segment_field' => 'segment_field',
        'segment_operator' => 'segment_operator',
        'segment_value' => 'segment_value'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'segment_field' => 'setSegmentField',
        'segment_operator' => 'setSegmentOperator',
        'segment_value' => 'setSegmentValue'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'segment_field' => 'getSegmentField',
        'segment_operator' => 'getSegmentOperator',
        'segment_value' => 'getSegmentValue'
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

    const SEGMENT_OPERATOR_EQUAL_TO = 'equal_to';
    const SEGMENT_OPERATOR_NOT_EQUAL_TO = 'not_equal_to';
    const SEGMENT_OPERATOR_GREATER_OR_EQUAL_TO = 'greater_or_equal_to';
    const SEGMENT_OPERATOR_GREATER_THAN = 'greater_than';
    const SEGMENT_OPERATOR_LESS_OR_EQUAL_TO = 'less_or_equal_to';
    const SEGMENT_OPERATOR_LESS_THAN = 'less_than';
    const SEGMENT_OPERATOR_CONTAINS = 'contains';
    const SEGMENT_OPERATOR_DOES_NOT_CONTAIN = 'does_not_contain';
    const SEGMENT_OPERATOR_BEGINS_WITH = 'begins_with';
    const SEGMENT_OPERATOR_ENDS_WITH = 'ends_with';
    const SEGMENT_OPERATOR_DATE_RANGE = 'date_range';
    

    
    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getSegmentOperatorAllowableValues()
    {
        return [
            self::SEGMENT_OPERATOR_EQUAL_TO,
            self::SEGMENT_OPERATOR_NOT_EQUAL_TO,
            self::SEGMENT_OPERATOR_GREATER_OR_EQUAL_TO,
            self::SEGMENT_OPERATOR_GREATER_THAN,
            self::SEGMENT_OPERATOR_LESS_OR_EQUAL_TO,
            self::SEGMENT_OPERATOR_LESS_THAN,
            self::SEGMENT_OPERATOR_CONTAINS,
            self::SEGMENT_OPERATOR_DOES_NOT_CONTAIN,
            self::SEGMENT_OPERATOR_BEGINS_WITH,
            self::SEGMENT_OPERATOR_ENDS_WITH,
            self::SEGMENT_OPERATOR_DATE_RANGE,
        ];
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
        $this->container['segment_field'] = isset($data['segment_field']) ? $data['segment_field'] : null;
        $this->container['segment_operator'] = isset($data['segment_operator']) ? $data['segment_operator'] : null;
        $this->container['segment_value'] = isset($data['segment_value']) ? $data['segment_value'] : null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        $allowedValues = $this->getSegmentOperatorAllowableValues();
        if (!is_null($this->container['segment_operator']) && !in_array($this->container['segment_operator'], $allowedValues, true)) {
            $invalidProperties[] = sprintf(
                "invalid value for 'segment_operator', must be one of '%s'",
                implode("', '", $allowedValues)
            );
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
     * Gets segment_field
     *
     * @return string|null
     */
    public function getSegmentField()
    {
        return $this->container['segment_field'];
    }

    /**
     * Sets segment_field
     *
     * @param string|null $segment_field Field internal name (retrieve fields using GET: /lists/{list_id}/fields)
     *
     * @return $this
     */
    public function setSegmentField($segment_field)
    {
        $this->container['segment_field'] = $segment_field;

        return $this;
    }

    /**
     * Gets segment_operator
     *
     * @return string|null
     */
    public function getSegmentOperator()
    {
        return $this->container['segment_operator'];
    }

    /**
     * Sets segment_operator
     *
     * @param string|null $segment_operator Segment operator used for comparison. When using a range of dates split them                                             using the following format: date1||date2
     *
     * @return $this
     */
    public function setSegmentOperator($segment_operator)
    {
        $allowedValues = $this->getSegmentOperatorAllowableValues();
        if (!is_null($segment_operator) && !in_array($segment_operator, $allowedValues, true)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value for 'segment_operator', must be one of '%s'",
                    implode("', '", $allowedValues)
                )
            );
        }
        $this->container['segment_operator'] = $segment_operator;

        return $this;
    }

    /**
     * Gets segment_value
     *
     * @return string|null
     */
    public function getSegmentValue()
    {
        return $this->container['segment_value'];
    }

    /**
     * Sets segment_value
     *
     * @param string|null $segment_value Segment search value
     *
     * @return $this
     */
    public function setSegmentValue($segment_value)
    {
        $this->container['segment_value'] = $segment_value;

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


