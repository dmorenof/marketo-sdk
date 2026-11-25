<?php

declare(strict_types=1);

namespace MarketoSDK\Resources\Rest\Asset\V2\Fragment\Bulk;

final class Usedby extends \MarketoSDK\Client
{
    private const array POST = [
        'method' => 'POST',
        'path' => '/rest/asset/v2/fragment/bulk/usedby',
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
                'type' => '\\MarketoSDK\\DTOs\\Bulk\\UsedBy\\Response',
                'schemaNullable' => false,
            ],
            'default' => [
                'type' => '\\MarketoSDK\\DTOs\\ErrorResponse',
                'schemaNullable' => false,
            ],
        ],
        'requestBody' => [
            'type' => '\\MarketoSDK\\DTOs\\Bulk\\UsedBy\\Request',
            'nullable' => false,
            'required' => true,
            'rules' => [],
        ],
    ];

    /**
     * Bulk Get Fragments Used By
     *
     * Returns, for each of the specified fragments, whether it is used and the number of places it is used (count) — not the referencing assets themselves. Maximum 50 assets per request. Required Permissions: Read-Only Assets, Access Design Studio.
     */
    public function post(\MarketoSDK\PostParams\Rest\Asset\V2\Fragment\Bulk\Usedby $params): \MarketoSDK\DTOs\Bulk\UsedBy\Response|\MarketoSDK\DTOs\ErrorResponse|null
    {
        /** @var \MarketoSDK\DTOs\Bulk\UsedBy\Response|\MarketoSDK\DTOs\ErrorResponse|null $result */
        $result = $this->executeArguments(self::operation(self::POST), parameters: $params);
        return $result;
    }

}
