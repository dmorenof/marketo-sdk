<?php

declare(strict_types=1);

namespace MarketoSDK\Rest\Asset\V1\EmailTemplate\ById;

final class ContentJson extends \MarketoSDK\MarketoEngageRESTAPISDK
{
    /** POST /rest/asset/v1/emailTemplate/{id}/content.json [operationId: updateEmailTemplateContentUsingPOST] */
    /**
     * Update Email Template Content
     *
     * Updates the content of the given email template. Required Permissions: Read-Write Assets
     */
    public static function post(int $id, ?\MarketoSDK\DTOs\Update\EmailTemplateContent\Request $payload = null): \MarketoSDK\DTOs\ResponseOf\Id\Response
    {
        if (func_num_args() <= 1) {
            return self::client()->resource(\MarketoSDK\Resources\Rest\Asset\V1\EmailTemplate\ById\ContentJson::class)->post($id);
        }
        return self::client()->resource(\MarketoSDK\Resources\Rest\Asset\V1\EmailTemplate\ById\ContentJson::class)->post($id, $payload);
    }

}
