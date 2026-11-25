<?php

declare(strict_types=1);

namespace MarketoSDK\Rest\Asset\V2\Emailtemplate\Bulk;

final class Usedby extends \MarketoSDK\MarketoEngageRESTAPISDK
{
    /** POST /rest/asset/v2/emailtemplate/bulk/usedby [operationId: bulkUsedByUsingPOST_emailtemplate] */
    /**
     * Bulk Get Email Templates Used By
     *
     * Returns, for each of the specified email templates, whether it is used and the number of places it is used (count) — not the referencing assets themselves. Maximum 50 assets per request. Required Permissions: Read-Only Assets, Access Design Studio.
     */
    public static function post(\MarketoSDK\PostParams\Rest\Asset\V2\Emailtemplate\Bulk\Usedby $params): \MarketoSDK\DTOs\Bulk\UsedBy\Response|\MarketoSDK\DTOs\ErrorResponse|null
    {
        return self::client()->resource(\MarketoSDK\Resources\Rest\Asset\V2\Emailtemplate\Bulk\Usedby::class)->post($params);
    }

}
