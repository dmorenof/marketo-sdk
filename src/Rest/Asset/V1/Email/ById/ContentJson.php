<?php

declare(strict_types=1);

namespace MarketoSDK\Rest\Asset\V1\Email\ById;

final class ContentJson extends \MarketoSDK\MarketoEngageRESTAPISDK
{
    /** GET /rest/asset/v1/email/{id}/content.json [operationId: getEmailContentByIdUsingGET] */
    /**
     * Get Email Content
     *
     * Returns the content of the designated email. Required Permissions: Read-Only Assets, Read-Write Assets
     */
    public static function get(int $id, ?\MarketoSDK\GetParams\Rest\Asset\V1\Email\ById\ContentJson $params = null): \MarketoSDK\DTOs\ResponseOf\EmailContent\Response
    {
        return self::client()->resource(\MarketoSDK\Resources\Rest\Asset\V1\Email\ById\ContentJson::class)->get($id, $params);
    }

    /** POST /rest/asset/v1/email/{id}/content.json [operationId: updateEmailContentUsingPOST] */
    /**
     * Update Email Content
     *
     * Updates the content of an email. Required Permissions: Read-Write Assets
     */
    public static function post(int $id, \MarketoSDK\DTOs\Update\EmailComponentData\Request $payload): \MarketoSDK\DTOs\ResponseOf\Id\Response
    {
        return self::client()->resource(\MarketoSDK\Resources\Rest\Asset\V1\Email\ById\ContentJson::class)->post($id, $payload);
    }
}
