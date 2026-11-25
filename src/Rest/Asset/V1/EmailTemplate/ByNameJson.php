<?php

declare(strict_types=1);

namespace MarketoSDK\Rest\Asset\V1\EmailTemplate;

final class ByNameJson extends \MarketoSDK\MarketoEngageRESTAPISDK
{
    /** GET /rest/asset/v1/emailTemplate/byName.json [operationId: getTemplateByNameUsingGET] */
    /**
     * Get Email Template by Name
     *
     * Retrieves and email template record by the given name. Required Permissions: Read-Only Assets, Read-Write Assets
     */
    public static function get(\MarketoSDK\GetParams\Rest\Asset\V1\EmailTemplate\ByNameJson $params): \MarketoSDK\DTOs\ResponseOf\EmailTemplate\Response
    {
        return self::client()->resource(\MarketoSDK\Resources\Rest\Asset\V1\EmailTemplate\ByNameJson::class)->get($params);
    }

}
