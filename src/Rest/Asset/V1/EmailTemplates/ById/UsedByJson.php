<?php

declare(strict_types=1);

namespace MarketoSDK\Rest\Asset\V1\EmailTemplates\ById;

final class UsedByJson extends \MarketoSDK\MarketoEngageRESTAPISDK
{
    /** GET /rest/asset/v1/emailTemplates/{id}/usedBy.json [operationId: getEmailTemplateUsedByUsingGET] */
    /**
     * Get Email Template Used By
     *
     * Returns a list of email records which depend on a given email template. Required Permissions: Read-Only Assets, Read-Write Assets
     */
    public static function get(int $id, ?\MarketoSDK\GetParams\Rest\Asset\V1\EmailTemplates\ById\UsedByJson $params = null): \MarketoSDK\DTOs\ResponseOf\EmailTemplateUsedBy\Response
    {
        return self::client()->resource(\MarketoSDK\Resources\Rest\Asset\V1\EmailTemplates\ById\UsedByJson::class)->get($id, $params);
    }

}
