<?php

declare(strict_types=1);

namespace MarketoSDK\Resources\Rest\V1;

final class NamedAccountListsJson extends \MarketoSDK\Client
{
    private const array GET = [
        'method' => 'GET',
        'path' => '/rest/v1/namedAccountLists.json',
        'responseType' => '\\MarketoSDK\\DTOs\\ResponseOf\\NamedAccountList',
        'querySerialization' => [
            'filterValues' => 'multi',
        ],
    ];

    /**
     * Get Named Account Lists
     *
     * Retrieves a list of named account list records based on the filter type and values given. Required Permissions: Read-Only Named Account List, Read-Write Named Account List
     */
    public function get(\MarketoSDK\GetParams\Rest\V1\NamedAccountListsJson $params): \MarketoSDK\DTOs\ResponseOf\NamedAccountList
    {
        /** @var \MarketoSDK\DTOs\ResponseOf\NamedAccountList $result */
        $result = $this->executeArguments(self::operation(self::GET), parameters: $params);
        return $result;
    }

    private const array POST = [
        'method' => 'POST',
        'path' => '/rest/v1/namedAccountLists.json',
        'responseType' => '\\MarketoSDK\\DTOs\\ResponseOf\\NamedAccountList',
        'requestBody' => [
            'type' => '\\MarketoSDK\\DTOs\\Sync\\NamedAccountList\\Request',
            'nullable' => false,
            'required' => true,
            'rules' => [],
        ],
    ];

    /**
     * Sync Named Account Lists
     *
     * Creates and/or updates named account list records. Required Permissions: Read-Write Named Account List
     */
    public function post(\MarketoSDK\DTOs\Sync\NamedAccountList\Request $payload): \MarketoSDK\DTOs\ResponseOf\NamedAccountList
    {
        /** @var \MarketoSDK\DTOs\ResponseOf\NamedAccountList $result */
        $result = $this->executeBody(self::operation(self::POST), $payload);
        return $result;
    }

}
