<?php

declare(strict_types=1);

namespace MarketoSDK\Rest\Asset\V2\Fragment\Bulk;

final class Get extends \MarketoSDK\MarketoEngageRESTAPISDK
{
    /** POST /rest/asset/v2/fragment/bulk/get [operationId: bulkGetUsingPOST_fragment] */
    /**
     * Bulk Get Fragments
     *
     * Retrieves multiple fragments by their IDs in a single request; each asset is returned in full, including its content. Maximum 20 assets per request. Required Permissions: Read-Only Assets, Access Design Studio, Access Snippet.
     */
    public static function post(\MarketoSDK\PostParams\Rest\Asset\V2\Fragment\Bulk\Get $params): \MarketoSDK\DTOs\FragmentNewResponse|\MarketoSDK\DTOs\ErrorResponse|null
    {
        return self::client()->resource(\MarketoSDK\Resources\Rest\Asset\V2\Fragment\Bulk\Get::class)->post($params);
    }
}
