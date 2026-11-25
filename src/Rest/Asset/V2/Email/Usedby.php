<?php

declare(strict_types=1);

namespace MarketoSDK\Rest\Asset\V2\Email;

final class Usedby extends \MarketoSDK\MarketoEngageRESTAPISDK
{
    /** POST /rest/asset/v2/email/usedby [operationId: getContentUsedByUsingPOST_email] */
    /**
     * Get Email Used By
     *
     * Returns a list of assets that reference the specified email. Required Permissions: Read-Only Assets, Access Design Studio.
     */
    public static function post(\MarketoSDK\PostParams\Rest\Asset\V2\Email\Usedby $params): \MarketoSDK\DTOs\UsedBy\Response|\MarketoSDK\DTOs\ErrorResponse|null
    {
        return self::client()->resource(\MarketoSDK\Resources\Rest\Asset\V2\Email\Usedby::class)->post($params);
    }
}
