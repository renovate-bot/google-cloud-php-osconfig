<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/osconfig/v1/os_policy_assignments.proto

namespace Google\Cloud\OsConfig\V1\OSPolicyAssignment;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Filters to select target VMs for an assignment.
 * If more than one filter criteria is specified below, a VM will be selected
 * if and only if it satisfies all of them.
 *
 * Generated from protobuf message <code>google.cloud.osconfig.v1.OSPolicyAssignment.InstanceFilter</code>
 */
class InstanceFilter extends \Google\Protobuf\Internal\Message
{
    /**
     * Target all VMs in the project. If true, no other criteria is
     * permitted.
     *
     * Generated from protobuf field <code>bool all = 1;</code>
     */
    protected $all = false;
    /**
     * List of label sets used for VM inclusion.
     * If the list has more than one `LabelSet`, the VM is included if any
     * of the label sets are applicable for the VM.
     *
     * Generated from protobuf field <code>repeated .google.cloud.osconfig.v1.OSPolicyAssignment.LabelSet inclusion_labels = 2;</code>
     */
    private $inclusion_labels;
    /**
     * List of label sets used for VM exclusion.
     * If the list has more than one label set, the VM is excluded if any
     * of the label sets are applicable for the VM.
     *
     * Generated from protobuf field <code>repeated .google.cloud.osconfig.v1.OSPolicyAssignment.LabelSet exclusion_labels = 3;</code>
     */
    private $exclusion_labels;
    /**
     * List of inventories to select VMs.
     * A VM is selected if its inventory data matches at least one of the
     * following inventories.
     *
     * Generated from protobuf field <code>repeated .google.cloud.osconfig.v1.OSPolicyAssignment.InstanceFilter.Inventory inventories = 4;</code>
     */
    private $inventories;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type bool $all
     *           Target all VMs in the project. If true, no other criteria is
     *           permitted.
     *     @type array<\Google\Cloud\OsConfig\V1\OSPolicyAssignment\LabelSet>|\Google\Protobuf\Internal\RepeatedField $inclusion_labels
     *           List of label sets used for VM inclusion.
     *           If the list has more than one `LabelSet`, the VM is included if any
     *           of the label sets are applicable for the VM.
     *     @type array<\Google\Cloud\OsConfig\V1\OSPolicyAssignment\LabelSet>|\Google\Protobuf\Internal\RepeatedField $exclusion_labels
     *           List of label sets used for VM exclusion.
     *           If the list has more than one label set, the VM is excluded if any
     *           of the label sets are applicable for the VM.
     *     @type array<\Google\Cloud\OsConfig\V1\OSPolicyAssignment\InstanceFilter\Inventory>|\Google\Protobuf\Internal\RepeatedField $inventories
     *           List of inventories to select VMs.
     *           A VM is selected if its inventory data matches at least one of the
     *           following inventories.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Cloud\Osconfig\V1\OsPolicyAssignments::initOnce();
        parent::__construct($data);
    }

    /**
     * Target all VMs in the project. If true, no other criteria is
     * permitted.
     *
     * Generated from protobuf field <code>bool all = 1;</code>
     * @return bool
     */
    public function getAll()
    {
        return $this->all;
    }

    /**
     * Target all VMs in the project. If true, no other criteria is
     * permitted.
     *
     * Generated from protobuf field <code>bool all = 1;</code>
     * @param bool $var
     * @return $this
     */
    public function setAll($var)
    {
        GPBUtil::checkBool($var);
        $this->all = $var;

        return $this;
    }

    /**
     * List of label sets used for VM inclusion.
     * If the list has more than one `LabelSet`, the VM is included if any
     * of the label sets are applicable for the VM.
     *
     * Generated from protobuf field <code>repeated .google.cloud.osconfig.v1.OSPolicyAssignment.LabelSet inclusion_labels = 2;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getInclusionLabels()
    {
        return $this->inclusion_labels;
    }

    /**
     * List of label sets used for VM inclusion.
     * If the list has more than one `LabelSet`, the VM is included if any
     * of the label sets are applicable for the VM.
     *
     * Generated from protobuf field <code>repeated .google.cloud.osconfig.v1.OSPolicyAssignment.LabelSet inclusion_labels = 2;</code>
     * @param array<\Google\Cloud\OsConfig\V1\OSPolicyAssignment\LabelSet>|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setInclusionLabels($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::MESSAGE, \Google\Cloud\OsConfig\V1\OSPolicyAssignment\LabelSet::class);
        $this->inclusion_labels = $arr;

        return $this;
    }

    /**
     * List of label sets used for VM exclusion.
     * If the list has more than one label set, the VM is excluded if any
     * of the label sets are applicable for the VM.
     *
     * Generated from protobuf field <code>repeated .google.cloud.osconfig.v1.OSPolicyAssignment.LabelSet exclusion_labels = 3;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getExclusionLabels()
    {
        return $this->exclusion_labels;
    }

    /**
     * List of label sets used for VM exclusion.
     * If the list has more than one label set, the VM is excluded if any
     * of the label sets are applicable for the VM.
     *
     * Generated from protobuf field <code>repeated .google.cloud.osconfig.v1.OSPolicyAssignment.LabelSet exclusion_labels = 3;</code>
     * @param array<\Google\Cloud\OsConfig\V1\OSPolicyAssignment\LabelSet>|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setExclusionLabels($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::MESSAGE, \Google\Cloud\OsConfig\V1\OSPolicyAssignment\LabelSet::class);
        $this->exclusion_labels = $arr;

        return $this;
    }

    /**
     * List of inventories to select VMs.
     * A VM is selected if its inventory data matches at least one of the
     * following inventories.
     *
     * Generated from protobuf field <code>repeated .google.cloud.osconfig.v1.OSPolicyAssignment.InstanceFilter.Inventory inventories = 4;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getInventories()
    {
        return $this->inventories;
    }

    /**
     * List of inventories to select VMs.
     * A VM is selected if its inventory data matches at least one of the
     * following inventories.
     *
     * Generated from protobuf field <code>repeated .google.cloud.osconfig.v1.OSPolicyAssignment.InstanceFilter.Inventory inventories = 4;</code>
     * @param array<\Google\Cloud\OsConfig\V1\OSPolicyAssignment\InstanceFilter\Inventory>|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setInventories($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::MESSAGE, \Google\Cloud\OsConfig\V1\OSPolicyAssignment\InstanceFilter\Inventory::class);
        $this->inventories = $arr;

        return $this;
    }

}


