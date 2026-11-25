<?php

declare(strict_types=1);

namespace MarketoSDK\Rest\Asset\V2\Fragment\Bulk;

final class Usedby extends \MarketoSDK\MarketoEngageRESTAPISDK
{
    /** POST /rest/asset/v2/fragment/bulk/usedby [operationId: bulkUsedByUsingPOST_fragment] */
    /**
     * Bulk Get Fragments Used By
     *
     * Returns, for each of the specified fragments, whether it is used and the number of places it is used (count) — not the referencing assets themselves. Maximum 50 assets per request. Required Permissions: Read-Only Assets, Access Design Studio.
     */
    public static function post(\MarketoSDK\PostParams\Rest\Asset\V2\Fragment\Bulk\Usedby $params): \MarketoSDK\DTOs\Bulk\UsedBy\Response|\MarketoSDK\DTOs\ErrorResponse|null
    {
        return self::client()->resource(\MarketoSDK\Resources\Rest\Asset\V2\Fragment\Bulk\Usedby::class)->post($params);
    }

}
