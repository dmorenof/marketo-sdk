<?php

declare(strict_types=1);

namespace MarketoSDK\Rest\V1\NamedAccountList\ById\NamedAccounts;

final class RemoveJson extends \MarketoSDK\MarketoEngageRESTAPISDK
{
    /** POST /rest/v1/namedAccountList/{id}/namedAccounts/remove.json [operationId: removeNamedAccountListMembersUsingPOST] */
    /**
     * Remove Named Account List Members
     *
     * Removes named account members from a named account list. Required Permissions: Read-Write Named Account
     */
    public static function post(string $id, \MarketoSDK\DTOs\RemoveNamedAccountListMemberRequest $payload): \MarketoSDK\DTOs\ResponseOf\NamedAccount
    {
        return self::client()->resource(\MarketoSDK\Resources\Rest\V1\NamedAccountList\ById\NamedAccounts\RemoveJson::class)->post($id, $payload);
    }

}
