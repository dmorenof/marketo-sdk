<?php

declare(strict_types=1);

namespace MarketoSDK\Rest\Asset\V1\Email\ById;

final class FullContentJson extends \MarketoSDK\MarketoEngageRESTAPISDK
{
    /** GET /rest/asset/v1/email/{id}/fullContent.json [operationId: getEmailFullContentUsingGET] */
    /**
     * Get Email Full Content
     *
     * Returns the serialized HTML version of the email. Required Permissions: Read-Only Assets, Read-Write Assets. If leadId is passed in the request: Read-Only Lead, Read-Write Lead.
     */
    public static function get(int $id, ?\MarketoSDK\GetParams\Rest\Asset\V1\Email\ById\FullContentJson $params = null): \MarketoSDK\DTOs\ResponseOf\GetEmailFullContent\Response
    {
        return self::client()->resource(\MarketoSDK\Resources\Rest\Asset\V1\Email\ById\FullContentJson::class)->get($id, $params);
    }

    /** POST /rest/asset/v1/email/{id}/fullContent.json [operationId: createEmailFullContentUsingPOST] */
    /**
     * Update Email Full Content
     *
     * Replaces the HTML of an Email that has had its relationship broken from its template. Required Permissions: Read-Write Assets
     */
    public static function post(int $id, \MarketoSDK\DTOs\Update\EmailFullContent\Request $payload): \MarketoSDK\DTOs\ResponseOf\UpdateEmailFullContent\Response
    {
        return self::client()->resource(\MarketoSDK\Resources\Rest\Asset\V1\Email\ById\FullContentJson::class)->post($id, $payload);
    }

}
