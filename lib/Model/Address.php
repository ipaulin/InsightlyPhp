<?php
/**
 * Address
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
 * Address Class Doc Comment
 *
 * @category    Class */
 // @description APIAddress
/** 
 * @package     Swagger\Client
 * @author      http://github.com/swagger-api/swagger-codegen
 * @license     http://www.apache.org/licenses/LICENSE-2.0 Apache Licene v2
 * @link        https://github.com/swagger-api/swagger-codegen
 */
class Address implements ArrayAccess
{
    /**
      * The original name of the model.
      * @var string
      */
    protected static $swaggerModelName = 'Address';

    /**
      * Array of property to type mappings. Used for (de)serialization
      * @var string[]
      */
    protected static $swaggerTypes = array(
        'address_id' => 'int',
        'address_type' => 'string',
        'street' => 'string',
        'city' => 'string',
        'state' => 'string',
        'postcode' => 'string',
        'country' => 'string'
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
        'address_id' => 'ADDRESS_ID',
        'address_type' => 'ADDRESS_TYPE',
        'street' => 'STREET',
        'city' => 'CITY',
        'state' => 'STATE',
        'postcode' => 'POSTCODE',
        'country' => 'COUNTRY'
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
        'address_id' => 'setAddressId',
        'address_type' => 'setAddressType',
        'street' => 'setStreet',
        'city' => 'setCity',
        'state' => 'setState',
        'postcode' => 'setPostcode',
        'country' => 'setCountry'
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
        'address_id' => 'getAddressId',
        'address_type' => 'getAddressType',
        'street' => 'getStreet',
        'city' => 'getCity',
        'state' => 'getState',
        'postcode' => 'getPostcode',
        'country' => 'getCountry'
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
        $this->container['address_id'] = isset($data['address_id']) ? $data['address_id'] : null;
        $this->container['address_type'] = isset($data['address_type']) ? $data['address_type'] : null;
        $this->container['street'] = isset($data['street']) ? $data['street'] : null;
        $this->container['city'] = isset($data['city']) ? $data['city'] : null;
        $this->container['state'] = isset($data['state']) ? $data['state'] : null;
        $this->container['postcode'] = isset($data['postcode']) ? $data['postcode'] : null;
        $this->container['country'] = isset($data['country']) ? $data['country'] : null;
    }

    /**
     * show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalid_properties = array();
        if ($this->container['address_type'] === null) {
            $invalid_properties[] = "'address_type' can't be null";
        }
        if (!is_null($this->container['street']) && (strlen($this->container['street']) > 255)) {
            $invalid_properties[] = "invalid value for 'street', the character length must be smaller than or equal to 255.";
        }

        if (!is_null($this->container['street']) && (strlen($this->container['street']) < 0)) {
            $invalid_properties[] = "invalid value for 'street', the character length must be bigger than or equal to 0.";
        }

        if (!is_null($this->container['city']) && (strlen($this->container['city']) > 255)) {
            $invalid_properties[] = "invalid value for 'city', the character length must be smaller than or equal to 255.";
        }

        if (!is_null($this->container['city']) && (strlen($this->container['city']) < 0)) {
            $invalid_properties[] = "invalid value for 'city', the character length must be bigger than or equal to 0.";
        }

        if (!is_null($this->container['state']) && (strlen($this->container['state']) > 255)) {
            $invalid_properties[] = "invalid value for 'state', the character length must be smaller than or equal to 255.";
        }

        if (!is_null($this->container['state']) && (strlen($this->container['state']) < 0)) {
            $invalid_properties[] = "invalid value for 'state', the character length must be bigger than or equal to 0.";
        }

        if (!is_null($this->container['postcode']) && (strlen($this->container['postcode']) > 128)) {
            $invalid_properties[] = "invalid value for 'postcode', the character length must be smaller than or equal to 128.";
        }

        if (!is_null($this->container['postcode']) && (strlen($this->container['postcode']) < 0)) {
            $invalid_properties[] = "invalid value for 'postcode', the character length must be bigger than or equal to 0.";
        }

        if (!is_null($this->container['country']) && (strlen($this->container['country']) > 255)) {
            $invalid_properties[] = "invalid value for 'country', the character length must be smaller than or equal to 255.";
        }

        if (!is_null($this->container['country']) && (strlen($this->container['country']) < 0)) {
            $invalid_properties[] = "invalid value for 'country', the character length must be bigger than or equal to 0.";
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
        if ($this->container['address_type'] === null) {
            return false;
        }
        if (strlen($this->container['street']) > 255) {
            return false;
        }
        if (strlen($this->container['street']) < 0) {
            return false;
        }
        if (strlen($this->container['city']) > 255) {
            return false;
        }
        if (strlen($this->container['city']) < 0) {
            return false;
        }
        if (strlen($this->container['state']) > 255) {
            return false;
        }
        if (strlen($this->container['state']) < 0) {
            return false;
        }
        if (strlen($this->container['postcode']) > 128) {
            return false;
        }
        if (strlen($this->container['postcode']) < 0) {
            return false;
        }
        if (strlen($this->container['country']) > 255) {
            return false;
        }
        if (strlen($this->container['country']) < 0) {
            return false;
        }
        return true;
    }


    /**
     * Gets address_id
     * @return int
     */
    public function getAddressId()
    {
        return $this->container['address_id'];
    }

