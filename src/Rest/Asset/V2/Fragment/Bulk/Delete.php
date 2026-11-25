<?php

declare(strict_types=1);

namespace MarketoSDK\Rest\Asset\V2\Fragment\Bulk;

final class Delete extends \MarketoSDK\MarketoEngageRESTAPISDK
{
    /** POST /rest/asset/v2/fragment/bulk/delete [operationId: bulkDeleteUsingPOST_fragment] */
    /**
     * Bulk Delete Fragments
     *
     * Deletes multiple fragments by their IDs in a single request. Maximum 20 assets per request. Required Permissions: Read-Write Assets, Access Design Studio, Delete Snippet.
     */
    public static function post(\MarketoSDK\PostParams\Rest\Asset\V2\Fragment\Bulk\Delete $params): \MarketoSDK\DTOs\Delete\Response|\MarketoSDK\DTOs\ErrorResponse|null
    {
        return self::client()->resource(\MarketoSDK\Resources\Rest\Asset\V2\Fragment\Bulk\Delete::class)->post($params);
    }

}
