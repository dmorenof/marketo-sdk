<?php

declare(strict_types=1);

namespace MarketoSDK\Rest\V1\Customobjects\Schema\ByApiName;

final class DescribeJson extends \MarketoSDK\MarketoEngageRESTAPISDK
{
    /** GET /rest/v1/customobjects/schema/{apiName}/describe.json [operationId: describeCustomObjectTypeUsingGET] */
    /**
     * Describe Custom Object Type
     *
     * Returns metadata regarding a given custom object type (including relationships and fields). Required Permissions: Read-Only Custom Object Type, Read-Write Custom Object Type
     */
    public static function get(string $apiName, ?\MarketoSDK\GetParams\Rest\V1\Customobjects\Schema\ByApiName\DescribeJson $params = null): \MarketoSDK\DTOs\ResponseOf\ObjectMetaData
    {
        return self::client()->resource(\MarketoSDK\Resources\Rest\V1\Customobjects\Schema\ByApiName\DescribeJson::class)->get($apiName, $params);
    }
}
