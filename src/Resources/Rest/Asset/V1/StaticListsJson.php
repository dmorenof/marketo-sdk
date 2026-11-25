<?php

declare(strict_types=1);

namespace MarketoSDK\Resources\Rest\Asset\V1;

final class StaticListsJson extends \MarketoSDK\Client
{
    private const array GET = [
        'method' => 'GET',
        'path' => '/rest/asset/v1/staticLists.json',
        'responseType' => '\\MarketoSDK\\DTOs\\ResponseOf\\StaticList\\Response',
    ];

    /**
     * Get Static Lists
     *
     * Retrieves a list of Static List records. Required Permissions: Read-Asset or Read-Write Asset
     */
    public function get(?\MarketoSDK\GetParams\Rest\Asset\V1\StaticListsJson $params = null): \MarketoSDK\DTOs\ResponseOf\StaticList\Response
    {
        /** @var \MarketoSDK\DTOs\ResponseOf\StaticList\Response $result */
        $result = $this->executeArguments(self::operation(self::GET), parameters: $params);
        return $result;
    }

    private const array POST = [
        'method' => 'POST',
        'path' => '/rest/asset/v1/staticLists.json',
        'responseType' => '\\MarketoSDK\\DTOs\\ResponseOf\\StaticList\\Response',
        'requestBody' => [
            'type' => '\\MarketoSDK\\DTOs\\Create\\StaticList\\Request',
            'nullable' => false,
            'required' => true,
            'rules' => [],
        ],
    ];

    /**
     * Create Static List
     *
     * Creates a new Static List. Required Permissions: Read-Write Assets
     */
    public function post(\MarketoSDK\DTOs\Create\StaticList\Request $payload): \MarketoSDK\DTOs\ResponseOf\StaticList\Response
    {
        /** @var \MarketoSDK\DTOs\ResponseOf\StaticList\Response $result */
        $result = $this->executeBody(self::operation(self::POST), $payload);
        return $result;
    }

}
