<?php

declare(strict_types=1);

namespace MarketoSDK\Rest\Asset\V2\Fragment;

final class Filter extends \MarketoSDK\MarketoEngageRESTAPISDK
{
    /** GET /rest/asset/v2/fragment/filter [operationId: filterContentUsingGET_fragment] */
    /**
     * List Fragments
     *
     * Filters and lists fragments by the given criteria. Required Permissions: Read-Only Assets, Access Design Studio, Access Snippet.
     */
    public static function get(\MarketoSDK\GetParams\Rest\Asset\V2\Fragment\Filter $params): \MarketoSDK\DTOs\Fragment\Filter\Response|\MarketoSDK\DTOs\ErrorResponse|null
    {
        return self::client()->resource(\MarketoSDK\Resources\Rest\Asset\V2\Fragment\Filter::class)->get($params);
    }

}
