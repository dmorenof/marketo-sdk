<?php

declare(strict_types=1);

namespace MarketoSDK\Rest\V1\Salespersons;

final class DescribeJson extends \MarketoSDK\MarketoEngageRESTAPISDK
{
    /** GET /rest/v1/salespersons/describe.json [operationId: describeUsingGET_5] */
    /**
     * Describe SalesPersons
     *
     * Returns metadata about salespersons and the fields available for interaction via the API. Required Permissions: Read-Only Sales Person, Read-Write Sales Person
     */
    public static function get(): \MarketoSDK\DTOs\ResponseOf\ObjectMetaData
    {
        return self::client()->resource(\MarketoSDK\Resources\Rest\V1\Salespersons\DescribeJson::class)->get();
    }
}
