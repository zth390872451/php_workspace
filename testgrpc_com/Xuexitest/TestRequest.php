<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: Xuexitest .proto

namespace Xuexitest;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 *TestRequest ����ṹ
 *
 * Generated from protobuf message <code>xuexitest.TestRequest</code>
 */
class TestRequest extends \Google\Protobuf\Internal\Message
{
    /**
     * Generated from protobuf field <code>int64 typeid = 1;</code>
     */
    private $typeid = 0;

    public function __construct() {
        \GPBMetadata\Xuexitest::initOnce();
        parent::__construct();
    }

    /**
     * Generated from protobuf field <code>int64 typeid = 1;</code>
     * @return int|string
     */
    public function getTypeid()
    {
        return $this->typeid;
    }

    /**
     * Generated from protobuf field <code>int64 typeid = 1;</code>
     * @param int|string $var
     * @return $this
     */
    public function setTypeid($var)
    {
        GPBUtil::checkInt64($var);
        $this->typeid = $var;

        return $this;
    }

}

