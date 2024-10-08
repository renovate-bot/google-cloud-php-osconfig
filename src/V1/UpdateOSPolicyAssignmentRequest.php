<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/osconfig/v1/os_policy_assignments.proto

namespace Google\Cloud\OsConfig\V1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * A request message to update an OS policy assignment
 *
 * Generated from protobuf message <code>google.cloud.osconfig.v1.UpdateOSPolicyAssignmentRequest</code>
 */
class UpdateOSPolicyAssignmentRequest extends \Google\Protobuf\Internal\Message
{
    /**
     * Required. The updated OS policy assignment.
     *
     * Generated from protobuf field <code>.google.cloud.osconfig.v1.OSPolicyAssignment os_policy_assignment = 1 [(.google.api.field_behavior) = REQUIRED];</code>
     */
    protected $os_policy_assignment = null;
    /**
     * Optional. Field mask that controls which fields of the assignment should be
     * updated.
     *
     * Generated from protobuf field <code>.google.protobuf.FieldMask update_mask = 2 [(.google.api.field_behavior) = OPTIONAL];</code>
     */
    protected $update_mask = null;

    /**
     * @param \Google\Cloud\OsConfig\V1\OSPolicyAssignment $osPolicyAssignment Required. The updated OS policy assignment.
     * @param \Google\Protobuf\FieldMask                   $updateMask         Optional. Field mask that controls which fields of the assignment should be
     *                                                                         updated.
     *
     * @return \Google\Cloud\OsConfig\V1\UpdateOSPolicyAssignmentRequest
     *
     * @experimental
     */
    public static function build(\Google\Cloud\OsConfig\V1\OSPolicyAssignment $osPolicyAssignment, \Google\Protobuf\FieldMask $updateMask): self
    {
        return (new self())
            ->setOsPolicyAssignment($osPolicyAssignment)
            ->setUpdateMask($updateMask);
    }

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type \Google\Cloud\OsConfig\V1\OSPolicyAssignment $os_policy_assignment
     *           Required. The updated OS policy assignment.
     *     @type \Google\Protobuf\FieldMask $update_mask
     *           Optional. Field mask that controls which fields of the assignment should be
     *           updated.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Cloud\Osconfig\V1\OsPolicyAssignments::initOnce();
        parent::__construct($data);
    }

    /**
     * Required. The updated OS policy assignment.
     *
     * Generated from protobuf field <code>.google.cloud.osconfig.v1.OSPolicyAssignment os_policy_assignment = 1 [(.google.api.field_behavior) = REQUIRED];</code>
     * @return \Google\Cloud\OsConfig\V1\OSPolicyAssignment|null
     */
    public function getOsPolicyAssignment()
    {
        return $this->os_policy_assignment;
    }

    public function hasOsPolicyAssignment()
    {
        return isset($this->os_policy_assignment);
    }

    public function clearOsPolicyAssignment()
    {
        unset($this->os_policy_assignment);
    }

    /**
     * Required. The updated OS policy assignment.
     *
     * Generated from protobuf field <code>.google.cloud.osconfig.v1.OSPolicyAssignment os_policy_assignment = 1 [(.google.api.field_behavior) = REQUIRED];</code>
     * @param \Google\Cloud\OsConfig\V1\OSPolicyAssignment $var
     * @return $this
     */
    public function setOsPolicyAssignment($var)
    {
        GPBUtil::checkMessage($var, \Google\Cloud\OsConfig\V1\OSPolicyAssignment::class);
        $this->os_policy_assignment = $var;

        return $this;
    }

    /**
     * Optional. Field mask that controls which fields of the assignment should be
     * updated.
     *
     * Generated from protobuf field <code>.google.protobuf.FieldMask update_mask = 2 [(.google.api.field_behavior) = OPTIONAL];</code>
     * @return \Google\Protobuf\FieldMask|null
     */
    public function getUpdateMask()
    {
        return $this->update_mask;
    }

    public function hasUpdateMask()
    {
        return isset($this->update_mask);
    }

    public function clearUpdateMask()
    {
        unset($this->update_mask);
    }

    /**
     * Optional. Field mask that controls which fields of the assignment should be
     * updated.
     *
     * Generated from protobuf field <code>.google.protobuf.FieldMask update_mask = 2 [(.google.api.field_behavior) = OPTIONAL];</code>
     * @param \Google\Protobuf\FieldMask $var
     * @return $this
     */
    public function setUpdateMask($var)
    {
        GPBUtil::checkMessage($var, \Google\Protobuf\FieldMask::class);
        $this->update_mask = $var;

        return $this;
    }

}

