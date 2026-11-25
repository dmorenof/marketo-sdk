<?php

declare(strict_types=1);

namespace MarketoSDK\Rest\V1\Activities;

final class PagingtokenJson extends \MarketoSDK\MarketoEngageRESTAPISDK
{
    /** GET /rest/v1/activities/pagingtoken.json [operationId: getActivitiesPagingTokenUsingGET] */
    /**
     * Get Paging Token
     *
     * Returns a paging token for use in retrieving activities and data value changes. Required Permissions: Read-Only Activity, Read-Write Activity
     */
    public static function get(\MarketoSDK\GetParams\Rest\V1\Activities\PagingtokenJson $params): \MarketoSDK\DTOs\ResponseOfVoid
    {
        return self::client()->resource(\MarketoSDK\Resources\Rest\V1\Activities\PagingtokenJson::class)->get($params);
    }
}
