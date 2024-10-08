<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/osconfig/v1/inventory.proto

namespace Google\Cloud\OsConfig\V1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * A response message for listing inventory data for all VMs in a specified
 * location.
 *
 * Generated from protobuf message <code>google.cloud.osconfig.v1.ListInventoriesResponse</code>
 */
class ListInventoriesResponse extends \Google\Protobuf\Internal\Message
{
    /**
     * List of inventory objects.
     *
     * Generated from protobuf field <code>repeated .google.cloud.osconfig.v1.Inventory inventories = 1;</code>
     */
    private $inventories;
    /**
     * The pagination token to retrieve the next page of inventory objects.
     *
     * Generated from protobuf field <code>string next_page_token = 2;</code>
     */
    protected $next_page_token = '';

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type array<\Google\Cloud\OsConfig\V1\Inventory>|\Google\Protobuf\Internal\RepeatedField $inventories
     *           List of inventory objects.
     *     @type string $next_page_token
     *           The pagination token to retrieve the next page of inventory objects.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Cloud\Osconfig\V1\Inventory::initOnce();
        parent::__construct($data);
    }

    /**
     * List of inventory objects.
     *
     * Generated from protobuf field <code>repeated .google.cloud.osconfig.v1.Inventory inventories = 1;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getInventories()
    {
        return $this->inventories;
    }

    /**
     * List of inventory objects.
     *
     * Generated from protobuf field <code>repeated .google.cloud.osconfig.v1.Inventory inventories = 1;</code>
     * @param array<\Google\Cloud\OsConfig\V1\Inventory>|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setInventories($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::MESSAGE, \Google\Cloud\OsConfig\V1\Inventory::class);
        $this->inventories = $arr;

        return $this;
    }

    /**
     * The pagination token to retrieve the next page of inventory objects.
     *
     * Generated from protobuf field <code>string next_page_token = 2;</code>
     * @return string
     */
    public function getNextPageToken()
    {
        return $this->next_page_token;
    }

    /**
     * The pagination token to retrieve the next page of inventory objects.
     *
     * Generated from protobuf field <code>string next_page_token = 2;</code>
     * @param string $var
     * @return $this
     */
    public function setNextPageToken($var)
    {
        GPBUtil::checkString($var, True);
        $this->next_page_token = $var;

        return $this;
    }

}

