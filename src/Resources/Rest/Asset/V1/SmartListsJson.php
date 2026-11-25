<?php

declare(strict_types=1);

namespace MarketoSDK\Resources\Rest\Asset\V1;

final class SmartListsJson extends \MarketoSDK\Client
{
    private const array GET = [
        'method' => 'GET',
        'path' => '/rest/asset/v1/smartLists.json',
        'responseType' => '\\MarketoSDK\\DTOs\\ResponseOf\\SmartList\\Response',
    ];

    /**
     * Get Smart Lists
     *
     * Retrieves a list of user created Smart List records. Required Permissions: Read-Asset or Read-Write Asset
     */
    public function get(?\MarketoSDK\GetParams\Rest\Asset\V1\SmartListsJson $params = null): \MarketoSDK\DTOs\ResponseOf\SmartList\Response
    {
        /** @var \MarketoSDK\DTOs\ResponseOf\SmartList\Response $result */
        $result = $this->executeArguments(self::operation(self::GET), parameters: $params);
        return $result;
    }

    private const array POST = [
        'method' => 'POST',
        'path' => '/rest/asset/v1/smartLists.json',
        'responseType' => '\\MarketoSDK\\DTOs\\ResponseOf\\SmartList\\Response',
        'requestBody' => [
            'type' => '\\MarketoSDK\\DTOs\\Create\\SmartList\\Request',
            'nullable' => false,
            'required' => true,
            'rules' => [],
        ],
    ];

    /**
     * Create Smart List
     *
     * Creates a new Smart List. Required Permissions: Read-Write Assets
     */
    public function post(\MarketoSDK\DTOs\Create\SmartList\Request $payload): \MarketoSDK\DTOs\ResponseOf\SmartList\Response
    {
        /** @var \MarketoSDK\DTOs\ResponseOf\SmartList\Response $result */
        $result = $this->executeBody(self::operation(self::POST), $payload);
        return $result;
    }

}
