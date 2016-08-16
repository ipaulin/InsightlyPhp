<?php
/**
 * LeadStatus
 *
 * PHP version 5
 *
 * @category Class
 * @package  Swagger\Client
 * @author   http://github.com/swagger-api/swagger-codegen
 * @license  http://www.apache.org/licenses/LICENSE-2.0 Apache Licene v2
 * @link     https://github.com/swagger-api/swagger-codegen
 */

/**
 * Insightly API v2.2
 *
 * No descripton provided (generated by Swagger Codegen https://github.com/swagger-api/swagger-codegen)
 *
 * OpenAPI spec version: v2.2
 * 
 * Generated by: https://github.com/swagger-api/swagger-codegen.git
 *
 * Licensed under the Apache License, Version 2.0 (the "License");
 * you may not use this file except in compliance with the License.
 * You may obtain a copy of the License at
 *
 *      http://www.apache.org/licenses/LICENSE-2.0
 *
 * Unless required by applicable law or agreed to in writing, software
 * distributed under the License is distributed on an "AS IS" BASIS,
 * WITHOUT WARRANTIES OR CONDITIONS OF ANY KIND, either express or implied.
 * See the License for the specific language governing permissions and
 * limitations under the License.
 */

/**
 * NOTE: This class is auto generated by the swagger code generator program.
 * https://github.com/swagger-api/swagger-codegen
 * Do not edit the class manually.
 */

namespace Swagger\Client\Model;

use \ArrayAccess;

/**
 * LeadStatus Class Doc Comment
 *
 * @category    Class */
 // @description APICategory
/** 
 * @package     Swagger\Client
 * @author      http://github.com/swagger-api/swagger-codegen
 * @license     http://www.apache.org/licenses/LICENSE-2.0 Apache Licene v2
 * @link        https://github.com/swagger-api/swagger-codegen
 */
class LeadStatus implements ArrayAccess
{
    /**
      * The original name of the model.
      * @var string
      */
    protected static $swaggerModelName = 'LeadStatus';

    /**
      * Array of property to type mappings. Used for (de)serialization
      * @var string[]
      */
    protected static $swaggerTypes = array(
        'lead_status_id' => 'int',
        'lead_status' => 'string',
        'default_status' => 'bool',
        'status_type' => 'int',
        'field_order' => 'int'
    );

    public static function swaggerTypes()
    {
        return self::$swaggerTypes;
    }

    /**
     * Array of attributes where the key is the local name, and the value is the original name
     * @var string[]
     */
    protected static $attributeMap = array(
        'lead_status_id' => 'LEAD_STATUS_ID',
        'lead_status' => 'LEAD_STATUS',
        'default_status' => 'DEFAULT_STATUS',
        'status_type' => 'STATUS_TYPE',
        'field_order' => 'FIELD_ORDER'
    );

    public static function attributeMap()
    {
        return self::$attributeMap;
    }

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     * @var string[]
     */
    protected static $setters = array(
        'lead_status_id' => 'setLeadStatusId',
        'lead_status' => 'setLeadStatus',
        'default_status' => 'setDefaultStatus',
        'status_type' => 'setStatusType',
        'field_order' => 'setFieldOrder'
    );

    public static function setters()
    {
        return self::$setters;
    }

    /**
     * Array of attributes to getter functions (for serialization of requests)
     * @var string[]
     */
    protected static $getters = array(
        'lead_status_id' => 'getLeadStatusId',
        'lead_status' => 'getLeadStatus',
        'default_status' => 'getDefaultStatus',
        'status_type' => 'getStatusType',
        'field_order' => 'getFieldOrder'
    );

    public static function getters()
    {
        return self::$getters;
    }

    

    

    /**
     * Associative array for storing property values
     * @var mixed[]
     */
    protected $container = array();

    /**
     * Constructor
     * @param mixed[] $data Associated array of property value initalizing the model
     */
    public function __construct(array $data = null)
    {
        $this->container['lead_status_id'] = isset($data['lead_status_id']) ? $data['lead_status_id'] : null;
        $this->container['lead_status'] = isset($data['lead_status']) ? $data['lead_status'] : null;
        $this->container['default_status'] = isset($data['default_status']) ? $data['default_status'] : null;
        $this->container['status_type'] = isset($data['status_type']) ? $data['status_type'] : null;
        $this->container['field_order'] = isset($data['field_order']) ? $data['field_order'] : null;
    }

