<?php

declare(strict_types=1);

namespace MarketoSDK\Resources\Rest\V1\Namedaccounts;

final class DeleteJson extends \MarketoSDK\Client
{
    private const array POST = [
        'method' => 'POST',
        'path' => '/rest/v1/namedaccounts/delete.json',
        'responseType' => '\\MarketoSDK\\DTOs\\ResponseOf\\NamedAccount',
        'requestBody' => [
            'type' => '\\MarketoSDK\\DTOs\\Delete\\NamedAccount\\Request',
            'nullable' => false,
            'required' => true,
            'rules' => [],
        ],
    ];

    /**
     * Delete NamedAccounts
     *
     * Deletes a list of namedaccount records from the target instance. Input records should have only one member, based on the value of 'dedupeBy'. Required Permissions: Read-Write Named Account
     */
    public function post(\MarketoSDK\DTOs\Delete\NamedAccount\Request $payload): \MarketoSDK\DTOs\ResponseOf\NamedAccount
    {
        /** @var \MarketoSDK\DTOs\ResponseOf\NamedAccount $result */
        $result = $this->executeBody(self::operation(self::POST), $payload);
        return $result;
    }

}
