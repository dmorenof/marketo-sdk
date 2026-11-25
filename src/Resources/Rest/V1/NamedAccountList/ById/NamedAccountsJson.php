<?php

declare(strict_types=1);

namespace MarketoSDK\Resources\Rest\V1\NamedAccountList\ById;

final class NamedAccountsJson extends \MarketoSDK\Client
{
    private const array GET = [
        'method' => 'GET',
        'path' => '/rest/v1/namedAccountList/{id}/namedAccounts.json',
        'responseType' => '\\MarketoSDK\\DTOs\\ResponseOf\\NamedAccount',
        'querySerialization' => [
            'fields' => 'multi',
        ],
    ];

    /**
     * Get Named Account List Members
     *
     * Retrieves the named accounts which are members of the given list. Required Permissions: Read-Only Named Account, Read-Write Named Account
     */
    public function get(string $id, ?\MarketoSDK\GetParams\Rest\V1\NamedAccountList\ById\NamedAccountsJson $params = null): \MarketoSDK\DTOs\ResponseOf\NamedAccount
    {
        /** @var \MarketoSDK\DTOs\ResponseOf\NamedAccount $result */
        $result = $this->executeArguments(self::operation(self::GET), path: ['id' => $id], parameters: $params);
        return $result;
    }

    private const array POST = [
        'method' => 'POST',
        'path' => '/rest/v1/namedAccountList/{id}/namedAccounts.json',
        'responseType' => '\\MarketoSDK\\DTOs\\ResponseOf\\NamedAccount',
        'requestBody' => [
            'type' => '\\MarketoSDK\\DTOs\\Add\\NamedAccountListMember\\Request',
            'nullable' => false,
            'required' => true,
            'rules' => [],
        ],
    ];

    /**
     * Add Named Account List Members
     *
     * Adds named account records to a named account list. Required Permissions: Read-Write Named Account
     */
    public function post(string $id, \MarketoSDK\DTOs\Add\NamedAccountListMember\Request $payload): \MarketoSDK\DTOs\ResponseOf\NamedAccount
    {
        /** @var \MarketoSDK\DTOs\ResponseOf\NamedAccount $result */
        $result = $this->executeBody(self::operation(self::POST), $payload, path: ['id' => $id]);
        return $result;
    }
}
