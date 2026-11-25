<?php

declare(strict_types=1);

namespace MarketoSDK\Rest\Asset\V1\Email;

final class IdJson extends \MarketoSDK\MarketoEngageRESTAPISDK
{
    /** GET /rest/asset/v1/email/{id}.json [operationId: getEmailByIdUsingGET] */
    /**
     * Get Email By Id
     *
     * Returns an email record by its id. Required Permissions: Read-Only Assets, Read-Write Assets
     */
    public static function get(int $id, ?\MarketoSDK\GetParams\Rest\Asset\V1\Email\IdJson $params = null): \MarketoSDK\DTOs\ResponseOf\Email\Response
    {
        return self::client()->resource(\MarketoSDK\Resources\Rest\Asset\V1\Email\IdJson::class)->get($id, $params);
    }

    /** POST /rest/asset/v1/email/{id}.json [operationId: updateEmailUsingPOST] */
    /**
     * Update Email Metadata
     *
     * Updates the metadata of an email asset. Required Permissions: Read-Write Assets
     */
    public static function post(int $id, \MarketoSDK\DTOs\Update\EmailMetaData\Request $payload): \MarketoSDK\DTOs\ResponseOf\Email\Response
    {
        return self::client()->resource(\MarketoSDK\Resources\Rest\Asset\V1\Email\IdJson::class)->post($id, $payload);
    }

}
