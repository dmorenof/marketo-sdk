<?php

declare(strict_types=1);

namespace MarketoSDK\Resources\Rest\Asset\V2;

final class Fragment extends \MarketoSDK\Client
{
    private const array POST = [
        'method' => 'POST',
        'path' => '/rest/asset/v2/fragment',
        'success' => [
            200,
            'default',
        ],
        'errors' => [
            'default' => '\\MarketoSDK\\DTOs\\ErrorResponse',
        ],
        'errorResponses' => [
            'default' => [
                'type' => '\\MarketoSDK\\DTOs\\ErrorResponse',
                'schemaNullable' => false,
            ],
        ],
        'responseTypes' => [
            200 => [
                'type' => '\\MarketoSDK\\DTOs\\FragmentNewResponse',
                'schemaNullable' => false,
            ],
            'default' => [
                'type' => '\\MarketoSDK\\DTOs\\ErrorResponse',
                'schemaNullable' => false,
            ],
        ],
        'requestBody' => [
            'type' => '\\MarketoSDK\\DTOs\\Create\\Fragment\\Request',
            'nullable' => false,
            'required' => true,
            'rules' => [],
        ],
    ];

    /**
     * Create Fragment
     *
     * Creates a new fragment. Required Permissions: Read-Write Assets, Access Design Studio, Edit Snippet.
     */
    public function post(\MarketoSDK\PostParams\Rest\Asset\V2\Fragment $params): \MarketoSDK\DTOs\FragmentNewResponse|\MarketoSDK\DTOs\ErrorResponse|null
    {
        /** @var \MarketoSDK\DTOs\FragmentNewResponse|\MarketoSDK\DTOs\ErrorResponse|null $result */
        $result = $this->executeArguments(self::operation(self::POST), parameters: $params);
        return $result;
    }

    private const array GET_BY_ID = [
        'method' => 'GET',
        'path' => '/rest/asset/v2/fragment/{id}',
        'success' => [
            200,
            'default',
        ],
        'errors' => [
            'default' => '\\MarketoSDK\\DTOs\\ErrorResponse',
        ],
        'errorResponses' => [
            'default' => [
                'type' => '\\MarketoSDK\\DTOs\\ErrorResponse',
                'schemaNullable' => false,
            ],
        ],
        'responseTypes' => [
            200 => [
                'type' => '\\MarketoSDK\\DTOs\\FragmentNewResponse',
                'schemaNullable' => false,
            ],
            'default' => [
                'type' => '\\MarketoSDK\\DTOs\\ErrorResponse',
                'schemaNullable' => false,
            ],
        ],
    ];

    /**
     * Get Fragment by Id
     *
     * Retrieves a fragment by its ID. Required Permissions: Read-Only Assets, Access Design Studio, Access Snippet.
     */
    public function getById(string $id, \MarketoSDK\GetParams\Rest\Asset\V2\Fragment\ById $params): \MarketoSDK\DTOs\FragmentNewResponse|\MarketoSDK\DTOs\ErrorResponse|null
    {
        /** @var \MarketoSDK\DTOs\FragmentNewResponse|\MarketoSDK\DTOs\ErrorResponse|null $result */
        $result = $this->executeArguments(self::operation(self::GET_BY_ID), path: ['id' => $id], parameters: $params);
        return $result;
    }

}
