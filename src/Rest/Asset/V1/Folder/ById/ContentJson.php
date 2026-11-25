<?php

declare(strict_types=1);

namespace MarketoSDK\Rest\Asset\V1\Folder\ById;

final class ContentJson extends \MarketoSDK\MarketoEngageRESTAPISDK
{
    /** GET /rest/asset/v1/folder/{id}/content.json [operationId: getFolderContentUsingGET] */
    /**
     * Get Folder Contents
     *
     * Returns records for the contents of a given folder. Required Permissions: Read-Only Assets, Read-Write Assets
     */
    public static function get(int $id, \MarketoSDK\GetParams\Rest\Asset\V1\Folder\ById\ContentJson $params): \MarketoSDK\DTOs\ResponseOf\FolderContent\Response
    {
        return self::client()->resource(\MarketoSDK\Resources\Rest\Asset\V1\Folder\ById\ContentJson::class)->get($id, $params);
    }
}
