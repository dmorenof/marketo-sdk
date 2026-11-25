<?php

declare(strict_types=1);

namespace MarketoSDK\Rest\Asset\V1\SmartList;

final class IdJson extends \MarketoSDK\MarketoEngageRESTAPISDK
{
    /** GET /rest/asset/v1/smartList/{id}.json [operationId: getSmartListByIdUsingGET] */
    /**
     * Get Smart List by Id
     *
     * Retrieves a Smart List record by its id. Required Permissions: Read-Asset or Read-Write Asset
     */
    public static function get(int $id, ?\MarketoSDK\GetParams\Rest\Asset\V1\SmartList\IdJson $params = null): \MarketoSDK\DTOs\ResponseOf\SmartListResponseWithRules
    {
        return self::client()->resource(\MarketoSDK\Resources\Rest\Asset\V1\SmartList\IdJson::class)->get($id, $params);
    }

}
