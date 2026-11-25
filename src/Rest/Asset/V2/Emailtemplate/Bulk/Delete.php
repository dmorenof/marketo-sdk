<?php

declare(strict_types=1);

namespace MarketoSDK\Rest\Asset\V2\Emailtemplate\Bulk;

final class Delete extends \MarketoSDK\MarketoEngageRESTAPISDK
{
    /** POST /rest/asset/v2/emailtemplate/bulk/delete [operationId: bulkDeleteUsingPOST_emailtemplate] */
    /**
     * Bulk Delete Email Templates
     *
     * Deletes multiple email templates by their IDs in a single request. Maximum 20 assets per request. Required Permissions: Read-Write Assets, Access Design Studio, Delete Email Template.
     */
    public static function post(\MarketoSDK\PostParams\Rest\Asset\V2\Emailtemplate\Bulk\Delete $params): \MarketoSDK\DTOs\Delete\Response|\MarketoSDK\DTOs\ErrorResponse|null
    {
        return self::client()->resource(\MarketoSDK\Resources\Rest\Asset\V2\Emailtemplate\Bulk\Delete::class)->post($params);
    }

}
