<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/osconfig/v1/os_policy.proto

namespace Google\Cloud\OsConfig\V1\OSPolicy\Resource\ExecResource;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * A file or script to execute.
 *
 * Generated from protobuf message <code>google.cloud.osconfig.v1.OSPolicy.Resource.ExecResource.Exec</code>
 */
class Exec extends \Google\Protobuf\Internal\Message
{
    /**
     * Optional arguments to pass to the source during execution.
     *
     * Generated from protobuf field <code>repeated string args = 3;</code>
     */
    private $args;
    /**
     * Required. The script interpreter to use.
     *
     * Generated from protobuf field <code>.google.cloud.osconfig.v1.OSPolicy.Resource.ExecResource.Exec.Interpreter interpreter = 4 [(.google.api.field_behavior) = REQUIRED];</code>
     */
    protected $interpreter = 0;
    /**
     * Only recorded for enforce Exec.
     * Path to an output file (that is created by this Exec) whose
     * content will be recorded in OSPolicyResourceCompliance after a
     * successful run. Absence or failure to read this file will result in
     * this ExecResource being non-compliant. Output file size is limited to
     * 100K bytes.
     *
     * Generated from protobuf field <code>string output_file_path = 5;</code>
     */
    protected $output_file_path = '';
    protected $source;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type \Google\Cloud\OsConfig\V1\OSPolicy\Resource\File $file
     *           A remote or local file.
     *     @type string $script
     *           An inline script.
     *           The size of the script is limited to 1024 characters.
     *     @type array<string>|\Google\Protobuf\Internal\RepeatedField $args
     *           Optional arguments to pass to the source during execution.
     *     @type int $interpreter
     *           Required. The script interpreter to use.
     *     @type string $output_file_path
     *           Only recorded for enforce Exec.
     *           Path to an output file (that is created by this Exec) whose
     *           content will be recorded in OSPolicyResourceCompliance after a
     *           successful run. Absence or failure to read this file will result in
     *           this ExecResource being non-compliant. Output file size is limited to
     *           100K bytes.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Cloud\Osconfig\V1\OsPolicy::initOnce();
        parent::__construct($data);
    }

    /**
     * A remote or local file.
     *
     * Generated from protobuf field <code>.google.cloud.osconfig.v1.OSPolicy.Resource.File file = 1;</code>
     * @return \Google\Cloud\OsConfig\V1\OSPolicy\Resource\File|null
     */
    public function getFile()
    {
        return $this->readOneof(1);
    }

    public function hasFile()
    {
        return $this->hasOneof(1);
    }

    /**
     * A remote or local file.
     *
     * Generated from protobuf field <code>.google.cloud.osconfig.v1.OSPolicy.Resource.File file = 1;</code>
     * @param \Google\Cloud\OsConfig\V1\OSPolicy\Resource\File $var
     * @return $this
     */
    public function setFile($var)
    {
        GPBUtil::checkMessage($var, \Google\Cloud\OsConfig\V1\OSPolicy\Resource\File::class);
        $this->writeOneof(1, $var);

        return $this;
    }

    /**
     * An inline script.
     * The size of the script is limited to 1024 characters.
     *
     * Generated from protobuf field <code>string script = 2;</code>
     * @return string
     */
    public function getScript()
    {
        return $this->readOneof(2);
    }

    public function hasScript()
    {
        return $this->hasOneof(2);
    }

    /**
     * An inline script.
     * The size of the script is limited to 1024 characters.
     *
     * Generated from protobuf field <code>string script = 2;</code>
     * @param string $var
     * @return $this
     */
    public function setScript($var)
    {
        GPBUtil::checkString($var, True);
        $this->writeOneof(2, $var);

        return $this;
    }

    /**
     * Optional arguments to pass to the source during execution.
     *
     * Generated from protobuf field <code>repeated string args = 3;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getArgs()
    {
        return $this->args;
    }

    /**
     * Optional arguments to pass to the source during execution.
     *
     * Generated from protobuf field <code>repeated string args = 3;</code>
     * @param array<string>|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setArgs($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::STRING);
        $this->args = $arr;

        return $this;
    }

    /**
     * Required. The script interpreter to use.
     *
     * Generated from protobuf field <code>.google.cloud.osconfig.v1.OSPolicy.Resource.ExecResource.Exec.Interpreter interpreter = 4 [(.google.api.field_behavior) = REQUIRED];</code>
     * @return int
     */
    public function getInterpreter()
    {
        return $this->interpreter;
    }

    /**
     * Required. The script interpreter to use.
     *
     * Generated from protobuf field <code>.google.cloud.osconfig.v1.OSPolicy.Resource.ExecResource.Exec.Interpreter interpreter = 4 [(.google.api.field_behavior) = REQUIRED];</code>
     * @param int $var
     * @return $this
     */
    public function setInterpreter($var)
    {
        GPBUtil::checkEnum($var, \Google\Cloud\OsConfig\V1\OSPolicy\Resource\ExecResource\Exec\Interpreter::class);
        $this->interpreter = $var;

        return $this;
    }

    /**
     * Only recorded for enforce Exec.
     * Path to an output file (that is created by this Exec) whose
     * content will be recorded in OSPolicyResourceCompliance after a
     * successful run. Absence or failure to read this file will result in
     * this ExecResource being non-compliant. Output file size is limited to
     * 100K bytes.
     *
     * Generated from protobuf field <code>string output_file_path = 5;</code>
     * @return string
     */
    public function getOutputFilePath()
    {
        return $this->output_file_path;
    }

    /**
     * Only recorded for enforce Exec.
     * Path to an output file (that is created by this Exec) whose
     * content will be recorded in OSPolicyResourceCompliance after a
     * successful run. Absence or failure to read this file will result in
     * this ExecResource being non-compliant. Output file size is limited to
     * 100K bytes.
     *
     * Generated from protobuf field <code>string output_file_path = 5;</code>
     * @param string $var
     * @return $this
     */
    public function setOutputFilePath($var)
    {
        GPBUtil::checkString($var, True);
        $this->output_file_path = $var;

        return $this;
    }

    /**
     * @return string
     */
    public function getSource()
    {
        return $this->whichOneof("source");
    }

}


