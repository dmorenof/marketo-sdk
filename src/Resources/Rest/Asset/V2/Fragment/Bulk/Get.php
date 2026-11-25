<?php

declare(strict_types=1);

namespace MarketoSDK\Resources\Rest\Asset\V2\Fragment\Bulk;

final class Get extends \MarketoSDK\Client
{
    private const array POST = [
        'method' => 'POST',
        'path' => '/rest/asset/v2/fragment/bulk/get',
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
            'type' => '\\MarketoSDK\\DTOs\\Bulk\\Get\\Request',
            'nullable' => false,
            'required' => true,
            'rules' => [],
        ],
    ];

    /**
     * Bulk Get Fragments
     *
     * Retrieves multiple fragments by their IDs in a single request; each asset is returned in full, including its content. Maximum 20 assets per request. Required Permissions: Read-Only Assets, Access Design Studio, Access Snippet.
     */
    public function post(\MarketoSDK\PostParams\Rest\Asset\V2\Fragment\Bulk\Get $params): \MarketoSDK\DTOs\FragmentNewResponse|\MarketoSDK\DTOs\ErrorResponse|null
    {
        /** @var \MarketoSDK\DTOs\FragmentNewResponse|\MarketoSDK\DTOs\ErrorResponse|null $result */
        $result = $this->executeArguments(self::operation(self::POST), parameters: $params);
        return $result;
    }

}
