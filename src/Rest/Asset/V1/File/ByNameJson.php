<?php

declare(strict_types=1);

namespace MarketoSDK\Rest\Asset\V1\File;

final class ByNameJson extends \MarketoSDK\MarketoEngageRESTAPISDK
{
    /** GET /rest/asset/v1/file/byName.json [operationId: getFileByNameUsingGET] */
    /**
     * Get File by Name
     *
     * Returns files records for the given name. Required Permissions: Read-Only Assets, Read-Write Assets
     */
    public static function get(\MarketoSDK\GetParams\Rest\Asset\V1\File\ByNameJson $params): \MarketoSDK\DTOs\ResponseOf\File\Response
    {
        return self::client()->resource(\MarketoSDK\Resources\Rest\Asset\V1\File\ByNameJson::class)->get($params);
    }
}
