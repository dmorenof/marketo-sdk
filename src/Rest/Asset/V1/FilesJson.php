<?php

declare(strict_types=1);

namespace MarketoSDK\Rest\Asset\V1;

final class FilesJson extends \MarketoSDK\MarketoEngageRESTAPISDK
{
    /** GET /rest/asset/v1/files.json [operationId: getFilesUsingGET] */
    /**
     * Get Files
     *
     * Returns the files from the given folder. Required Permissions: Read-Only Assets, Read-Write Assets
     */
    public static function get(?\MarketoSDK\GetParams\Rest\Asset\V1\FilesJson $params = null): \MarketoSDK\DTOs\ResponseOf\File\Response
    {
        return self::client()->resource(\MarketoSDK\Resources\Rest\Asset\V1\FilesJson::class)->get($params);
    }

    /** POST /rest/asset/v1/files.json [operationId: createFileUsingPOST] */
    /**
     * Create File
     *
     * Creates a new file from the included payload. Required Permissions: Read-Write Assets
     */
    public static function post(\MarketoSDK\DTOs\Create\File\Request $payload): \MarketoSDK\DTOs\ResponseOf\File\Response
    {
        return self::client()->resource(\MarketoSDK\Resources\Rest\Asset\V1\FilesJson::class)->post($payload);
    }
}
