<?php

declare(strict_types=1);

namespace MarketoSDK\Rest\V1\Activities\External\Type\ByApiName;

final class DescribeJson extends \MarketoSDK\MarketoEngageRESTAPISDK
{
    /** GET /rest/v1/activities/external/type/{apiName}/describe.json [operationId: describeCustomActivityTypeUsingGET] */
    /**
     * Describe Custom Activity Type
     *
     * Returns metadata for a specific custom activity type. Required Permissions: Read-Only Activity Metadata, Read-Write Activity Metadata
     */
    public static function get(string $apiName, ?\MarketoSDK\GetParams\Rest\V1\Activities\External\Type\ByApiName\DescribeJson $params = null): \MarketoSDK\DTOs\ResponseOf\CustomActivityType
    {
        return self::client()->resource(\MarketoSDK\Resources\Rest\V1\Activities\External\Type\ByApiName\DescribeJson::class)->get($apiName, $params);
    }
}
