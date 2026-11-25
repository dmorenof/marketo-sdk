<?php

declare(strict_types=1);

namespace MarketoSDK\Rest\V1\Lists;

final class ListIdJson extends \MarketoSDK\MarketoEngageRESTAPISDK
{
    /** GET /rest/v1/lists/{listId}.json [operationId: getListByIdUsingGET] */
    /**
     * Get List by Id
     *
     * Returns a list record by its id. Required Permissions: Read-Only Lead, Read-Write Lead
     */
    public static function get(int $listId): \MarketoSDK\DTOs\ResponseOf\StaticList
    {
        return self::client()->resource(\MarketoSDK\Resources\Rest\V1\Lists\ListIdJson::class)->get($listId);
    }

}
