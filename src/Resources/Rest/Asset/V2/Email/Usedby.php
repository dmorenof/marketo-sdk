<?php

declare(strict_types=1);

namespace MarketoSDK\Resources\Rest\Asset\V2\Email;

final class Usedby extends \MarketoSDK\Client
{
    private const array POST = [
        'method' => 'POST',
        'path' => '/rest/asset/v2/email/usedby',
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
                'type' => '\\MarketoSDK\\DTOs\\UsedBy\\Response',
                'schemaNullable' => false,
            ],
            'default' => [
                'type' => '\\MarketoSDK\\DTOs\\ErrorResponse',
                'schemaNullable' => false,
            ],
        ],
        'requestBody' => [
            'type' => '\\MarketoSDK\\DTOs\\UsedBy\\RequestDto',
            'nullable' => false,
            'required' => true,
            'rules' => [],
        ],
    ];

    /**
     * Get Email Used By
     *
     * Returns a list of assets that reference the specified email. Required Permissions: Read-Only Assets, Access Design Studio.
     */
    public function post(\MarketoSDK\PostParams\Rest\Asset\V2\Email\Usedby $params): \MarketoSDK\DTOs\UsedBy\Response|\MarketoSDK\DTOs\ErrorResponse|null
    {
        /** @var \MarketoSDK\DTOs\UsedBy\Response|\MarketoSDK\DTOs\ErrorResponse|null $result */
        $result = $this->executeArguments(self::operation(self::POST), parameters: $params);
        return $result;
    }

}
