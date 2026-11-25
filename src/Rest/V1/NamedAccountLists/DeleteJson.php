<?php

declare(strict_types=1);

namespace MarketoSDK\Rest\V1\NamedAccountLists;

final class DeleteJson extends \MarketoSDK\MarketoEngageRESTAPISDK
{
    /** POST /rest/v1/namedAccountLists/delete.json [operationId: deleteNamedAccountListsUsingPOST] */
    /**
     * Delete Named Account Lists
     *
     * Delete named account lists by dedupe fields, or by id field. Required Permissions: Read-Write Named Account List
     */
    public static function post(\MarketoSDK\DTOs\Delete\NamedAccountList\Request $payload): \MarketoSDK\DTOs\ResponseOf\NamedAccountList
    {
        return self::client()->resource(\MarketoSDK\Resources\Rest\V1\NamedAccountLists\DeleteJson::class)->post($payload);
    }
}
