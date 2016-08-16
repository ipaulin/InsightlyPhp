<?php
/**
 * Task
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
 * Task Class Doc Comment
 *
 * @category    Class */
 // @description APITask
/** 
 * @package     Swagger\Client
 * @author      http://github.com/swagger-api/swagger-codegen
 * @license     http://www.apache.org/licenses/LICENSE-2.0 Apache Licene v2
 * @link        https://github.com/swagger-api/swagger-codegen
 */
class Task implements ArrayAccess
{
    /**
      * The original name of the model.
      * @var string
      */
    protected static $swaggerModelName = 'Task';

    /**
      * Array of property to type mappings. Used for (de)serialization
      * @var string[]
      */
    protected static $swaggerTypes = array(
        'task_id' => 'int',
        'title' => 'string',
        'category_id' => 'int',
        'due_date' => '\DateTime',
        'completed_date_utc' => '\DateTime',
        'publicly_visible' => 'bool',
        'completed' => 'bool',
        'project_id' => 'int',
        'opportunity_id' => 'int',
        'milestone_id' => 'int',
        'pipeline_id' => 'int',
        'stage_id' => 'int',
        'details' => 'string',
        'status' => 'string',
        'priority' => 'int',
        'percent_complete' => 'int',
        'start_date' => '\DateTime',
        'assigned_by_user_id' => 'int',
        'parent_task_id' => 'int',
        'owner_visible' => 'bool',
        'responsible_user_id' => 'int',
        'assigned_team_id' => 'int',
        'assigned_date_utc' => '\DateTime',
        'owner_user_id' => 'int',
        'date_created_utc' => '\DateTime',
        'date_updated_utc' => '\DateTime',
        'reminder_date_utc' => '\DateTime',
        'reminder_sent' => 'bool',
        'tasklinks' => '\Swagger\Client\Model\APITaskLink[]'
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
        'task_id' => 'TASK_ID',
        'title' => 'TITLE',
        'category_id' => 'CATEGORY_ID',
        'due_date' => 'DUE_DATE',
        'completed_date_utc' => 'COMPLETED_DATE_UTC',
        'publicly_visible' => 'PUBLICLY_VISIBLE',
        'completed' => 'COMPLETED',
        'project_id' => 'PROJECT_ID',
        'opportunity_id' => 'OPPORTUNITY_ID',
        'milestone_id' => 'MILESTONE_ID',
        'pipeline_id' => 'PIPELINE_ID',
        'stage_id' => 'STAGE_ID',
        'details' => 'DETAILS',
        'status' => 'STATUS',
        'priority' => 'PRIORITY',
        'percent_complete' => 'PERCENT_COMPLETE',
        'start_date' => 'START_DATE',
        'assigned_by_user_id' => 'ASSIGNED_BY_USER_ID',
        'parent_task_id' => 'PARENT_TASK_ID',
        'owner_visible' => 'OWNER_VISIBLE',
        'responsible_user_id' => 'RESPONSIBLE_USER_ID',
        'assigned_team_id' => 'ASSIGNED_TEAM_ID',
        'assigned_date_utc' => 'ASSIGNED_DATE_UTC',
        'owner_user_id' => 'OWNER_USER_ID',
        'date_created_utc' => 'DATE_CREATED_UTC',
        'date_updated_utc' => 'DATE_UPDATED_UTC',
        'reminder_date_utc' => 'REMINDER_DATE_UTC',
        'reminder_sent' => 'REMINDER_SENT',
        'tasklinks' => 'TASKLINKS'
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
        'task_id' => 'setTaskId',
        'title' => 'setTitle',
        'category_id' => 'setCategoryId',
        'due_date' => 'setDueDate',
        'completed_date_utc' => 'setCompletedDateUtc',
        'publicly_visible' => 'setPubliclyVisible',
        'completed' => 'setCompleted',
        'project_id' => 'setProjectId',
        'opportunity_id' => 'setOpportunityId',
        'milestone_id' => 'setMilestoneId',
        'pipeline_id' => 'setPipelineId',
        'stage_id' => 'setStageId',
        'details' => 'setDetails',
        'status' => 'setStatus',
        'priority' => 'setPriority',
        'percent_complete' => 'setPercentComplete',
        'start_date' => 'setStartDate',
        'assigned_by_user_id' => 'setAssignedByUserId',
        'parent_task_id' => 'setParentTaskId',
        'owner_visible' => 'setOwnerVisible',
        'responsible_user_id' => 'setResponsibleUserId',
        'assigned_team_id' => 'setAssignedTeamId',
        'assigned_date_utc' => 'setAssignedDateUtc',
        'owner_user_id' => 'setOwnerUserId',
        'date_created_utc' => 'setDateCreatedUtc',
        'date_updated_utc' => 'setDateUpdatedUtc',
        'reminder_date_utc' => 'setReminderDateUtc',
        'reminder_sent' => 'setReminderSent',
        'tasklinks' => 'setTasklinks'
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
        'task_id' => 'getTaskId',
        'title' => 'getTitle',
        'category_id' => 'getCategoryId',
        'due_date' => 'getDueDate',
        'completed_date_utc' => 'getCompletedDateUtc',
        'publicly_visible' => 'getPubliclyVisible',
        'completed' => 'getCompleted',
        'project_id' => 'getProjectId',
        'opportunity_id' => 'getOpportunityId',
        'milestone_id' => 'getMilestoneId',
        'pipeline_id' => 'getPipelineId',
        'stage_id' => 'getStageId',
        'details' => 'getDetails',
        'status' => 'getStatus',
        'priority' => 'getPriority',
        'percent_complete' => 'getPercentComplete',
        'start_date' => 'getStartDate',
        'assigned_by_user_id' => 'getAssignedByUserId',
        'parent_task_id' => 'getParentTaskId',
        'owner_visible' => 'getOwnerVisible',
        'responsible_user_id' => 'getResponsibleUserId',
        'assigned_team_id' => 'getAssignedTeamId',
        'assigned_date_utc' => 'getAssignedDateUtc',
        'owner_user_id' => 'getOwnerUserId',
        'date_created_utc' => 'getDateCreatedUtc',
        'date_updated_utc' => 'getDateUpdatedUtc',
        'reminder_date_utc' => 'getReminderDateUtc',
        'reminder_sent' => 'getReminderSent',
        'tasklinks' => 'getTasklinks'
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
        $this->container['task_id'] = isset($data['task_id']) ? $data['task_id'] : null;
        $this->container['title'] = isset($data['title']) ? $data['title'] : null;
        $this->container['category_id'] = isset($data['category_id']) ? $data['category_id'] : null;
        $this->container['due_date'] = isset($data['due_date']) ? $data['due_date'] : null;
        $this->container['completed_date_utc'] = isset($data['completed_date_utc']) ? $data['completed_date_utc'] : null;
        $this->container['publicly_visible'] = isset($data['publicly_visible']) ? $data['publicly_visible'] : null;
        $this->container['completed'] = isset($data['completed']) ? $data['completed'] : null;
        $this->container['project_id'] = isset($data['project_id']) ? $data['project_id'] : null;
        $this->container['opportunity_id'] = isset($data['opportunity_id']) ? $data['opportunity_id'] : null;
        $this->container['milestone_id'] = isset($data['milestone_id']) ? $data['milestone_id'] : null;
        $this->container['pipeline_id'] = isset($data['pipeline_id']) ? $data['pipeline_id'] : null;
        $this->container['stage_id'] = isset($data['stage_id']) ? $data['stage_id'] : null;
        $this->container['details'] = isset($data['details']) ? $data['details'] : null;
        $this->container['status'] = isset($data['status']) ? $data['status'] : null;
        $this->container['priority'] = isset($data['priority']) ? $data['priority'] : null;
        $this->container['percent_complete'] = isset($data['percent_complete']) ? $data['percent_complete'] : null;
        $this->container['start_date'] = isset($data['start_date']) ? $data['start_date'] : null;
        $this->container['assigned_by_user_id'] = isset($data['assigned_by_user_id']) ? $data['assigned_by_user_id'] : null;
        $this->container['parent_task_id'] = isset($data['parent_task_id']) ? $data['parent_task_id'] : null;
        $this->container['owner_visible'] = isset($data['owner_visible']) ? $data['owner_visible'] : null;
        $this->container['responsible_user_id'] = isset($data['responsible_user_id']) ? $data['responsible_user_id'] : null;
        $this->container['assigned_team_id'] = isset($data['assigned_team_id']) ? $data['assigned_team_id'] : null;
        $this->container['assigned_date_utc'] = isset($data['assigned_date_utc']) ? $data['assigned_date_utc'] : null;
        $this->container['owner_user_id'] = isset($data['owner_user_id']) ? $data['owner_user_id'] : null;
        $this->container['date_created_utc'] = isset($data['date_created_utc']) ? $data['date_created_utc'] : null;
        $this->container['date_updated_utc'] = isset($data['date_updated_utc']) ? $data['date_updated_utc'] : null;
        $this->container['reminder_date_utc'] = isset($data['reminder_date_utc']) ? $data['reminder_date_utc'] : null;
        $this->container['reminder_sent'] = isset($data['reminder_sent']) ? $data['reminder_sent'] : null;
        $this->container['tasklinks'] = isset($data['tasklinks']) ? $data['tasklinks'] : null;
    }