    /**
     * Sets address_id
     * @param int $address_id Unique key of the address record
     * @return $this
     */
    public function setAddressId($address_id)
    {
        $this->container['address_id'] = $address_id;

        return $this;
    }

    /**
     * Gets address_type
     * @return string
     */
    public function getAddressType()
    {
        return $this->container['address_type'];
    }

    /**
     * Sets address_type
     * @param string $address_type Address Type
     * @return $this
     */
    public function setAddressType($address_type)
    {
        $this->container['address_type'] = $address_type;

        return $this;
    }

    /**
     * Gets street
     * @return string
     */
    public function getStreet()
    {
        return $this->container['street'];
    }

    /**
     * Sets street
     * @param string $street Street number and name of address
     * @return $this
     */
    public function setStreet($street)
    {
        if (strlen($street) > 255) {
            throw new \InvalidArgumentException('invalid length for $street when calling Address., must be smaller than or equal to 255.');
        }
        if (strlen($street) < 0) {
            throw new \InvalidArgumentException('invalid length for $street when calling Address., must be bigger than or equal to 0.');
        }
        $this->container['street'] = $street;

        return $this;
    }

    /**
     * Gets city
     * @return string
     */
    public function getCity()
    {
        return $this->container['city'];
    }

    /**
     * Sets city
     * @param string $city City
     * @return $this
     */
    public function setCity($city)
    {
        if (strlen($city) > 255) {
            throw new \InvalidArgumentException('invalid length for $city when calling Address., must be smaller than or equal to 255.');
        }
        if (strlen($city) < 0) {
            throw new \InvalidArgumentException('invalid length for $city when calling Address., must be bigger than or equal to 0.');
        }
        $this->container['city'] = $city;

        return $this;
    }

    /**
     * Gets state
     * @return string
     */
    public function getState()
    {
        return $this->container['state'];
    }

    /**
     * Sets state
     * @param string $state State/Province
     * @return $this
     */
    public function setState($state)
    {
        if (strlen($state) > 255) {
            throw new \InvalidArgumentException('invalid length for $state when calling Address., must be smaller than or equal to 255.');
        }
        if (strlen($state) < 0) {
            throw new \InvalidArgumentException('invalid length for $state when calling Address., must be bigger than or equal to 0.');
        }
        $this->container['state'] = $state;

        return $this;
    }

    /**
     * Gets postcode
     * @return string
     */
    public function getPostcode()
    {
        return $this->container['postcode'];
    }

    /**
     * Sets postcode
     * @param string $postcode Zip or postal code
     * @return $this
     */
    public function setPostcode($postcode)
    {
        if (strlen($postcode) > 128) {
            throw new \InvalidArgumentException('invalid length for $postcode when calling Address., must be smaller than or equal to 128.');
        }
        if (strlen($postcode) < 0) {
            throw new \InvalidArgumentException('invalid length for $postcode when calling Address., must be bigger than or equal to 0.');
        }
        $this->container['postcode'] = $postcode;

        return $this;
    }

    /**
     * Gets country
     * @return string
     */
    public function getCountry()
    {
        return $this->container['country'];
    }

    /**
     * Sets country
     * @param string $country Country, see Countries resource for options
     * @return $this
     */
    public function setCountry($country)
    {
        if (strlen($country) > 255) {
            throw new \InvalidArgumentException('invalid length for $country when calling Address., must be smaller than or equal to 255.');
        }
        if (strlen($country) < 0) {
            throw new \InvalidArgumentException('invalid length for $country when calling Address., must be bigger than or equal to 0.');
        }
        $this->container['country'] = $country;

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