    /**
     * show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalid_properties = array();
        if ($this->container['lead_status'] === null) {
            $invalid_properties[] = "'lead_status' can't be null";
        }
        if ((strlen($this->container['lead_status']) > 255)) {
            $invalid_properties[] = "invalid value for 'lead_status', the character length must be smaller than or equal to 255.";
        }

        if ((strlen($this->container['lead_status']) < 0)) {
            $invalid_properties[] = "invalid value for 'lead_status', the character length must be bigger than or equal to 0.";
        }

        return $invalid_properties;
    }

    /**
     * validate all the properties in the model
     * return true if all passed
     *
     * @return bool True if all properteis are valid
     */
    public function valid()
    {
        if ($this->container['lead_status'] === null) {
            return false;
        }
        if (strlen($this->container['lead_status']) > 255) {
            return false;
        }
        if (strlen($this->container['lead_status']) < 0) {
            return false;
        }
        return true;
    }


    /**
     * Gets lead_status_id
     * @return int
     */
    public function getLeadStatusId()
    {
        return $this->container['lead_status_id'];
    }

    /**
     * Sets lead_status_id
     * @param int $lead_status_id Unique ID for the current Lead Status
     * @return $this
     */
    public function setLeadStatusId($lead_status_id)
    {
        $this->container['lead_status_id'] = $lead_status_id;

        return $this;
    }

    /**
     * Gets lead_status
     * @return string
     */
    public function getLeadStatus()
    {
        return $this->container['lead_status'];
    }

    /**
     * Sets lead_status
     * @param string $lead_status Lead Status value
     * @return $this
     */
    public function setLeadStatus($lead_status)
    {
        if (strlen($lead_status) > 255) {
            throw new \InvalidArgumentException('invalid length for $lead_status when calling LeadStatus., must be smaller than or equal to 255.');
        }
        if (strlen($lead_status) < 0) {
            throw new \InvalidArgumentException('invalid length for $lead_status when calling LeadStatus., must be bigger than or equal to 0.');
        }
        $this->container['lead_status'] = $lead_status;

        return $this;
    }

    /**
     * Gets default_status
     * @return bool
     */
    public function getDefaultStatus()
    {
        return $this->container['default_status'];
    }

    /**
     * Sets default_status
     * @param bool $default_status checks or sets the current Lead source for being the default value
     * @return $this
     */
    public function setDefaultStatus($default_status)
    {
        $this->container['default_status'] = $default_status;

        return $this;
    }

    /**
     * Gets status_type
     * @return int
     */
    public function getStatusType()
    {
        return $this->container['status_type'];
    }

    /**
     * Sets status_type
     * @param int $status_type Status type indicating Lead Status (either open or close)
     * @return $this
     */
    public function setStatusType($status_type)
    {
        $this->container['status_type'] = $status_type;

        return $this;
    }

    /**
     * Gets field_order
     * @return int
     */
    public function getFieldOrder()
    {
        return $this->container['field_order'];
    }

    /**
     * Sets field_order
     * @param int $field_order Field Order used to retrive list sorted
     * @return $this
     */
    public function setFieldOrder($field_order)
    {
        $this->container['field_order'] = $field_order;

        return $this;
    }
    /**
     * Returns true if offset exists. False otherwise.
     * @param  integer $offset Offset
     * @return boolean
     */
    public function offsetExists($offset)
    {
        return isset($this->container[$offset]);
    }

    /**
     * Gets offset.
     * @param  integer $offset Offset
     * @return mixed
     */
    public function offsetGet($offset)
    {
        return isset($this->container[$offset]) ? $this->container[$offset] : null;
    }

    /**
     * Sets value based on offset.
     * @param  integer $offset Offset
     * @param  mixed   $value  Value to be set
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
     * @param  integer $offset Offset
     * @return void
     */
    public function offsetUnset($offset)
    {
        unset($this->container[$offset]);
    }

    /**
     * Gets the string presentation of the object
     * @return string
     */
    public function __toString()
    {
        if (defined('JSON_PRETTY_PRINT')) { // use JSON pretty print
            return json_encode(\Swagger\Client\ObjectSerializer::sanitizeForSerialization($this), JSON_PRETTY_PRINT);
        }

        return json_encode(\Swagger\Client\ObjectSerializer::sanitizeForSerialization($this));
    }
}


