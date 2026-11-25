<?php

declare(strict_types=1);

namespace MarketoSDK\Rest\Asset\V1\EmailTemplate\ById;

final class DeleteJson extends \MarketoSDK\MarketoEngageRESTAPISDK
{
    /** POST /rest/asset/v1/emailTemplate/{id}/delete.json [operationId: deleteTemplateUsingPOST] */
    /**
     * Delete Email Template
     *
     * Deletes the designated email template. Required Permissions: Read-Write Assets
     */
    public static function post(int $id): \MarketoSDK\DTOs\ResponseOf\Id\Response
    {
        return self::client()->resource(\MarketoSDK\Resources\Rest\Asset\V1\EmailTemplate\ById\DeleteJson::class)->post($id);
    }
}
