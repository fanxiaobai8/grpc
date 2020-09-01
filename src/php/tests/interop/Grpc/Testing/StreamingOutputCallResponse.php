<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: src/proto/grpc/testing/messages.proto

namespace Grpc\Testing;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Server-streaming response, as configured by the request and parameters.
 *
 * Generated from protobuf message <code>grpc.testing.StreamingOutputCallResponse</code>
 */
class StreamingOutputCallResponse extends \Google\Protobuf\Internal\Message
{
    /**
     * Payload to increase response size.
     *
     * Generated from protobuf field <code>.grpc.testing.Payload payload = 1;</code>
     */
    protected $payload = null;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type \Grpc\Testing\Payload $payload
     *           Payload to increase response size.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Src\Proto\Grpc\Testing\Messages::initOnce();
        parent::__construct($data);
    }

    /**
     * Payload to increase response size.
     *
     * Generated from protobuf field <code>.grpc.testing.Payload payload = 1;</code>
     * @return \Grpc\Testing\Payload
     */
    public function getPayload()
    {
        return isset($this->payload) ? $this->payload : null;
    }

    public function hasPayload()
    {
        return isset($this->payload);
    }

    public function clearPayload()
    {
        unset($this->payload);
    }

    /**
     * Payload to increase response size.
     *
     * Generated from protobuf field <code>.grpc.testing.Payload payload = 1;</code>
     * @param \Grpc\Testing\Payload $var
     * @return $this
     */
    public function setPayload($var)
    {
        GPBUtil::checkMessage($var, \Grpc\Testing\Payload::class);
        $this->payload = $var;

        return $this;
    }

}

