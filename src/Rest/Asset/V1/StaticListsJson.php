<?php

declare(strict_types=1);

namespace MarketoSDK\Rest\Asset\V1;

final class StaticListsJson extends \MarketoSDK\MarketoEngageRESTAPISDK
{
    /** GET /rest/asset/v1/staticLists.json [operationId: getStaticListsUsingGET] */
    /**
     * Get Static Lists
     *
     * Retrieves a list of Static List records. Required Permissions: Read-Asset or Read-Write Asset
     */
    public static function get(?\MarketoSDK\GetParams\Rest\Asset\V1\StaticListsJson $params = null): \MarketoSDK\DTOs\ResponseOf\StaticList\Response
    {
        return self::client()->resource(\MarketoSDK\Resources\Rest\Asset\V1\StaticListsJson::class)->get($params);
    }

    /** POST /rest/asset/v1/staticLists.json [operationId: createStaticListUsingPOST] */
    /**
     * Create Static List
     *
     * Creates a new Static List. Required Permissions: Read-Write Assets
     */
    public static function post(\MarketoSDK\DTOs\Create\StaticList\Request $payload): \MarketoSDK\DTOs\ResponseOf\StaticList\Response
    {
        return self::client()->resource(\MarketoSDK\Resources\Rest\Asset\V1\StaticListsJson::class)->post($payload);
    }
}
