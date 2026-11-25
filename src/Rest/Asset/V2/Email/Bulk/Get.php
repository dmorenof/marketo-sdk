<?php

declare(strict_types=1);

namespace MarketoSDK\Rest\Asset\V2\Email\Bulk;

final class Get extends \MarketoSDK\MarketoEngageRESTAPISDK
{
    /** POST /rest/asset/v2/email/bulk/get [operationId: bulkGetUsingPOST_email] */
    /**
     * Bulk Get Emails
     *
     * Retrieves multiple email assets by their IDs in a single request; each asset is returned in full, including its content. Maximum 20 assets per request. Required Permissions: Read-Only Assets, Access Design Studio, Access Email.
     */
    public static function post(\MarketoSDK\PostParams\Rest\Asset\V2\Email\Bulk\Get $params): \MarketoSDK\DTOs\EmailNewResponse|\MarketoSDK\DTOs\ErrorResponse|null
    {
        return self::client()->resource(\MarketoSDK\Resources\Rest\Asset\V2\Email\Bulk\Get::class)->post($params);
    }

}
