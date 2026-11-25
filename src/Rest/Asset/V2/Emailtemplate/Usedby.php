<?php

declare(strict_types=1);

namespace MarketoSDK\Rest\Asset\V2\Emailtemplate;

final class Usedby extends \MarketoSDK\MarketoEngageRESTAPISDK
{
    /** POST /rest/asset/v2/emailtemplate/usedby [operationId: getContentUsedByUsingPOST_emailtemplate] */
    /**
     * Get Email Template Used By
     *
     * Returns a list of assets that reference the specified email template. Required Permissions: Read-Only Assets, Access Design Studio.
     */
    public static function post(\MarketoSDK\PostParams\Rest\Asset\V2\Emailtemplate\Usedby $params): \MarketoSDK\DTOs\UsedBy\Response|\MarketoSDK\DTOs\ErrorResponse|null
    {
        return self::client()->resource(\MarketoSDK\Resources\Rest\Asset\V2\Emailtemplate\Usedby::class)->post($params);
    }
}
