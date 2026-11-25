<?php

declare(strict_types=1);

namespace MarketoSDK\Rest\Asset\V1;

final class SmartListsJson extends \MarketoSDK\MarketoEngageRESTAPISDK
{
    /** GET /rest/asset/v1/smartLists.json [operationId: getSmartListsUsingGET] */
    /**
     * Get Smart Lists
     *
     * Retrieves a list of user created Smart List records. Required Permissions: Read-Asset or Read-Write Asset
     */
    public static function get(?\MarketoSDK\GetParams\Rest\Asset\V1\SmartListsJson $params = null): \MarketoSDK\DTOs\ResponseOf\SmartList\Response
    {
        return self::client()->resource(\MarketoSDK\Resources\Rest\Asset\V1\SmartListsJson::class)->get($params);
    }

    /** POST /rest/asset/v1/smartLists.json [operationId: createSmartListUsingPOST] */
    /**
     * Create Smart List
     *
     * Creates a new Smart List. Required Permissions: Read-Write Assets
     */
    public static function post(\MarketoSDK\DTOs\Create\SmartList\Request $payload): \MarketoSDK\DTOs\ResponseOf\SmartList\Response
    {
        return self::client()->resource(\MarketoSDK\Resources\Rest\Asset\V1\SmartListsJson::class)->post($payload);
    }
}
