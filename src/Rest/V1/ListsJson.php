<?php

declare(strict_types=1);

namespace MarketoSDK\Rest\V1;

final class ListsJson extends \MarketoSDK\MarketoEngageRESTAPISDK
{
    /** GET /rest/v1/lists.json [operationId: getListsUsingGET] */
    /**
     * Get Lists
     *
     * Returns a set of static list records based on given filter parameters. Required Permissions: Read-Only Lead, Read-Write Lead
     */
    public static function get(?\MarketoSDK\GetParams\Rest\V1\ListsJson $params = null): \MarketoSDK\DTOs\ResponseOf\StaticList
    {
        return self::client()->resource(\MarketoSDK\Resources\Rest\V1\ListsJson::class)->get($params);
    }
}
