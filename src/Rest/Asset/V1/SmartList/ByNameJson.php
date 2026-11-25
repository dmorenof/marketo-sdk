<?php

declare(strict_types=1);

namespace MarketoSDK\Rest\Asset\V1\SmartList;

final class ByNameJson extends \MarketoSDK\MarketoEngageRESTAPISDK
{
    /** GET /rest/asset/v1/smartList/byName.json [operationId: getSmartListByNameUsingGET] */
    /**
     * Get Smart List by Name
     *
     * Retrieves a Smart List record by its name. Required Permissions: Read-Asset or Read-Write Asset
     */
    public static function get(\MarketoSDK\GetParams\Rest\Asset\V1\SmartList\ByNameJson $params): \MarketoSDK\DTOs\ResponseOf\SmartList\Response
    {
        return self::client()->resource(\MarketoSDK\Resources\Rest\Asset\V1\SmartList\ByNameJson::class)->get($params);
    }

}
