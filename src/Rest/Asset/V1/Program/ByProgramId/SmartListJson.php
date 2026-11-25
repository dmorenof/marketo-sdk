<?php

declare(strict_types=1);

namespace MarketoSDK\Rest\Asset\V1\Program\ByProgramId;

final class SmartListJson extends \MarketoSDK\MarketoEngageRESTAPISDK
{
    /** GET /rest/asset/v1/program/{programId}/smartList.json [operationId: getSmartListByProgramIdUsingGET] */
    /**
     * Get Smart List by Program Id
     *
     * Retrieves a Smart List record by its Email Program id. Required Permissions: Read-Asset or Read-Write Asset
     */
    public static function get(int $programId, ?\MarketoSDK\GetParams\Rest\Asset\V1\Program\ByProgramId\SmartListJson $params = null): \MarketoSDK\DTOs\ResponseOf\SmartListResponseWithRules
    {
        return self::client()->resource(\MarketoSDK\Resources\Rest\Asset\V1\Program\ByProgramId\SmartListJson::class)->get($programId, $params);
    }
}
