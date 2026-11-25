<?php

declare(strict_types=1);

namespace MarketoSDK\Rest\Asset\V1;

final class FoldersJson extends \MarketoSDK\MarketoEngageRESTAPISDK
{
    /** GET /rest/asset/v1/folders.json [operationId: getFolderUsingGET] */
    /**
     * Get Folders
     *
     * Retrieves child folders from within a given root folder. Required Permissions: Read-Only Assets, Read-Write Assets
     */
    public static function get(?\MarketoSDK\GetParams\Rest\Asset\V1\FoldersJson $params = null): \MarketoSDK\DTOs\ResponseOf\Folder\Response
    {
        return self::client()->resource(\MarketoSDK\Resources\Rest\Asset\V1\FoldersJson::class)->get($params);
    }

    /** POST /rest/asset/v1/folders.json [operationId: createFolderUsingPOST] */
    /**
     * Create Folder
     *
     * Creates a new folder. Required Permissions: Read-Write Assets
     */
    public static function post(\MarketoSDK\DTOs\Create\Folder\Request $payload): \MarketoSDK\DTOs\ResponseOf\Folder\Response
    {
        return self::client()->resource(\MarketoSDK\Resources\Rest\Asset\V1\FoldersJson::class)->post($payload);
    }

}
