<?php

declare(strict_types=1);

namespace MarketoSDK\Resources\Rest\V1\NamedAccountList\ById\NamedAccounts;

final class RemoveJson extends \MarketoSDK\Client
{
    private const array POST = [
        'method' => 'POST',
        'path' => '/rest/v1/namedAccountList/{id}/namedAccounts/remove.json',
        'responseType' => '\\MarketoSDK\\DTOs\\ResponseOf\\NamedAccount',
        'requestBody' => [
            'type' => '\\MarketoSDK\\DTOs\\RemoveNamedAccountListMemberRequest',
            'nullable' => false,
            'required' => true,
            'rules' => [],
        ],
    ];

    /**
     * Remove Named Account List Members
     *
     * Removes named account members from a named account list. Required Permissions: Read-Write Named Account
     */
    public function post(string $id, \MarketoSDK\DTOs\RemoveNamedAccountListMemberRequest $payload): \MarketoSDK\DTOs\ResponseOf\NamedAccount
    {
        /** @var \MarketoSDK\DTOs\ResponseOf\NamedAccount $result */
        $result = $this->executeBody(self::operation(self::POST), $payload, path: ['id' => $id]);
        return $result;
    }
}
