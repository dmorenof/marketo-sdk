<?php

declare(strict_types=1);

namespace MarketoSDK\Rest\Asset\V1\Folder;

final class ByNameJson extends \MarketoSDK\MarketoEngageRESTAPISDK
{
    /** GET /rest/asset/v1/folder/byName.json [operationId: getFolderByNameUsingGET] */
    /**
     * Get Folder by Name
     *
     * Returns a folder record for the given name. Required Permissions: Read-Only Assets, Read-Write Assets
     */
    public static function get(\MarketoSDK\GetParams\Rest\Asset\V1\Folder\ByNameJson $params): \MarketoSDK\DTOs\ResponseOf\Folder\Response
    {
        return self::client()->resource(\MarketoSDK\Resources\Rest\Asset\V1\Folder\ByNameJson::class)->get($params);
    }
}
