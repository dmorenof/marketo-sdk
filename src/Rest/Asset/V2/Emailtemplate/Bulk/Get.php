<?php

declare(strict_types=1);

namespace MarketoSDK\Rest\Asset\V2\Emailtemplate\Bulk;

final class Get extends \MarketoSDK\MarketoEngageRESTAPISDK
{
    /** POST /rest/asset/v2/emailtemplate/bulk/get [operationId: bulkGetUsingPOST_emailtemplate] */
    /**
     * Bulk Get Email Templates
     *
     * Retrieves multiple email templates by their IDs in a single request; each asset is returned in full, including its content. Maximum 20 assets per request. Required Permissions: Read-Only Assets, Access Design Studio, Access Email Template.
     */
    public static function post(\MarketoSDK\PostParams\Rest\Asset\V2\Emailtemplate\Bulk\Get $params): \MarketoSDK\DTOs\Email\TemplateNew\Response|\MarketoSDK\DTOs\ErrorResponse|null
    {
        return self::client()->resource(\MarketoSDK\Resources\Rest\Asset\V2\Emailtemplate\Bulk\Get::class)->post($params);
    }

}
