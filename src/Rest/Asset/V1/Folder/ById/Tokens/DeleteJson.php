<?php

declare(strict_types=1);

namespace MarketoSDK\Rest\Asset\V1\Folder\ById\Tokens;

final class DeleteJson extends \MarketoSDK\MarketoEngageRESTAPISDK
{
    /** POST /rest/asset/v1/folder/{id}/tokens/delete.json [operationId: deleteTokenByNameUsingPOST] */
    /**
     * Delete Token by Name
     *
     * Deletes a token with the given name from the parent folder. Required Permissions: Read-Write Assets
     */
    public static function post(int $id, \MarketoSDK\DTOs\Delete\Token\Request $payload): \MarketoSDK\DTOs\ResponseOf\Id\Response
    {
        return self::client()->resource(\MarketoSDK\Resources\Rest\Asset\V1\Folder\ById\Tokens\DeleteJson::class)->post($id, $payload);
    }
}
