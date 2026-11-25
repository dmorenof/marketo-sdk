<?php

declare(strict_types=1);

namespace MarketoSDK\Rest\Asset\V1\EmailTemplate;

final class IdJson extends \MarketoSDK\MarketoEngageRESTAPISDK
{
    /** GET /rest/asset/v1/emailTemplate/{id}.json [operationId: getTemplateByIdUsingGET] */
    /**
     * Get Email Template by Id
     *
     * Returns an email template record by its id. Required Permissions: Read-Only Assets, Read-Write Assets
     */
    public static function get(int $id, ?\MarketoSDK\GetParams\Rest\Asset\V1\EmailTemplate\IdJson $params = null): \MarketoSDK\DTOs\ResponseOf\EmailTemplate\Response
    {
        return self::client()->resource(\MarketoSDK\Resources\Rest\Asset\V1\EmailTemplate\IdJson::class)->get($id, $params);
    }

    /** POST /rest/asset/v1/emailTemplate/{id}.json [operationId: updateEmailTemplateUsingPOST] */
    /**
     * Update Email Template Metadata
     *
     * Updates the metadata for the designated email template. Required Permissions: Read-Write Assets
     */
    public static function post(int $id, \MarketoSDK\DTOs\Update\EmailTemplateMetaData\Request $payload): \MarketoSDK\DTOs\ResponseOf\EmailTemplate\Response
    {
        return self::client()->resource(\MarketoSDK\Resources\Rest\Asset\V1\EmailTemplate\IdJson::class)->post($id, $payload);
    }

}
