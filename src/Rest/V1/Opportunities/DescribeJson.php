<?php

declare(strict_types=1);

namespace MarketoSDK\Rest\V1\Opportunities;

final class DescribeJson extends \MarketoSDK\MarketoEngageRESTAPISDK
{
    /** GET /rest/v1/opportunities/describe.json [operationId: describeUsingGET_4] */
    /**
     * Describe Opportunity
     *
     * Returns object and field metadata for Opportunity type records in the target instance. Required Permissions: Read-Only Opportunity, Read-Write Named Opportunity
     */
    public static function get(): \MarketoSDK\DTOs\ResponseOf\ObjectMetaData
    {
        return self::client()->resource(\MarketoSDK\Resources\Rest\V1\Opportunities\DescribeJson::class)->get();
    }
}
