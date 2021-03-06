<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/pubsub/v1/pubsub.proto

namespace Google\Cloud\PubSub\V1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * A topic resource.
 *
 * Generated from protobuf message <code>google.pubsub.v1.Topic</code>
 */
class Topic extends \Google\Protobuf\Internal\Message
{
    /**
     * The name of the topic. It must have the format
     * `"projects/{project}/topics/{topic}"`. `{topic}` must start with a letter,
     * and contain only letters (`[A-Za-z]`), numbers (`[0-9]`), dashes (`-`),
     * underscores (`_`), periods (`.`), tildes (`~`), plus (`+`) or percent
     * signs (`%`). It must be between 3 and 255 characters in length, and it
     * must not start with `"goog"`.
     *
     * Generated from protobuf field <code>string name = 1;</code>
     */
    private $name = '';
    /**
     * See <a href="https://cloud.google.com/pubsub/docs/labels"> Creating and managing labels</a>.
     *
     * Generated from protobuf field <code>map<string, string> labels = 2;</code>
     */
    private $labels;
    /**
     * Policy constraining how messages published to the topic may be stored. It
     * is determined when the topic is created based on the policy configured at
     * the project level. It must not be set by the caller in the request to
     * CreateTopic or to UpdateTopic. This field will be populated in the
     * responses for GetTopic, CreateTopic, and UpdateTopic: if not present in the
     * response, then no constraints are in effect.
     *
     * Generated from protobuf field <code>.google.pubsub.v1.MessageStoragePolicy message_storage_policy = 3;</code>
     */
    private $message_storage_policy = null;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $name
     *           The name of the topic. It must have the format
     *           `"projects/{project}/topics/{topic}"`. `{topic}` must start with a letter,
     *           and contain only letters (`[A-Za-z]`), numbers (`[0-9]`), dashes (`-`),
     *           underscores (`_`), periods (`.`), tildes (`~`), plus (`+`) or percent
     *           signs (`%`). It must be between 3 and 255 characters in length, and it
     *           must not start with `"goog"`.
     *     @type array|\Google\Protobuf\Internal\MapField $labels
     *           See <a href="https://cloud.google.com/pubsub/docs/labels"> Creating and managing labels</a>.
     *     @type \Google\Cloud\PubSub\V1\MessageStoragePolicy $message_storage_policy
     *           Policy constraining how messages published to the topic may be stored. It
     *           is determined when the topic is created based on the policy configured at
     *           the project level. It must not be set by the caller in the request to
     *           CreateTopic or to UpdateTopic. This field will be populated in the
     *           responses for GetTopic, CreateTopic, and UpdateTopic: if not present in the
     *           response, then no constraints are in effect.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Pubsub\V1\Pubsub::initOnce();
        parent::__construct($data);
    }

    /**
     * The name of the topic. It must have the format
     * `"projects/{project}/topics/{topic}"`. `{topic}` must start with a letter,
     * and contain only letters (`[A-Za-z]`), numbers (`[0-9]`), dashes (`-`),
     * underscores (`_`), periods (`.`), tildes (`~`), plus (`+`) or percent
     * signs (`%`). It must be between 3 and 255 characters in length, and it
     * must not start with `"goog"`.
     *
     * Generated from protobuf field <code>string name = 1;</code>
     * @return string
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * The name of the topic. It must have the format
     * `"projects/{project}/topics/{topic}"`. `{topic}` must start with a letter,
     * and contain only letters (`[A-Za-z]`), numbers (`[0-9]`), dashes (`-`),
     * underscores (`_`), periods (`.`), tildes (`~`), plus (`+`) or percent
     * signs (`%`). It must be between 3 and 255 characters in length, and it
     * must not start with `"goog"`.
     *
     * Generated from protobuf field <code>string name = 1;</code>
     * @param string $var
     * @return $this
     */
    public function setName($var)
    {
        GPBUtil::checkString($var, True);
        $this->name = $var;

        return $this;
    }

    /**
     * See <a href="https://cloud.google.com/pubsub/docs/labels"> Creating and managing labels</a>.
     *
     * Generated from protobuf field <code>map<string, string> labels = 2;</code>
     * @return \Google\Protobuf\Internal\MapField
     */
    public function getLabels()
    {
        return $this->labels;
    }

    /**
     * See <a href="https://cloud.google.com/pubsub/docs/labels"> Creating and managing labels</a>.
     *
     * Generated from protobuf field <code>map<string, string> labels = 2;</code>
     * @param array|\Google\Protobuf\Internal\MapField $var
     * @return $this
     */
    public function setLabels($var)
    {
        $arr = GPBUtil::checkMapField($var, \Google\Protobuf\Internal\GPBType::STRING, \Google\Protobuf\Internal\GPBType::STRING);
        $this->labels = $arr;

        return $this;
    }

    /**
     * Policy constraining how messages published to the topic may be stored. It
     * is determined when the topic is created based on the policy configured at
     * the project level. It must not be set by the caller in the request to
     * CreateTopic or to UpdateTopic. This field will be populated in the
     * responses for GetTopic, CreateTopic, and UpdateTopic: if not present in the
     * response, then no constraints are in effect.
     *
     * Generated from protobuf field <code>.google.pubsub.v1.MessageStoragePolicy message_storage_policy = 3;</code>
     * @return \Google\Cloud\PubSub\V1\MessageStoragePolicy
     */
    public function getMessageStoragePolicy()
    {
        return $this->message_storage_policy;
    }

    /**
     * Policy constraining how messages published to the topic may be stored. It
     * is determined when the topic is created based on the policy configured at
     * the project level. It must not be set by the caller in the request to
     * CreateTopic or to UpdateTopic. This field will be populated in the
     * responses for GetTopic, CreateTopic, and UpdateTopic: if not present in the
     * response, then no constraints are in effect.
     *
     * Generated from protobuf field <code>.google.pubsub.v1.MessageStoragePolicy message_storage_policy = 3;</code>
     * @param \Google\Cloud\PubSub\V1\MessageStoragePolicy $var
     * @return $this
     */
    public function setMessageStoragePolicy($var)
    {
        GPBUtil::checkMessage($var, \Google\Cloud\PubSub\V1\MessageStoragePolicy::class);
        $this->message_storage_policy = $var;

        return $this;
    }

}

