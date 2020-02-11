<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/monitoring/v3/metric_service.proto

namespace Google\Cloud\Monitoring\V3;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * The `DeleteMetricDescriptor` request.
 *
 * Generated from protobuf message <code>google.monitoring.v3.DeleteMetricDescriptorRequest</code>
 */
class DeleteMetricDescriptorRequest extends \Google\Protobuf\Internal\Message
{
    /**
     * Required. The metric descriptor on which to execute the request. The format is
     * `"projects/{project_id_or_number}/metricDescriptors/{metric_id}"`.
     * An example of `{metric_id}` is:
     * `"custom.googleapis.com/my_test_metric"`.
     *
     * Generated from protobuf field <code>string name = 3 [(.google.api.field_behavior) = REQUIRED, (.google.api.resource_reference) = {</code>
     */
    private $name = '';

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $name
     *           Required. The metric descriptor on which to execute the request. The format is
     *           `"projects/{project_id_or_number}/metricDescriptors/{metric_id}"`.
     *           An example of `{metric_id}` is:
     *           `"custom.googleapis.com/my_test_metric"`.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Monitoring\V3\MetricService::initOnce();
        parent::__construct($data);
    }

    /**
     * Required. The metric descriptor on which to execute the request. The format is
     * `"projects/{project_id_or_number}/metricDescriptors/{metric_id}"`.
     * An example of `{metric_id}` is:
     * `"custom.googleapis.com/my_test_metric"`.
     *
     * Generated from protobuf field <code>string name = 3 [(.google.api.field_behavior) = REQUIRED, (.google.api.resource_reference) = {</code>
     * @return string
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * Required. The metric descriptor on which to execute the request. The format is
     * `"projects/{project_id_or_number}/metricDescriptors/{metric_id}"`.
     * An example of `{metric_id}` is:
     * `"custom.googleapis.com/my_test_metric"`.
     *
     * Generated from protobuf field <code>string name = 3 [(.google.api.field_behavior) = REQUIRED, (.google.api.resource_reference) = {</code>
     * @param string $var
     * @return $this
     */
    public function setName($var)
    {
        GPBUtil::checkString($var, True);
        $this->name = $var;

        return $this;
    }

}

