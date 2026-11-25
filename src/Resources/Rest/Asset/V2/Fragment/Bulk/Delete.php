<?php

declare(strict_types=1);

namespace MarketoSDK\Resources\Rest\Asset\V2\Fragment\Bulk;

final class Delete extends \MarketoSDK\Client
{
    private const array POST = [
        'method' => 'POST',
        'path' => '/rest/asset/v2/fragment/bulk/delete',
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
                'type' => '\\MarketoSDK\\DTOs\\Delete\\Response',
                'schemaNullable' => false,
            ],
            'default' => [
                'type' => '\\MarketoSDK\\DTOs\\ErrorResponse',
                'schemaNullable' => false,
            ],
        ],
        'requestBody' => [
            'type' => '\\MarketoSDK\\DTOs\\Bulk\\Delete\\Request',
            'nullable' => false,
            'required' => true,
            'rules' => [],
        ],
    ];

    /**
     * Bulk Delete Fragments
     *
     * Deletes multiple fragments by their IDs in a single request. Maximum 20 assets per request. Required Permissions: Read-Write Assets, Access Design Studio, Delete Snippet.
     */
    public function post(\MarketoSDK\PostParams\Rest\Asset\V2\Fragment\Bulk\Delete $params): \MarketoSDK\DTOs\Delete\Response|\MarketoSDK\DTOs\ErrorResponse|null
    {
        /** @var \MarketoSDK\DTOs\Delete\Response|\MarketoSDK\DTOs\ErrorResponse|null $result */
        $result = $this->executeArguments(self::operation(self::POST), parameters: $params);
        return $result;
    }

}
