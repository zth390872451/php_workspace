<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: xuexitest.proto

namespace Xuexitest;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * <pre>
 *返回数据类型
 * </pre>
 *
 * Protobuf type <code>xuexitest.TestReply.GetData</code>
 */
class TestReply_GetData extends \Google\Protobuf\Internal\Message
{
    /**
     * <code>int64 id = 1;</code>
     */
    private $id = 0;
    /**
     * <code>string name = 2;</code>
     */
    private $name = '';

    public function __construct() {
        \GPBMetadata\Xuexitest::initOnce();
        parent::__construct();
    }

    /**
     * <code>int64 id = 1;</code>
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * <code>int64 id = 1;</code>
     */
    public function setId($var)
    {
        GPBUtil::checkInt64($var);
        $this->id = $var;
    }

    /**
     * <code>string name = 2;</code>
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * <code>string name = 2;</code>
     */
    public function setName($var)
    {
        GPBUtil::checkString($var, True);
        $this->name = $var;
    }

}
