<?php
/**
 * PipelineStage
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
 * PipelineStage Class Doc Comment
 *
 * @category    Class */
 // @description APIPipelineStage
/** 
 * @package     Swagger\Client
 * @author      http://github.com/swagger-api/swagger-codegen
 * @license     http://www.apache.org/licenses/LICENSE-2.0 Apache Licene v2
 * @link        https://github.com/swagger-api/swagger-codegen
 */
class PipelineStage implements ArrayAccess
{
    /**
      * The original name of the model.
      * @var string
      */
    protected static $swaggerModelName = 'PipelineStage';

    /**
      * Array of property to type mappings. Used for (de)serialization
      * @var string[]
      */
    protected static $swaggerTypes = array(
        'stage_id' => 'int',
        'pipeline_id' => 'int',
        'stage_name' => 'string',
        'stage_order' => 'int',
        'activityset_id' => 'int',
        'owner_user_id' => 'int'
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
        'stage_id' => 'STAGE_ID',
        'pipeline_id' => 'PIPELINE_ID',
        'stage_name' => 'STAGE_NAME',
        'stage_order' => 'STAGE_ORDER',
        'activityset_id' => 'ACTIVITYSET_ID',
        'owner_user_id' => 'OWNER_USER_ID'
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
        'stage_id' => 'setStageId',
        'pipeline_id' => 'setPipelineId',
        'stage_name' => 'setStageName',
        'stage_order' => 'setStageOrder',
        'activityset_id' => 'setActivitysetId',
        'owner_user_id' => 'setOwnerUserId'
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
        'stage_id' => 'getStageId',
        'pipeline_id' => 'getPipelineId',
        'stage_name' => 'getStageName',
        'stage_order' => 'getStageOrder',
        'activityset_id' => 'getActivitysetId',
        'owner_user_id' => 'getOwnerUserId'
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
        $this->container['stage_id'] = isset($data['stage_id']) ? $data['stage_id'] : null;
        $this->container['pipeline_id'] = isset($data['pipeline_id']) ? $data['pipeline_id'] : null;
        $this->container['stage_name'] = isset($data['stage_name']) ? $data['stage_name'] : null;
        $this->container['stage_order'] = isset($data['stage_order']) ? $data['stage_order'] : null;
        $this->container['activityset_id'] = isset($data['activityset_id']) ? $data['activityset_id'] : null;
        $this->container['owner_user_id'] = isset($data['owner_user_id']) ? $data['owner_user_id'] : null;
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
     * Gets stage_id
     * @return int
     */
    public function getStageId()
    {
        return $this->container['stage_id'];
    }

    /**
     * Sets stage_id
     * @param int $stage_id Unique ID for the Stage record.
     * @return $this
     */
    public function setStageId($stage_id)
    {
        $this->container['stage_id'] = $stage_id;

        return $this;
    }

    /**
     * Gets pipeline_id
     * @return int
     */
    public function getPipelineId()
    {
        return $this->container['pipeline_id'];
    }

    /**
     * Sets pipeline_id
     * @param int $pipeline_id Unique ID for the Pipeline the Stage is participates in.
     * @return $this
     */
    public function setPipelineId($pipeline_id)
    {
        $this->container['pipeline_id'] = $pipeline_id;

        return $this;
    }

    /**
     * Gets stage_name
     * @return string
     */
    public function getStageName()
    {
        return $this->container['stage_name'];
    }

    /**
     * Sets stage_name
     * @param string $stage_name Name of the Stage.
     * @return $this
     */
    public function setStageName($stage_name)
    {
        $this->container['stage_name'] = $stage_name;

        return $this;
    }

    /**
     * Gets stage_order
     * @return int
     */
    public function getStageOrder()
    {
        return $this->container['stage_order'];
    }

    /**
     * Sets stage_order
     * @param int $stage_order Order of the Stage in the list of Stages for the Pipeline.
     * @return $this
     */
    public function setStageOrder($stage_order)
    {
        $this->container['stage_order'] = $stage_order;

        return $this;
    }

    /**
     * Gets activityset_id
     * @return int
     */
    public function getActivitysetId()
    {
        return $this->container['activityset_id'];
    }

    /**
     * Sets activityset_id
     * @param int $activityset_id Optional ID of the activity set associated with the pipeline stage.
     * @return $this
     */
    public function setActivitysetId($activityset_id)
    {
        $this->container['activityset_id'] = $activityset_id;

        return $this;
    }

    /**
     * Gets owner_user_id
     * @return int
     */
    public function getOwnerUserId()
    {
        return $this->container['owner_user_id'];
    }

    /**
     * Sets owner_user_id
     * @param int $owner_user_id User ID of the Pipeline Stage record owner.
     * @return $this
     */
    public function setOwnerUserId($owner_user_id)
    {
        $this->container['owner_user_id'] = $owner_user_id;

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


