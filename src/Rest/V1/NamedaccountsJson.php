<?php

declare(strict_types=1);

namespace MarketoSDK\Rest\V1;

final class NamedaccountsJson extends \MarketoSDK\MarketoEngageRESTAPISDK
{
    /** GET /rest/v1/namedaccounts.json [operationId: getNamedAccountsUsingGET] */
    /**
     * Get NamedAccounts
     *
     * Retrieves namedaccount records from the destination instance based on the submitted filter. Required Permissions: Read-Only Named Account, Read-Write Named Account
     */
    public static function get(\MarketoSDK\GetParams\Rest\V1\NamedaccountsJson $params): \MarketoSDK\DTOs\ResponseOf\NamedAccount
    {
        return self::client()->resource(\MarketoSDK\Resources\Rest\V1\NamedaccountsJson::class)->get($params);
    }

    /** POST /rest/v1/namedaccounts.json [operationId: syncNamedAccountsUsingPOST] */
    /**
     * Sync NamedAccounts
     *
     * Allows inserts, updates, or upserts of namedaccounts to the target instance. Required Permissions: Read-Write Named Account
     */
    public static function post(\MarketoSDK\DTOs\Sync\NamedAccount\Request $payload): \MarketoSDK\DTOs\ResponseOf\NamedAccount
    {
        return self::client()->resource(\MarketoSDK\Resources\Rest\V1\NamedaccountsJson::class)->post($payload);
    }

}
