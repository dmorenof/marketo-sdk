<?php

declare(strict_types=1);

namespace MarketoSDK\Rest\Asset\V1\Email\ById;

final class DeleteJson extends \MarketoSDK\MarketoEngageRESTAPISDK
{
    /** POST /rest/asset/v1/email/{id}/delete.json [operationId: deleteEmailUsingPOST] */
    /**
     * Delete Email
     *
     * Deletes the target email. Required Permissions: Read-Write Assets
     */
    public static function post(int $id): \MarketoSDK\DTOs\ResponseOf\Id\Response
    {
        return self::client()->resource(\MarketoSDK\Resources\Rest\Asset\V1\Email\ById\DeleteJson::class)->post($id);
    }

}
