<?php

declare(strict_types=1);

namespace MarketoSDK\Rest\V1;

final class NamedAccountListsJson extends \MarketoSDK\MarketoEngageRESTAPISDK
{
    /** GET /rest/v1/namedAccountLists.json [operationId: getNamedAccountListsUsingGET] */
    /**
     * Get Named Account Lists
     *
     * Retrieves a list of named account list records based on the filter type and values given. Required Permissions: Read-Only Named Account List, Read-Write Named Account List
     */
    public static function get(\MarketoSDK\GetParams\Rest\V1\NamedAccountListsJson $params): \MarketoSDK\DTOs\ResponseOf\NamedAccountList
    {
        return self::client()->resource(\MarketoSDK\Resources\Rest\V1\NamedAccountListsJson::class)->get($params);
    }

    /** POST /rest/v1/namedAccountLists.json [operationId: syncNamedAccountListsUsingPOST] */
    /**
     * Sync Named Account Lists
     *
     * Creates and/or updates named account list records. Required Permissions: Read-Write Named Account List
     */
    public static function post(\MarketoSDK\DTOs\Sync\NamedAccountList\Request $payload): \MarketoSDK\DTOs\ResponseOf\NamedAccountList
    {
        return self::client()->resource(\MarketoSDK\Resources\Rest\V1\NamedAccountListsJson::class)->post($payload);
    }

}
