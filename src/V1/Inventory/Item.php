<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/osconfig/v1/inventory.proto

namespace Google\Cloud\OsConfig\V1\Inventory;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * A single piece of inventory on a VM.
 *
 * Generated from protobuf message <code>google.cloud.osconfig.v1.Inventory.Item</code>
 */
class Item extends \Google\Protobuf\Internal\Message
{
    /**
     * Identifier for this item, unique across items for this VM.
     *
     * Generated from protobuf field <code>string id = 1;</code>
     */
    protected $id = '';
    /**
     * The origin of this inventory item.
     *
     * Generated from protobuf field <code>.google.cloud.osconfig.v1.Inventory.Item.OriginType origin_type = 2;</code>
     */
    protected $origin_type = 0;
    /**
     * When this inventory item was first detected.
     *
     * Generated from protobuf field <code>.google.protobuf.Timestamp create_time = 8;</code>
     */
    protected $create_time = null;
    /**
     * When this inventory item was last modified.
     *
     * Generated from protobuf field <code>.google.protobuf.Timestamp update_time = 9;</code>
     */
    protected $update_time = null;
    /**
     * The specific type of inventory, correlating to its specific details.
     *
     * Generated from protobuf field <code>.google.cloud.osconfig.v1.Inventory.Item.Type type = 5;</code>
     */
    protected $type = 0;
    protected $details;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $id
     *           Identifier for this item, unique across items for this VM.
     *     @type int $origin_type
     *           The origin of this inventory item.
     *     @type \Google\Protobuf\Timestamp $create_time
     *           When this inventory item was first detected.
     *     @type \Google\Protobuf\Timestamp $update_time
     *           When this inventory item was last modified.
     *     @type int $type
     *           The specific type of inventory, correlating to its specific details.
     *     @type \Google\Cloud\OsConfig\V1\Inventory\SoftwarePackage $installed_package
     *           Software package present on the VM instance.
     *     @type \Google\Cloud\OsConfig\V1\Inventory\SoftwarePackage $available_package
     *           Software package available to be installed on the VM instance.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Cloud\Osconfig\V1\Inventory::initOnce();
        parent::__construct($data);
    }

    /**
     * Identifier for this item, unique across items for this VM.
     *
     * Generated from protobuf field <code>string id = 1;</code>
     * @return string
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Identifier for this item, unique across items for this VM.
     *
     * Generated from protobuf field <code>string id = 1;</code>
     * @param string $var
     * @return $this
     */
    public function setId($var)
    {
        GPBUtil::checkString($var, True);
        $this->id = $var;

        return $this;
    }

    /**
     * The origin of this inventory item.
     *
     * Generated from protobuf field <code>.google.cloud.osconfig.v1.Inventory.Item.OriginType origin_type = 2;</code>
     * @return int
     */
    public function getOriginType()
    {
        return $this->origin_type;
    }

    /**
     * The origin of this inventory item.
     *
     * Generated from protobuf field <code>.google.cloud.osconfig.v1.Inventory.Item.OriginType origin_type = 2;</code>
     * @param int $var
     * @return $this
     */
    public function setOriginType($var)
    {
        GPBUtil::checkEnum($var, \Google\Cloud\OsConfig\V1\Inventory\Item\OriginType::class);
        $this->origin_type = $var;

        return $this;
    }

    /**
     * When this inventory item was first detected.
     *
     * Generated from protobuf field <code>.google.protobuf.Timestamp create_time = 8;</code>
     * @return \Google\Protobuf\Timestamp|null
     */
    public function getCreateTime()
    {
        return $this->create_time;
    }

    public function hasCreateTime()
    {
        return isset($this->create_time);
    }

    public function clearCreateTime()
    {
        unset($this->create_time);
    }

    /**
     * When this inventory item was first detected.
     *
     * Generated from protobuf field <code>.google.protobuf.Timestamp create_time = 8;</code>
     * @param \Google\Protobuf\Timestamp $var
     * @return $this
     */
    public function setCreateTime($var)
    {
        GPBUtil::checkMessage($var, \Google\Protobuf\Timestamp::class);
        $this->create_time = $var;

        return $this;
    }

    /**
     * When this inventory item was last modified.
     *
     * Generated from protobuf field <code>.google.protobuf.Timestamp update_time = 9;</code>
     * @return \Google\Protobuf\Timestamp|null
     */
    public function getUpdateTime()
    {
        return $this->update_time;
    }

    public function hasUpdateTime()
    {
        return isset($this->update_time);
    }

    public function clearUpdateTime()
    {
        unset($this->update_time);
    }

    /**
     * When this inventory item was last modified.
     *
     * Generated from protobuf field <code>.google.protobuf.Timestamp update_time = 9;</code>
     * @param \Google\Protobuf\Timestamp $var
     * @return $this
     */
    public function setUpdateTime($var)
    {
        GPBUtil::checkMessage($var, \Google\Protobuf\Timestamp::class);
        $this->update_time = $var;

        return $this;
    }

    /**
     * The specific type of inventory, correlating to its specific details.
     *
     * Generated from protobuf field <code>.google.cloud.osconfig.v1.Inventory.Item.Type type = 5;</code>
     * @return int
     */
    public function getType()
    {
        return $this->type;
    }

    /**
     * The specific type of inventory, correlating to its specific details.
     *
     * Generated from protobuf field <code>.google.cloud.osconfig.v1.Inventory.Item.Type type = 5;</code>
     * @param int $var
     * @return $this
     */
    public function setType($var)
    {
        GPBUtil::checkEnum($var, \Google\Cloud\OsConfig\V1\Inventory\Item\Type::class);
        $this->type = $var;

        return $this;
    }

    /**
     * Software package present on the VM instance.
     *
     * Generated from protobuf field <code>.google.cloud.osconfig.v1.Inventory.SoftwarePackage installed_package = 6;</code>
     * @return \Google\Cloud\OsConfig\V1\Inventory\SoftwarePackage|null
     */
    public function getInstalledPackage()
    {
        return $this->readOneof(6);
    }

    public function hasInstalledPackage()
    {
        return $this->hasOneof(6);
    }

    /**
     * Software package present on the VM instance.
     *
     * Generated from protobuf field <code>.google.cloud.osconfig.v1.Inventory.SoftwarePackage installed_package = 6;</code>
     * @param \Google\Cloud\OsConfig\V1\Inventory\SoftwarePackage $var
     * @return $this
     */
    public function setInstalledPackage($var)
    {
        GPBUtil::checkMessage($var, \Google\Cloud\OsConfig\V1\Inventory\SoftwarePackage::class);
        $this->writeOneof(6, $var);

        return $this;
    }

    /**
     * Software package available to be installed on the VM instance.
     *
     * Generated from protobuf field <code>.google.cloud.osconfig.v1.Inventory.SoftwarePackage available_package = 7;</code>
     * @return \Google\Cloud\OsConfig\V1\Inventory\SoftwarePackage|null
     */
    public function getAvailablePackage()
    {
        return $this->readOneof(7);
    }

    public function hasAvailablePackage()
    {
        return $this->hasOneof(7);
    }

    /**
     * Software package available to be installed on the VM instance.
     *
     * Generated from protobuf field <code>.google.cloud.osconfig.v1.Inventory.SoftwarePackage available_package = 7;</code>
     * @param \Google\Cloud\OsConfig\V1\Inventory\SoftwarePackage $var
     * @return $this
     */
    public function setAvailablePackage($var)
    {
        GPBUtil::checkMessage($var, \Google\Cloud\OsConfig\V1\Inventory\SoftwarePackage::class);
        $this->writeOneof(7, $var);

        return $this;
    }

    /**
     * @return string
     */
    public function getDetails()
    {
        return $this->whichOneof("details");
    }

}


