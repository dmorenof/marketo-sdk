<?php

declare(strict_types=1);

namespace MarketoSDK\Rest\V1\NamedAccountList\ById;

final class NamedAccountsJson extends \MarketoSDK\MarketoEngageRESTAPISDK
{
    /** GET /rest/v1/namedAccountList/{id}/namedAccounts.json [operationId: getNamedAccountListMembersUsingGET] */
    /**
     * Get Named Account List Members
     *
     * Retrieves the named accounts which are members of the given list. Required Permissions: Read-Only Named Account, Read-Write Named Account
     */
    public static function get(string $id, ?\MarketoSDK\GetParams\Rest\V1\NamedAccountList\ById\NamedAccountsJson $params = null): \MarketoSDK\DTOs\ResponseOf\NamedAccount
    {
        return self::client()->resource(\MarketoSDK\Resources\Rest\V1\NamedAccountList\ById\NamedAccountsJson::class)->get($id, $params);
    }

    /** POST /rest/v1/namedAccountList/{id}/namedAccounts.json [operationId: addNamedAccountListMembersUsingPOST] */
    /**
     * Add Named Account List Members
     *
     * Adds named account records to a named account list. Required Permissions: Read-Write Named Account
     */
    public static function post(string $id, \MarketoSDK\DTOs\Add\NamedAccountListMember\Request $payload): \MarketoSDK\DTOs\ResponseOf\NamedAccount
    {
        return self::client()->resource(\MarketoSDK\Resources\Rest\V1\NamedAccountList\ById\NamedAccountsJson::class)->post($id, $payload);
    }
}
