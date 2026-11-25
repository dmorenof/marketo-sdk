<?php

declare(strict_types=1);

namespace MarketoSDK\Rest\V1\Namedaccounts;

final class DeleteJson extends \MarketoSDK\MarketoEngageRESTAPISDK
{
    /** POST /rest/v1/namedaccounts/delete.json [operationId: deleteNamedAccountsUsingPOST] */
    /**
     * Delete NamedAccounts
     *
     * Deletes a list of namedaccount records from the target instance. Input records should have only one member, based on the value of 'dedupeBy'. Required Permissions: Read-Write Named Account
     */
    public static function post(\MarketoSDK\DTOs\Delete\NamedAccount\Request $payload): \MarketoSDK\DTOs\ResponseOf\NamedAccount
    {
        return self::client()->resource(\MarketoSDK\Resources\Rest\V1\Namedaccounts\DeleteJson::class)->post($payload);
    }

}
