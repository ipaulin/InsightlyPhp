<?php
/**
 * APITeam
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
 * APITeam Class Doc Comment
 *
 * @category    Class */
 // @description APITeam
/** 
 * @package     Swagger\Client
 * @author      http://github.com/swagger-api/swagger-codegen
 * @license     http://www.apache.org/licenses/LICENSE-2.0 Apache Licene v2
 * @link        https://github.com/swagger-api/swagger-codegen
 */
class APITeam implements ArrayAccess
{
    /**
      * The original name of the model.
      * @var string
      */
    protected static $swaggerModelName = 'APITeam';

    /**
      * Array of property to type mappings. Used for (de)serialization
      * @var string[]
      */
    protected static $swaggerTypes = array(
        'team_id' => 'int',
        'team_name' => 'string',
        'anonymous_team' => 'bool',
        'date_created_utc' => '\DateTime',
        'date_updated_utc' => '\DateTime',
        'teammembers' => '\Swagger\Client\Model\APITeamMember[]'
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
        'team_id' => 'TEAM_ID',
        'team_name' => 'TEAM_NAME',
        'anonymous_team' => 'ANONYMOUS_TEAM',
        'date_created_utc' => 'DATE_CREATED_UTC',
        'date_updated_utc' => 'DATE_UPDATED_UTC',
        'teammembers' => 'TEAMMEMBERS'
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
        'team_id' => 'setTeamId',
        'team_name' => 'setTeamName',
        'anonymous_team' => 'setAnonymousTeam',
        'date_created_utc' => 'setDateCreatedUtc',
        'date_updated_utc' => 'setDateUpdatedUtc',
        'teammembers' => 'setTeammembers'
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
        'team_id' => 'getTeamId',
        'team_name' => 'getTeamName',
        'anonymous_team' => 'getAnonymousTeam',
        'date_created_utc' => 'getDateCreatedUtc',
        'date_updated_utc' => 'getDateUpdatedUtc',
        'teammembers' => 'getTeammembers'
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
        $this->container['team_id'] = isset($data['team_id']) ? $data['team_id'] : null;
        $this->container['team_name'] = isset($data['team_name']) ? $data['team_name'] : null;
        $this->container['anonymous_team'] = isset($data['anonymous_team']) ? $data['anonymous_team'] : null;
        $this->container['date_created_utc'] = isset($data['date_created_utc']) ? $data['date_created_utc'] : null;
        $this->container['date_updated_utc'] = isset($data['date_updated_utc']) ? $data['date_updated_utc'] : null;
        $this->container['teammembers'] = isset($data['teammembers']) ? $data['teammembers'] : null;
    }

    /**
     * show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalid_properties = array();
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
        return true;
    }


    /**
     * Gets team_id
     * @return int
     */
    public function getTeamId()
    {
        return $this->container['team_id'];
    }

    /**
     * Sets team_id
     * @param int $team_id Unique ID for the Team record
     * @return $this
     */
    public function setTeamId($team_id)
    {
        $this->container['team_id'] = $team_id;

        return $this;
    }

    /**
     * Gets team_name
     * @return string
     */
    public function getTeamName()
    {
        return $this->container['team_name'];
    }

    /**
     * Sets team_name
     * @param string $team_name Name of the Team, this field is required when creating a Team with ANONYMOUS_TEAM set to \"false\"
     * @return $this
     */
    public function setTeamName($team_name)
    {
        $this->container['team_name'] = $team_name;

        return $this;
    }

    /**
     * Gets anonymous_team
     * @return bool
     */
    public function getAnonymousTeam()
    {
        return $this->container['anonymous_team'];
    }

    /**
     * Sets anonymous_team
     * @param bool $anonymous_team True, if this Team should not appear in the web UI
     * @return $this
     */
    public function setAnonymousTeam($anonymous_team)
    {
        $this->container['anonymous_team'] = $anonymous_team;

        return $this;
    }

    /**
     * Gets date_created_utc
     * @return \DateTime
     */
    public function getDateCreatedUtc()
    {
        return $this->container['date_created_utc'];
    }

    /**
     * Sets date_created_utc
     * @param \DateTime $date_created_utc Date and time Team record created, as Coorindated Universal Time
     * @return $this
     */
    public function setDateCreatedUtc($date_created_utc)
    {
        $this->container['date_created_utc'] = $date_created_utc;

        return $this;
    }

    /**
     * Gets date_updated_utc
     * @return \DateTime
     */
    public function getDateUpdatedUtc()
    {
        return $this->container['date_updated_utc'];
    }

    /**
     * Sets date_updated_utc
     * @param \DateTime $date_updated_utc Date and time Team record updated, as Coordinated Universal Time
     * @return $this
     */
    public function setDateUpdatedUtc($date_updated_utc)
    {
        $this->container['date_updated_utc'] = $date_updated_utc;

        return $this;
    }

    /**
     * Gets teammembers
     * @return \Swagger\Client\Model\APITeamMember[]
     */
    public function getTeammembers()
    {
        return $this->container['teammembers'];
    }

    /**
     * Sets teammembers
     * @param \Swagger\Client\Model\APITeamMember[] $teammembers Set of Team Members attached to the Team
     * @return $this
     */
    public function setTeammembers($teammembers)
    {
        $this->container['teammembers'] = $teammembers;

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


