<?php

declare(strict_types=1);

namespace MarketoSDK\Rest\Asset\V1\Folder;

final class IdJson extends \MarketoSDK\MarketoEngageRESTAPISDK
{
    /** GET /rest/asset/v1/folder/{id}.json [operationId: getFolderByIdUsingGET] */
    /**
     * Get Folder by Id
     *
     * Returns the folder record with the given id. Required Permissions: Read-Only Assets, Read-Write Assets
     */
    public static function get(int $id, \MarketoSDK\GetParams\Rest\Asset\V1\Folder\IdJson $params): \MarketoSDK\DTOs\ResponseOf\Folder\Response
    {
        return self::client()->resource(\MarketoSDK\Resources\Rest\Asset\V1\Folder\IdJson::class)->get($id, $params);
    }

    /** POST /rest/asset/v1/folder/{id}.json [operationId: updateFolderUsingPOST] */
    /**
     * Update Folder Metadata
     *
     * Updates the metadata for a given folder. Required Permissions: Read-Write Assets
     */
    public static function post(int $id, \MarketoSDK\DTOs\Update\Folder\Request $payload): \MarketoSDK\DTOs\ResponseOf\Folder\Response
    {
        return self::client()->resource(\MarketoSDK\Resources\Rest\Asset\V1\Folder\IdJson::class)->post($id, $payload);
    }

}
