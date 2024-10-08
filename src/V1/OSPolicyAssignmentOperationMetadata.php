<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/osconfig/v1/os_policy_assignments.proto

namespace Google\Cloud\OsConfig\V1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * OS policy assignment operation metadata provided by OS policy assignment API
 * methods that return long running operations.
 *
 * Generated from protobuf message <code>google.cloud.osconfig.v1.OSPolicyAssignmentOperationMetadata</code>
 */
class OSPolicyAssignmentOperationMetadata extends \Google\Protobuf\Internal\Message
{
    /**
     * Reference to the `OSPolicyAssignment` API resource.
     * Format:
     * `projects/{project_number}/locations/{location}/osPolicyAssignments/{os_policy_assignment_id&#64;revision_id}`
     *
     * Generated from protobuf field <code>string os_policy_assignment = 1 [(.google.api.resource_reference) = {</code>
     */
    protected $os_policy_assignment = '';
    /**
     * The OS policy assignment API method.
     *
     * Generated from protobuf field <code>.google.cloud.osconfig.v1.OSPolicyAssignmentOperationMetadata.APIMethod api_method = 2;</code>
     */
    protected $api_method = 0;
    /**
     * State of the rollout
     *
     * Generated from protobuf field <code>.google.cloud.osconfig.v1.OSPolicyAssignmentOperationMetadata.RolloutState rollout_state = 3;</code>
     */
    protected $rollout_state = 0;
    /**
     * Rollout start time
     *
     * Generated from protobuf field <code>.google.protobuf.Timestamp rollout_start_time = 4;</code>
     */
    protected $rollout_start_time = null;
    /**
     * Rollout update time
     *
     * Generated from protobuf field <code>.google.protobuf.Timestamp rollout_update_time = 5;</code>
     */
    protected $rollout_update_time = null;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $os_policy_assignment
     *           Reference to the `OSPolicyAssignment` API resource.
     *           Format:
     *           `projects/{project_number}/locations/{location}/osPolicyAssignments/{os_policy_assignment_id&#64;revision_id}`
     *     @type int $api_method
     *           The OS policy assignment API method.
     *     @type int $rollout_state
     *           State of the rollout
     *     @type \Google\Protobuf\Timestamp $rollout_start_time
     *           Rollout start time
     *     @type \Google\Protobuf\Timestamp $rollout_update_time
     *           Rollout update time
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Cloud\Osconfig\V1\OsPolicyAssignments::initOnce();
        parent::__construct($data);
    }

    /**
     * Reference to the `OSPolicyAssignment` API resource.
     * Format:
     * `projects/{project_number}/locations/{location}/osPolicyAssignments/{os_policy_assignment_id&#64;revision_id}`
     *
     * Generated from protobuf field <code>string os_policy_assignment = 1 [(.google.api.resource_reference) = {</code>
     * @return string
     */
    public function getOsPolicyAssignment()
    {
        return $this->os_policy_assignment;
    }

    /**
     * Reference to the `OSPolicyAssignment` API resource.
     * Format:
     * `projects/{project_number}/locations/{location}/osPolicyAssignments/{os_policy_assignment_id&#64;revision_id}`
     *
     * Generated from protobuf field <code>string os_policy_assignment = 1 [(.google.api.resource_reference) = {</code>
     * @param string $var
     * @return $this
     */
    public function setOsPolicyAssignment($var)
    {
        GPBUtil::checkString($var, True);
        $this->os_policy_assignment = $var;

        return $this;
    }

    /**
     * The OS policy assignment API method.
     *
     * Generated from protobuf field <code>.google.cloud.osconfig.v1.OSPolicyAssignmentOperationMetadata.APIMethod api_method = 2;</code>
     * @return int
     */
    public function getApiMethod()
    {
        return $this->api_method;
    }

    /**
     * The OS policy assignment API method.
     *
     * Generated from protobuf field <code>.google.cloud.osconfig.v1.OSPolicyAssignmentOperationMetadata.APIMethod api_method = 2;</code>
     * @param int $var
     * @return $this
     */
    public function setApiMethod($var)
    {
        GPBUtil::checkEnum($var, \Google\Cloud\OsConfig\V1\OSPolicyAssignmentOperationMetadata\APIMethod::class);
        $this->api_method = $var;

        return $this;
    }

    /**
     * State of the rollout
     *
     * Generated from protobuf field <code>.google.cloud.osconfig.v1.OSPolicyAssignmentOperationMetadata.RolloutState rollout_state = 3;</code>
     * @return int
     */
    public function getRolloutState()
    {
        return $this->rollout_state;
    }

    /**
     * State of the rollout
     *
     * Generated from protobuf field <code>.google.cloud.osconfig.v1.OSPolicyAssignmentOperationMetadata.RolloutState rollout_state = 3;</code>
     * @param int $var
     * @return $this
     */
    public function setRolloutState($var)
    {
        GPBUtil::checkEnum($var, \Google\Cloud\OsConfig\V1\OSPolicyAssignmentOperationMetadata\RolloutState::class);
        $this->rollout_state = $var;

        return $this;
    }

    /**
     * Rollout start time
     *
     * Generated from protobuf field <code>.google.protobuf.Timestamp rollout_start_time = 4;</code>
     * @return \Google\Protobuf\Timestamp|null
     */
    public function getRolloutStartTime()
    {
        return $this->rollout_start_time;
    }

    public function hasRolloutStartTime()
    {
        return isset($this->rollout_start_time);
    }

    public function clearRolloutStartTime()
    {
        unset($this->rollout_start_time);
    }

    /**
     * Rollout start time
     *
     * Generated from protobuf field <code>.google.protobuf.Timestamp rollout_start_time = 4;</code>
     * @param \Google\Protobuf\Timestamp $var
     * @return $this
     */
    public function setRolloutStartTime($var)
    {
        GPBUtil::checkMessage($var, \Google\Protobuf\Timestamp::class);
        $this->rollout_start_time = $var;

        return $this;
    }

    /**
     * Rollout update time
     *
     * Generated from protobuf field <code>.google.protobuf.Timestamp rollout_update_time = 5;</code>
     * @return \Google\Protobuf\Timestamp|null
     */
    public function getRolloutUpdateTime()
    {
        return $this->rollout_update_time;
    }

    public function hasRolloutUpdateTime()
    {
        return isset($this->rollout_update_time);
    }

    public function clearRolloutUpdateTime()
    {
        unset($this->rollout_update_time);
    }

    /**
     * Rollout update time
     *
     * Generated from protobuf field <code>.google.protobuf.Timestamp rollout_update_time = 5;</code>
     * @param \Google\Protobuf\Timestamp $var
     * @return $this
     */
    public function setRolloutUpdateTime($var)
    {
        GPBUtil::checkMessage($var, \Google\Protobuf\Timestamp::class);
        $this->rollout_update_time = $var;

        return $this;
    }

}

