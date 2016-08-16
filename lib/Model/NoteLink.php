<?php
/**
 * NoteLink
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
 * NoteLink Class Doc Comment
 *
 * @category    Class */
 // @description Information about a Link between a Note and a Contact, Organisation, Opportunity, or Project:  One linked object ID should be included.
/** 
 * @package     Swagger\Client
 * @author      http://github.com/swagger-api/swagger-codegen
 * @license     http://www.apache.org/licenses/LICENSE-2.0 Apache Licene v2
 * @link        https://github.com/swagger-api/swagger-codegen
 */
class NoteLink implements ArrayAccess
{
    /**
      * The original name of the model.
      * @var string
      */
    protected static $swaggerModelName = 'NoteLink';

    /**
      * Array of property to type mappings. Used for (de)serialization
      * @var string[]
      */
    protected static $swaggerTypes = array(
        'note_link_id' => 'int',
        'note_id' => 'int',
        'contact_id' => 'int',
        'organisation_id' => 'int',
        'opportunity_id' => 'int',
        'project_id' => 'int',
        'lead_id' => 'int'
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
        'note_link_id' => 'NOTE_LINK_ID',
        'note_id' => 'NOTE_ID',
        'contact_id' => 'CONTACT_ID',
        'organisation_id' => 'ORGANISATION_ID',
        'opportunity_id' => 'OPPORTUNITY_ID',
        'project_id' => 'PROJECT_ID',
        'lead_id' => 'LEAD_ID'
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
        'note_link_id' => 'setNoteLinkId',
        'note_id' => 'setNoteId',
        'contact_id' => 'setContactId',
        'organisation_id' => 'setOrganisationId',
        'opportunity_id' => 'setOpportunityId',
        'project_id' => 'setProjectId',
        'lead_id' => 'setLeadId'
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
        'note_link_id' => 'getNoteLinkId',
        'note_id' => 'getNoteId',
        'contact_id' => 'getContactId',
        'organisation_id' => 'getOrganisationId',
        'opportunity_id' => 'getOpportunityId',
        'project_id' => 'getProjectId',
        'lead_id' => 'getLeadId'
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
        $this->container['note_link_id'] = isset($data['note_link_id']) ? $data['note_link_id'] : null;
        $this->container['note_id'] = isset($data['note_id']) ? $data['note_id'] : null;
        $this->container['contact_id'] = isset($data['contact_id']) ? $data['contact_id'] : null;
        $this->container['organisation_id'] = isset($data['organisation_id']) ? $data['organisation_id'] : null;
        $this->container['opportunity_id'] = isset($data['opportunity_id']) ? $data['opportunity_id'] : null;
        $this->container['project_id'] = isset($data['project_id']) ? $data['project_id'] : null;
        $this->container['lead_id'] = isset($data['lead_id']) ? $data['lead_id'] : null;
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
     * Gets note_link_id
     * @return int
     */
    public function getNoteLinkId()
    {
        return $this->container['note_link_id'];
    }

    /**
     * Sets note_link_id
     * @param int $note_link_id Unique ID for the Note Link record
     * @return $this
     */
    public function setNoteLinkId($note_link_id)
    {
        $this->container['note_link_id'] = $note_link_id;

        return $this;
    }

    /**
     * Gets note_id
     * @return int
     */
    public function getNoteId()
    {
        return $this->container['note_id'];
    }

    /**
     * Sets note_id
     * @param int $note_id Unique ID of the Note record being linked
     * @return $this
     */
    public function setNoteId($note_id)
    {
        $this->container['note_id'] = $note_id;

        return $this;
    }

    /**
     * Gets contact_id
     * @return int
     */
    public function getContactId()
    {
        return $this->container['contact_id'];
    }

    /**
     * Sets contact_id
     * @param int $contact_id Unique ID for a Contact linked to the Note
     * @return $this
     */
    public function setContactId($contact_id)
    {
        $this->container['contact_id'] = $contact_id;

        return $this;
    }

    /**
     * Gets organisation_id
     * @return int
     */
    public function getOrganisationId()
    {
        return $this->container['organisation_id'];
    }

    /**
     * Sets organisation_id
     * @param int $organisation_id Unique ID for an Organisation linked to the Note
     * @return $this
     */
    public function setOrganisationId($organisation_id)
    {
        $this->container['organisation_id'] = $organisation_id;

        return $this;
    }

    /**
     * Gets opportunity_id
     * @return int
     */
    public function getOpportunityId()
    {
        return $this->container['opportunity_id'];
    }

    /**
     * Sets opportunity_id
     * @param int $opportunity_id Unique ID for an Opportunity linked to the Note
     * @return $this
     */
    public function setOpportunityId($opportunity_id)
    {
        $this->container['opportunity_id'] = $opportunity_id;

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
     * @param int $project_id Unique ID for a Project linked to the Note
     * @return $this
     */
    public function setProjectId($project_id)
    {
        $this->container['project_id'] = $project_id;

        return $this;
    }

    /**
     * Gets lead_id
     * @return int
     */
    public function getLeadId()
    {
        return $this->container['lead_id'];
    }

    /**
     * Sets lead_id
     * @param int $lead_id Unique ID for a Lead linked to the Note
     * @return $this
     */
    public function setLeadId($lead_id)
    {
        $this->container['lead_id'] = $lead_id;

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

