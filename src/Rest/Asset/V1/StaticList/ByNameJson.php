<?php

declare(strict_types=1);

namespace MarketoSDK\Rest\Asset\V1\StaticList;

final class ByNameJson extends \MarketoSDK\MarketoEngageRESTAPISDK
{
    /** GET /rest/asset/v1/staticList/byName.json [operationId: getStaticListByNameUsingGET] */
    /**
     * Get Static List by Name
     *
     * Retrieves a Static List record by its name. Required Permissions: Read-Asset or Read-Write Asset
     */
    public static function get(\MarketoSDK\GetParams\Rest\Asset\V1\StaticList\ByNameJson $params): \MarketoSDK\DTOs\ResponseOf\StaticList\Response
    {
        return self::client()->resource(\MarketoSDK\Resources\Rest\Asset\V1\StaticList\ByNameJson::class)->get($params);
    }
}
