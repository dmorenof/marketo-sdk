<?php

declare(strict_types=1);

namespace MarketoSDK\Rest\Asset\V1\File;

final class IdJson extends \MarketoSDK\MarketoEngageRESTAPISDK
{
    /** GET /rest/asset/v1/file/{id}.json [operationId: getFileByIdUsingGET] */
    /**
     * Get File by Id
     *
     * Returns the file record for the given id. Required Permissions: Read-Only Assets, Read-Write Assets
     */
    public static function get(int $id): \MarketoSDK\DTOs\ResponseOf\File\Response
    {
        return self::client()->resource(\MarketoSDK\Resources\Rest\Asset\V1\File\IdJson::class)->get($id);
    }

}
