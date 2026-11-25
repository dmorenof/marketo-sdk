<?php

declare(strict_types=1);

namespace MarketoSDK\Rest\V1\Companies;

final class DescribeJson extends \MarketoSDK\MarketoEngageRESTAPISDK
{
    /** GET /rest/v1/companies/describe.json [operationId: describeUsingGET] */
    /**
     * Describe Companies
     *
     * Returns metadata about companies and the fields available for interaction via the API. Required Permissions: Read-Only Company, Read-Write Company
     */
    public static function get(): \MarketoSDK\DTOs\ResponseOf\ObjectMetaData
    {
        return self::client()->resource(\MarketoSDK\Resources\Rest\V1\Companies\DescribeJson::class)->get();
    }
}
