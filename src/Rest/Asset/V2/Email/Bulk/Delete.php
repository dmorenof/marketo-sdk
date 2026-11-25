<?php

declare(strict_types=1);

namespace MarketoSDK\Rest\Asset\V2\Email\Bulk;

final class Delete extends \MarketoSDK\MarketoEngageRESTAPISDK
{
    /** POST /rest/asset/v2/email/bulk/delete [operationId: bulkDeleteUsingPOST_email] */
    /**
     * Bulk Delete Emails
     *
     * Deletes multiple email assets by their IDs in a single request. Maximum 20 assets per request. Required Permissions: Read-Write Assets, Access Design Studio, Delete Email.
     */
    public static function post(\MarketoSDK\PostParams\Rest\Asset\V2\Email\Bulk\Delete $params): \MarketoSDK\DTOs\Delete\Response|\MarketoSDK\DTOs\ErrorResponse|null
    {
        return self::client()->resource(\MarketoSDK\Resources\Rest\Asset\V2\Email\Bulk\Delete::class)->post($params);
    }
}
