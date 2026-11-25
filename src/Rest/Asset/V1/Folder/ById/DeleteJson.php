<?php

declare(strict_types=1);

namespace MarketoSDK\Rest\Asset\V1\Folder\ById;

final class DeleteJson extends \MarketoSDK\MarketoEngageRESTAPISDK
{
    /** POST /rest/asset/v1/folder/{id}/delete.json [operationId: deleteFolderUsingPOST] */
    /**
     * Delete Folder
     *
     * Deletes the designated folder. Deletion will fail if the folder has content. Required Permissions: Read-Write Assets
     */
    public static function post(int $id, \MarketoSDK\Requests\Rest\Asset\V1\Folder\ById\DeleteJson\Post $payload): \MarketoSDK\DTOs\ResponseOf\Id\Response
    {
        return self::client()->resource(\MarketoSDK\Resources\Rest\Asset\V1\Folder\ById\DeleteJson::class)->post($id, $payload);
    }
}
