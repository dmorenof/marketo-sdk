<?php

declare(strict_types=1);

namespace MarketoSDK\Rest\Asset\V1\StaticList;

final class IdJson extends \MarketoSDK\MarketoEngageRESTAPISDK
{
    /** GET /rest/asset/v1/staticList/{id}.json [operationId: getStaticListByIdUsingGET] */
    /**
     * Get Static List by Id
     *
     * Retrieves a Static List record by its id. Required Permissions: Read-Asset or Read-Write Asset
     */
    public static function get(int $id): \MarketoSDK\DTOs\ResponseOf\StaticList\Response
    {
        return self::client()->resource(\MarketoSDK\Resources\Rest\Asset\V1\StaticList\IdJson::class)->get($id);
    }

    /** POST /rest/asset/v1/staticList/{id}.json [operationId: updateStaticListUsingPOST] */
    /**
     * Update Static List Metadata
     *
     * Updates the metadata of a static list asset. Required Permissions: Read-Write Assets
     */
    public static function post(int $id, \MarketoSDK\DTOs\Update\StaticList\Request $payload): \MarketoSDK\DTOs\ResponseOf\StaticList\Response
    {
        return self::client()->resource(\MarketoSDK\Resources\Rest\Asset\V1\StaticList\IdJson::class)->post($id, $payload);
    }

}
