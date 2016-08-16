<?php
/**
 * APIMilestone
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
 * APIMilestone Class Doc Comment
 *
 * @category    Class */
 // @description Project milestone API object.
/** 
 * @package     Swagger\Client
 * @author      http://github.com/swagger-api/swagger-codegen
 * @license     http://www.apache.org/licenses/LICENSE-2.0 Apache Licene v2
 * @link        https://github.com/swagger-api/swagger-codegen
 */
class APIMilestone implements ArrayAccess
{
    /**
      * The original name of the model.
      * @var string
      */
    protected static $swaggerModelName = 'APIMilestone';

    /**
      * Array of property to type mappings. Used for (de)serialization
      * @var string[]
      */
    protected static $swaggerTypes = array(
        'milestone_id' => 'int',
        'project_id' => 'int',
        'title' => 'string',
        'due_date' => '\DateTime',
        'completed' => 'bool',
        'completed_date_utc' => '\DateTime',
        'responsible_user_id' => 'int',
        'date_created_utc' => '\DateTime',
        'date_updated_utc' => '\DateTime'
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
        'milestone_id' => 'MILESTONE_ID',
        'project_id' => 'PROJECT_ID',
        'title' => 'TITLE',
        'due_date' => 'DUE_DATE',
        'completed' => 'COMPLETED',
        'completed_date_utc' => 'COMPLETED_DATE_UTC',
        'responsible_user_id' => 'RESPONSIBLE_USER_ID',
        'date_created_utc' => 'DATE_CREATED_UTC',
        'date_updated_utc' => 'DATE_UPDATED_UTC'
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
        'milestone_id' => 'setMilestoneId',
        'project_id' => 'setProjectId',
        'title' => 'setTitle',
        'due_date' => 'setDueDate',
        'completed' => 'setCompleted',
        'completed_date_utc' => 'setCompletedDateUtc',
        'responsible_user_id' => 'setResponsibleUserId',
        'date_created_utc' => 'setDateCreatedUtc',
        'date_updated_utc' => 'setDateUpdatedUtc'
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
        'milestone_id' => 'getMilestoneId',
        'project_id' => 'getProjectId',
        'title' => 'getTitle',
        'due_date' => 'getDueDate',
        'completed' => 'getCompleted',
        'completed_date_utc' => 'getCompletedDateUtc',
        'responsible_user_id' => 'getResponsibleUserId',
        'date_created_utc' => 'getDateCreatedUtc',
        'date_updated_utc' => 'getDateUpdatedUtc'
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
        $this->container['milestone_id'] = isset($data['milestone_id']) ? $data['milestone_id'] : null;
        $this->container['project_id'] = isset($data['project_id']) ? $data['project_id'] : null;
        $this->container['title'] = isset($data['title']) ? $data['title'] : null;
        $this->container['due_date'] = isset($data['due_date']) ? $data['due_date'] : null;
        $this->container['completed'] = isset($data['completed']) ? $data['completed'] : null;
        $this->container['completed_date_utc'] = isset($data['completed_date_utc']) ? $data['completed_date_utc'] : null;
        $this->container['responsible_user_id'] = isset($data['responsible_user_id']) ? $data['responsible_user_id'] : null;
        $this->container['date_created_utc'] = isset($data['date_created_utc']) ? $data['date_created_utc'] : null;
        $this->container['date_updated_utc'] = isset($data['date_updated_utc']) ? $data['date_updated_utc'] : null;
    }

    /**
     * show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalid_properties = array();
        if (!is_null($this->container['title']) && (strlen($this->container['title']) > 255)) {
            $invalid_properties[] = "invalid value for 'title', the character length must be smaller than or equal to 255.";
        }

        if (!is_null($this->container['title']) && (strlen($this->container['title']) < 0)) {
            $invalid_properties[] = "invalid value for 'title', the character length must be bigger than or equal to 0.";
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
        if (strlen($this->container['title']) > 255) {
            return false;
        }
        if (strlen($this->container['title']) < 0) {
            return false;
        }
        return true;
    }


    /**
     * Gets milestone_id
     * @return int
     */
    public function getMilestoneId()
    {
        return $this->container['milestone_id'];
    }

    /**
     * Sets milestone_id
     * @param int $milestone_id Unique ID for the Milestone record.
     * @return $this
     */
    public function setMilestoneId($milestone_id)
    {
        $this->container['milestone_id'] = $milestone_id;

        return $this;
    }

    /**
     * Gets project_id
     * @return int
     */
    public function getProjectId()
    {
        return $this->container['project_id'];
    }

    /**
     * Sets project_id
     * @param int $project_id Unique ID for the Project record the milestone is assigned to.
     * @return $this
     */
    public function setProjectId($project_id)
    {
        $this->container['project_id'] = $project_id;

        return $this;
    }

    /**
     * Gets title
     * @return string
     */
    public function getTitle()
    {
        return $this->container['title'];
    }

    /**
     * Sets title
     * @param string $title Title of the milestone.
     * @return $this
     */
    public function setTitle($title)
    {
        if (strlen($title) > 255) {
            throw new \InvalidArgumentException('invalid length for $title when calling APIMilestone., must be smaller than or equal to 255.');
        }
        if (strlen($title) < 0) {
            throw new \InvalidArgumentException('invalid length for $title when calling APIMilestone., must be bigger than or equal to 0.');
        }
        $this->container['title'] = $title;

        return $this;
    }

    /**
     * Gets due_date
     * @return \DateTime
     */
    public function getDueDate()
    {
        return $this->container['due_date'];
    }

    /**
     * Sets due_date
     * @param \DateTime $due_date Date when milestone is due.
     * @return $this
     */
    public function setDueDate($due_date)
    {
        $this->container['due_date'] = $due_date;

        return $this;
    }

    /**
     * Gets completed
     * @return bool
     */
    public function getCompleted()
    {
        return $this->container['completed'];
    }

    /**
     * Sets completed
     * @param bool $completed True if milestone is completed.
     * @return $this
     */
    public function setCompleted($completed)
    {
        $this->container['completed'] = $completed;

        return $this;
    }

    /**
     * Gets completed_date_utc
     * @return \DateTime
     */
    public function getCompletedDateUtc()
    {
        return $this->container['completed_date_utc'];
    }

    /**
     * Sets completed_date_utc
     * @param \DateTime $completed_date_utc Date and time when the milestone was completed (Coordinated Universal Time).
     * @return $this
     */
    public function setCompletedDateUtc($completed_date_utc)
    {
        $this->container['completed_date_utc'] = $completed_date_utc;

        return $this;
    }

    /**
     * Gets responsible_user_id
     * @return int
     */
    public function getResponsibleUserId()
    {
        return $this->container['responsible_user_id'];
    }

    /**
     * Sets responsible_user_id
     * @param int $responsible_user_id ID of the user that is responsible for the milestone.
     * @return $this
     */
    public function setResponsibleUserId($responsible_user_id)
    {
        $this->container['responsible_user_id'] = $responsible_user_id;

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
     * @param \DateTime $date_created_utc Date and time the Milestone record was created, as Coordinated Universal Time
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
     * @param \DateTime $date_updated_utc Date and time the Milestone record was updated, as Coordinated Universal Time
     * @return $this
     */
    public function setDateUpdatedUtc($date_updated_utc)
    {
        $this->container['date_updated_utc'] = $date_updated_utc;

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


