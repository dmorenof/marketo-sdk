<?php

declare(strict_types=1);

namespace MarketoSDK\Rest\Asset\V1\EmailTemplate\ById;

final class Content extends \MarketoSDK\MarketoEngageRESTAPISDK
{
    /** GET /rest/asset/v1/emailTemplate/{id}/content [operationId: getTemplateContentByIdUsingGET] */
    /**
     * Get Email Template Content by Id
     *
     * Returns the content for a given email template. Required Permissions: Read-Only Assets, Read-Write Assets
     */
    public static function get(int $id, ?\MarketoSDK\GetParams\Rest\Asset\V1\EmailTemplate\ById\Content $params = null): \MarketoSDK\DTOs\ResponseOf\EmailTemplateContent\Response
    {
        return self::client()->resource(\MarketoSDK\Resources\Rest\Asset\V1\EmailTemplate\ById\Content::class)->get($id, $params);
    }

}
