<?php

declare(strict_types=1);

namespace MarketoSDK\Rest\Asset\V1\Program\ById;

final class DeleteJson extends \MarketoSDK\MarketoEngageRESTAPISDK
{
    /** POST /rest/asset/v1/program/{id}/delete.json [operationId: deleteProgramUsingPOST] */
    /**
     * Delete Program
     *
     * Deletes the target program. The program may not contain any assets which are in use outside the program. Required Permissions: Read-Write Assets
     */
    public static function post(int $id): \MarketoSDK\DTOs\ResponseOf\Id\Response
    {
        return self::client()->resource(\MarketoSDK\Resources\Rest\Asset\V1\Program\ById\DeleteJson::class)->post($id);
    }

}
