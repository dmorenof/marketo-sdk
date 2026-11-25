<?php

declare(strict_types=1);

namespace MarketoSDK\Resources\Rest\Asset\V2\Fragment;

final class Filter extends \MarketoSDK\Client
{
    private const array GET = [
        'method' => 'GET',
        'path' => '/rest/asset/v2/fragment/filter',
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
                'type' => '\\MarketoSDK\\DTOs\\Fragment\\Filter\\Response',
                'schemaNullable' => false,
            ],
            'default' => [
                'type' => '\\MarketoSDK\\DTOs\\ErrorResponse',
                'schemaNullable' => false,
            ],
        ],
        'querySerialization' => [
            'status' => 'multi',
        ],
    ];

    /**
     * List Fragments
     *
     * Filters and lists fragments by the given criteria. Required Permissions: Read-Only Assets, Access Design Studio, Access Snippet.
     */
    public function get(\MarketoSDK\GetParams\Rest\Asset\V2\Fragment\Filter $params): \MarketoSDK\DTOs\Fragment\Filter\Response|\MarketoSDK\DTOs\ErrorResponse|null
    {
        /** @var \MarketoSDK\DTOs\Fragment\Filter\Response|\MarketoSDK\DTOs\ErrorResponse|null $result */
        $result = $this->executeArguments(self::operation(self::GET), parameters: $params);
        return $result;
    }
}
