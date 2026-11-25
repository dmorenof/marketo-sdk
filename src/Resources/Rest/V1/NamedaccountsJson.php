<?php

declare(strict_types=1);

namespace MarketoSDK\Resources\Rest\V1;

final class NamedaccountsJson extends \MarketoSDK\Client
{
    private const array GET = [
        'method' => 'GET',
        'path' => '/rest/v1/namedaccounts.json',
        'responseType' => '\\MarketoSDK\\DTOs\\ResponseOf\\NamedAccount',
        'querySerialization' => [
            'fields' => 'multi',
            'filterValues' => 'multi',
        ],
    ];

    /**
     * Get NamedAccounts
     *
     * Retrieves namedaccount records from the destination instance based on the submitted filter. Required Permissions: Read-Only Named Account, Read-Write Named Account
     */
    public function get(\MarketoSDK\GetParams\Rest\V1\NamedaccountsJson $params): \MarketoSDK\DTOs\ResponseOf\NamedAccount
    {
        /** @var \MarketoSDK\DTOs\ResponseOf\NamedAccount $result */
        $result = $this->executeArguments(self::operation(self::GET), parameters: $params);
        return $result;
    }

    private const array POST = [
        'method' => 'POST',
        'path' => '/rest/v1/namedaccounts.json',
        'responseType' => '\\MarketoSDK\\DTOs\\ResponseOf\\NamedAccount',
        'requestBody' => [
            'type' => '\\MarketoSDK\\DTOs\\Sync\\NamedAccount\\Request',
            'nullable' => false,
            'required' => true,
            'rules' => [],
        ],
    ];

    /**
     * Sync NamedAccounts
     *
     * Allows inserts, updates, or upserts of namedaccounts to the target instance. Required Permissions: Read-Write Named Account
     */
    public function post(\MarketoSDK\DTOs\Sync\NamedAccount\Request $payload): \MarketoSDK\DTOs\ResponseOf\NamedAccount
    {
        /** @var \MarketoSDK\DTOs\ResponseOf\NamedAccount $result */
        $result = $this->executeBody(self::operation(self::POST), $payload);
        return $result;
    }

}
