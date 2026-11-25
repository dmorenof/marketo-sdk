<?php

declare(strict_types=1);

namespace MarketoSDK\Rest\V1\Namedaccounts;

final class DescribeJson extends \MarketoSDK\MarketoEngageRESTAPISDK
{
    /** GET /rest/v1/namedaccounts/describe.json [operationId: describeUsingGET_3] */
    /**
     * Describe NamedAccounts
     *
     * Returns metadata about namedaccounts and the fields available for interaction via the API. Required Permissions: Read-Only Named Account, Read-Write Named Account
     */
    public static function get(): \MarketoSDK\DTOs\ResponseOf\ObjectMetaData
    {
        return self::client()->resource(\MarketoSDK\Resources\Rest\V1\Namedaccounts\DescribeJson::class)->get();
    }
}
