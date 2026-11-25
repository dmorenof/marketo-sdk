<?php

declare(strict_types=1);

namespace MarketoSDK\Rest\V1\Customobjects\ByCustomObjectName;

final class DescribeJson extends \MarketoSDK\MarketoEngageRESTAPISDK
{
    /** GET /rest/v1/customobjects/{customObjectName}/describe.json [operationId: describeUsingGET_1] */
    /**
     * Describe Custom Objects
     *
     * Returns metadata regarding a given custom object. Required Permissions: Read-Only Custom Object, Read-Write Custom Object
     */
    public static function get(string $customObjectName): \MarketoSDK\DTOs\ResponseOf\ObjectMetaData
    {
        return self::client()->resource(\MarketoSDK\Resources\Rest\V1\Customobjects\ByCustomObjectName\DescribeJson::class)->get($customObjectName);
    }
}