    /**
     * show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalid_properties = array();
        if ($this->container['title'] === null) {
            $invalid_properties[] = "'title' can't be null";
        }
        if ((strlen($this->container['title']) > 500)) {
            $invalid_properties[] = "invalid value for 'title', the character length must be smaller than or equal to 500.";
        }

        if ((strlen($this->container['title']) < 0)) {
            $invalid_properties[] = "invalid value for 'title', the character length must be bigger than or equal to 0.";
        }

        if ($this->container['publicly_visible'] === null) {
            $invalid_properties[] = "'publicly_visible' can't be null";
        }
        if ($this->container['completed'] === null) {
            $invalid_properties[] = "'completed' can't be null";
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
        if ($this->container['title'] === null) {
            return false;
        }
        if (strlen($this->container['title']) > 500) {
            return false;
        }
        if (strlen($this->container['title']) < 0) {
            return false;
        }
        if ($this->container['publicly_visible'] === null) {
            return false;
        }
        if ($this->container['completed'] === null) {
            return false;
        }
        return true;
    }


    /**
     * Gets task_id
     * @return int
     */
    public function getTaskId()
    {
        return $this->container['task_id'];
    }

    /**
     * Sets task_id
     * @param int $task_id Unique key of the Task record
     * @return $this
     */
    public function setTaskId($task_id)
    {
        $this->container['task_id'] = $task_id;

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
     * @param string $title Title of the Task (required)
     * @return $this
     */
    public function setTitle($title)
    {
        if (strlen($title) > 500) {
            throw new \InvalidArgumentException('invalid length for $title when calling Task., must be smaller than or equal to 500.');
        }
        if (strlen($title) < 0) {
            throw new \InvalidArgumentException('invalid length for $title when calling Task., must be bigger than or equal to 0.');
        }
        $this->container['title'] = $title;

        return $this;
    }

    /**
     * Gets category_id
     * @return int
     */
    public function getCategoryId()
    {
        return $this->container['category_id'];
    }

    /**
     * Sets category_id
     * @param int $category_id The Category ID of the Task, if it has been assigned to one
     * @return $this
     */
    public function setCategoryId($category_id)
    {
        $this->container['category_id'] = $category_id;

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
     * @param \DateTime $due_date Due date of the Task, in YYYY-MM-DD format
     * @return $this
     */
    public function setDueDate($due_date)
    {
        $this->container['due_date'] = $due_date;

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
     * @param \DateTime $completed_date_utc Completed Date of the Task, in YYYY-MM-DD format
     * @return $this
     */
    public function setCompletedDateUtc($completed_date_utc)
    {
        $this->container['completed_date_utc'] = $completed_date_utc;

        return $this;
    }

    /**
     * Gets publicly_visible
     * @return bool
     */
    public function getPubliclyVisible()
    {
        return $this->container['publicly_visible'];
    }

    /**
     * Sets publicly_visible
     * @param bool $publicly_visible True, if Task is visible to others
     * @return $this
     */
    public function setPubliclyVisible($publicly_visible)
    {
        $this->container['publicly_visible'] = $publicly_visible;

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
     * @param bool $completed True, if Task has been completed
     * @return $this
     */
    public function setCompleted($completed)
    {
        $this->container['completed'] = $completed;

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
     * @param int $project_id ID of the project the task is related to, if applicable. Should be a valid PROJECT_ID, if set.
     * @return $this
     */
    public function setProjectId($project_id)
    {
        $this->container['project_id'] = $project_id;

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
     * @param int $opportunity_id ID of the opportunity the task is related to. Can only be set if PROJECT_ID is null.
     * @return $this
     */
    public function setOpportunityId($opportunity_id)
    {
        $this->container['opportunity_id'] = $opportunity_id;

        return $this;
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
     * @param int $milestone_id ID of the project milestone the task is related to. Can only be set to a milestone of a project defined by PROJECT_ID.
     * @return $this
     */
    public function setMilestoneId($milestone_id)
    {
        $this->container['milestone_id'] = $milestone_id;

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
     * @param int $pipeline_id ID of the pipeline the task is related to. Can only be set to a pipeline associated with the related project or opportunity.
     * @return $this
     */
    public function setPipelineId($pipeline_id)
    {
        $this->container['pipeline_id'] = $pipeline_id;

        return $this;
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
     * @param int $stage_id ID of the pipeline stage the task is related to. Can only be set to an existing stage of a pipeline associated with related project or opportunity.
     * @return $this
     */
    public function setStageId($stage_id)
    {
        $this->container['stage_id'] = $stage_id;

        return $this;
    }

    /**
     * Gets details
     * @return string
     */
    public function getDetails()
    {
        return $this->container['details'];
    }

    /**
     * Sets details
     * @param string $details Details of the Task
     * @return $this
     */
    public function setDetails($details)
    {
        $this->container['details'] = $details;

        return $this;
    }

    /**
     * Gets status
     * @return string
     */
    public function getStatus()
    {
        return $this->container['status'];
    }

    /**
     * Sets status
     * @param string $status Status: Completed, Deferred, In Progress, Not Started, or Waiting
     * @return $this
     */
    public function setStatus($status)
    {
        $this->container['status'] = $status;

        return $this;
    }

    /**
     * Gets priority
     * @return int
     */
    public function getPriority()
    {
        return $this->container['priority'];
    }

    /**
     * Sets priority
     * @param int $priority Priority: 1 (Low), 2 (Normal) or 3 (High)
     * @return $this
     */
    public function setPriority($priority)
    {
        $this->container['priority'] = $priority;

        return $this;
    }

    /**
     * Gets percent_complete
     * @return int
     */
    public function getPercentComplete()
    {
        return $this->container['percent_complete'];
    }

    /**
     * Sets percent_complete
     * @param int $percent_complete Percentage completion of the Task, integer value from 0 to 100
     * @return $this
     */
    public function setPercentComplete($percent_complete)
    {
        $this->container['percent_complete'] = $percent_complete;

        return $this;
    }

    /**
     * Gets start_date
     * @return \DateTime
     */
    public function getStartDate()
    {
        return $this->container['start_date'];
    }

    /**
     * Sets start_date
     * @param \DateTime $start_date Start Date of the Task, in YYYY-MM-DD format
     * @return $this
     */
    public function setStartDate($start_date)
    {
        $this->container['start_date'] = $start_date;

        return $this;
    }

    /**
     * Gets assigned_by_user_id
     * @return int
     */
    public function getAssignedByUserId()
    {
        return $this->container['assigned_by_user_id'];
    }

    /**
     * Sets assigned_by_user_id
     * @param int $assigned_by_user_id User ID of the User who assigned the Task to another User
     * @return $this
     */
    public function setAssignedByUserId($assigned_by_user_id)
    {
        $this->container['assigned_by_user_id'] = $assigned_by_user_id;

        return $this;
    }

    /**
     * Gets parent_task_id
     * @return int
     */
    public function getParentTaskId()
    {
        return $this->container['parent_task_id'];
    }

    /**
     * Sets parent_task_id
     * @param int $parent_task_id Parent Task ID
     * @return $this
     */
    public function setParentTaskId($parent_task_id)
    {
        $this->container['parent_task_id'] = $parent_task_id;

        return $this;
    }

    /**
     * Gets owner_visible
     * @return bool
     */
    public function getOwnerVisible()
    {
        return $this->container['owner_visible'];
    }

    /**
     * Sets owner_visible
     * @param bool $owner_visible Used to determine if owner of assigned task wants to be kept notified of the Task
     * @return $this
     */
    public function setOwnerVisible($owner_visible)
    {
        $this->container['owner_visible'] = $owner_visible;

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
     * @param int $responsible_user_id Responsible User ID
     * @return $this
     */
    public function setResponsibleUserId($responsible_user_id)
    {
        $this->container['responsible_user_id'] = $responsible_user_id;

        return $this;
    }

    /**
     * Gets assigned_team_id
     * @return int
     */
    public function getAssignedTeamId()
    {
        return $this->container['assigned_team_id'];
    }

    /**
     * Sets assigned_team_id
     * @param int $assigned_team_id ID of the Team which is responsible for the Task
     * @return $this
     */
    public function setAssignedTeamId($assigned_team_id)
    {
        $this->container['assigned_team_id'] = $assigned_team_id;

        return $this;
    }

    /**
     * Gets assigned_date_utc
     * @return \DateTime
     */
    public function getAssignedDateUtc()
    {
        return $this->container['assigned_date_utc'];
    }

    /**
     * Sets assigned_date_utc
     * @param \DateTime $assigned_date_utc Date when the Task was assigned
     * @return $this
     */
    public function setAssignedDateUtc($assigned_date_utc)
    {
        $this->container['assigned_date_utc'] = $assigned_date_utc;

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
     * @param int $owner_user_id User ID of the Task record owner
     * @return $this
     */
    public function setOwnerUserId($owner_user_id)
    {
        $this->container['owner_user_id'] = $owner_user_id;

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
     * @param \DateTime $date_created_utc Date and time Task record created, as Coordinated Universal Time
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
     * @param \DateTime $date_updated_utc Date and time Task record updated, as Coordinated Universal Time
     * @return $this
     */
    public function setDateUpdatedUtc($date_updated_utc)
    {
        $this->container['date_updated_utc'] = $date_updated_utc;

        return $this;
    }

    /**
     * Gets reminder_date_utc
     * @return \DateTime
     */
    public function getReminderDateUtc()
    {
        return $this->container['reminder_date_utc'];
    }

    /**
     * Sets reminder_date_utc
     * @param \DateTime $reminder_date_utc Reminder date and time of the Task, as Coordinated Universal Time
     * @return $this
     */
    public function setReminderDateUtc($reminder_date_utc)
    {
        $this->container['reminder_date_utc'] = $reminder_date_utc;

        return $this;
    }

    /**
     * Gets reminder_sent
     * @return bool
     */
    public function getReminderSent()
    {
        return $this->container['reminder_sent'];
    }

    /**
     * Sets reminder_sent
     * @param bool $reminder_sent True, if a reminder was sent
     * @return $this
     */
    public function setReminderSent($reminder_sent)
    {
        $this->container['reminder_sent'] = $reminder_sent;

        return $this;
    }

    /**
     * Gets tasklinks
     * @return \Swagger\Client\Model\APITaskLink[]
     */
    public function getTasklinks()
    {
        return $this->container['tasklinks'];
    }

    /**
     * Sets tasklinks
     * @param \Swagger\Client\Model\APITaskLink[] $tasklinks Set of Links attached to the Task
     * @return $this
     */
    public function setTasklinks($tasklinks)
    {
        $this->container['tasklinks'] = $tasklinks;

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


