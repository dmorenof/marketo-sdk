<?php

declare(strict_types=1);

namespace MarketoSDK\Rest\Asset\V2\Fragment;

final class Usedby extends \MarketoSDK\MarketoEngageRESTAPISDK
{
    /** POST /rest/asset/v2/fragment/usedby [operationId: getContentUsedByUsingPOST_fragment] */
    /**
     * Get Fragment Used By
     *
     * Returns a list of assets that reference the specified fragment. Required Permissions: Read-Only Assets, Access Design Studio.
     */
    public static function post(\MarketoSDK\PostParams\Rest\Asset\V2\Fragment\Usedby $params): \MarketoSDK\DTOs\UsedBy\Response|\MarketoSDK\DTOs\ErrorResponse|null
    {
        return self::client()->resource(\MarketoSDK\Resources\Rest\Asset\V2\Fragment\Usedby::class)->post($params);
    }
}
